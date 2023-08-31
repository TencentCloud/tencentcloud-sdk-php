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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAntiInfoLeakRules返回的规则元素中的具体的规则元素
 *
 * @method string getField() 获取字段
 * @method void setField(string $Field) 设置字段
 * @method string getCompareFunc() 获取条件
 * @method void setCompareFunc(string $CompareFunc) 设置条件
 * @method string getContent() 获取内容
 * @method void setContent(string $Content) 设置内容
 */
class DescribeAntiInfoLeakRulesStrategyItem extends AbstractModel
{
    /**
     * @var string 字段
     */
    public $Field;

    /**
     * @var string 条件
     */
    public $CompareFunc;

    /**
     * @var string 内容
     */
    public $Content;

    /**
     * @param string $Field 字段
     * @param string $CompareFunc 条件
     * @param string $Content 内容
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("CompareFunc",$param) and $param["CompareFunc"] !== null) {
            $this->CompareFunc = $param["CompareFunc"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
