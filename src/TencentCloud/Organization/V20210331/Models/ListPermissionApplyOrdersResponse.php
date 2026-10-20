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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListPermissionApplyOrders返回参数结构体
 *
 * @method array getApplyOrders() 获取<p>申请单列表</p>
 * @method void setApplyOrders(array $ApplyOrders) 设置<p>申请单列表</p>
 * @method integer getTotalCounts() 获取<p>总数</p>
 * @method void setTotalCounts(integer $TotalCounts) 设置<p>总数</p>
 * @method string getNextToken() 获取<p>翻页游标</p>
 * @method void setNextToken(string $NextToken) 设置<p>翻页游标</p>
 * @method boolean getIsTruncated() 获取<p>是否还有下一页</p>
 * @method void setIsTruncated(boolean $IsTruncated) 设置<p>是否还有下一页</p>
 * @method integer getMaxResults() 获取<p>每页条数</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每页条数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListPermissionApplyOrdersResponse extends AbstractModel
{
    /**
     * @var array <p>申请单列表</p>
     */
    public $ApplyOrders;

    /**
     * @var integer <p>总数</p>
     */
    public $TotalCounts;

    /**
     * @var string <p>翻页游标</p>
     */
    public $NextToken;

    /**
     * @var boolean <p>是否还有下一页</p>
     */
    public $IsTruncated;

    /**
     * @var integer <p>每页条数</p>
     */
    public $MaxResults;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ApplyOrders <p>申请单列表</p>
     * @param integer $TotalCounts <p>总数</p>
     * @param string $NextToken <p>翻页游标</p>
     * @param boolean $IsTruncated <p>是否还有下一页</p>
     * @param integer $MaxResults <p>每页条数</p>
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
        if (array_key_exists("ApplyOrders",$param) and $param["ApplyOrders"] !== null) {
            $this->ApplyOrders = [];
            foreach ($param["ApplyOrders"] as $key => $value){
                $obj = new PermissionApplyOrder();
                $obj->deserialize($value);
                array_push($this->ApplyOrders, $obj);
            }
        }

        if (array_key_exists("TotalCounts",$param) and $param["TotalCounts"] !== null) {
            $this->TotalCounts = $param["TotalCounts"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("IsTruncated",$param) and $param["IsTruncated"] !== null) {
            $this->IsTruncated = $param["IsTruncated"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
