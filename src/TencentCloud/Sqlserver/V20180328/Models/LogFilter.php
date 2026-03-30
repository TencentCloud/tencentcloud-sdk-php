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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志过滤条件
 *
 * @method string getType() 获取过滤条件名称。

如：sql - SQL命令详情

host – 客户端 IP；
user – 数据库账户；
dbName – 数据库名称；
sqlType - SQL类型；
errCode - 错误码

execTime - 执行时间
lockWaitTime - 锁等待时间
ioWaitTime - IO等待时间
trxLivingTime - 事务执行时间
cpuTime- Cpu时间

threadId - 线程ID
trxId - 事务ID
checkRows - 扫描行数
affectRows - 影响行数
sentRows - 返回行数
 * @method void setType(string $Type) 设置过滤条件名称。

如：sql - SQL命令详情

host – 客户端 IP；
user – 数据库账户；
dbName – 数据库名称；
sqlType - SQL类型；
errCode - 错误码

execTime - 执行时间
lockWaitTime - 锁等待时间
ioWaitTime - IO等待时间
trxLivingTime - 事务执行时间
cpuTime- Cpu时间

threadId - 线程ID
trxId - 事务ID
checkRows - 扫描行数
affectRows - 影响行数
sentRows - 返回行数
 * @method string getCompare() 获取过滤条件匹配类型。支持：
INC – 包含；     （多个值之前是||的关系）
EXC – 不包含； （多个值之前是&&的关系）
EQS – 等于；     （多个值之前是||的关系）
NEQ – 不等于；（多个值之前是&&的关系）

RA – 范围；
 * @method void setCompare(string $Compare) 设置过滤条件匹配类型。支持：
INC – 包含；     （多个值之前是||的关系）
EXC – 不包含； （多个值之前是&&的关系）
EQS – 等于；     （多个值之前是||的关系）
NEQ – 不等于；（多个值之前是&&的关系）

RA – 范围；
 * @method array getValue() 获取过滤条件匹配值。当Compare=RG时，例：["1-100","200-300"]
 * @method void setValue(array $Value) 设置过滤条件匹配值。当Compare=RG时，例：["1-100","200-300"]
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string 过滤条件名称。

如：sql - SQL命令详情

host – 客户端 IP；
user – 数据库账户；
dbName – 数据库名称；
sqlType - SQL类型；
errCode - 错误码

execTime - 执行时间
lockWaitTime - 锁等待时间
ioWaitTime - IO等待时间
trxLivingTime - 事务执行时间
cpuTime- Cpu时间

threadId - 线程ID
trxId - 事务ID
checkRows - 扫描行数
affectRows - 影响行数
sentRows - 返回行数
     */
    public $Type;

    /**
     * @var string 过滤条件匹配类型。支持：
INC – 包含；     （多个值之前是||的关系）
EXC – 不包含； （多个值之前是&&的关系）
EQS – 等于；     （多个值之前是||的关系）
NEQ – 不等于；（多个值之前是&&的关系）

RA – 范围；
     */
    public $Compare;

    /**
     * @var array 过滤条件匹配值。当Compare=RG时，例：["1-100","200-300"]
     */
    public $Value;

    /**
     * @param string $Type 过滤条件名称。

如：sql - SQL命令详情

host – 客户端 IP；
user – 数据库账户；
dbName – 数据库名称；
sqlType - SQL类型；
errCode - 错误码

execTime - 执行时间
lockWaitTime - 锁等待时间
ioWaitTime - IO等待时间
trxLivingTime - 事务执行时间
cpuTime- Cpu时间

threadId - 线程ID
trxId - 事务ID
checkRows - 扫描行数
affectRows - 影响行数
sentRows - 返回行数
     * @param string $Compare 过滤条件匹配类型。支持：
INC – 包含；     （多个值之前是||的关系）
EXC – 不包含； （多个值之前是&&的关系）
EQS – 等于；     （多个值之前是||的关系）
NEQ – 不等于；（多个值之前是&&的关系）

RA – 范围；
     * @param array $Value 过滤条件匹配值。当Compare=RG时，例：["1-100","200-300"]
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
