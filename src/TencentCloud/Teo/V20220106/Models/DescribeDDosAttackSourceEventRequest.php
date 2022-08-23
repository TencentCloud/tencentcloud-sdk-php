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
 * DescribeDDosAttackSourceEvent请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method integer getPageSize() 获取分页拉取的最大返回结果数。最大值：1000。
 * @method void setPageSize(integer $PageSize) 设置分页拉取的最大返回结果数。最大值：1000。
 * @method integer getPageNo() 获取分页拉取的起始页号。最小值：1。
 * @method void setPageNo(integer $PageNo) 设置分页拉取的起始页号。最小值：1。
 * @method array getPolicyIds() 获取ddos策略组id 集合，不填默认选择全部策略id。
 * @method void setPolicyIds(array $PolicyIds) 设置ddos策略组id 集合，不填默认选择全部策略id。
 * @method array getZoneIds() 获取站点集合，不填默认选择全部站点。
 * @method void setZoneIds(array $ZoneIds) 设置站点集合，不填默认选择全部站点。
 * @method string getProtocolType() 获取协议类型，取值有：
<li>tcp ；</li>
<li>udp ；</li>
<li>all 。</li>
 * @method void setProtocolType(string $ProtocolType) 设置协议类型，取值有：
<li>tcp ；</li>
<li>udp ；</li>
<li>all 。</li>
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
 */
class DescribeDDosAttackSourceEventRequest extends AbstractModel
{
    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var integer 分页拉取的最大返回结果数。最大值：1000。
     */
    public $PageSize;

    /**
     * @var integer 分页拉取的起始页号。最小值：1。
     */
    public $PageNo;

    /**
     * @var array ddos策略组id 集合，不填默认选择全部策略id。
     */
    public $PolicyIds;

    /**
     * @var array 站点集合，不填默认选择全部站点。
     */
    public $ZoneIds;

    /**
     * @var string 协议类型，取值有：
<li>tcp ；</li>
<li>udp ；</li>
<li>all 。</li>
     */
    public $ProtocolType;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
     */
    public $Area;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param integer $PageSize 分页拉取的最大返回结果数。最大值：1000。
     * @param integer $PageNo 分页拉取的起始页号。最小值：1。
     * @param array $PolicyIds ddos策略组id 集合，不填默认选择全部策略id。
     * @param array $ZoneIds 站点集合，不填默认选择全部站点。
     * @param string $ProtocolType 协议类型，取值有：
<li>tcp ；</li>
<li>udp ；</li>
<li>all 。</li>
     * @param string $Area 数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
