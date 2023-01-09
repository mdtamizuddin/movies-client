 $response = file_get_contents("https://movie-server.cyclic.app/api/movies");
 $movies = json_decode($response);


