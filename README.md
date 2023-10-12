# Natasha's Calculator 
A basic simple calculator made using object oriented programming php,html and css

# Natasha's Calculator Documentation

## Introduction
Natasha's Calculator is a user-friendly web-based calculator designed for performing basic mathematical operations, including addition, subtraction, multiplication, and division. This updated documentation provides an overview of the calculator's improved functionality, its code structure, error handling, and usage guidelines.

## Features
- Addition: Add two numbers.
- Subtraction: Subtract the second number from the first.
- Multiplication: Multiply two numbers.
- Division: Divide the first number by the second, with error handling to prevent division by zero.
- Responsive Design: The calculator has a responsive design that adapts to different screen sizes.

## Code Structure
The calculator is built using HTML, PHP, and CSS. Below is an overview of the key components of the code.

### HTML (index.php)
- The HTML file defines the structure of the calculator.
- It includes form elements for entering two numbers and selecting an operation.
- The result of the operation is displayed below the form.

### PHP (index.php)
- The PHP code handles the form submission and performs the selected mathematical operation.
- It checks for the submission of the form and retrieves the user input (numbers and operation) using `$_POST`.
- Error handling is added to prevent division by zero. If division by zero is detected, an error message is displayed.
- The `switch` statement is used to perform the selected operation (addition, subtraction, multiplication, or division).
- The result of the operation is stored in the `$result` variable and displayed on the page.

### CSS 
- The CSS  defines the visual styling of the calculator.
- It sets the background gradient, font styles, input box styles, and button styles.
- The calculator has a responsive design and is centered on the screen.

## Error Handling
- The updated code includes error handling to prevent division by zero. If a user attempts to divide a number by zero, the calculator will display an error message, "Division by zero is not allowed."

## Usage
1. Open the web page containing Natasha's Calculator.
2. Enter a number in the "Enter a number" input field.
3. Enter another number in the "Enter another number" input field.
4. Select a mathematical operation from the dropdown list.
5. Click the "Submit" button to calculate the result.
6. The result of the operation will be displayed below the form.
7. If you attempt to divide by zero, an error message will be displayed.

## Design
The calculator has a visually appealing design with the following characteristics:
- Background: A gradient background with two shades of purple.
- Fonts: The 'Montserrat' font is used for text.
- Input Fields: Input fields have rounded corners and change in width on hover.
- Submit Button: The "Submit" button has a blue background and scales down on hover.
- Result Display: The result is displayed in a white text box with a purple border.


## Customization
- You can customize the calculator's appearance by modifying the CSS in the  section
- You can extend the calculator's functionality by adding support for additional mathematical operations or history of calculations.

## Conclusion
Natasha's Calculator is an improved web-based calculator with error handling to prevent division by zero. It is a simple and elegant tool for performing basic mathematical operations and can be customized to suit your needs. Feel free to enhance its features and design further as desired.
