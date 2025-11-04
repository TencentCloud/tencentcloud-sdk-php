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
 * pg对象owner不一致信息
 *
 * @method string getDb() 获取owner不一致的pg对象所在库
 * @method void setDb(string $Db) 设置owner不一致的pg对象所在库
 * @method string getSchema() 获取owner不一致的pg对象所在schema
 * @method void setSchema(string $Schema) 设置owner不一致的pg对象所在schema
 * @method string getObjectName() 获取owner不一致的pg对象名
 * @method void setObjectName(string $ObjectName) 设置owner不一致的pg对象名
 * @method string getObjectType() 获取owner不一致的pg对象类型
 * @method void setObjectType(string $ObjectType) 设置owner不一致的pg对象类型
 * @method string getSrcOwner() 获取源库对象owner
 * @method void setSrcOwner(string $SrcOwner) 设置源库对象owner
 * @method string getDstOwner() 获取目标库对象owner
 * @method void setDstOwner(string $DstOwner) 设置目标库对象owner
 */
class OwnerDifference extends AbstractModel
{
    /**
     * @var string owner不一致的pg对象所在库
     */
    public $Db;

    /**
     * @var string owner不一致的pg对象所在schema
     */
    public $Schema;

    /**
     * @var string owner不一致的pg对象名
     */
    public $ObjectName;

    /**
     * @var string owner不一致的pg对象类型
     */
    public $ObjectType;

    /**
     * @var string 源库对象owner
     */
    public $SrcOwner;

    /**
     * @var string 目标库对象owner
     */
    public $DstOwner;

    /**
     * @param string $Db owner不一致的pg对象所在库
     * @param string $Schema owner不一致的pg对象所在schema
     * @param string $ObjectName owner不一致的pg对象名
     * @param string $ObjectType owner不一致的pg对象类型
     * @param string $SrcOwner 源库对象owner
     * @param string $DstOwner 目标库对象owner
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
        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("SrcOwner",$param) and $param["SrcOwner"] !== null) {
            $this->SrcOwner = $param["SrcOwner"];
        }

        if (array_key_exists("DstOwner",$param) and $param["DstOwner"] !== null) {
            $this->DstOwner = $param["DstOwner"];
        }
    }
}
