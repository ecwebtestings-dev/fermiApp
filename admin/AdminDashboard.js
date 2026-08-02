


//PRELOADER
const loader=document.getElementById('loader');
window.addEventListener('load',()=>{
    loader.style.display='none';
});


const baseURL = "api/";

//SIDEBAR
let sideBar = document.getElementById('sideBar');
let overLay = document.querySelector('.overlay');

function openSideBar() {
    sideBar.classList.add('sidebar-responsive');
    overLay.classList.add('show');
}

function closeSideBar() {
    sideBar.classList.remove('sidebar-responsive');
    overLay.classList.remove('show');
}

function closeSideBarOnClick(){
    let sideBarLinks=document.querySelectorAll(".sidebar-list-item");
    sideBarLinks.forEach(link=>{
      link.addEventListener("click",()=>{
        closeSideBar();
      })
    })
};
closeSideBarOnClick();


//USERPROFILE
const profile = document.getElementById("profileToggle");
const dropdown = document.getElementById("dropdownMenu");
const avatar=document.getElementById('avatar');
avatar.addEventListener("click", (e) => {
  e.stopPropagation();
  dropdown.classList.toggle("active");
});
// Close when clicking outside
document.addEventListener("click", () => {
  dropdown.classList.remove("active");
});


//LIGHT-MODE-TOOGLE
if (localStorage.getItem('theme') === 'light') {
  document.body.classList.add('light-mode');
}
function toggleTheme() {
  document.body.classList.toggle('light-mode');

  if (document.body.classList.contains('light-mode')) {
    localStorage.setItem('theme', 'light');
  } else {
    localStorage.setItem('theme', 'dark');
  }
}


//BAR CHARTS
let areaChartInstance;
async function loadAreaChart() {
    try {
        const res = await fetch(`${baseURL}graph.php`);
        const json = await res.json();

        const labels = json.data.map(d => d.month);
        const totals = json.data.map(d => d.total);

        const options = {
            series: [
                {
                    name: 'Appointments',
                    data: totals
                }
            ],

            chart: {
                height: 250,
                type: 'area',
                toolbar: { show: false }
            },

            stroke: {
                width: 3,
                curve: 'smooth'
            },

            colors: ['#F59E0B'],

            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    type: 'vertical',
                    shadeIntensity: 0.4,
                    gradientToColors: ['#fff'],
                    opacityFrom: 0.7,
                    opacityTo: 0.1
                }
            },

            dataLabels: { enabled: false },

            xaxis: {
                categories: labels,
                labels: {
                    style: { colors: '#879394' }
                }
            },

            yaxis: {
                labels: {
                    style: { colors: '#879394' }
                }
            },

            tooltip: {
                theme: 'dark',
                y: {
                    formatter: val => val + " appointments"
                }
            },

            grid: {
                borderColor: '#e7e7e7',
                strokeDashArray: 4
            }
        };

        if (areaChartInstance) {
            areaChartInstance.destroy();
        }

        areaChartInstance = new ApexCharts(
            document.querySelector("#AreaChart"),
            options
        );

        areaChartInstance.render();

    } catch (err) {
        console.error("Area chart error:", err);
    }
}


let donutChartInstance;

async function loadDonutChart() {
    try {
        const res = await fetch(`${baseURL}overview.php`);
        const json = await res.json();
        const data = json.data;
        const series = [
            Number(data.active_users || 0),
            Number(data.pending_appointments || 0),
            Number(data.completed_appointments || 0)
        ];

        const options = {
            series: series,
            chart: {
                type: 'donut',
                height: 250
            },

            labels: ['Active Users', 'Pending', 'Completed'],
            colors: ['#ff7503', '#ffb347', '#ff3d00'],

            

            legend: {
                position: 'bottom',
                labels: {
                    colors: '#a3a1a1'
                }
            },

            dataLabels: {
                enabled: true
            },

            tooltip: {
                y: {
                    formatter: function (val, opts) {
                        const total = opts.globals.seriesTotals.reduce((a, b) => a + b, 0);
                        const percent = (val / total) * 100;
                        return val + " (" + percent.toFixed(1) + "%)";
                    }
                }
            }
        };

        if (donutChartInstance) {
            donutChartInstance.destroy();
        }

        donutChartInstance = new ApexCharts(
            document.querySelector("#pieChart"),
            options
        );

        donutChartInstance.render();

    } catch (err) {
        console.error("Donut chart error:", err);
    }
}


// ========================= TAB SYSTEM =========================
const navItems = document.querySelectorAll(".sidebar-list-item");
const dashboardSections = document.querySelectorAll(".maIn-title, .main-cards, .charts");
const tabs = document.querySelectorAll(".tab");
let loadedTabs = {};

function switchTab(tabId) {
  tabs.forEach(tab => tab.classList.remove("active"));
  const activeTab = document.getElementById(tabId);
  if (activeTab) activeTab.classList.add("active");

  if (tabId === "dashboard") {
    dashboardSections.forEach(sec => sec.classList.remove("hidden"));
    loadOverview();
  } else {
    dashboardSections.forEach(sec => sec.classList.add("hidden"));
  }

  // sidebar active state
  navItems.forEach(item => item.classList.remove("active"));
  document.querySelector(`[data-tab="${tabId}"]`)?.classList.add("active");


  // load data only once per tab 
  if (tabId === "users" && !loadedTabs.users) {
    loadUsers();
    loadedTabs.users = true;
  }

  if (tabId === "appointments" && !loadedTabs.appointments) {
    loadAppointments();
    loadedTabs.appointments = true;
  }

  if (tabId === "logs" && !loadedTabs.logs) {
    loadLogs();
    loadedTabs.logs = true;
  }

  
}

// EVENTLISTENERS
navItems.forEach(item => {
  item.addEventListener("click", () => {
    const tabId = item.getAttribute("data-tab");
    switchTab(tabId);
  });
});

// DISPLAY DASHBOARD BY DEFAULT
document.addEventListener("DOMContentLoaded", () => {
  switchTab("dashboard");
});


// ========================= OVERVIEW =========================
async function loadOverview() {
  try {
    const res = await fetch(`${baseURL}overview.php`);
    const json = await res.json();

    document.getElementById("activeUsers").innerText = json.data.active_users;
    document.getElementById("completedAppointments").innerText = json.data.completed_appointments;
    document.getElementById("pendingAppointments").innerText = json.data.pending_appointments;

  } catch (err) {
    console.error("Overview error:", err);
  }
}


// ========================= USERS =========================
async function loadUsers(page = 1) {
  try {
    const res = await fetch(`${baseURL}users.php?page=${page}`);
    const html = await res.text();
    document.getElementById("usersTable").innerHTML = html;

  } catch (err) {
    console.error("Users error:", err);
    document.getElementById("usersTable").innerHTML =
      "<div style='color:red'>Failed to load users.</div>";
  }
}

window.loadUsersPage = function(page) {
  loadUsers(page);
};

window.toggleUser = function(id) {
  if (!confirm("Change user status?")) return;

  fetch(`${baseURL}delete.php`, {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `id=${id}`
  })
    .then(res => res.json())
    .then(data => {
      if (data.status === "success") {
        loadUsers();
        loadOverview();
      } else {
        alert("Operation failed");
      }
    })
    .catch(err => console.error("Toggle error:", err));
};


// ========================= APPOINTMENTS =========================
async function loadAppointments(page = 1) {
  try {
    const res = await fetch(`/FERMI/appointments/pending.php?page=${page}`);
    const html = await res.text();
    document.getElementById("appointmentsTable").innerHTML = html;

  } catch (err) {
    console.error("Appointments error:", err);
    document.getElementById("appointmentsTable").innerHTML =
      "<div style='color:red'>Failed to load appointments.</div>";
  }
}

window.loadAppointmentsPage = function(page) {
  loadAppointments(page);
};


// ========================= LOGS =========================
function loadLogs(page = 1) {
  fetch(`${baseURL}view_logs.php?page=${page}`)
    .then(res => res.text())
    .then(html => {
      document.getElementById("logsTable").innerHTML = html;
    })
    .catch(err => {
      console.error("Logs error:", err);
      document.getElementById("logsTable").innerHTML =
        "<div style='color:red'>Failed to load logs.</div>";
    });
}

window.loadLogsPage = function(page) {
  loadLogs(page);
};


//LOADING GRAPHS ON DASHBOARD
async function initDashboard() {
    await loadOverview();
    loadDonutChart();
    loadAreaChart();
}
initDashboard();

