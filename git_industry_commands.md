## 1. Git Configuration Commands
## git config --global user.name
Syntax: git config --global user.name "your name"
Purpose:Sets global user name for commits
Example: git config --global user.name "madhuri-220486"
Scrrenshot:

## git config --global user.email
Syntax: git config --global user.email  "your email"
Purpose:Sets globalemail foe commits
Example:git config --global user.email "n220486@rguktn.ac.in"

## git config --list
Syntax: git config --list 
Purpose:Displays all Git configuration settings
Example:git config --list


## git config --unset
Syntax:git config --unset user.name
Purpose:Removes a configuration setting
Example:git config --unset user.name


## 2. Repository Setup Commands
## git init
Syntax: git init
Purpose:Initialize a new git repository 
Example:git init 

## git clone
Syntax: git clone repository_url
Purpose:Copies a remote repository locally
Example:git clone https://github.com/madhuri-220486/.git


## git clone --branch
Syntax: git clone --branch branch-name repository_url
Purpose: Clones a specific branch only
Example:git clone --branch test https://github.com/madhuri-220486/.git

## git clone --depth
Syntax: git clone --depth 1 repository_url
Purpose: Shallow clone(latest commits only)
Example:git clone --depth 2  test https://github.com/madhuri-220486/.git

## 3. Repository Status & Inspection
## git status
Syntax: git status
Purpose:Shows working directory status
Example:git status

## git log
Syntax: git log
Purpose:Displays commit history
Example:git log

git log --oneline
## git log --oneline
Syntax: git log --oneline
Purpose:Showws compact commit history
Example:git log --oneline

## git log --graph
Syntax: git log --graph --all --oneline 
Purpose:Shows Commit graph visually
Example:git log --graph --all --oneline 

## git show
Syntax: git show commit_hash
Purpose:Shows detailed commit information
Example:git show a1b2c3d

## git diff
Syntax: git diff
Purpose:Shows unstaged changes
Example:git diff

## git diff --staged
Syntax: git diff --staged
Purpose:Shows staged changes
Example:git diff --staged

## git blame
Syntax: git blame filename
Purpose:Shows who modified each line 
Example:git blame login.html

## git reflog
Syntax:git reflog
Purpose:Shows reefernce log history
Example:git reflog
## git shortlog
Syntax:git shortloh
Purpose:Summary of commits by author
Example:git shortlog


## 4. File Tracking Commands
## git add
Syntax:git add filename
Purpose:Stages specific file
Example:git add git_industry_commands.md

## git add .
Syntax:git add .
Purpose:Stages aall chages
Example:git add .

## git add -p
Syntax:git add -p
Purpose:interactive staging
Example:git add -p

## git restore
Syntax:git restore filename
Purpose:Discards working directory changes
Example:git restore download.php
## git restore --staged
Syntax:git restore --staged filename
Purpose:Unstages files
Example:git restore --staged git_industry_commands.md


## git mv
Syntax: git mv oldname newname
Purpose:Renames file
Example:git mv hi.php new.php

## git rm
Syntax:git rm filename
Purpose:Removes File from repo
Example:git rm hi.php

## 5. Commit Commands
## git  commit
Syntax:git commit
Purpose:Creates commit
Example:git commit


## git commit -m 
Syntax:git commit -m  "message"
Purpose: commit with message
Examplegit commit -m "git_industry_commands.md added"


## git commit --amend
Syntax:git commit --amend --no-edit
Purpose:Amend without changing message
Example:git commit --amend --no-edit

## 6. Branch Management Commands
## git branch 
Syntax: gir branch 
Purpose:Lists local branches
Example:git branch

## git branch -a
Syntax:git branch -a
Purpose:Lists all branches(Local,Remote)
Example:git branch -a

## git branch -d 
Syntax:git branch -d branchname
Purpose:deletes a merged branch 
Example:git branch -d feature-login

## git branch -D
Syntax:git branch -D branchname
Purpose:Force delete branch(even if not merged)
Example:git branch -D feature-login

## git  checkout 
Syntax:git checkout branch-name
Purpose:switches to another branch
Example:git checkout feature-login


## git checkout -b
Syntax:git checkout -b branch-name
Purpose: creates and switches to a new branch
Example:git checkout -b feature-login

## git switch
Syntax:git switch branch-name
Purpose:Switch branch
Example:git switch main

## git switch -c
Syntax:git switch -c new-branch-name
Purpose:creates and Switch branch
Example:git switch dev
![alt text](image.png)


## 7. Merge & Integration Commands
## git merge
Syntax:git merge branch-name
Purpose: Merges specified branch into current branch.
Example:git merge feature-auth

## git merge --no-ff
Syntax:git merge --no-ff branch-name
Purpose: Creates merge commit even if fast-forward possible.
Example:git merge --no-ff feature-auth

## 8️ Remote Repository Commands
## git remote
Syntax:git remote
Purpose: Lists remote names.
Example:git remote

## git remote -v
Syntax:git remote -v
Purpose: Shows remote URLs.
Example:git remote -v

## git remote add
Syntax:git remote add origin repository_url
Purpose: Adds remote repository.
Example:git remote add origin https://github.com/madhuri-220486/repo.git
## git remote remove
Syntax:git remote remove remote-name
Purpose: Removes remote.
Example:git remote remove origin

## git fetch
Syntax: git fetch
Purpose: Downloads remote changes (no merge).
Example: git fetch

## git fetch --all
Syntax:git fetch --all
Purpose: Fetches from all remotes.
Example:git fetch --all

46. git pull
Syntax:git pull
Purpose: Fetch + merge remote changes.
Example:git pull

## git pull --rebase
Syntax:git pull --rebase
Purpose: Fetch + rebase instead of merge.
Example:git pull --rebase

## git push
Syntax:git push
Purpose: Push local commits to remote.
Example:git push

## git push -u origin branch-name
Syntax:git push -u origin branch-name
Purpose: Push and set upstream tracking.
Example:git push -u origin feature-auth

50. git push --force
Syntax:git push --force
Purpose: Force push (overwrites remote history).
Example:git push --force

## 9️ Stash Commands
## git stash
Syntax: git stash
Purpose: Temporarily saves uncommitted changes.
Example: git stash

## git stash list
Syntax: git stash list
Purpose: Shows stash entries.
Example: git stash list

## git stash pop
Syntax: git stash pop
Purpose: Applies and removes latest stash.
Example: git stash pop

## git stash apply
Syntax: git stash apply
Purpose: Applies stash without removing.
Example: git stash apply

## git stash drop
Syntax: git stash drop stash@{0}
Purpose: Deletes specific stash.
Example: git stash drop stash@{0}

## git stash clear
Syntax: git stash clear
Purpose: Deletes all stashes.
Example: git stash clear


## 10 Reset & Undo Commands
## git reset
Syntax:
git reset commit-hash
Purpose: Moves HEAD to specified commit (default = mixed).
Example:
git reset HEAD~1
## git reset --soft
Syntax:

git reset --soft commit-hash
Purpose: Moves HEAD but keeps changes staged.
Example:

git reset --soft HEAD~1
## git reset --mixed
Syntax:

git reset --mixed commit-hash
Purpose: Moves HEAD and unstages changes (default).
Example:

git reset --mixed HEAD~1
## git reset --hard
Syntax:

git reset --hard commit-hash
Purpose: Completely resets working directory and staging area.
Example:

git reset --hard HEAD~1
## git revert
Syntax:

git revert commit-hash
Purpose: Creates new commit that reverses changes.
Example:

git revert a1b2c3d
## git clean -f
Syntax:

git clean -f
Purpose: Removes untracked files.
Example:

git clean -f
## git clean -fd
Syntax:

git clean -fd
Purpose: Removes untracked files and directories.
Example:

git clean -fd
## 1️1️ Rebasing Commands
## git rebase
Syntax:

git rebase branch-name
Purpose: Reapplies commits on top of another branch.
Example:

git rebase main
## git rebase -i
Syntax:

git rebase -i HEAD~n
Purpose: Interactive rebase (edit/squash/reorder commits).
Example:

git rebase -i HEAD~3
## git rebase --continue
Syntax:

git rebase --continue
Purpose: Continues rebase after resolving conflicts.
Example:

git rebase --continue
## git rebase --abort
Syntax:

git rebase --abort
Purpose: Cancels rebase process.
Example:git rebase --abort

## 1️2️ Cherry Pick & Patch Commands
68. git cherry-pick
Syntax:

git cherry-pick commit-hash
Purpose: Applies specific commit to current branch.
Example:

git cherry-pick a1b2c3d
## git format-patch
Syntax:

git format-patch -n
Purpose: Creates patch file from commits.
Example:

git format-patch -1 a1b2c3d
## git apply
Syntax:

git apply patch-file.patch
Purpose: Applies patch to working directory.
Example:git apply 0001-fix.patch
## git am
Syntax:git am patch-file.patch
Purpose: Applies patch and creates commit.
Example:git am 0001-fix.patch

## 1️3Tagging Commands
## git tag
Syntax:git tag
Purpose: Lists tags.
Example:git tag

## git tag -a
Syntax:git tag -a tag-name -m "message"
Purpose: Creates annotated tag.
Example:git tag -a v1.0 -m "Version 1.0 release"


## git tag -d
Syntax:
git tag -d tag-name
Purpose: Deletes tag locally.
Example:
git tag -d v1.0

## git push origin --tags
Syntax:
git push origin --tags
Purpose: Pushes all tags to remote.
Example:git push origin --tags

## 1️4️Submodule Commands
76. git submodule add
Syntax:git submodule add repository_url
Purpose: Adds another repository as submodule.
Example:git submodule add https://github.com/madhuri-220486/library.git

## git submodule init
Syntax:git submodule init
Purpose: Initializes submodules.
Example:git submodule init

## git submodule update
Syntax:git submodule update
Purpose: Updates submodules to recorded commit.
Example:git submodule update

## 1️5️ Debugging Commands
## git bisect
Syntax:git bisect
Purpose: Binary search to find buggy commit.
Example:git bisect
## git bisect start
Syntax:git bisect start
Purpose: Starts bisect session.
Example:git bisect start

## git bisect good
Syntax:git bisect good commit-hash
Purpose: Marks commit as good.
Example:git bisect good a1b2c3d

## git bisect bad
Syntax:git bisect bad commit-hash
Purpose: Marks commit as bad.
Example:git bisect bad f4e5d6c