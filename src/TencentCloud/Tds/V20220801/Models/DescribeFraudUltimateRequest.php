<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method string getDeviceToken() 获取<p>客户端通过SDK获取的设备Token</p>
 * @method void setDeviceToken(string $DeviceToken) 设置<p>客户端通过SDK获取的设备Token</p>
 * @method string getSceneCode() 获取<p>使用场景。目前仅支持login-登录场景、register-注册场景</p>
 * @method void setSceneCode(string $SceneCode) 设置<p>使用场景。目前仅支持login-登录场景、register-注册场景</p>
 * @method string getUserId() 获取<p>用户唯一标识</p>
 * @method void setUserId(string $UserId) 设置<p>用户唯一标识</p>
 * @method integer getEventTime() 获取<p>事件时间戳（毫秒）</p>
 * @method void setEventTime(integer $EventTime) 设置<p>事件时间戳（毫秒）</p>
 * @method integer getElapsedTime() 获取<p>事件耗时（毫秒），例如进入登录界面到点击登录按钮耗时</p>
 * @method void setElapsedTime(integer $ElapsedTime) 设置<p>事件耗时（毫秒），例如进入登录界面到点击登录按钮耗时</p>
 * @method string getWeChatOpenId() 获取<p>微信的OpenId</p>
 * @method void setWeChatOpenId(string $WeChatOpenId) 设置<p>微信的OpenId</p>
 * @method string getPhoneNumber() 获取<p>手机号码（注：不需要带国家代码 例如：13430421011）。可以传入原文或MD5</p>
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>手机号码（注：不需要带国家代码 例如：13430421011）。可以传入原文或MD5</p>
 * @method string getClientIP() 获取<p>客户端IP</p>
 * @method void setClientIP(string $ClientIP) 设置<p>客户端IP</p>
 * @method string getQQOpenId() 获取<p>QQ的OpenId</p>
 * @method void setQQOpenId(string $QQOpenId) 设置<p>QQ的OpenId</p>
 * @method DataAuthorizationInfo getDataAuthorization() 获取<p>数据授权信息</p>
 * @method void setDataAuthorization(DataAuthorizationInfo $DataAuthorization) 设置<p>数据授权信息</p>
 */
class DescribeFraudUltimateRequest extends AbstractModel
{
    /**
     * @var string <p>客户端通过SDK获取的设备Token</p>
     */
    public $DeviceToken;

    /**
     * @var string <p>使用场景。目前仅支持login-登录场景、register-注册场景</p>
     */
    public $SceneCode;

    /**
     * @var string <p>用户唯一标识</p>
     */
    public $UserId;

    /**
     * @var integer <p>事件时间戳（毫秒）</p>
     */
    public $EventTime;

    /**
     * @var integer <p>事件耗时（毫秒），例如进入登录界面到点击登录按钮耗时</p>
     */
    public $ElapsedTime;

    /**
     * @var string <p>微信的OpenId</p>
     */
    public $WeChatOpenId;

    /**
     * @var string <p>手机号码（注：不需要带国家代码 例如：13430421011）。可以传入原文或MD5</p>
     */
    public $PhoneNumber;

    /**
     * @var string <p>客户端IP</p>
     */
    public $ClientIP;

    /**
     * @var string <p>QQ的OpenId</p>
     */
    public $QQOpenId;

    /**
     * @var DataAuthorizationInfo <p>数据授权信息</p>
     */
    public $DataAuthorization;

    /**
     * @param string $DeviceToken <p>客户端通过SDK获取的设备Token</p>
     * @param string $SceneCode <p>使用场景。目前仅支持login-登录场景、register-注册场景</p>
     * @param string $UserId <p>用户唯一标识</p>
     * @param integer $EventTime <p>事件时间戳（毫秒）</p>
     * @param integer $ElapsedTime <p>事件耗时（毫秒），例如进入登录界面到点击登录按钮耗时</p>
     * @param string $WeChatOpenId <p>微信的OpenId</p>
     * @param string $PhoneNumber <p>手机号码（注：不需要带国家代码 例如：13430421011）。可以传入原文或MD5</p>
     * @param string $ClientIP <p>客户端IP</p>
     * @param string $QQOpenId <p>QQ的OpenId</p>
     * @param DataAuthorizationInfo $DataAuthorization <p>数据授权信息</p>
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

        if (array_key_exists("DataAuthorization",$param) and $param["DataAuthorization"] !== null) {
            $this->DataAuthorization = new DataAuthorizationInfo();
            $this->DataAuthorization->deserialize($param["DataAuthorization"]);
        }
    }
}
