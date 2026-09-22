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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent 的 A2A 对外互通配置与注册态
 *
 * @method boolean getA2AEnabled() 获取Agent 级唯一 A2A 开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2AEnabled(boolean $A2AEnabled) 设置Agent 级唯一 A2A 开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getA2APublicRef() 获取对外 A2A handle（已注册时；仅 DescribeAgent / ModifyAgentA2AConfig 填充）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2APublicRef(string $A2APublicRef) 设置对外 A2A handle（已注册时；仅 DescribeAgent / ModifyAgentA2AConfig 填充）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getA2AEndpoint() 获取对外 A2A card 发现地址（已注册时）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2AEndpoint(string $A2AEndpoint) 设置对外 A2A card 发现地址（已注册时）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getA2AStatus() 获取注册状态：DRAFT / REGISTERED / DISABLED / NONE / UNKNOWN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2AStatus(string $A2AStatus) 设置注册状态：DRAFT / REGISTERED / DISABLED / NONE / UNKNOWN
注意：此字段可能返回 null，表示取不到有效值。
 */
class A2AConfig extends AbstractModel
{
    /**
     * @var boolean Agent 级唯一 A2A 开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2AEnabled;

    /**
     * @var string 对外 A2A handle（已注册时；仅 DescribeAgent / ModifyAgentA2AConfig 填充）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2APublicRef;

    /**
     * @var string 对外 A2A card 发现地址（已注册时）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2AEndpoint;

    /**
     * @var string 注册状态：DRAFT / REGISTERED / DISABLED / NONE / UNKNOWN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2AStatus;

    /**
     * @param boolean $A2AEnabled Agent 级唯一 A2A 开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $A2APublicRef 对外 A2A handle（已注册时；仅 DescribeAgent / ModifyAgentA2AConfig 填充）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $A2AEndpoint 对外 A2A card 发现地址（已注册时）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $A2AStatus 注册状态：DRAFT / REGISTERED / DISABLED / NONE / UNKNOWN
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
        if (array_key_exists("A2AEnabled",$param) and $param["A2AEnabled"] !== null) {
            $this->A2AEnabled = $param["A2AEnabled"];
        }

        if (array_key_exists("A2APublicRef",$param) and $param["A2APublicRef"] !== null) {
            $this->A2APublicRef = $param["A2APublicRef"];
        }

        if (array_key_exists("A2AEndpoint",$param) and $param["A2AEndpoint"] !== null) {
            $this->A2AEndpoint = $param["A2AEndpoint"];
        }

        if (array_key_exists("A2AStatus",$param) and $param["A2AStatus"] !== null) {
            $this->A2AStatus = $param["A2AStatus"];
        }
    }
}
