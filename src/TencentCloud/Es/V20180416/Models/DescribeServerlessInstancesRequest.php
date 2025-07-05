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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServerlessInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取索引集群ID
 * @method void setInstanceIds(array $InstanceIds) 设置索引集群ID
 * @method array getIndexNames() 获取索引名
 * @method void setIndexNames(array $IndexNames) 设置索引名
 * @method integer getOffset() 获取分页起始位置
 * @method void setOffset(integer $Offset) 设置分页起始位置
 * @method integer getLimit() 获取一页展示数量
 * @method void setLimit(integer $Limit) 设置一页展示数量
 * @method string getOrderBy() 获取排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime
 * @method void setOrderBy(string $OrderBy) 设置排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime
 * @method array getIndexStatusList() 获取过滤索引状态
 * @method void setIndexStatusList(array $IndexStatusList) 设置过滤索引状态
 * @method string getOrder() 获取排序顺序，支持asc、desc，默认为desc
 * @method void setOrder(string $Order) 设置排序顺序，支持asc、desc，默认为desc
 * @method array getSpaceIds() 获取索引空间ID列表
 * @method void setSpaceIds(array $SpaceIds) 设置索引空间ID列表
 * @method array getDiSourceTypes() 获取数据链路数据源类型
 * @method void setDiSourceTypes(array $DiSourceTypes) 设置数据链路数据源类型
 * @method array getTagList() 获取标签信息
 * @method void setTagList(array $TagList) 设置标签信息
 */
class DescribeServerlessInstancesRequest extends AbstractModel
{
    /**
     * @var array 索引集群ID
     */
    public $InstanceIds;

    /**
     * @var array 索引名
     */
    public $IndexNames;

    /**
     * @var integer 分页起始位置
     */
    public $Offset;

    /**
     * @var integer 一页展示数量
     */
    public $Limit;

    /**
     * @var string 排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime
     */
    public $OrderBy;

    /**
     * @var array 过滤索引状态
     */
    public $IndexStatusList;

    /**
     * @var string 排序顺序，支持asc、desc，默认为desc
     */
    public $Order;

    /**
     * @var array 索引空间ID列表
     */
    public $SpaceIds;

    /**
     * @var array 数据链路数据源类型
     */
    public $DiSourceTypes;

    /**
     * @var array 标签信息
     */
    public $TagList;

    /**
     * @param array $InstanceIds 索引集群ID
     * @param array $IndexNames 索引名
     * @param integer $Offset 分页起始位置
     * @param integer $Limit 一页展示数量
     * @param string $OrderBy 排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime
     * @param array $IndexStatusList 过滤索引状态
     * @param string $Order 排序顺序，支持asc、desc，默认为desc
     * @param array $SpaceIds 索引空间ID列表
     * @param array $DiSourceTypes 数据链路数据源类型
     * @param array $TagList 标签信息
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("IndexNames",$param) and $param["IndexNames"] !== null) {
            $this->IndexNames = $param["IndexNames"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("IndexStatusList",$param) and $param["IndexStatusList"] !== null) {
            $this->IndexStatusList = $param["IndexStatusList"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("SpaceIds",$param) and $param["SpaceIds"] !== null) {
            $this->SpaceIds = $param["SpaceIds"];
        }

        if (array_key_exists("DiSourceTypes",$param) and $param["DiSourceTypes"] !== null) {
            $this->DiSourceTypes = $param["DiSourceTypes"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
