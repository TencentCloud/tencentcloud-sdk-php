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
 * PauseOpsTasksAsync请求参数结构体
 *
 * @method string getProjectId() 获取所属项目Id
 * @method void setProjectId(string $ProjectId) 设置所属项目Id
 * @method array getTaskIds() 获取任务Id列表
 * @method void setTaskIds(array $TaskIds) 设置任务Id列表
 * @method boolean getKillInstance() 获取是否需要终止已生成实例
 * @method void setKillInstance(boolean $KillInstance) 设置是否需要终止已生成实例
 */
class PauseOpsTasksAsyncRequest extends AbstractModel
{
    /**
     * @var string 所属项目Id
     */
    public $ProjectId;

    /**
     * @var array 任务Id列表
     */
    public $TaskIds;

    /**
     * @var boolean 是否需要终止已生成实例
     */
    public $KillInstance;

    /**
     * @param string $ProjectId 所属项目Id
     * @param array $TaskIds 任务Id列表
     * @param boolean $KillInstance 是否需要终止已生成实例
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

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("KillInstance",$param) and $param["KillInstance"] !== null) {
            $this->KillInstance = $param["KillInstance"];
        }
    }
}
