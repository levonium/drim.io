---
extends: _layouts.posts
title: zsh - Git Completion on Mac
description: zsh - Git Completion on Mac
section: content
---

## Steps to enable git completions on a mac using zsh.

1. If `~/.git-completion.bash` file doesn't exist, download it:
```bash
curl https://raw.githubusercontent.com/git/git/master/contrib/completion/git-completion.bash > ~/.git-completion.bash
```

2. Download the zsh completions file:
```bash
curl https://raw.githubusercontent.com/git/git/master/contrib/completion/git-completion.zsh > ~/.zsh/.git-completion.zsh
```

3. Add this to `~/.zshrc`
```bash
# Load Git completions
zstyle ':completion:*:*:git:*' script ~/.zsh/.git-completion.zsh
autoload -Uz compinit && compinit
```

4. Restarts the shell:
```bash
source ~/.zshrc
```

Sometimes this is enough :-)
