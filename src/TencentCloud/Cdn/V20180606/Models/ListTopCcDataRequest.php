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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTopCcData请求参数结构体
 *
 * @method string getStartTime() 获取查询Top数据的开始时间，格式为：2020-01-01 00:00:00
 * @method void setStartTime(string $StartTime) 设置查询Top数据的开始时间，格式为：2020-01-01 00:00:00
 * @method string getEndTime() 获取查询Top数据的结束时间，格式为：2020-01-01 23:59:59
支持 90 天内数据查询，不传此参数，表示查当天数据
时间跨度要小于等于7天
 * @method void setEndTime(string $EndTime) 设置查询Top数据的结束时间，格式为：2020-01-01 23:59:59
支持 90 天内数据查询，不传此参数，表示查当天数据
时间跨度要小于等于7天
 * @method string getDomain() 获取域名，不传此参数，表示查询账号级别数据
 * @method void setDomain(string $Domain) 设置域名，不传此参数，表示查询账号级别数据
 * @method string getMetric() 获取统计指标：
ip_url : Top IP+URL 默认值
ua :  Top UA
 * @method void setMetric(string $Metric) 设置统计指标：
ip_url : Top IP+URL 默认值
ua :  Top UA
 * @method string getSource() 获取cdn表示CDN数据，默认值
ecdn表示ECDN数据
 * @method void setSource(string $Source) 设置cdn表示CDN数据，默认值
ecdn表示ECDN数据
 * @method array getDomains() 获取域名列表，不传此参数，表示查询账号级别数据
 * @method void setDomains(array $Domains) 设置域名列表，不传此参数，表示查询账号级别数据
 * @method string getActionName() 获取执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
为空表示查询所有执行动作数据
 * @method void setActionName(string $ActionName) 设置执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
为空表示查询所有执行动作数据
 * @method string getArea() 获取地域：mainland或overseas，表示国内或海外，不填写默认表示国内
 * @method void setArea(string $Area) 设置地域：mainland或overseas，表示国内或海外，不填写默认表示国内
 */
class ListTopCcDataRequest extends AbstractModel
{
    /**
     * @var string 查询Top数据的开始时间，格式为：2020-01-01 00:00:00
     */
    public $StartTime;

    /**
     * @var string 查询Top数据的结束时间，格式为：2020-01-01 23:59:59
支持 90 天内数据查询，不传此参数，表示查当天数据
时间跨度要小于等于7天
     */
    public $EndTime;

    /**
     * @var string 域名，不传此参数，表示查询账号级别数据
     */
    public $Domain;

    /**
     * @var string 统计指标：
ip_url : Top IP+URL 默认值
ua :  Top UA
     */
    public $Metric;

    /**
     * @var string cdn表示CDN数据，默认值
ecdn表示ECDN数据
     */
    public $Source;

    /**
     * @var array 域名列表，不传此参数，表示查询账号级别数据
     */
    public $Domains;

    /**
     * @var string 执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
为空表示查询所有执行动作数据
     */
    public $ActionName;

    /**
     * @var string 地域：mainland或overseas，表示国内或海外，不填写默认表示国内
     */
    public $Area;

    /**
     * @param string $StartTime 查询Top数据的开始时间，格式为：2020-01-01 00:00:00
     * @param string $EndTime 查询Top数据的结束时间，格式为：2020-01-01 23:59:59
支持 90 天内数据查询，不传此参数，表示查当天数据
时间跨度要小于等于7天
     * @param string $Domain 域名，不传此参数，表示查询账号级别数据
     * @param string $Metric 统计指标：
ip_url : Top IP+URL 默认值
ua :  Top UA
     * @param string $Source cdn表示CDN数据，默认值
ecdn表示ECDN数据
     * @param array $Domains 域名列表，不传此参数，表示查询账号级别数据
     * @param string $ActionName 执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
为空表示查询所有执行动作数据
     * @param string $Area 地域：mainland或overseas，表示国内或海外，不填写默认表示国内
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
