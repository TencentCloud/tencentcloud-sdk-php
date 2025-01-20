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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询nat路由的返回路由对象
 *
 * @method string getDestinationCidrBlock() 获取子网的 `IPv4` `CIDR`
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置子网的 `IPv4` `CIDR`
 * @method string getGatewayType() 获取下一跳网关的类型，目前此接口支持的类型有：
DIRECTCONNECT：专线网关
 * @method void setGatewayType(string $GatewayType) 设置下一跳网关的类型，目前此接口支持的类型有：
DIRECTCONNECT：专线网关
 * @method string getGatewayId() 获取下一跳网关ID
 * @method void setGatewayId(string $GatewayId) 设置下一跳网关ID
 * @method string getCreateTime() 获取路由的创建时间
 * @method void setCreateTime(string $CreateTime) 设置路由的创建时间
 * @method string getUpdateTime() 获取路由的更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置路由的更新时间
 */
class NatDirectConnectGatewayRoute extends AbstractModel
{
    /**
     * @var string 子网的 `IPv4` `CIDR`
     */
    public $DestinationCidrBlock;

    /**
     * @var string 下一跳网关的类型，目前此接口支持的类型有：
DIRECTCONNECT：专线网关
     */
    public $GatewayType;

    /**
     * @var string 下一跳网关ID
     */
    public $GatewayId;

    /**
     * @var string 路由的创建时间
     */
    public $CreateTime;

    /**
     * @var string 路由的更新时间
     */
    public $UpdateTime;

    /**
     * @param string $DestinationCidrBlock 子网的 `IPv4` `CIDR`
     * @param string $GatewayType 下一跳网关的类型，目前此接口支持的类型有：
DIRECTCONNECT：专线网关
     * @param string $GatewayId 下一跳网关ID
     * @param string $CreateTime 路由的创建时间
     * @param string $UpdateTime 路由的更新时间
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
        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
