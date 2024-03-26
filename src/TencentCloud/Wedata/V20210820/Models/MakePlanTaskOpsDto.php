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
 * 补录计划任务
 *
 * @method TaskOpsDto getTaskBaseInfo() 获取任务基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskBaseInfo(TaskOpsDto $TaskBaseInfo) 设置任务基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取补录该任务当前已生成的实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置补录该任务当前已生成的实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompletePercent() 获取补录任务实例完成百分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompletePercent(integer $CompletePercent) 设置补录任务实例完成百分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessPercent() 获取补录任务实例成功百分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessPercent(integer $SuccessPercent) 设置补录任务实例成功百分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceTotalCount() 获取预计生成的总实例个数，由于是异步生成，-1代表实例还未完完全生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTotalCount(integer $InstanceTotalCount) 设置预计生成的总实例个数，由于是异步生成，-1代表实例还未完完全生成
注意：此字段可能返回 null，表示取不到有效值。
 */
class MakePlanTaskOpsDto extends AbstractModel
{
    /**
     * @var TaskOpsDto 任务基本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskBaseInfo;

    /**
     * @var integer 补录该任务当前已生成的实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var integer 补录任务实例完成百分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompletePercent;

    /**
     * @var integer 补录任务实例成功百分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessPercent;

    /**
     * @var integer 预计生成的总实例个数，由于是异步生成，-1代表实例还未完完全生成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTotalCount;

    /**
     * @param TaskOpsDto $TaskBaseInfo 任务基本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount 补录该任务当前已生成的实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompletePercent 补录任务实例完成百分数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessPercent 补录任务实例成功百分数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceTotalCount 预计生成的总实例个数，由于是异步生成，-1代表实例还未完完全生成
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
        if (array_key_exists("TaskBaseInfo",$param) and $param["TaskBaseInfo"] !== null) {
            $this->TaskBaseInfo = new TaskOpsDto();
            $this->TaskBaseInfo->deserialize($param["TaskBaseInfo"]);
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("CompletePercent",$param) and $param["CompletePercent"] !== null) {
            $this->CompletePercent = $param["CompletePercent"];
        }

        if (array_key_exists("SuccessPercent",$param) and $param["SuccessPercent"] !== null) {
            $this->SuccessPercent = $param["SuccessPercent"];
        }

        if (array_key_exists("InstanceTotalCount",$param) and $param["InstanceTotalCount"] !== null) {
            $this->InstanceTotalCount = $param["InstanceTotalCount"];
        }
    }
}
