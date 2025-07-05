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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移主题的阶段分布
 *
 * @method string getStage() 获取迁移主题阶段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStage(string $Stage) 设置迁移主题阶段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQMigrationTopicDistribution extends AbstractModel
{
    /**
     * @var string 迁移主题阶段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stage;

    /**
     * @var integer 数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param string $Stage 迁移主题阶段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 数量
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
