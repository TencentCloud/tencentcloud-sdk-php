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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentConfigs请求参数结构体
 *
 * @method string getAgentVersion() 获取<p>agent的版本号</p>
 * @method void setAgentVersion(string $AgentVersion) 设置<p>agent的版本号</p>
 * @method string getAgentIp() 获取<p>agent的IP地址</p>
 * @method void setAgentIp(string $AgentIp) 设置<p>agent的IP地址</p>
 * @method array getLabels() 获取<p>机器组标签列表</p>
 * @method void setLabels(array $Labels) 设置<p>机器组标签列表</p>
 * @method string getInstanceId() 获取<p>agent的instance id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>agent的instance id</p>
 */
class DescribeAgentConfigsRequest extends AbstractModel
{
    /**
     * @var string <p>agent的版本号</p>
     */
    public $AgentVersion;

    /**
     * @var string <p>agent的IP地址</p>
     */
    public $AgentIp;

    /**
     * @var array <p>机器组标签列表</p>
     */
    public $Labels;

    /**
     * @var string <p>agent的instance id</p>
     */
    public $InstanceId;

    /**
     * @param string $AgentVersion <p>agent的版本号</p>
     * @param string $AgentIp <p>agent的IP地址</p>
     * @param array $Labels <p>机器组标签列表</p>
     * @param string $InstanceId <p>agent的instance id</p>
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
        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("AgentIp",$param) and $param["AgentIp"] !== null) {
            $this->AgentIp = $param["AgentIp"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
