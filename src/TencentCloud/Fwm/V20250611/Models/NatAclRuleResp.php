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
 * NAT边界规则响应结构
 *
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method integer getSequence() 获取优先级
 * @method void setSequence(integer $Sequence) 设置优先级
 * @method integer getDirection() 获取规则方向：0-出向，1-入向
 * @method void setDirection(integer $Direction) 设置规则方向：0-出向，1-入向
 * @method string getSourceContent() 获取源地址内容
 * @method void setSourceContent(string $SourceContent) 设置源地址内容
 * @method string getSourceType() 获取源类型
 * @method void setSourceType(string $SourceType) 设置源类型
 * @method string getSourceName() 获取源资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceName(string $SourceName) 设置源资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetContent() 获取目的地址内容
 * @method void setTargetContent(string $TargetContent) 设置目的地址内容
 * @method string getTargetType() 获取目的类型
 * @method void setTargetType(string $TargetType) 设置目的类型
 * @method string getTargetName() 获取目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetName(string $TargetName) 设置目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getRuleAction() 获取动作：accept/drop/log
 * @method void setRuleAction(string $RuleAction) 设置动作：accept/drop/log
 * @method string getDescription() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScope() 获取规则生效范围
 * @method void setScope(string $Scope) 设置规则生效范围
 * @method string getScopeDesc() 获取规则生效范围描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScopeDesc(string $ScopeDesc) 设置规则生效范围描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFwInsId() 获取防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwInsId(string $FwInsId) 设置防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountryName() 获取国家名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountryName(string $CountryName) 设置国家名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCityName() 获取城市名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityName(string $CityName) 设置城市名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCountryCode() 获取国家代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountryCode(integer $CountryCode) 设置国家代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCityCode() 获取城市代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityCode(integer $CityCode) 设置城市代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountryKey() 获取国家键值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountryKey(string $CountryKey) 设置国家键值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCityKey() 获取城市键值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityKey(string $CityKey) 设置城市键值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsRegion() 获取是否地域规则：0-否，1-是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRegion(integer $IsRegion) 设置是否地域规则：0-否，1-是
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloudCode() 获取云厂商代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudCode(string $CloudCode) 设置云厂商代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsCloud() 获取是否云厂商规则：0-否，1-是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCloud(integer $IsCloud) 设置是否云厂商规则：0-否，1-是
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamTemplateId() 获取端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTemplateId(string $ParamTemplateId) 设置端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamTemplateName() 获取端口模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTemplateName(string $ParamTemplateName) 设置端口模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInvalid() 获取规则是否失效：0-有效，1-失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvalid(integer $Invalid) 设置规则是否失效：0-有效，1-失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method MemberInfo getBelongMember() 获取规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBelongMember(MemberInfo $BelongMember) 设置规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDnsParseCnt() 获取域名数
 * @method void setDnsParseCnt(integer $DnsParseCnt) 设置域名数
 */
class NatAclRuleResp extends AbstractModel
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
     * @var integer 规则方向：0-出向，1-入向
     */
    public $Direction;

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
    public $TargetContent;

    /**
     * @var string 目的类型
     */
    public $TargetType;

    /**
     * @var string 目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetName;

    /**
     * @var string 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 协议
     */
    public $Protocol;

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
     * @var string 规则生效范围
     */
    public $Scope;

    /**
     * @var string 规则生效范围描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScopeDesc;

    /**
     * @var string 防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwInsId;

    /**
     * @var string 国家名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountryName;

    /**
     * @var string 城市名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityName;

    /**
     * @var integer 国家代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountryCode;

    /**
     * @var integer 城市代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityCode;

    /**
     * @var string 国家键值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountryKey;

    /**
     * @var string 城市键值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityKey;

    /**
     * @var integer 是否地域规则：0-否，1-是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRegion;

    /**
     * @var string 云厂商代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudCode;

    /**
     * @var integer 是否云厂商规则：0-否，1-是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCloud;

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
     * @var integer 规则是否失效：0-有效，1-失效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Invalid;

    /**
     * @var MemberInfo 规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BelongMember;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 域名数
     */
    public $DnsParseCnt;

    /**
     * @param string $RuleId 规则ID
     * @param integer $Sequence 优先级
     * @param integer $Direction 规则方向：0-出向，1-入向
     * @param string $SourceContent 源地址内容
     * @param string $SourceType 源类型
     * @param string $SourceName 源资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetContent 目的地址内容
     * @param string $TargetType 目的类型
     * @param string $TargetName 目的资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议
     * @param string $RuleAction 动作：accept/drop/log
     * @param string $Description 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scope 规则生效范围
     * @param string $ScopeDesc 规则生效范围描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FwInsId 防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CountryName 国家名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CityName 城市名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CountryCode 国家代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CityCode 城市代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CountryKey 国家键值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CityKey 城市键值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsRegion 是否地域规则：0-否，1-是
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloudCode 云厂商代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsCloud 是否云厂商规则：0-否，1-是
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamTemplateId 端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamTemplateName 端口模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Invalid 规则是否失效：0-有效，1-失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param MemberInfo $BelongMember 规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DnsParseCnt 域名数
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

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
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

        if (array_key_exists("TargetContent",$param) and $param["TargetContent"] !== null) {
            $this->TargetContent = $param["TargetContent"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ScopeDesc",$param) and $param["ScopeDesc"] !== null) {
            $this->ScopeDesc = $param["ScopeDesc"];
        }

        if (array_key_exists("FwInsId",$param) and $param["FwInsId"] !== null) {
            $this->FwInsId = $param["FwInsId"];
        }

        if (array_key_exists("CountryName",$param) and $param["CountryName"] !== null) {
            $this->CountryName = $param["CountryName"];
        }

        if (array_key_exists("CityName",$param) and $param["CityName"] !== null) {
            $this->CityName = $param["CityName"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("CityCode",$param) and $param["CityCode"] !== null) {
            $this->CityCode = $param["CityCode"];
        }

        if (array_key_exists("CountryKey",$param) and $param["CountryKey"] !== null) {
            $this->CountryKey = $param["CountryKey"];
        }

        if (array_key_exists("CityKey",$param) and $param["CityKey"] !== null) {
            $this->CityKey = $param["CityKey"];
        }

        if (array_key_exists("IsRegion",$param) and $param["IsRegion"] !== null) {
            $this->IsRegion = $param["IsRegion"];
        }

        if (array_key_exists("CloudCode",$param) and $param["CloudCode"] !== null) {
            $this->CloudCode = $param["CloudCode"];
        }

        if (array_key_exists("IsCloud",$param) and $param["IsCloud"] !== null) {
            $this->IsCloud = $param["IsCloud"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("ParamTemplateName",$param) and $param["ParamTemplateName"] !== null) {
            $this->ParamTemplateName = $param["ParamTemplateName"];
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
    }
}
