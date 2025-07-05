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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRansomDefenseTrend返回参数结构体
 *
 * @method integer getEventCount() 获取勒索事件数量
 * @method void setEventCount(integer $EventCount) 设置勒索事件数量
 * @method integer getIndustryCount() 获取影响行业数量
 * @method void setIndustryCount(integer $IndustryCount) 设置影响行业数量
 * @method integer getCompanyCount() 获取开通勒索的公司数量
 * @method void setCompanyCount(integer $CompanyCount) 设置开通勒索的公司数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRansomDefenseTrendResponse extends AbstractModel
{
    /**
     * @var integer 勒索事件数量
     */
    public $EventCount;

    /**
     * @var integer 影响行业数量
     */
    public $IndustryCount;

    /**
     * @var integer 开通勒索的公司数量
     */
    public $CompanyCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $EventCount 勒索事件数量
     * @param integer $IndustryCount 影响行业数量
     * @param integer $CompanyCount 开通勒索的公司数量
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
        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("IndustryCount",$param) and $param["IndustryCount"] !== null) {
            $this->IndustryCount = $param["IndustryCount"];
        }

        if (array_key_exists("CompanyCount",$param) and $param["CompanyCount"] !== null) {
            $this->CompanyCount = $param["CompanyCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
