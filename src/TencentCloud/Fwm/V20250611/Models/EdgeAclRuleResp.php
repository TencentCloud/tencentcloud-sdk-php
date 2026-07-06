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
 * 互联网边界规则响应结构
 *
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method integer getSequence() 获取规则执行顺序
 * @method void setSequence(integer $Sequence) 设置规则执行顺序
 * @method integer getDirection() 获取规则方向：0-出站，1-入站
 * @method void setDirection(integer $Direction) 设置规则方向：0-出站，1-入站
 * @method string getSourceContent() 获取源地址内容
 * @method void setSourceContent(string $SourceContent) 设置源地址内容
 * @method string getSourceType() 获取源地址类型
 * @method void setSourceType(string $SourceType) 设置源地址类型
 * @method string getSourceName() 获取源地址名称（当类型为模板/实例/标签时返回对应名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceName(string $SourceName) 设置源地址名称（当类型为模板/实例/标签时返回对应名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetContent() 获取目标地址内容
 * @method void setTargetContent(string $TargetContent) 设置目标地址内容
 * @method string getTargetType() 获取目标地址类型
 * @method void setTargetType(string $TargetType) 设置目标地址类型
 * @method string getTargetName() 获取目标地址名称（当类型为模板/实例/标签时返回对应名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetName(string $TargetName) 设置目标地址名称（当类型为模板/实例/标签时返回对应名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取目标端口
 * @method void setPort(string $Port) 设置目标端口
 * @method string getProtocol() 获取协议类型
 * @method void setProtocol(string $Protocol) 设置协议类型
 * @method string getRuleAction() 获取规则动作：accept-放行，drop-阻断，log-观察
 * @method void setRuleAction(string $RuleAction) 设置规则动作：accept-放行，drop-阻断，log-观察
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method string getScope() 获取规则生效范围
 * @method void setScope(string $Scope) 设置规则生效范围
 * @method string getCountryName() 获取地域名称1（正则匹配时使用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountryName(string $CountryName) 设置地域名称1（正则匹配时使用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCityName() 获取地域名称2（正则匹配时使用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityName(string $CityName) 设置地域名称2（正则匹配时使用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamTemplateId() 获取参数模板ID（当类型为模板时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTemplateId(string $ParamTemplateId) 设置参数模板ID（当类型为模板时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamTemplateName() 获取参数模板名称（当类型为模板时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTemplateName(string $ParamTemplateName) 设置参数模板名称（当类型为模板时返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInvalid() 获取规则是否失效：0-有效，1-失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvalid(integer $Invalid) 设置规则是否失效：0-有效，1-失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method MemberInfo getBelongMember() 获取规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBelongMember(MemberInfo $BelongMember) 设置规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCountryCode() 获取国家Id
 * @method void setCountryCode(integer $CountryCode) 设置国家Id
 * @method integer getCityCode() 获取城市Id
 * @method void setCityCode(integer $CityCode) 设置城市Id
 * @method integer getIsRegion() 获取0为正常规则,1为地域规则
 * @method void setIsRegion(integer $IsRegion) 设置0为正常规则,1为地域规则
 * @method string getCloudCode() 获取云厂商code
 * @method void setCloudCode(string $CloudCode) 设置云厂商code
 * @method integer getIsCloud() 获取0为正常规则,1为云厂商规则
 * @method void setIsCloud(integer $IsCloud) 设置0为正常规则,1为云厂商规则
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getCountryKey() 获取地区简称
 * @method void setCountryKey(string $CountryKey) 设置地区简称
 * @method string getCityKey() 获取省份、城市简称
 * @method void setCityKey(string $CityKey) 设置省份、城市简称
 * @method string getCreateTime() 获取规则创建时间
 * @method void setCreateTime(string $CreateTime) 设置规则创建时间
 * @method string getUpdateTime() 获取规则最近更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置规则最近更新时间
 * @method integer getDnsParseCnt() 获取域名数
 * @method void setDnsParseCnt(integer $DnsParseCnt) 设置域名数
 */
class EdgeAclRuleResp extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var integer 规则执行顺序
     */
    public $Sequence;

    /**
     * @var integer 规则方向：0-出站，1-入站
     */
    public $Direction;

    /**
     * @var string 源地址内容
     */
    public $SourceContent;

    /**
     * @var string 源地址类型
     */
    public $SourceType;

    /**
     * @var string 源地址名称（当类型为模板/实例/标签时返回对应名称）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceName;

    /**
     * @var string 目标地址内容
     */
    public $TargetContent;

    /**
     * @var string 目标地址类型
     */
    public $TargetType;

    /**
     * @var string 目标地址名称（当类型为模板/实例/标签时返回对应名称）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetName;

    /**
     * @var string 目标端口
     */
    public $Port;

    /**
     * @var string 协议类型
     */
    public $Protocol;

    /**
     * @var string 规则动作：accept-放行，drop-阻断，log-观察
     */
    public $RuleAction;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var string 规则生效范围
     */
    public $Scope;

    /**
     * @var string 地域名称1（正则匹配时使用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountryName;

    /**
     * @var string 地域名称2（正则匹配时使用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityName;

    /**
     * @var string 参数模板ID（当类型为模板时返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTemplateId;

    /**
     * @var string 参数模板名称（当类型为模板时返回）
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
     * @var integer 国家Id
     */
    public $CountryCode;

    /**
     * @var integer 城市Id
     */
    public $CityCode;

    /**
     * @var integer 0为正常规则,1为地域规则
     */
    public $IsRegion;

    /**
     * @var string 云厂商code
     */
    public $CloudCode;

    /**
     * @var integer 0为正常规则,1为云厂商规则
     */
    public $IsCloud;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 地区简称
     */
    public $CountryKey;

    /**
     * @var string 省份、城市简称
     */
    public $CityKey;

    /**
     * @var string 规则创建时间
     */
    public $CreateTime;

    /**
     * @var string 规则最近更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 域名数
     */
    public $DnsParseCnt;

    /**
     * @param string $RuleId 规则ID
     * @param integer $Sequence 规则执行顺序
     * @param integer $Direction 规则方向：0-出站，1-入站
     * @param string $SourceContent 源地址内容
     * @param string $SourceType 源地址类型
     * @param string $SourceName 源地址名称（当类型为模板/实例/标签时返回对应名称）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetContent 目标地址内容
     * @param string $TargetType 目标地址类型
     * @param string $TargetName 目标地址名称（当类型为模板/实例/标签时返回对应名称）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 目标端口
     * @param string $Protocol 协议类型
     * @param string $RuleAction 规则动作：accept-放行，drop-阻断，log-观察
     * @param string $Description 规则描述
     * @param string $Scope 规则生效范围
     * @param string $CountryName 地域名称1（正则匹配时使用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CityName 地域名称2（正则匹配时使用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamTemplateId 参数模板ID（当类型为模板时返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamTemplateName 参数模板名称（当类型为模板时返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Invalid 规则是否失效：0-有效，1-失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param MemberInfo $BelongMember 规则归属的成员账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CountryCode 国家Id
     * @param integer $CityCode 城市Id
     * @param integer $IsRegion 0为正常规则,1为地域规则
     * @param string $CloudCode 云厂商code
     * @param integer $IsCloud 0为正常规则,1为云厂商规则
     * @param string $InstanceName 实例名称
     * @param string $CountryKey 地区简称
     * @param string $CityKey 省份、城市简称
     * @param string $CreateTime 规则创建时间
     * @param string $UpdateTime 规则最近更新时间
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

        if (array_key_exists("CountryName",$param) and $param["CountryName"] !== null) {
            $this->CountryName = $param["CountryName"];
        }

        if (array_key_exists("CityName",$param) and $param["CityName"] !== null) {
            $this->CityName = $param["CityName"];
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

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("CityCode",$param) and $param["CityCode"] !== null) {
            $this->CityCode = $param["CityCode"];
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("CountryKey",$param) and $param["CountryKey"] !== null) {
            $this->CountryKey = $param["CountryKey"];
        }

        if (array_key_exists("CityKey",$param) and $param["CityKey"] !== null) {
            $this->CityKey = $param["CityKey"];
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
