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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 需要配置特定回源 IP 网段回源的实例。
 *
 * @method string getType() 获取实例类型，取值有：
- l7：七层加速域名；
- l4：四层代理实例。
 * @method void setType(string $Type) 设置实例类型，取值有：
- l7：七层加速域名；
- l4：四层代理实例。
 * @method array getInstances() 获取实例详情，取值有：
- 当 Type = l7 时，请填写七层加速域名；
- 当 Type = l4 时，请填写四层代理实例 ID。
 * @method void setInstances(array $Instances) 设置实例详情，取值有：
- 当 Type = l7 时，请填写七层加速域名；
- 当 Type = l4 时，请填写四层代理实例 ID。
 * @method string getOperationMode() 获取操作模式，取值有：
<li>enable：启用；</li>
<li>disable：停用。</li>
 * @method void setOperationMode(string $OperationMode) 设置操作模式，取值有：
<li>enable：启用；</li>
<li>disable：停用。</li>
 */
class OriginACLEntity extends AbstractModel
{
    /**
     * @var string 实例类型，取值有：
- l7：七层加速域名；
- l4：四层代理实例。
     */
    public $Type;

    /**
     * @var array 实例详情，取值有：
- 当 Type = l7 时，请填写七层加速域名；
- 当 Type = l4 时，请填写四层代理实例 ID。
     */
    public $Instances;

    /**
     * @var string 操作模式，取值有：
<li>enable：启用；</li>
<li>disable：停用。</li>
     */
    public $OperationMode;

    /**
     * @param string $Type 实例类型，取值有：
- l7：七层加速域名；
- l4：四层代理实例。
     * @param array $Instances 实例详情，取值有：
- 当 Type = l7 时，请填写七层加速域名；
- 当 Type = l4 时，请填写四层代理实例 ID。
     * @param string $OperationMode 操作模式，取值有：
<li>enable：启用；</li>
<li>disable：停用。</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = $param["Instances"];
        }

        if (array_key_exists("OperationMode",$param) and $param["OperationMode"] !== null) {
            $this->OperationMode = $param["OperationMode"];
        }
    }
}
