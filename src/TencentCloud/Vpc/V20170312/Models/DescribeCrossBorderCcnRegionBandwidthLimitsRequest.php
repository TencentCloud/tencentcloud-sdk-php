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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCrossBorderCcnRegionBandwidthLimits请求参数结构体
 *
 * @method array getFilters() 获取过滤条件，目前`value`值个数只支持一个，可支持的字段有：
<li>`source-region` 源地域，值形如：`["ap-guangzhou"]`</li> <li>`destination-region` 目的地域，值形如：`["ap-shanghai"]`</li> <li>`ccn-ids` 云联网ID数组，值形如：`["ccn-12345678"]`</li> <li>`user-account-id` 用户账号ID，值形如`["12345678"]`</li>
 * @method void setFilters(array $Filters) 设置过滤条件，目前`value`值个数只支持一个，可支持的字段有：
<li>`source-region` 源地域，值形如：`["ap-guangzhou"]`</li> <li>`destination-region` 目的地域，值形如：`["ap-shanghai"]`</li> <li>`ccn-ids` 云联网ID数组，值形如：`["ccn-12345678"]`</li> <li>`user-account-id` 用户账号ID，值形如`["12345678"]`</li>
 * @method integer getOffset() 获取偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认0。
 * @method integer getLimit() 获取单页返回数据量可选值0到100之间的整数，默认20。
 * @method void setLimit(integer $Limit) 设置单页返回数据量可选值0到100之间的整数，默认20。
 */
class DescribeCrossBorderCcnRegionBandwidthLimitsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，目前`value`值个数只支持一个，可支持的字段有：
<li>`source-region` 源地域，值形如：`["ap-guangzhou"]`</li> <li>`destination-region` 目的地域，值形如：`["ap-shanghai"]`</li> <li>`ccn-ids` 云联网ID数组，值形如：`["ccn-12345678"]`</li> <li>`user-account-id` 用户账号ID，值形如`["12345678"]`</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认0。
     */
    public $Offset;

    /**
     * @var integer 单页返回数据量可选值0到100之间的整数，默认20。
     */
    public $Limit;

    /**
     * @param array $Filters 过滤条件，目前`value`值个数只支持一个，可支持的字段有：
<li>`source-region` 源地域，值形如：`["ap-guangzhou"]`</li> <li>`destination-region` 目的地域，值形如：`["ap-shanghai"]`</li> <li>`ccn-ids` 云联网ID数组，值形如：`["ccn-12345678"]`</li> <li>`user-account-id` 用户账号ID，值形如`["12345678"]`</li>
     * @param integer $Offset 偏移量，默认0。
     * @param integer $Limit 单页返回数据量可选值0到100之间的整数，默认20。
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
