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
 * CreateOnlineDDLJob请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getAlter() 获取要执行的 DDL 语句。常用的在线DDL参考此API文档示例部分
 * @method void setAlter(string $Alter) 设置要执行的 DDL 语句。常用的在线DDL参考此API文档示例部分
 * @method string getDbName() 获取要修改的数据库	
 * @method void setDbName(string $DbName) 设置要修改的数据库	
 * @method string getTable() 获取要修改的表
 * @method void setTable(string $Table) 设置要修改的表
 * @method string getUser() 获取指定账号执行DDL，需确保账号有 ALTER, CREATE, INSERT, UPDATE, DROP, DELETE, INDEX, CREATE TEMPORARY TABLES, LOCK TABLES, TRIGGER, REPLICATION CLIENT, REPLICATION SLAVE 等相关权限 （若不填写将默认使用系统账号）
 * @method void setUser(string $User) 设置指定账号执行DDL，需确保账号有 ALTER, CREATE, INSERT, UPDATE, DROP, DELETE, INDEX, CREATE TEMPORARY TABLES, LOCK TABLES, TRIGGER, REPLICATION CLIENT, REPLICATION SLAVE 等相关权限 （若不填写将默认使用系统账号）
 * @method string getPassword() 获取指定账号的密码
 * @method void setPassword(string $Password) 设置指定账号的密码
 * @method integer getCriticalLoad() 获取运行线程数大于此值时，将终止DDL。不填则默认58
 * @method void setCriticalLoad(integer $CriticalLoad) 设置运行线程数大于此值时，将终止DDL。不填则默认58
 * @method integer getCheckAutoInc() 获取是否检查自增字段。为1则不允许修改自增字段，0或不填写则不检查
 * @method void setCheckAutoInc(integer $CheckAutoInc) 设置是否检查自增字段。为1则不允许修改自增字段，0或不填写则不检查
 * @method integer getMaxDelay() 获取允许的主备延迟时间(单位s)，0或不填写则不检查延迟
 * @method void setMaxDelay(integer $MaxDelay) 设置允许的主备延迟时间(单位s)，0或不填写则不检查延迟
 * @method integer getUsePt() 获取是否使用pt-osc工具做DDL
 * @method void setUsePt(integer $UsePt) 设置是否使用pt-osc工具做DDL
 * @method string getStartTime() 获取开始执行时间
 * @method void setStartTime(string $StartTime) 设置开始执行时间
 */
class CreateOnlineDDLJobRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 要执行的 DDL 语句。常用的在线DDL参考此API文档示例部分
     */
    public $Alter;

    /**
     * @var string 要修改的数据库	
     */
    public $DbName;

    /**
     * @var string 要修改的表
     */
    public $Table;

    /**
     * @var string 指定账号执行DDL，需确保账号有 ALTER, CREATE, INSERT, UPDATE, DROP, DELETE, INDEX, CREATE TEMPORARY TABLES, LOCK TABLES, TRIGGER, REPLICATION CLIENT, REPLICATION SLAVE 等相关权限 （若不填写将默认使用系统账号）
     */
    public $User;

    /**
     * @var string 指定账号的密码
     */
    public $Password;

    /**
     * @var integer 运行线程数大于此值时，将终止DDL。不填则默认58
     */
    public $CriticalLoad;

    /**
     * @var integer 是否检查自增字段。为1则不允许修改自增字段，0或不填写则不检查
     */
    public $CheckAutoInc;

    /**
     * @var integer 允许的主备延迟时间(单位s)，0或不填写则不检查延迟
     */
    public $MaxDelay;

    /**
     * @var integer 是否使用pt-osc工具做DDL
     */
    public $UsePt;

    /**
     * @var string 开始执行时间
     */
    public $StartTime;

    /**
     * @param string $InstanceId 实例Id
     * @param string $Alter 要执行的 DDL 语句。常用的在线DDL参考此API文档示例部分
     * @param string $DbName 要修改的数据库	
     * @param string $Table 要修改的表
     * @param string $User 指定账号执行DDL，需确保账号有 ALTER, CREATE, INSERT, UPDATE, DROP, DELETE, INDEX, CREATE TEMPORARY TABLES, LOCK TABLES, TRIGGER, REPLICATION CLIENT, REPLICATION SLAVE 等相关权限 （若不填写将默认使用系统账号）
     * @param string $Password 指定账号的密码
     * @param integer $CriticalLoad 运行线程数大于此值时，将终止DDL。不填则默认58
     * @param integer $CheckAutoInc 是否检查自增字段。为1则不允许修改自增字段，0或不填写则不检查
     * @param integer $MaxDelay 允许的主备延迟时间(单位s)，0或不填写则不检查延迟
     * @param integer $UsePt 是否使用pt-osc工具做DDL
     * @param string $StartTime 开始执行时间
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Alter",$param) and $param["Alter"] !== null) {
            $this->Alter = $param["Alter"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("CriticalLoad",$param) and $param["CriticalLoad"] !== null) {
            $this->CriticalLoad = $param["CriticalLoad"];
        }

        if (array_key_exists("CheckAutoInc",$param) and $param["CheckAutoInc"] !== null) {
            $this->CheckAutoInc = $param["CheckAutoInc"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("UsePt",$param) and $param["UsePt"] !== null) {
            $this->UsePt = $param["UsePt"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
