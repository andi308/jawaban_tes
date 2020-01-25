<?php 

function biodata($nama, $umur){
    $json = [
            "name"  => $nama,
            "age"   => $umur,
            "address"   => "petakan",
            "hobbies"   => ['tenis meja', 'catur', 'berenang'],
            "is_married"    => FALSE,
            "list_school"   => [
                'sd'    => [
                    'name'  => 'SD Negeri Jayamukti',
                    'year_in'   => '2008',
                    'year_out'  => '2014',
                    'major'     => 'null'
                ],
                'smp'   => [
                    'name'  => 'SMP Negeri 3 Karangnunggal',
                    'year_in'   => '2014',
                    'year_out'  => '2017',
                    'major'     => 'null'
                ],
                'smk'   => [
                    'name'  => 'SMK Negeri Bantarkalong',
                    'year_in'   => '2017',
                    'year_out'  => '2020',
                    'major'     => 'null'
                ]   
                
            ],
            "skills"    => [
                'web (php)'   => 'beginner',
                'dekstop (java)'   => 'beginner'
            ],
            "interest_in_coding" => TRUE
            
        ];
        
        return json_encode($json);
}


echo biodata('andi', 18);