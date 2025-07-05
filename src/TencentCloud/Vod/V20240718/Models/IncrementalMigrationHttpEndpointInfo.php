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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增量迁移源站地址信息。
 *
 * @method string getEndpoint() 获取地址信息，支持域名或 IP 地址。
 * @method void setEndpoint(string $Endpoint) 设置地址信息，支持域名或 IP 地址。
 * @method array getStandbyEndpointSet() 获取备份地址信息。
 * @method void setStandbyEndpointSet(array $StandbyEndpointSet) 设置备份地址信息。
 */
class IncrementalMigrationHttpEndpointInfo extends AbstractModel
{
    /**
     * @var string 地址信息，支持域名或 IP 地址。
     */
    public $Endpoint;

    /**
     * @var array 备份地址信息。
     */
    public $StandbyEndpointSet;

    /**
     * @param string $Endpoint 地址信息，支持域名或 IP 地址。
     * @param array $StandbyEndpointSet 备份地址信息。
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
        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("StandbyEndpointSet",$param) and $param["StandbyEndpointSet"] !== null) {
            $this->StandbyEndpointSet = $param["StandbyEndpointSet"];
        }
    }
}
