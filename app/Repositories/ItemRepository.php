<?php
namespace App\Repositories;

class ItemRepository 
{


	public function __construct()
	{
	}

	public function register($name, $description)
	{
		try { 

			$item = [[
				"name" => $name,
				"descrition" => $description
			]];
		
			$data = file_exists("file.csv") ? $this->fileExists($item) :$item;
				
			$headers = ['Name','Description'];
	
			$archive = fopen('file.csv', 'w');
	
			fputcsv($archive, $headers);
	
			foreach ($data as $line ) {
				fputcsv($archive, $line);
			}
	
			return 'Item Registrado com Sucesso';

		} catch (Exception $e) { 
			
			\Log::info($e);
		 
		}

	
	}   
	
	function fileExists($item){

		$handle = fopen("file.csv", "r");
		$header = fgetcsv($handle, 1000, ",");
		
		while ($line = fgetcsv($handle, 1000, ",")) {
			$items[] = array_combine($header, $line);
		}
			
		fclose($handle);
		$data = array_merge($item, $items);
		
		return $data;
	}
}