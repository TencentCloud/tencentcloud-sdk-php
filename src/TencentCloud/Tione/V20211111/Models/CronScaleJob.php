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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时扩缩任务
 *
 * @method string getSchedule() 获取Cron表达式，标识任务的执行时间，精确到分钟级
 * @method void setSchedule(string $Schedule) 设置Cron表达式，标识任务的执行时间，精确到分钟级
 * @method string getName() 获取定时任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置定时任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetReplicas() 获取目标实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetReplicas(integer $TargetReplicas) 设置目标实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinReplicas() 获取目标min
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinReplicas(integer $MinReplicas) 设置目标min
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxReplicas() 获取目标max
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxReplicas(integer $MaxReplicas) 设置目标max
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExcludeDates() 获取例外时间，Cron表达式，在对应时间内不执行任务。最多支持3条。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludeDates(array $ExcludeDates) 设置例外时间，Cron表达式，在对应时间内不执行任务。最多支持3条。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CronScaleJob extends AbstractModel
{
    /**
     * @var string Cron表达式，标识任务的执行时间，精确到分钟级
     */
    public $Schedule;

    /**
     * @var string 定时任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 目标实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetReplicas;

    /**
     * @var integer 目标min
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinReplicas;

    /**
     * @var integer 目标max
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxReplicas;

    /**
     * @var array 例外时间，Cron表达式，在对应时间内不执行任务。最多支持3条。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludeDates;

    /**
     * @param string $Schedule Cron表达式，标识任务的执行时间，精确到分钟级
     * @param string $Name 定时任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetReplicas 目标实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinReplicas 目标min
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxReplicas 目标max
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludeDates 例外时间，Cron表达式，在对应时间内不执行任务。最多支持3条。
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
        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TargetReplicas",$param) and $param["TargetReplicas"] !== null) {
            $this->TargetReplicas = $param["TargetReplicas"];
        }

        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("ExcludeDates",$param) and $param["ExcludeDates"] !== null) {
            $this->ExcludeDates = $param["ExcludeDates"];
        }
    }
}
