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
 * 值班信息
 *
 * @method integer getDutyScheduleId() 获取值班Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDutyScheduleId(integer $DutyScheduleId) 设置值班Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取值班开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置值班开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取值班结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置值班结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDutyPersons() 获取值班人员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDutyPersons(array $DutyPersons) 设置值班人员
注意：此字段可能返回 null，表示取不到有效值。
 */
class Duty extends AbstractModel
{
    /**
     * @var integer 值班Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DutyScheduleId;

    /**
     * @var string 值班开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 值班结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var array 值班人员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DutyPersons;

    /**
     * @param integer $DutyScheduleId 值班Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 值班开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 值班结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DutyPersons 值班人员
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
        if (array_key_exists("DutyScheduleId",$param) and $param["DutyScheduleId"] !== null) {
            $this->DutyScheduleId = $param["DutyScheduleId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DutyPersons",$param) and $param["DutyPersons"] !== null) {
            $this->DutyPersons = [];
            foreach ($param["DutyPersons"] as $key => $value){
                $obj = new DutyPerson();
                $obj->deserialize($value);
                array_push($this->DutyPersons, $obj);
            }
        }
    }
}
