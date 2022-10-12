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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCRUserVerify请求参数结构体
 *
 * @method string getUserName() 获取用户真实姓名
 * @method void setUserName(string $UserName) 设置用户真实姓名
 * @method string getUserID() 获取用户身份证号
 * @method void setUserID(string $UserID) 设置用户身份证号
 * @method string getUserPhone() 获取用户手机号码
 * @method void setUserPhone(string $UserPhone) 设置用户手机号码
 * @method string getVerificationCode() 获取短信验证码，接口接入可以置空
 * @method void setVerificationCode(string $VerificationCode) 设置短信验证码，接口接入可以置空
 * @method string getType() 获取字段已废弃，认证类型
 * @method void setType(string $Type) 设置字段已废弃，认证类型
 */
class CreateCRUserVerifyRequest extends AbstractModel
{
    /**
     * @var string 用户真实姓名
     */
    public $UserName;

    /**
     * @var string 用户身份证号
     */
    public $UserID;

    /**
     * @var string 用户手机号码
     */
    public $UserPhone;

    /**
     * @var string 短信验证码，接口接入可以置空
     */
    public $VerificationCode;

    /**
     * @var string 字段已废弃，认证类型
     */
    public $Type;

    /**
     * @param string $UserName 用户真实姓名
     * @param string $UserID 用户身份证号
     * @param string $UserPhone 用户手机号码
     * @param string $VerificationCode 短信验证码，接口接入可以置空
     * @param string $Type 字段已废弃，认证类型
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("UserPhone",$param) and $param["UserPhone"] !== null) {
            $this->UserPhone = $param["UserPhone"];
        }

        if (array_key_exists("VerificationCode",$param) and $param["VerificationCode"] !== null) {
            $this->VerificationCode = $param["VerificationCode"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
