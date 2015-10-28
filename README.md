# Cambium

An opensource drupal environment build on top of Docker and Kalabox.

# Features
* Redis
* Nginx
* MariaDB
* Solr
* Terminus

# Installation
...

# Usage
...

# Issues
If you have Virtualbox installed. This might produced a wierd error after issuing
`kbox create` or `kbox start`. This is because of this [Virtualbox error](https://github.com/kalabox/kalabox-app-pantheon/issues/39).

```
Kernel driver not installed (rc=-1908)

The VirtualBox Linux kernel driver (vboxdrv) is either not loaded or there is a permission problem with /dev/vboxdrv. Please reinstall the kernel module by executing

'/etc/init.d/vboxdrv setup'

as root. If it is available in your distribution, you should install the DKMS package first. This package keeps track of Linux kernel changes and recompiles the vboxdrv kernel module if necessary.
```

On debian based OS you can fix this by running:

`sudo /etc/init.d/vboxdrv setup` and rerun the `kbox` commands.
