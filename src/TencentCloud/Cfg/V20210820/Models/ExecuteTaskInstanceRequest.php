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
 * ExecuteTaskInstance请求参数结构体
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method integer getTaskActionId() 获取任务动作ID
 * @method void setTaskActionId(integer $TaskActionId) 设置任务动作ID
 * @method array getTaskInstanceIds() 获取任务动作实例ID
 * @method void setTaskInstanceIds(array $TaskInstanceIds) 设置任务动作实例ID
 * @method boolean getIsOperateAll() 获取是否操作整个任务
 * @method void setIsOperateAll(boolean $IsOperateAll) 设置是否操作整个任务
 * @method integer getActionType() 获取操作类型：（1--启动   2--执行  3--跳过   5--重试）
 * @method void setActionType(integer $ActionType) 设置操作类型：（1--启动   2--执行  3--跳过   5--重试）
 * @method integer getTaskGroupId() 获取动作组ID
 * @method void setTaskGroupId(integer $TaskGroupId) 设置动作组ID
 */
class ExecuteTaskInstanceRequest extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var integer 任务动作ID
     */
    public $TaskActionId;

    /**
     * @var array 任务动作实例ID
     */
    public $TaskInstanceIds;

    /**
     * @var boolean 是否操作整个任务
     */
    public $IsOperateAll;

    /**
     * @var integer 操作类型：（1--启动   2--执行  3--跳过   5--重试）
     */
    public $ActionType;

    /**
     * @var integer 动作组ID
     */
    public $TaskGroupId;

    /**
     * @param integer $TaskId 任务ID
     * @param integer $TaskActionId 任务动作ID
     * @param array $TaskInstanceIds 任务动作实例ID
     * @param boolean $IsOperateAll 是否操作整个任务
     * @param integer $ActionType 操作类型：（1--启动   2--执行  3--跳过   5--重试）
     * @param integer $TaskGroupId 动作组ID
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

        if (array_key_exists("TaskActionId",$param) and $param["TaskActionId"] !== null) {
            $this->TaskActionId = $param["TaskActionId"];
        }

        if (array_key_exists("TaskInstanceIds",$param) and $param["TaskInstanceIds"] !== null) {
            $this->TaskInstanceIds = $param["TaskInstanceIds"];
        }

        if (array_key_exists("IsOperateAll",$param) and $param["IsOperateAll"] !== null) {
            $this->IsOperateAll = $param["IsOperateAll"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("TaskGroupId",$param) and $param["TaskGroupId"] !== null) {
            $this->TaskGroupId = $param["TaskGroupId"];
        }
    }
}
