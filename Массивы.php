<?php

function isOperator($c){
return ($c == '+' || $c == '-' || $c == '*'|| $c == '/');
}

function getOperaroePriority($op){
    if ($op == '+' || $op == '-'){
        return 1;
    }
    if ($op == '*' || $op == '/'){
        return 2;
    }
    return 0;
}

function calculation($operand1, $operand2, $op){
    if ($op == '+') {
        return $operand1 + $operand2;
    }
    else if ($op == '-') {
        return $operand1 - $operand2;
    }
    else if ($op == '*') {
        return $operand1 * $operand2;
    }
    else if ($op == '/') {
        return $operand1 / $operand2;
    }
    return 0;
}

function calculateExample(&$example){
    $opStack = array();
    $numStack = array();
    for($i = 0; $i < strlen($example); ++$i){
        $c = $example[$i];
        if(is_numeric($c) || $c == '.'){
            $numStr = $c;
            while($i + 1 < strlen($example) && (is_numeric($example[$i + 1])||
            $example[$i+1] == '.')){
                $numStr += $example[$i+1];
                $i++;
            }
            array_push($numStack, floatval($numStr));  
        }
        else if ($c =='('){
            array_push($opStack, '(');
        }
        else if($c == ')'){
            while (end($opStack) != '('){
                $op = array_pop($opStack);
                
                $operand2 = array_pop($numStack);
                $operand1 = array_pop($numStack);

                array_push($numStack, calculation($operand1, $operand2, $op));
            }
            array_pop($opStack);
        }
        else if(isOperator($c)){
            while(!empty($opStack) && getOperaroePriority(end($opStack)) >= getOperaroePriority($c)){
                $op = array_pop($opStack);

                $operand2 = array_pop($numStack);
                $operand1 = array_pop($numStack);

                array_push($numStack, calculation($operand1, $operand2, $op));
            }
            array_push($opStack, $c);
        }
    }
    while(!empty($opStack)){
        $op = array_pop($opStack);

        $operand2 = array_pop($numStack);
        $operand1 = array_pop($numStack);

        array_push($numStack, calculation($operand1, $operand2, $op));
    }
    return end($numStack);
}

function inputCheck($example){
    
$charCount = count_chars($example, 1);
    foreach($charCount as $count){
        if($count > 1){
            return true;
        }
    }
    return false;
}

echo "Введите пример: ";
$example = readline();

for ($i = 0; $i < strlen($example); $i++) {
    if (preg_match('/[a-zA-Z]/', $example)) {
        echo "Ошибка! В примере содержиться буква" . PHP_EOL;
        break;
    }
    else if(inputCheck($example))
    {
        echo "Ошибка! Символы воторяются.";
        break;
    }
    else if (strlen($example) > 7) {
    echo "Cлишком большое количество элементов.".PHP_EOL;
    break;
    }
    else{
        $result = calculateExample($example);
        echo "Вывод результата: ".$result.PHP_EOL;
        break;
    }
}
    
