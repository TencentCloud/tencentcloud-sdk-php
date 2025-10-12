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
 * LineageRelation 血缘关系
 *
 * @method string getRelationId() 获取关联ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelationId(string $RelationId) 设置关联ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceUniqueId() 获取源端唯一血缘ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceUniqueId(string $SourceUniqueId) 设置源端唯一血缘ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetUniqueId() 获取目标端唯一血缘ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetUniqueId(string $TargetUniqueId) 设置目标端唯一血缘ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProcesses() 获取血缘加工过程
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcesses(array $Processes) 设置血缘加工过程
注意：此字段可能返回 null，表示取不到有效值。
 */
class LineageRelation extends AbstractModel
{
    /**
     * @var string 关联ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelationId;

    /**
     * @var string 源端唯一血缘ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceUniqueId;

    /**
     * @var string 目标端唯一血缘ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetUniqueId;

    /**
     * @var array 血缘加工过程
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Processes;

    /**
     * @param string $RelationId 关联ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceUniqueId 源端唯一血缘ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetUniqueId 目标端唯一血缘ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Processes 血缘加工过程
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
        if (array_key_exists("RelationId",$param) and $param["RelationId"] !== null) {
            $this->RelationId = $param["RelationId"];
        }

        if (array_key_exists("SourceUniqueId",$param) and $param["SourceUniqueId"] !== null) {
            $this->SourceUniqueId = $param["SourceUniqueId"];
        }

        if (array_key_exists("TargetUniqueId",$param) and $param["TargetUniqueId"] !== null) {
            $this->TargetUniqueId = $param["TargetUniqueId"];
        }

        if (array_key_exists("Processes",$param) and $param["Processes"] !== null) {
            $this->Processes = [];
            foreach ($param["Processes"] as $key => $value){
                $obj = new LineageProcess();
                $obj->deserialize($value);
                array_push($this->Processes, $obj);
            }
        }
    }
}
