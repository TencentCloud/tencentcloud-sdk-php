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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义Agent运行策略
 *
 * @method integer getMemory() 获取<p>运行内存</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置<p>运行内存</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取<p>运行cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置<p>运行cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetworkPps() 获取<p>网络抓包上限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkPps(integer $NetworkPps) 设置<p>网络抓包上限</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomAgentRunModePolicy extends AbstractModel
{
    /**
     * @var integer <p>运行内存</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var integer <p>运行cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer <p>网络抓包上限</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkPps;

    /**
     * @param integer $Memory <p>运行内存</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu <p>运行cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetworkPps <p>网络抓包上限</p>
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("NetworkPps",$param) and $param["NetworkPps"] !== null) {
            $this->NetworkPps = $param["NetworkPps"];
        }
    }
}
