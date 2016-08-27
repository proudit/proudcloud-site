require 'spec_helper'

# Workaround needed for circleCI
if ENV['CIRCLECI']
  class Docker::Container
    def remove(options={}); end
    alias_method :delete, :remove
  end
end

describe "apache2" do
  describe package("apache2") do
    it { should be_installed }
  end

  describe file("/var/www/html/index.php") do
    its(:content) { should match /Proud Colud | Proudit Inc./ }
    its(:content) { should_not match /Apache/ }
  end
end
