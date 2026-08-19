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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdrExcludeNetworkSegments返回参数结构体
 *
 * @method array getNetworkSegments() 获取<p>例外网段列表，支持IP/IP段/CIDR格式</p>
 * @method void setNetworkSegments(array $NetworkSegments) 设置<p>例外网段列表，支持IP/IP段/CIDR格式</p>
 * @method integer getTotalCount() 获取<p>网段数量</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>网段数量</p>
 * @method array getDefaultNetworkSegments() 获取<p>默认网段配置</p>
 * @method void setDefaultNetworkSegments(array $DefaultNetworkSegments) 设置<p>默认网段配置</p>
 * @method boolean getIsModified() 获取<p>是否修改过</p>
 * @method void setIsModified(boolean $IsModified) 设置<p>是否修改过</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEdrExcludeNetworkSegmentsResponse extends AbstractModel
{
    /**
     * @var array <p>例外网段列表，支持IP/IP段/CIDR格式</p>
     */
    public $NetworkSegments;

    /**
     * @var integer <p>网段数量</p>
     */
    public $TotalCount;

    /**
     * @var array <p>默认网段配置</p>
     */
    public $DefaultNetworkSegments;

    /**
     * @var boolean <p>是否修改过</p>
     */
    public $IsModified;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $NetworkSegments <p>例外网段列表，支持IP/IP段/CIDR格式</p>
     * @param integer $TotalCount <p>网段数量</p>
     * @param array $DefaultNetworkSegments <p>默认网段配置</p>
     * @param boolean $IsModified <p>是否修改过</p>
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
        if (array_key_exists("NetworkSegments",$param) and $param["NetworkSegments"] !== null) {
            $this->NetworkSegments = $param["NetworkSegments"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DefaultNetworkSegments",$param) and $param["DefaultNetworkSegments"] !== null) {
            $this->DefaultNetworkSegments = [];
            foreach ($param["DefaultNetworkSegments"] as $key => $value){
                $obj = new NetworkSegment();
                $obj->deserialize($value);
                array_push($this->DefaultNetworkSegments, $obj);
            }
        }

        if (array_key_exists("IsModified",$param) and $param["IsModified"] !== null) {
            $this->IsModified = $param["IsModified"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
