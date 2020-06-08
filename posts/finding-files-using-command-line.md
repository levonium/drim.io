---
layout: post.njk
title: Finding Files using Command Line
description: Interactions with Files and Folders on Command Line
footer: 1
---

Several useful commands for interactions with files and directories.

## Find all files recursively by name

```zsh
# Returns a list of all files and directories recursively exactly matching the NAME
find . -name 'NAME'

# Returns a list of all files (skips directories) recursively exactly matching the NAME
find . -name '.NAME' -type f

# Returns a list of all directories (skips files) recursively exactly matching the NAME
find . -name '.NAME' -type d
```

**Example**: Finds and lists all '.js' files (recursively starting the current directory)
```zsh
find . -name '*.js' -type f -delete
```

**Example**: Finds and lists all files except '.js' (recursively starting the current directory)
```zsh
find . \! -name '*.js' -type f -delete
```

**Example**: Finds and deletes all '.DS_Store' starting the current directory.

```zsh
find . -name '.DS_Store' -type f -delete
```

## Find all files recursively by content

Perhaps there's a proper way for doing this, but this does it, too.

```zsh
# Returns a lit of all files containing the string "oh dear"
find . -type f | cat | grep "oh dear"
```
