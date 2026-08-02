<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Schedule Appointment · Fermi Electrical & Security</title>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="appointments.css">
</head>
<body>

    <div class="appointment-wrapper">
        
        <div class="split-layout card">
            
            <!-- LEFT SIDE:  -->
            <div class="brand-panel">
                <div class="brand-overlay"></div>
                <div class="brand-content">
                    <h2>Welcome To <span>Fermi</span> IT Solutions</h2>
                    <p>We are a full-service security and electrical contractor offering safe and efficient solutions for modern security, electrical, and IT needs.</p>
                
                </div>
            </div>

            <!-- RIGHT SIDE-->
            <div class="form-panel">
                <div class="form-header">
                    <h3>Book Appointment</h3>
                    <p class="subtitle">Schedule your professional service</p>
                </div>

                <div class="message" id="message"></div>

                <form id="appointmentForm">
                    <div class="input-group">
                        <label>Select Service</label>
                        <select name="service_type" id="service_type" required>
                            <option value="" disabled selected>Choose a service type</option>
                            <option value="WAN/LAN Setup">WAN/LAN Setup</option>
                            <option value="Wiring for offices and shops">Wiring for offices and shops</option>
                            <option value="Elevators & Escalators Installation">Elevators & Escalators Installation</option>
                            <option value="Air Conditioning (AC)">Air Conditioning (AC)</option>
                            <option value="CCTV Camera Installation">CCTV Camera Installation</option>
                            <option value="Water Heaters Installation">Water Heaters Installation</option>
                            <option value="Electrical System Maintenance">Electrical System Maintenance</option>
                            <option value="Panel Upgradations">Panel Upgradations</option>
                            <option value="CCTV Surveillance Installation">CCTV Surveillance Installation</option>
                            <option value="Electrical Safety Check">Electrical Safety Check</option>
                            <option value="Whole House Surge Protector">Whole House Surge Protector</option>
                            <option value="Line Power Quality Checks">Line Power Quality Checks</option>
                            <option value="Automatic Gates & Electric Fences">Automatic Gates & Electric Fences</option>
                            <option value="Fire Alarms & Motion Detectors">Fire Alarms & Motion Detectors</option>
                            <option value="Access Control Systems">Access Control Systems</option>
                            <option value="POS & Tracking Solutions">POS & Tracking Solutions</option>
                            <option value="Solar Panel Installation">Solar Panel Installation</option>
                            <option value="Smart Door Installation">Smart Door Installation</option>
                        </select>
                    </div>

                    <!-- Preferred Date -->
                    <div class="input-group">
                        <label>Preferred Date</label>
                        <input type="date" name="preferred_date" id="preferred_date"
                               min="<?php echo date('Y-m-d'); ?>" required>
                    </div>

                    <!-- Contact Number -->
                    <div class="input-group">
                        <label>Contact Number</label>
                        <input type="tel" name="contact" id="contact" 
                               placeholder="+256 7XX XXX XXX" 
                               pattern="[0-9+\-\s]+" 
                               title="Please enter a valid phone number"
                               required>
                    </div>

                    <!-- Service Address -->
                    <div class="input-group">
                        <label>Service Address</label>
                        <textarea name="service_address" id="service_address" 
                                  rows="2" 
                                  placeholder="Your address"
                                  required></textarea>
                    </div>

                    <!-- Form Buttons -->
                    <div class="button-group">
                        <button type="button" class="btn btn-secondary" onclick="window.history.back()">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary" id="submitBtn">
                            Book Now
                        </button>
                    </div>
                </form>
                
                <div class="footer-link">
                    Need help? <a href="/contact.php">Contact Support</a>
                </div>
            </div>
        </div>
    </div>

   <script>



//PRELOADER
const loader=document.getElementById('loader');
window.addEventListener('load',()=>{
    loader.style.display='none';
});

document.getElementById("appointmentForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const form = this;
    const button = document.getElementById("submitBtn");
    const msg = document.getElementById("message");
    const originalButtonText = button.innerHTML;

    // Get form data for validation
    const serviceType = document.getElementById('service_type').value;
    const preferredDate = document.getElementById('preferred_date').value;
    const contact = document.getElementById('contact').value;
    const address = document.getElementById('service_address').value;

    // Basic validation
    if (!serviceType || !preferredDate || !contact || !address) {
        msg.className = 'message error';
        msg.innerHTML = '<i class="fas fa-exclamation-circle"></i> Please fill in all required fields';
        return;
    }

    // Disable button and show processing
    button.disabled = true;
    button.innerHTML = '<i class="fas fa-spinner fa-pulse"></i> Processing';
    
    msg.className = 'message info';
    msg.innerHTML = '<i class="fas fa-spinner fa-pulse"></i> Submitting your request';

    // ACTUAL FETCH TO YOUR SERVER
    fetch("store.php", {
        method: "POST",
        body: new FormData(form)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.json();
    })
    .then(data => {
        if (data.status === "success") {
            msg.className = 'message success';
            msg.innerHTML = '<i class="fas fa-check-circle"></i> ' + data.message;
            
            // Reset form
            form.reset();

            // Redirect after 2 seconds
            setTimeout(() => {
                window.history.back();
            }, 2000);
        } else {
            msg.className = 'message error';
            msg.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + data.message;
            button.disabled = false;
            button.innerHTML = originalButtonText;
        }
    })
    .catch(error => {
        console.error("Error:", error);
        msg.className = 'message error';
        msg.innerHTML = '<i class="fas fa-times-circle"></i> Connection error. Please try again.';
        button.disabled = false;
        button.innerHTML = originalButtonText;
    });
});

// Set minimum date for date input
const today = new Date().toISOString().split('T')[0];
document.getElementById('preferred_date').setAttribute('min', today);

const inputs = document.querySelectorAll('input, select, textarea');
inputs.forEach(input => {
    input.addEventListener('focus', function() {
        this.parentElement.classList.add('focused');
    });
    input.addEventListener('blur', function() {
        this.parentElement.classList.remove('focused');
    });
});
</script>
</body>
</html>