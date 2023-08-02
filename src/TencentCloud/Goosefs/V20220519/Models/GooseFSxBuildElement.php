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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GooseFSx创建时候的属性
 *
 * @method string getModel() 获取GooseFSx的型号
 * @method void setModel(string $Model) 设置GooseFSx的型号
 * @method integer getCapacity() 获取容量单位是GB, 比如4608(4.5TB)
 * @method void setCapacity(integer $Capacity) 设置容量单位是GB, 比如4608(4.5TB)
 * @method array getMappedBucketList() 获取要关联映射的bucket列表
 * @method void setMappedBucketList(array $MappedBucketList) 设置要关联映射的bucket列表
 */
class GooseFSxBuildElement extends AbstractModel
{
    /**
     * @var string GooseFSx的型号
     */
    public $Model;

    /**
     * @var integer 容量单位是GB, 比如4608(4.5TB)
     */
    public $Capacity;

    /**
     * @var array 要关联映射的bucket列表
     */
    public $MappedBucketList;

    /**
     * @param string $Model GooseFSx的型号
     * @param integer $Capacity 容量单位是GB, 比如4608(4.5TB)
     * @param array $MappedBucketList 要关联映射的bucket列表
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("MappedBucketList",$param) and $param["MappedBucketList"] !== null) {
            $this->MappedBucketList = [];
            foreach ($param["MappedBucketList"] as $key => $value){
                $obj = new MappedBucket();
                $obj->deserialize($value);
                array_push($this->MappedBucketList, $obj);
            }
        }
    }
}
