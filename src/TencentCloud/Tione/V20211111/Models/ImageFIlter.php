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
 * 镜像列表过滤
 *
 * @method string getName() 获取过滤字段名称
 * @method void setName(string $Name) 设置过滤字段名称
 * @method array getValues() 获取过滤值
 * @method void setValues(array $Values) 设置过滤值
 * @method boolean getNegative() 获取是否反选
 * @method void setNegative(boolean $Negative) 设置是否反选
 */
class ImageFIlter extends AbstractModel
{
    /**
     * @var string 过滤字段名称
     */
    public $Name;

    /**
     * @var array 过滤值
     */
    public $Values;

    /**
     * @var boolean 是否反选
     */
    public $Negative;

    /**
     * @param string $Name 过滤字段名称
     * @param array $Values 过滤值
     * @param boolean $Negative 是否反选
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
    }
}
