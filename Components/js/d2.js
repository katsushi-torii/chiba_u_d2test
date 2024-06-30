//列の数調整
for(let i = 0; i < 30; i++){
    let row = $(`.row${i}`);
    for(let j = 0; j < 10; j++){
        let button = row.children('button').eq(j);
        let aside = button.children(0).eq(0);
        //縦棒ランダム
        let barCount = 4;
        for(let k = 0; k < 4; k++){
            let barRandom = Math.floor(Math.random() * 100);
            let bar = button.find('section > h3').eq(k);
            if(barRandom < 50){
                bar.css('color', 'transparent');
                barCount -= 1;
            }
        }
        if(barCount == 2){
            aside.addClass('two');
        }
        //アルファベットランダム
        let alphabetRandom = Math.floor(Math.random() * 100);
        let alphabet = button.children(0).children(0).eq(1);
        if(alphabetRandom < 30){
            alphabet.html('p');
            aside.removeClass('alphabetD');
        }
        //色ランダム
        let colorRandom = Math.floor(Math.random() * 100);
        if(colorRandom < 50 && colorRandom >= 25){
            aside.addClass('blue');
        }else if(colorRandom < 75 && colorRandom >= 50){
            aside.addClass('yellow');
        }else if(colorRandom < 100 && colorRandom >= 75){
            aside.addClass('violet');
        }
    }
}


$('.check').click((e)=>{
    let d2button = e.target.closest('button');
    d2button.classList.toggle('slash');
    let aside = d2button.childNote();
    console.log(aside);
})

function finish(){
    console.log("test");
    // $('#ids').val(idsArray);
    // $('#results').val(selectedColorsArray);
    // $('#numbers').val(selectedNumbersArray);
    // $('form').submit();
}