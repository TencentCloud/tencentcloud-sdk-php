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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityIPGroup返回参数结构体
 *
 * @method array getIPGroups() 获取安全 IP 组的详细配置信息。包含每个安全 IP 组的 ID 、名称、IP / 网段总数量、 IP / 网段列表信息和过期时间信息。
 * @method void setIPGroups(array $IPGroups) 设置安全 IP 组的详细配置信息。包含每个安全 IP 组的 ID 、名称、IP / 网段总数量、 IP / 网段列表信息和过期时间信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityIPGroupResponse extends AbstractModel
{
    /**
     * @var array 安全 IP 组的详细配置信息。包含每个安全 IP 组的 ID 、名称、IP / 网段总数量、 IP / 网段列表信息和过期时间信息。
     */
    public $IPGroups;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $IPGroups 安全 IP 组的详细配置信息。包含每个安全 IP 组的 ID 、名称、IP / 网段总数量、 IP / 网段列表信息和过期时间信息。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IPGroups",$param) and $param["IPGroups"] !== null) {
            $this->IPGroups = [];
            foreach ($param["IPGroups"] as $key => $value){
                $obj = new IPGroup();
                $obj->deserialize($value);
                array_push($this->IPGroups, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
