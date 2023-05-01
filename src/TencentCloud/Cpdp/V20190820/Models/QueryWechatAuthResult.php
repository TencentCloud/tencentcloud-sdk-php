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
 * 查询用户微工卡核身结果
 *
 * @method string getAuthNo() 获取商户核身单号
 * @method void setAuthNo(string $AuthNo) 设置商户核身单号
 * @method string getOpenId() 获取微信用户标识
 * @method void setOpenId(string $OpenId) 设置微信用户标识
 * @method string getMchId() 获取商户号
 * @method void setMchId(string $MchId) 设置商户号
 * @method string getSubMchId() 获取子商户号
 * @method void setSubMchId(string $SubMchId) 设置子商户号
 * @method string getAuthScene() 获取核身渠道
FROM_MINI_APP：来自小程序方式核身
FROM_HARDWARE：来自硬件设备方式核身
 * @method void setAuthScene(string $AuthScene) 设置核身渠道
FROM_MINI_APP：来自小程序方式核身
FROM_HARDWARE：来自硬件设备方式核身
 * @method string getAuthSource() 获取核身渠道标识

用于定位渠道具体来源，如果是扫码打卡渠道标识就是具体的小程序appid，若是硬件设备，则是设备的序列号等
 * @method void setAuthSource(string $AuthSource) 设置核身渠道标识

用于定位渠道具体来源，如果是扫码打卡渠道标识就是具体的小程序appid，若是硬件设备，则是设备的序列号等
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getEmployerName() 获取所属单位名称
 * @method void setEmployerName(string $EmployerName) 设置所属单位名称
 * @method string getAuthTime() 获取核身时间
yyyy-MM-DDTHH:mm:ss+TIMEZONE

示例值：2015-05-20T13:29:35+08:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthTime(string $AuthTime) 设置核身时间
yyyy-MM-DDTHH:mm:ss+TIMEZONE

示例值：2015-05-20T13:29:35+08:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthType() 获取核身类型

SIGN_IN：考勤、签到打卡类型
INSURANCE：投保类型
CONTRACT：签约类型
 * @method void setAuthType(string $AuthType) 设置核身类型

SIGN_IN：考勤、签到打卡类型
INSURANCE：投保类型
CONTRACT：签约类型
 * @method string getAuthState() 获取核身状态
AUTHENTICATE_PROCESSING：核身中
AUTHENTICATE_SUCCESS：核身成功
AUTHENTICATE_FAILED：核身失败
 * @method void setAuthState(string $AuthState) 设置核身状态
AUTHENTICATE_PROCESSING：核身中
AUTHENTICATE_SUCCESS：核身成功
AUTHENTICATE_FAILED：核身失败
 * @method string getAuthFailReason() 获取核身失败原因描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthFailReason(string $AuthFailReason) 设置核身失败原因描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryWechatAuthResult extends AbstractModel
{
    /**
     * @var string 商户核身单号
     */
    public $AuthNo;

    /**
     * @var string 微信用户标识
     */
    public $OpenId;

    /**
     * @var string 商户号
     */
    public $MchId;

    /**
     * @var string 子商户号
     */
    public $SubMchId;

    /**
     * @var string 核身渠道
FROM_MINI_APP：来自小程序方式核身
FROM_HARDWARE：来自硬件设备方式核身
     */
    public $AuthScene;

    /**
     * @var string 核身渠道标识

用于定位渠道具体来源，如果是扫码打卡渠道标识就是具体的小程序appid，若是硬件设备，则是设备的序列号等
     */
    public $AuthSource;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 所属单位名称
     */
    public $EmployerName;

    /**
     * @var string 核身时间
yyyy-MM-DDTHH:mm:ss+TIMEZONE

示例值：2015-05-20T13:29:35+08:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthTime;

    /**
     * @var string 核身类型

SIGN_IN：考勤、签到打卡类型
INSURANCE：投保类型
CONTRACT：签约类型
     */
    public $AuthType;

    /**
     * @var string 核身状态
AUTHENTICATE_PROCESSING：核身中
AUTHENTICATE_SUCCESS：核身成功
AUTHENTICATE_FAILED：核身失败
     */
    public $AuthState;

    /**
     * @var string 核身失败原因描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthFailReason;

    /**
     * @param string $AuthNo 商户核身单号
     * @param string $OpenId 微信用户标识
     * @param string $MchId 商户号
     * @param string $SubMchId 子商户号
     * @param string $AuthScene 核身渠道
FROM_MINI_APP：来自小程序方式核身
FROM_HARDWARE：来自硬件设备方式核身
     * @param string $AuthSource 核身渠道标识

用于定位渠道具体来源，如果是扫码打卡渠道标识就是具体的小程序appid，若是硬件设备，则是设备的序列号等
     * @param string $ProjectName 项目名称
     * @param string $EmployerName 所属单位名称
     * @param string $AuthTime 核身时间
yyyy-MM-DDTHH:mm:ss+TIMEZONE

示例值：2015-05-20T13:29:35+08:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthType 核身类型

SIGN_IN：考勤、签到打卡类型
INSURANCE：投保类型
CONTRACT：签约类型
     * @param string $AuthState 核身状态
AUTHENTICATE_PROCESSING：核身中
AUTHENTICATE_SUCCESS：核身成功
AUTHENTICATE_FAILED：核身失败
     * @param string $AuthFailReason 核身失败原因描述
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AuthNo",$param) and $param["AuthNo"] !== null) {
            $this->AuthNo = $param["AuthNo"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("MchId",$param) and $param["MchId"] !== null) {
            $this->MchId = $param["MchId"];
        }

        if (array_key_exists("SubMchId",$param) and $param["SubMchId"] !== null) {
            $this->SubMchId = $param["SubMchId"];
        }

        if (array_key_exists("AuthScene",$param) and $param["AuthScene"] !== null) {
            $this->AuthScene = $param["AuthScene"];
        }

        if (array_key_exists("AuthSource",$param) and $param["AuthSource"] !== null) {
            $this->AuthSource = $param["AuthSource"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("EmployerName",$param) and $param["EmployerName"] !== null) {
            $this->EmployerName = $param["EmployerName"];
        }

        if (array_key_exists("AuthTime",$param) and $param["AuthTime"] !== null) {
            $this->AuthTime = $param["AuthTime"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("AuthState",$param) and $param["AuthState"] !== null) {
            $this->AuthState = $param["AuthState"];
        }

        if (array_key_exists("AuthFailReason",$param) and $param["AuthFailReason"] !== null) {
            $this->AuthFailReason = $param["AuthFailReason"];
        }
    }
}
