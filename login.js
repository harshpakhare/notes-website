const firebaseConfig = {
    apiKey: "AIzaSyDfwdr50YftOOAGv2JCgmtgtr3wnZpcqv8",
    authDomain: "notes-website-99aa2.firebaseapp.com",
    databaseURL: "https://notes-website-99aa2-default-rtdb.firebaseio.com",
    projectId: "notes-website-99aa2",
    storageBucket: "notes-website-99aa2.appspot.com",
    messagingSenderId: "207668056587",
    appId: "1:207668056587:web:207a2378de2f933e576d0e",
    measurementId: "G-018NJC53GJ"
  };
  //initialize firebase
  firebaseConfig.initializeApp(firebaseConfig);

  //reference your database
  var loginDB=firebase.database().ref("login");

    document.getElementById("login").addEventListener("Login",loginForm);

    function loginForm(e){
        e.preventDefault();

        var email=getElementVal("form2Example17");
        var password=getElementVal("form2Example27");

        savemessage(email,password);

    }
    const savemessage=(email,password)=>{
        var newlogin=loginDB.push();
        newlogin.set({
            email:email,
            password:password,
        }); 
    };

