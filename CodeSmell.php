<?php

class CodeSmell
{
    public function HighSeverity($param){
        switch ($param) {
            case 0:
                doSomething();
                break;
            default: // Noncompliant: default clause should be the first or last one
                error();
                break;
            case 1:
                doSomethingElse();
                break;
        }
    }
}