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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群自定义参数
 *
 * @method string getName() 获取占位符名称
入参限制：长度 1-256
适用分支：腾讯云分支（IsCloud=true）
 * @method void setName(string $Name) 设置占位符名称
入参限制：长度 1-256
适用分支：腾讯云分支（IsCloud=true）
 * @method array getValues() 获取一个或多个取值（多个取值以逗号拼接替换占位符）
入参限制：每个元素长度 1-256
适用分支：腾讯云分支（IsCloud=true）
 * @method void setValues(array $Values) 设置一个或多个取值（多个取值以逗号拼接替换占位符）
入参限制：每个元素长度 1-256
适用分支：腾讯云分支（IsCloud=true）
 * @method boolean getExactMatch() 获取是否精确匹配
默认值：false
 * @method void setExactMatch(boolean $ExactMatch) 设置是否精确匹配
默认值：false
 */
class ClusterCustomParameters extends AbstractModel
{
    /**
     * @var string 占位符名称
入参限制：长度 1-256
适用分支：腾讯云分支（IsCloud=true）
     */
    public $Name;

    /**
     * @var array 一个或多个取值（多个取值以逗号拼接替换占位符）
入参限制：每个元素长度 1-256
适用分支：腾讯云分支（IsCloud=true）
     */
    public $Values;

    /**
     * @var boolean 是否精确匹配
默认值：false
     */
    public $ExactMatch;

    /**
     * @param string $Name 占位符名称
入参限制：长度 1-256
适用分支：腾讯云分支（IsCloud=true）
     * @param array $Values 一个或多个取值（多个取值以逗号拼接替换占位符）
入参限制：每个元素长度 1-256
适用分支：腾讯云分支（IsCloud=true）
     * @param boolean $ExactMatch 是否精确匹配
默认值：false
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
