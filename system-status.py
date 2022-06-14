import subprocess
import time

while True:    
    cmd = "top -b | head -n 5 > /var/www/html/status.txt"
    status = subprocess.check_output(cmd, shell = True )

    cmd = "df -h | head -n 2 >> /var/www/html/status.txt"
    status = subprocess.check_output(cmd, shell = True )

    time.sleep(5)