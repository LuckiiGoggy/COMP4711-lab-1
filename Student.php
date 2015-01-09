<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author George
 */
class Student {
    
    //Constructor for Student
    // sets 4 variables
    // surname as a string
    // first_name as a string
    // emails as an array
    // grades as an array
    function _construct(){
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // Function to add an email to the emails array
    function add_email($which, $address){
        $this->emails[$which] = $address;
    }
    
    // Function to add a grade to the grades array
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    // Function to get the average grade of the student
    function average(){
        $total = 0;
        foreach($this->grades as $value)
                $total += $value;
        return $total / count($this->grades);
    }
    
    // Function to get the student's information as a string fit
    // formatted in html
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
