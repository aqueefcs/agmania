

document.getElementById('r1-1').onclick = function(){
			var timeLeft = 30;
			var elem = document.getElementById('timer');
			var timerId = setInterval(countdown, 1000);

			function countdown() {
			    if (timeLeft == -1) {

			        clearTimeout(timerId);
			        doSomething();
			    } else {
			        elem.innerHTML = timeLeft + ' seconds remaining';
			        timeLeft--;
			    }
			}

			function doSomething() {
			    alert("Hi");
			}

}




	