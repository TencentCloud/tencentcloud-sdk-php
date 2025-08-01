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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnboundDatasourceHouse请求参数结构体
 *
 * @method string getNetworkConnectionName() 获取网络配置名称
 * @method void setNetworkConnectionName(string $NetworkConnectionName) 设置网络配置名称
 */
class UnboundDatasourceHouseRequest extends AbstractModel
{
    /**
     * @var string 网络配置名称
     */
    public $NetworkConnectionName;

    /**
     * @param string $NetworkConnectionName 网络配置名称
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
        if (array_key_exists("NetworkConnectionName",$param) and $param["NetworkConnectionName"] !== null) {
            $this->NetworkConnectionName = $param["NetworkConnectionName"];
        }
    }
}
