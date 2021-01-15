function initChat(email){
    console.log(email)
    var docRef = db.collection("messages").doc(email);
    docRef.get().then(function(doc) {
        if (doc.exists) {
            loadmessage(email);
        } else {
            db.collection("messages").doc(email).set({
                messageCount: 0
            })  
        } 
    });  
}


function mcountListener(countCheck,email){
    db.collection("messages").doc(email)
    .onSnapshot(function(doc) {
        var mcount = doc.data().messageCount;
        //console.log("updated")
        if(countCheck != mcount){
            newmessage(mcount,email)
        }
        //console.log(mcount)
    });
}

function loadmessage(email){

    const chat_main = document.getElementById('chat-main')

    db.collection("messages").doc(email).collection("messages").orderBy("order","asc").get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            //console.log(doc.data());
            var sender = doc.data().sender;
            var textcont = document.createElement("div");
            
            if(sender == 'f'){
                textcont.setAttribute("id", "chat-sent");
            }
            else{
                textcont.setAttribute("id", "chat-recieved");               
            }
            
            textcont.innerText = doc.data().text;
            chat_main.append(textcont);

            //console.log(sender)

        });
    });
    var docRef = db.collection("messages").doc(email);
    docRef.get().then(function(doc) {
        var mcount = doc.data().messageCount;
        countCheck = mcount;
        //console.log(mcount)
        mcountListener(countCheck,email)     
    });   
    
}

function sendmessage(email){

    let message = document.getElementById("typedmessage").value
    //console.log(message)

    var docRef = db.collection("messages").doc(email);
    docRef.get().then(function(doc) {
        var mcount = doc.data().messageCount;
        mcount = mcount + 1
        
        db.collection("messages").doc(email).update({
            messageCount: mcount,
        })
        console.log(email)

        db.collection("messages").doc(email).collection("messages").doc().set({
            sender: "f",
            text: message,
            order: mcount,
            status: "unread",
            timestamp: firebase.firestore.Timestamp.fromDate(new Date())
        })      
    });      
}

function newmessage(mcount,email){

    const chat_main = document.getElementById('chat-main')

    //console.log(mcount)

    db.collection("messages").doc(email).collection("messages").where("order", "==", mcount)
    .get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            //console.log(doc.data());
            var sender = doc.data().sender;
            var textcont = document.createElement("div");
            
            if(sender == 'f'){
                textcont.setAttribute("id", "chat-sent");
            }
            else{
                textcont.setAttribute("id", "chat-recieved");               
            }
            
            textcont.innerText = doc.data().text;
            chat_main.append(textcont);

            //console.log(sender)

        });
    });
}

function test(abc){
 console.log(abc)
}
