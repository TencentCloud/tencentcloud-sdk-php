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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时扩缩容配置
 *
 * @method string getCycleType() 获取循环类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置循环类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartDate() 获取循环起始
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartDate(string $StartDate) 设置循环起始
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndDate() 获取循环结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndDate(string $EndDate) 设置循环结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取起始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置起始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicaNum() 获取副本个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaNum(integer $ReplicaNum) 设置副本个数
注意：此字段可能返回 null，表示取不到有效值。
 */
class TimerScale extends AbstractModel
{
    /**
     * @var string 循环类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string 循环起始
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartDate;

    /**
     * @var string 循环结束
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndDate;

    /**
     * @var string 起始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 副本个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaNum;

    /**
     * @param string $CycleType 循环类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartDate 循环起始
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndDate 循环结束
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 起始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplicaNum 副本个数
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
        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }
    }
}
