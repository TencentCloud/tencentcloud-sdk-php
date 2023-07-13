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
 * 审计日志搜索过滤器
 *
 * @method string getType() 获取过滤项。目前支持以下搜索条件：

分词搜索：
sql - SQL语句；

等于、不等于、包含、不包含：
host - 客户端地址；
user - 用户名；
dbName - 数据库名称；

等于、不等于：
sqlType - SQL类型；
errCode - 错误码；
threadId - 线程ID；

范围搜索（时间类型统一为微妙）：
execTime - 执行时间；
lockWaitTime - 执行时间；
ioWaitTime - IO等待时间；
trxLivingTime - 事物持续时间；
cpuTime - cpu时间；
checkRows - 扫描行数；
affectRows - 影响行数；
sentRows - 返回行数。
 * @method void setType(string $Type) 设置过滤项。目前支持以下搜索条件：

分词搜索：
sql - SQL语句；

等于、不等于、包含、不包含：
host - 客户端地址；
user - 用户名；
dbName - 数据库名称；

等于、不等于：
sqlType - SQL类型；
errCode - 错误码；
threadId - 线程ID；

范围搜索（时间类型统一为微妙）：
execTime - 执行时间；
lockWaitTime - 执行时间；
ioWaitTime - IO等待时间；
trxLivingTime - 事物持续时间；
cpuTime - cpu时间；
checkRows - 扫描行数；
affectRows - 影响行数；
sentRows - 返回行数。
 * @method string getCompare() 获取过滤条件。支持以下条件：
INC - 包含,
EXC - 不包含,
EQS - 等于,
NEQ - 不等于,
RA - 范围。
 * @method void setCompare(string $Compare) 设置过滤条件。支持以下条件：
INC - 包含,
EXC - 不包含,
EQS - 等于,
NEQ - 不等于,
RA - 范围。
 * @method array getValue() 获取过滤的值。
 * @method void setValue(array $Value) 设置过滤的值。
 */
class InstanceAuditLogFilters extends AbstractModel
{
    /**
     * @var string 过滤项。目前支持以下搜索条件：

分词搜索：
sql - SQL语句；

等于、不等于、包含、不包含：
host - 客户端地址；
user - 用户名；
dbName - 数据库名称；

等于、不等于：
sqlType - SQL类型；
errCode - 错误码；
threadId - 线程ID；

范围搜索（时间类型统一为微妙）：
execTime - 执行时间；
lockWaitTime - 执行时间；
ioWaitTime - IO等待时间；
trxLivingTime - 事物持续时间；
cpuTime - cpu时间；
checkRows - 扫描行数；
affectRows - 影响行数；
sentRows - 返回行数。
     */
    public $Type;

    /**
     * @var string 过滤条件。支持以下条件：
INC - 包含,
EXC - 不包含,
EQS - 等于,
NEQ - 不等于,
RA - 范围。
     */
    public $Compare;

    /**
     * @var array 过滤的值。
     */
    public $Value;

    /**
     * @param string $Type 过滤项。目前支持以下搜索条件：

分词搜索：
sql - SQL语句；

等于、不等于、包含、不包含：
host - 客户端地址；
user - 用户名；
dbName - 数据库名称；

等于、不等于：
sqlType - SQL类型；
errCode - 错误码；
threadId - 线程ID；

范围搜索（时间类型统一为微妙）：
execTime - 执行时间；
lockWaitTime - 执行时间；
ioWaitTime - IO等待时间；
trxLivingTime - 事物持续时间；
cpuTime - cpu时间；
checkRows - 扫描行数；
affectRows - 影响行数；
sentRows - 返回行数。
     * @param string $Compare 过滤条件。支持以下条件：
INC - 包含,
EXC - 不包含,
EQS - 等于,
NEQ - 不等于,
RA - 范围。
     * @param array $Value 过滤的值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
