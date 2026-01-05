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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTriggerTask请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getTaskId() 获取任务ID
和VirtualTaskId选填一个
 * @method void setTaskId(string $TaskId) 设置任务ID
和VirtualTaskId选填一个
 * @method boolean getOperateInform() 获取任务操作是否消息通知下游任务责任人true：通知
false：不通知
不传默认false
 * @method void setOperateInform(boolean $OperateInform) 设置任务操作是否消息通知下游任务责任人true：通知
false：不通知
不传默认false
 * @method boolean getDeleteMode() 获取任务删除方式
true：不针对下游任务实例进行强制失败
false：针对下游任务实例进行强制失败
不传默认false

 * @method void setDeleteMode(boolean $DeleteMode) 设置任务删除方式
true：不针对下游任务实例进行强制失败
false：针对下游任务实例进行强制失败
不传默认false
 */
class DeleteTriggerTaskRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 任务ID
和VirtualTaskId选填一个
     */
    public $TaskId;

    /**
     * @var boolean 任务操作是否消息通知下游任务责任人true：通知
false：不通知
不传默认false
     */
    public $OperateInform;

    /**
     * @var boolean 任务删除方式
true：不针对下游任务实例进行强制失败
false：针对下游任务实例进行强制失败
不传默认false

     */
    public $DeleteMode;

    /**
     * @param string $ProjectId 项目Id
     * @param string $TaskId 任务ID
和VirtualTaskId选填一个
     * @param boolean $OperateInform 任务操作是否消息通知下游任务责任人true：通知
false：不通知
不传默认false
     * @param boolean $DeleteMode 任务删除方式
true：不针对下游任务实例进行强制失败
false：针对下游任务实例进行强制失败
不传默认false
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("OperateInform",$param) and $param["OperateInform"] !== null) {
            $this->OperateInform = $param["OperateInform"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }
    }
}
