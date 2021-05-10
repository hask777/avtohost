require('./bootstrap');

const config = {
    headers: {
      "Access-Control-Allow-Origin": "*",
      "Access-Control-Allow-Methods": "GET,PUT,POST,DELETE,PATCH,OPTIONS"
    }
};

var github = 'https://raw.githubusercontent.com/hask777/avpars/new/stat.json';
var laravel = 'http://blog.test/api/stat';

axios.get(laravel, config)
.then((response) => {

    cars = response.data;
    console.log(response.data);
    carsYears = [];
    carsCount = [];

    for(i=0; i<cars.length; i++){
        carsYears.push(cars[i].car_year);
        carsCount.push(cars[i].car_count);
    }


    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: carsYears,
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
