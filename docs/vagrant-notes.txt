All about Vagrant

Collections of documents and Vagrantfiles used to provision VM's within
cloud providers.

- AWS
- Digital Ocean
- Linode
- Google Cloud Compute

Overview
"To achieve its magic, Vagrant stands on the shoulders of giants.
Machines are provisioned on top of VirtualBox, VMware, AWS, or any other provider.
Then, industry-standard provisioning tools such as shell scripts, Chef, or Puppet, can be used to automatically installed and configure
software on the machine."

Installing Vagrant
	Option one: Download compatible package
	Download vagrant from: https://www.vagrantup.com/downloads.html
	curl -L https://releases.hashicorp.com/vagrant/1.8.1/vagrant_1.8.1_x86_64.deb >> /tmp/vagrant.deb
	sudo dpkg -i /tmp/vagrant.deb

Removing vagrant (Ubuntu)
	rm -rf /opt/vagrant
	rm -rf /usr/bin/vagrant
	#Remove user data
	rm -rf ~/.vagrant.d

Download an image(box)
To use the available boxes just replace {title} and {url} with the information from the following URL
http://www.vagrantbox.es/

 $ vagrant box add {title} {url}
 $ vagrant init {title}
 $ vagrant up

	command:	vagrant box add AntonioMeireles/coreos-stable
	This will download the image and added to a list of downloaded images.

	command: vagrant box add AntonioMeireles/coreos-stable
	==> box: Loading metadata for box 'AntonioMeireles/coreos-stable'
    box: URL: https://atlas.hashicorp.com/AntonioMeireles/coreos-stable
		This box can work with multiple providers! The providers that it
		can work with are listed below. Please review the list and choose
		the provider you will be working with.

		1) parallels
		2) virtualbox

		Enter your choice: 2
		==> box: Adding box 'AntonioMeireles/coreos-stable' (v835.12.0) for provider: virtualbox
    	box: Downloading: https://atlas.hashicorp.com/AntonioMeireles/boxes/coreos-stable/versions/835.12.0/providers/virtualbox.box
		==> box: Adding box 'AntonioMeireles/coreos-stable' (v835.12.0) for provider: virtualbox
    	box: Downloading: https://atlas.hashicorp.com/AntonioMeireles/boxes/coreos-stable/versions/835.12.0/providers/virtualbox.box
		==> box: Successfully added box 'AntonioMeireles/coreos-stable' (v835.12.0) for 'virtualbox'!

Executing commands on an image
	To find information about a providers box, you need to be in the box environment (directory)

	vagrant status	- give the status of the box.
	Current machine states:

					default                   running (virtualbox)

					The VM is running. To stop this VM, you can run `vagrant halt` to
					shut it down forcefully, or you can run `vagrant suspend` to simply
					suspend the virtual machine. In either case, to restart it again,
					simply run `vagrant up`.

	varant halt 					- stop the box(VM), will consult the Vagrant file. (You need to be within the vagrant environment(directory))
	vagrant ssh						- connect to the VM, will consult the Vagrant file to which box to start
	vagrant port					- show the ports that are being forwarded
				The forwarded ports for the machine are listed below. Please note that
				these values may differ from values configured in the Vagrantfile if the
				provider supports automatic port collision detection and resolution.
				22 (guest) => 2222 (host)
	vagrant up 							- Starts the process of creating and starting the VM by default on Virtualbox
	vagrant up --provision	- restart an image, (--provision option means to skip the provisioning process).

			vagrant up --provision
			Bringing machine 'default' up with 'virtualbox' provider...
			==> default: Checking if box 'AntonioMeireles/coreos-stable' is up to date...
			==> default: Clearing any previously set forwarded ports...
			==> default: Clearing any previously set network interfaces...
			==> default: Preparing network interfaces based on configuration...
			default: Adapter 1: nat
			==> default: Forwarding ports...
			default: 22 (guest) => 2222 (host) (adapter 1)
			==> default: Running 'pre-boot' VM customizations...
			==> default: Booting VM...
			==> default: Waiting for machine to boot. This may take a few minutes...
			default: SSH address: 127.0.0.1:2222
			default: SSH username: core
			default: SSH auth method: private key
			==> default: Machine booted and ready!

Destroy a Box (image)
	To delete a running VM(box,image) use the vagrant destroy command:
	vagrant destroy 1a2b3c4d (1a2b3cd4 is the ID of the machine and can be obtained from the global-status print out)

Install Plugins
Complete list can be found here: http://vagrant-lists.github.io/
The command to install plugins is
vagrant plugin install plugin-name

Plugins I installed.
	1. vagrant-aws - AWS
				oss@cmills-Kudu-Pro:~/automation/vagrant-env/test3$ vagrant plugin install vagrant-aws
				Installing the 'vagrant-aws' plugin. This can take a few minutes...
				Installed the plugin 'vagrant-aws (0.7.0)'!
	2. vagrant-lxc - Linux Containers - https://github.com/fgrehm/vagrant-lxc
				oss@cmills-Kudu-Pro:~$ vagrant plugin install vagrant-lxc
				Installing the 'vagrant-lxc' plugin. This can take a few minutes...
				Installed the plugin 'vagrant-lxc (1.2.1)'!
	3.	vagrant-digitalocean - Digital Ocean plugin
				oss@cmills-Kudu-Pro:~/automation/vagrant-env/linuxcontainers$ vagrant plugin install vagrant-digitalocean
				Installing the 'vagrant-digitalocean' plugin. This can take a few minutes...
				Installed the plugin 'vagrant-digitalocean (0.7.10)'!
  4. vagrant-linode - Linode plugin
				oss@cmills-Kudu-Pro:~/automation/vagrant-env/linuxcontainers$ vagrant plugin install vagrant-linode
				Installing the 'vagrant-linode' plugin. This can take a few minutes...
				Installed the plugin 'vagrant-linode (0.2.5)'!
	5. vocker - Plugin for docker - https://github.com/fgrehm/vocker
				oss@cmills-Kudu-Pro:~/automation/vagrant-env/linuxcontainers$ vagrant plugin install vocker
				Installing the 'vocker' plugin. This can take a few minutes...
				Installed the plugin 'vocker (0.4.1)'!

Create up a new vagrant environment
	1. go to https://atlas.hashicorp.com/boxes/search and located the image you would like to use.
	2. Once you located the image create a director with the virtual box name
				example: mkdir vagrant-env/win2008r2-standard
	3. Execute the following command within the directory you created above.
				vagrant init opentable/win-2008r2-standard-amd64-nocm use -f or --force to overwrite the Vagrantfile
				This will create a vagrant file "VagrantFile" within the directory and if the program cannot locate the box locally it will download the file.
				and then spin it up within the default provide (default provider is virtualbox).

Create a new Virtualbox Project
	Make a directory in which to house the image files, then cd into that directory. (VM will inherit the name of the directory as it's name)
				View list of images
					vagrant box list
				If the box is not in the list download the image(box) you want from https://atlas.hashicorp.com/boxes/search
				execute the following command from the command line
					vagrant init
				Modify the Vagrantfile and replace "base" with the path to the box that's located on Atlas.
					config.vm.box = "base" and replace with config.vm.box = "AntonioMeireles/coreos-stable"
				A .vagrant directory will be created after you have saved the modified file.
						Then execute the following command
						vagrant up
				B .vagrant/machines/default/virtualbox is created after running the
						The last directory represent the provider.

						Once the box (image) has been downloaded and configured within virtualbox the directory would look like this:
						drwxrwxr-x 2 oss oss 4096 Mar  9 16:35 .
						drwxrwxr-x 3 oss oss 4096 Mar  7 21:20 ..
						-rw-rw-r-- 1 oss oss   40 Mar  9 16:35 action_provision
						-rw-rw-r-- 1 oss oss   10 Mar  9 16:34 action_set_name
						-rw-rw-r-- 1 oss oss    4 Mar  9 16:34 creator_uid
						-rw-rw-r-- 1 oss oss   36 Mar  9 16:34 id
						-rw-rw-r-- 1 oss oss   32 Mar  9 16:34 index_uuid
						-rw-rw-r-- 1 oss oss  135 Mar  9 16:35 synced_folders

Remove stale Images from vagrant global-status output
Sometimes there are lingering servers within the list for reason of either renaming, removing a project that was instantiated.
To remove stale images from the list use

	command: vagrant global-status --prune

	id       name      provider      state    directory
	-----------------------------------------------------------------------------------------
	1da5356  default   virtualbox    poweroff /home/oss/automation/vagrant-env/coreos-stable
	f8afbb3  default   virtualbox    poweroff /home/oss/automation/vagrant-env/cloudify
	19a90ee  lbsrv001  digital_ocean active   /home/oss/automation/vagrant-env/digital_ocean
	91ae813  websrv001 digital_ocean active   /home/oss/automation/vagrant-env/digital_ocean
	cc8b726  websrv002 digital_ocean off      /home/oss/automation/vagrant-env/digital_ocean
	2bc9a35  dbsrv001  digital_ocean active   /home/oss/automation/vagrant-env/digital_ocean
	6a485da  dbsrv002  digital_ocean active   /home/oss/automation/vagrant-env/digital_ocean

Show connection parameters for a configured virtual machine.

	command: vagrant ssh-config vagrantsrv001

	Host vagrantsrv001
	  HostName 162.243.89.19
	  User root
	  Port 22
	  UserKnownHostsFile /dev/null
	  StrictHostKeyChecking no
	  PasswordAuthentication no
	  IdentityFile "/home/oss/automation/vagrant-env/providers/cloud-platforms/digital_ocean/ansible/playbooks/id_rsa"
	  IdentitiesOnly yes
	  LogLevel FATAL

Rebuild VM and run the provisioning software in this case ansible

Rebuild VM
  command: Vagrant rebuild
  Use this command to rebuild the vm if you modified either the provisioning script (ansible playbook) or Vagrantfile.
  vagrant rebuild
    ==> default: Rebuilding the droplet...
    ==> default: Rsyncing folder: /home/oss/automation/vagrant-env/digital_ocean/ => /vagrant...
    ==> default: Running provisioner: ansible...
      default: Running ansible-playbook...
      [DEPRECATION WARNING]: Instead of sudo/sudo_user, use become/become_user and
      make sure become_method is 'sudo' (default). This feature will be removed in a
      future release. Deprecation warnings can be disabled by setting
      deprecation_warnings=False in ansible.cfg.

      PLAY ***************************************************************************

      TASK [setup] *******************************************************************
      ok: [default]

      TASK [Install Packages] ********************************************************
      changed: [default] => (item=[u'git', u'curl', u'apache2'])

      PLAY RECAP *********************************************************************
      default                    : ok=2    changed=1    unreachable=0    failed=0
