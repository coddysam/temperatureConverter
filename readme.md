## About Temperature Converter

This is a simple Temperature Converter which converts temperatures from Fahrenheit to Celsius and from Celsius to Fahrenheit via command Line. It is created using Laravel MVC. 

- Main temperature converter code file is under directory i.e "app\Console\Commands\TemperatureConverter.php"
- To convert the temperature use the below command via commandline
	. Enter command "php artisan temperature:converter"
	. Next it will ask to choose one option from two using 0(fahrenheitToCelsius) or 1(celsiusToFahrenheit)
	. Once required option choosen 0 or 1 then it will ask "Enter temperature to change", once input given it will convert the temperature to required option selected. 

