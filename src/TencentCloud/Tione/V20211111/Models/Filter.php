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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤器
 *
 * @method string getName() 获取<p>过滤字段名称</p>
 * @method void setName(string $Name) 设置<p>过滤字段名称</p>
 * @method array getValues() 获取<p>过滤字段取值</p>
 * @method void setValues(array $Values) 设置<p>过滤字段取值</p>
 * @method boolean getNegative() 获取<p>是否开启反向查询</p>
 * @method void setNegative(boolean $Negative) 设置<p>是否开启反向查询</p>
 * @method boolean getFuzzy() 获取<p>是否开启模糊匹配</p>
 * @method void setFuzzy(boolean $Fuzzy) 设置<p>是否开启模糊匹配</p>
 */
class Filter extends AbstractModel
{
    /**
     * @var string <p>过滤字段名称</p>
     */
    public $Name;

    /**
     * @var array <p>过滤字段取值</p>
     */
    public $Values;

    /**
     * @var boolean <p>是否开启反向查询</p>
     */
    public $Negative;

    /**
     * @var boolean <p>是否开启模糊匹配</p>
     */
    public $Fuzzy;

    /**
     * @param string $Name <p>过滤字段名称</p>
     * @param array $Values <p>过滤字段取值</p>
     * @param boolean $Negative <p>是否开启反向查询</p>
     * @param boolean $Fuzzy <p>是否开启模糊匹配</p>
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

        if (array_key_exists("Negative",$param) and $param["Negative"] !== null) {
            $this->Negative = $param["Negative"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
