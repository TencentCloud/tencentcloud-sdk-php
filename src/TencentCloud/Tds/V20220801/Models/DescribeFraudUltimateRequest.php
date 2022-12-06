<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tds\V20220801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFraudUltimate请求参数结构体
 *
 * @method string getDeviceToken() 获取客户端通过SDK获取的设备Token
 * @method void setDeviceToken(string $DeviceToken) 设置客户端通过SDK获取的设备Token
 * @method string getSceneCode() 获取使用场景。目前仅支持login-登录场景、register-注册场景
 * @method void setSceneCode(string $SceneCode) 设置使用场景。目前仅支持login-登录场景、register-注册场景
 * @method string getUserId() 获取用户唯一标识
 * @method void setUserId(string $UserId) 设置用户唯一标识
 * @method integer getEventTime() 获取事件时间戳（毫秒）
 * @method void setEventTime(integer $EventTime) 设置事件时间戳（毫秒）
 * @method integer getElapsedTime() 获取事件耗时（毫秒），例如进入登录界面到点击登录按钮耗时
 * @method void setElapsedTime(integer $ElapsedTime) 设置事件耗时（毫秒），例如进入登录界面到点击登录按钮耗时
 * @method string getWeChatOpenId() 获取微信的OpenId
 * @method void setWeChatOpenId(string $WeChatOpenId) 设置微信的OpenId
 * @method string getPhoneNumber() 获取手机号码（注：不需要带国家代码 例如：13430421011）。可以传入原文或MD5
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码（注：不需要带国家代码 例如：13430421011）。可以传入原文或MD5
 * @method string getClientIP() 获取客户端IP
 * @method void setClientIP(string $ClientIP) 设置客户端IP
 * @method string getQQOpenId() 获取QQ的OpenId
 * @method void setQQOpenId(string $QQOpenId) 设置QQ的OpenId
 */
class DescribeFraudUltimateRequest extends AbstractModel
{
    /**
     * @var string 客户端通过SDK获取的设备Token
     */
    public $DeviceToken;

    /**
     * @var string 使用场景。目前仅支持login-登录场景、register-注册场景
     */
    public $SceneCode;

    /**
     * @var string 用户唯一标识
     */
    public $UserId;

    /**
     * @var integer 事件时间戳（毫秒）
     */
    public $EventTime;

    /**
     * @var integer 事件耗时（毫秒），例如进入登录界面到点击登录按钮耗时
     */
    public $ElapsedTime;

    /**
     * @var string 微信的OpenId
     */
    public $WeChatOpenId;

    /**
     * @var string 手机号码（注：不需要带国家代码 例如：13430421011）。可以传入原文或MD5
     */
    public $PhoneNumber;

    /**
     * @var string 客户端IP
     */
    public $ClientIP;

    /**
     * @var string QQ的OpenId
     */
    public $QQOpenId;

    /**
     * @param string $DeviceToken 客户端通过SDK获取的设备Token
     * @param string $SceneCode 使用场景。目前仅支持login-登录场景、register-注册场景
     * @param string $UserId 用户唯一标识
     * @param integer $EventTime 事件时间戳（毫秒）
     * @param integer $ElapsedTime 事件耗时（毫秒），例如进入登录界面到点击登录按钮耗时
     * @param string $WeChatOpenId 微信的OpenId
     * @param string $PhoneNumber 手机号码（注：不需要带国家代码 例如：13430421011）。可以传入原文或MD5
     * @param string $ClientIP 客户端IP
     * @param string $QQOpenId QQ的OpenId
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }

        if (array_key_exists("SceneCode",$param) and $param["SceneCode"] !== null) {
            $this->SceneCode = $param["SceneCode"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("ElapsedTime",$param) and $param["ElapsedTime"] !== null) {
            $this->ElapsedTime = $param["ElapsedTime"];
        }

        if (array_key_exists("WeChatOpenId",$param) and $param["WeChatOpenId"] !== null) {
            $this->WeChatOpenId = $param["WeChatOpenId"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("QQOpenId",$param) and $param["QQOpenId"] !== null) {
            $this->QQOpenId = $param["QQOpenId"];
        }
    }
}
