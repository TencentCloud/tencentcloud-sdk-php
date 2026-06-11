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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrgMemberAccountBalance返回参数结构体
 *
 * @method array getData() 获取<p>成员账户余额列表</p>
 * @method void setData(array $Data) 设置<p>成员账户余额列表</p>
 * @method integer getTotalCount() 获取<p>总记录数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总记录数</p>
 * @method integer getPageSize() 获取<p>当前页实际返回数量</p>
 * @method void setPageSize(integer $PageSize) 设置<p>当前页实际返回数量</p>
 * @method integer getPageNumber() 获取<p>当前页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>当前页码</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrgMemberAccountBalanceResponse extends AbstractModel
{
    /**
     * @var array <p>成员账户余额列表</p>
     */
    public $Data;

    /**
     * @var integer <p>总记录数</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>当前页实际返回数量</p>
     */
    public $PageSize;

    /**
     * @var integer <p>当前页码</p>
     */
    public $PageNumber;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data <p>成员账户余额列表</p>
     * @param integer $TotalCount <p>总记录数</p>
     * @param integer $PageSize <p>当前页实际返回数量</p>
     * @param integer $PageNumber <p>当前页码</p>
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new DescribeOrgMemberAccountBalanceData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
