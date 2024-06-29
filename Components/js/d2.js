for(let i = 0; i < 10; i++){
    let row = $(`.row${i}`);
    for(let j = 0; j < 10; j++){
        let button = row.children('button').eq(j);
        //縦棒ランダム
        for(let k = 0; k < 4; k++){
            let barRandom = Math.floor(Math.random() * 100);
            let bar = button.find('section > h3').eq(k);
            if(barRandom < 50){
                bar.css('color', 'transparent');
            }
        }
        //アルファベットランダム
        let alphabetRandom = Math.floor(Math.random() * 100);
        let alphabet = button.children(0).children(0).eq(1);
        if(alphabetRandom < 30){
            alphabet.html('p');
        }
        //色ランダム
        let colorRandom = Math.floor(Math.random() * 100);
        let symbol = button.children(0).children(0);
        if(colorRandom < 50 && colorRandom >= 25){
            symbol.addClass('blue');
        }else if(colorRandom < 75 && colorRandom >= 50){
            symbol.addClass('yellow');
        }else if(colorRandom < 100 && colorRandom >= 75){
            symbol.addClass('violet');
        }
    }
}


$('.check').click((e)=>{
    let d2button = e.target.closest('button');
    d2button.classList.toggle('slash');
    console.log(d2button);
})
$('.finish').click((e)=>{
    console.log("test");
})