<?php


namespace HomeTest\Controllers\ShippingController;


use HomeTest\Controllers\Controller;
use HomeTest\Modules\ShippingModule\Coefficient\CoefficientInterface;
use HomeTest\Modules\ShippingModule\Product\ProductInterface;
use HomeTest\Services\ShippingService\GrossPriceService;

class AlgorithmController extends Controller
{
    public function actionTree()
    {
        $arr = [
            '1' => 'a',
            '2' => 'b',
            '3' => 'c',
            '4' => 'd',
            '5' => 'e',
            '10' => 'i',
            '11' => 'j',
            '6' => 'f',
            '7' => 'g',
            '14' => 'k'
        ];
        /*var_dump('Pre');
        $this->preOrder($arr, 1);
        var_dump('Post');
        $this->postOrder($arr, 1);
        var_dump('In');
        $this->inOrder($arr,1);*/
        var_dump('Bfs');

        $this->bfs($arr,1);
    }

    public function bfs(array $arr, $startIndex)
    {
        if(empty($arr[$startIndex])) {
            return;
        }

        var_dump($arr[$startIndex]);
        $this->bfs($arr, $startIndex * 2 );
        if(!empty($arr[$startIndex * 2]))
            var_dump($arr[$startIndex * 2]);
        $this->bfs($arr, $startIndex * 2 + 1);
        if(!empty($arr[$startIndex * 2 + 1]))
            var_dump($arr[$startIndex * 2 + 1]);
    }

    public function inOrder(array $arr, $startIndex)
    {
        if(empty($arr[$startIndex])) {
            return;
        }
        $this->inOrder($arr, $startIndex * 2 );
        var_dump($arr[$startIndex]);
        $this->inOrder($arr, $startIndex * 2 + 1);
    }

    public function postOrder(array $arr, int $startIndex)
    {
        if(empty($arr[$startIndex])) {
            return;
        }
        $this->postOrder($arr, $startIndex * 2 );
        $this->postOrder($arr, $startIndex * 2 + 1);
        var_dump($arr[$startIndex]);
    }

    public function preOrder(array $arr, int $startIndex)
    {
        if(empty($arr[$startIndex])) {
            return;
        }
        var_dump($arr[$startIndex]);
        $this->preOrder($arr, $startIndex * 2 );
        $this->preOrder($arr, $startIndex * 2 + 1 );
    }

    public function actionStart()
    {
        $arr = [35, 33, 42, 10, 14, 19, 27, 44, 26, 31];
        $this->quickSort($arr, 0, count($arr) - 1);
        var_dump($this->search($arr,0, count($arr) -1 ,  32));
    }

    public function search(array $arr , int $l, int $r, int $searchItem)
    {
        if($r < $l)
            return false;
        $m = ($l + $r) / 2;
        if($searchItem === $arr[$m])
            return true;
        if($searchItem > $arr[$m])
            $l = $m + 1;
        if($searchItem < $arr[$m])
            $r = $m - 1;
        return $this->search($arr, $l,$r,$searchItem);
    }

    public function quickSort(array &$arr , int $l , int $r)
    {
        if ($l >= $r) {
            return;
        }
        $l = $this->partition($arr, $l, $r);
        $this->quickSort($arr, 0, $l - 1);
        $this->quickSort($arr, $l + 1, $r);
    }

    public function partition(array &$arr , int $l , int $r)
    {
        $pivot = $r;
        $r--;
        while ($l <= $r) {
            if ($arr[$l] <= $arr[$pivot]) {
                $l++;
                continue;
            }
            if ($arr[$r] >= $arr[$pivot]) {
                $r--;
                continue;
            }
            if($l <= $r)
                $this->swap($arr[$l], $arr[$r]);
        }
        $this->swap($arr[$l], $arr[$pivot]);
        return $l;
    }

    public function swap(int &$a , int &$b)
    {
        $c = $a ;
        $a = $b ;
        $b = $c ;
    }
}