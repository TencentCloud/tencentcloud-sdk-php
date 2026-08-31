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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 启动模板扩容覆盖配置。ExpansionMode=MULTI_CARD 时通过此对象指定机型族、卡数折算等覆盖参数。
 *
 * @method array getInstanceFamilies() 获取<p>候选机型族列表，最多 10 个。MULTI_CARD 模式的明确标志字段。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceFamilies(array $InstanceFamilies) 设置<p>候选机型族列表，最多 10 个。MULTI_CARD 模式的明确标志字段。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpuCountPerNode() 获取<p>每节点 GPU 卡数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuCountPerNode(integer $GpuCountPerNode) 设置<p>每节点 GPU 卡数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableMixedGpuCount() 获取<p>是否启用混合 GPU 卡数折算，默认 false。未传时保持已持久化的混卡开关。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableMixedGpuCount(boolean $EnableMixedGpuCount) 设置<p>是否启用混合 GPU 卡数折算，默认 false。未传时保持已持久化的混卡开关。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableMultiZone() 获取<p>是否启用多可用区扩容。未传时保持已持久化的分区策略，局部更新不得覆盖。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableMultiZone(boolean $EnableMultiZone) 设置<p>是否启用多可用区扩容。未传时保持已持久化的分区策略，局部更新不得覆盖。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TemplateOverrides extends AbstractModel
{
    /**
     * @var array <p>候选机型族列表，最多 10 个。MULTI_CARD 模式的明确标志字段。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceFamilies;

    /**
     * @var integer <p>每节点 GPU 卡数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuCountPerNode;

    /**
     * @var boolean <p>是否启用混合 GPU 卡数折算，默认 false。未传时保持已持久化的混卡开关。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableMixedGpuCount;

    /**
     * @var boolean <p>是否启用多可用区扩容。未传时保持已持久化的分区策略，局部更新不得覆盖。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableMultiZone;

    /**
     * @param array $InstanceFamilies <p>候选机型族列表，最多 10 个。MULTI_CARD 模式的明确标志字段。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GpuCountPerNode <p>每节点 GPU 卡数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableMixedGpuCount <p>是否启用混合 GPU 卡数折算，默认 false。未传时保持已持久化的混卡开关。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableMultiZone <p>是否启用多可用区扩容。未传时保持已持久化的分区策略，局部更新不得覆盖。</p>
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
        if (array_key_exists("InstanceFamilies",$param) and $param["InstanceFamilies"] !== null) {
            $this->InstanceFamilies = $param["InstanceFamilies"];
        }

        if (array_key_exists("GpuCountPerNode",$param) and $param["GpuCountPerNode"] !== null) {
            $this->GpuCountPerNode = $param["GpuCountPerNode"];
        }

        if (array_key_exists("EnableMixedGpuCount",$param) and $param["EnableMixedGpuCount"] !== null) {
            $this->EnableMixedGpuCount = $param["EnableMixedGpuCount"];
        }

        if (array_key_exists("EnableMultiZone",$param) and $param["EnableMultiZone"] !== null) {
            $this->EnableMultiZone = $param["EnableMultiZone"];
        }
    }
}
