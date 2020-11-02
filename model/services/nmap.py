import sys
import os
import subprocess

a=str(sys.argv)

#subprocess.call(["nmap", "-T4", sys.argv[1], "-sC", "-sV", "-oX", "/tmp/test.xml"])
os.system("cd ../../")
os.system("cd ../../ & ./nmapxml/nmapxml /tmp/test.xml html > ../../view/templates/scan.html")
print(os.system('pwd'))
