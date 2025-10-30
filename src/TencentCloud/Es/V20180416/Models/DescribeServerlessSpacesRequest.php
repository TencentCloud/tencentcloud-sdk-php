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
 * DescribeServerlessSpaces请求参数结构体
 *
 * @method array getSpaceIds() 获取过滤的空间ID
 * @method void setSpaceIds(array $SpaceIds) 设置过滤的空间ID
 * @method array getSpaceNames() 获取过滤的空间名
 * @method void setSpaceNames(array $SpaceNames) 设置过滤的空间名
 * @method string getOrder() 获取排序顺序，支持升序asc、降序desc
 * @method void setOrder(string $Order) 设置排序顺序，支持升序asc、降序desc
 * @method string getOrderBy() 获取排序字段，支持空间创建时间SpaceCreateTime
 * @method void setOrderBy(string $OrderBy) 设置排序字段，支持空间创建时间SpaceCreateTime
 * @method array getVpcIds() 获取vpcId信息数组
 * @method void setVpcIds(array $VpcIds) 设置vpcId信息数组
 * @method integer getOffset() 获取分页起始
 * @method void setOffset(integer $Offset) 设置分页起始
 * @method integer getLimit() 获取分页条数
 * @method void setLimit(integer $Limit) 设置分页条数
 * @method array getTagList() 获取标签信息
 * @method void setTagList(array $TagList) 设置标签信息
 */
class DescribeServerlessSpacesRequest extends AbstractModel
{
    /**
     * @var array 过滤的空间ID
     */
    public $SpaceIds;

    /**
     * @var array 过滤的空间名
     */
    public $SpaceNames;

    /**
     * @var string 排序顺序，支持升序asc、降序desc
     */
    public $Order;

    /**
     * @var string 排序字段，支持空间创建时间SpaceCreateTime
     */
    public $OrderBy;

    /**
     * @var array vpcId信息数组
     */
    public $VpcIds;

    /**
     * @var integer 分页起始
     */
    public $Offset;

    /**
     * @var integer 分页条数
     */
    public $Limit;

    /**
     * @var array 标签信息
     */
    public $TagList;

    /**
     * @param array $SpaceIds 过滤的空间ID
     * @param array $SpaceNames 过滤的空间名
     * @param string $Order 排序顺序，支持升序asc、降序desc
     * @param string $OrderBy 排序字段，支持空间创建时间SpaceCreateTime
     * @param array $VpcIds vpcId信息数组
     * @param integer $Offset 分页起始
     * @param integer $Limit 分页条数
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
        if (array_key_exists("SpaceIds",$param) and $param["SpaceIds"] !== null) {
            $this->SpaceIds = $param["SpaceIds"];
        }

        if (array_key_exists("SpaceNames",$param) and $param["SpaceNames"] !== null) {
            $this->SpaceNames = $param["SpaceNames"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
