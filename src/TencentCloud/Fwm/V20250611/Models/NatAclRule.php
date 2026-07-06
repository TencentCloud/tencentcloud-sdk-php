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
 * NAT边界规则
 *
 * @method string getSourceContent() 获取源地址内容
 * @method void setSourceContent(string $SourceContent) 设置源地址内容
 * @method string getSourceType() 获取源类型：ip/url/template/instance/tag
 * @method void setSourceType(string $SourceType) 设置源类型：ip/url/template/instance/tag
 * @method string getTargetContent() 获取目的地址内容
 * @method void setTargetContent(string $TargetContent) 设置目的地址内容
 * @method string getTargetType() 获取目的类型：ip/url/template/instance/tag
 * @method void setTargetType(string $TargetType) 设置目的类型：ip/url/template/instance/tag
 * @method string getProtocol() 获取协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等
 * @method void setProtocol(string $Protocol) 设置协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等
 * @method string getRuleAction() 获取动作：accept/drop/log
 * @method void setRuleAction(string $RuleAction) 设置动作：accept/drop/log
 * @method integer getOrderIndex() 获取优先级（从1开始）
 * @method void setOrderIndex(integer $OrderIndex) 设置优先级（从1开始）
 * @method string getScope() 获取规则生效范围：ALL-全局生效，ap-xxx-地域生效，cfwnat-xxx-NAT防火墙实例生效
 * @method void setScope(string $Scope) 设置规则生效范围：ALL-全局生效，ap-xxx-地域生效，cfwnat-xxx-NAT防火墙实例生效
 * @method integer getDirection() 获取规则方向：1-入站规则，0-出站规则
 * @method void setDirection(integer $Direction) 设置规则方向：1-入站规则，0-出站规则
 * @method string getRuleId() 获取规则ID（修改时必填）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置规则ID（修改时必填）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取端口（ICMP协议时为空）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口（ICMP协议时为空）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamTemplateId() 获取端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTemplateId(string $ParamTemplateId) 设置端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBelongMemberId() 获取规则归属的成员账号ID（当Scope为cfwnat-xxx或SourceType/DestType为instance/tag时必填）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBelongMemberId(string $BelongMemberId) 设置规则归属的成员账号ID（当Scope为cfwnat-xxx或SourceType/DestType为instance/tag时必填）
注意：此字段可能返回 null，表示取不到有效值。
 */
class NatAclRule extends AbstractModel
{
    /**
     * @var string 源地址内容
     */
    public $SourceContent;

    /**
     * @var string 源类型：ip/url/template/instance/tag
     */
    public $SourceType;

    /**
     * @var string 目的地址内容
     */
    public $TargetContent;

    /**
     * @var string 目的类型：ip/url/template/instance/tag
     */
    public $TargetType;

    /**
     * @var string 协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等
     */
    public $Protocol;

    /**
     * @var string 动作：accept/drop/log
     */
    public $RuleAction;

    /**
     * @var integer 优先级（从1开始）
     */
    public $OrderIndex;

    /**
     * @var string 规则生效范围：ALL-全局生效，ap-xxx-地域生效，cfwnat-xxx-NAT防火墙实例生效
     */
    public $Scope;

    /**
     * @var integer 规则方向：1-入站规则，0-出站规则
     */
    public $Direction;

    /**
     * @var string 规则ID（修改时必填）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 端口（ICMP协议时为空）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTemplateId;

    /**
     * @var string 规则归属的成员账号ID（当Scope为cfwnat-xxx或SourceType/DestType为instance/tag时必填）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BelongMemberId;

    /**
     * @param string $SourceContent 源地址内容
     * @param string $SourceType 源类型：ip/url/template/instance/tag
     * @param string $TargetContent 目的地址内容
     * @param string $TargetType 目的类型：ip/url/template/instance/tag
     * @param string $Protocol 协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等
     * @param string $RuleAction 动作：accept/drop/log
     * @param integer $OrderIndex 优先级（从1开始）
     * @param string $Scope 规则生效范围：ALL-全局生效，ap-xxx-地域生效，cfwnat-xxx-NAT防火墙实例生效
     * @param integer $Direction 规则方向：1-入站规则，0-出站规则
     * @param string $RuleId 规则ID（修改时必填）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 端口（ICMP协议时为空）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamTemplateId 端口模板ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BelongMemberId 规则归属的成员账号ID（当Scope为cfwnat-xxx或SourceType/DestType为instance/tag时必填）
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
        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("TargetContent",$param) and $param["TargetContent"] !== null) {
            $this->TargetContent = $param["TargetContent"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("BelongMemberId",$param) and $param["BelongMemberId"] !== null) {
            $this->BelongMemberId = $param["BelongMemberId"];
        }
    }
}
