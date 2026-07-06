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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点池弹性伸缩配置
 *
 * @method integer getMinReplicas() 获取<p>节点池最小副本数</p>
 * @method void setMinReplicas(integer $MinReplicas) 设置<p>节点池最小副本数</p>
 * @method integer getMaxReplicas() 获取<p>节点池最大副本数</p>
 * @method void setMaxReplicas(integer $MaxReplicas) 设置<p>节点池最大副本数</p>
 * @method string getCreatePolicy() 获取<p>节点池扩容策略。ZoneEquality：多可用区打散；ZonePriority：首选可用区优先；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatePolicy(string $CreatePolicy) 设置<p>节点池扩容策略。ZoneEquality：多可用区打散；ZonePriority：首选可用区优先；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScaleDownMode() 获取<p>扩缩容模式</p><p>枚举值：</p><ul><li>ShutdownAndDelete： 释放模式，默认</li><li>Shutdown： 停机模式，关机不计费</li></ul><p>默认值：ShutdownAndDelete</p>
 * @method void setScaleDownMode(string $ScaleDownMode) 设置<p>扩缩容模式</p><p>枚举值：</p><ul><li>ShutdownAndDelete： 释放模式，默认</li><li>Shutdown： 停机模式，关机不计费</li></ul><p>默认值：ShutdownAndDelete</p>
 */
class MachineSetScaling extends AbstractModel
{
    /**
     * @var integer <p>节点池最小副本数</p>
     */
    public $MinReplicas;

    /**
     * @var integer <p>节点池最大副本数</p>
     */
    public $MaxReplicas;

    /**
     * @var string <p>节点池扩容策略。ZoneEquality：多可用区打散；ZonePriority：首选可用区优先；</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatePolicy;

    /**
     * @var string <p>扩缩容模式</p><p>枚举值：</p><ul><li>ShutdownAndDelete： 释放模式，默认</li><li>Shutdown： 停机模式，关机不计费</li></ul><p>默认值：ShutdownAndDelete</p>
     */
    public $ScaleDownMode;

    /**
     * @param integer $MinReplicas <p>节点池最小副本数</p>
     * @param integer $MaxReplicas <p>节点池最大副本数</p>
     * @param string $CreatePolicy <p>节点池扩容策略。ZoneEquality：多可用区打散；ZonePriority：首选可用区优先；</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScaleDownMode <p>扩缩容模式</p><p>枚举值：</p><ul><li>ShutdownAndDelete： 释放模式，默认</li><li>Shutdown： 停机模式，关机不计费</li></ul><p>默认值：ShutdownAndDelete</p>
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
        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("CreatePolicy",$param) and $param["CreatePolicy"] !== null) {
            $this->CreatePolicy = $param["CreatePolicy"];
        }

        if (array_key_exists("ScaleDownMode",$param) and $param["ScaleDownMode"] !== null) {
            $this->ScaleDownMode = $param["ScaleDownMode"];
        }
    }
}
