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
 * 审计日志过滤条件
 *
 * @method integer getAffectRows() 获取<p>影响函数</p>
 * @method void setAffectRows(integer $AffectRows) 设置<p>影响函数</p>
 * @method array getDBName() 获取<p>数据库名字</p>
 * @method void setDBName(array $DBName) 设置<p>数据库名字</p>
 * @method integer getExecTime() 获取<p>执行时间</p>
 * @method void setExecTime(integer $ExecTime) 设置<p>执行时间</p>
 * @method array getHost() 获取<p>主机Host</p>
 * @method void setHost(array $Host) 设置<p>主机Host</p>
 * @method string getSql() 获取<p>sql语句</p>
 * @method void setSql(string $Sql) 设置<p>sql语句</p>
 * @method array getUser() 获取<p>登录名</p>
 * @method void setUser(array $User) 设置<p>登录名</p>
 * @method array getSqlType() 获取<p>审计类型</p>
 * @method void setSqlType(array $SqlType) 设置<p>审计类型</p>
 */
class AuditLogFilter extends AbstractModel
{
    /**
     * @var integer <p>影响函数</p>
     */
    public $AffectRows;

    /**
     * @var array <p>数据库名字</p>
     */
    public $DBName;

    /**
     * @var integer <p>执行时间</p>
     */
    public $ExecTime;

    /**
     * @var array <p>主机Host</p>
     */
    public $Host;

    /**
     * @var string <p>sql语句</p>
     */
    public $Sql;

    /**
     * @var array <p>登录名</p>
     */
    public $User;

    /**
     * @var array <p>审计类型</p>
     */
    public $SqlType;

    /**
     * @param integer $AffectRows <p>影响函数</p>
     * @param array $DBName <p>数据库名字</p>
     * @param integer $ExecTime <p>执行时间</p>
     * @param array $Host <p>主机Host</p>
     * @param string $Sql <p>sql语句</p>
     * @param array $User <p>登录名</p>
     * @param array $SqlType <p>审计类型</p>
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

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }
    }
}
