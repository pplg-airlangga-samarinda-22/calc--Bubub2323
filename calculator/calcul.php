<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num2 != 0 ? $num1 / $num2 : 'tidak bs bagi 0';
                break;
            default:
                $result = 'gagal';
        }
    } else {
        $result = 'gagal mas';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>KALKULATOR JOAN</title>
</head>

<body>
    <H2>Kalkulator ribet</H2>
    <form method="post">
        <input type="number" name="num1" step="any" required placeholder="ketik aja abang hitung">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" step="any" required placeholder="angka ke dua dri china">
        <button type="submit">hitung</button>
    </form>
    <?php if (isset($result)) {
        echo "<h3>Hasil: $result</h3>";
    } ?>
</body>

</html>