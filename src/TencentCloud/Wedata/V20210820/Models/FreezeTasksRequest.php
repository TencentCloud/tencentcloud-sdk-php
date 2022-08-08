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
 * FreezeTasks请求参数结构体
 *
 * @method array getTasks() 获取任务列表
 * @method void setTasks(array $Tasks) 设置任务列表
 * @method boolean getOperateIsInform() 获取任务操作是否消息通知下游任务责任人
 * @method void setOperateIsInform(boolean $OperateIsInform) 设置任务操作是否消息通知下游任务责任人
 */
class FreezeTasksRequest extends AbstractModel
{
    /**
     * @var array 任务列表
     */
    public $Tasks;

    /**
     * @var boolean 任务操作是否消息通知下游任务责任人
     */
    public $OperateIsInform;

    /**
     * @param array $Tasks 任务列表
     * @param boolean $OperateIsInform 任务操作是否消息通知下游任务责任人
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
        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new SimpleTaskInfo();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("OperateIsInform",$param) and $param["OperateIsInform"] !== null) {
            $this->OperateIsInform = $param["OperateIsInform"];
        }
    }
}
