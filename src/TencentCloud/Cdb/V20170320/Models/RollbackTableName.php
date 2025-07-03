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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于回档的数据库表名
 *
 * @method string getTableName() 获取回档前的原数据库表名
 * @method void setTableName(string $TableName) 设置回档前的原数据库表名
 * @method string getNewTableName() 获取回档后的新数据库表名
 * @method void setNewTableName(string $NewTableName) 设置回档后的新数据库表名
 */
class RollbackTableName extends AbstractModel
{
    /**
     * @var string 回档前的原数据库表名
     */
    public $TableName;

    /**
     * @var string 回档后的新数据库表名
     */
    public $NewTableName;

    /**
     * @param string $TableName 回档前的原数据库表名
     * @param string $NewTableName 回档后的新数据库表名
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("NewTableName",$param) and $param["NewTableName"] !== null) {
            $this->NewTableName = $param["NewTableName"];
        }
    }
}
