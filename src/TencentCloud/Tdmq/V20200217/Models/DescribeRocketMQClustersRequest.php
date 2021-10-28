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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQClusters请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 * @method string getIdKeyword() 获取按照集群ID关键字搜索
 * @method void setIdKeyword(string $IdKeyword) 设置按照集群ID关键字搜索
 * @method string getNameKeyword() 获取按照集群名称关键字搜索
 * @method void setNameKeyword(string $NameKeyword) 设置按照集群名称关键字搜索
 * @method array getClusterIdList() 获取集群ID列表过滤
 * @method void setClusterIdList(array $ClusterIdList) 设置集群ID列表过滤
 * @method boolean getIsTagFilter() 获取标签过滤查找时，需要设置为true
 * @method void setIsTagFilter(boolean $IsTagFilter) 设置标签过滤查找时，需要设置为true
 * @method array getFilters() 获取过滤器。目前支持标签过滤。
 * @method void setFilters(array $Filters) 设置过滤器。目前支持标签过滤。
 */
class DescribeRocketMQClustersRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @var string 按照集群ID关键字搜索
     */
    public $IdKeyword;

    /**
     * @var string 按照集群名称关键字搜索
     */
    public $NameKeyword;

    /**
     * @var array 集群ID列表过滤
     */
    public $ClusterIdList;

    /**
     * @var boolean 标签过滤查找时，需要设置为true
     */
    public $IsTagFilter;

    /**
     * @var array 过滤器。目前支持标签过滤。
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制数目
     * @param string $IdKeyword 按照集群ID关键字搜索
     * @param string $NameKeyword 按照集群名称关键字搜索
     * @param array $ClusterIdList 集群ID列表过滤
     * @param boolean $IsTagFilter 标签过滤查找时，需要设置为true
     * @param array $Filters 过滤器。目前支持标签过滤。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("IdKeyword",$param) and $param["IdKeyword"] !== null) {
            $this->IdKeyword = $param["IdKeyword"];
        }

        if (array_key_exists("NameKeyword",$param) and $param["NameKeyword"] !== null) {
            $this->NameKeyword = $param["NameKeyword"];
        }

        if (array_key_exists("ClusterIdList",$param) and $param["ClusterIdList"] !== null) {
            $this->ClusterIdList = $param["ClusterIdList"];
        }

        if (array_key_exists("IsTagFilter",$param) and $param["IsTagFilter"] !== null) {
            $this->IsTagFilter = $param["IsTagFilter"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
