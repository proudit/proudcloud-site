require "docker"
require "serverspec"

set :backend, :docker
set :docker_url, ENV["DOCKER_HOST"]
if ENV['DOCKER_IMAGE']
  set :docker_image, ENV['DOCKER_IMAGE']
elsif ENV['DOCKER_CONTAINER']
  set :docker_container, ENV['DOCKER_CONTAINER']
end

Excon.defaults[:ssl_verify_peer] = false
