## 1. Check kernel version

1. `uname -srm`
2. `hostnamectl`
3. `cat /proc/version`

For Desktop
`ps -A | egrep -i "gnome|kde|mate|cinnamon|lxde|xfce|jwm"`

## 2. Detailed info about graphics card

```
lspci|grep VGA
```  
This yields info about PCI ports running on the system, in particular the <b>V</b>ideo <b>G</b>raphics <b>D</b>isplay.  
Here's a [wikipedia article](https://en.wikipedia.org/wiki/Lspci) about it.  
Use the port number provided for the udevadm command.  
```
udevadm info -q property -p /sys/bus/pci/devices/0000:01:00.0
```
