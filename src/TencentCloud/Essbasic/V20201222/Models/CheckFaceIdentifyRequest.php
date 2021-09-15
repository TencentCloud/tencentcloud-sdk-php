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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckFaceIdentify请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息; 必选
 * @method void setCaller(Caller $Caller) 设置调用方信息; 必选
 * @method string getVerifyChannel() 获取人脸核身渠道; 必选; WEIXINAPP:腾讯电子签小程序,FACEID:腾讯电子签慧眼,None:白名单中的客户直接通过
 * @method void setVerifyChannel(string $VerifyChannel) 设置人脸核身渠道; 必选; WEIXINAPP:腾讯电子签小程序,FACEID:腾讯电子签慧眼,None:白名单中的客户直接通过
 * @method string getVerifyResult() 获取核身订单号; 必选; 对于WEIXINAPP,直接取响应的{VerifyResult};对于FACEID,使用{WbAppId}:{OrderNo}拼接
 * @method void setVerifyResult(string $VerifyResult) 设置核身订单号; 必选; 对于WEIXINAPP,直接取响应的{VerifyResult};对于FACEID,使用{WbAppId}:{OrderNo}拼接
 * @method string getName() 获取要对比的姓名; 可选; 未填写时对比caller.OperatorId的实名信息
 * @method void setName(string $Name) 设置要对比的姓名; 可选; 未填写时对比caller.OperatorId的实名信息
 * @method string getIdCardNumber() 获取要对比的身份证号码; 可选; 未填写时对比caller.OperatorId的实名信息
 * @method void setIdCardNumber(string $IdCardNumber) 设置要对比的身份证号码; 可选; 未填写时对比caller.OperatorId的实名信息
 * @method boolean getGetPhoto() 获取是否取认证时的照片
 * @method void setGetPhoto(boolean $GetPhoto) 设置是否取认证时的照片
 */
class CheckFaceIdentifyRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息; 必选
     */
    public $Caller;

    /**
     * @var string 人脸核身渠道; 必选; WEIXINAPP:腾讯电子签小程序,FACEID:腾讯电子签慧眼,None:白名单中的客户直接通过
     */
    public $VerifyChannel;

    /**
     * @var string 核身订单号; 必选; 对于WEIXINAPP,直接取响应的{VerifyResult};对于FACEID,使用{WbAppId}:{OrderNo}拼接
     */
    public $VerifyResult;

    /**
     * @var string 要对比的姓名; 可选; 未填写时对比caller.OperatorId的实名信息
     */
    public $Name;

    /**
     * @var string 要对比的身份证号码; 可选; 未填写时对比caller.OperatorId的实名信息
     */
    public $IdCardNumber;

    /**
     * @var boolean 是否取认证时的照片
     */
    public $GetPhoto;

    /**
     * @param Caller $Caller 调用方信息; 必选
     * @param string $VerifyChannel 人脸核身渠道; 必选; WEIXINAPP:腾讯电子签小程序,FACEID:腾讯电子签慧眼,None:白名单中的客户直接通过
     * @param string $VerifyResult 核身订单号; 必选; 对于WEIXINAPP,直接取响应的{VerifyResult};对于FACEID,使用{WbAppId}:{OrderNo}拼接
     * @param string $Name 要对比的姓名; 可选; 未填写时对比caller.OperatorId的实名信息
     * @param string $IdCardNumber 要对比的身份证号码; 可选; 未填写时对比caller.OperatorId的实名信息
     * @param boolean $GetPhoto 是否取认证时的照片
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("VerifyChannel",$param) and $param["VerifyChannel"] !== null) {
            $this->VerifyChannel = $param["VerifyChannel"];
        }

        if (array_key_exists("VerifyResult",$param) and $param["VerifyResult"] !== null) {
            $this->VerifyResult = $param["VerifyResult"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("GetPhoto",$param) and $param["GetPhoto"] !== null) {
            $this->GetPhoto = $param["GetPhoto"];
        }
    }
}
