import time

def isfloat(heartbeat_time):
    try:
        float(heartbeat_time)
        return True
    except:
        return False  

while True:
    current_time = time.time()

    with open('/var/www/html/tether.txt', 'r') as file:
        heartbeat_time = file.read()

    if isfloat(heartbeat_time) == True:
        time_difference = current_time - float(heartbeat_time)

        if time_difference > 4:
            file = open("/var/www/html/command.txt","w")
            file.write("stop")
            file.close()

    else:
            file = open("/var/www/html/command.txt","w")
            file.write("stop")
            file.close()            

    print("Heartbeat Time: "+heartbeat_time)
    print("Current Time: "+str(current_time))
    print("Time Difference: "+str(time_difference))
    print("----")

    time.sleep(1)