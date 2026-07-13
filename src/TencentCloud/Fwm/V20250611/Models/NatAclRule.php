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
 * @method string getSourceContent() 获取<p>源地址内容</p>
 * @method void setSourceContent(string $SourceContent) 设置<p>源地址内容</p>
 * @method string getSourceType() 获取<p>源类型：ip/url/template/instance/tag</p>
 * @method void setSourceType(string $SourceType) 设置<p>源类型：ip/url/template/instance/tag</p>
 * @method string getTargetContent() 获取<p>目的地址内容</p>
 * @method void setTargetContent(string $TargetContent) 设置<p>目的地址内容</p>
 * @method string getTargetType() 获取<p>目的类型：ip/url/template/instance/tag</p>
 * @method void setTargetType(string $TargetType) 设置<p>目的类型：ip/url/template/instance/tag</p>
 * @method string getProtocol() 获取<p>协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等</p>
 * @method string getRuleAction() 获取<p>动作：accept/drop/log</p>
 * @method void setRuleAction(string $RuleAction) 设置<p>动作：accept/drop/log</p>
 * @method integer getOrderIndex() 获取<p>优先级（从1开始）</p>
 * @method void setOrderIndex(integer $OrderIndex) 设置<p>优先级（从1开始）</p>
 * @method string getScope() 获取<p>规则生效范围：ALL-全局生效，ap-xxx-地域生效，cfwnat-xxx-NAT防火墙实例生效</p>
 * @method void setScope(string $Scope) 设置<p>规则生效范围：ALL-全局生效，ap-xxx-地域生效，cfwnat-xxx-NAT防火墙实例生效</p>
 * @method integer getDirection() 获取<p>规则方向：1-入站规则，0-出站规则</p>
 * @method void setDirection(integer $Direction) 设置<p>规则方向：1-入站规则，0-出站规则</p>
 * @method string getRuleId() 获取<p>规则ID（修改时必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置<p>规则ID（修改时必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取<p>端口（ICMP协议时为空）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置<p>端口（ICMP协议时为空）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>规则描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>规则描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamTemplateId() 获取<p>端口模板ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTemplateId(string $ParamTemplateId) 设置<p>端口模板ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBelongMemberId() 获取<p>规则归属的成员账号ID(当Scope为cfwnat-xxx或SourceType/DestType为instance/tag时必填)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBelongMemberId(string $BelongMemberId) 设置<p>规则归属的成员账号ID(当Scope为cfwnat-xxx或SourceType/DestType为instance/tag时必填)</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class NatAclRule extends AbstractModel
{
    /**
     * @var string <p>源地址内容</p>
     */
    public $SourceContent;

    /**
     * @var string <p>源类型：ip/url/template/instance/tag</p>
     */
    public $SourceType;

    /**
     * @var string <p>目的地址内容</p>
     */
    public $TargetContent;

    /**
     * @var string <p>目的类型：ip/url/template/instance/tag</p>
     */
    public $TargetType;

    /**
     * @var string <p>协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等</p>
     */
    public $Protocol;

    /**
     * @var string <p>动作：accept/drop/log</p>
     */
    public $RuleAction;

    /**
     * @var integer <p>优先级（从1开始）</p>
     */
    public $OrderIndex;

    /**
     * @var string <p>规则生效范围：ALL-全局生效，ap-xxx-地域生效，cfwnat-xxx-NAT防火墙实例生效</p>
     */
    public $Scope;

    /**
     * @var integer <p>规则方向：1-入站规则，0-出站规则</p>
     */
    public $Direction;

    /**
     * @var string <p>规则ID（修改时必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string <p>端口（ICMP协议时为空）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string <p>规则描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>端口模板ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTemplateId;

    /**
     * @var string <p>规则归属的成员账号ID(当Scope为cfwnat-xxx或SourceType/DestType为instance/tag时必填)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BelongMemberId;

    /**
     * @param string $SourceContent <p>源地址内容</p>
     * @param string $SourceType <p>源类型：ip/url/template/instance/tag</p>
     * @param string $TargetContent <p>目的地址内容</p>
     * @param string $TargetType <p>目的类型：ip/url/template/instance/tag</p>
     * @param string $Protocol <p>协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等</p>
     * @param string $RuleAction <p>动作：accept/drop/log</p>
     * @param integer $OrderIndex <p>优先级（从1开始）</p>
     * @param string $Scope <p>规则生效范围：ALL-全局生效，ap-xxx-地域生效，cfwnat-xxx-NAT防火墙实例生效</p>
     * @param integer $Direction <p>规则方向：1-入站规则，0-出站规则</p>
     * @param string $RuleId <p>规则ID（修改时必填）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port <p>端口（ICMP协议时为空）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>规则描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamTemplateId <p>端口模板ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BelongMemberId <p>规则归属的成员账号ID(当Scope为cfwnat-xxx或SourceType/DestType为instance/tag时必填)</p>
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
