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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐包消耗任务列表
 *
 * @method integer getTaskId() 获取任务id
 * @method void setTaskId(integer $TaskId) 设置任务id
 * @method string getCreateTime() 获取任务创始时间
 * @method void setCreateTime(string $CreateTime) 设置任务创始时间
 * @method integer getState() 获取任务状态，1待处理，2处理中，3已完成
 * @method void setState(integer $State) 设置任务状态，1待处理，2处理中，3已完成
 */
class PackageConsumeTask extends AbstractModel
{
    /**
     * @var integer 任务id
     */
    public $TaskId;

    /**
     * @var string 任务创始时间
     */
    public $CreateTime;

    /**
     * @var integer 任务状态，1待处理，2处理中，3已完成
     */
    public $State;

    /**
     * @param integer $TaskId 任务id
     * @param string $CreateTime 任务创始时间
     * @param integer $State 任务状态，1待处理，2处理中，3已完成
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
