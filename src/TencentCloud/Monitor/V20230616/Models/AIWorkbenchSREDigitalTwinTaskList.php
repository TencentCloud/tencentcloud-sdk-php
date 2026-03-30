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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI工作台SRE数字分身任务列表
 *
 * @method array getTasks() 获取任务列表
 * @method void setTasks(array $Tasks) 设置任务列表
 * @method integer getTotal() 获取任务总数
 * @method void setTotal(integer $Total) 设置任务总数
 */
class AIWorkbenchSREDigitalTwinTaskList extends AbstractModel
{
    /**
     * @var array 任务列表
     */
    public $Tasks;

    /**
     * @var integer 任务总数
     */
    public $Total;

    /**
     * @param array $Tasks 任务列表
     * @param integer $Total 任务总数
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
                $obj = new AIWorkbenchSREDigitalTwinTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
