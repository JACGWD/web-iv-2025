# Install Bitnami MAMP

<div style="border: 1px solid red; padding: 1rem; width: fit-content; margin: 2rem auto;">

## IMPORTANT NOTE

If you are installing on your own computer (macOS or PC), <a href="https://www.mamp.info/en/mac/">please use MAMP instead</a>.</div>

## 1. Download Bitnami 

<strong>Bitnami Desktop has been discontinued.</strong> This is the last published version, shared from my OneDrive. Eventually it will no longer be compatible with macOS. 

[Download Bitnami from my OneDrive](https%3a%2f%2fjohnabbott-my.sharepoint.com%2f%3au%3a%2fg%2fpersonal%2fericgirouard_johnabbott_qc_ca%2fEeABv0hf_B9LmS2l9Fr24HsBscy1k5bDM1lxLRiuygIoGw%3fe%3dRZ1Pn2)

## 2. Mount the virtual drive and start the installer

Bitnami was distributed as a DMG ("disk image") which is essentially a virtual DVD disk.

![Mounted DMG](./img/week-1/01-mount-dmg.png)

1. Double-click to mount the DMG as a volume available to be read by your system.
2. Double-click to start the installer.

## 3. Disable all optional software

![Disable all optional software](./img/week-1/02-disable-all.png)

We only need the basics in this class.

## 4. Install in a Local Folder (not cloud synced)

### If you are installing on your own computer <a href="https://www.mamp.info/en/mac/">please use MAMP instead!</a>

If you are installing Bitnami or MAMP on your own macOS machine, <strong>do not install the software in a folder that is saved to iCloud</strong>. For example: Desktop or Documents. 

You can create a new "Local Documents" folder within your home folder and install the software there.

![Install screen](./img/week-1/03-desktop-folder.png)

![Do not install in iCloud folders](./img/week-1/04-no-icloud.png)

### Alternatively, turn iCloud Desktop & Documents Sync off

![Turn iCloud off in Settings](./img/week-1/05-icloud-off.png)



## 5. Root User Credentials

<div style="border: 1px solid red; padding: 1rem; width: fit-content; margin: 2rem auto;">

## Super Important

Do not forget these credentials! 

1. Create a plain text file, named it "bitnami.txt"
2. Write the root user name and password inside it
3. Save it in the same folder as the Bitnami folder
4. Suggestion: user: bitnami and password: bitnami

</div>

### What is a root user?

"The root user is the most powerful entity in the Linux universe with limitless powers, for better or worse. Create a user? Got it. Annihilate a file system? Whoops, got that too."

See this article on the root user story: [https://www.howtogeek.com/737563/what-is-root-on-linux/](https://www.howtogeek.com/737563/what-is-root-on-linux/)


## 6. No Cloud Option

![No Cloud Options Needed](./img/week-1/06-no-cloud.png)

We do not need to use the Bitnami cloud services.


## 7. Proceed to the installation

![Click Next](./img/week-1/07-next.png)

## 8. Wait for the installation to complete

![Please wait...](./img/week-1/08-minutes.png)

(It takes a while...)

## 9. Launch MAMP

![launch MAMP](./img/week-1/09-launch-mamp.png)

## 10. A Good Sign

![Servers are running](./img/week-1/10-servers-running.png)

If you see these two green dots, it means everything is running the way it should.


## 11. The Three Buttons

![3 Bitnami buttons](./img/week-1/11-buttons.png)

1. Opens the default web application installed in Bitnami/apache2/htdocs (in our case this will be Wordpress).
2. Opens the MySQL/MariaDB database management web application PHPMyAdmin.
3. Opens the Bitnami folder on your computer.

## 12. Always Shutdown at the End of Class

![Bitnami stopped](./img/week-1/12-bitnami-stopped.png)

1. Always stop the servers and quit Bitnami at the end of class.
2. Otherwise, the next person coming in will not be able to use Bitnami with changing the configuration or restarting the computer!