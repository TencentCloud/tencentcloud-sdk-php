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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业安全组规则列表信息
 *
 * @method integer getOrderIndex() 获取排序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderIndex(integer $OrderIndex) 设置排序
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleUuid() 获取主键id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleUuid(integer $RuleUuid) 设置主键id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUuid() 获取规则uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(string $Uuid) 设置规则uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceId() 获取源规则内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceId(string $SourceId) 设置源规则内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceType() 获取源规则类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceType(integer $SourceType) 设置源规则类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetId() 获取目的规则内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetId(string $TargetId) 设置目的规则内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetType() 获取目的规则类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetType(integer $TargetType) 设置目的规则类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategy() 获取策略，1阻断，2放行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategy(integer $Strategy) 设置策略，1阻断，2放行
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取启用状态 ，0未开启，1开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置启用状态 ，0未开启，1开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetail() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(string $Detail) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAclTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAclTags(string $AclTags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNew() 获取是否最新一次改动的规则,0否，1是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNew(integer $IsNew) 设置是否最新一次改动的规则,0否，1是
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDelay() 获取是否延迟下发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDelay(integer $IsDelay) 设置是否延迟下发
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceTemplateId() 获取服务模版id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceTemplateId(string $ServiceTemplateId) 设置服务模版id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSouInstanceName() 获取源资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSouInstanceName(string $SouInstanceName) 设置源资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSouPublicIp() 获取源资产公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSouPublicIp(string $SouPublicIp) 设置源资产公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSouPrivateIp() 获取源资产内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSouPrivateIp(string $SouPrivateIp) 设置源资产内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSouCidr() 获取源资产网段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSouCidr(string $SouCidr) 设置源资产网段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSouParameterName() 获取源模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSouParameterName(string $SouParameterName) 设置源模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIp() 获取目的资产公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置目的资产公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIp() 获取目的资产内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIp(string $PrivateIp) 设置目的资产内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCidr() 获取目的资产网段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCidr(string $Cidr) 设置目的资产网段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParameterName() 获取目的模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameterName(string $ParameterName) 设置目的模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocolPortName() 获取端口模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocolPortName(string $ProtocolPortName) 设置端口模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBetaList() 获取自动化任务任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBetaList(array $BetaList) 设置自动化任务任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置规则id
注意：此字段可能返回 null，表示取不到有效值。
 */
class EnterpriseSecurityGroupRuleRuleInfo extends AbstractModel
{
    /**
     * @var integer 排序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderIndex;

    /**
     * @var integer 主键id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleUuid;

    /**
     * @var string 规则uuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @var string 源规则内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceId;

    /**
     * @var integer 源规则类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceType;

    /**
     * @var string 目的规则内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetId;

    /**
     * @var integer 目的规则类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetType;

    /**
     * @var string 协议名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var integer 策略，1阻断，2放行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Strategy;

    /**
     * @var integer 启用状态 ，0未开启，1开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @var string 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AclTags;

    /**
     * @var integer 是否最新一次改动的规则,0否，1是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNew;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 是否延迟下发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDelay;

    /**
     * @var string 服务模版id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceTemplateId;

    /**
     * @var string 源资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SouInstanceName;

    /**
     * @var string 源资产公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SouPublicIp;

    /**
     * @var string 源资产内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SouPrivateIp;

    /**
     * @var string 源资产网段信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SouCidr;

    /**
     * @var string 源模版名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SouParameterName;

    /**
     * @var string 目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 目的资产公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var string 目的资产内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIp;

    /**
     * @var string 目的资产网段信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cidr;

    /**
     * @var string 目的模版名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParameterName;

    /**
     * @var string 端口模版名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtocolPortName;

    /**
     * @var array 自动化任务任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BetaList;

    /**
     * @var integer 规则id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param integer $OrderIndex 排序
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleUuid 主键id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uuid 规则uuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceId 源规则内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceType 源规则类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetId 目的规则内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetType 目的规则类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Strategy 策略，1阻断，2放行
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 启用状态 ，0未开启，1开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Detail 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AclTags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNew 是否最新一次改动的规则,0否，1是
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDelay 是否延迟下发
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceTemplateId 服务模版id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SouInstanceName 源资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SouPublicIp 源资产公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SouPrivateIp 源资产内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SouCidr 源资产网段信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SouParameterName 源模版名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIp 目的资产公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIp 目的资产内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cidr 目的资产网段信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParameterName 目的模版名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProtocolPortName 端口模版名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BetaList 自动化任务任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 规则id
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
    }
}
