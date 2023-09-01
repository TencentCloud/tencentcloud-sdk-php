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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAgentSwitch请求参数结构体
 *
 * @method string getAgentId() 获取Agent标识。
 * @method void setAgentId(string $AgentId) 设置Agent标识。
 * @method string getSwitch() 获取停止或重连Agent，支持值包括："on" - 重连Agent， "off" - 停止Agent。
 * @method void setSwitch(string $Switch) 设置停止或重连Agent，支持值包括："on" - 重连Agent， "off" - 停止Agent。
 * @method string getProduct() 获取服务产品类型，仅支持 "dbbrain-mysql" - 自建MySQL。
 * @method void setProduct(string $Product) 设置服务产品类型，仅支持 "dbbrain-mysql" - 自建MySQL。
 */
class UpdateAgentSwitchRequest extends AbstractModel
{
    /**
     * @var string Agent标识。
     */
    public $AgentId;

    /**
     * @var string 停止或重连Agent，支持值包括："on" - 重连Agent， "off" - 停止Agent。
     */
    public $Switch;

    /**
     * @var string 服务产品类型，仅支持 "dbbrain-mysql" - 自建MySQL。
     */
    public $Product;

    /**
     * @param string $AgentId Agent标识。
     * @param string $Switch 停止或重连Agent，支持值包括："on" - 重连Agent， "off" - 停止Agent。
     * @param string $Product 服务产品类型，仅支持 "dbbrain-mysql" - 自建MySQL。
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

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
