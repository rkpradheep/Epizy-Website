<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
body{
	font-size: 20px;
	font-family: sans-serif;
	color: #333;
}
.question{
	font-weight: 600;
}
.answers {
    margin-bottom: 20px;
}
#submit{
	font-family: sans-serif;
	font-size: 20px;
	background-color: #297;
	color: #fff;
	border: 0px;
	border-radius: 3px;
	padding: 10px;
	cursor: pointer;
	margin-bottom: 20px;
}
#submit:hover{
	background-color: #3a8;
}
</style>
</head>
<h1 style='font-style:italic'>Quiz for the course '<?php echo $_GET['course'] ?>'</h1>
<div id="quiz"></div>
<button id="submit">Submit</button>
<div id="results"></div>
<body>
<script type="text/javascript">
var C1 = [
	{
		question: "What is 10/2?",
		answers: {
			a: '3',
			b: '5',
			c: '115'
		},
		correctAnswer: 'b'
	},
	{
		question: "What is 30/3?",
		answers: {
			a: '3',
			b: '5',
			c: '10'
		},
		correctAnswer: 'c'
	},
	{
	question: "What is 30/10?",
	answers: {
	a: '3',
	b: '5',
	c: '10'
	},
	correctAnswer: 'a'
	},
    {
	question: "What is 3000/10?",
	answers: {
	a: '300',
	b: '5',
	c: '10'
	},
	correctAnswer: 'a'
	}
];
var C2 = [
	{
		question: "What is 100/2?",
		answers: {
			a: '3',
			b: '50',
			c: '115'
		},
		correctAnswer: 'b'
	},
	{
		question: "What is 30/30?",
		answers: {
			a: '3',
			b: '5',
			c: '1'
		},
		correctAnswer: 'c'
	},
	{
	question: "What is 300/10?",
	answers: {
	a: '30',
	b: '5',
	c: '10'
	},
	correctAnswer: 'a'
	}
];

var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(quizContainer, resultsContainer, submitButton);

function generateQuiz(quizContainer, resultsContainer, submitButton){
        var course='<?php echo $_GET['course'] ?>'
        var questions= course=='C1'?C1:C2;
	function showQuestions(questions, quizContainer){
		// we'll need a place to store the output and the answer choices
		var output = [];
		var answers;

		// for each question...
		for(var i=0; i<questions.length; i++){
			
			// first reset the list of answers
			answers = [];

			// for each available answer...
			for(letter in questions[i].answers){

				// ...add an html radio button
				answers.push(
					'<label>'
						+ '<input type="radio" name="question'+i+'" value="'+letter+'">'
						+ questions[i].answers[letter]
					+ '</label>&nbsp&nbsp&nbsp&nbsp'
				);
			}

			// add this question and its answers to the output
			output.push(
				'<div class="question">' + (i+1)+'.) '+ questions[i].question + '</div>'
				+ '<div class="answers">' + answers.join('') + '</div>'
			);
		}

		// finally combine our output list into one string of html and put it on the page
		quizContainer.innerHTML = output.join('');
	}


	function showResults(questions, quizContainer, resultsContainer){
		// gather answer containers from our quiz
        submitButton.style.display="none";
		var answerContainers = quizContainer.querySelectorAll('.answers');
		
		// keep track of user's answers
		var userAnswer = '';
		var numCorrect = 0;
		
		// for each question...
		for(var i=0; i<questions.length; i++){

			// find selected answer
            
			userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
           // for(var j=0; j<3; j++)
			answerContainers[i].querySelectorAll('input[name=question'+i+']').forEach(x=>x.disabled=true);
			// if answer is correct
			if(userAnswer===questions[i].correctAnswer){
				// add to the number of correct answers
				numCorrect++;
				
				// color the answers green
				answerContainers[i].style.color = 'lightgreen';
			}
			// if answer is wrong or blank
			else{
				// color the answers red
				answerContainers[i].style.color = 'red';
			}
		}

		// show number of correct answers out of total
		resultsContainer.innerHTML = 'Marks secured '+numCorrect + ' out of ' + questions.length;
		
		const xhttp = new XMLHttpRequest();
		
		// Define a callback function
		xhttp.onreadystatechange = function() {
	  if(this.readyState==4)
		//alert(this.responseText);
         setTimeout(()=>location.href="https://google.com",3000);
		}
		var data = new FormData();
		data.append('course', '<?php echo $_GET['course']; ?>');
		data.append('email', '<?php echo $_GET['email'] ?>');
		data.append('score', numCorrect);
		// Send a request
		xhttp.open("POST", "StudentMarkInsertion.php");
		xhttp.send(data);
	}

	// show questions right away
	showQuestions(questions,quizContainer);
	
	// on submit, show results
	submitButton.onclick = function(){
		showResults(questions,quizContainer, resultsContainer);
	}

}
</script>
</body>
</html>
