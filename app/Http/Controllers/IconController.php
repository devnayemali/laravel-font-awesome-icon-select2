<?php

namespace App\Http\Controllers;

class IconController extends Controller
{
    public function index()
    {
        $faIcons = $this->getFAIcons();
        return view('font_awesome_icon', compact('faIcons'));
    }

    public function getFAIcons($with_null = null): array
    {
        $icons = $with_null == null ? [] : ['' => ''];
        $filePath = public_path('assets/css/all.min.css');

        $content = file_get_contents($filePath);

        preg_match_all('/\.fa-([a-z0-9\-]+):before\s*{/', $content, $matches);

        if (!empty($matches[1])) {
            foreach ($matches[1] as $icon) {
                $class = 'fa fa-' . $icon;
                $icons[$class] = ucfirst(str_replace('-', ' ', $icon));
            }
        }

        return $icons;
    }
}
