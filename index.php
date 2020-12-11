<?php


class InsertionSort{

    private array $data;
    private array $result;

    public function setData($data){
        $this->data = $data;
    }

    public function getData($data){
        return $this->data;
    }

    public function sort(){
        $lenght = count($this->data);
        for($i = 0; $i <= $lenght; $i++){
            if(isset($this->data[$i + 1])){
                if($this->data[$i] > $this->data[$i + 1]){
                    $bigV = $this->data[$i];
                    $lowerV = $this->data[$i + 1];
                    $this->data[$i] = $lowerV;
                    $this->data[$i+1] = $bigV;
                    $this->result[$i] = $lowerV;
                    $this->result[$i + 1] = $bigV;
                    $j = $i;
                    for($j;$j > 0; $j--){
                        if($this->result[$j] < $this->result[$j - 1]){
                            $lowerV = $this->result[$j];
                            $bigV = $this->result[$j - 1];
                            $this->result[$j] = $bigV;
                            $this->result[$j - 1] = $lowerV;
                        }
                    }
                } else {
                    $this->result[$i] = $this->data[$i];
                    continue;
                }
            }
        }
    }

    public function __toString(){
        $n = "";
        foreach($this->result as $num){
            $n .= $num.' ';
        }
        return $n;
    }

}
$data = [10,9,8,7,6,5,4,3,2,1,0];
$insertionSort = new InsertionSort();
$insertionSort->setData($data);
$insertionSort->sort();
echo $insertionSort;

