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
 * @method integer getCaptchaType() 获取<p>固定填值：9。</p>
 * @method void setCaptchaType(integer $CaptchaType) 设置<p>固定填值：9。</p>
 * @method string getTicket() 获取<p>前端回调函数返回的用户验证票据</p>
 * @method void setTicket(string $Ticket) 设置<p>前端回调函数返回的用户验证票据</p>
 * @method string getUserIp() 获取<p>业务侧获取到的验证码使用者的外网IP</p>
 * @method void setUserIp(string $UserIp) 设置<p>业务侧获取到的验证码使用者的外网IP</p>
 * @method string getRandstr() 获取<p>前端回调函数返回的随机字符串</p>
 * @method void setRandstr(string $Randstr) 设置<p>前端回调函数返回的随机字符串</p>
 * @method integer getCaptchaAppId() 获取<p>验证码应用ID。登录 <a href="https://console.cloud.tencent.com/captcha/graphical">验证码控制台</a>，在验证列表的【密钥】列，即可查看到CaptchaAppId。</p>
 * @method void setCaptchaAppId(integer $CaptchaAppId) 设置<p>验证码应用ID。登录 <a href="https://console.cloud.tencent.com/captcha/graphical">验证码控制台</a>，在验证列表的【密钥】列，即可查看到CaptchaAppId。</p>
 * @method string getAppSecretKey() 获取<p>验证码应用密钥。登录 <a href="https://console.cloud.tencent.com/captcha/graphical">验证码控制台</a>，在验证列表的【密钥】列，即可查看到AppSecretKey。AppSecretKey属于服务器端校验验证码票据的密钥，请妥善保密，请勿泄露给第三方。</p>
 * @method void setAppSecretKey(string $AppSecretKey) 设置<p>验证码应用密钥。登录 <a href="https://console.cloud.tencent.com/captcha/graphical">验证码控制台</a>，在验证列表的【密钥】列，即可查看到AppSecretKey。AppSecretKey属于服务器端校验验证码票据的密钥，请妥善保密，请勿泄露给第三方。</p>
 * @method integer getBusinessId() 获取<p>预留字段</p>
 * @method void setBusinessId(integer $BusinessId) 设置<p>预留字段</p>
 * @method integer getSceneId() 获取<p>预留字段</p>
 * @method void setSceneId(integer $SceneId) 设置<p>预留字段</p>
 * @method string getMacAddress() 获取<p>mac 地址或设备唯一标识</p>
 * @method void setMacAddress(string $MacAddress) 设置<p>mac 地址或设备唯一标识</p>
 * @method string getImei() 获取<p>手机设备号</p>
 * @method void setImei(string $Imei) 设置<p>手机设备号</p>
 * @method integer getNeedGetCaptchaTime() 获取<p>是否返回前端获取验证码时间，取值1：需要返回</p>
 * @method void setNeedGetCaptchaTime(integer $NeedGetCaptchaTime) 设置<p>是否返回前端获取验证码时间，取值1：需要返回</p>
 */
class DescribeCaptchaResultRequest extends AbstractModel
{
    /**
     * @var integer <p>固定填值：9。</p>
     */
    public $CaptchaType;

    /**
     * @var string <p>前端回调函数返回的用户验证票据</p>
     */
    public $Ticket;

    /**
     * @var string <p>业务侧获取到的验证码使用者的外网IP</p>
     */
    public $UserIp;

    /**
     * @var string <p>前端回调函数返回的随机字符串</p>
     */
    public $Randstr;

    /**
     * @var integer <p>验证码应用ID。登录 <a href="https://console.cloud.tencent.com/captcha/graphical">验证码控制台</a>，在验证列表的【密钥】列，即可查看到CaptchaAppId。</p>
     */
    public $CaptchaAppId;

    /**
     * @var string <p>验证码应用密钥。登录 <a href="https://console.cloud.tencent.com/captcha/graphical">验证码控制台</a>，在验证列表的【密钥】列，即可查看到AppSecretKey。AppSecretKey属于服务器端校验验证码票据的密钥，请妥善保密，请勿泄露给第三方。</p>
     */
    public $AppSecretKey;

    /**
     * @var integer <p>预留字段</p>
     */
    public $BusinessId;

    /**
     * @var integer <p>预留字段</p>
     */
    public $SceneId;

    /**
     * @var string <p>mac 地址或设备唯一标识</p>
     */
    public $MacAddress;

    /**
     * @var string <p>手机设备号</p>
     */
    public $Imei;

    /**
     * @var integer <p>是否返回前端获取验证码时间，取值1：需要返回</p>
     */
    public $NeedGetCaptchaTime;

    /**
     * @param integer $CaptchaType <p>固定填值：9。</p>
     * @param string $Ticket <p>前端回调函数返回的用户验证票据</p>
     * @param string $UserIp <p>业务侧获取到的验证码使用者的外网IP</p>
     * @param string $Randstr <p>前端回调函数返回的随机字符串</p>
     * @param integer $CaptchaAppId <p>验证码应用ID。登录 <a href="https://console.cloud.tencent.com/captcha/graphical">验证码控制台</a>，在验证列表的【密钥】列，即可查看到CaptchaAppId。</p>
     * @param string $AppSecretKey <p>验证码应用密钥。登录 <a href="https://console.cloud.tencent.com/captcha/graphical">验证码控制台</a>，在验证列表的【密钥】列，即可查看到AppSecretKey。AppSecretKey属于服务器端校验验证码票据的密钥，请妥善保密，请勿泄露给第三方。</p>
     * @param integer $BusinessId <p>预留字段</p>
     * @param integer $SceneId <p>预留字段</p>
     * @param string $MacAddress <p>mac 地址或设备唯一标识</p>
     * @param string $Imei <p>手机设备号</p>
     * @param integer $NeedGetCaptchaTime <p>是否返回前端获取验证码时间，取值1：需要返回</p>
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
