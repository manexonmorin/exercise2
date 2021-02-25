(function(){
    let bout1 = document.getElementById('un')
    console.log(bout1.id)

    let bout2 = document.getElementById('deux')
    console.log(bout2.id)

    let bout3 = document.getElementById('trois')
    console.log(bout3.id)

    let carrousel = document.querySelector('.carrousel')
    console.log('carrousel')

    bout1.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(0)"
        console.log(this.id)
    })

    bout2.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(-100vw)"
        console.log(this.id)
    })

    bout3.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(-200vw)"
        console.log(this.id)
    })
}())