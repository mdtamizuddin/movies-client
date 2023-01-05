 $response = file_get_contents("https://movies-server-nine.vercel.app/api/movies");
 $movies = json_decode($response);


