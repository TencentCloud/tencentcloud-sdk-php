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
 * DescribeScdnBotData请求参数结构体
 *
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getArea() 获取mainland 大陆地区 overseas境外地区
 * @method void setArea(string $Area) 设置mainland 大陆地区 overseas境外地区
 * @method string getInterval() 获取取值："2min"或者"hour"，表示查询2分钟或者1小时粒度的数据，如果查询时间范围>1天，则强制返回1小时粒度数据
 * @method void setInterval(string $Interval) 设置取值："2min"或者"hour"，表示查询2分钟或者1小时粒度的数据，如果查询时间范围>1天，则强制返回1小时粒度数据
 * @method array getDomains() 获取域名数组，多选域名时，使用此参数,不填写表示查询所有域名的数据（AppID维度数据）
 * @method void setDomains(array $Domains) 设置域名数组，多选域名时，使用此参数,不填写表示查询所有域名的数据（AppID维度数据）
 */
class DescribeScdnBotDataRequest extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string mainland 大陆地区 overseas境外地区
     */
    public $Area;

    /**
     * @var string 取值："2min"或者"hour"，表示查询2分钟或者1小时粒度的数据，如果查询时间范围>1天，则强制返回1小时粒度数据
     */
    public $Interval;

    /**
     * @var array 域名数组，多选域名时，使用此参数,不填写表示查询所有域名的数据（AppID维度数据）
     */
    public $Domains;

    /**
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $Area mainland 大陆地区 overseas境外地区
     * @param string $Interval 取值："2min"或者"hour"，表示查询2分钟或者1小时粒度的数据，如果查询时间范围>1天，则强制返回1小时粒度数据
     * @param array $Domains 域名数组，多选域名时，使用此参数,不填写表示查询所有域名的数据（AppID维度数据）
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
