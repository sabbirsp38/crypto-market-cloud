		// Listen for form submissions
		var white = 0;
		var team = 0;
		var road = 0;
		var token = 0;
		var cir = 0;
		
	$(document).ready(function(){
			
		var sel = document.getElementById("first").textContent;
		var sel2 = document.getElementById("second").textContent;
		var sel3 = document.getElementById("third").textContent;
		var sel4 = document.getElementById("four").textContent;
		var sel5 = document.getElementById("five").textContent;
		
		for(var i = 0;i<=4;i++){
		if(i==0){
		if(sel)	{          		
		document.addEventListener('submit', function (event) {

			// Only run our code on .rating forms
			if (!event.target.matches('.rating')) return;
			

			// Prevent form from submitting
			event.preventDefault();

			// Get the selected star
			var selected = document.activeElement;
			if (!selected) return;
			var selectedIndex = parseInt(selected.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(event.target.querySelectorAll('.star'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

			// Remove aria-pressed from any previously selected star
			var previousRating = event.target.querySelector('.star[aria-pressed="true"]');
			if (previousRating) {
				previousRating.removeAttribute('aria-pressed');
			}

			// Add aria-pressed role to the selected button
			selected.setAttribute('aria-pressed', true);

		}, false);

		// Highlight the hovered or focused star
		var highlight = function (event) {

			// Only run our code on .rating forms
			var star = event.target.closest('.star');
			var form = event.target.closest('.rating');
			if (!star || !form) return;

			// Get the selected star
			var selectedIndex = parseInt(star.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(form.querySelectorAll('.star'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

		};

		// Listen for hover and focus events on stars
		document.addEventListener('mouseover', highlight, false);
		document.addEventListener('focus', highlight, true);

		// Reset highlighting after hover or focus
		var resetSelected = function (event) {

			// Only run our code on .rating forms
			if (!event.target.closest) return;
			var form = event.target.closest('.rating');
			if (!form) return;

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(form.querySelectorAll('.star'));

			// Get an existing rating if there is one
			var selected = form.querySelector('.star[aria-pressed="true"]');
			var selectedIndex = selected ? parseInt(selected.getAttribute('data-star'), 10) : 0;

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
				
			});
			white = selected.value;

		};
		


		// Reset selected on mouse off and blur
		document.addEventListener('mouseleave', resetSelected, true);
		document.addEventListener('blur', resetSelected, true);
		}	
		}
		
		
		if(i==1){
		if(sel2){          		
		document.addEventListener('submit', function (event) {

			// Only run our code on .rating forms
			if (!event.target.matches('.rating')) return;
			

			// Prevent form from submitting
			event.preventDefault();

			// Get the selected star
			var selected = document.activeElement;
			if (!selected) return;
			var selectedIndex = parseInt(selected.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(event.target.querySelectorAll('.star'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

			// Remove aria-pressed from any previously selected star
			var previousRating = event.target.querySelector('.star[aria-pressed="true"]');
			if (previousRating) {
				previousRating.removeAttribute('aria-pressed');
			}

			// Add aria-pressed role to the selected button
			selected.setAttribute('aria-pressed', true);

		}, false);

		// Highlight the hovered or focused star
		var highlight = function (event) {

			// Only run our code on .rating forms
			var star = event.target.closest('.star2');
			var form = event.target.closest('.rating');
			if (!star || !form) return;

			// Get the selected star
			var selectedIndex = parseInt(star.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(form.querySelectorAll('.star2'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

		};

		// Listen for hover and focus events on stars
		document.addEventListener('mouseover', highlight, false);
		document.addEventListener('focus', highlight, true);

		// Reset highlighting after hover or focus
		var resetSelected = function (event) {

			// Only run our code on .rating forms
			if (!event.target.closest) return;
			var form = event.target.closest('.rating');
			if (!form) return;

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(form.querySelectorAll('.star2'));

			// Get an existing rating if there is one
			var selected = form.querySelector('.star2[aria-pressed="true"]');
			var selectedIndex = selected ? parseInt(selected.getAttribute('data-star'), 10) : 0;

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});
			team = selected.value;

		};
		


		// Reset selected on mouse off and blur
		document.addEventListener('mouseleave', resetSelected, true);
		document.addEventListener('blur', resetSelected, true);
		}	
		
		
		}
		
		
		
		if(i==2){
		if(sel3){          		
		document.addEventListener('submit', function (event) {

			// Only run our code on .rating forms
			if (!event.target.matches('.rating')) return;
			

			// Prevent form from submitting
			event.preventDefault();

			// Get the selected star
			var selected = document.activeElement;
			if (!selected) return;
			var selectedIndex = parseInt(selected.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(event.target.querySelectorAll('.star'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

			// Remove aria-pressed from any previously selected star
			var previousRating = event.target.querySelector('.star[aria-pressed="true"]');
			if (previousRating) {
				previousRating.removeAttribute('aria-pressed');
			}

			// Add aria-pressed role to the selected button
			selected.setAttribute('aria-pressed', true);

		}, false);

		// Highlight the hovered or focused star
		var highlight = function (event) {

			// Only run our code on .rating forms
			var star = event.target.closest('.star3');
			var form = event.target.closest('.rating');
			if (!star || !form) return;

			// Get the selected star
			var selectedIndex = parseInt(star.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(form.querySelectorAll('.star3'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

		};

		// Listen for hover and focus events on stars
		document.addEventListener('mouseover', highlight, false);
		document.addEventListener('focus', highlight, true);

		// Reset highlighting after hover or focus
		var resetSelected = function (event) {

			// Only run our code on .rating forms
			if (!event.target.closest) return;
			var form = event.target.closest('.rating');
			if (!form) return;

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(form.querySelectorAll('.star3'));

			// Get an existing rating if there is one
			var selected = form.querySelector('.star3[aria-pressed="true"]');
			var selectedIndex = selected ? parseInt(selected.getAttribute('data-star'), 10) : 0;

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
				
			});
			road = selected.value;

		};
		


		// Reset selected on mouse off and blur
		document.addEventListener('mouseleave', resetSelected, true);
		document.addEventListener('blur', resetSelected, true);
		}	
		
		
		}
		
		
		
		
		
		
		if(i==3){
		if(sel4){          		
		document.addEventListener('submit', function (event) {

			// Only run our code on .rating forms
			if (!event.target.matches('.rating')) return;
			

			// Prevent form from submitting
			event.preventDefault();

			// Get the selected star
			var selected = document.activeElement;
			if (!selected) return;
			var selectedIndex = parseInt(selected.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(event.target.querySelectorAll('.star'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

			// Remove aria-pressed from any previously selected star
			var previousRating = event.target.querySelector('.star[aria-pressed="true"]');
			if (previousRating) {
				previousRating.removeAttribute('aria-pressed');
			}

			// Add aria-pressed role to the selected button
			selected.setAttribute('aria-pressed', true);

		}, false);

		// Highlight the hovered or focused star
		var highlight = function (event) {

			// Only run our code on .rating forms
			var star = event.target.closest('.star4');
			var form = event.target.closest('.rating');
			if (!star || !form) return;

			// Get the selected star
			var selectedIndex = parseInt(star.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(form.querySelectorAll('.star4'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

		};

		// Listen for hover and focus events on stars
		document.addEventListener('mouseover', highlight, false);
		document.addEventListener('focus', highlight, true);

		// Reset highlighting after hover or focus
		var resetSelected = function (event) {

			// Only run our code on .rating forms
			if (!event.target.closest) return;
			var form = event.target.closest('.rating');
			if (!form) return;

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(form.querySelectorAll('.star4'));

			// Get an existing rating if there is one
			var selected = form.querySelector('.star4[aria-pressed="true"]');
			var selectedIndex = selected ? parseInt(selected.getAttribute('data-star'), 10) : 0;

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
				
			});
			token = selected.value;

		};
		


		// Reset selected on mouse off and blur
		document.addEventListener('mouseleave', resetSelected, true);
		document.addEventListener('blur', resetSelected, true);
		}	
		
		
		}
			
		
		
		
	     if(i==4){
		if(sel5){          		
		document.addEventListener('submit', function (event) {

			// Only run our code on .rating forms
			if (!event.target.matches('.rating')) return;
			

			// Prevent form from submitting
			event.preventDefault();

			// Get the selected star
			var selected = document.activeElement;
			if (!selected) return;
			var selectedIndex = parseInt(selected.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(event.target.querySelectorAll('.star'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

			// Remove aria-pressed from any previously selected star
			var previousRating = event.target.querySelector('.star[aria-pressed="true"]');
			if (previousRating) {
				previousRating.removeAttribute('aria-pressed');
			}

			// Add aria-pressed role to the selected button
			selected.setAttribute('aria-pressed', true);

		}, false);

		// Highlight the hovered or focused star
		var highlight = function (event) {

			// Only run our code on .rating forms
			var star = event.target.closest('.star5');
			var form = event.target.closest('.rating');
			if (!star || !form) return;

			// Get the selected star
			var selectedIndex = parseInt(star.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(form.querySelectorAll('.star5'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

		};

		// Listen for hover and focus events on stars
		document.addEventListener('mouseover', highlight, false);
		document.addEventListener('focus', highlight, true);

		// Reset highlighting after hover or focus
		var resetSelected = function (event) {

			// Only run our code on .rating forms
			if (!event.target.closest) return;
			var form = event.target.closest('.rating');
			if (!form) return;

			// Get all stars in this form (only search in the form, not the whole document)
			// Convert them from a node list to an array
			// https://gomakethings.com/converting-a-nodelist-to-an-array-with-vanilla-javascript/
			var stars = Array.from(form.querySelectorAll('.star5'));

			// Get an existing rating if there is one
			var selected = form.querySelector('.star5[aria-pressed="true"]');
			var selectedIndex = selected ? parseInt(selected.getAttribute('data-star'), 10) : 0;

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
				
			});
			cir = selected.value;

		};
		


		// Reset selected on mouse off and blur
		document.addEventListener('mouseleave', resetSelected, true);
		document.addEventListener('blur', resetSelected, true);
		}	
		
		
		}
		
		
		
		
		
		}	
		
		
		
  
			document.getElementById("btn2").addEventListener("click", function(){
          
		   
		   var whiteFloat = parseFloat(white);
		   var teamFloat = parseFloat(team);
		    var roadFloat = parseFloat(road);
			 var tokenFloat = parseFloat(token);
			  var cirFloat = parseFloat(cir);
		   
		   var sum = whiteFloat+teamFloat+roadFloat+tokenFloat+cirFloat;
		   var total = sum/5;
		   
		  
		   
		   window.location.href="rating2.php?v="+total+"";
			 
			// var add = document.getElementById("MPFSR").innerHTML=total;
			
			 
         });
		
});