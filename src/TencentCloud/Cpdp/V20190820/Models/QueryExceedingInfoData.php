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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 超额信息数据
 *
 * @method string getAgentId() 获取代理商ID。
 * @method void setAgentId(string $AgentId) 设置代理商ID。
 * @method string getAgentName() 获取代理商名称。
 * @method void setAgentName(string $AgentName) 设置代理商名称。
 * @method string getAnchorId() 获取主播ID。当入参Dimension为ANCHOR或ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnchorId(string $AnchorId) 设置主播ID。当入参Dimension为ANCHOR或ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnchorName() 获取主播名称。当入参Dimension为ANCHOR或ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnchorName(string $AnchorName) 设置主播名称。当入参Dimension为ANCHOR或ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderId() 获取订单号。当入参Dimension为ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderId(string $OrderId) 设置订单号。当入参Dimension为ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExceedingType() 获取超额类型。目前支持 AGENT_EXCEED_100 和 ANCHOR_EXCEED_100_12 两种类型。
 * @method void setExceedingType(string $ExceedingType) 设置超额类型。目前支持 AGENT_EXCEED_100 和 ANCHOR_EXCEED_100_12 两种类型。
 */
class QueryExceedingInfoData extends AbstractModel
{
    /**
     * @var string 代理商ID。
     */
    public $AgentId;

    /**
     * @var string 代理商名称。
     */
    public $AgentName;

    /**
     * @var string 主播ID。当入参Dimension为ANCHOR或ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnchorId;

    /**
     * @var string 主播名称。当入参Dimension为ANCHOR或ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnchorName;

    /**
     * @var string 订单号。当入参Dimension为ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderId;

    /**
     * @var string 超额类型。目前支持 AGENT_EXCEED_100 和 ANCHOR_EXCEED_100_12 两种类型。
     */
    public $ExceedingType;

    /**
     * @param string $AgentId 代理商ID。
     * @param string $AgentName 代理商名称。
     * @param string $AnchorId 主播ID。当入参Dimension为ANCHOR或ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AnchorName 主播名称。当入参Dimension为ANCHOR或ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderId 订单号。当入参Dimension为ORDER时，该字段才会有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExceedingType 超额类型。目前支持 AGENT_EXCEED_100 和 ANCHOR_EXCEED_100_12 两种类型。
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("AnchorId",$param) and $param["AnchorId"] !== null) {
            $this->AnchorId = $param["AnchorId"];
        }

        if (array_key_exists("AnchorName",$param) and $param["AnchorName"] !== null) {
            $this->AnchorName = $param["AnchorName"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ExceedingType",$param) and $param["ExceedingType"] !== null) {
            $this->ExceedingType = $param["ExceedingType"];
        }
    }
}
