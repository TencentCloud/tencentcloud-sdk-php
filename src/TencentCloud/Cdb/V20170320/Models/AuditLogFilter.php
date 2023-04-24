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
 * 审计日志过滤条件。查询审计日志时，用户过滤返回的审计日志。
 *
 * @method array getHost() 获取客户端地址。
 * @method void setHost(array $Host) 设置客户端地址。
 * @method array getUser() 获取用户名。
 * @method void setUser(array $User) 设置用户名。
 * @method array getDBName() 获取数据库名称。
 * @method void setDBName(array $DBName) 设置数据库名称。
 * @method array getTableName() 获取表名称。
 * @method void setTableName(array $TableName) 设置表名称。
 * @method array getPolicyName() 获取审计策略名称。
 * @method void setPolicyName(array $PolicyName) 设置审计策略名称。
 * @method string getSql() 获取SQL 语句。支持模糊匹配。
 * @method void setSql(string $Sql) 设置SQL 语句。支持模糊匹配。
 * @method string getSqlType() 获取SQL 类型。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
 * @method void setSqlType(string $SqlType) 设置SQL 类型。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
 * @method integer getExecTime() 获取执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
 * @method void setExecTime(integer $ExecTime) 设置执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
 * @method integer getAffectRows() 获取影响行数。表示筛选影响行数大于该值的审计日志。
 * @method void setAffectRows(integer $AffectRows) 设置影响行数。表示筛选影响行数大于该值的审计日志。
 * @method array getSqlTypes() 获取SQL 类型。支持多个类型同时查询。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
 * @method void setSqlTypes(array $SqlTypes) 设置SQL 类型。支持多个类型同时查询。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
 * @method array getSqls() 获取SQL 语句。支持传递多个sql语句。
 * @method void setSqls(array $Sqls) 设置SQL 语句。支持传递多个sql语句。
 * @method string getAffectRowsSection() 获取影响行数，格式为M-N，例如：10-200
 * @method void setAffectRowsSection(string $AffectRowsSection) 设置影响行数，格式为M-N，例如：10-200
 * @method string getSentRowsSection() 获取返回行数，格式为M-N，例如：10-200
 * @method void setSentRowsSection(string $SentRowsSection) 设置返回行数，格式为M-N，例如：10-200
 * @method string getExecTimeSection() 获取执行时间，格式为M-N，例如：10-200
 * @method void setExecTimeSection(string $ExecTimeSection) 设置执行时间，格式为M-N，例如：10-200
 * @method string getLockWaitTimeSection() 获取锁等待时间，格式为M-N，例如：10-200
 * @method void setLockWaitTimeSection(string $LockWaitTimeSection) 设置锁等待时间，格式为M-N，例如：10-200
 * @method string getIoWaitTimeSection() 获取IO等待时间，格式为M-N，例如：10-200
 * @method void setIoWaitTimeSection(string $IoWaitTimeSection) 设置IO等待时间，格式为M-N，例如：10-200
 * @method string getTransactionLivingTimeSection() 获取事务持续时间，格式为M-N，例如：10-200
 * @method void setTransactionLivingTimeSection(string $TransactionLivingTimeSection) 设置事务持续时间，格式为M-N，例如：10-200
 * @method array getThreadId() 获取线程ID
 * @method void setThreadId(array $ThreadId) 设置线程ID
 * @method integer getSentRows() 获取返回行数。表示筛选返回行数大于该值的审计日志。
 * @method void setSentRows(integer $SentRows) 设置返回行数。表示筛选返回行数大于该值的审计日志。
 * @method array getErrCode() 获取mysql错误码
 * @method void setErrCode(array $ErrCode) 设置mysql错误码
 */
class AuditLogFilter extends AbstractModel
{
    /**
     * @var array 客户端地址。
     */
    public $Host;

    /**
     * @var array 用户名。
     */
    public $User;

    /**
     * @var array 数据库名称。
     */
    public $DBName;

    /**
     * @var array 表名称。
     */
    public $TableName;

    /**
     * @var array 审计策略名称。
     */
    public $PolicyName;

    /**
     * @var string SQL 语句。支持模糊匹配。
     */
    public $Sql;

    /**
     * @var string SQL 类型。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
     */
    public $SqlType;

    /**
     * @var integer 执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
     */
    public $ExecTime;

    /**
     * @var integer 影响行数。表示筛选影响行数大于该值的审计日志。
     */
    public $AffectRows;

    /**
     * @var array SQL 类型。支持多个类型同时查询。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
     */
    public $SqlTypes;

    /**
     * @var array SQL 语句。支持传递多个sql语句。
     */
    public $Sqls;

    /**
     * @var string 影响行数，格式为M-N，例如：10-200
     */
    public $AffectRowsSection;

    /**
     * @var string 返回行数，格式为M-N，例如：10-200
     */
    public $SentRowsSection;

    /**
     * @var string 执行时间，格式为M-N，例如：10-200
     */
    public $ExecTimeSection;

    /**
     * @var string 锁等待时间，格式为M-N，例如：10-200
     */
    public $LockWaitTimeSection;

    /**
     * @var string IO等待时间，格式为M-N，例如：10-200
     */
    public $IoWaitTimeSection;

    /**
     * @var string 事务持续时间，格式为M-N，例如：10-200
     */
    public $TransactionLivingTimeSection;

    /**
     * @var array 线程ID
     */
    public $ThreadId;

    /**
     * @var integer 返回行数。表示筛选返回行数大于该值的审计日志。
     */
    public $SentRows;

    /**
     * @var array mysql错误码
     */
    public $ErrCode;

    /**
     * @param array $Host 客户端地址。
     * @param array $User 用户名。
     * @param array $DBName 数据库名称。
     * @param array $TableName 表名称。
     * @param array $PolicyName 审计策略名称。
     * @param string $Sql SQL 语句。支持模糊匹配。
     * @param string $SqlType SQL 类型。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
     * @param integer $ExecTime 执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
     * @param integer $AffectRows 影响行数。表示筛选影响行数大于该值的审计日志。
     * @param array $SqlTypes SQL 类型。支持多个类型同时查询。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
     * @param array $Sqls SQL 语句。支持传递多个sql语句。
     * @param string $AffectRowsSection 影响行数，格式为M-N，例如：10-200
     * @param string $SentRowsSection 返回行数，格式为M-N，例如：10-200
     * @param string $ExecTimeSection 执行时间，格式为M-N，例如：10-200
     * @param string $LockWaitTimeSection 锁等待时间，格式为M-N，例如：10-200
     * @param string $IoWaitTimeSection IO等待时间，格式为M-N，例如：10-200
     * @param string $TransactionLivingTimeSection 事务持续时间，格式为M-N，例如：10-200
     * @param array $ThreadId 线程ID
     * @param integer $SentRows 返回行数。表示筛选返回行数大于该值的审计日志。
     * @param array $ErrCode mysql错误码
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("SqlTypes",$param) and $param["SqlTypes"] !== null) {
            $this->SqlTypes = $param["SqlTypes"];
        }

        if (array_key_exists("Sqls",$param) and $param["Sqls"] !== null) {
            $this->Sqls = $param["Sqls"];
        }

        if (array_key_exists("AffectRowsSection",$param) and $param["AffectRowsSection"] !== null) {
            $this->AffectRowsSection = $param["AffectRowsSection"];
        }

        if (array_key_exists("SentRowsSection",$param) and $param["SentRowsSection"] !== null) {
            $this->SentRowsSection = $param["SentRowsSection"];
        }

        if (array_key_exists("ExecTimeSection",$param) and $param["ExecTimeSection"] !== null) {
            $this->ExecTimeSection = $param["ExecTimeSection"];
        }

        if (array_key_exists("LockWaitTimeSection",$param) and $param["LockWaitTimeSection"] !== null) {
            $this->LockWaitTimeSection = $param["LockWaitTimeSection"];
        }

        if (array_key_exists("IoWaitTimeSection",$param) and $param["IoWaitTimeSection"] !== null) {
            $this->IoWaitTimeSection = $param["IoWaitTimeSection"];
        }

        if (array_key_exists("TransactionLivingTimeSection",$param) and $param["TransactionLivingTimeSection"] !== null) {
            $this->TransactionLivingTimeSection = $param["TransactionLivingTimeSection"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }
    }
}
