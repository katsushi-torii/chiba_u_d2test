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
        //色ランダム
        let colorRandom = Math.floor(Math.random() * 100);
        if(colorRandom < 100 && colorRandom >= 80){
            aside.addClass('red 0');
        }else if(colorRandom < 80 && colorRandom >= 60){
            aside.addClass('blue 1');
        }else if(colorRandom < 60 && colorRandom >= 40){
            aside.addClass('green 2');
        }else if(colorRandom < 40 && colorRandom >= 20){
            aside.addClass('yellow 3');
        }else{
            aside.addClass('grey 4');
        }
    }
}

$('.check').click((e)=>{
    let d2button = e.target.closest('button');
    d2button.classList.toggle('slash');
})

//一次元：赤、青、緑、黄、灰
//二次元：d2で正解、d2で不正解、d2以外で不正解、d2以外で正解
let answerCount = [
    [0,0,0,0],
    [0,0,0,0],
    [0,0,0,0],
    [0,0,0,0],
    [0,0,0,0]
];

function finish(){
    for(let i = 0; i < 30; i++){
        let row = $(`.row${i}`);
        for(let j = 0; j < 10; j++){
            let button = row.children('button').eq(j);
            let color = button.children(0).eq(0).attr('class').split(" ")[1];
            let alphabet = button.children(0).eq(1).attr('class').split(" ")[0];
            let bar = button.children(0).eq(1).attr('class').split(" ")[1];
            let slash = button.attr('class').split(" ")[1];
            if(slash == "slash"){
                if(alphabet == "d" && bar == "two"){
                    answerCount[color][0] += 1;
                }else{
                    answerCount[color][2] += 1;
                }
            }else if(slash != "slash"){
                if(alphabet == "d" && bar == "two"){
                    answerCount[color][1] += 1;
                }else{
                    answerCount[color][3] += 1;
                }
            }
        }
    }
    $('#colors').val(answerCount);
    $('form').submit();
}
  
setTimeout(finish, 180000);