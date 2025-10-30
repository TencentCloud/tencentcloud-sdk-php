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
 * DescribeTaskDetailDs请求参数结构体
 *
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method integer getTaskAlarmStatus() 获取已废弃，无需填写
 * @method void setTaskAlarmStatus(integer $TaskAlarmStatus) 设置已废弃，无需填写
 */
class DescribeTaskDetailDsRequest extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var integer 已废弃，无需填写
     */
    public $TaskAlarmStatus;

    /**
     * @param string $TaskId 任务Id
     * @param string $ProjectId 项目Id
     * @param integer $TaskAlarmStatus 已废弃，无需填写
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskAlarmStatus",$param) and $param["TaskAlarmStatus"] !== null) {
            $this->TaskAlarmStatus = $param["TaskAlarmStatus"];
        }
    }
}
