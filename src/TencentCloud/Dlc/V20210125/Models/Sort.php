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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排序结构
 *
 * @method string getField() 获取排序字段
 * @method void setField(string $Field) 设置排序字段
 * @method boolean getAsc() 获取是否按照ASC排序，否则DESC排序
 * @method void setAsc(boolean $Asc) 设置是否按照ASC排序，否则DESC排序
 */
class Sort extends AbstractModel
{
    /**
     * @var string 排序字段
     */
    public $Field;

    /**
     * @var boolean 是否按照ASC排序，否则DESC排序
     */
    public $Asc;

    /**
     * @param string $Field 排序字段
     * @param boolean $Asc 是否按照ASC排序，否则DESC排序
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

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }
    }
}
