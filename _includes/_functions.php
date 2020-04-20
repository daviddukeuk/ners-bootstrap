<?php
/**
 * PHP only file to hold various x-page functionality.
 * 
 */
function inc($str) {
  include($_SERVER['DOCUMENT_ROOT'] . '/_includes/' . $str . '.php');
}