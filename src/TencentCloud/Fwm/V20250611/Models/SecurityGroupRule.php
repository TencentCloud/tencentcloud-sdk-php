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
 * 规则数据结构描述
 *
 * @method string getIpVersion() 获取ip类型
 * @method void setIpVersion(string $IpVersion) 设置ip类型
 * @method string getSourceContent() 获取源地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceContent(string $SourceContent) 设置源地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceType() 获取源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceType(string $SourceType) 设置源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestContent() 获取目的地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestContent(string $DestContent) 设置目的地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestType() 获取目的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestType(string $DestType) 设置目的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceTemplateId() 获取模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceTemplateId(string $ServiceTemplateId) 设置模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleAction() 获取动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleAction(string $RuleAction) 设置动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrderIndex() 获取优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderIndex(integer $OrderIndex) 设置优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleId() 获取rule id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置rule id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScope() 获取生效范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScope(string $Scope) 设置生效范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProtocolPortType() 获取端口类型
 * @method void setProtocolPortType(integer $ProtocolPortType) 设置端口类型
 * @method string getBelongMemberId() 获取规则归属的成员账号ID（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填）
 * @method void setBelongMemberId(string $BelongMemberId) 设置规则归属的成员账号ID（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填）
 */
class SecurityGroupRule extends AbstractModel
{
    /**
     * @var string ip类型
     */
    public $IpVersion;

    /**
     * @var string 源地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceContent;

    /**
     * @var string 源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceType;

    /**
     * @var string 目的地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestContent;

    /**
     * @var string 目的类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestType;

    /**
     * @var string 协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 模板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceTemplateId;

    /**
     * @var string 动作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleAction;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 优先级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderIndex;

    /**
     * @var string rule id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 生效范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scope;

    /**
     * @var integer 端口类型
     */
    public $ProtocolPortType;

    /**
     * @var string 规则归属的成员账号ID（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填）
     */
    public $BelongMemberId;

    /**
     * @param string $IpVersion ip类型
     * @param string $SourceContent 源地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceType 源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DestContent 目的地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DestType 目的类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceTemplateId 模板
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleAction 动作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OrderIndex 优先级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleId rule id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scope 生效范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProtocolPortType 端口类型
     * @param string $BelongMemberId 规则归属的成员账号ID（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填）
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
        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ProtocolPortType",$param) and $param["ProtocolPortType"] !== null) {
            $this->ProtocolPortType = $param["ProtocolPortType"];
        }

        if (array_key_exists("BelongMemberId",$param) and $param["BelongMemberId"] !== null) {
            $this->BelongMemberId = $param["BelongMemberId"];
        }
    }
}
