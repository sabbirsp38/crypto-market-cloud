	
	
	
	function signOut(){
    firebase.auth().signOut();
	window.location = "index.php";
     }
		
  function initApp(){
		
	firebase.auth().onAuthStateChanged(function(user){
        if (user) {
  
   var displayName = user.displayName;
	var email = user.email;
	 var pic = user.photoURL;
	
	document.getElementById('email').innerHTML = displayName;
	document.getElementById("pic22").src = pic;
	
	
	
	} else {
	 //window.location = "index.php";
	}
	});
	}
	
	
	
	var app = angular.module('chatApp', ['firebase']);
	

	app.controller('ChatController', function($scope, $firebaseArray) {
		var ref = firebase.database().ref().child('messages');
		$scope.messages = $firebaseArray(ref);
		
		firebase.auth().onAuthStateChanged(function(user){
        if (user) {

		$scope.send = function() {
			$scope.messages.$add({
				message: $scope.messageText,
				date: Date.now(),
				name: user.displayName
				
			})

		}
		}
		})

	});
	
  function ClearText(){
		 var elmnt = document.getElementById("textField");
         elmnt.scrollIntoView(false);
		 document.getElementById('text22').value = "";
	}