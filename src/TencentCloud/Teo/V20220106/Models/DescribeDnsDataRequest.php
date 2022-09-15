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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDnsData请求参数结构体
 *
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method array getFilters() 获取过滤参数
 * @method void setFilters(array $Filters) 设置过滤参数
 * @method string getInterval() 获取时间粒度，默认为1分钟粒度，服务端根据时间范围自适应。
支持指定以下几种粒度：
min：1分钟粒度
5min：5分钟粒度
hour：1小时粒度
day：天粒度
 * @method void setInterval(string $Interval) 设置时间粒度，默认为1分钟粒度，服务端根据时间范围自适应。
支持指定以下几种粒度：
min：1分钟粒度
5min：5分钟粒度
hour：1小时粒度
day：天粒度
 */
class DescribeDnsDataRequest extends AbstractModel
{
    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var array 过滤参数
     */
    public $Filters;

    /**
     * @var string 时间粒度，默认为1分钟粒度，服务端根据时间范围自适应。
支持指定以下几种粒度：
min：1分钟粒度
5min：5分钟粒度
hour：1小时粒度
day：天粒度
     */
    public $Interval;

    /**
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
     * @param array $Filters 过滤参数
     * @param string $Interval 时间粒度，默认为1分钟粒度，服务端根据时间范围自适应。
支持指定以下几种粒度：
min：1分钟粒度
5min：5分钟粒度
hour：1小时粒度
day：天粒度
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new DnsDataFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
