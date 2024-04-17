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
 * ColumnItem
 *
 * @method string getEventName() 获取ColumnName1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventName(string $EventName) 设置ColumnName1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventProjectName() 获取ColumnName1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventProjectName(string $EventProjectName) 设置ColumnName1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurRunDate() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurRunDate(string $CurRunDate) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventType() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType(string $EventType) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class ColumnData extends AbstractModel
{
    /**
     * @var string ColumnName1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventName;

    /**
     * @var string ColumnName1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventProjectName;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurRunDate;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @param string $EventName ColumnName1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventProjectName ColumnName1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurRunDate 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventType 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventProjectName",$param) and $param["EventProjectName"] !== null) {
            $this->EventProjectName = $param["EventProjectName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
