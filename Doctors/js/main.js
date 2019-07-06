/*
|| Main JS Codes are there 
*/

$(document).ready(function(){

	// To Add Dashboard Chart1 in Website
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["1-7 Feb", "8-14 Feb", "15-21 Feb", "21-7 Feb"],
	        datasets: [{
	        	label: 'Use a Label',
	            data: [12, 19, 3, 5, 2, 3,],
	            backgroundColor: [
	                '#0097FC','#0097FC','#0097FC','#0097FC',
	            ],
	            borderColor: [
	                '#dddddd','#dddddd','#dddddd','#dddddd',
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        }
	    }
	});


	
	// To Add Dashboard Chart2 in Website
	var ctx = document.getElementById("myChart2").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["1-7 Feb", "8-14 Feb", "15-21 Feb", "21-7 Feb"],
	        datasets: [{
	            label: 'Use a Label',
	            data: [12, 19, 3, 5, 2, 3],
	            backgroundColor: [
	                '#132F3B','#132F3B','#132F3B','#132F3B',
	            ],
	            borderColor: [
	                '#dddddd','#dddddd','#dddddd','#dddddd',
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        }
	    }
	});


	// To Add Dashboard Chart3 in Website
	var ctx = document.getElementById("myChart3").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["1-7 Feb", "8-14 Feb", "15-21 Feb", "21-7 Feb"],
	        datasets: [{
	            label: 'Use a Label',
	            data: [12, 19, 3, 5, 2, 3],
	            backgroundColor: [
	                '#F53A59','#F53A59','#F53A59','#F53A59',
	            ],
	            borderColor: [
	                '#dddddd','#dddddd','#dddddd','#dddddd',
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        }
	    }
	});


	
	// To Add Dashboard Chart4 in Website
	var ctx = document.getElementById("myChart4").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["1-7 Feb", "8-14 Feb", "15-21 Feb", "21-7 Feb"],
	        datasets: [{
	            label: 'Use a Label',
	            data: [12, 19, 3, 5, 2, 3],
	            backgroundColor: [
	                '#32DAC3','#32DAC3','#32DAC3','#32DAC3',
	            ],
	            borderColor: [
	                '#dddddd','#dddddd','#dddddd','#dddddd',
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        }
	    }
	});



	// To Add Dashboard Chart5 in Website
	var ctx = document.getElementById("myChart5").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'line',
	    data: {
	        labels: ["January", "Fabruary", "March", "April", "May", "June", "July", "August", "September", "October","November","December"],
	        datasets: [{
	            label: 'Use a Label',
	            data: [6,10,12,16,18,25,20,16,19,16,16,25],
	            backgroundColor: [
	                '#32DAC3'
	            ]
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        }
	    }
	});




	


	






});




// To expand the div when click on setting icon.
function clickFunction() {
    var x = document.getElementById("settingsDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
} 




