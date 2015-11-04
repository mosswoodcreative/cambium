# Cambium

An opensource drupal environment build on top of Docker and Kalabox.

# Features
* Redis
* Nginx
* MariaDB
* Solr
* Terminus

# Installation
To use Cambium you have to install Kalabox binary in your machine. Please see
this [guide](https://github.com/kalabox/kalabox#installation). Basically you
have to put the binary in your `bin` folder (e.g `/usr/local/bin/`). Verify the
command to make sure that you can access it globally.

```
$ which kbox
/usr/local/bin/kbox
```


To install Cambium run the following command in your terminal.

1. `kbox create pantheon`

   This will ask series of questions regarding your Pantheon account. Please see
   the sample below.

   ```
   gerald@von-viel:~/Desktop/test$ kbox create pantheon
   ? Pantheon dashboard email: geraldvillorente@gmail.com
   ? Pantheon dashboard password: ************
   ? Which site? berkeley-test
   ? Which environment? dev
   ? What will you call this monster you have created: berkeley-test
   Building your app...
   ###############################################################

                Welcome to Kalabox 2!

    We see this is your first time running a Kalabox command that
    requires the use of the Kalabox engine. Before we can do this
    We need to install some special things to make sure you are
    good to go. Please agree to the prompt below to install all
    the magic. (takes about 5 minutes with average download speed)

    ###############################################################
    info: -- Step 1/24 --
    info: Authorizing trilling subroutines...
    ? Install all the magic and get this party started? Yes
    info: -- OK! 4% complete! --
    ```

    Let the installer handle the rest of the setup.

    If you ever encouter an error like the following:

    ```
    Get https://registry-1.docker.io/v1/repositories/kalabox/skydock/tags/v0.10.0: dial tcp: lookup registry-1.docker.io: no such host
    info: VError: Error pulling image "{
      name: 'kalabox/skydock:v0.10.0',
      build: false,
      createOpts: {
        name: 'kalabox_skydock',
        HostConfig: {
          NetworkMode: 'bridge', Binds: [Object]
        }
      },
      startOpts: {},
      postProviderOpts: 'getSkydockPostProviderOpts'
    }".: {
      errorDetail: {
        message: 'Get https://registry-1.docker.io/v1/repositories/kalabox/skydock/tags/v0.10.0: dial tcp: lookup registry-1.docker.io: no such host'
      },
      error: 'Get https://registry-1.docker.io/v1/repositories/kalabox/skydock/tags/v0.10.0: dial tcp: lookup registry-1.docker.io: no such host'
    }
    ```

    And...

    ```
    error=Error while pulling image: Get https://index.docker.io/v1/repositories/kalabox/skydns/images: dial tcp: lookup index.docker.io: no such host
    info: VError: Error pulling image "{
      name: 'kalabox/skydns:v0.10.0',
      build: false,
      createOpts: { name: 'kalabox_skydns',
        HostConfig: {
          NetworkMode: 'bridge', PortBindings: [Object]
        }
      },
      startOpts: {},
      postProviderOpts: 'getSkydnsPostProviderOpts'
    }".: {
      errorDetail: {
        message: 'Error while pulling image: Get        https://index.docker.io/v1/repositories/kalabox/skydns/images: dial tcp: lookup index.docker.io: no such host'
      },
      error: 'Error while pulling image: Get https://index.docker.io/v1/repositories/kalabox/skydns/images: dial tcp: lookup index.docker.io: no such host'
    }
    ```

    To solve these:

    ```
    $ nslookup index.docker.io
    $ nslookup registry-1.docker.io
    ```

2. `kbox start` to start the machine.

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
