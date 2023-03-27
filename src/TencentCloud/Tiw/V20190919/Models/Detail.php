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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费用量数据里，带不同指标Tag的详情
 *
 * @method string getTagName() 获取用量指标
 * @method void setTagName(string $TagName) 设置用量指标
 * @method float getWeight() 获取用量权重
 * @method void setWeight(float $Weight) 设置用量权重
 * @method float getValue() 获取用量的值
 * @method void setValue(float $Value) 设置用量的值
 */
class Detail extends AbstractModel
{
    /**
     * @var string 用量指标
     */
    public $TagName;

    /**
     * @var float 用量权重
     */
    public $Weight;

    /**
     * @var float 用量的值
     */
    public $Value;

    /**
     * @param string $TagName 用量指标
     * @param float $Weight 用量权重
     * @param float $Value 用量的值
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
        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
