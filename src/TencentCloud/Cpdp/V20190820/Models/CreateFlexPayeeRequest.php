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
 * CreateFlexPayee请求参数结构体
 *
 * @method string getOutUserId() 获取用户外部业务ID
 * @method void setOutUserId(string $OutUserId) 设置用户外部业务ID
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getIdNo() 获取证件号
 * @method void setIdNo(string $IdNo) 设置证件号
 * @method string getAccountName() 获取账户名称
 * @method void setAccountName(string $AccountName) 设置账户名称
 * @method string getServiceProviderId() 获取服务商ID
 * @method void setServiceProviderId(string $ServiceProviderId) 设置服务商ID
 * @method PayeeTaxInfo getTaxInfo() 获取计税信息
 * @method void setTaxInfo(PayeeTaxInfo $TaxInfo) 设置计税信息
 * @method integer getIdType() 获取证件类型
0:身份证
1:社会信用代码
 * @method void setIdType(integer $IdType) 设置证件类型
0:身份证
1:社会信用代码
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getPhoneNo() 获取手机号码
 * @method void setPhoneNo(string $PhoneNo) 设置手机号码
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 */
class CreateFlexPayeeRequest extends AbstractModel
{
    /**
     * @var string 用户外部业务ID
     */
    public $OutUserId;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 证件号
     */
    public $IdNo;

    /**
     * @var string 账户名称
     */
    public $AccountName;

    /**
     * @var string 服务商ID
     */
    public $ServiceProviderId;

    /**
     * @var PayeeTaxInfo 计税信息
     */
    public $TaxInfo;

    /**
     * @var integer 证件类型
0:身份证
1:社会信用代码
     */
    public $IdType;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 手机号码
     */
    public $PhoneNo;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @param string $OutUserId 用户外部业务ID
     * @param string $Name 姓名
     * @param string $IdNo 证件号
     * @param string $AccountName 账户名称
     * @param string $ServiceProviderId 服务商ID
     * @param PayeeTaxInfo $TaxInfo 计税信息
     * @param integer $IdType 证件类型
0:身份证
1:社会信用代码
     * @param string $Remark 备注
     * @param string $PhoneNo 手机号码
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
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
        if (array_key_exists("OutUserId",$param) and $param["OutUserId"] !== null) {
            $this->OutUserId = $param["OutUserId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdNo",$param) and $param["IdNo"] !== null) {
            $this->IdNo = $param["IdNo"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("TaxInfo",$param) and $param["TaxInfo"] !== null) {
            $this->TaxInfo = new PayeeTaxInfo();
            $this->TaxInfo->deserialize($param["TaxInfo"]);
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PhoneNo",$param) and $param["PhoneNo"] !== null) {
            $this->PhoneNo = $param["PhoneNo"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
