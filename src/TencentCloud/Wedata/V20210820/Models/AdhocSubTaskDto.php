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
 * 任务列表-子任务记录
 *
 * @method integer getId() 获取子任务id
 * @method void setId(integer $Id) 设置子任务id
 * @method string getStartTime() 获取子任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置子任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取子任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置子任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取子任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置子任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptContent() 获取子任务sql内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContent(string $ScriptContent) 设置子任务sql内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordId() 获取提交任务id
 * @method void setRecordId(integer $RecordId) 设置提交任务id
 * @method string getDuration() 获取子任务执行时长
 * @method void setDuration(string $Duration) 设置子任务执行时长
 */
class AdhocSubTaskDto extends AbstractModel
{
    /**
     * @var integer 子任务id
     */
    public $Id;

    /**
     * @var string 子任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 子任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 子任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 子任务sql内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContent;

    /**
     * @var integer 提交任务id
     */
    public $RecordId;

    /**
     * @var string 子任务执行时长
     */
    public $Duration;

    /**
     * @param integer $Id 子任务id
     * @param string $StartTime 子任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 子任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 子任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptContent 子任务sql内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordId 提交任务id
     * @param string $Duration 子任务执行时长
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
