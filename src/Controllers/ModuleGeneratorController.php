<?php
namespace Vssenterprise\ModuleGenerator\Controllers;

use Illuminate\Http\Request;
use Vssenterprise\ModuleGenerator\Models\ModuleGenerator;

class ModuleGeneratorController
{
    public function __invoke(ModuleGenerator $moduleGenerator) {
        $test = $moduleGenerator->test();

        return view('module-generator::index', compact('test'));
    }
}
