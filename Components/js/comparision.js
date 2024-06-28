$('.first').addClass('display');
let idsArray = [];
let selectedColorsArray = [];
let selectedNumbersArray = [];
$('.check').click((e)=>{
    let sectionClassName = e.target.closest("button").parentNode.className;
    let buttonClassName = e.target.closest("button").className;
    let id = sectionClassName[0];
    if(sectionClassName[1] != " "){
        id = sectionClassName[0] + sectionClassName[1];
    }
    let selectedColor = buttonClassName.split(" ")[2];
    let selectedNumber = buttonClassName.split(" ")[1];
    console.log(selectedNumber);
    idsArray.push(id);
    selectedColorsArray.push(selectedColor);
    selectedNumbersArray.push(selectedNumber);

    $('.display').next().addClass('display');
    $('.display').eq(0).removeClass('display');
})

function finish(){
    $('#ids').val(idsArray);
    $('#results').val(selectedColorsArray);
    $('#numbers').val(selectedNumbersArray);
    $('form').submit();
}