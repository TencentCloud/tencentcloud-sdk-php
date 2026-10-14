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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流运行实例基本信息
 *
 * @method string getAppId() 获取应用ID
 * @method void setAppId(string $AppId) 设置应用ID
 * @method string getWorkflowRunId() 获取工作流运行实例的ID	
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置工作流运行实例的ID	
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 */
class WorkflowRunProfile extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $AppId;

    /**
     * @var string 工作流运行实例的ID	
     */
    public $WorkflowRunId;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @param string $AppId 应用ID
     * @param string $WorkflowRunId 工作流运行实例的ID	
     * @param string $WorkflowId 工作流ID
     * @param string $Name 名称
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
