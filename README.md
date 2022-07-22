# ChainReactionTask
This is the solution for the Junior Software Engineer Assignment position in Chain Reaction.

Solved by Osama Mousa Khrais - osamakhries@gmail.com - on Friday 22/07/2022.

Junior Software Engineer Assignment

As part of the recruitment process in Chain Reaction for the Junior Web Developer position,
you are requested to solve two logical challenges using PHP. To deliver the solution, upload
your solutions to one GitHub repository and share its link with us.

1. Sort Function
Suppose that you have an array of 10 numbers, this array contains the numbers from 0 - 9
which are randomly sorted.
Write a PHP method procedure, which takes this array as a parameter, and returns the array
sorted in ascending order with a minimum number of iterations.

NOTE: Don't use PHP built-in sort function.

sortList :: { 3 6 8 7 0 1 4 2 9 5 } -> { 0 1 2 3 4 5 6 7 8 9 }
function sortList ($array) {...}

Example:
sortList { 3 6 8 7 0 1 4 2 9 5 }
=> { 0 1 2 3 4 5 6 7 8 9 }


2. Valid Hex Code
Create a function using PHP that determines whether a string is a valid hex code.

A hex code must begin with a pound key # and is exactly 6 characters in length. Each
character must be a digit from 0-9 or an alphabetic character from A-F. All alphabetic
characters may be uppercase or lowercase.

Examples
isValidHexCode("#CD5C5C") ➞ true

isValidHexCode("#EAECEE") ➞ true
isValidHexCode("#eaecee") ➞ true
isValidHexCode("#CD5C58C") ➞ false
// Length exceeds 6
isValidHexCode("#CD5C5Z") ➞ false
// Not all alphabetic characters in A-F
isValidHexCode("#CD5C&C") ➞ false
// Contains unacceptable character
isValidHexCode("CD5C5C") ➞ false
// Missing #


3. Web Page
A company is collecting the contact information of their clients, to help them you need to
create a webpage that has a form with three fields ( first name, last name, mobile number ),
once the user inserts the data and hit submit button, data will be sent to the server and
saved in the database and a success message will appear to the user.
