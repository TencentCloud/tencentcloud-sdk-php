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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePostNodeResources返回参数结构体
 *
 * @method array getPodSet() 获取Pod详情
 * @method void setPodSet(array $PodSet) 设置Pod详情
 * @method array getReservedInstanceSet() 获取预留券详情
 * @method void setReservedInstanceSet(array $ReservedInstanceSet) 设置预留券详情
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePostNodeResourcesResponse extends AbstractModel
{
    /**
     * @var array Pod详情
     */
    public $PodSet;

    /**
     * @var array 预留券详情
     */
    public $ReservedInstanceSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PodSet Pod详情
     * @param array $ReservedInstanceSet 预留券详情
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
        if (array_key_exists("PodSet",$param) and $param["PodSet"] !== null) {
            $this->PodSet = [];
            foreach ($param["PodSet"] as $key => $value){
                $obj = new SuperNodeResource();
                $obj->deserialize($value);
                array_push($this->PodSet, $obj);
            }
        }

        if (array_key_exists("ReservedInstanceSet",$param) and $param["ReservedInstanceSet"] !== null) {
            $this->ReservedInstanceSet = [];
            foreach ($param["ReservedInstanceSet"] as $key => $value){
                $obj = new SuperNodeResource();
                $obj->deserialize($value);
                array_push($this->ReservedInstanceSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
