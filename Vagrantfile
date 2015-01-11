
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "base"
  config.vm.box_url = "http://files.vagrant.com/precise32.box"

  config.vm.network "forwarded_port", guest: 80, host: 8080


  config.vm.network "private_network", ip: "192.168.33.10"

  config.vm.provision :shell, :path => "install.sh"

end
