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

namespace TencentCloud\Common\Profile;

/**
 * client可选参数类
 * Class ClientProfile
 * @package TencentCloud\Common\Profile
 */
class ClientProfile
{

    /**
     * @var string  hmacsha1算法
     */
    public static $SIGN_HMAC_SHA1 = "HmacSHA1";

    /**
     * @var string hmacsha256算法
     */
    public static $SIGN_HMAC_SHA256 = "HmacSHA256";


    /**
     * @var HttpProfile http相关参数
     */
    private $httpProfile;

    /**
     * @var string 签名方法
     */
    private $signMethod;


    /**
     * ClientProfile constructor.
     * @param string $signMethod  签名算法，目前支持SHA256，SHA1
     * @param HttpProfile $httpProfile http参数类
     */
    public function __construct($signMethod = null, $httpProfile = null)
    {
        $this->signMethod = $signMethod ? $signMethod : ClientProfile::$SIGN_HMAC_SHA256;
        $this->httpProfile = $httpProfile ? $httpProfile : new HttpProfile();
    }

    /**
     * 设置签名算法
     * @param string $signMethod 签名方法，目前支持SHA256，SHA1
     */
    public function setSignMethod($signMethod)
    {
        $this->signMethod = $signMethod;
    }

    /**
     * 设置http相关参数
     * @param HttpProfile $httpProfile http相关参数
     */
    public function setHttpProfile($httpProfile)
    {
        $this->httpProfile = $httpProfile;
    }

    /**
     * 获取签名方法
     * @return null|string 签名方法
     */
    public function getSignMethod()
    {
        return $this->signMethod;
    }

    /**
     * 获取http选项实例
     * @return null|HttpProfile http选项实例
     */
    public function getHttpProfile()
    {
        return $this->httpProfile;
    }
}
