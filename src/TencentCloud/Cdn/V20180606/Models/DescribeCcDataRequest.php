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
 * DescribeCcData请求参数结构体
 *
 * @method string getStartTime() 获取查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
 * @method void setStartTime(string $StartTime) 设置查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
 * @method string getEndTime() 获取查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
 * @method void setEndTime(string $EndTime) 设置查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
 * @method string getInterval() 获取时间粒度，支持以下几种模式：
min：1 分钟粒度，指定查询区间 24 小时内（含 24 小时），可返回 1 分钟粒度明细数据
5min：5 分钟粒度，指定查询区间 31 天内（含 31 天），可返回 5 分钟粒度明细数据
hour：1 小时粒度，指定查询区间 31 天内（含 31 天），可返回 1 小时粒度明细数据
day：天粒度，指定查询区间大于 31 天，可返回天粒度明细数据
 * @method void setInterval(string $Interval) 设置时间粒度，支持以下几种模式：
min：1 分钟粒度，指定查询区间 24 小时内（含 24 小时），可返回 1 分钟粒度明细数据
5min：5 分钟粒度，指定查询区间 31 天内（含 31 天），可返回 5 分钟粒度明细数据
hour：1 小时粒度，指定查询区间 31 天内（含 31 天），可返回 1 小时粒度明细数据
day：天粒度，指定查询区间大于 31 天，可返回天粒度明细数据
 * @method string getDomain() 获取指定域名查询，为空时，表示查询账号级别数据
 * @method void setDomain(string $Domain) 设置指定域名查询，为空时，表示查询账号级别数据
 * @method string getActionName() 获取执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
为空时，表示所有执行动作
 * @method void setActionName(string $ActionName) 设置执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
为空时，表示所有执行动作
 * @method array getDomains() 获取指定域名列表查询，为空时，表示查询账号级别数据
 * @method void setDomains(array $Domains) 设置指定域名列表查询，为空时，表示查询账号级别数据
 * @method string getSource() 获取cdn表示CDN数据，默认值
ecdn表示ECDN数据
 * @method void setSource(string $Source) 设置cdn表示CDN数据，默认值
ecdn表示ECDN数据
 * @method string getArea() 获取地域：mainland或overseas，表示国内或海外，不填写默认表示国内
 * @method void setArea(string $Area) 设置地域：mainland或overseas，表示国内或海外，不填写默认表示国内
 */
class DescribeCcDataRequest extends AbstractModel
{
    /**
     * @var string 查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
     */
    public $EndTime;

    /**
     * @var string 时间粒度，支持以下几种模式：
min：1 分钟粒度，指定查询区间 24 小时内（含 24 小时），可返回 1 分钟粒度明细数据
5min：5 分钟粒度，指定查询区间 31 天内（含 31 天），可返回 5 分钟粒度明细数据
hour：1 小时粒度，指定查询区间 31 天内（含 31 天），可返回 1 小时粒度明细数据
day：天粒度，指定查询区间大于 31 天，可返回天粒度明细数据
     */
    public $Interval;

    /**
     * @var string 指定域名查询，为空时，表示查询账号级别数据
     */
    public $Domain;

    /**
     * @var string 执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
为空时，表示所有执行动作
     */
    public $ActionName;

    /**
     * @var array 指定域名列表查询，为空时，表示查询账号级别数据
     */
    public $Domains;

    /**
     * @var string cdn表示CDN数据，默认值
ecdn表示ECDN数据
     */
    public $Source;

    /**
     * @var string 地域：mainland或overseas，表示国内或海外，不填写默认表示国内
     */
    public $Area;

    /**
     * @param string $StartTime 查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间
     * @param string $EndTime 查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间
     * @param string $Interval 时间粒度，支持以下几种模式：
min：1 分钟粒度，指定查询区间 24 小时内（含 24 小时），可返回 1 分钟粒度明细数据
5min：5 分钟粒度，指定查询区间 31 天内（含 31 天），可返回 5 分钟粒度明细数据
hour：1 小时粒度，指定查询区间 31 天内（含 31 天），可返回 1 小时粒度明细数据
day：天粒度，指定查询区间大于 31 天，可返回天粒度明细数据
     * @param string $Domain 指定域名查询，为空时，表示查询账号级别数据
     * @param string $ActionName 执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
为空时，表示所有执行动作
     * @param array $Domains 指定域名列表查询，为空时，表示查询账号级别数据
     * @param string $Source cdn表示CDN数据，默认值
ecdn表示ECDN数据
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

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
