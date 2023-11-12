// Accessing the video and canvas elements
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d');

// Requesting access to the webcam
navigator.mediaDevices.getUserMedia({ video: true })
  .then(stream => {
    video.srcObject = stream;
  })
  .catch(error => {
    console.error('Error accessing the webcam:', error);
  });

// Capture photo when the "Capture Photo" button is clicked
document.getElementById('capture').addEventListener('click', () => {
  // Drawing the current video frame onto the canvas
  context.drawImage(video, 0, 0, canvas.width, canvas.height);

  // Creating a data URL from the canvas image
  const photo = canvas.toDataURL();

  // Displaying the captured photo in a new window/tab
  const newWindow = window.open();
  newWindow.document.write('<img src="' + photo + '" alt="Captured Photo"/>');
});
