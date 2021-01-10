function mcountListener(countCheck){
    db.collection("messages").doc("farmer1")
    .onSnapshot(function(doc) {
        let mcount = doc.data().messageCount;
        //console.log("updated")
        if(countCheck != mcount){
            newmessage(mcount)
        }
        //console.log(mcount)
    });
}

function loadmessage(useremail,msgno){

    const chat_main = document.getElementById('chat-main')

    db.collection("messages").doc("farmer1").collection("messages").orderBy("order","asc").get().then(function(querySnapshot) {
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
    var docRef = db.collection("messages").doc("farmer1");
    docRef.get().then(function(doc) {
        var mcount = doc.data().messageCount;
        countCheck = mcount;
        //console.log(mcount)
        mcountListener(countCheck)     
    });   
    
}

function sendmessage(mtext,mcount){

    let message = document.getElementById("typedmessage").value
    //console.log(message)

    var docRef = db.collection("messages").doc("farmer1");
    docRef.get().then(function(doc) {
        var mcount = doc.data().messageCount;
        mcount = mcount + 1
        
        db.collection("messages").doc("farmer1").update({
            messageCount: mcount,
        })
        //console.log(mcount)

        db.collection("messages").doc("farmer1").collection("messages").doc().set({
            sender: "f",
            text: message,
            order: mcount,
            status: "unread",
            timestamp: firebase.firestore.Timestamp.fromDate(new Date())
        })      
    });      
}

function newmessage(mcount){

    const chat_main = document.getElementById('chat-main')

    //console.log(mcount)

    db.collection("messages").doc("farmer1").collection("messages").where("order", "==", mcount)
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
