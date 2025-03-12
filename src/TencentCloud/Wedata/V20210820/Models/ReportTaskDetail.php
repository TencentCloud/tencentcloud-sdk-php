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
 * 上报任务详情
 *
 * @method string getEngineTaskId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineTaskId(string $EngineTaskId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeStatus() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeStatus(string $EngineExeStatus) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeStartTime() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeStartTime(string $EngineExeStartTime) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeEndTime() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeEndTime(string $EngineExeEndTime) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessInfo() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessInfo(string $BusinessInfo) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method EngineTaskInfo getEngineTaskInfo() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineTaskInfo(EngineTaskInfo $EngineTaskInfo) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReportTaskDetail extends AbstractModel
{
    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineTaskId;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeStatus;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeStartTime;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeEndTime;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessInfo;

    /**
     * @var EngineTaskInfo 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineTaskInfo;

    /**
     * @param string $EngineTaskId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeStatus 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeStartTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeEndTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessInfo 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param EngineTaskInfo $EngineTaskInfo 1
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
        if (array_key_exists("EngineTaskId",$param) and $param["EngineTaskId"] !== null) {
            $this->EngineTaskId = $param["EngineTaskId"];
        }

        if (array_key_exists("EngineExeStatus",$param) and $param["EngineExeStatus"] !== null) {
            $this->EngineExeStatus = $param["EngineExeStatus"];
        }

        if (array_key_exists("EngineExeStartTime",$param) and $param["EngineExeStartTime"] !== null) {
            $this->EngineExeStartTime = $param["EngineExeStartTime"];
        }

        if (array_key_exists("EngineExeEndTime",$param) and $param["EngineExeEndTime"] !== null) {
            $this->EngineExeEndTime = $param["EngineExeEndTime"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("BusinessInfo",$param) and $param["BusinessInfo"] !== null) {
            $this->BusinessInfo = $param["BusinessInfo"];
        }

        if (array_key_exists("EngineTaskInfo",$param) and $param["EngineTaskInfo"] !== null) {
            $this->EngineTaskInfo = new EngineTaskInfo();
            $this->EngineTaskInfo->deserialize($param["EngineTaskInfo"]);
        }
    }
}
