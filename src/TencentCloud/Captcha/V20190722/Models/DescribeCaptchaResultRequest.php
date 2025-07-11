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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaResult请求参数结构体
 *
 * @method integer getCaptchaType() 获取固定填值：9。
 * @method void setCaptchaType(integer $CaptchaType) 设置固定填值：9。
 * @method string getTicket() 获取前端回调函数返回的用户验证票据
 * @method void setTicket(string $Ticket) 设置前端回调函数返回的用户验证票据
 * @method string getUserIp() 获取业务侧获取到的验证码使用者的外网IP
 * @method void setUserIp(string $UserIp) 设置业务侧获取到的验证码使用者的外网IP
 * @method string getRandstr() 获取前端回调函数返回的随机字符串
 * @method void setRandstr(string $Randstr) 设置前端回调函数返回的随机字符串
 * @method integer getCaptchaAppId() 获取验证码应用ID。登录 [验证码控制台](https://console.cloud.tencent.com/captcha/graphical)，在验证列表的【密钥】列，即可查看到CaptchaAppId。
 * @method void setCaptchaAppId(integer $CaptchaAppId) 设置验证码应用ID。登录 [验证码控制台](https://console.cloud.tencent.com/captcha/graphical)，在验证列表的【密钥】列，即可查看到CaptchaAppId。
 * @method string getAppSecretKey() 获取验证码应用密钥。登录 [验证码控制台](https://console.cloud.tencent.com/captcha/graphical)，在验证列表的【密钥】列，即可查看到AppSecretKey。AppSecretKey属于服务器端校验验证码票据的密钥，请妥善保密，请勿泄露给第三方。
 * @method void setAppSecretKey(string $AppSecretKey) 设置验证码应用密钥。登录 [验证码控制台](https://console.cloud.tencent.com/captcha/graphical)，在验证列表的【密钥】列，即可查看到AppSecretKey。AppSecretKey属于服务器端校验验证码票据的密钥，请妥善保密，请勿泄露给第三方。
 * @method integer getBusinessId() 获取预留字段
 * @method void setBusinessId(integer $BusinessId) 设置预留字段
 * @method integer getSceneId() 获取预留字段
 * @method void setSceneId(integer $SceneId) 设置预留字段
 * @method string getMacAddress() 获取mac 地址或设备唯一标识
 * @method void setMacAddress(string $MacAddress) 设置mac 地址或设备唯一标识
 * @method string getImei() 获取手机设备号
 * @method void setImei(string $Imei) 设置手机设备号
 * @method integer getNeedGetCaptchaTime() 获取是否返回前端获取验证码时间，取值1：需要返回
 * @method void setNeedGetCaptchaTime(integer $NeedGetCaptchaTime) 设置是否返回前端获取验证码时间，取值1：需要返回
 */
class DescribeCaptchaResultRequest extends AbstractModel
{
    /**
     * @var integer 固定填值：9。
     */
    public $CaptchaType;

    /**
     * @var string 前端回调函数返回的用户验证票据
     */
    public $Ticket;

    /**
     * @var string 业务侧获取到的验证码使用者的外网IP
     */
    public $UserIp;

    /**
     * @var string 前端回调函数返回的随机字符串
     */
    public $Randstr;

    /**
     * @var integer 验证码应用ID。登录 [验证码控制台](https://console.cloud.tencent.com/captcha/graphical)，在验证列表的【密钥】列，即可查看到CaptchaAppId。
     */
    public $CaptchaAppId;

    /**
     * @var string 验证码应用密钥。登录 [验证码控制台](https://console.cloud.tencent.com/captcha/graphical)，在验证列表的【密钥】列，即可查看到AppSecretKey。AppSecretKey属于服务器端校验验证码票据的密钥，请妥善保密，请勿泄露给第三方。
     */
    public $AppSecretKey;

    /**
     * @var integer 预留字段
     */
    public $BusinessId;

    /**
     * @var integer 预留字段
     */
    public $SceneId;

    /**
     * @var string mac 地址或设备唯一标识
     */
    public $MacAddress;

    /**
     * @var string 手机设备号
     */
    public $Imei;

    /**
     * @var integer 是否返回前端获取验证码时间，取值1：需要返回
     */
    public $NeedGetCaptchaTime;

    /**
     * @param integer $CaptchaType 固定填值：9。
     * @param string $Ticket 前端回调函数返回的用户验证票据
     * @param string $UserIp 业务侧获取到的验证码使用者的外网IP
     * @param string $Randstr 前端回调函数返回的随机字符串
     * @param integer $CaptchaAppId 验证码应用ID。登录 [验证码控制台](https://console.cloud.tencent.com/captcha/graphical)，在验证列表的【密钥】列，即可查看到CaptchaAppId。
     * @param string $AppSecretKey 验证码应用密钥。登录 [验证码控制台](https://console.cloud.tencent.com/captcha/graphical)，在验证列表的【密钥】列，即可查看到AppSecretKey。AppSecretKey属于服务器端校验验证码票据的密钥，请妥善保密，请勿泄露给第三方。
     * @param integer $BusinessId 预留字段
     * @param integer $SceneId 预留字段
     * @param string $MacAddress mac 地址或设备唯一标识
     * @param string $Imei 手机设备号
     * @param integer $NeedGetCaptchaTime 是否返回前端获取验证码时间，取值1：需要返回
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
        if (array_key_exists("CaptchaType",$param) and $param["CaptchaType"] !== null) {
            $this->CaptchaType = $param["CaptchaType"];
        }

        if (array_key_exists("Ticket",$param) and $param["Ticket"] !== null) {
            $this->Ticket = $param["Ticket"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("Randstr",$param) and $param["Randstr"] !== null) {
            $this->Randstr = $param["Randstr"];
        }

        if (array_key_exists("CaptchaAppId",$param) and $param["CaptchaAppId"] !== null) {
            $this->CaptchaAppId = $param["CaptchaAppId"];
        }

        if (array_key_exists("AppSecretKey",$param) and $param["AppSecretKey"] !== null) {
            $this->AppSecretKey = $param["AppSecretKey"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("NeedGetCaptchaTime",$param) and $param["NeedGetCaptchaTime"] !== null) {
            $this->NeedGetCaptchaTime = $param["NeedGetCaptchaTime"];
        }
    }
}
