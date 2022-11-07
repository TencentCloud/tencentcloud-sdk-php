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
 * CreateInLongAgent请求参数结构体
 *
 * @method integer getAgentType() 获取采集器类型，1：TKE Agent，2：BOSS SDK，默认：1
 * @method void setAgentType(integer $AgentType) 设置采集器类型，1：TKE Agent，2：BOSS SDK，默认：1
 * @method string getAgentName() 获取采集器名称
 * @method void setAgentName(string $AgentName) 设置采集器名称
 * @method string getExecutorGroupId() 获取集成资源组id
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置集成资源组id
 * @method string getProjectId() 获取WeData项目ID
 * @method void setProjectId(string $ProjectId) 设置WeData项目ID
 * @method string getTkeRegion() 获取TKE集群的地域
 * @method void setTkeRegion(string $TkeRegion) 设置TKE集群的地域
 * @method string getClusterId() 获取当AgentType为1时，必填。当AgentType为2时，不用填
 * @method void setClusterId(string $ClusterId) 设置当AgentType为1时，必填。当AgentType为2时，不用填
 */
class CreateInLongAgentRequest extends AbstractModel
{
    /**
     * @var integer 采集器类型，1：TKE Agent，2：BOSS SDK，默认：1
     */
    public $AgentType;

    /**
     * @var string 采集器名称
     */
    public $AgentName;

    /**
     * @var string 集成资源组id
     */
    public $ExecutorGroupId;

    /**
     * @var string WeData项目ID
     */
    public $ProjectId;

    /**
     * @var string TKE集群的地域
     */
    public $TkeRegion;

    /**
     * @var string 当AgentType为1时，必填。当AgentType为2时，不用填
     */
    public $ClusterId;

    /**
     * @param integer $AgentType 采集器类型，1：TKE Agent，2：BOSS SDK，默认：1
     * @param string $AgentName 采集器名称
     * @param string $ExecutorGroupId 集成资源组id
     * @param string $ProjectId WeData项目ID
     * @param string $TkeRegion TKE集群的地域
     * @param string $ClusterId 当AgentType为1时，必填。当AgentType为2时，不用填
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
        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TkeRegion",$param) and $param["TkeRegion"] !== null) {
            $this->TkeRegion = $param["TkeRegion"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
