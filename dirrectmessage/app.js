/*<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>



    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyChNqC7x16YTPbbdGY7qcJkcKkW_yGR2sE",
            authDomain: "webprojecty2.firebaseapp.com",
            databaseURL: "https://webprojecty2-default-rtdb.firebaseio.com",
            projectId: "webprojecty2",
            storageBucket: "webprojecty2.appspot.com",
            messagingSenderId: "407916551388",
            appId: "1:407916551388:web:4ea40875e59ea900ff6819",
            measurementId: "G-4DSM5DVJN6"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        //db variable
        var db = firebase.firestore();
    </script>

</head>

<body>
    
<p id="test"></p>
    
<script>
var docRef = db.collection("cities").doc("SF");

docRef.get().then(function(doc) {
    if (doc.exists) {
        document.getElementById("test").innerHTML = (doc.data().name;
    } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
    }
}).catch(function(error) {
    console.log("Error getting document:", error);
});

</script>
*/

