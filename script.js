document.getElementById("resultForm").addEventListener("submit", function (e) {
    e.preventDefault();

    var name = document.getElementById("name").value;
    var roll_number = document.getElementById("roll_number").value;
    var exam_score = document.getElementById("exam_score").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process_results.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("message").innerHTML = xhr.responseText;
        }
    };

    var data = "name=" + name + "&roll_number=" + roll_number + "&exam_score=" + exam_score;
    xhr.send(data);
});
