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
 * DownloadL4Logs请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method array getZoneIds() 获取站点 ID 集合，此参数必填。
 * @method void setZoneIds(array $ZoneIds) 设置站点 ID 集合，此参数必填。
 * @method array getProxyIds() 获取四层实例 ID 集合。
 * @method void setProxyIds(array $ProxyIds) 设置四层实例 ID 集合。
 * @method integer getLimit() 获取分页查询的限制数目，默认值为 20，最大查询条目为 300。
 * @method void setLimit(integer $Limit) 设置分页查询的限制数目，默认值为 20，最大查询条目为 300。
 * @method integer getOffset() 获取分页的偏移量，默认值为 0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为 0。
 */
class DownloadL4LogsRequest extends AbstractModel
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
     * @var array 站点 ID 集合，此参数必填。
     */
    public $ZoneIds;

    /**
     * @var array 四层实例 ID 集合。
     */
    public $ProxyIds;

    /**
     * @var integer 分页查询的限制数目，默认值为 20，最大查询条目为 300。
     */
    public $Limit;

    /**
     * @var integer 分页的偏移量，默认值为 0。
     */
    public $Offset;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param array $ZoneIds 站点 ID 集合，此参数必填。
     * @param array $ProxyIds 四层实例 ID 集合。
     * @param integer $Limit 分页查询的限制数目，默认值为 20，最大查询条目为 300。
     * @param integer $Offset 分页的偏移量，默认值为 0。
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

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
