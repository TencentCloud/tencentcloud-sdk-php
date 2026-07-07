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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeregisterModelsFromServiceProvider请求参数结构体
 *
 * @method string getServiceProviderId() 获取<p>BYOK的ID</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>BYOK的ID</p>
 * @method array getModelAliases() 获取<p>模型别名列表</p>
 * @method void setModelAliases(array $ModelAliases) 设置<p>模型别名列表</p>
 */
class DeregisterModelsFromServiceProviderRequest extends AbstractModel
{
    /**
     * @var string <p>BYOK的ID</p>
     */
    public $ServiceProviderId;

    /**
     * @var array <p>模型别名列表</p>
     */
    public $ModelAliases;

    /**
     * @param string $ServiceProviderId <p>BYOK的ID</p>
     * @param array $ModelAliases <p>模型别名列表</p>
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
        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("ModelAliases",$param) and $param["ModelAliases"] !== null) {
            $this->ModelAliases = $param["ModelAliases"];
        }
    }
}
