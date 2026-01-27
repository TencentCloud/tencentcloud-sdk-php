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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模糊查询过滤器
 *
 * @method array getNames() 获取字段名称
 * @method void setNames(array $Names) 设置字段名称
 * @method array getValues() 获取字段值
 * @method void setValues(array $Values) 设置字段值
 * @method boolean getExactMatch() 获取模糊匹配，true-是，false否
 * @method void setExactMatch(boolean $ExactMatch) 设置模糊匹配，true-是，false否
 */
class QuerySimpleFilter extends AbstractModel
{
    /**
     * @var array 字段名称
     */
    public $Names;

    /**
     * @var array 字段值
     */
    public $Values;

    /**
     * @var boolean 模糊匹配，true-是，false否
     */
    public $ExactMatch;

    /**
     * @param array $Names 字段名称
     * @param array $Values 字段值
     * @param boolean $ExactMatch 模糊匹配，true-是，false否
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
        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
