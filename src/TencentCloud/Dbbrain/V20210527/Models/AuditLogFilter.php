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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤条件。可按设置的过滤条件过滤日志。
 *
 * @method array getHost() 获取客户端地址。
 * @method void setHost(array $Host) 设置客户端地址。
 * @method array getDBName() 获取数据库名称。
 * @method void setDBName(array $DBName) 设置数据库名称。
 * @method array getUser() 获取用户名。
 * @method void setUser(array $User) 设置用户名。
 * @method integer getSentRows() 获取返回行数。表示筛选返回行数大于该值的审计日志。
 * @method void setSentRows(integer $SentRows) 设置返回行数。表示筛选返回行数大于该值的审计日志。
 * @method integer getAffectRows() 获取影响行数。表示筛选影响行数大于该值的审计日志。
 * @method void setAffectRows(integer $AffectRows) 设置影响行数。表示筛选影响行数大于该值的审计日志。
 * @method integer getExecTime() 获取执行时间。单位为：µs。表示筛选执行时间大于该值的审计日志。
 * @method void setExecTime(integer $ExecTime) 设置执行时间。单位为：µs。表示筛选执行时间大于该值的审计日志。
 */
class AuditLogFilter extends AbstractModel
{
    /**
     * @var array 客户端地址。
     */
    public $Host;

    /**
     * @var array 数据库名称。
     */
    public $DBName;

    /**
     * @var array 用户名。
     */
    public $User;

    /**
     * @var integer 返回行数。表示筛选返回行数大于该值的审计日志。
     */
    public $SentRows;

    /**
     * @var integer 影响行数。表示筛选影响行数大于该值的审计日志。
     */
    public $AffectRows;

    /**
     * @var integer 执行时间。单位为：µs。表示筛选执行时间大于该值的审计日志。
     */
    public $ExecTime;

    /**
     * @param array $Host 客户端地址。
     * @param array $DBName 数据库名称。
     * @param array $User 用户名。
     * @param integer $SentRows 返回行数。表示筛选返回行数大于该值的审计日志。
     * @param integer $AffectRows 影响行数。表示筛选影响行数大于该值的审计日志。
     * @param integer $ExecTime 执行时间。单位为：µs。表示筛选执行时间大于该值的审计日志。
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

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }
    }
}
