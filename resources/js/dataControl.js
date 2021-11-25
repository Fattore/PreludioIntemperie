let saveFile = () => {
    
    // Get the data from each element on the form.
    const apparence = document.getElementById('editapparence');
    const constitution = document.getElementById('editconstitution');
    const dexterity = document.getElementById('editdexterity');
    const education = document.getElementById('editeducation');
    const force = document.getElementById('editforce');
    const intelligence = document.getElementById('editintelligence');
    const power = document.getElementById('editpower');
    const luck = document.getElementById('editluck');
    const moviment = document.getElementById('editmoviment');
    const size = document.getElementById('editsize');
    
    // This variable stores all the data.
    let data = 
        'Apparence: ' + apparence.value + ' \r\n ' + 
        'Constitution: ' +constitution.value + ' \r\n ' + 
        'Dexterity: ' + dexterity.value + ' \r\n ' + 
        'Education: ' + education.value + ' \r\n ' + 
        'Force: ' + force.value + ' \r\n ' +
        'Intelligence: ' + intelligence.value + ' \r\n ' +
        'Power: ' + power.value + ' \r\n ' +
        'Luck: ' + luck.value + ' \r\n ' +
        'Moviment: ' + moviment.value + ' \r\n ' +
        'Size: ' + size.value;
    
    // Convert the text to BLOB.
    const textToBLOB = new Blob([data], { type: 'text/plain' });
    const sFileName = 'formAttributeData.txt';	   // The file to save the data.

    let newLink = document.createElement("a");
    newLink.download = sFileName;

    if (window.webkitURL != null) {
        newLink.href = window.webkitURL.createObjectURL(textToBLOB);
    }
    else {
        newLink.href = window.URL.createObjectURL(textToBLOB);
        newLink.style.display = "none";
        document.body.appendChild(newLink);
    }

    newLink.click(); 
}

function readBlob() {

    var files = document.getElementById('files').files;
    if (!files.length) {
      alert('Please select a file!');
      return;
    }
    var file = files[0];
  
    console.log(file.type);
  
    var MIMEType = file.type;
  
    // decode base64 string, remove space for IE compatibility
    var reader = new FileReader();
  
    reader.onload = function(readerEvt) {
  
          // This is done just for the proof of concept
      var binaryString = readerEvt.target.result;
      var base64 = btoa(binaryString);
      var blobfile = atob(base64);
  
  
      window.blobFromBlobFile = b64toBlob(base64, MIMEType, 512);
      window.blobURL = URL.createObjectURL(window.blobFromBlobFile);
  
  
      if (MIMEType != "image/jpeg") {
        var a = "<br /><a href=\"" + window.blobURL + "\">Blob File Link</a>";
      } else {
        var a = "<img src=" + window.blobURL + "\>";
      }
  
      document.getElementById('byte_content').innerHTML = a;
  
    };
  
    reader.readAsBinaryString(file);
  }
  
  document.querySelector('.readBytesButtons').addEventListener('click', function(evt) {
    if (evt.target.tagName.toLowerCase() == 'button') {
      readBlob();
    }
  }, false);
  
  function changefunction(args) {
    readBlob();
  }
  
  
  // https://stackoverflow.com/questions/16245767/creating-a-blob-from-a-base64-string-in-javascript
  function b64toBlob(b64Data, contentType, sliceSize) {
      contentType = contentType || '';
      sliceSize = sliceSize || 512;
  
      var byteCharacters = atob(b64Data);
      var byteArrays = [];
  
      for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
          var slice = byteCharacters.slice(offset, offset + sliceSize);
  
          var byteNumbers = new Array(slice.length);
          for (var i = 0; i < slice.length; i++) {
              byteNumbers[i] = slice.charCodeAt(i);
          }
  
          var byteArray = new Uint8Array(byteNumbers);
  
          byteArrays.push(byteArray);
      }
  
      var blob = new Blob(byteArrays, {type: contentType});
      return blob;
  }
