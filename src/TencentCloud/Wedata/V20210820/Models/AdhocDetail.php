<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 子任务记录
 *
 * @method integer getId() 获取子任务记录Id
 * @method void setId(integer $Id) 设置子任务记录Id
 * @method string getScriptContent() 获取脚本内容
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容
 * @method string getStartTime() 获取任务启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置任务启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取当前任务状态
 * @method void setStatus(string $Status) 设置当前任务状态
 * @method integer getRecordId() 获取提交任务id
 * @method void setRecordId(integer $RecordId) 设置提交任务id
 */
class AdhocDetail extends AbstractModel
{
    /**
     * @var integer 子任务记录Id
     */
    public $Id;

    /**
     * @var string 脚本内容
     */
    public $ScriptContent;

    /**
     * @var string 任务启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 当前任务状态
     */
    public $Status;

    /**
     * @var integer 提交任务id
     */
    public $RecordId;

    /**
     * @param integer $Id 子任务记录Id
     * @param string $ScriptContent 脚本内容
     * @param string $StartTime 任务启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 当前任务状态
     * @param integer $RecordId 提交任务id
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

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }
    }
}
