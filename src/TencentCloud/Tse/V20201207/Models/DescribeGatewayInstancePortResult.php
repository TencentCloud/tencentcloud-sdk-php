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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取云原生API网关实例协议端口列表响应结果
 *
 * @method string getGatewayId() 获取云原生API网关ID
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关ID
 * @method array getGatewayInstancePortList() 获取网关实例协议端口列表
 * @method void setGatewayInstancePortList(array $GatewayInstancePortList) 设置网关实例协议端口列表
 */
class DescribeGatewayInstancePortResult extends AbstractModel
{
    /**
     * @var string 云原生API网关ID
     */
    public $GatewayId;

    /**
     * @var array 网关实例协议端口列表
     */
    public $GatewayInstancePortList;

    /**
     * @param string $GatewayId 云原生API网关ID
     * @param array $GatewayInstancePortList 网关实例协议端口列表
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

        if (array_key_exists("GatewayInstancePortList",$param) and $param["GatewayInstancePortList"] !== null) {
            $this->GatewayInstancePortList = [];
            foreach ($param["GatewayInstancePortList"] as $key => $value){
                $obj = new GatewayInstanceSchemeAndPorts();
                $obj->deserialize($value);
                array_push($this->GatewayInstancePortList, $obj);
            }
        }
    }
}
