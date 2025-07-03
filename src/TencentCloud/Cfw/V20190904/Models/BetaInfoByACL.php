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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则关联的beta任务
 *
 * @method integer getTaskId() 获取任务id
 * @method void setTaskId(integer $TaskId) 设置任务id
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getLastTime() 获取上次执行时间
 * @method void setLastTime(string $LastTime) 设置上次执行时间
 */
class BetaInfoByACL extends AbstractModel
{
    /**
     * @var integer 任务id
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 上次执行时间
     */
    public $LastTime;

    /**
     * @param integer $TaskId 任务id
     * @param string $TaskName 任务名称
     * @param string $LastTime 上次执行时间
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }
    }
}
