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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProtectedTelCdr返回参数结构体
 *
 * @method integer getTotalCount() 获取话单记录总数
 * @method void setTotalCount(integer $TotalCount) 设置话单记录总数
 * @method array getTelCdrs() 获取话单记录
 * @method void setTelCdrs(array $TelCdrs) 设置话单记录
 * @method array getTelCdrList() 获取话单记录
 * @method void setTelCdrList(array $TelCdrList) 设置话单记录
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProtectedTelCdrResponse extends AbstractModel
{
    /**
     * @var integer 话单记录总数
     */
    public $TotalCount;

    /**
     * @var array 话单记录
     * @deprecated
     */
    public $TelCdrs;

    /**
     * @var array 话单记录
     */
    public $TelCdrList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 话单记录总数
     * @param array $TelCdrs 话单记录
     * @param array $TelCdrList 话单记录
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

        if (array_key_exists("TelCdrs",$param) and $param["TelCdrs"] !== null) {
            $this->TelCdrs = [];
            foreach ($param["TelCdrs"] as $key => $value){
                $obj = new TelCdrInfo();
                $obj->deserialize($value);
                array_push($this->TelCdrs, $obj);
            }
        }

        if (array_key_exists("TelCdrList",$param) and $param["TelCdrList"] !== null) {
            $this->TelCdrList = [];
            foreach ($param["TelCdrList"] as $key => $value){
                $obj = new TelCdrInfo();
                $obj->deserialize($value);
                array_push($this->TelCdrList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
