{ pkgs }: {
  deps = [
    pkgs.apacheHttpdPackages.php
    pkgs.figlet
    pkgs.bashInteractive
    pkgs.nodePackages.bash-language-server
    pkgs.man
  ];
}