
<div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="appointment-form rounded p-5">
                            <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                            <h1 class="display-5 mb-4">Get Appointment</h1>
                            <form action="connect.php" method="POST">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent border border-white" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent border border-white" id="email" name="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control bg-transparent border border-white" id="phone" name="phone" placeholder="Your Phone" required>
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent border border-white" id="subject" name="subject" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent border border-white" placeholder="Leave a message here" id="message" name="message" style="height: 160px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="appointment-date" class="form-label" style="color:black;">Select Appointment Date:</label>
                                <input type="date" class="form-control bg-transparent border border-white" id="appointment-date" name="appointment-date" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="appointment-time" class="form-label" style="color:black;">Select Appointment Time:</label>
                                <input type="time" class="form-control bg-transparent border border-white" id="appointment-time" name="appointment-time" required>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-light text-primary w-100 py-3">Book Appointment</button>
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>