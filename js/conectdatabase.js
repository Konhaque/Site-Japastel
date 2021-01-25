 var firebaseConfig = {
    apiKey: "AIzaSyCsC-GASD56WIGwWLinxOpKxzt6ankOgHM",
    authDomain: "japastel-c0ea5.firebaseapp.com",
    projectId: "japastel-c0ea5",
    storageBucket: "japastel-c0ea5.appspot.com",
    messagingSenderId: "200828072226",
    appId: "1:200828072226:web:50a84111ca25a1d9a0b57b",
    measurementId: "G-B3TB1KS05T"
  };

  function conectDataBase(){
  	firebase.initializeApp(firebaseConfig);
  }


  function logar(){
  	
  }


  abrirTela = function abrirTela(url){
    window.location.assign(url);
  }