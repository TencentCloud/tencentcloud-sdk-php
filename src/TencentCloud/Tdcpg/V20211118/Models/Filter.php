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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤条件
 *
 * @method string getName() 获取过滤条件名
 * @method void setName(string $Name) 设置过滤条件名
 * @method array getValues() 获取过滤条件值数组
 * @method void setValues(array $Values) 设置过滤条件值数组
 * @method boolean getExactMatch() 获取true:精确匹配(默认值) false:(模糊匹配)
 * @method void setExactMatch(boolean $ExactMatch) 设置true:精确匹配(默认值) false:(模糊匹配)
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤条件名
     */
    public $Name;

    /**
     * @var array 过滤条件值数组
     */
    public $Values;

    /**
     * @var boolean true:精确匹配(默认值) false:(模糊匹配)
     */
    public $ExactMatch;

    /**
     * @param string $Name 过滤条件名
     * @param array $Values 过滤条件值数组
     * @param boolean $ExactMatch true:精确匹配(默认值) false:(模糊匹配)
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
