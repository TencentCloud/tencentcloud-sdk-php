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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业安全组规则列表信息
 *
 * @method integer getOrderIndex() 获取<p>排序</p>
 * @method void setOrderIndex(integer $OrderIndex) 设置<p>排序</p>
 * @method string getRuleId() 获取<p>主键id</p>
 * @method void setRuleId(string $RuleId) 设置<p>主键id</p>
 * @method string getIpVersion() 获取<p>ip类型</p>
 * @method void setIpVersion(string $IpVersion) 设置<p>ip类型</p>
 * @method string getSourceId() 获取<p>源规则内容</p>
 * @method void setSourceId(string $SourceId) 设置<p>源规则内容</p>
 * @method integer getSourceType() 获取<p>源规则类型<br>取值范围 0/1/2/3/4/5/6/7/8/9/100<br>0表示ip(net),<br>1表示VPC实例(instance)<br>2表示子网实例(instance)<br>3表示CVM实例(instance)<br>4表示CLB实例(instance)<br>5表示ENI实例(instance)<br>6表示数据库实例(instance)<br>7表示模板(template)<br>8表示标签(tag)<br>9表示地域(region)<br>100表示资产分组(resourcegroup)</p>
 * @method void setSourceType(integer $SourceType) 设置<p>源规则类型<br>取值范围 0/1/2/3/4/5/6/7/8/9/100<br>0表示ip(net),<br>1表示VPC实例(instance)<br>2表示子网实例(instance)<br>3表示CVM实例(instance)<br>4表示CLB实例(instance)<br>5表示ENI实例(instance)<br>6表示数据库实例(instance)<br>7表示模板(template)<br>8表示标签(tag)<br>9表示地域(region)<br>100表示资产分组(resourcegroup)</p>
 * @method string getTargetId() 获取<p>目的规则内容</p>
 * @method void setTargetId(string $TargetId) 设置<p>目的规则内容</p>
 * @method integer getTargetType() 获取<p>目的规则类型<br>取值范围 0/1/2/3/4/5/6/7/8/9/100<br>0表示ip(net),<br>1表示VPC实例(instance)<br>2表示子网实例(instance)<br>3表示CVM实例(instance)<br>4表示CLB实例(instance)<br>5表示ENI实例(instance)<br>6表示数据库实例(instance)<br>7表示模板(template)<br>8表示标签(tag)<br>9表示地域(region)<br>100表示资产分组(resourcegroup)</p>
 * @method void setTargetType(integer $TargetType) 设置<p>目的规则类型<br>取值范围 0/1/2/3/4/5/6/7/8/9/100<br>0表示ip(net),<br>1表示VPC实例(instance)<br>2表示子网实例(instance)<br>3表示CVM实例(instance)<br>4表示CLB实例(instance)<br>5表示ENI实例(instance)<br>6表示数据库实例(instance)<br>7表示模板(template)<br>8表示标签(tag)<br>9表示地域(region)<br>100表示资产分组(resourcegroup)</p>
 * @method string getProtocol() 获取<p>协议名称<br>取值范围:TCP/ANY/ICMP/UDP<br>ANY:表示所有</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议名称<br>取值范围:TCP/ANY/ICMP/UDP<br>ANY:表示所有</p>
 * @method string getPort() 获取<p>端口</p>
 * @method void setPort(string $Port) 设置<p>端口</p>
 * @method integer getStrategy() 获取<p>策略</p>
 * @method void setStrategy(integer $Strategy) 设置<p>策略</p>
 * @method string getDetail() 获取<p>描述</p>
 * @method void setDetail(string $Detail) 设置<p>描述</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getServiceTemplateId() 获取<p>服务模板id</p>
 * @method void setServiceTemplateId(string $ServiceTemplateId) 设置<p>服务模板id</p>
 * @method string getSouInstanceName() 获取<p>源资产名称</p>
 * @method void setSouInstanceName(string $SouInstanceName) 设置<p>源资产名称</p>
 * @method string getSouPublicIp() 获取<p>源资产公网ip</p>
 * @method void setSouPublicIp(string $SouPublicIp) 设置<p>源资产公网ip</p>
 * @method string getSouPrivateIp() 获取<p>源资产内网ip</p>
 * @method void setSouPrivateIp(string $SouPrivateIp) 设置<p>源资产内网ip</p>
 * @method string getSouCidr() 获取<p>源资产网段信息</p>
 * @method void setSouCidr(string $SouCidr) 设置<p>源资产网段信息</p>
 * @method string getSouParameterName() 获取<p>源模板名称</p>
 * @method void setSouParameterName(string $SouParameterName) 设置<p>源模板名称</p>
 * @method string getInstanceName() 获取<p>目的资产名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>目的资产名称</p>
 * @method string getPublicIp() 获取<p>目的资产公网ip</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>目的资产公网ip</p>
 * @method string getPrivateIp() 获取<p>目的资产内网ip</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>目的资产内网ip</p>
 * @method string getCidr() 获取<p>目的资产网段信息</p>
 * @method void setCidr(string $Cidr) 设置<p>目的资产网段信息</p>
 * @method string getParameterName() 获取<p>目的模板名称</p>
 * @method void setParameterName(string $ParameterName) 设置<p>目的模板名称</p>
 * @method string getProtocolPortName() 获取<p>端口模板名称</p>
 * @method void setProtocolPortName(string $ProtocolPortName) 设置<p>端口模板名称</p>
 * @method integer getId() 获取<p>规则id  等同RuleUuid</p>
 * @method void setId(integer $Id) 设置<p>规则id  等同RuleUuid</p>
 * @method SgDnsParseCount getDnsParseCount() 获取<p>域名解析的IP统计</p>
 * @method void setDnsParseCount(SgDnsParseCount $DnsParseCount) 设置<p>域名解析的IP统计</p>
 * @method string getScope() 获取<p>规则生效范围</p>
 * @method void setScope(string $Scope) 设置<p>规则生效范围</p>
 * @method integer getIsNew() 获取<p>规则最近一次是否有改动 取值范围：0/1 0:否 1:是</p>
 * @method void setIsNew(integer $IsNew) 设置<p>规则最近一次是否有改动 取值范围：0/1 0:否 1:是</p>
 * @method MemberInfo getBelongMember() 获取<p>规则归属的成员账号（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBelongMember(MemberInfo $BelongMember) 设置<p>规则归属的成员账号（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填)</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecGroupRuleResp extends AbstractModel
{
    /**
     * @var integer <p>排序</p>
     */
    public $OrderIndex;

    /**
     * @var string <p>主键id</p>
     */
    public $RuleId;

    /**
     * @var string <p>ip类型</p>
     */
    public $IpVersion;

    /**
     * @var string <p>源规则内容</p>
     */
    public $SourceId;

    /**
     * @var integer <p>源规则类型<br>取值范围 0/1/2/3/4/5/6/7/8/9/100<br>0表示ip(net),<br>1表示VPC实例(instance)<br>2表示子网实例(instance)<br>3表示CVM实例(instance)<br>4表示CLB实例(instance)<br>5表示ENI实例(instance)<br>6表示数据库实例(instance)<br>7表示模板(template)<br>8表示标签(tag)<br>9表示地域(region)<br>100表示资产分组(resourcegroup)</p>
     */
    public $SourceType;

    /**
     * @var string <p>目的规则内容</p>
     */
    public $TargetId;

    /**
     * @var integer <p>目的规则类型<br>取值范围 0/1/2/3/4/5/6/7/8/9/100<br>0表示ip(net),<br>1表示VPC实例(instance)<br>2表示子网实例(instance)<br>3表示CVM实例(instance)<br>4表示CLB实例(instance)<br>5表示ENI实例(instance)<br>6表示数据库实例(instance)<br>7表示模板(template)<br>8表示标签(tag)<br>9表示地域(region)<br>100表示资产分组(resourcegroup)</p>
     */
    public $TargetType;

    /**
     * @var string <p>协议名称<br>取值范围:TCP/ANY/ICMP/UDP<br>ANY:表示所有</p>
     */
    public $Protocol;

    /**
     * @var string <p>端口</p>
     */
    public $Port;

    /**
     * @var integer <p>策略</p>
     */
    public $Strategy;

    /**
     * @var string <p>描述</p>
     */
    public $Detail;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>服务模板id</p>
     */
    public $ServiceTemplateId;

    /**
     * @var string <p>源资产名称</p>
     */
    public $SouInstanceName;

    /**
     * @var string <p>源资产公网ip</p>
     */
    public $SouPublicIp;

    /**
     * @var string <p>源资产内网ip</p>
     */
    public $SouPrivateIp;

    /**
     * @var string <p>源资产网段信息</p>
     */
    public $SouCidr;

    /**
     * @var string <p>源模板名称</p>
     */
    public $SouParameterName;

    /**
     * @var string <p>目的资产名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>目的资产公网ip</p>
     */
    public $PublicIp;

    /**
     * @var string <p>目的资产内网ip</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>目的资产网段信息</p>
     */
    public $Cidr;

    /**
     * @var string <p>目的模板名称</p>
     */
    public $ParameterName;

    /**
     * @var string <p>端口模板名称</p>
     */
    public $ProtocolPortName;

    /**
     * @var integer <p>规则id  等同RuleUuid</p>
     */
    public $Id;

    /**
     * @var SgDnsParseCount <p>域名解析的IP统计</p>
     */
    public $DnsParseCount;

    /**
     * @var string <p>规则生效范围</p>
     */
    public $Scope;

    /**
     * @var integer <p>规则最近一次是否有改动 取值范围：0/1 0:否 1:是</p>
     */
    public $IsNew;

    /**
     * @var MemberInfo <p>规则归属的成员账号（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BelongMember;

    /**
     * @param integer $OrderIndex <p>排序</p>
     * @param string $RuleId <p>主键id</p>
     * @param string $IpVersion <p>ip类型</p>
     * @param string $SourceId <p>源规则内容</p>
     * @param integer $SourceType <p>源规则类型<br>取值范围 0/1/2/3/4/5/6/7/8/9/100<br>0表示ip(net),<br>1表示VPC实例(instance)<br>2表示子网实例(instance)<br>3表示CVM实例(instance)<br>4表示CLB实例(instance)<br>5表示ENI实例(instance)<br>6表示数据库实例(instance)<br>7表示模板(template)<br>8表示标签(tag)<br>9表示地域(region)<br>100表示资产分组(resourcegroup)</p>
     * @param string $TargetId <p>目的规则内容</p>
     * @param integer $TargetType <p>目的规则类型<br>取值范围 0/1/2/3/4/5/6/7/8/9/100<br>0表示ip(net),<br>1表示VPC实例(instance)<br>2表示子网实例(instance)<br>3表示CVM实例(instance)<br>4表示CLB实例(instance)<br>5表示ENI实例(instance)<br>6表示数据库实例(instance)<br>7表示模板(template)<br>8表示标签(tag)<br>9表示地域(region)<br>100表示资产分组(resourcegroup)</p>
     * @param string $Protocol <p>协议名称<br>取值范围:TCP/ANY/ICMP/UDP<br>ANY:表示所有</p>
     * @param string $Port <p>端口</p>
     * @param integer $Strategy <p>策略</p>
     * @param string $Detail <p>描述</p>
     * @param string $Region <p>地域</p>
     * @param string $ServiceTemplateId <p>服务模板id</p>
     * @param string $SouInstanceName <p>源资产名称</p>
     * @param string $SouPublicIp <p>源资产公网ip</p>
     * @param string $SouPrivateIp <p>源资产内网ip</p>
     * @param string $SouCidr <p>源资产网段信息</p>
     * @param string $SouParameterName <p>源模板名称</p>
     * @param string $InstanceName <p>目的资产名称</p>
     * @param string $PublicIp <p>目的资产公网ip</p>
     * @param string $PrivateIp <p>目的资产内网ip</p>
     * @param string $Cidr <p>目的资产网段信息</p>
     * @param string $ParameterName <p>目的模板名称</p>
     * @param string $ProtocolPortName <p>端口模板名称</p>
     * @param integer $Id <p>规则id  等同RuleUuid</p>
     * @param SgDnsParseCount $DnsParseCount <p>域名解析的IP统计</p>
     * @param string $Scope <p>规则生效范围</p>
     * @param integer $IsNew <p>规则最近一次是否有改动 取值范围：0/1 0:否 1:是</p>
     * @param MemberInfo $BelongMember <p>规则归属的成员账号（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填)</p>
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
        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }

        if (array_key_exists("SouInstanceName",$param) and $param["SouInstanceName"] !== null) {
            $this->SouInstanceName = $param["SouInstanceName"];
        }

        if (array_key_exists("SouPublicIp",$param) and $param["SouPublicIp"] !== null) {
            $this->SouPublicIp = $param["SouPublicIp"];
        }

        if (array_key_exists("SouPrivateIp",$param) and $param["SouPrivateIp"] !== null) {
            $this->SouPrivateIp = $param["SouPrivateIp"];
        }

        if (array_key_exists("SouCidr",$param) and $param["SouCidr"] !== null) {
            $this->SouCidr = $param["SouCidr"];
        }

        if (array_key_exists("SouParameterName",$param) and $param["SouParameterName"] !== null) {
            $this->SouParameterName = $param["SouParameterName"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }

        if (array_key_exists("ParameterName",$param) and $param["ParameterName"] !== null) {
            $this->ParameterName = $param["ParameterName"];
        }

        if (array_key_exists("ProtocolPortName",$param) and $param["ProtocolPortName"] !== null) {
            $this->ProtocolPortName = $param["ProtocolPortName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DnsParseCount",$param) and $param["DnsParseCount"] !== null) {
            $this->DnsParseCount = new SgDnsParseCount();
            $this->DnsParseCount->deserialize($param["DnsParseCount"]);
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("BelongMember",$param) and $param["BelongMember"] !== null) {
            $this->BelongMember = new MemberInfo();
            $this->BelongMember->deserialize($param["BelongMember"]);
        }
    }
}
