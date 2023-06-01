<!DOCTYPE html>
<html>
<head>
    <title>Patient Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://uel.unipd.it/content/wp-content/uploads/2022/06/SCO-visual-1.jpg');
           
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        body {
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
}

.patient-info {
  margin-top: 20px;
}

.info-row {
  display: flex;
  margin-bottom: 10px;
}

.info-label {
  flex-basis: 150px;
  font-weight: bold;
}

.info-value {
  flex-grow: 1;
}

.info-value p {
  margin: 0;
}

    </style>
</head>
<body>
@include('./header')
    <form  action="{{ route ('report.store') }}" method="post" onsubmit="generateDocument();">
    @csrf    
    <h1>Patient Report</h1>

        <label for="labid"></label>
        <input type="text" id="labid" name="labid" placeholder="enter labid" required>
        <label for="email"></label>
        <input type="text" id="email" name="email" placeholder="enter email" required>
        
        <label for="name"></label>
        <input type="text" id="name" name="name" placeholder="Name" required>
        <label for="testType"></label>
        <input type="text" id="testType" name="testType" placeholder="Test Type" required>
        <label for="testResults"></label>
        <input type="text" id="testResults" name="testResults" placeholder="Test Results" required>
        <label for="description"></label>
        <textarea id="description" name="description" placeholder="Description" rows="5" required></textarea>
        <input type="submit" value="Generate Document" >
    
</form>

    
    <script>
    function generateDocument() {
        var labid = document.getElementById('labid').value;
        var email = document.getElementById('email').value;
        var name = document.getElementById('name').value;
        var testType = document.getElementById('testType').value;
        var testResults = document.getElementById('testResults').value;
        var description = document.getElementById('description').value;

        // Create a new document object
        var doc = document.implementation.createHTMLDocument('Patient Report');

        // Create the content for the document
        var html = `
        <div style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            
            <h1 style="text-align: center; font-size: 28px; font-weight: bold; color: #333;">AYAZ MEMORIAL HOSPITAL</h1>
            <h2 style="text-align: center; font-size: 28px; font-weight: bold; color: #333;">Patient Report</h2>
            <div style="margin-top: 20px;">
                <p style="margin-bottom: 10px;"><strong style=" text-align: center; font-weight: bold;">LAB ID:</strong> ${labid}</p>
                <p style="margin-bottom: 10px;"><strong style=" text-align: center; font-weight: bold;">Name:</strong> ${name}</p>
                <p style="margin-bottom: 10px;"><strong style="text-align: center; font-weight: bold;">Test Type:</strong> ${testType}</p>
                <p style="margin-bottom: 10px;"><strong style="text-align: center; font-weight: bold;">Test Results:</strong> ${testResults}</p>
                <p style="margin-bottom: 10px;"><strong style="text-align: center; font-weight: bold;">Description:</strong> ${description}</p>
            </div>
        </div>
        `;

        // Set the document's HTML content
        doc.body.innerHTML = html;

        // Convert the document to a blob
        var blob = new Blob([doc.documentElement.outerHTML], { type: 'text/html' });

        // Create a download link
        var downloadLink = document.createElement('a');
        downloadLink.href = URL.createObjectURL(blob);
        downloadLink.download = `${name}_report.html`; // Use the patient's name as the filename
        downloadLink.style.display = 'none';

        // Append the download link to the document and trigger a click event to download the file
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);

    }
</script>
@include('./footer')
</body>
</html>
