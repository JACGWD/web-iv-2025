# Week 3 Course Notes

## Introduction to UX and Flow

### Virtual Machines

A **virtual machine** is a fully functional computer that runs as software-only on another computer.

Virtual machines are often used as servers, or for example letting macOS (or Linux users) run Windows software on their machines. 

In design and development, virtual machines let designers test web sites on different browsers or devices. It also lets developers try test different setups quickly as they can revert the virtual machine to default without having to erase and reinstall everything from scratch as they would on a real machine. 

#### VM Software for Mac

- Parallels Desktop (commercial)
- VMware Fusion (commercial)
- UTM (open source)
- VirtualBox (open source; not available for Apple Silicon)

See: [https://www.macworld.com/article/668848/best-virtual-machine-software-for-mac.html](https://www.macworld.com/article/668848/best-virtual-machine-software-for-mac.html)

### Intro to Human-Computer Interfaces 

Human-Computer interfaces ("HCI") can be divided into three main categories:

#### 1. Punch Cards

Punched cards were a simple way to store or input binary (ones or zeros) data into computers before the invention of the command-line interface. 

Cards represented information in a table-like grid of rows and columns. Each intersection would have a hole or no hole at all, representing the answer to a true or false statement. 

For example, the rows might represent an alphabetical list of students. The columns would be attendance on a school days. A hole at the intersection would mean the student was absent while no hole would mean the student was present. 

[https://en.m.wikipedia.org/wiki/Punched_cards](https://en.m.wikipedia.org/wiki/Punched_cards)

#### 2. Command-line interface (CLI)

The oldest digital interface is text only and arrived in the 1960s. 

[https://en.m.wikipedia.org/wiki/Command-line_interface](https://en.m.wikipedia.org/wiki/Command-line_interface)

#### 3. Text-based user interface (TUI)

The dominant interface in the late 1970s and early 1980s before the launch of the Apple Macintosh which popularized the Graphical User Interface that [Xerox had invented](https://en.m.wikipedia.org/wiki/Xerox_Alto)

[https://en.m.wikipedia.org/wiki/Text-based_user_interface](https://en.m.wikipedia.org/wiki/Text-based_user_interface)

See: Fumbling the Future [https://archive.org/details/fumblingfutureho0000smit]https://archive.org/details/fumblingfutureho0000smit

#### 4. Graphic User Interface (GUI)

The dominant interface metaphor since 1984. 

[https://en.m.wikipedia.org/wiki/Graphical_user_interface](https://en.m.wikipedia.org/wiki/Graphical_user_interface)

### User Interface Project

Sometimes, an interface project is to modernize a legacy system from a TUI to a GUI. 

Step one is to map the screens in the order they are seen when using the program. When all assembled, the series of screens will be a flowchart of the path the user follows. 

#### Start the application to be redesigned 

##### Overview

1. Download the s2.5Gb [Ubuntu server for ARM chips installation disk](https://cdimage.ubuntu.com/releases/24.04/release/ubuntu-24.04.1-live-server-arm64.iso)
2. Start the VM software
3. Assign Ubuntu as the boot disk
4. Start the VM
5. Follow the steps in the installer
6. Take a cellphone picture of each screen
7. Click every option to see every screen
8. Draw a simple diagram of each screen
9. Add a number (and subnumber if necessary) to keep track of the order of the diagrams:

1. Home screen
2. User info
   2.1 Name
   2.2 Password 

10. If a screen has to many options (ex: languages) do the first few then add an ellipsis (…)