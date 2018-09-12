<?php

namespace FriendsOfCat\LaravelFeatureFlags;
use Facades\FriendsOfCat\LaravelFeatureFlags\Feature;

class FeatureFlagsForJavascript
{
    public static function get()
    {
        $flags = FeatureFlag::all();

        $results = [];
        foreach ($flags as $feature_flag) {
            $results[$feature_flag->key] = Feature::isEnabled($feature_flag->key);
        }

        return $results;
    }
}
