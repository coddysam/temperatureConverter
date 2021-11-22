<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TemperatureCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'temperature:converter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Temperature converter';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $select = $this->choice('What do you want to convert for?', ['fahrenheitToCelsius', 'celsiusToFahrenheit']);
       


        if($select == 'fahrenheitToCelsius'){
              $val = $this->ask('Enter fahrenheit temperature:');
              if(is_numeric($val)){
                     $convertedTemp = ($val - 32) / 1.8;
                     $response ="$val Fahrenheit is " .$convertedTemp ." Celsius";
                      $this->info($response);
              }else{
                     $response ='Invalid format!';
                      $this->error($response);
              }
        }else{
              $val = $this->ask('Enter celsius temperature:');
          if(is_numeric($val)){
                     $convertedTemp = ($val * 9/5) + 32;
                     $response = "$val Celsius is " .$convertedTemp ." Fahrenheit";
                      $this->info($response);
          }else{
                     $response ='Invalid format!';
                      $this->error($response);
          }
        }
       
        
    }
}
