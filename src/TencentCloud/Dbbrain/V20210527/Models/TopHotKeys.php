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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 热key分析返回信息
 *
 * @method integer getCount() 获取访问频次。
 * @method void setCount(integer $Count) 设置访问频次。
 * @method string getDb() 获取热Key所属数据库。
 * @method void setDb(string $Db) 设置热Key所属数据库。
 * @method string getInstanceNodeId() 获取Redis节点。
 * @method void setInstanceNodeId(string $InstanceNodeId) 设置Redis节点。
 * @method string getKey() 获取热Key。
 * @method void setKey(string $Key) 设置热Key。
 * @method string getType() 获取数据类型。
 * @method void setType(string $Type) 设置数据类型。
 */
class TopHotKeys extends AbstractModel
{
    /**
     * @var integer 访问频次。
     */
    public $Count;

    /**
     * @var string 热Key所属数据库。
     */
    public $Db;

    /**
     * @var string Redis节点。
     */
    public $InstanceNodeId;

    /**
     * @var string 热Key。
     */
    public $Key;

    /**
     * @var string 数据类型。
     */
    public $Type;

    /**
     * @param integer $Count 访问频次。
     * @param string $Db 热Key所属数据库。
     * @param string $InstanceNodeId Redis节点。
     * @param string $Key 热Key。
     * @param string $Type 数据类型。
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("InstanceNodeId",$param) and $param["InstanceNodeId"] !== null) {
            $this->InstanceNodeId = $param["InstanceNodeId"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
