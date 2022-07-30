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
 * CreateCRCompanyVerify请求参数结构体
 *
 * @method string getCompanyName() 获取企业名称
 * @method void setCompanyName(string $CompanyName) 设置企业名称
 * @method string getCompanyIDType() 获取企业认证号码类型 1：社会信用代码 2：组织机构代码 3：企业工商注册码 4：其他 默认为1
 * @method void setCompanyIDType(string $CompanyIDType) 设置企业认证号码类型 1：社会信用代码 2：组织机构代码 3：企业工商注册码 4：其他 默认为1
 * @method string getCompanyID() 获取企业证件号码
 * @method void setCompanyID(string $CompanyID) 设置企业证件号码
 * @method string getCompanyLegalName() 获取企业法人姓名
 * @method void setCompanyLegalName(string $CompanyLegalName) 设置企业法人姓名
 * @method string getManagerName() 获取管理员名称
 * @method void setManagerName(string $ManagerName) 设置管理员名称
 * @method string getManagerPhone() 获取管理员手机号
 * @method void setManagerPhone(string $ManagerPhone) 设置管理员手机号
 * @method string getVerificationCode() 获取手机验证码
 * @method void setVerificationCode(string $VerificationCode) 设置手机验证码
 * @method string getType() 获取xxx
 * @method void setType(string $Type) 设置xxx
 */
class CreateCRCompanyVerifyRequest extends AbstractModel
{
    /**
     * @var string 企业名称
     */
    public $CompanyName;

    /**
     * @var string 企业认证号码类型 1：社会信用代码 2：组织机构代码 3：企业工商注册码 4：其他 默认为1
     */
    public $CompanyIDType;

    /**
     * @var string 企业证件号码
     */
    public $CompanyID;

    /**
     * @var string 企业法人姓名
     */
    public $CompanyLegalName;

    /**
     * @var string 管理员名称
     */
    public $ManagerName;

    /**
     * @var string 管理员手机号
     */
    public $ManagerPhone;

    /**
     * @var string 手机验证码
     */
    public $VerificationCode;

    /**
     * @var string xxx
     */
    public $Type;

    /**
     * @param string $CompanyName 企业名称
     * @param string $CompanyIDType 企业认证号码类型 1：社会信用代码 2：组织机构代码 3：企业工商注册码 4：其他 默认为1
     * @param string $CompanyID 企业证件号码
     * @param string $CompanyLegalName 企业法人姓名
     * @param string $ManagerName 管理员名称
     * @param string $ManagerPhone 管理员手机号
     * @param string $VerificationCode 手机验证码
     * @param string $Type xxx
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
        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("CompanyIDType",$param) and $param["CompanyIDType"] !== null) {
            $this->CompanyIDType = $param["CompanyIDType"];
        }

        if (array_key_exists("CompanyID",$param) and $param["CompanyID"] !== null) {
            $this->CompanyID = $param["CompanyID"];
        }

        if (array_key_exists("CompanyLegalName",$param) and $param["CompanyLegalName"] !== null) {
            $this->CompanyLegalName = $param["CompanyLegalName"];
        }

        if (array_key_exists("ManagerName",$param) and $param["ManagerName"] !== null) {
            $this->ManagerName = $param["ManagerName"];
        }

        if (array_key_exists("ManagerPhone",$param) and $param["ManagerPhone"] !== null) {
            $this->ManagerPhone = $param["ManagerPhone"];
        }

        if (array_key_exists("VerificationCode",$param) and $param["VerificationCode"] !== null) {
            $this->VerificationCode = $param["VerificationCode"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
