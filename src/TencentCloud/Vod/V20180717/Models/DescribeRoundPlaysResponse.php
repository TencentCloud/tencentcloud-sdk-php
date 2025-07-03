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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoundPlays返回参数结构体
 *
 * @method integer getTotalCount() 获取符合过滤条件的轮播播单总数。已经废弃，分批次查询请请使用 ScrollToken 参数。
 * @method void setTotalCount(integer $TotalCount) 设置符合过滤条件的轮播播单总数。已经废弃，分批次查询请请使用 ScrollToken 参数。
 * @method array getRoundPlaySet() 获取轮播播单详情列表。
 * @method void setRoundPlaySet(array $RoundPlaySet) 设置轮播播单详情列表。
 * @method string getScrollToken() 获取翻页标识，当请求未返回所有数据，该字段表示下一条记录的 ID。当该字段为空，说明已无更多数据。
 * @method void setScrollToken(string $ScrollToken) 设置翻页标识，当请求未返回所有数据，该字段表示下一条记录的 ID。当该字段为空，说明已无更多数据。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRoundPlaysResponse extends AbstractModel
{
    /**
     * @var integer 符合过滤条件的轮播播单总数。已经废弃，分批次查询请请使用 ScrollToken 参数。
     * @deprecated
     */
    public $TotalCount;

    /**
     * @var array 轮播播单详情列表。
     */
    public $RoundPlaySet;

    /**
     * @var string 翻页标识，当请求未返回所有数据，该字段表示下一条记录的 ID。当该字段为空，说明已无更多数据。
     */
    public $ScrollToken;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 符合过滤条件的轮播播单总数。已经废弃，分批次查询请请使用 ScrollToken 参数。
     * @param array $RoundPlaySet 轮播播单详情列表。
     * @param string $ScrollToken 翻页标识，当请求未返回所有数据，该字段表示下一条记录的 ID。当该字段为空，说明已无更多数据。
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

        if (array_key_exists("RoundPlaySet",$param) and $param["RoundPlaySet"] !== null) {
            $this->RoundPlaySet = [];
            foreach ($param["RoundPlaySet"] as $key => $value){
                $obj = new RoundPlayInfo();
                $obj->deserialize($value);
                array_push($this->RoundPlaySet, $obj);
            }
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
