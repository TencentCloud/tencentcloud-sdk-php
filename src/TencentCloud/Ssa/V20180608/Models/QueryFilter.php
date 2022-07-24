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
 * 过滤条件
 *
 * @method string getFilterKey() 获取过滤key
 * @method void setFilterKey(string $FilterKey) 设置过滤key
 * @method integer getFilterOperatorType() 获取操作符(只支持32位)
 * @method void setFilterOperatorType(integer $FilterOperatorType) 设置操作符(只支持32位)
 * @method string getFilterValue() 获取过滤value
 * @method void setFilterValue(string $FilterValue) 设置过滤value
 */
class QueryFilter extends AbstractModel
{
    /**
     * @var string 过滤key
     */
    public $FilterKey;

    /**
     * @var integer 操作符(只支持32位)
     */
    public $FilterOperatorType;

    /**
     * @var string 过滤value
     */
    public $FilterValue;

    /**
     * @param string $FilterKey 过滤key
     * @param integer $FilterOperatorType 操作符(只支持32位)
     * @param string $FilterValue 过滤value
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

        if (array_key_exists("FilterOperatorType",$param) and $param["FilterOperatorType"] !== null) {
            $this->FilterOperatorType = $param["FilterOperatorType"];
        }

        if (array_key_exists("FilterValue",$param) and $param["FilterValue"] !== null) {
            $this->FilterValue = $param["FilterValue"];
        }
    }
}
