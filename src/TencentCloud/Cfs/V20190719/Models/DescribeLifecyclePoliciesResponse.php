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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLifecyclePolicies返回参数结构体
 *
 * @method integer getPageNumber() 获取列表的分页页码
 * @method void setPageNumber(integer $PageNumber) 设置列表的分页页码
 * @method integer getPageSize() 获取每个分页包含的生命周期管理策略个数
 * @method void setPageSize(integer $PageSize) 设置每个分页包含的生命周期管理策略个数
 * @method integer getTotalCount() 获取生命周期管理策略总数
 * @method void setTotalCount(integer $TotalCount) 设置生命周期管理策略总数
 * @method array getLifecyclePolicies() 获取生命周期管理策略列表
 * @method void setLifecyclePolicies(array $LifecyclePolicies) 设置生命周期管理策略列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLifecyclePoliciesResponse extends AbstractModel
{
    /**
     * @var integer 列表的分页页码
     */
    public $PageNumber;

    /**
     * @var integer 每个分页包含的生命周期管理策略个数
     */
    public $PageSize;

    /**
     * @var integer 生命周期管理策略总数
     */
    public $TotalCount;

    /**
     * @var array 生命周期管理策略列表
     */
    public $LifecyclePolicies;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PageNumber 列表的分页页码
     * @param integer $PageSize 每个分页包含的生命周期管理策略个数
     * @param integer $TotalCount 生命周期管理策略总数
     * @param array $LifecyclePolicies 生命周期管理策略列表
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("LifecyclePolicies",$param) and $param["LifecyclePolicies"] !== null) {
            $this->LifecyclePolicies = [];
            foreach ($param["LifecyclePolicies"] as $key => $value){
                $obj = new LifecyclePolicy();
                $obj->deserialize($value);
                array_push($this->LifecyclePolicies, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
