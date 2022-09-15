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
 * redis key前缀空间信息
 *
 * @method integer getAveElementSize() 获取平均元素长度。
 * @method void setAveElementSize(integer $AveElementSize) 设置平均元素长度。
 * @method integer getLength() 获取总占用内存（Byte）。
 * @method void setLength(integer $Length) 设置总占用内存（Byte）。
 * @method string getKeyPreIndex() 获取key前缀。
 * @method void setKeyPreIndex(string $KeyPreIndex) 设置key前缀。
 * @method integer getItemCount() 获取元素数量。
 * @method void setItemCount(integer $ItemCount) 设置元素数量。
 * @method integer getCount() 获取key个数。
 * @method void setCount(integer $Count) 设置key个数。
 * @method integer getMaxElementSize() 获取最大元素长度。
 * @method void setMaxElementSize(integer $MaxElementSize) 设置最大元素长度。
 */
class RedisPreKeySpaceData extends AbstractModel
{
    /**
     * @var integer 平均元素长度。
     */
    public $AveElementSize;

    /**
     * @var integer 总占用内存（Byte）。
     */
    public $Length;

    /**
     * @var string key前缀。
     */
    public $KeyPreIndex;

    /**
     * @var integer 元素数量。
     */
    public $ItemCount;

    /**
     * @var integer key个数。
     */
    public $Count;

    /**
     * @var integer 最大元素长度。
     */
    public $MaxElementSize;

    /**
     * @param integer $AveElementSize 平均元素长度。
     * @param integer $Length 总占用内存（Byte）。
     * @param string $KeyPreIndex key前缀。
     * @param integer $ItemCount 元素数量。
     * @param integer $Count key个数。
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
        if (array_key_exists("AveElementSize",$param) and $param["AveElementSize"] !== null) {
            $this->AveElementSize = $param["AveElementSize"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("KeyPreIndex",$param) and $param["KeyPreIndex"] !== null) {
            $this->KeyPreIndex = $param["KeyPreIndex"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("MaxElementSize",$param) and $param["MaxElementSize"] !== null) {
            $this->MaxElementSize = $param["MaxElementSize"];
        }
    }
}
