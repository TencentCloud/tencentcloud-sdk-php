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
 * 按key回档，源数据所在的库表
 *
 * @method string getDBName() 获取按key回档源数据所在库
 * @method void setDBName(string $DBName) 设置按key回档源数据所在库
 * @method array getCollections() 获取按key回档的集群数组
 * @method void setCollections(array $Collections) 设置按key回档的集群数组
 */
class FlashbackDatabase extends AbstractModel
{
    /**
     * @var string 按key回档源数据所在库
     */
    public $DBName;

    /**
     * @var array 按key回档的集群数组
     */
    public $Collections;

    /**
     * @param string $DBName 按key回档源数据所在库
     * @param array $Collections 按key回档的集群数组
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
        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("Collections",$param) and $param["Collections"] !== null) {
            $this->Collections = [];
            foreach ($param["Collections"] as $key => $value){
                $obj = new FlashbackCollection();
                $obj->deserialize($value);
                array_push($this->Collections, $obj);
            }
        }
    }
}
