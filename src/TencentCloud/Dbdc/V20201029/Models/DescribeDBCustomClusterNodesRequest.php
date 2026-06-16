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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBCustomClusterNodes请求参数结构体
 *
 * @method string getClusterId() 获取<p>DB Custom 集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>DB Custom 集群ID</p>
 * @method array getFilters() 获取<p>查询筛选条件。支持的条件有：</p><ul><li>node-name：DB Custom 节点名称。</li></ul>
 * @method void setFilters(array $Filters) 设置<p>查询筛选条件。支持的条件有：</p><ul><li>node-name：DB Custom 节点名称。</li></ul>
 * @method integer getOffset() 获取<p>分页偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量</p>
 * @method integer getLimit() 获取<p>返回数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 */
class DescribeDBCustomClusterNodesRequest extends AbstractModel
{
    /**
     * @var string <p>DB Custom 集群ID</p>
     */
    public $ClusterId;

    /**
     * @var array <p>查询筛选条件。支持的条件有：</p><ul><li>node-name：DB Custom 节点名称。</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>分页偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @param string $ClusterId <p>DB Custom 集群ID</p>
     * @param array $Filters <p>查询筛选条件。支持的条件有：</p><ul><li>node-name：DB Custom 节点名称。</li></ul>
     * @param integer $Offset <p>分页偏移量</p>
     * @param integer $Limit <p>返回数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
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
