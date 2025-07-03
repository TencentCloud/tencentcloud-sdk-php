<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdz\V20221123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudDedicatedZoneHosts返回参数结构体
 *
 * @method array getCloudDedicatedZoneHostsInfoSet() 获取返回Host和Host上部署的实例信息之间的关系
 * @method void setCloudDedicatedZoneHostsInfoSet(array $CloudDedicatedZoneHostsInfoSet) 设置返回Host和Host上部署的实例信息之间的关系
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudDedicatedZoneHostsResponse extends AbstractModel
{
    /**
     * @var array 返回Host和Host上部署的实例信息之间的关系
     */
    public $CloudDedicatedZoneHostsInfoSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CloudDedicatedZoneHostsInfoSet 返回Host和Host上部署的实例信息之间的关系
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
        if (array_key_exists("CloudDedicatedZoneHostsInfoSet",$param) and $param["CloudDedicatedZoneHostsInfoSet"] !== null) {
            $this->CloudDedicatedZoneHostsInfoSet = [];
            foreach ($param["CloudDedicatedZoneHostsInfoSet"] as $key => $value){
                $obj = new CloudDedicatedZoneHostsInfo();
                $obj->deserialize($value);
                array_push($this->CloudDedicatedZoneHostsInfoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
