<?php 
//method/function untuk me-return biodata
function biodata(){
    $name = "Aqil Gifari";
    $address = "Ciamis, Jawa Barat, Indonesia";
    $hobbies = ["ngoding","youtubing"] ;
    $is_married = false;
    $highSchool = "SMK Negeri 1 Kawali";
    $university = "Belum";
    $skill =  ["js", "php", "java", "bootstrap","codeigniter"];
    $score = ["80", "90", "85", "85", "85"]; 
    
    return array(
            "name" => $name,
            "address" => $address,
            "hobbies" => $hobbies,
            "is_married" => $is_married,
            "highSchool" => $highSchool,
            "university" => $university,
            "skill" => $skill,
            "score" => $score
    );
}

//memanggil function
$biodata = biodata();
$biodata_tojson = [
    "name"=> $biodata['name'],
    "address" => $biodata['address'],
    "hobbies"=> $biodata['hobbies'],
    "is_married"=> $biodata['is_married'],
    "school"=> ["highSchool"=> $biodata['highSchool'], 
                    "university"=> $biodata['university']], 
    "skills"=> ["name"=> $biodata['skill'],
                    "score"=> $biodata['score']],
    ];
//Return value ke format JSON
$data = json_encode($biodata_tojson);
echo $data;
?>


//telah diuji pada https://www.onlinegdb.com/
//Aqil Gifari_b10k3a
