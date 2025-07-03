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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业架构详情
 *
 * @method integer getId() 获取主键Id
 * @method void setId(integer $Id) 设置主键Id
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getParentEnterpriseUid() 获取子公司上级
 * @method void setParentEnterpriseUid(string $ParentEnterpriseUid) 设置子公司上级
 * @method string getName() 获取企业名称
 * @method void setName(string $Name) 设置企业名称
 * @method string getAbbreviation() 获取公司简称
 * @method void setAbbreviation(string $Abbreviation) 设置公司简称
 * @method string getCreditCode() 获取统一社会信用代码
 * @method void setCreditCode(string $CreditCode) 设置统一社会信用代码
 * @method string getStatus() 获取企业状态
 * @method void setStatus(string $Status) 设置企业状态
 * @method string getRegisteredCapital() 获取注册资本
 * @method void setRegisteredCapital(string $RegisteredCapital) 设置注册资本
 * @method string getShareholdingRatio() 获取持股比例
 * @method void setShareholdingRatio(string $ShareholdingRatio) 设置持股比例
 * @method string getLegalPerson() 获取法人代表
 * @method void setLegalPerson(string $LegalPerson) 设置法人代表
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getIndustry() 获取行业类型
 * @method void setIndustry(string $Industry) 设置行业类型
 * @method string getEnterpriseUid() 获取子公司唯一uid
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司唯一uid
 * @method integer getDomainCount() 获取主域名数量
 * @method void setDomainCount(integer $DomainCount) 设置主域名数量
 * @method integer getSubDomainCount() 获取子域名数量
 * @method void setSubDomainCount(integer $SubDomainCount) 设置子域名数量
 * @method integer getHttpCount() 获取网站数量
 * @method void setHttpCount(integer $HttpCount) 设置网站数量
 * @method integer getVulCount() 获取漏洞数量
 * @method void setVulCount(integer $VulCount) 设置漏洞数量
 */
class DisplayEnterprise extends AbstractModel
{
    /**
     * @var integer 主键Id
     */
    public $Id;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string 子公司上级
     */
    public $ParentEnterpriseUid;

    /**
     * @var string 企业名称
     */
    public $Name;

    /**
     * @var string 公司简称
     */
    public $Abbreviation;

    /**
     * @var string 统一社会信用代码
     */
    public $CreditCode;

    /**
     * @var string 企业状态
     */
    public $Status;

    /**
     * @var string 注册资本
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
     * @var string 子公司唯一uid
     */
    public $EnterpriseUid;

    /**
     * @var integer 主域名数量
     */
    public $DomainCount;

    /**
     * @var integer 子域名数量
     */
    public $SubDomainCount;

    /**
     * @var integer 网站数量
     */
    public $HttpCount;

    /**
     * @var integer 漏洞数量
     */
    public $VulCount;

    /**
     * @param integer $Id 主键Id
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $ParentEnterpriseUid 子公司上级
     * @param string $Name 企业名称
     * @param string $Abbreviation 公司简称
     * @param string $CreditCode 统一社会信用代码
     * @param string $Status 企业状态
     * @param string $RegisteredCapital 注册资本
     * @param string $ShareholdingRatio 持股比例
     * @param string $LegalPerson 法人代表
     * @param string $Type 类型
     * @param string $Industry 行业类型
     * @param string $EnterpriseUid 子公司唯一uid
     * @param integer $DomainCount 主域名数量
     * @param integer $SubDomainCount 子域名数量
     * @param integer $HttpCount 网站数量
     * @param integer $VulCount 漏洞数量
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("ParentEnterpriseUid",$param) and $param["ParentEnterpriseUid"] !== null) {
            $this->ParentEnterpriseUid = $param["ParentEnterpriseUid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Abbreviation",$param) and $param["Abbreviation"] !== null) {
            $this->Abbreviation = $param["Abbreviation"];
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

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("SubDomainCount",$param) and $param["SubDomainCount"] !== null) {
            $this->SubDomainCount = $param["SubDomainCount"];
        }

        if (array_key_exists("HttpCount",$param) and $param["HttpCount"] !== null) {
            $this->HttpCount = $param["HttpCount"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }
    }
}
