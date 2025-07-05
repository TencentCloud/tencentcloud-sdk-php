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
 * DescribeSecurityIPGroupInfo请求参数结构体
 *
 * @method string getZoneId() 获取站点的 ID ，用于指定查询的站点范围。
 * @method void setZoneId(string $ZoneId) 设置站点的 ID ，用于指定查询的站点范围。
 * @method integer getLimit() 获取单次返回的最大条目数。默认值为 20 ，最大查询条目为 1000 。
 * @method void setLimit(integer $Limit) 设置单次返回的最大条目数。默认值为 20 ，最大查询条目为 1000 。
 * @method integer getOffset() 获取分页查询的起始条目偏移量。默认值为 0 。
 * @method void setOffset(integer $Offset) 设置分页查询的起始条目偏移量。默认值为 0 。
 */
class DescribeSecurityIPGroupInfoRequest extends AbstractModel
{
    /**
     * @var string 站点的 ID ，用于指定查询的站点范围。
     */
    public $ZoneId;

    /**
     * @var integer 单次返回的最大条目数。默认值为 20 ，最大查询条目为 1000 。
     */
    public $Limit;

    /**
     * @var integer 分页查询的起始条目偏移量。默认值为 0 。
     */
    public $Offset;

    /**
     * @param string $ZoneId 站点的 ID ，用于指定查询的站点范围。
     * @param integer $Limit 单次返回的最大条目数。默认值为 20 ，最大查询条目为 1000 。
     * @param integer $Offset 分页查询的起始条目偏移量。默认值为 0 。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
