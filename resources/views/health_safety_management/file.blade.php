<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>ONLYOFFICE | Home</title>
</head>
<style>
  html {
            height: 100%;
            width: 100%;
        }

        body {
            background: #fff;
            color: #333;
            font-family: Arial, Tahoma,sans-serif;
            font-size: 12px;
            font-weight: normal;
            height: 100%;
            margin: 0;
            overflow-y: hidden;
            padding: 0;
            text-decoration: none;
        }

        form {
            height: 100%;
        }

        div {
            margin: 0;
            padding: 0;
        }
</style>
<body>
  <div id="placeholder"></div>
    <script type="text/javascript" src="http://localhost/web-apps/apps/api/documents/api.js"></script>
    <script>
    new DocsAPI.DocEditor("placeholder", {
      "document": {
        "fileType": "docx",
        "key": "Khirz6zTPdfd7",
        "title": "Example Document Title.docx",
        "url": "https://example.com/url-to-example-document.docx"
      },
      "documentType": "text"
    });
  </script>
</body>
</html>
