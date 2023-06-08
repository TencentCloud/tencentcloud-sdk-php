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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器选取规则
 *
 * @method integer getTaskGroupInstancesExecuteMode() 获取实例选取模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupInstancesExecuteMode(integer $TaskGroupInstancesExecuteMode) 设置实例选取模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskGroupInstancesExecutePercent() 获取按比例选取模式下选取比例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupInstancesExecutePercent(integer $TaskGroupInstancesExecutePercent) 设置按比例选取模式下选取比例
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskGroupInstancesExecuteNum() 获取按数量选取模式下选取数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupInstancesExecuteNum(integer $TaskGroupInstancesExecuteNum) 设置按数量选取模式下选取数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskGroupInstancesExecuteRules extends AbstractModel
{
    /**
     * @var integer 实例选取模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupInstancesExecuteMode;

    /**
     * @var integer 按比例选取模式下选取比例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupInstancesExecutePercent;

    /**
     * @var integer 按数量选取模式下选取数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupInstancesExecuteNum;

    /**
     * @param integer $TaskGroupInstancesExecuteMode 实例选取模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskGroupInstancesExecutePercent 按比例选取模式下选取比例
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskGroupInstancesExecuteNum 按数量选取模式下选取数量
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
        if (array_key_exists("TaskGroupInstancesExecuteMode",$param) and $param["TaskGroupInstancesExecuteMode"] !== null) {
            $this->TaskGroupInstancesExecuteMode = $param["TaskGroupInstancesExecuteMode"];
        }

        if (array_key_exists("TaskGroupInstancesExecutePercent",$param) and $param["TaskGroupInstancesExecutePercent"] !== null) {
            $this->TaskGroupInstancesExecutePercent = $param["TaskGroupInstancesExecutePercent"];
        }

        if (array_key_exists("TaskGroupInstancesExecuteNum",$param) and $param["TaskGroupInstancesExecuteNum"] !== null) {
            $this->TaskGroupInstancesExecuteNum = $param["TaskGroupInstancesExecuteNum"];
        }
    }
}
