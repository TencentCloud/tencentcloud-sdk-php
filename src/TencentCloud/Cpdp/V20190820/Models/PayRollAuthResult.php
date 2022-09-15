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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微工卡核身结果
 *
 * @method string getAuthFailedReason() 获取结果为核身失败时的原因描述，仅在失败记录返回，空字符串等同null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthFailedReason(string $AuthFailedReason) 设置结果为核身失败时的原因描述，仅在失败记录返回，空字符串等同null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthNumber() 获取商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
 * @method void setAuthNumber(string $AuthNumber) 设置商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
 * @method string getAuthScene() 获取核身渠道，发起核身时的来源渠道，如通过小程序，硬件设备等
FROM_MINI_APP：来自小程序方式核身
FROM_HARDWARE：来自硬件设备方式核身
 * @method void setAuthScene(string $AuthScene) 设置核身渠道，发起核身时的来源渠道，如通过小程序，硬件设备等
FROM_MINI_APP：来自小程序方式核身
FROM_HARDWARE：来自硬件设备方式核身
 * @method string getAuthSource() 获取核身渠道标识，用于定位渠道具体来源，如果是扫码打卡渠道标识就是具体的小程序appid，若是硬件设备，则是设备的序列号等
 * @method void setAuthSource(string $AuthSource) 设置核身渠道标识，用于定位渠道具体来源，如果是扫码打卡渠道标识就是具体的小程序appid，若是硬件设备，则是设备的序列号等
 * @method string getAuthStatus() 获取核身状态
AUTHENTICATE_PROCESSING：核身中
AUTHENTICATE_SUCCESS：核身成功
AUTHENTICATE_FAILED：核身失败
 * @method void setAuthStatus(string $AuthStatus) 设置核身状态
AUTHENTICATE_PROCESSING：核身中
AUTHENTICATE_SUCCESS：核身成功
AUTHENTICATE_FAILED：核身失败
 * @method string getAuthTime() 获取核身时间，遵循[rfc3339](https://datatracker.ietf.org/doc/html/rfc3339)标准格式，格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE
 * @method void setAuthTime(string $AuthTime) 设置核身时间，遵循[rfc3339](https://datatracker.ietf.org/doc/html/rfc3339)标准格式，格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE
 * @method string getCompanyName() 获取该用户所属的单位名称
 * @method void setCompanyName(string $CompanyName) 设置该用户所属的单位名称
 * @method string getMerchantId() 获取微信服务商商户的商户号，由微信支付生成并下发
 * @method void setMerchantId(string $MerchantId) 设置微信服务商商户的商户号，由微信支付生成并下发
 * @method string getOpenId() 获取用户在商户对应appid下的唯一标识
 * @method void setOpenId(string $OpenId) 设置用户在商户对应appid下的唯一标识
 * @method string getProjectName() 获取该项目的名称
 * @method void setProjectName(string $ProjectName) 设置该项目的名称
 * @method string getSubMerchantId() 获取微信服务商下特约商户的商户号，由微信支付生成并下发
 * @method void setSubMerchantId(string $SubMerchantId) 设置微信服务商下特约商户的商户号，由微信支付生成并下发
 */
class PayRollAuthResult extends AbstractModel
{
    /**
     * @var string 结果为核身失败时的原因描述，仅在失败记录返回，空字符串等同null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthFailedReason;

    /**
     * @var string 商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
     */
    public $AuthNumber;

    /**
     * @var string 核身渠道，发起核身时的来源渠道，如通过小程序，硬件设备等
FROM_MINI_APP：来自小程序方式核身
FROM_HARDWARE：来自硬件设备方式核身
     */
    public $AuthScene;

    /**
     * @var string 核身渠道标识，用于定位渠道具体来源，如果是扫码打卡渠道标识就是具体的小程序appid，若是硬件设备，则是设备的序列号等
     */
    public $AuthSource;

    /**
     * @var string 核身状态
AUTHENTICATE_PROCESSING：核身中
AUTHENTICATE_SUCCESS：核身成功
AUTHENTICATE_FAILED：核身失败
     */
    public $AuthStatus;

    /**
     * @var string 核身时间，遵循[rfc3339](https://datatracker.ietf.org/doc/html/rfc3339)标准格式，格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE
     */
    public $AuthTime;

    /**
     * @var string 该用户所属的单位名称
     */
    public $CompanyName;

    /**
     * @var string 微信服务商商户的商户号，由微信支付生成并下发
     */
    public $MerchantId;

    /**
     * @var string 用户在商户对应appid下的唯一标识
     */
    public $OpenId;

    /**
     * @var string 该项目的名称
     */
    public $ProjectName;

    /**
     * @var string 微信服务商下特约商户的商户号，由微信支付生成并下发
     */
    public $SubMerchantId;

    /**
     * @param string $AuthFailedReason 结果为核身失败时的原因描述，仅在失败记录返回，空字符串等同null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthNumber 商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
     * @param string $AuthScene 核身渠道，发起核身时的来源渠道，如通过小程序，硬件设备等
FROM_MINI_APP：来自小程序方式核身
FROM_HARDWARE：来自硬件设备方式核身
     * @param string $AuthSource 核身渠道标识，用于定位渠道具体来源，如果是扫码打卡渠道标识就是具体的小程序appid，若是硬件设备，则是设备的序列号等
     * @param string $AuthStatus 核身状态
AUTHENTICATE_PROCESSING：核身中
AUTHENTICATE_SUCCESS：核身成功
AUTHENTICATE_FAILED：核身失败
     * @param string $AuthTime 核身时间，遵循[rfc3339](https://datatracker.ietf.org/doc/html/rfc3339)标准格式，格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE
     * @param string $CompanyName 该用户所属的单位名称
     * @param string $MerchantId 微信服务商商户的商户号，由微信支付生成并下发
     * @param string $OpenId 用户在商户对应appid下的唯一标识
     * @param string $ProjectName 该项目的名称
     * @param string $SubMerchantId 微信服务商下特约商户的商户号，由微信支付生成并下发
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
        if (array_key_exists("AuthFailedReason",$param) and $param["AuthFailedReason"] !== null) {
            $this->AuthFailedReason = $param["AuthFailedReason"];
        }

        if (array_key_exists("AuthNumber",$param) and $param["AuthNumber"] !== null) {
            $this->AuthNumber = $param["AuthNumber"];
        }

        if (array_key_exists("AuthScene",$param) and $param["AuthScene"] !== null) {
            $this->AuthScene = $param["AuthScene"];
        }

        if (array_key_exists("AuthSource",$param) and $param["AuthSource"] !== null) {
            $this->AuthSource = $param["AuthSource"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }

        if (array_key_exists("AuthTime",$param) and $param["AuthTime"] !== null) {
            $this->AuthTime = $param["AuthTime"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("SubMerchantId",$param) and $param["SubMerchantId"] !== null) {
            $this->SubMerchantId = $param["SubMerchantId"];
        }
    }
}
