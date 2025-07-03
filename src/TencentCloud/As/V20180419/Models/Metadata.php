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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义 Metadata
 *
 * @method array getItems() 获取自定义 Metadata 键值对列表
 * @method void setItems(array $Items) 设置自定义 Metadata 键值对列表
 */
class Metadata extends AbstractModel
{
    /**
     * @var array 自定义 Metadata 键值对列表
     */
    public $Items;

    /**
     * @param array $Items 自定义 Metadata 键值对列表
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new MetadataItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
