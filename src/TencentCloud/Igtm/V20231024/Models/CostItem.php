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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费项
 *
 * @method string getCostName() 获取计费项名称
 * @method void setCostName(string $CostName) 设置计费项名称
 * @method integer getCostValue() 获取计费项值
 * @method void setCostValue(integer $CostValue) 设置计费项值
 */
class CostItem extends AbstractModel
{
    /**
     * @var string 计费项名称
     */
    public $CostName;

    /**
     * @var integer 计费项值
     */
    public $CostValue;

    /**
     * @param string $CostName 计费项名称
     * @param integer $CostValue 计费项值
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
        if (array_key_exists("CostName",$param) and $param["CostName"] !== null) {
            $this->CostName = $param["CostName"];
        }

        if (array_key_exists("CostValue",$param) and $param["CostValue"] !== null) {
            $this->CostValue = $param["CostValue"];
        }
    }
}
