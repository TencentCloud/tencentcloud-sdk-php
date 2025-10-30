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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeActionLibraryList请求参数结构体
 *
 * @method integer getLimit() 获取0-100
 * @method void setLimit(integer $Limit) 设置0-100
 * @method integer getOffset() 获取默认值0
 * @method void setOffset(integer $Offset) 设置默认值0
 * @method integer getObjectType() 获取对象类型ID
 * @method void setObjectType(integer $ObjectType) 设置对象类型ID
 * @method array getFilters() 获取Keyword取值{"动作名称": "a_title", "描述": "a_desc", "动作类型": "a_type", "创建时间": "a_create_time", "二级分类": "a_resource_type"}
 * @method void setFilters(array $Filters) 设置Keyword取值{"动作名称": "a_title", "描述": "a_desc", "动作类型": "a_type", "创建时间": "a_create_time", "二级分类": "a_resource_type"}
 * @method array getAttribute() 获取动作分类，1表示故障动作，2表示恢复动作
 * @method void setAttribute(array $Attribute) 设置动作分类，1表示故障动作，2表示恢复动作
 * @method array getActionIds() 获取筛选项 -动作ID
 * @method void setActionIds(array $ActionIds) 设置筛选项 -动作ID
 */
class DescribeActionLibraryListRequest extends AbstractModel
{
    /**
     * @var integer 0-100
     */
    public $Limit;

    /**
     * @var integer 默认值0
     */
    public $Offset;

    /**
     * @var integer 对象类型ID
     */
    public $ObjectType;

    /**
     * @var array Keyword取值{"动作名称": "a_title", "描述": "a_desc", "动作类型": "a_type", "创建时间": "a_create_time", "二级分类": "a_resource_type"}
     */
    public $Filters;

    /**
     * @var array 动作分类，1表示故障动作，2表示恢复动作
     */
    public $Attribute;

    /**
     * @var array 筛选项 -动作ID
     */
    public $ActionIds;

    /**
     * @param integer $Limit 0-100
     * @param integer $Offset 默认值0
     * @param integer $ObjectType 对象类型ID
     * @param array $Filters Keyword取值{"动作名称": "a_title", "描述": "a_desc", "动作类型": "a_type", "创建时间": "a_create_time", "二级分类": "a_resource_type"}
     * @param array $Attribute 动作分类，1表示故障动作，2表示恢复动作
     * @param array $ActionIds 筛选项 -动作ID
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ActionFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Attribute",$param) and $param["Attribute"] !== null) {
            $this->Attribute = $param["Attribute"];
        }

        if (array_key_exists("ActionIds",$param) and $param["ActionIds"] !== null) {
            $this->ActionIds = $param["ActionIds"];
        }
    }
}
