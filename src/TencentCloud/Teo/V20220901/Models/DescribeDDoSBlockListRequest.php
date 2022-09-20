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
 * DescribeDDoSBlockList请求参数结构体
 *
 * @method string getStartTime() 获取攻击事件起始时间。
 * @method void setStartTime(string $StartTime) 设置攻击事件起始时间。
 * @method array getEventIds() 获取攻击事件列表。
 * @method void setEventIds(array $EventIds) 设置攻击事件列表。
 * @method array getZoneIds() 获取站点列表，不填默认选择全部站点。
 * @method void setZoneIds(array $ZoneIds) 设置站点列表，不填默认选择全部站点。
 * @method array getPolicyIds() 获取策略列表，不填默认选择全部策略。
 * @method void setPolicyIds(array $PolicyIds) 设置策略列表，不填默认选择全部策略。
 * @method integer getLimit() 获取分页查询的限制数目，默认值为20，最大查询条目为1000。
 * @method void setLimit(integer $Limit) 设置分页查询的限制数目，默认值为20，最大查询条目为1000。
 * @method integer getOffset() 获取分页的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0。
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
 */
class DescribeDDoSBlockListRequest extends AbstractModel
{
    /**
     * @var string 攻击事件起始时间。
     */
    public $StartTime;

    /**
     * @var array 攻击事件列表。
     */
    public $EventIds;

    /**
     * @var array 站点列表，不填默认选择全部站点。
     */
    public $ZoneIds;

    /**
     * @var array 策略列表，不填默认选择全部策略。
     */
    public $PolicyIds;

    /**
     * @var integer 分页查询的限制数目，默认值为20，最大查询条目为1000。
     */
    public $Limit;

    /**
     * @var integer 分页的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
     */
    public $Area;

    /**
     * @param string $StartTime 攻击事件起始时间。
     * @param array $EventIds 攻击事件列表。
     * @param array $ZoneIds 站点列表，不填默认选择全部站点。
     * @param array $PolicyIds 策略列表，不填默认选择全部策略。
     * @param integer $Limit 分页查询的限制数目，默认值为20，最大查询条目为1000。
     * @param integer $Offset 分页的偏移量，默认值为0。
     * @param string $Area 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
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

        if (array_key_exists("EventIds",$param) and $param["EventIds"] !== null) {
            $this->EventIds = $param["EventIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
