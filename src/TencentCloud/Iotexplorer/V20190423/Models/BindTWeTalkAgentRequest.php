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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindTWeTalkAgent请求参数结构体
 *
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getAgentId() 获取<p>智能体 ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>智能体 ID</p>
 * @method string getBindingScope() 获取<p>绑定维度：product 或 device</p>
 * @method void setBindingScope(string $BindingScope) 设置<p>绑定维度：product 或 device</p>
 * @method string getDeviceName() 获取<p>设备名称；<code>BindingScope=device</code> 时必填</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称；<code>BindingScope=device</code> 时必填</p>
 * @method integer getPriority() 获取<p>绑定优先级，数值越小优先级越高</p>
 * @method void setPriority(integer $Priority) 设置<p>绑定优先级，数值越小优先级越高</p>
 */
class BindTWeTalkAgentRequest extends AbstractModel
{
    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>智能体 ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>绑定维度：product 或 device</p>
     */
    public $BindingScope;

    /**
     * @var string <p>设备名称；<code>BindingScope=device</code> 时必填</p>
     */
    public $DeviceName;

    /**
     * @var integer <p>绑定优先级，数值越小优先级越高</p>
     */
    public $Priority;

    /**
     * @param string $ProductId <p>产品 ID</p>
     * @param string $AgentId <p>智能体 ID</p>
     * @param string $BindingScope <p>绑定维度：product 或 device</p>
     * @param string $DeviceName <p>设备名称；<code>BindingScope=device</code> 时必填</p>
     * @param integer $Priority <p>绑定优先级，数值越小优先级越高</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("BindingScope",$param) and $param["BindingScope"] !== null) {
            $this->BindingScope = $param["BindingScope"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
