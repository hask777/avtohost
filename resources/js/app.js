require('./bootstrap');

const config = {
    headers: {
      "Access-Control-Allow-Origin": "*",
      "Access-Control-Allow-Methods": "GET,PUT,POST,DELETE,PATCH,OPTIONS"
    }
};

// var github = 'https://raw.githubusercontent.com/hask777/avpars/main/acura_stat.json';
// var laravel = 'http://localhost:3000/api/stat';

const brand = document.getElementById('brand').innerText;

axios.get('http://blog.test/api/stat/' + brand, config)
.then((response) => {
    // console.log(response);
    cars = response.data;
    console.log(cars);

    carsYear = [];
    carsCount = [];

    for(car in cars){
        // console.log(cars[car]);
        newCar = cars[car];
        // console.log(newCar.length);
        for(i=0; i < newCar.length; i++){
            // console.log(newCar[i].car_year);
            carsYear.push(newCar[i].car_year);
            carsCount.push(newCar[i].car_count);     
        }
        // console.log(carsYear);
        // console.log(carsCount);
    }

    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: carsYear,
            datasets: [{
                label: 'year',
                data: carsCount,

                backgroundColor: [
                    // 'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 0.2)',
                    // 'rgba(75, 192, 192, 0.2)',
                    // 'rgba(153, 102, 255, 0.2)',
                    // 'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    // 'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)'
                ],
                // borderWidth: 1
            }]
        },
        options: {
            // indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}, 
(error) => {
    console.log(error);
});
