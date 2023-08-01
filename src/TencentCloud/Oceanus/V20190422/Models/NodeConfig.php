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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专家模式  计算节点的配置信息
 *
 * @method integer getId() 获取Node ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置Node ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParallelism() 获取Node parallelism
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParallelism(integer $Parallelism) 设置Node parallelism
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSlotSharingGroup() 获取Slot sharing group
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlotSharingGroup(string $SlotSharingGroup) 设置Slot sharing group
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfiguration() 获取Configuration properties
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfiguration(array $Configuration) 设置Configuration properties
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStateTTL() 获取节点的状态ttl配置, 多个用 ; 分割
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStateTTL(string $StateTTL) 设置节点的状态ttl配置, 多个用 ; 分割
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeConfig extends AbstractModel
{
    /**
     * @var integer Node ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer Node parallelism
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Parallelism;

    /**
     * @var string Slot sharing group
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlotSharingGroup;

    /**
     * @var array Configuration properties
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Configuration;

    /**
     * @var string 节点的状态ttl配置, 多个用 ; 分割
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StateTTL;

    /**
     * @param integer $Id Node ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Parallelism Node parallelism
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SlotSharingGroup Slot sharing group
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Configuration Configuration properties
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StateTTL 节点的状态ttl配置, 多个用 ; 分割
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Parallelism",$param) and $param["Parallelism"] !== null) {
            $this->Parallelism = $param["Parallelism"];
        }

        if (array_key_exists("SlotSharingGroup",$param) and $param["SlotSharingGroup"] !== null) {
            $this->SlotSharingGroup = $param["SlotSharingGroup"];
        }

        if (array_key_exists("Configuration",$param) and $param["Configuration"] !== null) {
            $this->Configuration = [];
            foreach ($param["Configuration"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Configuration, $obj);
            }
        }

        if (array_key_exists("StateTTL",$param) and $param["StateTTL"] !== null) {
            $this->StateTTL = $param["StateTTL"];
        }
    }
}
