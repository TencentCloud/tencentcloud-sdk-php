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
 * DescribeSandboxSnapshotList请求参数结构体
 *
 * @method array getSnapshotIds() 获取<p>待查询的沙箱快照 ID 列表</p>
 * @method void setSnapshotIds(array $SnapshotIds) 设置<p>待查询的沙箱快照 ID 列表</p>
 * @method array getFilters() 获取<p>过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p>
 * @method integer getOffset() 获取<p>偏移量，与 NextToken 参数互斥</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，与 NextToken 参数互斥</p>
 * @method integer getLimit() 获取<p>返回数量上限</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量上限</p>
 * @method string getNextToken() 获取<p>分页偏移 token，与 Offset 参数互斥</p>
 * @method void setNextToken(string $NextToken) 设置<p>分页偏移 token，与 Offset 参数互斥</p>
 * @method integer getMaxResults() 获取<p>每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。</p>
 */
class DescribeSandboxSnapshotListRequest extends AbstractModel
{
    /**
     * @var array <p>待查询的沙箱快照 ID 列表</p>
     */
    public $SnapshotIds;

    /**
     * @var array <p>过滤条件</p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，与 NextToken 参数互斥</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量上限</p>
     */
    public $Limit;

    /**
     * @var string <p>分页偏移 token，与 Offset 参数互斥</p>
     */
    public $NextToken;

    /**
     * @var integer <p>每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。</p>
     */
    public $MaxResults;

    /**
     * @param array $SnapshotIds <p>待查询的沙箱快照 ID 列表</p>
     * @param array $Filters <p>过滤条件</p>
     * @param integer $Offset <p>偏移量，与 NextToken 参数互斥</p>
     * @param integer $Limit <p>返回数量上限</p>
     * @param string $NextToken <p>分页偏移 token，与 Offset 参数互斥</p>
     * @param integer $MaxResults <p>每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。</p>
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
        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
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

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
    }
}
