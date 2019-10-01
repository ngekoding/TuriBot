<?php

namespace TuriBot;

interface ApiInterface
{
    function Request($method, array $data);
}