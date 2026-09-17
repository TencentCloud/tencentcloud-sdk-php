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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPublicNetworkInstance请求参数结构体
 *
 * @method string getNetworkInstanceId() 获取公网实例 ID
 * @method void setNetworkInstanceId(string $NetworkInstanceId) 设置公网实例 ID
 * @method string getNetworkInstanceName() 获取新实例名称
 * @method void setNetworkInstanceName(string $NetworkInstanceName) 设置新实例名称
 */
class ModifyPublicNetworkInstanceRequest extends AbstractModel
{
    /**
     * @var string 公网实例 ID
     */
    public $NetworkInstanceId;

    /**
     * @var string 新实例名称
     */
    public $NetworkInstanceName;

    /**
     * @param string $NetworkInstanceId 公网实例 ID
     * @param string $NetworkInstanceName 新实例名称
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }
    }
}
