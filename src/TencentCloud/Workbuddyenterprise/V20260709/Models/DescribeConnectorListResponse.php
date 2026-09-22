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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConnectorList返回参数结构体
 *
 * @method integer getTotalCount() 获取符合条件的连接器总数
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的连接器总数
 * @method array getConnectorSet() 获取连接器列表（分页后）；连接器挂调用方主账号 UIN 下，不挂 OneID 企业
 * @method void setConnectorSet(array $ConnectorSet) 设置连接器列表（分页后）；连接器挂调用方主账号 UIN 下，不挂 OneID 企业
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConnectorListResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的连接器总数
     */
    public $TotalCount;

    /**
     * @var array 连接器列表（分页后）；连接器挂调用方主账号 UIN 下，不挂 OneID 企业
     */
    public $ConnectorSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 符合条件的连接器总数
     * @param array $ConnectorSet 连接器列表（分页后）；连接器挂调用方主账号 UIN 下，不挂 OneID 企业
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ConnectorSet",$param) and $param["ConnectorSet"] !== null) {
            $this->ConnectorSet = [];
            foreach ($param["ConnectorSet"] as $key => $value){
                $obj = new ConnectorInfo();
                $obj->deserialize($value);
                array_push($this->ConnectorSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
