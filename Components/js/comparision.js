$('.first').addClass('display');
let selectedColorsArray = [];
$('.check').click((e)=>{
    let sectionClassName = e.target.closest("button").parentNode.className;
    let buttonClassName = e.target.closest("button").className;
    let id = sectionClassName[0];
    if(sectionClassName[1] != " "){
        id = sectionClassName[0] + sectionClassName[1];
    }
    let selectedColor = buttonClassName.split(" ")[2];
    // let array = {id: id, selectedColor: selectedColor};
    let array = [id, selectedColor];
    selectedColorsArray.push(array);
    console.log(selectedColorsArray);

    $('.display').next().addClass('display');
    $('.display').eq(0).removeClass('display');
})

function finish(){
    $('#result').val(selectedColorsArray);
    console.log($('#result').val());
    $('form').submit();
}