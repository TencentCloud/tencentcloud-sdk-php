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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePreCacheImageList请求参数结构体
 *
 * @method array getFilters() 获取<p>查询过滤条件。支持 Image, ImageDigest, ImageRegistryType, Status, SourceType；不同 Filter 之间为 AND，同一 Filter 的 Values 之间为 OR。</p>
 * @method void setFilters(array $Filters) 设置<p>查询过滤条件。支持 Image, ImageDigest, ImageRegistryType, Status, SourceType；不同 Filter 之间为 AND，同一 Filter 的 Values 之间为 OR。</p>
 * @method integer getMaxResults() 获取<p>返回数据列数</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>返回数据列数</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method string getNextToken() 获取<p>NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。</p>
 * @method void setNextToken(string $NextToken) 设置<p>NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。</p>
 * @method boolean getNeedTotalCount() 获取<p>默认 false；仅控制是否返回精确总数</p>
 * @method void setNeedTotalCount(boolean $NeedTotalCount) 设置<p>默认 false；仅控制是否返回精确总数</p>
 */
class DescribePreCacheImageListRequest extends AbstractModel
{
    /**
     * @var array <p>查询过滤条件。支持 Image, ImageDigest, ImageRegistryType, Status, SourceType；不同 Filter 之间为 AND，同一 Filter 的 Values 之间为 OR。</p>
     */
    public $Filters;

    /**
     * @var integer <p>返回数据列数</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     */
    public $MaxResults;

    /**
     * @var string <p>NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。</p>
     */
    public $NextToken;

    /**
     * @var boolean <p>默认 false；仅控制是否返回精确总数</p>
     */
    public $NeedTotalCount;

    /**
     * @param array $Filters <p>查询过滤条件。支持 Image, ImageDigest, ImageRegistryType, Status, SourceType；不同 Filter 之间为 AND，同一 Filter 的 Values 之间为 OR。</p>
     * @param integer $MaxResults <p>返回数据列数</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     * @param string $NextToken <p>NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。</p>
     * @param boolean $NeedTotalCount <p>默认 false；仅控制是否返回精确总数</p>
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

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("NeedTotalCount",$param) and $param["NeedTotalCount"] !== null) {
            $this->NeedTotalCount = $param["NeedTotalCount"];
        }
    }
}
