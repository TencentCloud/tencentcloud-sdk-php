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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateGateway请求参数结构体
 *
 * @method string getGatewayId() 获取网关索引ID（从获取网关列表ListGateways接口中获取）	
 * @method void setGatewayId(string $GatewayId) 设置网关索引ID（从获取网关列表ListGateways接口中获取）	
 * @method string getName() 获取仅支持中文、英文、数网关名称，字、_、-，长度不超过32个字符
 * @method void setName(string $Name) 设置仅支持中文、英文、数网关名称，字、_、-，长度不超过32个字符
 * @method string getDescription() 获取网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
 * @method void setDescription(string $Description) 设置网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
 */
class UpdateGatewayRequest extends AbstractModel
{
    /**
     * @var string 网关索引ID（从获取网关列表ListGateways接口中获取）	
     */
    public $GatewayId;

    /**
     * @var string 仅支持中文、英文、数网关名称，字、_、-，长度不超过32个字符
     */
    public $Name;

    /**
     * @var string 网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
     */
    public $Description;

    /**
     * @param string $GatewayId 网关索引ID（从获取网关列表ListGateways接口中获取）	
     * @param string $Name 仅支持中文、英文、数网关名称，字、_、-，长度不超过32个字符
     * @param string $Description 网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
