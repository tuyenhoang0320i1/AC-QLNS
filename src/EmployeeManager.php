<?php


class EmployeeManager
{
    protected $pathFile;

    public function __construct($pathFile)
    {
    $this->pathFile = $pathFile;
    }

    public function getDataFromPathFile()
    {
        // get decode dataJson from pathFile data.json

        // read data file Json
        $dataJson = file_get_contents($this->pathFile);

        // convert Json format -> array
        return json_decode($dataJson, true);
    }

    public function saveDataToFile($array)
    {
        // put encode dataJson to pathFile data.json
        $dataJson = json_encode($array);
        file_put_contents($this->pathFile, $dataJson);
    }

    public function addEmployee($employee)
    {
        $data = $this->getDataFromPathFile();
        $array = [
            'id' => $employee->getId(),
            'lastname' => $employee->getLastname(),
            'firstname' => $employee->getFirstname(),
            'birth' => $employee->getBirth(),
            'address' => $employee->getAddress(),
            'position' => $employee->getPosition()
        ];
        array_push($data, $array);
        $this->saveDataToFile($data);
    }

    public function getAllEmployee()
    {
        $data = $this->getDataFromPathFile();
        $array = [];
        foreach ($data as $item) {
            $employee = new Employee($item['id'], $item['lastname'], $item['firstname'], $item['birth'], $item['address'], $item['position']);
            array_push($array, $employee);
        }
        return $array;
    }

//    public function editEmployee()
//    {
//        $data = $this->getDataFromPathFile();
//    }

    public function deleteEmployee($id)
    {
        $data = $this->getDataFromPathFile();
        unset($data[$id]);
        $this->saveDataToFile($data);
    }

}