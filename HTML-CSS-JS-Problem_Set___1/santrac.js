
var square;
var board;
var alphabet = 'abcdefgh'.split(''),
board = document.getElementById( 'board' );
for(var i = 1; i <= 64; i++){
    square = document.createElement( 'div' );
    square.classList.add("square");
    
    var rowNumber = 8 - parseInt(  (i-1) / 8 );
    var colNumber = (i%8) == 0 ? 7 : (i%8)-1;
    
    square.classList.add(((i+rowNumber)%2==0) ? "square_black" : "square_white");

    square.innerHTML = ""
    square.innerHTML += "" + alphabet[colNumber]
    square.innerHTML += rowNumber.toString(); 
 
    board.appendChild( square );
    if(i%8==0){
        board.innerHTML += "<div style='width:100%;float:left;'></div>";
    }
}
