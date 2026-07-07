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
 * ModifyModelAttributes请求参数结构体
 *
 * @method string getServiceProviderId() 获取<p>BYOK的ID</p><p>参数格式：byok-kot39u7j</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>BYOK的ID</p><p>参数格式：byok-kot39u7j</p>
 * @method string getServiceProviderName() 获取<p>BYOK的自定义名字</p><p>入参限制：1～256个字符</p>
 * @method void setServiceProviderName(string $ServiceProviderName) 设置<p>BYOK的自定义名字</p><p>入参限制：1～256个字符</p>
 */
class ModifyModelAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>BYOK的ID</p><p>参数格式：byok-kot39u7j</p>
     */
    public $ServiceProviderId;

    /**
     * @var string <p>BYOK的自定义名字</p><p>入参限制：1～256个字符</p>
     */
    public $ServiceProviderName;

    /**
     * @param string $ServiceProviderId <p>BYOK的ID</p><p>参数格式：byok-kot39u7j</p>
     * @param string $ServiceProviderName <p>BYOK的自定义名字</p><p>入参限制：1～256个字符</p>
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

        if (array_key_exists("ServiceProviderName",$param) and $param["ServiceProviderName"] !== null) {
            $this->ServiceProviderName = $param["ServiceProviderName"];
        }
    }
}
