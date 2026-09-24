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
 * DescribeAccelerationDomains请求参数结构体
 *
 * @method string getZoneId() 获取<p>加速域名所属站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>加速域名所属站点 ID。</p>
 * @method integer getOffset() 获取<p>分页查询偏移量，默认为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询偏移量，默认为 0。</p>
 * @method integer getLimit() 获取<p>分页查询限制数目，默认值：20，上限：200。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询限制数目，默认值：20，上限：200。</p>
 * @method array getFilters() 获取<p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有域名信息。详细的过滤条件如下：</p><li>domain-name：按照加速域名进行过滤；</li><li>origin-type：按照源站类型进行过滤；</li><li>origin：按照主源站地址进行过滤；</li><li>backup-origin： 按照备用源站地址进行过滤；</li><li>domain-cname：按照 CNAME 进行过滤；</li><li>share-cname：按照共享 CNAME 进行过滤；</li>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有域名信息。详细的过滤条件如下：</p><li>domain-name：按照加速域名进行过滤；</li><li>origin-type：按照源站类型进行过滤；</li><li>origin：按照主源站地址进行过滤；</li><li>backup-origin： 按照备用源站地址进行过滤；</li><li>domain-cname：按照 CNAME 进行过滤；</li><li>share-cname：按照共享 CNAME 进行过滤；</li>
 * @method string getOrder() 获取<p>可根据该字段对返回结果进行排序，取值有：</p><li>created_on：加速域名创建时间；</li><li>domain-name：加速域名。</li>不填写时，默认对返回结果按照 domain-name 排序。
 * @method void setOrder(string $Order) 设置<p>可根据该字段对返回结果进行排序，取值有：</p><li>created_on：加速域名创建时间；</li><li>domain-name：加速域名。</li>不填写时，默认对返回结果按照 domain-name 排序。
 * @method string getDirection() 获取<p>排序方向，如果是字段值为数字，则根据数字大小排序；如果字段值为文本，则根据 ASCII 码的大小排序。取值有：</p><li>asc：升序排列；</li><li>desc：降序排列。</li>不填写使用默认值 asc。
 * @method void setDirection(string $Direction) 设置<p>排序方向，如果是字段值为数字，则根据数字大小排序；如果字段值为文本，则根据 ASCII 码的大小排序。取值有：</p><li>asc：升序排列；</li><li>desc：降序排列。</li>不填写使用默认值 asc。
 * @method string getMatch() 获取<p>匹配方式，取值有：</p><li>all：返回匹配所有查询条件的加速域名；</li><li>any：返回匹配任意一个查询条件的加速域名。</li>不填写时默认值为 all。
 * @method void setMatch(string $Match) 设置<p>匹配方式，取值有：</p><li>all：返回匹配所有查询条件的加速域名；</li><li>any：返回匹配任意一个查询条件的加速域名。</li>不填写时默认值为 all。
 */
class DescribeAccelerationDomainsRequest extends AbstractModel
{
    /**
     * @var string <p>加速域名所属站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>分页查询偏移量，默认为 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页查询限制数目，默认值：20，上限：200。</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有域名信息。详细的过滤条件如下：</p><li>domain-name：按照加速域名进行过滤；</li><li>origin-type：按照源站类型进行过滤；</li><li>origin：按照主源站地址进行过滤；</li><li>backup-origin： 按照备用源站地址进行过滤；</li><li>domain-cname：按照 CNAME 进行过滤；</li><li>share-cname：按照共享 CNAME 进行过滤；</li>
     */
    public $Filters;

    /**
     * @var string <p>可根据该字段对返回结果进行排序，取值有：</p><li>created_on：加速域名创建时间；</li><li>domain-name：加速域名。</li>不填写时，默认对返回结果按照 domain-name 排序。
     */
    public $Order;

    /**
     * @var string <p>排序方向，如果是字段值为数字，则根据数字大小排序；如果字段值为文本，则根据 ASCII 码的大小排序。取值有：</p><li>asc：升序排列；</li><li>desc：降序排列。</li>不填写使用默认值 asc。
     */
    public $Direction;

    /**
     * @var string <p>匹配方式，取值有：</p><li>all：返回匹配所有查询条件的加速域名；</li><li>any：返回匹配任意一个查询条件的加速域名。</li>不填写时默认值为 all。
     */
    public $Match;

    /**
     * @param string $ZoneId <p>加速域名所属站点 ID。</p>
     * @param integer $Offset <p>分页查询偏移量，默认为 0。</p>
     * @param integer $Limit <p>分页查询限制数目，默认值：20，上限：200。</p>
     * @param array $Filters <p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有域名信息。详细的过滤条件如下：</p><li>domain-name：按照加速域名进行过滤；</li><li>origin-type：按照源站类型进行过滤；</li><li>origin：按照主源站地址进行过滤；</li><li>backup-origin： 按照备用源站地址进行过滤；</li><li>domain-cname：按照 CNAME 进行过滤；</li><li>share-cname：按照共享 CNAME 进行过滤；</li>
     * @param string $Order <p>可根据该字段对返回结果进行排序，取值有：</p><li>created_on：加速域名创建时间；</li><li>domain-name：加速域名。</li>不填写时，默认对返回结果按照 domain-name 排序。
     * @param string $Direction <p>排序方向，如果是字段值为数字，则根据数字大小排序；如果字段值为文本，则根据 ASCII 码的大小排序。取值有：</p><li>asc：升序排列；</li><li>desc：降序排列。</li>不填写使用默认值 asc。
     * @param string $Match <p>匹配方式，取值有：</p><li>all：返回匹配所有查询条件的加速域名；</li><li>any：返回匹配任意一个查询条件的加速域名。</li>不填写时默认值为 all。
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
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

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }
    }
}
