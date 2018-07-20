<?php
use App\AbstractApplication;
use src\Address\Address;
use Date\Date;



/**
 * This class is the main application. You will overwrite the "run" method to implement your code
 *
 * @author matthieu vallance <matthieu.vallance@vesperiagroup.com>
 */
class Application extends AbstractApplication
{
    /**
     * Run
     *
     * Execute the request process
     *
     * @return string|NULL
     */
    protected function run() : ?string
    {
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') 
        {
            $date = new Date();
            $date->setDay($request->request->get('day'));
            $date->setMonth($request->request->get('month'));
            $date->setYear($request->request->get('year'));

            return json_encode($date);

        }

        return '
            <form method="post">
                <label for="day">day</label>
                <input type="number" name="day">
            
                <label for="month">month</label>
                <input type="number" name="month">
            
                <label for="year">year</label>
                <input type="number" name="year">
            
                <button type="submit">Submit</button>
            </form>
        ';
    }
    
}

