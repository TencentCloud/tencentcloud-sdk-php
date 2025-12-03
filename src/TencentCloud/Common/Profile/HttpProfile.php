<?php
/*
 * Copyright (c) 2017 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
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

namespace TencentCloud\Common\Profile;

/**
 * HTTP related parameters class
 * Class HttpProfile
 * @package TencentCloud\Common\Profile
 */
class HttpProfile
{

    /**
     * @var string HTTPS access
     */
    public static $REQ_HTTPS = "https://";

    /**
     * @var string HTTP access
     */
    public static $REQ_HTTP = "http://";

    /**
     * @var string  POST request
     */
    public static $REQ_POST = "POST";

    /**
     * @var string  GET request
     */
    public static $REQ_GET = "GET";

    /**
     * @var int One minute in seconds
     */
    public static $TM_MINUTE = 60;

    /**
     * @var string HTTP request method
     */
    private $reqMethod;

    /**
     * @var string Request endpoint domain
     */
    private $endpoint;

    /**
     * @var integer Request timeout, in seconds
     */
    private $reqTimeout;

    /**
     * @var string Request protocol
     */
    private $protocol;

    /**
     * @var string|array Request proxy
     */
    private $proxy;

    /**
     * @var string
     */
    private $rootDomain;

    /**
     * @var boolean
     */
    private $keepAlive;

    /**
     * HttpProfile constructor.
     * @param string $protocol  Request protocol
     * @param string $endpoint  Request endpoint domain(xx.[region.]tencentcloudapi.com)
     * @param string $reqMethod HTTP request method, currently supports POST GET
     * @param integer $reqTimeout Request timeout, in seconds
     */
    public function __construct($protocol = null, $endpoint = null, $reqMethod = null,  $reqTimeout = null)
    {
        $this->reqMethod = $reqMethod ? $reqMethod : HttpProfile::$REQ_POST;
        $this->endpoint = $endpoint;
        $this->reqTimeout = $reqTimeout ? $reqTimeout : HttpProfile::$TM_MINUTE;
        $this->protocol = $protocol ? $protocol : HttpProfile::$REQ_HTTPS;
        $this->rootDomain = "tencentcloudapi.com";
        $this->keepAlive = false;
    }

    /**
     * Set HTTP request method
     * @param string $reqMethod HTTP request method, currently supports POST GET
     */
    public function setReqMethod($reqMethod)
    {
        $this->reqMethod = $reqMethod;
    }

    /**
     * Set request protocol
     * @param string $protocol Request protocol (https://  http://)
     */
    public function setProtocol($protocol) {
        $this->protocol = $protocol;
    }

    /**
     * Set request endpoint domain
     * @param string $endpoint Request endpoint domain(xx.[region.]tencentcloudapi.com)
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * Set request timeout
     * @param integer $reqTimeout Request timeout, in seconds
     */
    public function setReqTimeout($reqTimeout)
    {
        $this->reqTimeout = $reqTimeout;
    }

    /**
     * Set request proxy
     * @param string|array $proxy Request proxy configuration
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
    }

    /**
     * Get request method
     * @return null|string Request method
     */
    public function getReqMethod()
    {
        return $this->reqMethod;
    }

    /**
     * Get request protocol
     * @return null|string Request protocol
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Get request timeout
     * @return int Request timeout
     */
    public function getReqTimeout()
    {
        return $this->reqTimeout;
    }

    /**
     * Get request endpoint domain
     * @return null|string Endpoint domain
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Get request proxy
     * @return null|string|array
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    public function setRootDomain($domain)
    {
        $this->rootDomain = $domain;
    }

    public function getRootDomain()
    {
        return $this->rootDomain;
    }

    /**
     * @param boolean $flag
     */
    public function setKeepAlive($flag) {
        $this->keepAlive = $flag;
    }

    public function getKeepAlive() {
        return $this->keepAlive;
    }
}