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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于显示当前正在运行的线程（连接/查询）信息，数据源来自系统表：information_schema.processlist。
 *
 * @method integer getId() 获取线程ID​​：唯一标识当前连接/线程的整数。
 * @method void setId(integer $Id) 设置线程ID​​：唯一标识当前连接/线程的整数。
 * @method string getUser() 获取用户名​​：发起连接的 MySQL 用户。
 * @method void setUser(string $User) 设置用户名​​：发起连接的 MySQL 用户。
 * @method string getHost() 获取客户端地址​​：发起连接的客户端主机名及端口（格式：host:port）。
 * @method void setHost(string $Host) 设置客户端地址​​：发起连接的客户端主机名及端口（格式：host:port）。
 * @method string getDb() 获取当前数据库​​：线程正在使用的数据库名（未选择数据库时为 空串）。
 * @method void setDb(string $Db) 设置当前数据库​​：线程正在使用的数据库名（未选择数据库时为 空串）。
 * @method string getCommand() 获取命令类型​​：线程正在执行的命令类型。常见值：

- Sleep：空闲等待状态（等待新查询）。
- Query：正在执行查询或 SQL 语句。
- Binlog Dump：主服务器线程向从服务器发送二进制日志。
- Connect：客户端正在连接。
- Killed：线程被终止但未完全退出。
 * @method void setCommand(string $Command) 设置命令类型​​：线程正在执行的命令类型。常见值：

- Sleep：空闲等待状态（等待新查询）。
- Query：正在执行查询或 SQL 语句。
- Binlog Dump：主服务器线程向从服务器发送二进制日志。
- Connect：客户端正在连接。
- Killed：线程被终止但未完全退出。
 * @method integer getTime() 获取执行时间（秒）​​：线程在当前状态持续的秒数。
 * @method void setTime(integer $Time) 设置执行时间（秒）​​：线程在当前状态持续的秒数。
 * @method string getProcessStartTime() 获取执行开始时间（秒）​​：线程在当前状态开始执行的时间。
 * @method void setProcessStartTime(string $ProcessStartTime) 设置执行开始时间（秒）​​：线程在当前状态开始执行的时间。
 * @method string getState() 获取​​状态描述​​：线程当前的详细操作状态。常见值：

- Sending data：正在处理/发送数据。
- Locked：等待表锁释放（例如 MyISAM 表级锁）。
- Sorting result：排序查询结果。
- Updating：更新表中数据。
- 当为NULL返回空串：无明确状态（如 Sleep 时）。
 * @method void setState(string $State) 设置​​状态描述​​：线程当前的详细操作状态。常见值：

- Sending data：正在处理/发送数据。
- Locked：等待表锁释放（例如 MyISAM 表级锁）。
- Sorting result：排序查询结果。
- Updating：更新表中数据。
- 当为NULL返回空串：无明确状态（如 Sleep 时）。
 * @method string getInfo() 获取执行语句​​：正在执行的 SQL 语句（前 1024 字符）。
 * @method void setInfo(string $Info) 设置执行语句​​：正在执行的 SQL 语句（前 1024 字符）。
 */
class Process extends AbstractModel
{
    /**
     * @var integer 线程ID​​：唯一标识当前连接/线程的整数。
     */
    public $Id;

    /**
     * @var string 用户名​​：发起连接的 MySQL 用户。
     */
    public $User;

    /**
     * @var string 客户端地址​​：发起连接的客户端主机名及端口（格式：host:port）。
     */
    public $Host;

    /**
     * @var string 当前数据库​​：线程正在使用的数据库名（未选择数据库时为 空串）。
     */
    public $Db;

    /**
     * @var string 命令类型​​：线程正在执行的命令类型。常见值：

- Sleep：空闲等待状态（等待新查询）。
- Query：正在执行查询或 SQL 语句。
- Binlog Dump：主服务器线程向从服务器发送二进制日志。
- Connect：客户端正在连接。
- Killed：线程被终止但未完全退出。
     */
    public $Command;

    /**
     * @var integer 执行时间（秒）​​：线程在当前状态持续的秒数。
     */
    public $Time;

    /**
     * @var string 执行开始时间（秒）​​：线程在当前状态开始执行的时间。
     */
    public $ProcessStartTime;

    /**
     * @var string ​​状态描述​​：线程当前的详细操作状态。常见值：

- Sending data：正在处理/发送数据。
- Locked：等待表锁释放（例如 MyISAM 表级锁）。
- Sorting result：排序查询结果。
- Updating：更新表中数据。
- 当为NULL返回空串：无明确状态（如 Sleep 时）。
     */
    public $State;

    /**
     * @var string 执行语句​​：正在执行的 SQL 语句（前 1024 字符）。
     */
    public $Info;

    /**
     * @param integer $Id 线程ID​​：唯一标识当前连接/线程的整数。
     * @param string $User 用户名​​：发起连接的 MySQL 用户。
     * @param string $Host 客户端地址​​：发起连接的客户端主机名及端口（格式：host:port）。
     * @param string $Db 当前数据库​​：线程正在使用的数据库名（未选择数据库时为 空串）。
     * @param string $Command 命令类型​​：线程正在执行的命令类型。常见值：

- Sleep：空闲等待状态（等待新查询）。
- Query：正在执行查询或 SQL 语句。
- Binlog Dump：主服务器线程向从服务器发送二进制日志。
- Connect：客户端正在连接。
- Killed：线程被终止但未完全退出。
     * @param integer $Time 执行时间（秒）​​：线程在当前状态持续的秒数。
     * @param string $ProcessStartTime 执行开始时间（秒）​​：线程在当前状态开始执行的时间。
     * @param string $State ​​状态描述​​：线程当前的详细操作状态。常见值：

- Sending data：正在处理/发送数据。
- Locked：等待表锁释放（例如 MyISAM 表级锁）。
- Sorting result：排序查询结果。
- Updating：更新表中数据。
- 当为NULL返回空串：无明确状态（如 Sleep 时）。
     * @param string $Info 执行语句​​：正在执行的 SQL 语句（前 1024 字符）。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ProcessStartTime",$param) and $param["ProcessStartTime"] !== null) {
            $this->ProcessStartTime = $param["ProcessStartTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }
    }
}
