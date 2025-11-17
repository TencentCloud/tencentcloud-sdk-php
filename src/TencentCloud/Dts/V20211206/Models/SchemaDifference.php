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
 * 结构不一致详情
 *
 * @method string getDb() 获取结构不一致的表所在库
 * @method void setDb(string $Db) 设置结构不一致的表所在库
 * @method string getSchema() 获取结构不一致的表所在schema
 * @method void setSchema(string $Schema) 设置结构不一致的表所在schema
 * @method string getTable() 获取结构不一致的表
 * @method void setTable(string $Table) 设置结构不一致的表
 * @method string getSrcSchema() 获取源库表结构
 * @method void setSrcSchema(string $SrcSchema) 设置源库表结构
 * @method string getDstSchema() 获取目标库表结构
 * @method void setDstSchema(string $DstSchema) 设置目标库表结构
 */
class SchemaDifference extends AbstractModel
{
    /**
     * @var string 结构不一致的表所在库
     */
    public $Db;

    /**
     * @var string 结构不一致的表所在schema
     */
    public $Schema;

    /**
     * @var string 结构不一致的表
     */
    public $Table;

    /**
     * @var string 源库表结构
     */
    public $SrcSchema;

    /**
     * @var string 目标库表结构
     */
    public $DstSchema;

    /**
     * @param string $Db 结构不一致的表所在库
     * @param string $Schema 结构不一致的表所在schema
     * @param string $Table 结构不一致的表
     * @param string $SrcSchema 源库表结构
     * @param string $DstSchema 目标库表结构
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

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("SrcSchema",$param) and $param["SrcSchema"] !== null) {
            $this->SrcSchema = $param["SrcSchema"];
        }

        if (array_key_exists("DstSchema",$param) and $param["DstSchema"] !== null) {
            $this->DstSchema = $param["DstSchema"];
        }
    }
}
