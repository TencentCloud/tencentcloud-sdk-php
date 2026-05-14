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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流运行配置
 *
 * @method integer getMaxConcurrentNum() 获取<p>工作流运行最大并发数，取值范围：[1, 1000]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxConcurrentNum(integer $MaxConcurrentNum) 设置<p>工作流运行最大并发数，取值范围：[1, 1000]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueuingMode() 获取<p>1：开启  0：关闭<br>当工作流达到最大并发上限时，若开启，新工作流运行排队等待，直到其他运行释放并发，最大等待时长为48小时，超过则自动跳过不再执行；若关闭，新工作流直接跳过结束。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueuingMode(integer $QueuingMode) 设置<p>1：开启  0：关闭<br>当工作流达到最大并发上限时，若开启，新工作流运行排队等待，直到其他运行释放并发，最大等待时长为48小时，超过则自动跳过不再执行；若关闭，新工作流直接跳过结束。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowRunConfig extends AbstractModel
{
    /**
     * @var integer <p>工作流运行最大并发数，取值范围：[1, 1000]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxConcurrentNum;

    /**
     * @var integer <p>1：开启  0：关闭<br>当工作流达到最大并发上限时，若开启，新工作流运行排队等待，直到其他运行释放并发，最大等待时长为48小时，超过则自动跳过不再执行；若关闭，新工作流直接跳过结束。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueuingMode;

    /**
     * @param integer $MaxConcurrentNum <p>工作流运行最大并发数，取值范围：[1, 1000]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueuingMode <p>1：开启  0：关闭<br>当工作流达到最大并发上限时，若开启，新工作流运行排队等待，直到其他运行释放并发，最大等待时长为48小时，超过则自动跳过不再执行；若关闭，新工作流直接跳过结束。</p>
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
        if (array_key_exists("MaxConcurrentNum",$param) and $param["MaxConcurrentNum"] !== null) {
            $this->MaxConcurrentNum = $param["MaxConcurrentNum"];
        }

        if (array_key_exists("QueuingMode",$param) and $param["QueuingMode"] !== null) {
            $this->QueuingMode = $param["QueuingMode"];
        }
    }
}
