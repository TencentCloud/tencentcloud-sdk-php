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
 * TaskTypeExts参数
 *
 * @method string getTaskTypeExtKey() 获取TaskTypeExts的Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeExtKey(string $TaskTypeExtKey) 设置TaskTypeExts的Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskTypeExtDsVO getTaskTypeExtValue() 获取TaskTypeExts的Value
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeExtValue(TaskTypeExtDsVO $TaskTypeExtValue) 设置TaskTypeExts的Value
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskTypeExtParamDsVO extends AbstractModel
{
    /**
     * @var string TaskTypeExts的Key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeExtKey;

    /**
     * @var TaskTypeExtDsVO TaskTypeExts的Value
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeExtValue;

    /**
     * @param string $TaskTypeExtKey TaskTypeExts的Key
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskTypeExtDsVO $TaskTypeExtValue TaskTypeExts的Value
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
        if (array_key_exists("TaskTypeExtKey",$param) and $param["TaskTypeExtKey"] !== null) {
            $this->TaskTypeExtKey = $param["TaskTypeExtKey"];
        }

        if (array_key_exists("TaskTypeExtValue",$param) and $param["TaskTypeExtValue"] !== null) {
            $this->TaskTypeExtValue = new TaskTypeExtDsVO();
            $this->TaskTypeExtValue->deserialize($param["TaskTypeExtValue"]);
        }
    }
}
