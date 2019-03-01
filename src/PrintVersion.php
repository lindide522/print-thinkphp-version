<?php
namespace PrintVersion;
/**
* 这是自定义的命令
*/
use think\console\Command;
use think\console\Input;
use think\console\Output;

class PrintVersion extends Command
{
    protected function configure()
    {
        $this->setName('version')->setDescription('show thinkphp version ');
    }

    protected function execute(Input $input, Output $output)
    {
        $output->writeln("this thinkphp version is:".THINK_VERSION.'');
    }
}