<?php

namespace MyCli;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
  protected static $defaultName = "hello_world";

  public function execute(InputInterface $input, OutputInterface $output)
  {
    $output->writeln("<info>Hello World!</info>");

    return Command::SUCCESS;
  }

  protected function configure()
  {
    $this->setDescription('Just says hello world!')
      ->setHelp('Just print "Hello World" in STDOUT');
  }
}
