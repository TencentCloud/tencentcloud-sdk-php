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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TurnOnStandaloneGateway请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getGatewayName() 获取网关名称
 * @method void setGatewayName(string $GatewayName) 设置网关名称
 * @method array getServiceNameList() 获取服务名称列表
 * @method void setServiceNameList(array $ServiceNameList) 设置服务名称列表
 */
class TurnOnStandaloneGatewayRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 网关名称
     */
    public $GatewayName;

    /**
     * @var array 服务名称列表
     */
    public $ServiceNameList;

    /**
     * @param string $EnvId 环境ID
     * @param string $GatewayName 网关名称
     * @param array $ServiceNameList 服务名称列表
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("ServiceNameList",$param) and $param["ServiceNameList"] !== null) {
            $this->ServiceNameList = $param["ServiceNameList"];
        }
    }
}
