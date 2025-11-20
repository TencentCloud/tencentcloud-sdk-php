<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEnterprise请求参数结构体
 *
 * @method integer getCustomerId() 获取企业ID
 * @method void setCustomerId(integer $CustomerId) 设置企业ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getParentEnterpriseUid() 获取上一级企业
 * @method void setParentEnterpriseUid(string $ParentEnterpriseUid) 设置上一级企业
 * @method string getCreditCode() 获取统一社会信用代码
 * @method void setCreditCode(string $CreditCode) 设置统一社会信用代码
 * @method string getStatus() 获取企业状态:存续、已注销
 * @method void setStatus(string $Status) 设置企业状态:存续、已注销
 * @method string getRegisteredCapital() 获取注册资本（单位:元）
 * @method void setRegisteredCapital(string $RegisteredCapital) 设置注册资本（单位:元）
 * @method string getShareholdingRatio() 获取持股比例
 * @method void setShareholdingRatio(string $ShareholdingRatio) 设置持股比例
 * @method string getLegalPerson() 获取法人代表
 * @method void setLegalPerson(string $LegalPerson) 设置法人代表
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getIndustry() 获取行业类型
 * @method void setIndustry(string $Industry) 设置行业类型
 * @method string getEnterpriseUid() 获取子公司ID
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司ID
 */
class CreateEnterpriseRequest extends AbstractModel
{
    /**
     * @var integer 企业ID
     */
    public $CustomerId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 上一级企业
     */
    public $ParentEnterpriseUid;

    /**
     * @var string 统一社会信用代码
     */
    public $CreditCode;

    /**
     * @var string 企业状态:存续、已注销
     */
    public $Status;

    /**
     * @var string 注册资本（单位:元）
     */
    public $RegisteredCapital;

    /**
     * @var string 持股比例
     */
    public $ShareholdingRatio;

    /**
     * @var string 法人代表
     */
    public $LegalPerson;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 行业类型
     */
    public $Industry;

    /**
     * @var string 子公司ID
     */
    public $EnterpriseUid;

    /**
     * @param integer $CustomerId 企业ID
     * @param string $Name 名称
     * @param string $ParentEnterpriseUid 上一级企业
     * @param string $CreditCode 统一社会信用代码
     * @param string $Status 企业状态:存续、已注销
     * @param string $RegisteredCapital 注册资本（单位:元）
     * @param string $ShareholdingRatio 持股比例
     * @param string $LegalPerson 法人代表
     * @param string $Type 类型
     * @param string $Industry 行业类型
     * @param string $EnterpriseUid 子公司ID
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentEnterpriseUid",$param) and $param["ParentEnterpriseUid"] !== null) {
            $this->ParentEnterpriseUid = $param["ParentEnterpriseUid"];
        }

        if (array_key_exists("CreditCode",$param) and $param["CreditCode"] !== null) {
            $this->CreditCode = $param["CreditCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RegisteredCapital",$param) and $param["RegisteredCapital"] !== null) {
            $this->RegisteredCapital = $param["RegisteredCapital"];
        }

        if (array_key_exists("ShareholdingRatio",$param) and $param["ShareholdingRatio"] !== null) {
            $this->ShareholdingRatio = $param["ShareholdingRatio"];
        }

        if (array_key_exists("LegalPerson",$param) and $param["LegalPerson"] !== null) {
            $this->LegalPerson = $param["LegalPerson"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Industry",$param) and $param["Industry"] !== null) {
            $this->Industry = $param["Industry"];
        }

        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
        }
    }
}
