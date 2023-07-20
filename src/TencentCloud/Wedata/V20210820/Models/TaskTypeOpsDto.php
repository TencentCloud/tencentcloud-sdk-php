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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务类型基本信息
 *
 * @method string getTypeDesc() 获取任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeDesc(string $TypeDesc) 设置任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTypeId() 获取任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeId(integer $TypeId) 设置任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTypeSort() 获取任务类型归类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeSort(string $TypeSort) 设置任务类型归类
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskTypeOpsDto extends AbstractModel
{
    /**
     * @var string 任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeDesc;

    /**
     * @var integer 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeId;

    /**
     * @var string 任务类型归类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeSort;

    /**
     * @param string $TypeDesc 任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TypeId 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TypeSort 任务类型归类
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
        if (array_key_exists("TypeDesc",$param) and $param["TypeDesc"] !== null) {
            $this->TypeDesc = $param["TypeDesc"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("TypeSort",$param) and $param["TypeSort"] !== null) {
            $this->TypeSort = $param["TypeSort"];
        }
    }
}
