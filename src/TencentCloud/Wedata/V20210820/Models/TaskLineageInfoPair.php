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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务血缘信息，包括源表和目标表
 *
 * @method TaskLineageInfo getSourceTable() 获取表血缘-源表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceTable(TaskLineageInfo $SourceTable) 设置表血缘-源表
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskLineageInfo getTargetTable() 获取表血缘-目标表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTable(TaskLineageInfo $TargetTable) 设置表血缘-目标表
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskLineageInfoPair extends AbstractModel
{
    /**
     * @var TaskLineageInfo 表血缘-源表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceTable;

    /**
     * @var TaskLineageInfo 表血缘-目标表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTable;

    /**
     * @param TaskLineageInfo $SourceTable 表血缘-源表
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskLineageInfo $TargetTable 表血缘-目标表
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
        if (array_key_exists("SourceTable",$param) and $param["SourceTable"] !== null) {
            $this->SourceTable = new TaskLineageInfo();
            $this->SourceTable->deserialize($param["SourceTable"]);
        }

        if (array_key_exists("TargetTable",$param) and $param["TargetTable"] !== null) {
            $this->TargetTable = new TaskLineageInfo();
            $this->TargetTable->deserialize($param["TargetTable"]);
        }
    }
}
