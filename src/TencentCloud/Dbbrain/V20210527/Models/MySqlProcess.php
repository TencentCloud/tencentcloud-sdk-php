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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关系型数据库线程
 *
 * @method string getID() 获取线程ID。
 * @method void setID(string $ID) 设置线程ID。
 * @method string getUser() 获取线程的操作账号名。
 * @method void setUser(string $User) 设置线程的操作账号名。
 * @method string getHost() 获取线程的操作主机地址。
 * @method void setHost(string $Host) 设置线程的操作主机地址。
 * @method string getDB() 获取线程的操作数据库。
 * @method void setDB(string $DB) 设置线程的操作数据库。
 * @method string getState() 获取线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。
 * @method void setState(string $State) 设置线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。
 * @method string getCommand() 获取线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。
 * @method void setCommand(string $Command) 设置线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。
 * @method string getTime() 获取线程的操作时长，单位秒。
 * @method void setTime(string $Time) 设置线程的操作时长，单位秒。
 * @method string getInfo() 获取线程的操作语句。
 * @method void setInfo(string $Info) 设置线程的操作语句。
 * @method string getSqlType() 获取sql类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlType(string $SqlType) 设置sql类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class MySqlProcess extends AbstractModel
{
    /**
     * @var string 线程ID。
     */
    public $ID;

    /**
     * @var string 线程的操作账号名。
     */
    public $User;

    /**
     * @var string 线程的操作主机地址。
     */
    public $Host;

    /**
     * @var string 线程的操作数据库。
     */
    public $DB;

    /**
     * @var string 线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。
     */
    public $State;

    /**
     * @var string 线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。
     */
    public $Command;

    /**
     * @var string 线程的操作时长，单位秒。
     */
    public $Time;

    /**
     * @var string 线程的操作语句。
     */
    public $Info;

    /**
     * @var string sql类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlType;

    /**
     * @param string $ID 线程ID。
     * @param string $User 线程的操作账号名。
     * @param string $Host 线程的操作主机地址。
     * @param string $DB 线程的操作数据库。
     * @param string $State 线程的操作状态。包含以下枚举值：Sending data​-线程正在处理查询结果， ​Sorting result​-线程正在对查询结果进行排序​，Creating tmp table​-线程正在创建临时表，Altering table​-线程正在执行表结构变更，Updating-线程执行更新中。
     * @param string $Command 线程的执行类型。包含以下枚举值：Sleep-线程处于空闲状态，Query-线程正在执行一个查询，Connect-从服务器连接到主服务器，Execute-线程正在执行预处理语句。
     * @param string $Time 线程的操作时长，单位秒。
     * @param string $Info 线程的操作语句。
     * @param string $SqlType sql类型
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }
    }
}
