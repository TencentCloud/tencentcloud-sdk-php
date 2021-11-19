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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询参数
 *
 * @method string getFilterKey() 获取查询的字段
 * @method void setFilterKey(string $FilterKey) 设置查询的字段
 * @method string getFilterValue() 获取查询的值
 * @method void setFilterValue(string $FilterValue) 设置查询的值
 * @method integer getFilterOperatorType() 获取匹配类型，枚举见pb
 * @method void setFilterOperatorType(integer $FilterOperatorType) 设置匹配类型，枚举见pb
 */
class QueryFilter extends AbstractModel
{
    /**
     * @var string 查询的字段
     */
    public $FilterKey;

    /**
     * @var string 查询的值
     */
    public $FilterValue;

    /**
     * @var integer 匹配类型，枚举见pb
     */
    public $FilterOperatorType;

    /**
     * @param string $FilterKey 查询的字段
     * @param string $FilterValue 查询的值
     * @param integer $FilterOperatorType 匹配类型，枚举见pb
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
        if (array_key_exists("FilterKey",$param) and $param["FilterKey"] !== null) {
            $this->FilterKey = $param["FilterKey"];
        }

        if (array_key_exists("FilterValue",$param) and $param["FilterValue"] !== null) {
            $this->FilterValue = $param["FilterValue"];
        }

        if (array_key_exists("FilterOperatorType",$param) and $param["FilterOperatorType"] !== null) {
            $this->FilterOperatorType = $param["FilterOperatorType"];
        }
    }
}
