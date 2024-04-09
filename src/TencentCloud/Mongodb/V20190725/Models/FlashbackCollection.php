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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按key回档，源数据所在的表
 *
 * @method string getCollectionName() 获取按key回档指定的集合名
 * @method void setCollectionName(string $CollectionName) 设置按key回档指定的集合名
 * @method string getTargetResultCollectionName() 获取按key回档到的目标集合名
 * @method void setTargetResultCollectionName(string $TargetResultCollectionName) 设置按key回档到的目标集合名
 * @method string getFilterKey() 获取上传到cos的文件的value所对应的key值
 * @method void setFilterKey(string $FilterKey) 设置上传到cos的文件的value所对应的key值
 * @method array getKeyValues() 获取用于按key回档过滤的键值对
 * @method void setKeyValues(array $KeyValues) 设置用于按key回档过滤的键值对
 */
class FlashbackCollection extends AbstractModel
{
    /**
     * @var string 按key回档指定的集合名
     */
    public $CollectionName;

    /**
     * @var string 按key回档到的目标集合名
     */
    public $TargetResultCollectionName;

    /**
     * @var string 上传到cos的文件的value所对应的key值
     */
    public $FilterKey;

    /**
     * @var array 用于按key回档过滤的键值对
     */
    public $KeyValues;

    /**
     * @param string $CollectionName 按key回档指定的集合名
     * @param string $TargetResultCollectionName 按key回档到的目标集合名
     * @param string $FilterKey 上传到cos的文件的value所对应的key值
     * @param array $KeyValues 用于按key回档过滤的键值对
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
