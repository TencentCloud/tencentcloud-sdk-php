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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMEventSearchSummary返回参数结构体
 *
 * @method array getCategoryCounts() 获取<p>各分类窗口计数，Key 为分类 id</p>
 * @method void setCategoryCounts(array $CategoryCounts) 设置<p>各分类窗口计数，Key 为分类 id</p>
 * @method integer getTotal() 获取<p>当前分类窗口条数</p>
 * @method void setTotal(integer $Total) 设置<p>当前分类窗口条数</p>
 * @method integer getVisitors() 获取<p>访问用户（设备）</p>
 * @method void setVisitors(integer $Visitors) 设置<p>访问用户（设备）</p>
 * @method integer getUsers() 获取<p>业务用户</p>
 * @method void setUsers(integer $Users) 设置<p>业务用户</p>
 * @method integer getIntervalSec() 获取<p>实际分桶秒数</p>
 * @method void setIntervalSec(integer $IntervalSec) 设置<p>实际分桶秒数</p>
 * @method array getSeries() 获取<p>分桶趋势</p>
 * @method void setSeries(array $Series) 设置<p>分桶趋势</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTDEMEventSearchSummaryResponse extends AbstractModel
{
    /**
     * @var array <p>各分类窗口计数，Key 为分类 id</p>
     */
    public $CategoryCounts;

    /**
     * @var integer <p>当前分类窗口条数</p>
     */
    public $Total;

    /**
     * @var integer <p>访问用户（设备）</p>
     */
    public $Visitors;

    /**
     * @var integer <p>业务用户</p>
     */
    public $Users;

    /**
     * @var integer <p>实际分桶秒数</p>
     */
    public $IntervalSec;

    /**
     * @var array <p>分桶趋势</p>
     */
    public $Series;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CategoryCounts <p>各分类窗口计数，Key 为分类 id</p>
     * @param integer $Total <p>当前分类窗口条数</p>
     * @param integer $Visitors <p>访问用户（设备）</p>
     * @param integer $Users <p>业务用户</p>
     * @param integer $IntervalSec <p>实际分桶秒数</p>
     * @param array $Series <p>分桶趋势</p>
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
        if (array_key_exists("CategoryCounts",$param) and $param["CategoryCounts"] !== null) {
            $this->CategoryCounts = [];
            foreach ($param["CategoryCounts"] as $key => $value){
                $obj = new IntKeyValue();
                $obj->deserialize($value);
                array_push($this->CategoryCounts, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Visitors",$param) and $param["Visitors"] !== null) {
            $this->Visitors = $param["Visitors"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("IntervalSec",$param) and $param["IntervalSec"] !== null) {
            $this->IntervalSec = $param["IntervalSec"];
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = [];
            foreach ($param["Series"] as $key => $value){
                $obj = new EventSearchSeriesPoint();
                $obj->deserialize($value);
                array_push($this->Series, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
