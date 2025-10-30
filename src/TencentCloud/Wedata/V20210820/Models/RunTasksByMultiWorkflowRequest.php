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
 * RunTasksByMultiWorkflow请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method array getWorkflowIds() 获取工作流id列表
 * @method void setWorkflowIds(array $WorkflowIds) 设置工作流id列表
 * @method integer getEnableMakeUp() 获取是否补录中间实例 0.不补录 1.补录实例
 * @method void setEnableMakeUp(integer $EnableMakeUp) 设置是否补录中间实例 0.不补录 1.补录实例
 */
class RunTasksByMultiWorkflowRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var array 工作流id列表
     */
    public $WorkflowIds;

    /**
     * @var integer 是否补录中间实例 0.不补录 1.补录实例
     */
    public $EnableMakeUp;

    /**
     * @param string $ProjectId 项目id
     * @param array $WorkflowIds 工作流id列表
     * @param integer $EnableMakeUp 是否补录中间实例 0.不补录 1.补录实例
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

        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }

        if (array_key_exists("EnableMakeUp",$param) and $param["EnableMakeUp"] !== null) {
            $this->EnableMakeUp = $param["EnableMakeUp"];
        }
    }
}
