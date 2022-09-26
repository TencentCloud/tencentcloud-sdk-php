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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务列表信息
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getTaskTitle() 获取任务标题
 * @method void setTaskTitle(string $TaskTitle) 设置任务标题
 * @method string getTaskDescription() 获取任务描述
 * @method void setTaskDescription(string $TaskDescription) 设置任务描述
 * @method string getTaskTag() 获取任务标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTag(string $TaskTag) 设置任务标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskStatus() 获取任务状态(1001 -- 未开始   1002 -- 进行中  1003 -- 暂停中   1004 -- 任务结束)
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态(1001 -- 未开始   1002 -- 进行中  1003 -- 暂停中   1004 -- 任务结束)
 * @method string getTaskCreateTime() 获取任务创建时间
 * @method void setTaskCreateTime(string $TaskCreateTime) 设置任务创建时间
 * @method string getTaskUpdateTime() 获取任务更新时间
 * @method void setTaskUpdateTime(string $TaskUpdateTime) 设置任务更新时间
 * @method integer getTaskPreCheckStatus() 获取0--未开始，1--进行中，2--已完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskPreCheckStatus(integer $TaskPreCheckStatus) 设置0--未开始，1--进行中，2--已完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTaskPreCheckSuccess() 获取环境检查是否通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskPreCheckSuccess(boolean $TaskPreCheckSuccess) 设置环境检查是否通过
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskListItem extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务标题
     */
    public $TaskTitle;

    /**
     * @var string 任务描述
     */
    public $TaskDescription;

    /**
     * @var string 任务标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTag;

    /**
     * @var integer 任务状态(1001 -- 未开始   1002 -- 进行中  1003 -- 暂停中   1004 -- 任务结束)
     */
    public $TaskStatus;

    /**
     * @var string 任务创建时间
     */
    public $TaskCreateTime;

    /**
     * @var string 任务更新时间
     */
    public $TaskUpdateTime;

    /**
     * @var integer 0--未开始，1--进行中，2--已完成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskPreCheckStatus;

    /**
     * @var boolean 环境检查是否通过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskPreCheckSuccess;

    /**
     * @param integer $TaskId 任务ID
     * @param string $TaskTitle 任务标题
     * @param string $TaskDescription 任务描述
     * @param string $TaskTag 任务标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskStatus 任务状态(1001 -- 未开始   1002 -- 进行中  1003 -- 暂停中   1004 -- 任务结束)
     * @param string $TaskCreateTime 任务创建时间
     * @param string $TaskUpdateTime 任务更新时间
     * @param integer $TaskPreCheckStatus 0--未开始，1--进行中，2--已完成
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TaskPreCheckSuccess 环境检查是否通过
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

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskTag",$param) and $param["TaskTag"] !== null) {
            $this->TaskTag = $param["TaskTag"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }

        if (array_key_exists("TaskUpdateTime",$param) and $param["TaskUpdateTime"] !== null) {
            $this->TaskUpdateTime = $param["TaskUpdateTime"];
        }

        if (array_key_exists("TaskPreCheckStatus",$param) and $param["TaskPreCheckStatus"] !== null) {
            $this->TaskPreCheckStatus = $param["TaskPreCheckStatus"];
        }

        if (array_key_exists("TaskPreCheckSuccess",$param) and $param["TaskPreCheckSuccess"] !== null) {
            $this->TaskPreCheckSuccess = $param["TaskPreCheckSuccess"];
        }
    }
}
