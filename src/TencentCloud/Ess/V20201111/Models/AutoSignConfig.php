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
 * @method UserThreeFactor getUserInfo() 获取自动签开通个人用户的三要素
 * @method void setUserInfo(UserThreeFactor $UserInfo) 设置自动签开通个人用户的三要素
 * @method string getCallbackUrl() 获取接受自动签开启的回调地址。需要保证post返回200
 * @method void setCallbackUrl(string $CallbackUrl) 设置接受自动签开启的回调地址。需要保证post返回200
 * @method boolean getCertInfoCallback() 获取是否回调证书信息，默认false-不需要
 * @method void setCertInfoCallback(boolean $CertInfoCallback) 设置是否回调证书信息，默认false-不需要
 * @method boolean getUserDefineSeal() 获取是否支持用户自定义签名印章，默认false-不需要
 * @method void setUserDefineSeal(boolean $UserDefineSeal) 设置是否支持用户自定义签名印章，默认false-不需要
 * @method boolean getSealImgCallback() 获取是否需要回调的时候返回印章(签名) 图片的 base64，默认false-不需要
 * @method void setSealImgCallback(boolean $SealImgCallback) 设置是否需要回调的时候返回印章(签名) 图片的 base64，默认false-不需要
 * @method array getVerifyChannels() 获取开通时候的验证方式，取值：WEIXINAPP（微信人脸识别），INSIGHT（慧眼人脸认别），TELECOM（运营商三要素验证）。如果是小程序开通链接，支持传 WEIXINAPP / TELECOM。如果是 H5 开通链接，支持传 INSIGHT / TELECOM。默认值 WEIXINAPP / INSIGHT。
 * @method void setVerifyChannels(array $VerifyChannels) 设置开通时候的验证方式，取值：WEIXINAPP（微信人脸识别），INSIGHT（慧眼人脸认别），TELECOM（运营商三要素验证）。如果是小程序开通链接，支持传 WEIXINAPP / TELECOM。如果是 H5 开通链接，支持传 INSIGHT / TELECOM。默认值 WEIXINAPP / INSIGHT。
 */
class AutoSignConfig extends AbstractModel
{
    /**
     * @var UserThreeFactor 自动签开通个人用户的三要素
     */
    public $UserInfo;

    /**
     * @var string 接受自动签开启的回调地址。需要保证post返回200
     */
    public $CallbackUrl;

    /**
     * @var boolean 是否回调证书信息，默认false-不需要
     */
    public $CertInfoCallback;

    /**
     * @var boolean 是否支持用户自定义签名印章，默认false-不需要
     */
    public $UserDefineSeal;

    /**
     * @var boolean 是否需要回调的时候返回印章(签名) 图片的 base64，默认false-不需要
     */
    public $SealImgCallback;

    /**
     * @var array 开通时候的验证方式，取值：WEIXINAPP（微信人脸识别），INSIGHT（慧眼人脸认别），TELECOM（运营商三要素验证）。如果是小程序开通链接，支持传 WEIXINAPP / TELECOM。如果是 H5 开通链接，支持传 INSIGHT / TELECOM。默认值 WEIXINAPP / INSIGHT。
     */
    public $VerifyChannels;

    /**
     * @param UserThreeFactor $UserInfo 自动签开通个人用户的三要素
     * @param string $CallbackUrl 接受自动签开启的回调地址。需要保证post返回200
     * @param boolean $CertInfoCallback 是否回调证书信息，默认false-不需要
     * @param boolean $UserDefineSeal 是否支持用户自定义签名印章，默认false-不需要
     * @param boolean $SealImgCallback 是否需要回调的时候返回印章(签名) 图片的 base64，默认false-不需要
     * @param array $VerifyChannels 开通时候的验证方式，取值：WEIXINAPP（微信人脸识别），INSIGHT（慧眼人脸认别），TELECOM（运营商三要素验证）。如果是小程序开通链接，支持传 WEIXINAPP / TELECOM。如果是 H5 开通链接，支持传 INSIGHT / TELECOM。默认值 WEIXINAPP / INSIGHT。
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

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
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

        if (array_key_exists("VerifyChannels",$param) and $param["VerifyChannels"] !== null) {
            $this->VerifyChannels = $param["VerifyChannels"];
        }
    }
}
