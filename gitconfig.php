<?php
set_include_path('includes:../includes');
 ?>

<?php
include 'header.inc';
?>

<?php
include 'navbar.inc'
?>

<?php
include 'left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
  <div class="container-fluid">

    <!-- Begin Content -->
    <div class="page-header">
      <h2>GIT Configuration file</h2>
      <ul class="pager">
        <li class="previous"><a href="use-git.php">Using GIT</a></li>
        <li class="next disabled"><a href="gitconfig.php">Next</a></li>
      </ul>
    </div>

    <pre>
    [user]
      email = user@domainname.com
      name = Your Name
    </pre>

    <pre>
    [push]
      default = simple
    </pre>

    <pre>
    [core]
    editor = vi
    </pre>

    <pre>
      [alias]
        # Show short summary,branch,untracked files and changed content within the files.
        st = status -sbu -v
    </pre>

    <pre>
      # Show branch name
      brname = !git branch | grep "^*" | awk '{print $2 }'
    </pre>

    <pre>
      # Show all branches
      br = branch -av
    </pre>

    <pre>
      # delete branch
      brdel = branch -D
    </pre>

    <pre>
      # Show remote repositories
      repo = remote -v
    </pre>

    <pre>
      standup = !git log --reverse --branches --since=$(if [[ "Mon" == "$(date +%a)" ]]; then echo "last friday"; else echo "yesterday"; fi) --author=$(git config --get user.email) --format=format:'%C(cyan) %ad %C(yellow)%h %Creset %s %Cgreen%d' --date=local"
    </pre>

    <pre>
      # Show the current branch name (usefull for shell prompts)
      brname = !git branch | grep "^*" | awk '{ print $2 }
    </pre>
    <pre>
      # Show the root of the repository
      top = rev-parse --show-toplevel
    </pre>

    <pre>
      churn = !git log --all -M -C --name-only --format='format:' "$@" | sort | grep -v '^$' | uniq -c | sort | awk 'BEGIN {print "count,file"} {print $1 "," $2}'
    </pre>

    <pre>

       # remove a remote repository
       rmrepo = remote remove
    </pre>

    <ul class="pager">
      <li class="previous"><a href="use-git.php">Using GIT</a></li>
      <li class="next disabled"><a href="gitconfig.php">Next</a></li>
    </ul>

    <!-- End Content -->

  </div>
</div>
<!--- end center column --->

<?php
include 'git-right-column.inc';
?>

<?php
include 'footer.inc';
 ?>
