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
 * VPC边界规则响应结构
 *
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method integer getSequence() 获取优先级
 * @method void setSequence(integer $Sequence) 设置优先级
 * @method string getIpVersion() 获取IP版本：ipv4或ipv6
 * @method void setIpVersion(string $IpVersion) 设置IP版本：ipv4或ipv6
 * @method string getSourceContent() 获取源地址内容
 * @method void setSourceContent(string $SourceContent) 设置源地址内容
 * @method string getSourceType() 获取源类型
 * @method void setSourceType(string $SourceType) 设置源类型
 * @method string getSourceName() 获取源资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceName(string $SourceName) 设置源资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestContent() 获取目的地址内容
 * @method void setDestContent(string $DestContent) 设置目的地址内容
 * @method string getDestType() 获取目的类型
 * @method void setDestType(string $DestType) 设置目的类型
 * @method string getDestName() 获取目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestName(string $DestName) 设置目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamTemplateId() 获取端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTemplateId(string $ParamTemplateId) 设置端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamTemplateName() 获取端口模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTemplateName(string $ParamTemplateName) 设置端口模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleAction() 获取动作：accept/drop/log
 * @method void setRuleAction(string $RuleAction) 设置动作：accept/drop/log
 * @method string getDescription() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEdgeId() 获取边界防火墙ID
 * @method void setEdgeId(string $EdgeId) 设置边界防火墙ID
 * @method string getFwGroupId() 获取防火墙实例ID
 * @method void setFwGroupId(string $FwGroupId) 设置防火墙实例ID
 * @method integer getInvalid() 获取规则是否失效：0-有效，1-失效
 * @method void setInvalid(integer $Invalid) 设置规则是否失效：0-有效，1-失效
 * @method MemberInfo getBelongMember() 获取规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBelongMember(MemberInfo $BelongMember) 设置规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取规则创建时间
 * @method void setCreateTime(string $CreateTime) 设置规则创建时间
 * @method string getUpdateTime() 获取规则修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置规则修改时间
 * @method integer getDnsParseCnt() 获取域名数
 * @method void setDnsParseCnt(integer $DnsParseCnt) 设置域名数
 * @method string getFwGroupName() 获取防火墙组名称
 * @method void setFwGroupName(string $FwGroupName) 设置防火墙组名称
 */
class VpcAclRuleResp extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var integer 优先级
     */
    public $Sequence;

    /**
     * @var string IP版本：ipv4或ipv6
     */
    public $IpVersion;

    /**
     * @var string 源地址内容
     */
    public $SourceContent;

    /**
     * @var string 源类型
     */
    public $SourceType;

    /**
     * @var string 源资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceName;

    /**
     * @var string 目的地址内容
     */
    public $DestContent;

    /**
     * @var string 目的类型
     */
    public $DestType;

    /**
     * @var string 目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestName;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTemplateId;

    /**
     * @var string 端口模板名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTemplateName;

    /**
     * @var string 动作：accept/drop/log
     */
    public $RuleAction;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 边界防火墙ID
     */
    public $EdgeId;

    /**
     * @var string 防火墙实例ID
     */
    public $FwGroupId;

    /**
     * @var integer 规则是否失效：0-有效，1-失效
     */
    public $Invalid;

    /**
     * @var MemberInfo 规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BelongMember;

    /**
     * @var string 规则创建时间
     */
    public $CreateTime;

    /**
     * @var string 规则修改时间
     */
    public $UpdateTime;

    /**
     * @var integer 域名数
     */
    public $DnsParseCnt;

    /**
     * @var string 防火墙组名称
     */
    public $FwGroupName;

    /**
     * @param string $RuleId 规则ID
     * @param integer $Sequence 优先级
     * @param string $IpVersion IP版本：ipv4或ipv6
     * @param string $SourceContent 源地址内容
     * @param string $SourceType 源类型
     * @param string $SourceName 源资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DestContent 目的地址内容
     * @param string $DestType 目的类型
     * @param string $DestName 目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议
     * @param string $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamTemplateId 端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamTemplateName 端口模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleAction 动作：accept/drop/log
     * @param string $Description 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EdgeId 边界防火墙ID
     * @param string $FwGroupId 防火墙实例ID
     * @param integer $Invalid 规则是否失效：0-有效，1-失效
     * @param MemberInfo $BelongMember 规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 规则创建时间
     * @param string $UpdateTime 规则修改时间
     * @param integer $DnsParseCnt 域名数
     * @param string $FwGroupName 防火墙组名称
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("DestName",$param) and $param["DestName"] !== null) {
            $this->DestName = $param["DestName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("ParamTemplateName",$param) and $param["ParamTemplateName"] !== null) {
            $this->ParamTemplateName = $param["ParamTemplateName"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("Invalid",$param) and $param["Invalid"] !== null) {
            $this->Invalid = $param["Invalid"];
        }

        if (array_key_exists("BelongMember",$param) and $param["BelongMember"] !== null) {
            $this->BelongMember = new MemberInfo();
            $this->BelongMember->deserialize($param["BelongMember"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DnsParseCnt",$param) and $param["DnsParseCnt"] !== null) {
            $this->DnsParseCnt = $param["DnsParseCnt"];
        }

        if (array_key_exists("FwGroupName",$param) and $param["FwGroupName"] !== null) {
            $this->FwGroupName = $param["FwGroupName"];
        }
    }
}
