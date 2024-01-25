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
 * 最近一次开发空间运行记录信息任务体
 *
 * @method string getTaskId() 获取任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordId() 获取记录Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(string $RecordId) 设置记录Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurRunDate() 获取当前时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurRunDate(string $CurRunDate) 设置当前时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestScriptId() 获取请求脚本编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestScriptId(string $RequestScriptId) 设置请求脚本编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUser() 获取创建用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUser(string $CreateUser) 设置创建用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目编号
注意：此字段可能返回 null，表示取不到有效值。
 */
class LatestAnalyseInfoTask extends AbstractModel
{
    /**
     * @var string 任务Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 记录Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var string 当前时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurRunDate;

    /**
     * @var string 请求脚本编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestScriptId;

    /**
     * @var string 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var string 创建用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUser;

    /**
     * @var string 项目编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @param string $TaskId 任务Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordId 记录Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurRunDate 当前时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestScriptId 请求脚本编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUser 创建用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目编号
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("RequestScriptId",$param) and $param["RequestScriptId"] !== null) {
            $this->RequestScriptId = $param["RequestScriptId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
