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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 冷热分层Table数据信息
 *
 * @method string getDatabaseName() 获取列：DatabaseName
 * @method void setDatabaseName(string $DatabaseName) 设置列：DatabaseName
 * @method string getTableName() 获取列：TableName
 * @method void setTableName(string $TableName) 设置列：TableName
 * @method string getSize() 获取列：Size
 * @method void setSize(string $Size) 设置列：Size
 * @method string getRemoteSize() 获取列：RemoteSize
 * @method void setRemoteSize(string $RemoteSize) 设置列：RemoteSize
 */
class CoolDownTableDataInfo extends AbstractModel
{
    /**
     * @var string 列：DatabaseName
     */
    public $DatabaseName;

    /**
     * @var string 列：TableName
     */
    public $TableName;

    /**
     * @var string 列：Size
     */
    public $Size;

    /**
     * @var string 列：RemoteSize
     */
    public $RemoteSize;

    /**
     * @param string $DatabaseName 列：DatabaseName
     * @param string $TableName 列：TableName
     * @param string $Size 列：Size
     * @param string $RemoteSize 列：RemoteSize
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("RemoteSize",$param) and $param["RemoteSize"] !== null) {
            $this->RemoteSize = $param["RemoteSize"];
        }
    }
}
