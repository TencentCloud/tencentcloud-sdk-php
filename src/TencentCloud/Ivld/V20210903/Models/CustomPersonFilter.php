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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义人物批量查询过滤条件
 *
 * @method string getName() 获取待查询的人物姓名
 * @method void setName(string $Name) 设置待查询的人物姓名
 * @method array getCategoryIdSet() 获取待过滤的自定义类型Id数组
 * @method void setCategoryIdSet(array $CategoryIdSet) 设置待过滤的自定义类型Id数组
 * @method array getPersonIdSet() 获取待过滤的自定义人物Id数组
 * @method void setPersonIdSet(array $PersonIdSet) 设置待过滤的自定义人物Id数组
 * @method array getL1CategorySet() 获取一级自定义人物类型数组
 * @method void setL1CategorySet(array $L1CategorySet) 设置一级自定义人物类型数组
 */
class CustomPersonFilter extends AbstractModel
{
    /**
     * @var string 待查询的人物姓名
     */
    public $Name;

    /**
     * @var array 待过滤的自定义类型Id数组
     */
    public $CategoryIdSet;

    /**
     * @var array 待过滤的自定义人物Id数组
     */
    public $PersonIdSet;

    /**
     * @var array 一级自定义人物类型数组
     */
    public $L1CategorySet;

    /**
     * @param string $Name 待查询的人物姓名
     * @param array $CategoryIdSet 待过滤的自定义类型Id数组
     * @param array $PersonIdSet 待过滤的自定义人物Id数组
     * @param array $L1CategorySet 一级自定义人物类型数组
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CategoryIdSet",$param) and $param["CategoryIdSet"] !== null) {
            $this->CategoryIdSet = $param["CategoryIdSet"];
        }

        if (array_key_exists("PersonIdSet",$param) and $param["PersonIdSet"] !== null) {
            $this->PersonIdSet = $param["PersonIdSet"];
        }

        if (array_key_exists("L1CategorySet",$param) and $param["L1CategorySet"] !== null) {
            $this->L1CategorySet = $param["L1CategorySet"];
        }
    }
}
