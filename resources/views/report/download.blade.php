

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>Patient Report</title>
      <style>
        body {
          font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
          background-color: #f4f4f4;
          padding: 20px;
        }

        .container {
          max-width: 800px;
          margin: 0 auto;
          background-color: #fff;
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
          padding: 20px;
        }

        h1, h2 {
          text-align: center;
          font-weight: bold;
          color: #333;
        }

        p {
          margin-bottom: 10px;
        }

        strong {
          font-weight: bold;
        }
      </style>
    </head>
    <body>
      <div class="container">
        <h1>AYAZ MEMORIAL HOSPITAL</h1>
        <h2>Patient Report</h2>
        <div>
          <p><strong>LAB ID:</strong> {{ $report->labid }}</p>
          <p><strong>Name:</strong>{{ $report->name }}</p>
          <p><strong>Email:</strong> {{ $report->email }}</p>
          <p><strong>Test Type:</strong>{{ $report->testType }}</p>
          <p><strong>Test Results:</strong> {{ $report->testResults }}</p>
          <p><strong>Description:</strong> {{ $report->description }}</p>
        </div>
      </div>
    </body>
  </html>
  <script>
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
