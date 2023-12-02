<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Job Wall</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        #jobForm {
            max-width: 600px;
            margin: auto;
        }

        #jobWall {
            margin-top: 20px;
        }

        .jobPost {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
        }

        .adminControls {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div id="jobForm">
    <h2>Write a Job Post</h2>
    <form id="postForm">
        <label for="clientName">Client Name:</label>
        <input type="text" id="clientName" required><br>

        <label for="jobType">Job Type:</label>
        <select id="jobType" required>
            <option value="fixed">Fixed</option>
            <option value="hourly">Hourly</option>
        </select><br>

        <label for="jobBudget">Job Budget:</label>
        <input type="number" id="jobBudget" required><br>

        <label for="jobDescription">Job Description:</label>
        <textarea id="jobDescription" rows="4" required></textarea><br>

        <button type="button" onclick="submitPost()">Submit Post</button>
    </form>
</div>

<div id="jobWall">
    <h2>Job Wall</h2>
    <!-- Job posts will be displayed here dynamically -->
</div>

<script>
    function submitPost() {
        // Get form values
        var clientName = document.getElementById('clientName').value;
        var jobType = document.getElementById('jobType').value;
        var jobBudget = document.getElementById('jobBudget').value;
        var jobDescription = document.getElementById('jobDescription').value;

        // Create a new job post element
        var postElement = document.createElement('div');
        postElement.classList.add('jobPost');
        postElement.innerHTML = `
            <strong>Client Name:</strong> ${clientName}<br>
            <strong>Job Type:</strong> ${jobType}<br>
            <strong>Job Budget:</strong> ${jobBudget}<br>
            <strong>Post Creation Date:</strong> ${new Date().toLocaleDateString()}<br>
            <strong>Job Description:</strong> ${jobDescription}<br>
            <strong>Number of Proposals Submitted:</strong> 0
            <div class="adminControls">
                <button onclick="approvePost(this)">Approve</button>
                <button onclick="removePost(this)">Remove</button>
            </div>
        `;

        // Append the post to the job wall
        document.getElementById('jobWall').appendChild(postElement);
    }

    function approvePost(button) {
        // Implement admin approval logic here
        alert('Post Approved!');
    }

    function removePost(button) {
        // Implement post removal logic here
        button.closest('.jobPost').remove();
        alert('Post Removed!');
    }
</script>

</body>
</html>