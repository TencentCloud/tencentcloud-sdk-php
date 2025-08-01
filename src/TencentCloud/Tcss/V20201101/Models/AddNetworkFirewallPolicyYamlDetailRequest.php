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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddNetworkFirewallPolicyYamlDetail请求参数结构体
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getPolicyName() 获取策略名
 * @method void setPolicyName(string $PolicyName) 设置策略名
 * @method string getYaml() 获取base64编码的networkpolicy yaml字符串
 * @method void setYaml(string $Yaml) 设置base64编码的networkpolicy yaml字符串
 * @method string getDescription() 获取策略描述
 * @method void setDescription(string $Description) 设置策略描述
 */
class AddNetworkFirewallPolicyYamlDetailRequest extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 策略名
     */
    public $PolicyName;

    /**
     * @var string base64编码的networkpolicy yaml字符串
     */
    public $Yaml;

    /**
     * @var string 策略描述
     */
    public $Description;

    /**
     * @param string $ClusterId 集群Id
     * @param string $PolicyName 策略名
     * @param string $Yaml base64编码的networkpolicy yaml字符串
     * @param string $Description 策略描述
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
