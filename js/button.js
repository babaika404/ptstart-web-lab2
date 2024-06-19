var count = 0;
document.getElementById("myButton").onclick = function() {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    } else {
        //создаём элемент img
        var img = document.createElement("img");
        // источник изображения
        img.src = "https://aquaplant63.ru/wp-content/uploads/6/0/4/6044d881b15937dd1b0106c22f820d0a.jpeg";
        // добавляем изображение 
        document.getElementById("demo").appendChild(img);
    }
}