document.addEventListener("DOMContentLoaded", () => {
    const jobCardsContainer = document.getElementById("jobCards");
    const modal = document.getElementById("jobModal");
    const overlay = document.getElementById("overlay");
    const closeModal = document.getElementById("closeModal");

    const jobTitle = document.getElementById("jobTitle");
    const jobLocation = document.getElementById("jobLocation");
    const jobSalary = document.getElementById("jobSalary");
    const jobContact = document.getElementById("jobContact");
    const jobInformation = document.getElementById("jobInformation");

    // Fetch jobs from the API
    fetch("/web/jobs")
        .then((response) => response.json())
        .then((jobs) => {
            if (jobs.length > 0) {
                jobs.forEach((job) => {
                    const card = document.createElement("div");
                    card.classList.add("card");

                    card.innerHTML = `
            <h3>${job.title}</h3>
            <p><strong>Location:</strong> ${job.location}</p>
            <p><strong>Salary:</strong> $${job.salary}</p>
            <button class="btn view-btn" data-job='${JSON.stringify(
                job
            )}'>View Details</button>
          `;

                    jobCardsContainer.appendChild(card);
                });

                // Add event listeners to the "View Details" buttons
                const viewButtons = document.querySelectorAll(".view-btn");
                viewButtons.forEach((button) => {
                    button.addEventListener("click", (e) => {
                        const jobData = JSON.parse(
                            button.getAttribute("data-job")
                        );
                        jobTitle.textContent = jobData.title;
                        jobLocation.textContent = jobData.location;
                        jobSalary.textContent = jobData.salary;
                        jobContact.textContent = jobData.contact;
                        jobInformation.textContent = jobData.information;

                        modal.classList.add("show");
                        overlay.classList.add("show");
                    });
                });
            } else {
                jobCardsContainer.innerHTML = `<p>No available jobs</p>`;
            }
        })
        .catch((error) => {
            console.error("Error fetching jobs:", error);
            jobCardsContainer.innerHTML = `<p>Error loading jobs. Please try again later.</p>`;
        });

    // Close modal
    closeModal.addEventListener("click", () => {
        modal.classList.remove("show");
        overlay.classList.remove("show");
    });

    // Close modal when clicking overlay
    overlay.addEventListener("click", () => {
        modal.classList.remove("show");
        overlay.classList.remove("show");
    });
});
