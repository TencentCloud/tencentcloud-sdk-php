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
 * 候选计算资源规格排序策略。LARGE_FIRST/SMALL_FIRST 表示按规格大小选择候选资源，GPU 场景按卡数判断大小。
 *
 * @method string getInstanceSpecPriority() 获取<p>候选规格排序方式。可选值：LARGE_FIRST（大规格优先）、SMALL_FIRST（小规格优先）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceSpecPriority(string $InstanceSpecPriority) 设置<p>候选规格排序方式。可选值：LARGE_FIRST（大规格优先）、SMALL_FIRST（小规格优先）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExpansionPriority extends AbstractModel
{
    /**
     * @var string <p>候选规格排序方式。可选值：LARGE_FIRST（大规格优先）、SMALL_FIRST（小规格优先）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceSpecPriority;

    /**
     * @param string $InstanceSpecPriority <p>候选规格排序方式。可选值：LARGE_FIRST（大规格优先）、SMALL_FIRST（小规格优先）。</p>
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
        if (array_key_exists("InstanceSpecPriority",$param) and $param["InstanceSpecPriority"] !== null) {
            $this->InstanceSpecPriority = $param["InstanceSpecPriority"];
        }
    }
}
