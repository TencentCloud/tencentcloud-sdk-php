<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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

use TencentCloud\Common\Exception\TencentCloudSDKException;

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
     * @var string 签名V3
     */
    public static $SIGN_TC3_SHA256 = "TC3-HMAC-SHA256";

    /**
     * @var string Chinese simplified
     */
    public static $ZH_CN = "zh-CN";

    /**
     * @var string English
     */
    public static $EN_US = "en-US";
    
    /**
     * @var boolean 开启地域容器
     */
    public $enableRegionBreaker;
    
    /**
     * @var HttpProfile http相关参数
     */
    private $httpProfile;

    /**
     * @var string 签名方法
     */
    private $signMethod;

    /**
     * @var string 忽略内容签名
     */
    private $unsignedPayload;

    /**
     * @var boolean
     */
    private $checkPHPVersion;

    /**
     * @var string
     */
    private $language;
    
    /**
     * @var RegionBreakerProfile 地域容灾相关参数
     */
    private $regionBreakerProfile;

    /**
     * ClientProfile constructor.
     * @param string $signMethod  签名算法，目前支持SHA256，SHA1
     * @param HttpProfile $httpProfile http参数类
     * @param boolean $enableRegionBreaker  开启地域容灾
     * @param RegionBreakerProfile $regionBreakerProfile  地域容灾相关参数
     */
    public function __construct($signMethod = null, $httpProfile = null, $enableRegionBreaker = false, $regionBreakerProfile = null)
    {
        $this->signMethod = $signMethod ? $signMethod : ClientProfile::$SIGN_TC3_SHA256;
        $this->httpProfile = $httpProfile ? $httpProfile : new HttpProfile();
        $this->unsignedPayload = false;
	    $this->checkPHPVersion = true;
        $this->enableRegionBreaker = $enableRegionBreaker;
        $this->regionBreakerProfile = $regionBreakerProfile;
	//$this->language = ClientProfile::$ZH_CN;
    }

    /**
     * 设置签名算法
     * @param string $signMethod 签名方法，目前支持SHA256，SHA1, TC3
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
     * 设置是否忽略内容签名
     * @param bool $flag true表示忽略签名
     */
    public function setUnsignedPayload($flag)
    {
        $this->unsignedPayload = $flag;
    }

    /**
     * 获取是否忽略内容签名标志位
     * @return bool
     */
    public function getUnsignedPayload()
    {
        return $this->unsignedPayload;
    }

    public function getCheckPHPVersion()
    {
        return $this->checkPHPVersion;
    }

    public function setCheckPHPVersion($flag)
    {
        $this->checkPHPVersion = $flag;
    }

    public function getLanguage()
    {
	return $this->language;
    }

    /**
     * @param string $language Valid values: zh-CN, en-US
     */
    public function setLanguage($language)
    {
	$this->language = $language;
    }
    
    public function getRegionBreakerProfile()
    {
        return $this->regionBreakerProfile;
    }
    
    /**
     * 设置地域容灾相关参数
     * @param RegionBreakerProfile $regionBreakerProfile 地域容灾相关参数
     */
    public function setRegionBreakerProfile($regionBreakerProfile)
    {
        $this->regionBreakerProfile = $regionBreakerProfile;
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

class RegionBreakerProfile {
    
    public function __construct($masterEndpoint,
                                $slaveEndpoint,
                                $maxFailNum = 5,
                                $maxFailPercent = 0.75,
                                $windowInterval = 60*5,
                                $timeout = 60,
                                $maxRequests = 5) {
        if (empty($masterEndpoint) || !(substr($masterEndpoint, -20) === '.tencentcloudapi.com')) {
            throw new TencentCloudSDKException("", 'masterEndpoint must be provided and end with ".tencentcloudapi.com"');
        }
        if (empty($slaveEndpoint) || !(substr($slaveEndpoint, -20) === '.tencentcloudapi.com')) {
            throw new TencentCloudSDKException("", 'slaveEndpoint must be provided and end with ".tencentcloudapi.com"');
        }
        $this->masterEndpoint = $masterEndpoint;
        $this->slaveEndpoint = $slaveEndpoint;
        $this->maxFailNum = $maxFailNum;
        $this->maxFailPercent = $maxFailPercent;
        if ($this->maxFailPercent < 0 || $this->maxFailPercent > 1) {
            throw new TencentCloudSDKException("", "ClientError: max fail percent must be set between 0 and 1");
        }
        $this->windowInterval = $windowInterval;
        $this->timeout = $timeout;
        $this->maxRequests = $maxRequests;
    }
}