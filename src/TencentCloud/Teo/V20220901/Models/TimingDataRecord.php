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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时序数据信息
 *
 * @method string getTypeKey() 获取查询维度值。
 * @method void setTypeKey(string $TypeKey) 设置查询维度值。
 * @method array getTypeValue() 获取详细时序数据。
 * @method void setTypeValue(array $TypeValue) 设置详细时序数据。
 */
class TimingDataRecord extends AbstractModel
{
    /**
     * @var string 查询维度值。
     */
    public $TypeKey;

    /**
     * @var array 详细时序数据。
     */
    public $TypeValue;

    /**
     * @param string $TypeKey 查询维度值。
     * @param array $TypeValue 详细时序数据。
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
        if (array_key_exists("TypeKey",$param) and $param["TypeKey"] !== null) {
            $this->TypeKey = $param["TypeKey"];
        }

        if (array_key_exists("TypeValue",$param) and $param["TypeValue"] !== null) {
            $this->TypeValue = [];
            foreach ($param["TypeValue"] as $key => $value){
                $obj = new TimingTypeValue();
                $obj->deserialize($value);
                array_push($this->TypeValue, $obj);
            }
        }
    }
}
