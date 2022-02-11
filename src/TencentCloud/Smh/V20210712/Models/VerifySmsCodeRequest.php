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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifySmsCode请求参数结构体
 *
 * @method string getPurpose() 获取验证码目的，当前仅支持换绑超级管理员账号，固定填写 BindSuperAdmin。
 * @method void setPurpose(string $Purpose) 设置验证码目的，当前仅支持换绑超级管理员账号，固定填写 BindSuperAdmin。
 * @method string getInstanceId() 获取官方云盘实例 ID
 * @method void setInstanceId(string $InstanceId) 设置官方云盘实例 ID
 * @method string getPhoneNumber() 获取将作为超级管理员账号的手机号码，仅限中国境内手机号，无需国家代码“+86”。
 * @method void setPhoneNumber(string $PhoneNumber) 设置将作为超级管理员账号的手机号码，仅限中国境内手机号，无需国家代码“+86”。
 * @method string getCode() 获取短信验证码
 * @method void setCode(string $Code) 设置短信验证码
 */
class VerifySmsCodeRequest extends AbstractModel
{
    /**
     * @var string 验证码目的，当前仅支持换绑超级管理员账号，固定填写 BindSuperAdmin。
     */
    public $Purpose;

    /**
     * @var string 官方云盘实例 ID
     */
    public $InstanceId;

    /**
     * @var string 将作为超级管理员账号的手机号码，仅限中国境内手机号，无需国家代码“+86”。
     */
    public $PhoneNumber;

    /**
     * @var string 短信验证码
     */
    public $Code;

    /**
     * @param string $Purpose 验证码目的，当前仅支持换绑超级管理员账号，固定填写 BindSuperAdmin。
     * @param string $InstanceId 官方云盘实例 ID
     * @param string $PhoneNumber 将作为超级管理员账号的手机号码，仅限中国境内手机号，无需国家代码“+86”。
     * @param string $Code 短信验证码
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
        if (array_key_exists("Purpose",$param) and $param["Purpose"] !== null) {
            $this->Purpose = $param["Purpose"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
