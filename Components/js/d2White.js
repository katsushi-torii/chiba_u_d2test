//列の数調整
for(let i = 0; i < 30; i++){
    let row = $(`.row${i}`);
    for(let j = 0; j < 10; j++){
        let button = row.children('button').eq(j);
        let aside = button.children(0).eq(0);
        let span = button.children(0).eq(1);
        //アルファベットランダム
        let alphabetRandom = Math.floor(Math.random() * 100);
        let alphabet = button.children(0).children(0).eq(1);
        if(alphabetRandom < 30){
            alphabet.html('p');
            span.removeClass('d');
            span.addClass('p');
        }
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
            span.addClass('two');
        }
        aside.css('color', 'white');
    }
}

$('.check').click((e)=>{
    let d2button = e.target.closest('button');
    d2button.classList.toggle('slash');
})

function finish(){
    $('form').submit();
}
  
setTimeout(finish, 180000);