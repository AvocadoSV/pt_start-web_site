var count = 0;
document.getElementById("myButton").onclick = function () {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    } else {
        var img = document.createElement("img");
        img.src = "https://120.su/wp-content/uploads/2020/10/09102020-joyful-sheep-2.jpg";
        document.getElementById("demo").appendChild(img);
    }
}