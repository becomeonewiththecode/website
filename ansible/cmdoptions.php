<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='Journey into using code and open source tools to create change'>
    <meta name="keywords" content="GIT, ansible, docker, terraform, consul, vagrant, config management, continous integration, continuos delivery, change managment ">
    <title>Ansible Command Line Options</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
</head>
<body>

<?php
set_include_path('includes:../includes');
?>

<?php
include 'navbar.inc'
?>

<?php
include 'ansible-left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
 <div class="container-fluid">
   <!--- begin content --->
   <div class="page-header">
   <h1>Ansible Command Line Options</h1>
   </div>

   <div>
     <h2>Check Playbook Syntax</h2>
   </div>
    It's a good idea to check your playbook prior to executing to save time especially if it's a long running playboook. The command to do this is:
    Ansible-playbook --syntax-check sudo.yml
    <pre>
      [oss:~/repos/ansible] dev(+15/-7,3)* ± ansible-playbook --syntax-check sudo.yml
      ERROR! 'servername' is undefined
    </pre>

    If you look at the playbook below you will notice the hosts section is define by the variable '{{servername}}' which is expected to be assigned from the command line.
    <pre>
      ## Playbook utilizing tags
      ## to skip a tag use --skip-tag "tag name"
      ## to run a specific tag use --tags "tag name"
      --- # Install sudo
      - hosts: '{{servername}}'
        user: root
        become: no
        connection: ssh
        gather_facts: yes
        tasks:
          - name: Install Sudo package on Debian systems
            apt: pkg={{item}} state=latest
            with_items:
              - sudo
            when: ansible_os_family == "Debian"
            tags:
              - debianos

          - name: Install Sudo package on RHEL based systems
            yum: pkg={{item}} state=latest
            with_items:
              - sudo
            when: ansible_os_family == "RedHat"
            tags:
              - rhelos

          - name: Check sudo is installed
            shell: cat /etc/sudoers
            register: outputlist
          - debug: msg="'{{outputlist.stdout}}'"
            tags:
              - sudoexist
    </pre>
<div>
  <h2>Pass variables into a playbook from the command line</h2>
</div>

      ansible-playbook sudo.yml -e "servername=srv5"


<div>
  <h2>List hosts within a host file</h2>
</div>
  ansible all --list-hosts

<pre>
  oss:~/repos/ansible] dev(+15/-7,3)* ± ansible all --list-hosts
    hosts (8):
      srv2
      107.170.128.116
      107.170.116.31
      srv3
      srv4
      srv5
      localhost
      ops
</pre>

<div>
  <h2>Run certain section of a playbook</h2>
</div>

Only run part of a playbook tasks
use: ansible-playbook sudo.yml -e "servername=srv4" --start-at-task-'Check sudo is installed'

<pre>
  [oss:~/repos/ansible] dev(+16/-7,3)* 130 ± ansible-playbook sudo.yml -e "servername=srv5" --start-at-task='Check sudo is installed'

  PLAY [srv5] ********************************************************************

  TASK [setup] *******************************************************************
  ok: [srv5]

  TASK [Check sudo is installed] *************************************************
  changed: [srv5]

  TASK [debug] *******************************************************************
  ok: [srv5] => {
      "outputlist": {
          "changed": true,
          "cmd": "cat /etc/sudoers",
          "delta": "0:00:00.007668",
          "end": "2016-07-03 20:58:30.501028",
          "rc": 0,
          "start": "2016-07-03 20:58:30.493360",
          "stderr": "",
          "stdout": "#\n# This file MUST be edited with the 'visudo' command as root.\n#\n# Please consider adding local content in /etc/sudoers.d/ instead of\n# directly modifying this file.\n#\n# See the man page for details on how to write a sudoers file.\n#\nDefaults\tenv_reset\nDefaults\tsecure_path=\"/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin\"\n\n# Host alias specification\n\n# User alias specification\n\n# Cmnd alias specification\n\n# User privilege specification\nroot\tALL=(ALL:ALL) ALL\n\n# Members of the admin group may gain root privileges\n%admin ALL=(ALL) ALL\n\n# Allow members of group sudo to execute any command\n%sudo\tALL=(ALL:ALL) ALL\n\n# See sudoers(5) for more information on \"#include\" directives:\n\n#includedir /etc/sudoers.d",
          "stdout_lines": [
              "#",
              "# This file MUST be edited with the 'visudo' command as root.",
              "#",
              "# Please consider adding local content in /etc/sudoers.d/ instead of",
              "# directly modifying this file.",
              "#",
              "# See the man page for details on how to write a sudoers file.",
              "#",
              "Defaults\tenv_reset",
              "Defaults\tsecure_path=\"/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin\"",
              "",
              "# Host alias specification",
              "",
              "# User alias specification",
              "",
              "# Cmnd alias specification",
              "",
              "# User privilege specification",
              "root\tALL=(ALL:ALL) ALL",
              "",
              "# Members of the admin group may gain root privileges",
              "%admin ALL=(ALL) ALL",
              "",
              "# Allow members of group sudo to execute any command",
              "%sudo\tALL=(ALL:ALL) ALL",
              "",
              "# See sudoers(5) for more information on \"#include\" directives:",
              "",
              "#includedir /etc/sudoers.d"
          ],
          "warnings": []
      }
  }

  PLAY RECAP *********************************************************************
  srv5                       : ok=3    changed=1    unreachable=0    failed=0
</pre>

   <!--- end content --->

 </div>
</div>
<!--- end center column --->

<?php
include 'right.inc';
?>

<?php
include 'footer.inc';
?>
