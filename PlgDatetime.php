<?php 
/**
 * @file PlgDatetime.php
 * The plugin for a marketeer that provides information about date and time
 * Lang en
 * Reviewstatus: 2024-03-13
 * Localization: complete
 * Documentation: complete
 * Tests: Unit/Semantic/SemanticTest.php
 * Coverage: unknown
 */

use Sunhill\Framework\Plugins\Plugin;
use IsaEken\PluginSystem\Enums\PluginState;

class PlgDatetime extends Plugin
{
    
    protected string $name = 'DateTime';
    
    protected string|array $author = 'Klaus Dimde';
    
    protected string $version = '0.0.1';
    
    protected PluginState $state = PluginState::Enabled;
    
    protected $provides = ['marketeer'];
    
}