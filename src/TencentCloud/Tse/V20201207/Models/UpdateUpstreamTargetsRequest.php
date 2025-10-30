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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUpstreamTargets请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例ID
 * @method void setGatewayId(string $GatewayId) 设置网关实例ID
 * @method string getName() 获取服务名称或ID
 * @method void setName(string $Name) 设置服务名称或ID
 * @method array getTargets() 获取实例列表
 * @method void setTargets(array $Targets) 设置实例列表
 */
class UpdateUpstreamTargetsRequest extends AbstractModel
{
    /**
     * @var string 网关实例ID
     */
    public $GatewayId;

    /**
     * @var string 服务名称或ID
     */
    public $Name;

    /**
     * @var array 实例列表
     */
    public $Targets;

    /**
     * @param string $GatewayId 网关实例ID
     * @param string $Name 服务名称或ID
     * @param array $Targets 实例列表
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

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new KongTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
