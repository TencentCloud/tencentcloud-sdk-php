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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库不一致的详情，mongodb业务用到
 *
 * @method string getObjectType() 获取对象类型,可能得值有：account,index,shardkey,schema
 * @method void setObjectType(string $ObjectType) 设置对象类型,可能得值有：account,index,shardkey,schema
 * @method string getSrcChunk() 获取源端分块
 * @method void setSrcChunk(string $SrcChunk) 设置源端分块
 * @method string getDstChunk() 获取目标端分块
 * @method void setDstChunk(string $DstChunk) 设置目标端分块
 * @method string getSrcItem() 获取源端值
 * @method void setSrcItem(string $SrcItem) 设置源端值
 * @method string getDstItem() 获取目标端值
 * @method void setDstItem(string $DstItem) 设置目标端值
 */
class AdvancedObjectsItem extends AbstractModel
{
    /**
     * @var string 对象类型,可能得值有：account,index,shardkey,schema
     */
    public $ObjectType;

    /**
     * @var string 源端分块
     */
    public $SrcChunk;

    /**
     * @var string 目标端分块
     */
    public $DstChunk;

    /**
     * @var string 源端值
     */
    public $SrcItem;

    /**
     * @var string 目标端值
     */
    public $DstItem;

    /**
     * @param string $ObjectType 对象类型,可能得值有：account,index,shardkey,schema
     * @param string $SrcChunk 源端分块
     * @param string $DstChunk 目标端分块
     * @param string $SrcItem 源端值
     * @param string $DstItem 目标端值
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
        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("SrcChunk",$param) and $param["SrcChunk"] !== null) {
            $this->SrcChunk = $param["SrcChunk"];
        }

        if (array_key_exists("DstChunk",$param) and $param["DstChunk"] !== null) {
            $this->DstChunk = $param["DstChunk"];
        }

        if (array_key_exists("SrcItem",$param) and $param["SrcItem"] !== null) {
            $this->SrcItem = $param["SrcItem"];
        }

        if (array_key_exists("DstItem",$param) and $param["DstItem"] !== null) {
            $this->DstItem = $param["DstItem"];
        }
    }
}
