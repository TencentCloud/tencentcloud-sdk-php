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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按 Key 闪回数据表
 *
 * @method string getCollectionName() 获取指定按 Key 闪回源数据库集合名。
 * @method void setCollectionName(string $CollectionName) 设置指定按 Key 闪回源数据库集合名。
 * @method string getTargetResultCollectionName() 获取指定按 Key 闪回目标数据库集合名。
 * @method void setTargetResultCollectionName(string $TargetResultCollectionName) 设置指定按 Key 闪回目标数据库集合名。
 * @method string getFilterKey() 获取指定用于过滤按 Key 闪回的 Key（键）。
 * @method void setFilterKey(string $FilterKey) 设置指定用于过滤按 Key 闪回的 Key（键）。
 * @method array getKeyValues() 获取指定用于按 Key 闪回的键值对。数组元素最大限制为 50000。
 * @method void setKeyValues(array $KeyValues) 设置指定用于按 Key 闪回的键值对。数组元素最大限制为 50000。
 */
class FlashbackCollection extends AbstractModel
{
    /**
     * @var string 指定按 Key 闪回源数据库集合名。
     */
    public $CollectionName;

    /**
     * @var string 指定按 Key 闪回目标数据库集合名。
     */
    public $TargetResultCollectionName;

    /**
     * @var string 指定用于过滤按 Key 闪回的 Key（键）。
     */
    public $FilterKey;

    /**
     * @var array 指定用于按 Key 闪回的键值对。数组元素最大限制为 50000。
     */
    public $KeyValues;

    /**
     * @param string $CollectionName 指定按 Key 闪回源数据库集合名。
     * @param string $TargetResultCollectionName 指定按 Key 闪回目标数据库集合名。
     * @param string $FilterKey 指定用于过滤按 Key 闪回的 Key（键）。
     * @param array $KeyValues 指定用于按 Key 闪回的键值对。数组元素最大限制为 50000。
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
        if (array_key_exists("CollectionName",$param) and $param["CollectionName"] !== null) {
            $this->CollectionName = $param["CollectionName"];
        }

        if (array_key_exists("TargetResultCollectionName",$param) and $param["TargetResultCollectionName"] !== null) {
            $this->TargetResultCollectionName = $param["TargetResultCollectionName"];
        }

        if (array_key_exists("FilterKey",$param) and $param["FilterKey"] !== null) {
            $this->FilterKey = $param["FilterKey"];
        }

        if (array_key_exists("KeyValues",$param) and $param["KeyValues"] !== null) {
            $this->KeyValues = [];
            foreach ($param["KeyValues"] as $key => $value){
                $obj = new FBKeyValue();
                $obj->deserialize($value);
                array_push($this->KeyValues, $obj);
            }
        }
    }
}
