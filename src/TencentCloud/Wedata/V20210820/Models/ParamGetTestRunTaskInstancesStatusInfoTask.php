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
 * 任务信息获取实例状态信息任务
 *
 * @method string getRecordId() 获取记录编号
 * @method void setRecordId(string $RecordId) 设置记录编号
 * @method string getTaskId() 获取任务编号
 * @method void setTaskId(string $TaskId) 设置任务编号
 */
class ParamGetTestRunTaskInstancesStatusInfoTask extends AbstractModel
{
    /**
     * @var string 记录编号
     */
    public $RecordId;

    /**
     * @var string 任务编号
     */
    public $TaskId;

    /**
     * @param string $RecordId 记录编号
     * @param string $TaskId 任务编号
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
