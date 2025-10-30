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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDatabase请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID，形如postgres-6fego161。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-6fego161。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getDatabaseName() 获取创建的数据库名。
名称规范：由字母（a-z, A-Z）、数字（0-9）、下划线（_）组成，以字母或（_）开头，最多63个字符。不能使用系统保留关键字，不能为postgres。
 * @method void setDatabaseName(string $DatabaseName) 设置创建的数据库名。
名称规范：由字母（a-z, A-Z）、数字（0-9）、下划线（_）组成，以字母或（_）开头，最多63个字符。不能使用系统保留关键字，不能为postgres。
 * @method string getDatabaseOwner() 获取数据库的所有者。可通过[DescribeAccounts](https://cloud.tencent.com/document/api/409/18109)接口获取
 * @method void setDatabaseOwner(string $DatabaseOwner) 设置数据库的所有者。可通过[DescribeAccounts](https://cloud.tencent.com/document/api/409/18109)接口获取
 * @method string getEncoding() 获取数据库的字符编码。
支持的常用字符集包括：UTF8、LATIN1、LATIN2、WIN1250、WIN1251、WIN1252、KOI8R、EUC_JP、EUC_KR
默认值：UTF8
 * @method void setEncoding(string $Encoding) 设置数据库的字符编码。
支持的常用字符集包括：UTF8、LATIN1、LATIN2、WIN1250、WIN1251、WIN1252、KOI8R、EUC_JP、EUC_KR
默认值：UTF8
 * @method string getCollate() 获取数据库的排序规则
 * @method void setCollate(string $Collate) 设置数据库的排序规则
 * @method string getCtype() 获取数据库的字符分类
 * @method void setCtype(string $Ctype) 设置数据库的字符分类
 */
class CreateDatabaseRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如postgres-6fego161。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 创建的数据库名。
名称规范：由字母（a-z, A-Z）、数字（0-9）、下划线（_）组成，以字母或（_）开头，最多63个字符。不能使用系统保留关键字，不能为postgres。
     */
    public $DatabaseName;

    /**
     * @var string 数据库的所有者。可通过[DescribeAccounts](https://cloud.tencent.com/document/api/409/18109)接口获取
     */
    public $DatabaseOwner;

    /**
     * @var string 数据库的字符编码。
支持的常用字符集包括：UTF8、LATIN1、LATIN2、WIN1250、WIN1251、WIN1252、KOI8R、EUC_JP、EUC_KR
默认值：UTF8
     */
    public $Encoding;

    /**
     * @var string 数据库的排序规则
     */
    public $Collate;

    /**
     * @var string 数据库的字符分类
     */
    public $Ctype;

    /**
     * @param string $DBInstanceId 实例ID，形如postgres-6fego161。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $DatabaseName 创建的数据库名。
名称规范：由字母（a-z, A-Z）、数字（0-9）、下划线（_）组成，以字母或（_）开头，最多63个字符。不能使用系统保留关键字，不能为postgres。
     * @param string $DatabaseOwner 数据库的所有者。可通过[DescribeAccounts](https://cloud.tencent.com/document/api/409/18109)接口获取
     * @param string $Encoding 数据库的字符编码。
支持的常用字符集包括：UTF8、LATIN1、LATIN2、WIN1250、WIN1251、WIN1252、KOI8R、EUC_JP、EUC_KR
默认值：UTF8
     * @param string $Collate 数据库的排序规则
     * @param string $Ctype 数据库的字符分类
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatabaseOwner",$param) and $param["DatabaseOwner"] !== null) {
            $this->DatabaseOwner = $param["DatabaseOwner"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("Collate",$param) and $param["Collate"] !== null) {
            $this->Collate = $param["Collate"];
        }

        if (array_key_exists("Ctype",$param) and $param["Ctype"] !== null) {
            $this->Ctype = $param["Ctype"];
        }
    }
}
