<!DOCTYPE html>
<html lang="ja">
<head>
    <mate charset="UTF-8">
<title>成績判定システム</title>
</head>
<body>
    <h1>成績判定システム</h1>
<?php

$students=[
    ["name"=>"田中太郎", "score"=>85],
    ["name"=>"佐藤花子", "score"=>92],
    ["name"=>"鈴木一郎", "score"=>78],
    ["name"=>"高橋美咲", "score"=>65],
    ["name"=>"伊藤健太", "score"=>58],
];

function getGrade($score) {
    if(<"score">=90) {
        return "A"; 
        "status=>優秀";
    }elseif("score">=80){
        return "B";
        "status=>良好";
    }elseif("score">=70){
        return "C";
        "status=>普通";
    }elself("score">=60){
        return "D";
        "status=>要努力";
    }elseif("score">=50){
        return "F";
        "status=>不合格";
    }
}

<h3>【個別成績】</h3>

foreach ($students as $student) {
    $name = $student["name"];
    $score = $student["score"]; 
    $grade = $getgrade($score);
if (score >=60) {
    $pass_count++;
} else {
    $fail_count++;
}
$total_score += $score;

echo "{name}: {score}点 - 評価{$grade}<br>";
}

$average = $total_score / count($students);

echo "<h3>【統計情報】</h3>";
echo "合格者数: {$pass_count}"人<br>";
echo "不合格者数: {$fail_count}人<br>";
echo "平均点: " . number_format($average, 1) . "点<br>";
?>
</bode>
</html>