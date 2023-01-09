


  let ttl_Name = [];
  let ttl_nombre = [];
  fetch('chart/chart_1.php')
  .then(function (response){
  return response.json();
})
  .then(function (data){
  for (let i = 0; i < data.length; i++){
  ttl_nombre.push(data[i].nombre);
  ttl_Name.push(data[i].name);
}
  const ctx = document.getElementById('chartjs');
  new Chart(ctx, {
  type: 'polarArea',
  data: {
  labels: ttl_Name,
  datasets: [{
  label: '',
  data: ttl_nombre,
  backgroundColor: [
    '#87CEEB',
  '#40E0D0',
  '#90EE90',
  '#E6E6FA',
  '#FFB6C1',
  '#D3D3D3',

  ],
  borderColor: [
    '#87CEEB',
    '#40E0D0',
    '#90EE90',
    '#E6E6FA',
    '#FFB6C1',
    '#D3D3D3',

  ],
  borderWidth: 1
}]
},
  options: {
  scales: {
  y: {
  beginAtZero: true
}
}
}
});
});


    let ttl_status = [];
    let ttl_nmb = [];
    fetch('chart/chart_2.php')
    .then(function (response){
    return response.json();
  })
    .then(function (data){
    for (let i = 0; i < data.length; i++){
    ttl_nmb.push(data[i].nombre);
    ttl_status.push(data[i].status);
  }
    const ctx = document.getElementById('chartjs-donut');
    new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ttl_status,
    datasets: [{
    label: '',
    data: ttl_nmb,
    backgroundColor: [
      '#87CEEB',
      '#40E0D0',
      '#90EE90',
      '#E6E6FA',
      '#FFB6C1',
      '#D3D3D3',
    ],
    borderColor: [
      '#87CEEB',
      '#40E0D0',
      '#90EE90',
      '#E6E6FA',
      '#FFB6C1',
      '#D3D3D3',
    ],
    borderWidth: 1
  }]
  },
    options: {
    scales: {
    y: {
    beginAtZero: true
  }
  }
  }
  });
  });


  let ttl_names = [];
  let ttl_numbers = [];
  fetch('chart/chart_3.php')
      .then(function (response){
        return response.json();
      })
      .then(function (data){
        for (let i = 0; i < data.length; i++){
          ttl_numbers.push(data[i].nombre);
          ttl_names.push(data[i].name);
        }
        const ctx = document.getElementById('chartjs-line');
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ttl_names,
            datasets: [{
              label: '',
              data: ttl_numbers,
              backgroundColor: 'rgba(255, 99, 132, 0.2)',
              borderColor: 'rgb(255, 99, 132)',
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      });


  /// log
  let divBase = document.querySelector('.log')
  console.log(divBase)
  function getLog(){
    fetch('chart/log.php')
        .then(function (response){
          return response.json();
        })
        .then(function (data){
          console.log(data);
          for (let i= 0; i < data.length; i++){
            divBase.innerHTML += `<p> L'adresse ip <span style="color:  #3C91E6;">${data[i].adresse_ip}</span> de type <span style="color: #3C91E6;">${data[i].name}</span> à envoyer un paquet de type
 <span style="color:  #3C91E6;">${data[i].status}
 </span> du port <span style="color:  #3C91E6;">${data[i].from_}</span> au port de dest <span style="color:  #3C91E6;">${data[i].dest}</span>à l'adresse ip de dest 
  <span style="color:  #3C91E6;">${data[i + 1].adresse_ip}</span>. </p> <br>`;
            divBase.classList.add('log-text');
          }
        })
        .catch(function (err){
          console.log(err);
        })
  }
  getLog();
