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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志存储统计柱形图
 *
 * @method integer getAclSize() 获取访问控制日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAclSize(integer $AclSize) 设置访问控制日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdsSize() 获取入侵防御日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdsSize(integer $IdsSize) 设置入侵防御日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetFlowSize() 获取流量日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetFlowSize(integer $NetFlowSize) 设置流量日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperateSize() 获取操作日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateSize(integer $OperateSize) 设置操作日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTime() 获取统计时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置统计时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNDRNetflowSize() 获取NDR流量日志存储量，单位B
 * @method void setNDRNetflowSize(integer $NDRNetflowSize) 设置NDR流量日志存储量，单位B
 * @method integer getNDRRiskSize() 获取NDR风险日志存储量，单位B
 * @method void setNDRRiskSize(integer $NDRRiskSize) 设置NDR风险日志存储量，单位B
 */
class StorageHistogram extends AbstractModel
{
    /**
     * @var integer 访问控制日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AclSize;

    /**
     * @var integer 入侵防御日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdsSize;

    /**
     * @var integer 流量日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetFlowSize;

    /**
     * @var integer 操作日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateSize;

    /**
     * @var string 统计时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var integer NDR流量日志存储量，单位B
     */
    public $NDRNetflowSize;

    /**
     * @var integer NDR风险日志存储量，单位B
     */
    public $NDRRiskSize;

    /**
     * @param integer $AclSize 访问控制日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IdsSize 入侵防御日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetFlowSize 流量日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperateSize 操作日志存储量，单位B
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Time 统计时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NDRNetflowSize NDR流量日志存储量，单位B
     * @param integer $NDRRiskSize NDR风险日志存储量，单位B
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
        if (array_key_exists("AclSize",$param) and $param["AclSize"] !== null) {
            $this->AclSize = $param["AclSize"];
        }

        if (array_key_exists("IdsSize",$param) and $param["IdsSize"] !== null) {
            $this->IdsSize = $param["IdsSize"];
        }

        if (array_key_exists("NetFlowSize",$param) and $param["NetFlowSize"] !== null) {
            $this->NetFlowSize = $param["NetFlowSize"];
        }

        if (array_key_exists("OperateSize",$param) and $param["OperateSize"] !== null) {
            $this->OperateSize = $param["OperateSize"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("NDRNetflowSize",$param) and $param["NDRNetflowSize"] !== null) {
            $this->NDRNetflowSize = $param["NDRNetflowSize"];
        }

        if (array_key_exists("NDRRiskSize",$param) and $param["NDRRiskSize"] !== null) {
            $this->NDRRiskSize = $param["NDRRiskSize"];
        }
    }
}
