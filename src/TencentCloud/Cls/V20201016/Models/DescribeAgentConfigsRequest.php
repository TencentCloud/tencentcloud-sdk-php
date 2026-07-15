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
 * @method string getAgentVersion() 获取agent的版本号
 * @method void setAgentVersion(string $AgentVersion) 设置agent的版本号
 * @method string getAgentIp() 获取agent的IP地址
 * @method void setAgentIp(string $AgentIp) 设置agent的IP地址
 * @method array getLabels() 获取机器组标签列表
 * @method void setLabels(array $Labels) 设置机器组标签列表
 * @method string getInstanceId() 获取agent的instance id
 * @method void setInstanceId(string $InstanceId) 设置agent的instance id
 */
class DescribeAgentConfigsRequest extends AbstractModel
{
    /**
     * @var string agent的版本号
     */
    public $AgentVersion;

    /**
     * @var string agent的IP地址
     */
    public $AgentIp;

    /**
     * @var array 机器组标签列表
     */
    public $Labels;

    /**
     * @var string agent的instance id
     */
    public $InstanceId;

    /**
     * @param string $AgentVersion agent的版本号
     * @param string $AgentIp agent的IP地址
     * @param array $Labels 机器组标签列表
     * @param string $InstanceId agent的instance id
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
