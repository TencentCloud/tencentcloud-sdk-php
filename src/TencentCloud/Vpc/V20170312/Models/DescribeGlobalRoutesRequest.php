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
 * DescribeGlobalRoutes请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。
<li>global-route-id - String - （过滤条件）如全局路由唯一 Id，形如：gr-bmenrwu2。</li>
<li>vpc-id - String - （过滤条件）VPC唯一Id， 形如： vpc-mcqaoy0f。</li>
<li>gateway-id - String - （过滤条件）下一跳对象。</li>
<li>gateway-type - String -  是否必填：否 - （过滤条件）按下一跳类型进行过滤。支持 NORMAL_CVM
</li>
<li>cdc-id - String - （过滤条件）CDC实例ID，形如：cluster-gbo27yc4。</li>
<li>description - String - （过滤条件）描述。</li>
<li>dest-cidr - String - （过滤条件）Ipv4目标网段。</li>
<li>subnet-route-algorithm - String - （过滤条件）支持的 ECMP算法有：

   - ECMP_QUINTUPLE_HASH：五元组hash
   - ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash
   - ECMP_DESTINATION_IP_HASH：目的IP hash
   - ECMP_SOURCE_IP_HASH：源IP hash
</li>

 * @method void setFilters(array $Filters) 设置过滤条件。
<li>global-route-id - String - （过滤条件）如全局路由唯一 Id，形如：gr-bmenrwu2。</li>
<li>vpc-id - String - （过滤条件）VPC唯一Id， 形如： vpc-mcqaoy0f。</li>
<li>gateway-id - String - （过滤条件）下一跳对象。</li>
<li>gateway-type - String -  是否必填：否 - （过滤条件）按下一跳类型进行过滤。支持 NORMAL_CVM
</li>
<li>cdc-id - String - （过滤条件）CDC实例ID，形如：cluster-gbo27yc4。</li>
<li>description - String - （过滤条件）描述。</li>
<li>dest-cidr - String - （过滤条件）Ipv4目标网段。</li>
<li>subnet-route-algorithm - String - （过滤条件）支持的 ECMP算法有：

   - ECMP_QUINTUPLE_HASH：五元组hash
   - ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash
   - ECMP_DESTINATION_IP_HASH：目的IP hash
   - ECMP_SOURCE_IP_HASH：源IP hash
</li>

 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取请求对象个数。
 * @method void setLimit(integer $Limit) 设置请求对象个数。
 * @method array getGlobalRouteIds() 获取全局路由唯一Id列表。
 * @method void setGlobalRouteIds(array $GlobalRouteIds) 设置全局路由唯一Id列表。
 */
class DescribeGlobalRoutesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。
<li>global-route-id - String - （过滤条件）如全局路由唯一 Id，形如：gr-bmenrwu2。</li>
<li>vpc-id - String - （过滤条件）VPC唯一Id， 形如： vpc-mcqaoy0f。</li>
<li>gateway-id - String - （过滤条件）下一跳对象。</li>
<li>gateway-type - String -  是否必填：否 - （过滤条件）按下一跳类型进行过滤。支持 NORMAL_CVM
</li>
<li>cdc-id - String - （过滤条件）CDC实例ID，形如：cluster-gbo27yc4。</li>
<li>description - String - （过滤条件）描述。</li>
<li>dest-cidr - String - （过滤条件）Ipv4目标网段。</li>
<li>subnet-route-algorithm - String - （过滤条件）支持的 ECMP算法有：

   - ECMP_QUINTUPLE_HASH：五元组hash
   - ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash
   - ECMP_DESTINATION_IP_HASH：目的IP hash
   - ECMP_SOURCE_IP_HASH：源IP hash
</li>

     */
    public $Filters;

    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var integer 请求对象个数。
     */
    public $Limit;

    /**
     * @var array 全局路由唯一Id列表。
     */
    public $GlobalRouteIds;

    /**
     * @param array $Filters 过滤条件。
<li>global-route-id - String - （过滤条件）如全局路由唯一 Id，形如：gr-bmenrwu2。</li>
<li>vpc-id - String - （过滤条件）VPC唯一Id， 形如： vpc-mcqaoy0f。</li>
<li>gateway-id - String - （过滤条件）下一跳对象。</li>
<li>gateway-type - String -  是否必填：否 - （过滤条件）按下一跳类型进行过滤。支持 NORMAL_CVM
</li>
<li>cdc-id - String - （过滤条件）CDC实例ID，形如：cluster-gbo27yc4。</li>
<li>description - String - （过滤条件）描述。</li>
<li>dest-cidr - String - （过滤条件）Ipv4目标网段。</li>
<li>subnet-route-algorithm - String - （过滤条件）支持的 ECMP算法有：

   - ECMP_QUINTUPLE_HASH：五元组hash
   - ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash
   - ECMP_DESTINATION_IP_HASH：目的IP hash
   - ECMP_SOURCE_IP_HASH：源IP hash
</li>

     * @param integer $Offset 偏移量。
     * @param integer $Limit 请求对象个数。
     * @param array $GlobalRouteIds 全局路由唯一Id列表。
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

        if (array_key_exists("GlobalRouteIds",$param) and $param["GlobalRouteIds"] !== null) {
            $this->GlobalRouteIds = $param["GlobalRouteIds"];
        }
    }
}
