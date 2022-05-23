/*var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
            'Completed',
            'Ongoing',
            'Stalled'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [300, 50, 100],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    },
});

*/
// Search Project
const project = document.querySelectorAll('.project')

const displayProject = (values) =>{
    project.forEach(element =>{
        element.style.display = "none"
        const title = element.querySelector('h2').innerHTML.toUpperCase();
        const status = element.dataset.status.toUpperCase();
        const recent = element.querySelector('p').innerHTML.toUpperCase();

        if (title.includes(values)){
            element.style.display = "block"
        }
        else if(values != 'RECENT' && status.includes(values)){
            element.style.display = "block"
        }
        else if(values === 'RECENT' && recent.includes('HOUR') || recent.includes('RECENT')){
            element.style.display = "block"
        }
    })
}

searchProject.addEventListener('input', (e) =>{
    displayProject(e.target.value.toUpperCase())
})

projectFilter.addEventListener('input', (e) =>{
    displayProject(e.target.value.toUpperCase())
})

// Remove button

function ConfirmDelete()
{
	var okRemove = document.getElementById("divProject");
  if (confirm("Are you sure you want to delete?")){
	  okRemove.parentNode.removeChild(okRemove);
  }
}

// edit button

function editable(){ 
	var edit = document.getElementsByClassName("project");
	var noEdit = document.getElementsByClassName("dropup-content");
	for (var i =0; i<edit.length; i++){
		edit[i].setAttribute('contenteditable',true);
		noEdit[i].setAttribute('contenteditable',false);
	}

	//edit.setAttribute('contenteditable',true);
	//noEdit.setAttribute('contenteditable',false);
}
/* document.addEventListener('keydown', function(e) {
  for (var i = 0; i < editables.length; i++) {
    localStorage.setItem(editables[i].getAttribute('id'), editables[i].innerHTML);
  }
}); */

var elms = document.querySelectorAll("[id='divProject']");
var cont = 0;
var para1 = document.getElementById("groupNum");

for(var i = 0; i < elms.length; i++) 
cont++;
 para1.innerHTML = cont;



