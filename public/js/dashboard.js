window.addEventListener("load", () => {
    const chart = new Chart(
        document.querySelector("#chart"),
        {
          type: 'line',
          data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri"],
            datasets: [{
              label: "Your Streak",
              backgroundColor: 'rgb(71 85 105 / 1)',
              data: [5, 3, 8, 1, 10]
            }],
          },
          options: { 
            tension: 0.4,
            scales: {
                beginAtZero: 'false'
            }
          }
        }
      )
})