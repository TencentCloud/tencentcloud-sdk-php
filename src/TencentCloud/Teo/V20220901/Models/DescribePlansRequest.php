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
 * DescribePlans请求参数结构体
 *
 * @method array getFilters() 获取过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<li>plan-type<br>  按照【<strong>套餐类型</strong>】进行过滤。<br>  可选的类型有：<br>  plan-trial：试用版套餐；<br>  plan-personal：个人版套餐；<br>  plan-basic：基础版套餐； <br>  plan-standard：标准版套餐； <br>  plan-enterprise：企业版套餐。 </li><li>plan-id<br>  按照【<strong>套餐 ID</strong>】进行过滤。套餐 ID 形如：edgeone-268z103ob0sx。</li><li>area<br>  按照【<strong>套餐加速地域</strong>】进行过滤。</li>  服务区域，可选的类型有：<br>  mainland: 中国大陆；<br>  overseas: 全球（不包括中国大陆)；<br>  global: 全球（包括中国大陆)。<br><li>status<br>  按照【<strong>套餐状态</strong>】进行过滤。<br>  可选的状态有：<br>  normal：正常状态；<br>  expiring-soon：即将过期；<br>  expired：已到期;<br>  isolated：已隔离。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<li>plan-type<br>  按照【<strong>套餐类型</strong>】进行过滤。<br>  可选的类型有：<br>  plan-trial：试用版套餐；<br>  plan-personal：个人版套餐；<br>  plan-basic：基础版套餐； <br>  plan-standard：标准版套餐； <br>  plan-enterprise：企业版套餐。 </li><li>plan-id<br>  按照【<strong>套餐 ID</strong>】进行过滤。套餐 ID 形如：edgeone-268z103ob0sx。</li><li>area<br>  按照【<strong>套餐加速地域</strong>】进行过滤。</li>  服务区域，可选的类型有：<br>  mainland: 中国大陆；<br>  overseas: 全球（不包括中国大陆)；<br>  global: 全球（包括中国大陆)。<br><li>status<br>  按照【<strong>套餐状态</strong>】进行过滤。<br>  可选的状态有：<br>  normal：正常状态；<br>  expiring-soon：即将过期；<br>  expired：已到期;<br>  isolated：已隔离。</li>
 * @method string getOrder() 获取排序字段，取值有：
<li> enable-time：生效时间；</li>
<li> expire-time：过期时间。</li>不填写使用默认值 enable-time。
 * @method void setOrder(string $Order) 设置排序字段，取值有：
<li> enable-time：生效时间；</li>
<li> expire-time：过期时间。</li>不填写使用默认值 enable-time。
 * @method string getDirection() 获取排序方向，取值有：
<li>asc：从小到大排序；</li>
<li>desc：从大到小排序。</li>不填写使用默认值 desc。
 * @method void setDirection(string $Direction) 设置排序方向，取值有：
<li>asc：从小到大排序；</li>
<li>desc：从大到小排序。</li>不填写使用默认值 desc。
 * @method integer getLimit() 获取分页查询限制数目。默认值：20，最大值：200。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目。默认值：20，最大值：200。
 * @method integer getOffset() 获取分页查询偏移量。默认值：0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量。默认值：0。
 */
class DescribePlansRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<li>plan-type<br>  按照【<strong>套餐类型</strong>】进行过滤。<br>  可选的类型有：<br>  plan-trial：试用版套餐；<br>  plan-personal：个人版套餐；<br>  plan-basic：基础版套餐； <br>  plan-standard：标准版套餐； <br>  plan-enterprise：企业版套餐。 </li><li>plan-id<br>  按照【<strong>套餐 ID</strong>】进行过滤。套餐 ID 形如：edgeone-268z103ob0sx。</li><li>area<br>  按照【<strong>套餐加速地域</strong>】进行过滤。</li>  服务区域，可选的类型有：<br>  mainland: 中国大陆；<br>  overseas: 全球（不包括中国大陆)；<br>  global: 全球（包括中国大陆)。<br><li>status<br>  按照【<strong>套餐状态</strong>】进行过滤。<br>  可选的状态有：<br>  normal：正常状态；<br>  expiring-soon：即将过期；<br>  expired：已到期;<br>  isolated：已隔离。</li>
     */
    public $Filters;

    /**
     * @var string 排序字段，取值有：
<li> enable-time：生效时间；</li>
<li> expire-time：过期时间。</li>不填写使用默认值 enable-time。
     */
    public $Order;

    /**
     * @var string 排序方向，取值有：
<li>asc：从小到大排序；</li>
<li>desc：从大到小排序。</li>不填写使用默认值 desc。
     */
    public $Direction;

    /**
     * @var integer 分页查询限制数目。默认值：20，最大值：200。
     */
    public $Limit;

    /**
     * @var integer 分页查询偏移量。默认值：0。
     */
    public $Offset;

    /**
     * @param array $Filters 过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<li>plan-type<br>  按照【<strong>套餐类型</strong>】进行过滤。<br>  可选的类型有：<br>  plan-trial：试用版套餐；<br>  plan-personal：个人版套餐；<br>  plan-basic：基础版套餐； <br>  plan-standard：标准版套餐； <br>  plan-enterprise：企业版套餐。 </li><li>plan-id<br>  按照【<strong>套餐 ID</strong>】进行过滤。套餐 ID 形如：edgeone-268z103ob0sx。</li><li>area<br>  按照【<strong>套餐加速地域</strong>】进行过滤。</li>  服务区域，可选的类型有：<br>  mainland: 中国大陆；<br>  overseas: 全球（不包括中国大陆)；<br>  global: 全球（包括中国大陆)。<br><li>status<br>  按照【<strong>套餐状态</strong>】进行过滤。<br>  可选的状态有：<br>  normal：正常状态；<br>  expiring-soon：即将过期；<br>  expired：已到期;<br>  isolated：已隔离。</li>
     * @param string $Order 排序字段，取值有：
<li> enable-time：生效时间；</li>
<li> expire-time：过期时间。</li>不填写使用默认值 enable-time。
     * @param string $Direction 排序方向，取值有：
<li>asc：从小到大排序；</li>
<li>desc：从大到小排序。</li>不填写使用默认值 desc。
     * @param integer $Limit 分页查询限制数目。默认值：20，最大值：200。
     * @param integer $Offset 分页查询偏移量。默认值：0。
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
