# Silicon-Derby-Mark-3-Version-2
The second version of Derby Vehicle code.  Adds Modular Components

This version is a more coherent package of the code required to run a Derby Vehicle.

Panels and components were written to be more modular.

A "tether" script was created so that if the vehicle loses communication with the web browser after 4 seconds the vehicel will automatically stop.

The video stream has been set to 1080 at 30fps which seems to be smoother than streaming lower resolutions

Created a single python script to start other scripts when the vehicle boots.  Add autostart.py to /etc/rc.local (sudo nano /etc/rc.local)
Then add new scripts that should start on boot to autostart.py

Full documentation to come...
