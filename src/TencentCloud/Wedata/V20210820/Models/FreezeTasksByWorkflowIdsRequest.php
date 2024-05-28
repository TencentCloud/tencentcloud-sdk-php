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
 * FreezeTasksByWorkflowIds请求参数结构体
 *
 * @method array getWorkflowIds() 获取工作流id列表
 * @method void setWorkflowIds(array $WorkflowIds) 设置工作流id列表
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method boolean getKillInstance() 获取是否终止已生成的实例
 * @method void setKillInstance(boolean $KillInstance) 设置是否终止已生成的实例
 */
class FreezeTasksByWorkflowIdsRequest extends AbstractModel
{
    /**
     * @var array 工作流id列表
     */
    public $WorkflowIds;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var boolean 是否终止已生成的实例
     */
    public $KillInstance;

    /**
     * @param array $WorkflowIds 工作流id列表
     * @param string $ProjectId 项目id
     * @param boolean $KillInstance 是否终止已生成的实例
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
        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("KillInstance",$param) and $param["KillInstance"] !== null) {
            $this->KillInstance = $param["KillInstance"];
        }
    }
}
