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
 * DescribeSecurityIPGroupContent返回参数结构体
 *
 * @method integer getIPTotalCount() 获取IP 组中正在生效的 IP 或网段个数。
 * @method void setIPTotalCount(integer $IPTotalCount) 设置IP 组中正在生效的 IP 或网段个数。
 * @method array getIPList() 获取满足查询条件的 IP 或网段列表。受 Limit 和 Offset 参数限制。
 * @method void setIPList(array $IPList) 设置满足查询条件的 IP 或网段列表。受 Limit 和 Offset 参数限制。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityIPGroupContentResponse extends AbstractModel
{
    /**
     * @var integer IP 组中正在生效的 IP 或网段个数。
     */
    public $IPTotalCount;

    /**
     * @var array 满足查询条件的 IP 或网段列表。受 Limit 和 Offset 参数限制。
     */
    public $IPList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $IPTotalCount IP 组中正在生效的 IP 或网段个数。
     * @param array $IPList 满足查询条件的 IP 或网段列表。受 Limit 和 Offset 参数限制。
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
        if (array_key_exists("IPTotalCount",$param) and $param["IPTotalCount"] !== null) {
            $this->IPTotalCount = $param["IPTotalCount"];
        }

        if (array_key_exists("IPList",$param) and $param["IPList"] !== null) {
            $this->IPList = $param["IPList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
