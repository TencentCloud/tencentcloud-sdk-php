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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计日志详细信息
 *
 * @method integer getAffectRows() 获取影响行数。
 * @method void setAffectRows(integer $AffectRows) 设置影响行数。
 * @method integer getErrCode() 获取错误码。
 * @method void setErrCode(integer $ErrCode) 设置错误码。
 * @method string getSqlType() 获取SQL类型。
 * @method void setSqlType(string $SqlType) 设置SQL类型。
 * @method string getTableName() 获取表名称。
 * @method void setTableName(string $TableName) 设置表名称。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getPolicyName() 获取审计策略名称。
 * @method void setPolicyName(string $PolicyName) 设置审计策略名称。
 * @method string getDBName() 获取数据库名称。
 * @method void setDBName(string $DBName) 设置数据库名称。
 * @method string getSql() 获取SQL语句。
 * @method void setSql(string $Sql) 设置SQL语句。
 * @method string getHost() 获取客户端地址。
 * @method void setHost(string $Host) 设置客户端地址。
 * @method string getUser() 获取用户名。
 * @method void setUser(string $User) 设置用户名。
 * @method integer getExecTime() 获取执行时间，微秒。
 * @method void setExecTime(integer $ExecTime) 设置执行时间，微秒。
 * @method string getTimestamp() 获取时间。
 * @method void setTimestamp(string $Timestamp) 设置时间。
 * @method integer getSentRows() 获取返回行数。
 * @method void setSentRows(integer $SentRows) 设置返回行数。
 * @method integer getThreadId() 获取执行线程ID。
 * @method void setThreadId(integer $ThreadId) 设置执行线程ID。
 * @method integer getCheckRows() 获取扫描行数。
 * @method void setCheckRows(integer $CheckRows) 设置扫描行数。
 * @method float getCpuTime() 获取cpu执行时间，微秒。
 * @method void setCpuTime(float $CpuTime) 设置cpu执行时间，微秒。
 * @method integer getIoWaitTime() 获取IO等待时间，微秒。
 * @method void setIoWaitTime(integer $IoWaitTime) 设置IO等待时间，微秒。
 * @method integer getLockWaitTime() 获取锁等待时间，微秒。
 * @method void setLockWaitTime(integer $LockWaitTime) 设置锁等待时间，微秒。
 * @method integer getTrxLivingTime() 获取事务持续等待时间，微秒。
 * @method void setTrxLivingTime(integer $TrxLivingTime) 设置事务持续等待时间，微秒。
 * @method integer getNsTime() 获取开始时间，与timestamp构成一个精确到纳秒的时间。
 * @method void setNsTime(integer $NsTime) 设置开始时间，与timestamp构成一个精确到纳秒的时间。
 * @method array getTemplateInfo() 获取日志命中规则模板的基本信息
 * @method void setTemplateInfo(array $TemplateInfo) 设置日志命中规则模板的基本信息
 * @method integer getTrxId() 获取事务ID
 * @method void setTrxId(integer $TrxId) 设置事务ID
 */
class AuditLog extends AbstractModel
{
    /**
     * @var integer 影响行数。
     */
    public $AffectRows;

    /**
     * @var integer 错误码。
     */
    public $ErrCode;

    /**
     * @var string SQL类型。
     */
    public $SqlType;

    /**
     * @var string 表名称。
     */
    public $TableName;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 审计策略名称。
     */
    public $PolicyName;

    /**
     * @var string 数据库名称。
     */
    public $DBName;

    /**
     * @var string SQL语句。
     */
    public $Sql;

    /**
     * @var string 客户端地址。
     */
    public $Host;

    /**
     * @var string 用户名。
     */
    public $User;

    /**
     * @var integer 执行时间，微秒。
     */
    public $ExecTime;

    /**
     * @var string 时间。
     */
    public $Timestamp;

    /**
     * @var integer 返回行数。
     */
    public $SentRows;

    /**
     * @var integer 执行线程ID。
     */
    public $ThreadId;

    /**
     * @var integer 扫描行数。
     */
    public $CheckRows;

    /**
     * @var float cpu执行时间，微秒。
     */
    public $CpuTime;

    /**
     * @var integer IO等待时间，微秒。
     */
    public $IoWaitTime;

    /**
     * @var integer 锁等待时间，微秒。
     */
    public $LockWaitTime;

    /**
     * @var integer 事务持续等待时间，微秒。
     */
    public $TrxLivingTime;

    /**
     * @var integer 开始时间，与timestamp构成一个精确到纳秒的时间。
     */
    public $NsTime;

    /**
     * @var array 日志命中规则模板的基本信息
     */
    public $TemplateInfo;

    /**
     * @var integer 事务ID
     */
    public $TrxId;

    /**
     * @param integer $AffectRows 影响行数。
     * @param integer $ErrCode 错误码。
     * @param string $SqlType SQL类型。
     * @param string $TableName 表名称。
     * @param string $InstanceName 实例名称。
     * @param string $PolicyName 审计策略名称。
     * @param string $DBName 数据库名称。
     * @param string $Sql SQL语句。
     * @param string $Host 客户端地址。
     * @param string $User 用户名。
     * @param integer $ExecTime 执行时间，微秒。
     * @param string $Timestamp 时间。
     * @param integer $SentRows 返回行数。
     * @param integer $ThreadId 执行线程ID。
     * @param integer $CheckRows 扫描行数。
     * @param float $CpuTime cpu执行时间，微秒。
     * @param integer $IoWaitTime IO等待时间，微秒。
     * @param integer $LockWaitTime 锁等待时间，微秒。
     * @param integer $TrxLivingTime 事务持续等待时间，微秒。
     * @param integer $NsTime 开始时间，与timestamp构成一个精确到纳秒的时间。
     * @param array $TemplateInfo 日志命中规则模板的基本信息
     * @param integer $TrxId 事务ID
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
        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("CheckRows",$param) and $param["CheckRows"] !== null) {
            $this->CheckRows = $param["CheckRows"];
        }

        if (array_key_exists("CpuTime",$param) and $param["CpuTime"] !== null) {
            $this->CpuTime = $param["CpuTime"];
        }

        if (array_key_exists("IoWaitTime",$param) and $param["IoWaitTime"] !== null) {
            $this->IoWaitTime = $param["IoWaitTime"];
        }

        if (array_key_exists("LockWaitTime",$param) and $param["LockWaitTime"] !== null) {
            $this->LockWaitTime = $param["LockWaitTime"];
        }

        if (array_key_exists("TrxLivingTime",$param) and $param["TrxLivingTime"] !== null) {
            $this->TrxLivingTime = $param["TrxLivingTime"];
        }

        if (array_key_exists("NsTime",$param) and $param["NsTime"] !== null) {
            $this->NsTime = $param["NsTime"];
        }

        if (array_key_exists("TemplateInfo",$param) and $param["TemplateInfo"] !== null) {
            $this->TemplateInfo = [];
            foreach ($param["TemplateInfo"] as $key => $value){
                $obj = new LogRuleTemplateInfo();
                $obj->deserialize($value);
                array_push($this->TemplateInfo, $obj);
            }
        }

        if (array_key_exists("TrxId",$param) and $param["TrxId"] !== null) {
            $this->TrxId = $param["TrxId"];
        }
    }
}
