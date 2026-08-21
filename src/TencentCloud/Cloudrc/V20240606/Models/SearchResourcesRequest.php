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
namespace TencentCloud\Cloudrc\V20240606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchResources请求参数结构体
 *
 * @method string getViewId() 获取<p>视图ID</p>
 * @method void setViewId(string $ViewId) 设置<p>视图ID</p>
 * @method integer getMaxResults() 获取<p>每页返回的最大记录数</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每页返回的最大记录数</p>
 * @method string getNextToken() 获取<p>分页Token，首次查询不传</p>
 * @method void setNextToken(string $NextToken) 设置<p>分页Token，首次查询不传</p>
 * @method array getFilters() 获取<p>过滤条件列表</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件列表</p>
 * @method string getSortBy() 获取<p>排序条件</p><p>枚举值：</p><ul><li>CreateTime： 表示按资源创建时间排序</li><li>ExpireTime： 表示按资源到期时间排序</li><li>IpAddress： 表示按资源IP地址排序</li></ul>
 * @method void setSortBy(string $SortBy) 设置<p>排序条件</p><p>枚举值：</p><ul><li>CreateTime： 表示按资源创建时间排序</li><li>ExpireTime： 表示按资源到期时间排序</li><li>IpAddress： 表示按资源IP地址排序</li></ul>
 * @method string getSortOrder() 获取<p>排序顺序</p><p>枚举值：</p><ul><li>Asc： 升序</li><li>Desc： 降序</li></ul><p>默认值：Asc</p>
 * @method void setSortOrder(string $SortOrder) 设置<p>排序顺序</p><p>枚举值：</p><ul><li>Asc： 升序</li><li>Desc： 降序</li></ul><p>默认值：Asc</p>
 */
class SearchResourcesRequest extends AbstractModel
{
    /**
     * @var string <p>视图ID</p>
     */
    public $ViewId;

    /**
     * @var integer <p>每页返回的最大记录数</p>
     */
    public $MaxResults;

    /**
     * @var string <p>分页Token，首次查询不传</p>
     */
    public $NextToken;

    /**
     * @var array <p>过滤条件列表</p>
     */
    public $Filters;

    /**
     * @var string <p>排序条件</p><p>枚举值：</p><ul><li>CreateTime： 表示按资源创建时间排序</li><li>ExpireTime： 表示按资源到期时间排序</li><li>IpAddress： 表示按资源IP地址排序</li></ul>
     */
    public $SortBy;

    /**
     * @var string <p>排序顺序</p><p>枚举值：</p><ul><li>Asc： 升序</li><li>Desc： 降序</li></ul><p>默认值：Asc</p>
     */
    public $SortOrder;

    /**
     * @param string $ViewId <p>视图ID</p>
     * @param integer $MaxResults <p>每页返回的最大记录数</p>
     * @param string $NextToken <p>分页Token，首次查询不传</p>
     * @param array $Filters <p>过滤条件列表</p>
     * @param string $SortBy <p>排序条件</p><p>枚举值：</p><ul><li>CreateTime： 表示按资源创建时间排序</li><li>ExpireTime： 表示按资源到期时间排序</li><li>IpAddress： 表示按资源IP地址排序</li></ul>
     * @param string $SortOrder <p>排序顺序</p><p>枚举值：</p><ul><li>Asc： 升序</li><li>Desc： 降序</li></ul><p>默认值：Asc</p>
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
        if (array_key_exists("ViewId",$param) and $param["ViewId"] !== null) {
            $this->ViewId = $param["ViewId"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ExtendedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
