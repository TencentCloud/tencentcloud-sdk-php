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
 * DescribeTrafficPackages请求参数结构体
 *
 * @method array getTrafficPackageIds() 获取共享流量包ID，支持批量
 * @method void setTrafficPackageIds(array $TrafficPackageIds) 设置共享流量包ID，支持批量
 * @method array getFilters() 获取每次请求的`Filters`的上限为10。参数不支持同时指定`TrafficPackageIds`和`Filters`。详细的过滤条件如下：
<li> traffic-package_id - String - 是否必填：否 - （过滤条件）按照共享流量包的唯一标识ID过滤。</li>
<li> traffic-package-name - String - 是否必填：否 - （过滤条件）按照共享流量包名称过滤。不支持模糊过滤。</li>
<li> status - String - 是否必填：否 - （过滤条件）按照共享流量包状态过滤。可选状态：[AVAILABLE|EXPIRED|EXHAUSTED]</li>
 * @method void setFilters(array $Filters) 设置每次请求的`Filters`的上限为10。参数不支持同时指定`TrafficPackageIds`和`Filters`。详细的过滤条件如下：
<li> traffic-package_id - String - 是否必填：否 - （过滤条件）按照共享流量包的唯一标识ID过滤。</li>
<li> traffic-package-name - String - 是否必填：否 - （过滤条件）按照共享流量包名称过滤。不支持模糊过滤。</li>
<li> status - String - 是否必填：否 - （过滤条件）按照共享流量包状态过滤。可选状态：[AVAILABLE|EXPIRED|EXHAUSTED]</li>
 * @method integer getOffset() 获取分页参数
 * @method void setOffset(integer $Offset) 设置分页参数
 * @method integer getLimit() 获取分页参数
 * @method void setLimit(integer $Limit) 设置分页参数
 */
class DescribeTrafficPackagesRequest extends AbstractModel
{
    /**
     * @var array 共享流量包ID，支持批量
     */
    public $TrafficPackageIds;

    /**
     * @var array 每次请求的`Filters`的上限为10。参数不支持同时指定`TrafficPackageIds`和`Filters`。详细的过滤条件如下：
<li> traffic-package_id - String - 是否必填：否 - （过滤条件）按照共享流量包的唯一标识ID过滤。</li>
<li> traffic-package-name - String - 是否必填：否 - （过滤条件）按照共享流量包名称过滤。不支持模糊过滤。</li>
<li> status - String - 是否必填：否 - （过滤条件）按照共享流量包状态过滤。可选状态：[AVAILABLE|EXPIRED|EXHAUSTED]</li>
     */
    public $Filters;

    /**
     * @var integer 分页参数
     */
    public $Offset;

    /**
     * @var integer 分页参数
     */
    public $Limit;

    /**
     * @param array $TrafficPackageIds 共享流量包ID，支持批量
     * @param array $Filters 每次请求的`Filters`的上限为10。参数不支持同时指定`TrafficPackageIds`和`Filters`。详细的过滤条件如下：
<li> traffic-package_id - String - 是否必填：否 - （过滤条件）按照共享流量包的唯一标识ID过滤。</li>
<li> traffic-package-name - String - 是否必填：否 - （过滤条件）按照共享流量包名称过滤。不支持模糊过滤。</li>
<li> status - String - 是否必填：否 - （过滤条件）按照共享流量包状态过滤。可选状态：[AVAILABLE|EXPIRED|EXHAUSTED]</li>
     * @param integer $Offset 分页参数
     * @param integer $Limit 分页参数
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
        if (array_key_exists("TrafficPackageIds",$param) and $param["TrafficPackageIds"] !== null) {
            $this->TrafficPackageIds = $param["TrafficPackageIds"];
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
