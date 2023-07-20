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
 * BatchRunOpsTask请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getEnableMakeUp() 获取是否补录中间实例,0不补录;1补录
 * @method void setEnableMakeUp(integer $EnableMakeUp) 设置是否补录中间实例,0不补录;1补录
 * @method array getTasks() 获取任务id列表
 * @method void setTasks(array $Tasks) 设置任务id列表
 */
class BatchRunOpsTaskRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 是否补录中间实例,0不补录;1补录
     */
    public $EnableMakeUp;

    /**
     * @var array 任务id列表
     */
    public $Tasks;

    /**
     * @param string $ProjectId 项目id
     * @param integer $EnableMakeUp 是否补录中间实例,0不补录;1补录
     * @param array $Tasks 任务id列表
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

        if (array_key_exists("EnableMakeUp",$param) and $param["EnableMakeUp"] !== null) {
            $this->EnableMakeUp = $param["EnableMakeUp"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = $param["Tasks"];
        }
    }
}
