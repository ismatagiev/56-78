<?php
require_once 'link.php';

echo (new Link())->setAttr('href', '/Exam/1.php')->setText('1')->show().'<br>';
echo (new Link())->setAttr('href', '/Exam/2.php')->setText('2')->show().'<br>';
echo (new Link())->setAttr('href', '/Exam/3.php')->setText('3')->show().'<br>';
echo (new Link())->setAttr('href', '/Exam/4.php')->setText('4')->show().'<br>';
echo (new Link())->setAttr('href', '/Exam/5.php')->setText('5')->show().'<br>';