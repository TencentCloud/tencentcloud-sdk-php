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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSAttackEvent请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，时间范围为 30 天。
 * @method void setStartTime(string $StartTime) 设置开始时间，时间范围为 30 天。
 * @method string getEndTime() 获取结束时间，时间范围为 30 天。
 * @method void setEndTime(string $EndTime) 设置结束时间，时间范围为 30 天。
 * @method array getPolicyIds() 获取ddos策略组集合，不填默认选择全部策略。
 * @method void setPolicyIds(array $PolicyIds) 设置ddos策略组集合，不填默认选择全部策略。
 * @method array getZoneIds() 获取站点集合，此参数必填。
 * @method void setZoneIds(array $ZoneIds) 设置站点集合，此参数必填。
 * @method integer getLimit() 获取分页查询的限制数目，默认值为20，最大查询条目为1000。
 * @method void setLimit(integer $Limit) 设置分页查询的限制数目，默认值为20，最大查询条目为1000。
 * @method integer getOffset() 获取分页的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0。
 * @method boolean getShowDetail() 获取展示攻击详情的参数，若填false，默认只返回攻击次数，不返回攻击详情；若填true，返回攻击详情。
 * @method void setShowDetail(boolean $ShowDetail) 设置展示攻击详情的参数，若填false，默认只返回攻击次数，不返回攻击详情；若填true，返回攻击详情。
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据；</li>不填默认取值为global。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据；</li>不填默认取值为global。
 * @method string getOrderBy() 获取排序字段，取值有：
<li>MaxBandWidth：带宽峰值；</li>
<li>AttackStartTime：攻击开始时间。</li>不填默认值为：AttackStartTime。
 * @method void setOrderBy(string $OrderBy) 设置排序字段，取值有：
<li>MaxBandWidth：带宽峰值；</li>
<li>AttackStartTime：攻击开始时间。</li>不填默认值为：AttackStartTime。
 * @method string getOrderType() 获取排序方式，取值有：
<li>asc：升序方式；</li>
<li>desc：降序方式。</li>不填默认值为：desc。
 * @method void setOrderType(string $OrderType) 设置排序方式，取值有：
<li>asc：升序方式；</li>
<li>desc：降序方式。</li>不填默认值为：desc。
 */
class DescribeDDoSAttackEventRequest extends AbstractModel
{
    /**
     * @var string 开始时间，时间范围为 30 天。
     */
    public $StartTime;

    /**
     * @var string 结束时间，时间范围为 30 天。
     */
    public $EndTime;

    /**
     * @var array ddos策略组集合，不填默认选择全部策略。
     */
    public $PolicyIds;

    /**
     * @var array 站点集合，此参数必填。
     */
    public $ZoneIds;

    /**
     * @var integer 分页查询的限制数目，默认值为20，最大查询条目为1000。
     */
    public $Limit;

    /**
     * @var integer 分页的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var boolean 展示攻击详情的参数，若填false，默认只返回攻击次数，不返回攻击详情；若填true，返回攻击详情。
     */
    public $ShowDetail;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据；</li>不填默认取值为global。
     */
    public $Area;

    /**
     * @var string 排序字段，取值有：
<li>MaxBandWidth：带宽峰值；</li>
<li>AttackStartTime：攻击开始时间。</li>不填默认值为：AttackStartTime。
     */
    public $OrderBy;

    /**
     * @var string 排序方式，取值有：
<li>asc：升序方式；</li>
<li>desc：降序方式。</li>不填默认值为：desc。
     */
    public $OrderType;

    /**
     * @param string $StartTime 开始时间，时间范围为 30 天。
     * @param string $EndTime 结束时间，时间范围为 30 天。
     * @param array $PolicyIds ddos策略组集合，不填默认选择全部策略。
     * @param array $ZoneIds 站点集合，此参数必填。
     * @param integer $Limit 分页查询的限制数目，默认值为20，最大查询条目为1000。
     * @param integer $Offset 分页的偏移量，默认值为0。
     * @param boolean $ShowDetail 展示攻击详情的参数，若填false，默认只返回攻击次数，不返回攻击详情；若填true，返回攻击详情。
     * @param string $Area 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据；</li>不填默认取值为global。
     * @param string $OrderBy 排序字段，取值有：
<li>MaxBandWidth：带宽峰值；</li>
<li>AttackStartTime：攻击开始时间。</li>不填默认值为：AttackStartTime。
     * @param string $OrderType 排序方式，取值有：
<li>asc：升序方式；</li>
<li>desc：降序方式。</li>不填默认值为：desc。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ShowDetail",$param) and $param["ShowDetail"] !== null) {
            $this->ShowDetail = $param["ShowDetail"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
