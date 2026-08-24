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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSAttackData请求参数结构体
 *
 * @method string getStartTime() 获取<p>开始时间。时间为世界标准时间（UTC），遵循 ISO 8601 标准的日期和时间格式。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间。时间为世界标准时间（UTC），遵循 ISO 8601 标准的日期和时间格式。</p>
 * @method string getEndTime() 获取<p>结束时间。时间为世界标准时间（UTC），遵循 ISO 8601 标准的日期和时间格式。查询时间范围（<code>EndTime</code> - <code>StartTime</code>）需小于等于 31 天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间。时间为世界标准时间（UTC），遵循 ISO 8601 标准的日期和时间格式。查询时间范围（<code>EndTime</code> - <code>StartTime</code>）需小于等于 31 天。</p>
 * @method array getMetricNames() 获取<p>统计指标列表，至少填写 1 个，且不允许重复。</p><p>枚举值：</p><ul><li>ddos_attackMaxBandwidth： 攻击带宽峰值，单位 bps；</li><li>ddos_attackMaxPackageRate： 攻击包速率峰值，单位 pps；</li><li>ddos_attackBandwidth： 攻击带宽曲线，单位 bps；</li><li>ddos_attackPackageRate： 攻击包速率曲线，单位 pps。</li></ul>
 * @method void setMetricNames(array $MetricNames) 设置<p>统计指标列表，至少填写 1 个，且不允许重复。</p><p>枚举值：</p><ul><li>ddos_attackMaxBandwidth： 攻击带宽峰值，单位 bps；</li><li>ddos_attackMaxPackageRate： 攻击包速率峰值，单位 pps；</li><li>ddos_attackBandwidth： 攻击带宽曲线，单位 bps；</li><li>ddos_attackPackageRate： 攻击包速率曲线，单位 pps。</li></ul>
 * @method array getZoneIds() 获取<p>站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：<a href="https://cloud.tencent.com/document/product/1552/104902">【腾讯云 EdgeOne】云 API 变更通知</a>。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 <code>*</code> 代替，查询账号级别数据需具备本接口全部站点资源权限。</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：<a href="https://cloud.tencent.com/document/product/1552/104902">【腾讯云 EdgeOne】云 API 变更通知</a>。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 <code>*</code> 代替，查询账号级别数据需具备本接口全部站点资源权限。</p>
 * @method array getPolicyIds() 获取<p>DDoS 策略组 ID 列表，不填默认选择全部策略 ID。</p>
 * @method void setPolicyIds(array $PolicyIds) 设置<p>DDoS 策略组 ID 列表，不填默认选择全部策略 ID。</p>
 * @method string getInterval() 获取<p>查询时间粒度，不填将根据开始时间与结束时间的间隔自动推算粒度，具体为：1 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。</p><p>枚举值：</p><ul><li>min： 1 分钟；</li><li>5min： 5分钟；</li><li>hour： 1小时；</li><li>day： 1天。</li></ul>
 * @method void setInterval(string $Interval) 设置<p>查询时间粒度，不填将根据开始时间与结束时间的间隔自动推算粒度，具体为：1 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。</p><p>枚举值：</p><ul><li>min： 1 分钟；</li><li>5min： 5分钟；</li><li>hour： 1小时；</li><li>day： 1天。</li></ul>
 * @method string getArea() 获取<p>数据归属地区。</p><p>枚举值：</p><ul><li>overseas： 全球（除中国大陆地区）数据；</li><li>mainland： 中国大陆地区数据；</li><li>global： 全球数据。</li></ul><p>默认值：global</p>
 * @method void setArea(string $Area) 设置<p>数据归属地区。</p><p>枚举值：</p><ul><li>overseas： 全球（除中国大陆地区）数据；</li><li>mainland： 中国大陆地区数据；</li><li>global： 全球数据。</li></ul><p>默认值：global</p>
 * @method array getFilters() 获取<p>过滤条件，QueryCondition.Value 的集合数量上限为 20，详细的过滤条件 QueryCondition.Key 值如下：</p><li>ddos-attack-dip：按照 DDoS 攻击目的 IP 进行过滤，QueryCondition.Operator 仅支持 equals。</li>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，QueryCondition.Value 的集合数量上限为 20，详细的过滤条件 QueryCondition.Key 值如下：</p><li>ddos-attack-dip：按照 DDoS 攻击目的 IP 进行过滤，QueryCondition.Operator 仅支持 equals。</li>
 */
class DescribeDDoSAttackDataRequest extends AbstractModel
{
    /**
     * @var string <p>开始时间。时间为世界标准时间（UTC），遵循 ISO 8601 标准的日期和时间格式。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间。时间为世界标准时间（UTC），遵循 ISO 8601 标准的日期和时间格式。查询时间范围（<code>EndTime</code> - <code>StartTime</code>）需小于等于 31 天。</p>
     */
    public $EndTime;

    /**
     * @var array <p>统计指标列表，至少填写 1 个，且不允许重复。</p><p>枚举值：</p><ul><li>ddos_attackMaxBandwidth： 攻击带宽峰值，单位 bps；</li><li>ddos_attackMaxPackageRate： 攻击包速率峰值，单位 pps；</li><li>ddos_attackBandwidth： 攻击带宽曲线，单位 bps；</li><li>ddos_attackPackageRate： 攻击包速率曲线，单位 pps。</li></ul>
     */
    public $MetricNames;

    /**
     * @var array <p>站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：<a href="https://cloud.tencent.com/document/product/1552/104902">【腾讯云 EdgeOne】云 API 变更通知</a>。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 <code>*</code> 代替，查询账号级别数据需具备本接口全部站点资源权限。</p>
     */
    public $ZoneIds;

    /**
     * @var array <p>DDoS 策略组 ID 列表，不填默认选择全部策略 ID。</p>
     */
    public $PolicyIds;

    /**
     * @var string <p>查询时间粒度，不填将根据开始时间与结束时间的间隔自动推算粒度，具体为：1 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。</p><p>枚举值：</p><ul><li>min： 1 分钟；</li><li>5min： 5分钟；</li><li>hour： 1小时；</li><li>day： 1天。</li></ul>
     */
    public $Interval;

    /**
     * @var string <p>数据归属地区。</p><p>枚举值：</p><ul><li>overseas： 全球（除中国大陆地区）数据；</li><li>mainland： 中国大陆地区数据；</li><li>global： 全球数据。</li></ul><p>默认值：global</p>
     */
    public $Area;

    /**
     * @var array <p>过滤条件，QueryCondition.Value 的集合数量上限为 20，详细的过滤条件 QueryCondition.Key 值如下：</p><li>ddos-attack-dip：按照 DDoS 攻击目的 IP 进行过滤，QueryCondition.Operator 仅支持 equals。</li>
     */
    public $Filters;

    /**
     * @param string $StartTime <p>开始时间。时间为世界标准时间（UTC），遵循 ISO 8601 标准的日期和时间格式。</p>
     * @param string $EndTime <p>结束时间。时间为世界标准时间（UTC），遵循 ISO 8601 标准的日期和时间格式。查询时间范围（<code>EndTime</code> - <code>StartTime</code>）需小于等于 31 天。</p>
     * @param array $MetricNames <p>统计指标列表，至少填写 1 个，且不允许重复。</p><p>枚举值：</p><ul><li>ddos_attackMaxBandwidth： 攻击带宽峰值，单位 bps；</li><li>ddos_attackMaxPackageRate： 攻击包速率峰值，单位 pps；</li><li>ddos_attackBandwidth： 攻击带宽曲线，单位 bps；</li><li>ddos_attackPackageRate： 攻击包速率曲线，单位 pps。</li></ul>
     * @param array $ZoneIds <p>站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：<a href="https://cloud.tencent.com/document/product/1552/104902">【腾讯云 EdgeOne】云 API 变更通知</a>。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 <code>*</code> 代替，查询账号级别数据需具备本接口全部站点资源权限。</p>
     * @param array $PolicyIds <p>DDoS 策略组 ID 列表，不填默认选择全部策略 ID。</p>
     * @param string $Interval <p>查询时间粒度，不填将根据开始时间与结束时间的间隔自动推算粒度，具体为：1 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。</p><p>枚举值：</p><ul><li>min： 1 分钟；</li><li>5min： 5分钟；</li><li>hour： 1小时；</li><li>day： 1天。</li></ul>
     * @param string $Area <p>数据归属地区。</p><p>枚举值：</p><ul><li>overseas： 全球（除中国大陆地区）数据；</li><li>mainland： 中国大陆地区数据；</li><li>global： 全球数据。</li></ul><p>默认值：global</p>
     * @param array $Filters <p>过滤条件，QueryCondition.Value 的集合数量上限为 20，详细的过滤条件 QueryCondition.Key 值如下：</p><li>ddos-attack-dip：按照 DDoS 攻击目的 IP 进行过滤，QueryCondition.Operator 仅支持 equals。</li>
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

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
