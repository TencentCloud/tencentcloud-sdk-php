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
 * BatchStopOpsTasks请求参数结构体
 *
 * @method array getTaskIdList() 获取批量停止任务的TaskId
 * @method void setTaskIdList(array $TaskIdList) 设置批量停止任务的TaskId
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method boolean getKillInstance() 获取是否终止已生成的实例
 * @method void setKillInstance(boolean $KillInstance) 设置是否终止已生成的实例
 * @method boolean getAsyncMode() 获取是否异步模式
 * @method void setAsyncMode(boolean $AsyncMode) 设置是否异步模式
 */
class BatchStopOpsTasksRequest extends AbstractModel
{
    /**
     * @var array 批量停止任务的TaskId
     */
    public $TaskIdList;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var boolean 是否终止已生成的实例
     */
    public $KillInstance;

    /**
     * @var boolean 是否异步模式
     */
    public $AsyncMode;

    /**
     * @param array $TaskIdList 批量停止任务的TaskId
     * @param string $ProjectId 项目Id
     * @param boolean $KillInstance 是否终止已生成的实例
     * @param boolean $AsyncMode 是否异步模式
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
        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("KillInstance",$param) and $param["KillInstance"] !== null) {
            $this->KillInstance = $param["KillInstance"];
        }

        if (array_key_exists("AsyncMode",$param) and $param["AsyncMode"] !== null) {
            $this->AsyncMode = $param["AsyncMode"];
        }
    }
}
