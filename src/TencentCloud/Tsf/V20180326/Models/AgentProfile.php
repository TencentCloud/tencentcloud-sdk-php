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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署javaagent的类型、版本信息
 *
 * @method string getAgentType() 获取Agent类型
 * @method void setAgentType(string $AgentType) 设置Agent类型
 * @method string getAgentVersion() 获取Agent版本号
 * @method void setAgentVersion(string $AgentVersion) 设置Agent版本号
 */
class AgentProfile extends AbstractModel
{
    /**
     * @var string Agent类型
     */
    public $AgentType;

    /**
     * @var string Agent版本号
     */
    public $AgentVersion;

    /**
     * @param string $AgentType Agent类型
     * @param string $AgentVersion Agent版本号
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

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }
    }
}
