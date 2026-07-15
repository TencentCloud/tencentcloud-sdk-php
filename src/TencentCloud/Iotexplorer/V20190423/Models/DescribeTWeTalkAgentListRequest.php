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
 * DescribeTWeTalkAgentList请求参数结构体
 *
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名称，设备级绑定查询时使用</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称，设备级绑定查询时使用</p>
 * @method string getBindingScope() 获取<p>绑定维度：product 或 device</p>
 * @method void setBindingScope(string $BindingScope) 设置<p>绑定维度：product 或 device</p>
 * @method string getAgentId() 获取<p>智能体 ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>智能体 ID</p>
 * @method string getInstanceId() 获取<p>实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID</p>
 * @method string getName() 获取<p>智能体名称筛选</p>
 * @method void setName(string $Name) 设置<p>智能体名称筛选</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>返回数量，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，最大 100</p>
 */
class DescribeTWeTalkAgentListRequest extends AbstractModel
{
    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称，设备级绑定查询时使用</p>
     */
    public $DeviceName;

    /**
     * @var string <p>绑定维度：product 或 device</p>
     */
    public $BindingScope;

    /**
     * @var string <p>智能体 ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>智能体名称筛选</p>
     */
    public $Name;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，最大 100</p>
     */
    public $Limit;

    /**
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名称，设备级绑定查询时使用</p>
     * @param string $BindingScope <p>绑定维度：product 或 device</p>
     * @param string $AgentId <p>智能体 ID</p>
     * @param string $InstanceId <p>实例 ID</p>
     * @param string $Name <p>智能体名称筛选</p>
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>返回数量，最大 100</p>
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

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("BindingScope",$param) and $param["BindingScope"] !== null) {
            $this->BindingScope = $param["BindingScope"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
