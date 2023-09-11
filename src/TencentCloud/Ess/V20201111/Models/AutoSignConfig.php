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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动签开启、签署相关配置
 *
 * @method UserThreeFactor getUserInfo() 获取自动签开通个人用户信息, 包括名字,身份证等
 * @method void setUserInfo(UserThreeFactor $UserInfo) 设置自动签开通个人用户信息, 包括名字,身份证等
 * @method boolean getCertInfoCallback() 获取是否回调证书信息:
<ul><li>**false**: 不需要(默认)</li>
<li>**true**:需要</li></ul>
 * @method void setCertInfoCallback(boolean $CertInfoCallback) 设置是否回调证书信息:
<ul><li>**false**: 不需要(默认)</li>
<li>**true**:需要</li></ul>
 * @method boolean getUserDefineSeal() 获取是否支持用户自定义签名印章:
<ul><li>**false**: 不能自己定义(默认)</li>
<li>**true**: 可以自己定义</li></ul>
 * @method void setUserDefineSeal(boolean $UserDefineSeal) 设置是否支持用户自定义签名印章:
<ul><li>**false**: 不能自己定义(默认)</li>
<li>**true**: 可以自己定义</li></ul>
 * @method boolean getSealImgCallback() 获取回调中是否需要自动签将要使用的印章(签名) 图片的 base64:
<ul><li>**false**: 不需要(默认)</li>
<li>**true**: 需要</li></ul>
 * @method void setSealImgCallback(boolean $SealImgCallback) 设置回调中是否需要自动签将要使用的印章(签名) 图片的 base64:
<ul><li>**false**: 不需要(默认)</li>
<li>**true**: 需要</li></ul>
 * @method string getCallbackUrl() 获取执行结果的回调URL，该URL仅支持HTTP或HTTPS协议，建议采用HTTPS协议以保证数据传输的安全性。
腾讯电子签服务器将通过POST方式，application/json格式通知执行结果，请确保外网可以正常访问该URL。
回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
 * @method void setCallbackUrl(string $CallbackUrl) 设置执行结果的回调URL，该URL仅支持HTTP或HTTPS协议，建议采用HTTPS协议以保证数据传输的安全性。
腾讯电子签服务器将通过POST方式，application/json格式通知执行结果，请确保外网可以正常访问该URL。
回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
 * @method array getVerifyChannels() 获取开通时候的身份验证方式, 取值为：
<ul><li>**WEIXINAPP** : 微信人脸识别</li>
<li>**INSIGHT** : 慧眼人脸认别</li>
<li>**TELECOM** : 运营商三要素验证</li></ul>
注：
<ul><li>如果是小程序开通链接，支持传 WEIXINAPP / TELECOM。为空默认 WEIXINAPP</li>
<li>如果是 H5 开通链接，支持传 INSIGHT / TELECOM。为空默认 INSIGHT </li></ul>
 * @method void setVerifyChannels(array $VerifyChannels) 设置开通时候的身份验证方式, 取值为：
<ul><li>**WEIXINAPP** : 微信人脸识别</li>
<li>**INSIGHT** : 慧眼人脸认别</li>
<li>**TELECOM** : 运营商三要素验证</li></ul>
注：
<ul><li>如果是小程序开通链接，支持传 WEIXINAPP / TELECOM。为空默认 WEIXINAPP</li>
<li>如果是 H5 开通链接，支持传 INSIGHT / TELECOM。为空默认 INSIGHT </li></ul>
 * @method integer getLicenseType() 获取设置用户开通自动签时是否绑定个人自动签账号许可。

<ul><li>**0**: (默认) 使用个人自动签账号许可进行开通，个人自动签账号许可有效期1年，注: `不可解绑释放更换他人`</li>
<li>**1**: 不使用个人自动签账号许可进行开通</li></ul>

 * @method void setLicenseType(integer $LicenseType) 设置设置用户开通自动签时是否绑定个人自动签账号许可。

<ul><li>**0**: (默认) 使用个人自动签账号许可进行开通，个人自动签账号许可有效期1年，注: `不可解绑释放更换他人`</li>
<li>**1**: 不使用个人自动签账号许可进行开通</li></ul>
 */
class AutoSignConfig extends AbstractModel
{
    /**
     * @var UserThreeFactor 自动签开通个人用户信息, 包括名字,身份证等
     */
    public $UserInfo;

    /**
     * @var boolean 是否回调证书信息:
<ul><li>**false**: 不需要(默认)</li>
<li>**true**:需要</li></ul>
     */
    public $CertInfoCallback;

    /**
     * @var boolean 是否支持用户自定义签名印章:
<ul><li>**false**: 不能自己定义(默认)</li>
<li>**true**: 可以自己定义</li></ul>
     */
    public $UserDefineSeal;

    /**
     * @var boolean 回调中是否需要自动签将要使用的印章(签名) 图片的 base64:
<ul><li>**false**: 不需要(默认)</li>
<li>**true**: 需要</li></ul>
     */
    public $SealImgCallback;

    /**
     * @var string 执行结果的回调URL，该URL仅支持HTTP或HTTPS协议，建议采用HTTPS协议以保证数据传输的安全性。
腾讯电子签服务器将通过POST方式，application/json格式通知执行结果，请确保外网可以正常访问该URL。
回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
     * @deprecated
     */
    public $CallbackUrl;

    /**
     * @var array 开通时候的身份验证方式, 取值为：
<ul><li>**WEIXINAPP** : 微信人脸识别</li>
<li>**INSIGHT** : 慧眼人脸认别</li>
<li>**TELECOM** : 运营商三要素验证</li></ul>
注：
<ul><li>如果是小程序开通链接，支持传 WEIXINAPP / TELECOM。为空默认 WEIXINAPP</li>
<li>如果是 H5 开通链接，支持传 INSIGHT / TELECOM。为空默认 INSIGHT </li></ul>
     */
    public $VerifyChannels;

    /**
     * @var integer 设置用户开通自动签时是否绑定个人自动签账号许可。

<ul><li>**0**: (默认) 使用个人自动签账号许可进行开通，个人自动签账号许可有效期1年，注: `不可解绑释放更换他人`</li>
<li>**1**: 不使用个人自动签账号许可进行开通</li></ul>

     */
    public $LicenseType;

    /**
     * @param UserThreeFactor $UserInfo 自动签开通个人用户信息, 包括名字,身份证等
     * @param boolean $CertInfoCallback 是否回调证书信息:
<ul><li>**false**: 不需要(默认)</li>
<li>**true**:需要</li></ul>
     * @param boolean $UserDefineSeal 是否支持用户自定义签名印章:
<ul><li>**false**: 不能自己定义(默认)</li>
<li>**true**: 可以自己定义</li></ul>
     * @param boolean $SealImgCallback 回调中是否需要自动签将要使用的印章(签名) 图片的 base64:
<ul><li>**false**: 不需要(默认)</li>
<li>**true**: 需要</li></ul>
     * @param string $CallbackUrl 执行结果的回调URL，该URL仅支持HTTP或HTTPS协议，建议采用HTTPS协议以保证数据传输的安全性。
腾讯电子签服务器将通过POST方式，application/json格式通知执行结果，请确保外网可以正常访问该URL。
回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。
     * @param array $VerifyChannels 开通时候的身份验证方式, 取值为：
<ul><li>**WEIXINAPP** : 微信人脸识别</li>
<li>**INSIGHT** : 慧眼人脸认别</li>
<li>**TELECOM** : 运营商三要素验证</li></ul>
注：
<ul><li>如果是小程序开通链接，支持传 WEIXINAPP / TELECOM。为空默认 WEIXINAPP</li>
<li>如果是 H5 开通链接，支持传 INSIGHT / TELECOM。为空默认 INSIGHT </li></ul>
     * @param integer $LicenseType 设置用户开通自动签时是否绑定个人自动签账号许可。

<ul><li>**0**: (默认) 使用个人自动签账号许可进行开通，个人自动签账号许可有效期1年，注: `不可解绑释放更换他人`</li>
<li>**1**: 不使用个人自动签账号许可进行开通</li></ul>
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new UserThreeFactor();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("CertInfoCallback",$param) and $param["CertInfoCallback"] !== null) {
            $this->CertInfoCallback = $param["CertInfoCallback"];
        }

        if (array_key_exists("UserDefineSeal",$param) and $param["UserDefineSeal"] !== null) {
            $this->UserDefineSeal = $param["UserDefineSeal"];
        }

        if (array_key_exists("SealImgCallback",$param) and $param["SealImgCallback"] !== null) {
            $this->SealImgCallback = $param["SealImgCallback"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("VerifyChannels",$param) and $param["VerifyChannels"] !== null) {
            $this->VerifyChannels = $param["VerifyChannels"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }
    }
}
