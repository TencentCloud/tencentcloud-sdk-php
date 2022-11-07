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
 * UpdateInLongAgent请求参数结构体
 *
 * @method string getAgentId() 获取采集器ID
 * @method void setAgentId(string $AgentId) 设置采集器ID
 * @method string getProjectId() 获取WeData项目ID
 * @method void setProjectId(string $ProjectId) 设置WeData项目ID
 * @method string getAgentName() 获取采集器名称
 * @method void setAgentName(string $AgentName) 设置采集器名称
 * @method string getExecutorGroupId() 获取集成资源组ID
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置集成资源组ID
 */
class UpdateInLongAgentRequest extends AbstractModel
{
    /**
     * @var string 采集器ID
     */
    public $AgentId;

    /**
     * @var string WeData项目ID
     */
    public $ProjectId;

    /**
     * @var string 采集器名称
     */
    public $AgentName;

    /**
     * @var string 集成资源组ID
     */
    public $ExecutorGroupId;

    /**
     * @param string $AgentId 采集器ID
     * @param string $ProjectId WeData项目ID
     * @param string $AgentName 采集器名称
     * @param string $ExecutorGroupId 集成资源组ID
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }
    }
}
