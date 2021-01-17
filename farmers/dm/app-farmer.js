function test(abc){
    console.log(abc)
   }

var selected = '';

function initChat(email){
    var docRef = db.collection("messages").doc(email);
    docRef.get().then(function(doc) {
        if (doc.exists) {
            selected = email;
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

    const chat_main = document.getElementById('chatcont')
    chat_main.innerHTML = ""
    selected = email;
    //console.log(selected)
    //console.log("hdcbsjdhcb"); 

    db.collection("messages").doc(email).collection("messages").orderBy("order","asc").get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            //console.log(doc.data());
            var sender = doc.data().sender;
            var textcont = document.createElement('div')
            textcont.setAttribute("class","msgbox row")
                          
            if(sender == "f"){
                
                textcont.innerHTML = "<div class='msg'><p class='msgtext grey lighten-2  card horizontal'>" + doc.data().text + "</p></div>";
            }
            else
            {
                textcont.innerHTML = "<div class='msg2'><p class='msgtext green card horizontal'>" + doc.data().text + "</p></div>";
            }
            //textcont.innerText = doc.data().text;
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

function sendmessage(){

    let message = document.getElementById("mtext").value
    //console.log(message)

    var docRef = db.collection("messages").doc(selected);
    docRef.get().then(function(doc) {
        var mcount = doc.data().messageCount;
        mcount = mcount + 1
        
        db.collection("messages").doc(selected).update({
            messageCount: mcount,
        })
        console.log(selected)

        db.collection("messages").doc(selected).collection("messages").doc().set({
            sender: "f",
            text: message,
            order: mcount,
            status: "unread",
            timestamp: firebase.firestore.Timestamp.fromDate(new Date())
        })      
    });      
}

function newmessage(mcount,email){
    const chat_main = document.getElementById('chatcont')
    //console.log(mcount)
    db.collection("messages").doc(email).collection("messages").where("order", "==", mcount)
    .get().then(function(querySnapshot){
        querySnapshot.forEach(function(doc){    
            //console.log(doc.data());
            var sender = doc.data().sender;
            var textcont = document.createElement("div");
            textcont.setAttribute("class","msgbox row")
                            
            if(sender == "s"){
                textcont.innerHTML = "<div class='msg'><p class='msgtext green card horizontal'>" + doc.data().text + "</p></div>";
            }
            else
            {
                textcont.innerHTML = "<div class='msg2'><p class='msgtext grey lighten-2 card horizontal'>" + doc.data().text + "</p></div>";
            }
            //textcont.innerText = doc.data().text;
            chat_main.append(textcont);
            //console.log(sender)

        });
    });
}

function loadlist(){

    const listdiv = document.getElementById('list')
    listdiv.innerHTML = "";

    //db.collection("messages").doc(email).collection("messages").orderBy("order","asc").get().then(function(querySnapshot)
    db.collection("messages").orderBy("ltime","desc").get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            //console.log(doc.data());
            var textcont = document.createElement('div')
            textcont.setAttribute("class","fbox")
            //textcont.setAttribute("id",doc.id)
            textcont.innerHTML = "onclick = test('asd')"
            //textcont.onclick = test(doc.id)        
            textcont.innerHTML = `<div id=` + doc.id + ` onclick = loadmessage(this.id) class='row s12 card grey darken-1'><div class='col s3 fimg'><i class='center-align valign-wrapper medium material-icons'>account_box</i></div><div class='col s8 ftext'><div class='fname'><h6><b>${doc.data().name}</b></h6></div> <div class='fnew'>See New Messages</div> </div></div>`;

            //textcont.innerText = doc.data().text;
            listdiv.append(textcont);
            //console.log(sender)
        });
    });
    //var docRef = db.collection("messages").doc(email);
    //docRef.get().then(function(doc) {
        //var mcount = doc.data().messageCount;
        //countCheck = mcount;
        //console.log(mcount)
        //mcountListener(countCheck,email)     
    //});       
}
