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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * redis key空间信息。
 *
 * @method string getKey() 获取key名。
 * @method void setKey(string $Key) 设置key名。
 * @method string getType() 获取key类型。
 * @method void setType(string $Type) 设置key类型。
 * @method string getEncoding() 获取key编码方式。
 * @method void setEncoding(string $Encoding) 设置key编码方式。
 * @method integer getExpireTime() 获取key过期时间戳（毫秒），0代表未设置过期时间。
 * @method void setExpireTime(integer $ExpireTime) 设置key过期时间戳（毫秒），0代表未设置过期时间。
 * @method integer getLength() 获取key内存大小，单位Byte。
 * @method void setLength(integer $Length) 设置key内存大小，单位Byte。
 * @method integer getItemCount() 获取元素个数。
 * @method void setItemCount(integer $ItemCount) 设置元素个数。
 * @method integer getMaxElementSize() 获取最大元素长度。
 * @method void setMaxElementSize(integer $MaxElementSize) 设置最大元素长度。
 */
class RedisKeySpaceData extends AbstractModel
{
    /**
     * @var string key名。
     */
    public $Key;

    /**
     * @var string key类型。
     */
    public $Type;

    /**
     * @var string key编码方式。
     */
    public $Encoding;

    /**
     * @var integer key过期时间戳（毫秒），0代表未设置过期时间。
     */
    public $ExpireTime;

    /**
     * @var integer key内存大小，单位Byte。
     */
    public $Length;

    /**
     * @var integer 元素个数。
     */
    public $ItemCount;

    /**
     * @var integer 最大元素长度。
     */
    public $MaxElementSize;

    /**
     * @param string $Key key名。
     * @param string $Type key类型。
     * @param string $Encoding key编码方式。
     * @param integer $ExpireTime key过期时间戳（毫秒），0代表未设置过期时间。
     * @param integer $Length key内存大小，单位Byte。
     * @param integer $ItemCount 元素个数。
     * @param integer $MaxElementSize 最大元素长度。
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("MaxElementSize",$param) and $param["MaxElementSize"] !== null) {
            $this->MaxElementSize = $param["MaxElementSize"];
        }
    }
}
