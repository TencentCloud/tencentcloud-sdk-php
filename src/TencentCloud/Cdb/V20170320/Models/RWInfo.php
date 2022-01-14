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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * proxy读写分离信息
 *
 * @method integer getInstCount() 获取代理实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstCount(integer $InstCount) 设置代理实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWeightMode() 获取权重分配模式；
系统自动分配："system"， 自定义："custom"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeightMode(string $WeightMode) 设置权重分配模式；
系统自动分配："system"， 自定义："custom"
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsKickOut() 获取是否开启延迟剔除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsKickOut(boolean $IsKickOut) 设置是否开启延迟剔除
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinCount() 获取最小保留数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinCount(integer $MinCount) 设置最小保留数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDelay() 获取延迟剔除阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDelay(integer $MaxDelay) 设置延迟剔除阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getFailOver() 获取是否开启故障转移
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailOver(boolean $FailOver) 设置是否开启故障转移
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoAddRo() 获取是否自动添加RO
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoAddRo(boolean $AutoAddRo) 设置是否自动添加RO
注意：此字段可能返回 null，表示取不到有效值。
 * @method RWInstanceInfo getRWInstInfo() 获取代理实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRWInstInfo(RWInstanceInfo $RWInstInfo) 设置代理实例信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class RWInfo extends AbstractModel
{
    /**
     * @var integer 代理实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstCount;

    /**
     * @var string 权重分配模式；
系统自动分配："system"， 自定义："custom"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeightMode;

    /**
     * @var boolean 是否开启延迟剔除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsKickOut;

    /**
     * @var integer 最小保留数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinCount;

    /**
     * @var integer 延迟剔除阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDelay;

    /**
     * @var boolean 是否开启故障转移
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailOver;

    /**
     * @var boolean 是否自动添加RO
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoAddRo;

    /**
     * @var RWInstanceInfo 代理实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RWInstInfo;

    /**
     * @param integer $InstCount 代理实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WeightMode 权重分配模式；
系统自动分配："system"， 自定义："custom"
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsKickOut 是否开启延迟剔除
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinCount 最小保留数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDelay 延迟剔除阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $FailOver 是否开启故障转移
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoAddRo 是否自动添加RO
注意：此字段可能返回 null，表示取不到有效值。
     * @param RWInstanceInfo $RWInstInfo 代理实例信息
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
        if (array_key_exists("InstCount",$param) and $param["InstCount"] !== null) {
            $this->InstCount = $param["InstCount"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("IsKickOut",$param) and $param["IsKickOut"] !== null) {
            $this->IsKickOut = $param["IsKickOut"];
        }

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->MinCount = $param["MinCount"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("RWInstInfo",$param) and $param["RWInstInfo"] !== null) {
            $this->RWInstInfo = new RWInstanceInfo();
            $this->RWInstInfo->deserialize($param["RWInstInfo"]);
        }
    }
}
