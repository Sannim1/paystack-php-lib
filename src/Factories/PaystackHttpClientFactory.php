<?php

/*
 * The MIT License
 *
 * Copyright 2016 Malik Abiola(abiola.malik@gmail.com).
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Paystack\Factories;
/**
 * Description of PaystackHttpClientFactory
 *
 * @author Doctormaliko
 */

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;


class PaystackHttpClientFactory {
    //put your code here
    public static function make($config = [])
    {

        $defaults = [
            'base_uri' => "api.paystack.co",
            'headers'     => [
                'Authorization'    => "Bearer " . getenv('PAYSTACK_SECRET_KEY'),
                'Content-Type' => 'application/json',
            ],
            'http_errors' => false,
            'handler'     => HandlerStack::create(new CurlHandler())
        ];

        if (!empty($config)) {
            $defaults = array_merge($defaults, $config);
        }

        return new Client($defaults);
    }
}