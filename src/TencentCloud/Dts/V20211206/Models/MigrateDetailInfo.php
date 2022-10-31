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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移执行过程信息
 *
 * @method integer getStepAll() 获取总步骤数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepAll(integer $StepAll) 设置总步骤数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStepNow() 获取当前步骤
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepNow(integer $StepNow) 设置当前步骤
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMasterSlaveDistance() 获取主从差距，MB；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterSlaveDistance(integer $MasterSlaveDistance) 设置主从差距，MB；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSecondsBehindMaster() 获取主从差距，秒；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondsBehindMaster(integer $SecondsBehindMaster) 设置主从差距，秒；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStepInfo() 获取步骤信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepInfo(array $StepInfo) 设置步骤信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class MigrateDetailInfo extends AbstractModel
{
    /**
     * @var integer 总步骤数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepAll;

    /**
     * @var integer 当前步骤
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepNow;

    /**
     * @var integer 主从差距，MB；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterSlaveDistance;

    /**
     * @var integer 主从差距，秒；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondsBehindMaster;

    /**
     * @var array 步骤信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepInfo;

    /**
     * @param integer $StepAll 总步骤数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StepNow 当前步骤
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MasterSlaveDistance 主从差距，MB；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SecondsBehindMaster 主从差距，秒；只在任务正常，迁移或者同步的最后一步（追Binlog的阶段才有校），如果是非法值，返回-1
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StepInfo 步骤信息
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
        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("MasterSlaveDistance",$param) and $param["MasterSlaveDistance"] !== null) {
            $this->MasterSlaveDistance = $param["MasterSlaveDistance"];
        }

        if (array_key_exists("SecondsBehindMaster",$param) and $param["SecondsBehindMaster"] !== null) {
            $this->SecondsBehindMaster = $param["SecondsBehindMaster"];
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = [];
            foreach ($param["StepInfo"] as $key => $value){
                $obj = new StepDetailInfo();
                $obj->deserialize($value);
                array_push($this->StepInfo, $obj);
            }
        }
    }
}
