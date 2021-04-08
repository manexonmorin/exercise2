(function(){
			let bout = document.querySelectorAll('.rad-carrousel')
			console.log(bout.length)
			let carrousel = document.querySelector('.carrousel-2')
			let k =0;
			bout[0].checked = true;
			for (const bt of bout)
			{
				bt.value = k++;
				console.log(bt.value)
				bt.addEventListener('mousedown', function() {
					carrousel.style.transform = "translateX(" + (-this.value*100) + "vw)"
					console.log(carrousel.style.transform)
				})

			}
}())	