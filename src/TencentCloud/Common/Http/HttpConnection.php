<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Common\http;

use GuzzleHttp\Client;

/**
 * http连接类
 * @package TencentCloud\Common\http
 */
class HttpConnection
{
    private $client;
    private $profile;
    function __construct($url, $profile)
    {
        $this->client = new Client(["base_uri" => $url]);
        $this->profile = $profile;
    }

    private  function getOptions()
    {
        $options = ["allow_redirects" => false];
        $options["timeout"] = $this->profile->getHttpProfile()->getReqTimeout();
        return $options;
    }

    public function getRequest($uri = '', $query = [], $headers = [])
    {
        $options = $this->getOptions();

        if ($query) {
            $options["query"] = $query;
        }

        if ($headers) {
            $options["headers"] = $headers;
        }
        return $this->client->get($uri, $options);
    }

    public function postRequest($uri = '', $headers = [], $body = '')
    {
        $options  = $this->getOptions();
        if ($headers) {
            $options["headers"] = $headers;
        }

        if ($body) {
            $options["form_params"] = $body;
        }
        return $this->client->post($uri, $options);
    }
}

