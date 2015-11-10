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

**Note**: You dont need to clone this repo as it will be created after running `kbox create pantheon` command.

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

    ```
    info: Downloading files...
    fetch : https://github.com/boot2docker/boot2docker-cli/releases/download/v1.8.0/boot2docker-v1.8.0-linux-amd64
    fetch : http://download.virtualbox.org/virtualbox/5.0.2/virtualbox-5.0_5.0.2-102096~Ubuntu~trusty_amd64.deb
    fetch : https://raw.githubusercontent.com/kalabox/kalabox-boot2docker/master/profile
    fetch : https://github.com/syncthing/syncthing/releases/download/v0.11.25/syncthing-linux-amd64-v0.11.25.tar.gz
    fetch : https://raw.githubusercontent.com/kalabox/kalabox/v0.10/dockerfiles/syncthing/config.xml
    progress : [====================] 100% 0.0s

    info: -- OK! 50% complete! --

    info: -- Step 13/24 --
    info: Setting up syncthing...
    info: -- OK! 54% complete! --

    info: -- Step 14/24 --
    info: Running admin install commands...
    [sudo] password for gerald:

    ....

    ###############################################################

                         BOOMSHAKALAKA!

      You have created your app with great success! Now you need
      to start that beast up which you can do by navigating to
      /home/gerald/Desktop/test/berkeley-test and running `kbox start`.

      You can also start from another directory by running
      kbox berkeley-test start

    ###############################################################
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

    Then you  might need to delete everything inside `~/.kalabox/`.

    ```
    $ ./reset.sh
    $ kbox create pantheon
    ```

2. `$ kbox berkeley-test start` to start the machine. Where `berkeley-test` is the sitename.
   If the command is successful you'll see this message:

   ```
   ###############################################################

                         HOLLA!!!!!!

    Your app has started up correctly. Here are some vitals:

    URL: http(s)://berkeley-test.kbox
    LOCATION: /home/gerald/Desktop/test/berkeley-test

  ###############################################################
   ```

> Done!

# Usage

* `kbox start` - To start the virtual container.
* `kbox stop` - Stop the virtual container. Shutdown.
* `boot2docker --vm="Kalabox2" ssh` - SSH to Docker host.
* `docker ps --all` - List all containers. This should be run after SSH'ing to Docker host.
* `docker exec -it CONTAINER_ID bash` - SSH to specific Docker container like DB or app server.
* `kbox down` - Shutdown the container.
* `kbox up` - Start the container.

# Type Less, Do More
Since git commands are integrated to kbox you are ended up typing long commands.
Good thing that you can take advantage of bash alias.

```
alias kbox-add="kbox git add"
alias kbox-pull="kbox git pull"
alias kbox-push="kbox git push"
alias kbox-branch="kbox git branch"
alias kbox-commit="kbox git commit"
alias kbox-reset="kbox git reset"
alias kbox-merge="kbox git merge"
alias kbox-checkout="kbox git checkout"
alias kbox-diff="kbox git diff"
alias kbox-rebase="kbox git rebase"
alias kbox-fetch="kbox git fetch"
alias kbox-log="kbox git log"
alias kbox-show="kbox git show"
alias kbox-status="kbox git status"
alias kbox-tag="kbox git tag"
alias kbox-rm="kbox git rm"
alias kbox-tag="kbox git tag"
alias kbox-mv="kbox git mv"
alias kbox-grep="kbox git grep"
alias kbox-bisect="kbox git bisect"
```

All you need to do is put those aliases above in `~/.bashrc`.

Please see [this slides](http://www.slideshare.net/kirkstenvon/introduction-to-kalabox) presented in Drupal Camp Cebu 2015.

# Issues
I. If you have Virtualbox installed. This might produced a wierd error after issuing
`kbox create` or `kbox start`. This is because of this [Virtualbox error](https://github.com/kalabox/kalabox-app-pantheon/issues/39).

```
Kernel driver not installed (rc=-1908)

The VirtualBox Linux kernel driver (vboxdrv) is either not loaded or there is a permission problem with /dev/vboxdrv. Please reinstall the kernel module by executing

'/etc/init.d/vboxdrv setup'

as root. If it is available in your distribution, you should install the DKMS package first. This package keeps track of Linux kernel changes and recompiles the vboxdrv kernel module if necessary.
```

On debian based OS you can fix this by running:

`sudo /etc/init.d/vboxdrv setup` and rerun the `kbox` commands.

II. [More merciful retries for people with slower/sporadic internet?](https://github.com/kalabox/kalabox/issues/664)
