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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MetaData数据结构，Key/Value格式
 *
 * @method string getMetaKey() 获取MetaData的Key，字符长度不能超过32
 * @method void setMetaKey(string $MetaKey) 设置MetaData的Key，字符长度不能超过32
 * @method string getMetaValue() 获取MetaData的Value，字符长度不能超过256
 * @method void setMetaValue(string $MetaValue) 设置MetaData的Value，字符长度不能超过256
 */
class MetaData extends AbstractModel
{
    /**
     * @var string MetaData的Key，字符长度不能超过32
     */
    public $MetaKey;

    /**
     * @var string MetaData的Value，字符长度不能超过256
     */
    public $MetaValue;

    /**
     * @param string $MetaKey MetaData的Key，字符长度不能超过32
     * @param string $MetaValue MetaData的Value，字符长度不能超过256
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
        if (array_key_exists("MetaKey",$param) and $param["MetaKey"] !== null) {
            $this->MetaKey = $param["MetaKey"];
        }

        if (array_key_exists("MetaValue",$param) and $param["MetaValue"] !== null) {
            $this->MetaValue = $param["MetaValue"];
        }
    }
}
