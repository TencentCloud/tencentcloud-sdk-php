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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 4.x集群和5.0集群列表统一显示 4.x特殊数据承载接口
 *
 * @method boolean getIsVip() 获取是否vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVip(boolean $IsVip) 设置是否vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVipInstanceStatus() 获取4.x专享集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipInstanceStatus(integer $VipInstanceStatus) 设置4.x专享集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxBandWidth() 获取专享集群峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置专享集群峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecName() 获取专享集群规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecName(string $SpecName) 设置专享集群规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNodeCount() 获取专享集群节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeCount(integer $NodeCount) 设置专享集群节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxStorage() 获取专享集群最大存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxStorage(integer $MaxStorage) 设置专享集群最大存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRetention() 获取专享集群最大保留时间，单位：小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetention(integer $MaxRetention) 设置专享集群最大保留时间，单位：小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinRetention() 获取专项集群最大保留时间，单位：小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinRetention(integer $MinRetention) 设置专项集群最大保留时间，单位：小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceStatus() 获取4.0共享集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(integer $InstanceStatus) 设置4.0共享集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsFrozen() 获取是否已冻结
 * @method void setIsFrozen(boolean $IsFrozen) 设置是否已冻结
 */
class InstanceItemExtraInfo extends AbstractModel
{
    /**
     * @var boolean 是否vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVip;

    /**
     * @var integer 4.x专享集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VipInstanceStatus;

    /**
     * @var integer 专享集群峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxBandWidth;

    /**
     * @var string 专享集群规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecName;

    /**
     * @var integer 专享集群节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeCount;

    /**
     * @var integer 专享集群最大存储
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxStorage;

    /**
     * @var integer 专享集群最大保留时间，单位：小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRetention;

    /**
     * @var integer 专项集群最大保留时间，单位：小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinRetention;

    /**
     * @var integer 4.0共享集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var boolean 是否已冻结
     */
    public $IsFrozen;

    /**
     * @param boolean $IsVip 是否vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VipInstanceStatus 4.x专享集群状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxBandWidth 专享集群峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecName 专享集群规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NodeCount 专享集群节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxStorage 专享集群最大存储
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRetention 专享集群最大保留时间，单位：小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinRetention 专项集群最大保留时间，单位：小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceStatus 4.0共享集群状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsFrozen 是否已冻结
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
        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("VipInstanceStatus",$param) and $param["VipInstanceStatus"] !== null) {
            $this->VipInstanceStatus = $param["VipInstanceStatus"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("MaxRetention",$param) and $param["MaxRetention"] !== null) {
            $this->MaxRetention = $param["MaxRetention"];
        }

        if (array_key_exists("MinRetention",$param) and $param["MinRetention"] !== null) {
            $this->MinRetention = $param["MinRetention"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("IsFrozen",$param) and $param["IsFrozen"] !== null) {
            $this->IsFrozen = $param["IsFrozen"];
        }
    }
}
