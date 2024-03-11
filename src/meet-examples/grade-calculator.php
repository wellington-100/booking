<form action="/meet-examples/grade-calculator.php" method="GET">
    <input required type="text" name="grade_1" />
    <input required type="text" name="grade_2" />
    <input required type="text" name="grade_3" />
    <button>AVERAGE</button>
</form>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    </style>
<?php
if(isset($_GET['grade_1']) && isset($_GET['grade_2']) && isset($_GET['grade_3'])){
    $grade_1 = $_GET['grade_1'];
    $grade_2 = $_GET['grade_2'];
    $grade_3 = $_GET['grade_3'];
    $grade_count = 3;
    $pattern = '/^(10(\.0+)?|\b[1-9](\.\d+)?)$/';

    if(is_numeric($grade_1) && is_numeric($grade_2) && is_numeric($grade_3)){
        if(preg_match($pattern, $grade_1) && preg_match($pattern, $grade_2) && preg_match($pattern, $grade_1)){
            $average_mark = ($grade_1 + $grade_2 + $grade_3) / $grade_count;
            $average_mark = round($average_mark, 1);
            print("
                <table>
                <tr>
                    <th>Grade 1</th>
                    <th>Grade 2</th>
                    <th>Grade 3</th>
                    <th>Average Mark</th>
                </tr>
                <tr>
                    <td>$grade_1</td>
                    <td>$grade_2</td>
                    <td>$grade_3</td>
                    <td>$average_mark</td>
                </tr>
                </table>
            ");
        } else {
            print("Only numbers between 1-10!");
        }
    } else{
        print("Only numbers are allowed!");
    }
} else {
    print("All fields are required!");
}
?>

<!--
В примерах создайте страницу "grade-calculator.php", она должна отображать форму с 3-я полями и кнопку.  +
Пользователь вводит по одной оценке в каждое поле и при нажатие на кнопку получить среднюю оценку.       +
Проверить ввод на пустоту                                                                                +
Проверить ввод на числа (любые - что целые, что дробные)                                                 +
Проверить ввод на диапазон 0..10                                                                         +                                                                        
Использовать if/else + print чтобы выводить сообщения об ошибках                                         +
Вывести все 3 оценки плюс среднюю - в ряд HTML таблицы                                                   +