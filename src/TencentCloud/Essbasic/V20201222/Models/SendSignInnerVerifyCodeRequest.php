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
 * SendSignInnerVerifyCode请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getMobile() 获取手机号
 * @method void setMobile(string $Mobile) 设置手机号
 * @method string getVerifyType() 获取验证码类型，取值(SIGN)
 * @method void setVerifyType(string $VerifyType) 设置验证码类型，取值(SIGN)
 * @method string getUserId() 获取用户 id
 * @method void setUserId(string $UserId) 设置用户 id
 * @method string getVerifyTemplateId() 获取模板 id
 * @method void setVerifyTemplateId(string $VerifyTemplateId) 设置模板 id
 * @method string getVerifySign() 获取签名
 * @method void setVerifySign(string $VerifySign) 设置签名
 * @method string getFlowId() 获取流程(目录) id
 * @method void setFlowId(string $FlowId) 设置流程(目录) id
 * @method integer getCheckThreeElementResult() 获取三要素检测结果
 * @method void setCheckThreeElementResult(integer $CheckThreeElementResult) 设置三要素检测结果
 */
class SendSignInnerVerifyCodeRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 手机号
     */
    public $Mobile;

    /**
     * @var string 验证码类型，取值(SIGN)
     */
    public $VerifyType;

    /**
     * @var string 用户 id
     */
    public $UserId;

    /**
     * @var string 模板 id
     */
    public $VerifyTemplateId;

    /**
     * @var string 签名
     */
    public $VerifySign;

    /**
     * @var string 流程(目录) id
     */
    public $FlowId;

    /**
     * @var integer 三要素检测结果
     */
    public $CheckThreeElementResult;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $Mobile 手机号
     * @param string $VerifyType 验证码类型，取值(SIGN)
     * @param string $UserId 用户 id
     * @param string $VerifyTemplateId 模板 id
     * @param string $VerifySign 签名
     * @param string $FlowId 流程(目录) id
     * @param integer $CheckThreeElementResult 三要素检测结果
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

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("VerifyTemplateId",$param) and $param["VerifyTemplateId"] !== null) {
            $this->VerifyTemplateId = $param["VerifyTemplateId"];
        }

        if (array_key_exists("VerifySign",$param) and $param["VerifySign"] !== null) {
            $this->VerifySign = $param["VerifySign"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("CheckThreeElementResult",$param) and $param["CheckThreeElementResult"] !== null) {
            $this->CheckThreeElementResult = $param["CheckThreeElementResult"];
        }
    }
}
