<?php

// Create connection
function createConnection() {
  $conn = new mysqli("localhost", "root", "", "dungeonanddragons");
  return $conn;
}

function getAllAlignments($conn) {
  $sql = "SELECT * FROM alignment";
  $result = $conn->query($sql);
  return $result;
}

function getAllNpcs($conn) {
  $sql = "SELECT * FROM npc";
  $result = $conn->query($sql);
  return $result;
}

function getAllRaces($conn) {
  $sql = "SELECT * FROM races";
  $result = $conn->query($sql);
  return $result;
}

function getAllClasses($conn) {
  $sql = "SELECT * FROM classes";
  $result = $conn->query($sql);
  return $result;
}

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully to database!";
// ?>