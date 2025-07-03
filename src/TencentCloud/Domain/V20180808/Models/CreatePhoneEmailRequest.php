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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePhoneEmail请求参数结构体
 *
 * @method string getCode() 获取手机号或者邮箱
 * @method void setCode(string $Code) 设置手机号或者邮箱
 * @method integer getType() 获取1：手机   2：邮箱
 * @method void setType(integer $Type) 设置1：手机   2：邮箱
 * @method string getVerifyCode() 获取验证码
通过调用[SendPhoneEmailCode](https://cloud.tencent.com/document/api/242/62666)接口发送到手机或邮箱的验证码
 * @method void setVerifyCode(string $VerifyCode) 设置验证码
通过调用[SendPhoneEmailCode](https://cloud.tencent.com/document/api/242/62666)接口发送到手机或邮箱的验证码
 */
class CreatePhoneEmailRequest extends AbstractModel
{
    /**
     * @var string 手机号或者邮箱
     */
    public $Code;

    /**
     * @var integer 1：手机   2：邮箱
     */
    public $Type;

    /**
     * @var string 验证码
通过调用[SendPhoneEmailCode](https://cloud.tencent.com/document/api/242/62666)接口发送到手机或邮箱的验证码
     */
    public $VerifyCode;

    /**
     * @param string $Code 手机号或者邮箱
     * @param integer $Type 1：手机   2：邮箱
     * @param string $VerifyCode 验证码
通过调用[SendPhoneEmailCode](https://cloud.tencent.com/document/api/242/62666)接口发送到手机或邮箱的验证码
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VerifyCode",$param) and $param["VerifyCode"] !== null) {
            $this->VerifyCode = $param["VerifyCode"];
        }
    }
}
