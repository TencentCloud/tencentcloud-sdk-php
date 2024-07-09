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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组策略统计
 *
 * @method integer getIngressIPv4TotalCount() 获取入站IPv4总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIngressIPv4TotalCount(integer $IngressIPv4TotalCount) 设置入站IPv4总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIngressIPv6TotalCount() 获取入站IPv6总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIngressIPv6TotalCount(integer $IngressIPv6TotalCount) 设置入站IPv6总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEgressIPv4TotalCount() 获取出站IPv4总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEgressIPv4TotalCount(integer $EgressIPv4TotalCount) 设置出站IPv4总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEgressIPv6TotalCount() 获取出站IPv6总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEgressIPv6TotalCount(integer $EgressIPv6TotalCount) 设置出站IPv6总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class PolicyStatistics extends AbstractModel
{
    /**
     * @var integer 入站IPv4总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IngressIPv4TotalCount;

    /**
     * @var integer 入站IPv6总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IngressIPv6TotalCount;

    /**
     * @var integer 出站IPv4总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EgressIPv4TotalCount;

    /**
     * @var integer 出站IPv6总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EgressIPv6TotalCount;

    /**
     * @param integer $IngressIPv4TotalCount 入站IPv4总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IngressIPv6TotalCount 入站IPv6总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EgressIPv4TotalCount 出站IPv4总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EgressIPv6TotalCount 出站IPv6总数
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
        if (array_key_exists("IngressIPv4TotalCount",$param) and $param["IngressIPv4TotalCount"] !== null) {
            $this->IngressIPv4TotalCount = $param["IngressIPv4TotalCount"];
        }

        if (array_key_exists("IngressIPv6TotalCount",$param) and $param["IngressIPv6TotalCount"] !== null) {
            $this->IngressIPv6TotalCount = $param["IngressIPv6TotalCount"];
        }

        if (array_key_exists("EgressIPv4TotalCount",$param) and $param["EgressIPv4TotalCount"] !== null) {
            $this->EgressIPv4TotalCount = $param["EgressIPv4TotalCount"];
        }

        if (array_key_exists("EgressIPv6TotalCount",$param) and $param["EgressIPv6TotalCount"] !== null) {
            $this->EgressIPv6TotalCount = $param["EgressIPv6TotalCount"];
        }
    }
}
