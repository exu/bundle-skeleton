<?php
namespace Composer;

use Composer\IO\IOInterface;
use Composer\Script\Event;
use Symfony\Component\Yaml\Inline;
use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Yaml;

class ScriptHandler
{
    public static function buildProject(Event $event)
    {
        $io = $event->getIO();
        $io->write('<info>Hi</info> I need to replace all things');
    }
}
