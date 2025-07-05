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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业安全组规则列表信息
 *
 * @method integer getOrderIndex() 获取排序
 * @method void setOrderIndex(integer $OrderIndex) 设置排序
 * @method integer getRuleUuid() 获取主键id
 * @method void setRuleUuid(integer $RuleUuid) 设置主键id
 * @method string getUuid() 获取规则uuid
 * @method void setUuid(string $Uuid) 设置规则uuid
 * @method string getSourceId() 获取源规则内容
 * @method void setSourceId(string $SourceId) 设置源规则内容
 * @method integer getSourceType() 获取源规则类型 
取值范围 0/1/2/3/4/5/6/7/8/9/100
0表示ip(net),
1表示VPC实例(instance)
2表示子网实例(instance)
3表示CVM实例(instance)
4表示CLB实例(instance)
5表示ENI实例(instance)
6表示数据库实例(instance)
7表示模板(template)
8表示标签(tag)
9表示地域(region)
100表示资产分组(resourcegroup)
 * @method void setSourceType(integer $SourceType) 设置源规则类型 
取值范围 0/1/2/3/4/5/6/7/8/9/100
0表示ip(net),
1表示VPC实例(instance)
2表示子网实例(instance)
3表示CVM实例(instance)
4表示CLB实例(instance)
5表示ENI实例(instance)
6表示数据库实例(instance)
7表示模板(template)
8表示标签(tag)
9表示地域(region)
100表示资产分组(resourcegroup)
 * @method string getTargetId() 获取目的规则内容
 * @method void setTargetId(string $TargetId) 设置目的规则内容
 * @method integer getTargetType() 获取目的规则类型 
取值范围 0/1/2/3/4/5/6/7/8/9/100
0表示ip(net),
1表示VPC实例(instance)
2表示子网实例(instance)
3表示CVM实例(instance)
4表示CLB实例(instance)
5表示ENI实例(instance)
6表示数据库实例(instance)
7表示模板(template)
8表示标签(tag)
9表示地域(region)
100表示资产分组(resourcegroup)
 * @method void setTargetType(integer $TargetType) 设置目的规则类型 
取值范围 0/1/2/3/4/5/6/7/8/9/100
0表示ip(net),
1表示VPC实例(instance)
2表示子网实例(instance)
3表示CVM实例(instance)
4表示CLB实例(instance)
5表示ENI实例(instance)
6表示数据库实例(instance)
7表示模板(template)
8表示标签(tag)
9表示地域(region)
100表示资产分组(resourcegroup)
 * @method string getProtocol() 获取协议名称
取值范围:TCP/ANY/ICMP/UDP
ANY:表示所有

 * @method void setProtocol(string $Protocol) 设置协议名称
取值范围:TCP/ANY/ICMP/UDP
ANY:表示所有

 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 * @method integer getStrategy() 获取规则策略
取值范围:1/2
1:阻断
2:放行
 * @method void setStrategy(integer $Strategy) 设置规则策略
取值范围:1/2
1:阻断
2:放行
 * @method integer getStatus() 获取规则启用状态 
取值范围： 0/1
0:未开启
1:开启
 * @method void setStatus(integer $Status) 设置规则启用状态 
取值范围： 0/1
0:未开启
1:开启
 * @method string getDetail() 获取描述
 * @method void setDetail(string $Detail) 设置描述
 * @method string getAclTags() 获取标签
 * @method void setAclTags(string $AclTags) 设置标签
 * @method integer getIsNew() 获取规则最新一次是否有改动
取值范围：0/1
0:否
1:是
 * @method void setIsNew(integer $IsNew) 设置规则最新一次是否有改动
取值范围：0/1
0:否
1:是
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getIsDelay() 获取是否延迟下发规则 
取值范围：0/1
0:立即下发 1:延迟下发
 * @method void setIsDelay(integer $IsDelay) 设置是否延迟下发规则 
取值范围：0/1
0:立即下发 1:延迟下发
 * @method string getServiceTemplateId() 获取服务模板id
 * @method void setServiceTemplateId(string $ServiceTemplateId) 设置服务模板id
 * @method string getSouInstanceName() 获取源资产名称
 * @method void setSouInstanceName(string $SouInstanceName) 设置源资产名称
 * @method string getSouPublicIp() 获取源资产公网ip
 * @method void setSouPublicIp(string $SouPublicIp) 设置源资产公网ip
 * @method string getSouPrivateIp() 获取源资产内网ip
 * @method void setSouPrivateIp(string $SouPrivateIp) 设置源资产内网ip
 * @method string getSouCidr() 获取源资产网段信息
 * @method void setSouCidr(string $SouCidr) 设置源资产网段信息
 * @method string getSouParameterName() 获取源模板名称
 * @method void setSouParameterName(string $SouParameterName) 设置源模板名称
 * @method string getInstanceName() 获取目的资产名称
 * @method void setInstanceName(string $InstanceName) 设置目的资产名称
 * @method string getPublicIp() 获取目的资产公网ip
 * @method void setPublicIp(string $PublicIp) 设置目的资产公网ip
 * @method string getPrivateIp() 获取目的资产内网ip
 * @method void setPrivateIp(string $PrivateIp) 设置目的资产内网ip
 * @method string getCidr() 获取目的资产网段信息
 * @method void setCidr(string $Cidr) 设置目的资产网段信息
 * @method string getParameterName() 获取目的模板名称
 * @method void setParameterName(string $ParameterName) 设置目的模板名称
 * @method string getProtocolPortName() 获取端口模板名称
 * @method void setProtocolPortName(string $ProtocolPortName) 设置端口模板名称
 * @method array getBetaList() 获取自动化任务信息
 * @method void setBetaList(array $BetaList) 设置自动化任务信息
 * @method integer getId() 获取规则id  等同RuleUuid
 * @method void setId(integer $Id) 设置规则id  等同RuleUuid
 * @method SgDnsParseCount getDnsParseCount() 获取域名解析的IP统计
 * @method void setDnsParseCount(SgDnsParseCount $DnsParseCount) 设置域名解析的IP统计
 */
class EnterpriseSecurityGroupRuleRuleInfo extends AbstractModel
{
    /**
     * @var integer 排序
     */
    public $OrderIndex;

    /**
     * @var integer 主键id
     */
    public $RuleUuid;

    /**
     * @var string 规则uuid
     */
    public $Uuid;

    /**
     * @var string 源规则内容
     */
    public $SourceId;

    /**
     * @var integer 源规则类型 
取值范围 0/1/2/3/4/5/6/7/8/9/100
0表示ip(net),
1表示VPC实例(instance)
2表示子网实例(instance)
3表示CVM实例(instance)
4表示CLB实例(instance)
5表示ENI实例(instance)
6表示数据库实例(instance)
7表示模板(template)
8表示标签(tag)
9表示地域(region)
100表示资产分组(resourcegroup)
     */
    public $SourceType;

    /**
     * @var string 目的规则内容
     */
    public $TargetId;

    /**
     * @var integer 目的规则类型 
取值范围 0/1/2/3/4/5/6/7/8/9/100
0表示ip(net),
1表示VPC实例(instance)
2表示子网实例(instance)
3表示CVM实例(instance)
4表示CLB实例(instance)
5表示ENI实例(instance)
6表示数据库实例(instance)
7表示模板(template)
8表示标签(tag)
9表示地域(region)
100表示资产分组(resourcegroup)
     */
    public $TargetType;

    /**
     * @var string 协议名称
取值范围:TCP/ANY/ICMP/UDP
ANY:表示所有

     */
    public $Protocol;

    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @var integer 规则策略
取值范围:1/2
1:阻断
2:放行
     */
    public $Strategy;

    /**
     * @var integer 规则启用状态 
取值范围： 0/1
0:未开启
1:开启
     */
    public $Status;

    /**
     * @var string 描述
     */
    public $Detail;

    /**
     * @var string 标签
     */
    public $AclTags;

    /**
     * @var integer 规则最新一次是否有改动
取值范围：0/1
0:否
1:是
     */
    public $IsNew;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 是否延迟下发规则 
取值范围：0/1
0:立即下发 1:延迟下发
     */
    public $IsDelay;

    /**
     * @var string 服务模板id
     */
    public $ServiceTemplateId;

    /**
     * @var string 源资产名称
     */
    public $SouInstanceName;

    /**
     * @var string 源资产公网ip
     */
    public $SouPublicIp;

    /**
     * @var string 源资产内网ip
     */
    public $SouPrivateIp;

    /**
     * @var string 源资产网段信息
     */
    public $SouCidr;

    /**
     * @var string 源模板名称
     */
    public $SouParameterName;

    /**
     * @var string 目的资产名称
     */
    public $InstanceName;

    /**
     * @var string 目的资产公网ip
     */
    public $PublicIp;

    /**
     * @var string 目的资产内网ip
     */
    public $PrivateIp;

    /**
     * @var string 目的资产网段信息
     */
    public $Cidr;

    /**
     * @var string 目的模板名称
     */
    public $ParameterName;

    /**
     * @var string 端口模板名称
     */
    public $ProtocolPortName;

    /**
     * @var array 自动化任务信息
     */
    public $BetaList;

    /**
     * @var integer 规则id  等同RuleUuid
     */
    public $Id;

    /**
     * @var SgDnsParseCount 域名解析的IP统计
     */
    public $DnsParseCount;

    /**
     * @param integer $OrderIndex 排序
     * @param integer $RuleUuid 主键id
     * @param string $Uuid 规则uuid
     * @param string $SourceId 源规则内容
     * @param integer $SourceType 源规则类型 
取值范围 0/1/2/3/4/5/6/7/8/9/100
0表示ip(net),
1表示VPC实例(instance)
2表示子网实例(instance)
3表示CVM实例(instance)
4表示CLB实例(instance)
5表示ENI实例(instance)
6表示数据库实例(instance)
7表示模板(template)
8表示标签(tag)
9表示地域(region)
100表示资产分组(resourcegroup)
     * @param string $TargetId 目的规则内容
     * @param integer $TargetType 目的规则类型 
取值范围 0/1/2/3/4/5/6/7/8/9/100
0表示ip(net),
1表示VPC实例(instance)
2表示子网实例(instance)
3表示CVM实例(instance)
4表示CLB实例(instance)
5表示ENI实例(instance)
6表示数据库实例(instance)
7表示模板(template)
8表示标签(tag)
9表示地域(region)
100表示资产分组(resourcegroup)
     * @param string $Protocol 协议名称
取值范围:TCP/ANY/ICMP/UDP
ANY:表示所有

     * @param string $Port 端口
     * @param integer $Strategy 规则策略
取值范围:1/2
1:阻断
2:放行
     * @param integer $Status 规则启用状态 
取值范围： 0/1
0:未开启
1:开启
     * @param string $Detail 描述
     * @param string $AclTags 标签
     * @param integer $IsNew 规则最新一次是否有改动
取值范围：0/1
0:否
1:是
     * @param string $Region 地域
     * @param integer $IsDelay 是否延迟下发规则 
取值范围：0/1
0:立即下发 1:延迟下发
     * @param string $ServiceTemplateId 服务模板id
     * @param string $SouInstanceName 源资产名称
     * @param string $SouPublicIp 源资产公网ip
     * @param string $SouPrivateIp 源资产内网ip
     * @param string $SouCidr 源资产网段信息
     * @param string $SouParameterName 源模板名称
     * @param string $InstanceName 目的资产名称
     * @param string $PublicIp 目的资产公网ip
     * @param string $PrivateIp 目的资产内网ip
     * @param string $Cidr 目的资产网段信息
     * @param string $ParameterName 目的模板名称
     * @param string $ProtocolPortName 端口模板名称
     * @param array $BetaList 自动化任务信息
     * @param integer $Id 规则id  等同RuleUuid
     * @param SgDnsParseCount $DnsParseCount 域名解析的IP统计
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

        if (array_key_exists("RuleUuid",$param) and $param["RuleUuid"] !== null) {
            $this->RuleUuid = $param["RuleUuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("AclTags",$param) and $param["AclTags"] !== null) {
            $this->AclTags = $param["AclTags"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IsDelay",$param) and $param["IsDelay"] !== null) {
            $this->IsDelay = $param["IsDelay"];
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

        if (array_key_exists("BetaList",$param) and $param["BetaList"] !== null) {
            $this->BetaList = [];
            foreach ($param["BetaList"] as $key => $value){
                $obj = new EnterpriseSecurityGroupRuleBetaInfo();
                $obj->deserialize($value);
                array_push($this->BetaList, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DnsParseCount",$param) and $param["DnsParseCount"] !== null) {
            $this->DnsParseCount = new SgDnsParseCount();
            $this->DnsParseCount->deserialize($param["DnsParseCount"]);
        }
    }
}
