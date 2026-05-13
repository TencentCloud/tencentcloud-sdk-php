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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计日志列表信息
 *
 * @method float getAiScore() 获取ai分数
 * @method void setAiScore(float $AiScore) 设置ai分数
 * @method string getAppUser() 获取应用用户
 * @method void setAppUser(string $AppUser) 设置应用用户
 * @method string getBackPacket() 获取备份数据包
 * @method void setBackPacket(string $BackPacket) 设置备份数据包
 * @method string getClientIp() 获取客户端 IP
 * @method void setClientIp(string $ClientIp) 设置客户端 IP
 * @method string getClientMac() 获取客户端 Mac
 * @method void setClientMac(string $ClientMac) 设置客户端 Mac
 * @method string getClientName() 获取终端名称，取值Proxy时为casb代理流量，其它为Agent流量
 * @method void setClientName(string $ClientName) 设置终端名称，取值Proxy时为casb代理流量，其它为Agent流量
 * @method string getClientUser() 获取客户端用户
 * @method void setClientUser(string $ClientUser) 设置客户端用户
 * @method integer getClientPort() 获取客户端端口
 * @method void setClientPort(integer $ClientPort) 设置客户端端口
 * @method integer getDangerLevel() 获取风险等级
 * @method void setDangerLevel(integer $DangerLevel) 设置风险等级
 * @method string getDbIp() 获取数据库 IP
 * @method void setDbIp(string $DbIp) 设置数据库 IP
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method integer getDbPort() 获取数据库端口
 * @method void setDbPort(integer $DbPort) 设置数据库端口
 * @method string getDbUser() 获取数据库用户
 * @method void setDbUser(string $DbUser) 设置数据库用户
 * @method integer getEffectRow() 获取影响行数
 * @method void setEffectRow(integer $EffectRow) 设置影响行数
 * @method integer getExecTime() 获取执行时间
 * @method void setExecTime(integer $ExecTime) 设置执行时间
 * @method string getHitRule() 获取命中规则
 * @method void setHitRule(string $HitRule) 设置命中规则
 * @method integer getId() 获取日志 ID
 * @method void setId(integer $Id) 设置日志 ID
 * @method integer getInstanceId() 获取数据资产名称
 * @method void setInstanceId(integer $InstanceId) 设置数据资产名称
 * @method string getInstanceName() 获取审计单元名
 * @method void setInstanceName(string $InstanceName) 设置审计单元名
 * @method string getOpSql() 获取操作语句(sql 语句)
 * @method void setOpSql(string $OpSql) 设置操作语句(sql 语句)
 * @method integer getOpTime() 获取操作时间(时间)
 * @method void setOpTime(integer $OpTime) 设置操作时间(时间)
 * @method string getRetMsg() 获取返回消息
 * @method void setRetMsg(string $RetMsg) 设置返回消息
 * @method integer getRetNo() 获取返回码
 * @method void setRetNo(integer $RetNo) 设置返回码
 * @method string getSessionId() 获取会话ID
 * @method void setSessionId(string $SessionId) 设置会话ID
 * @method string getSqlType() 获取操作类型
 * @method void setSqlType(string $SqlType) 设置操作类型
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 * @method string getAssetName() 获取数据资产名称
 * @method void setAssetName(string $AssetName) 设置数据资产名称
 * @method array getHitRules() 获取规则集合
 * @method void setHitRules(array $HitRules) 设置规则集合
 * @method string getSourceType() 获取流量来源
 * @method void setSourceType(string $SourceType) 设置流量来源
 * @method string getReqId() 获取单条审计日志id
 * @method void setReqId(string $ReqId) 设置单条审计日志id
 * @method string getSqlMainType() 获取SQL 主要类型，DML/DDL/DCL/TCL
 * @method void setSqlMainType(string $SqlMainType) 设置SQL 主要类型，DML/DDL/DCL/TCL
 * @method array getTableNames() 获取表名集合
 * @method void setTableNames(array $TableNames) 设置表名集合
 * @method array getFieldNames() 获取字段名集合
 * @method void setFieldNames(array $FieldNames) 设置字段名集合
 * @method string getFieldName() 获取字段名
 * @method void setFieldName(string $FieldName) 设置字段名
 * @method string getDbType() 获取数据库类型
 * @method void setDbType(string $DbType) 设置数据库类型
 * @method string getClientDriverName() 获取客户端工具
 * @method void setClientDriverName(string $ClientDriverName) 设置客户端工具
 * @method Location getLocation() 获取位置信息
 * @method void setLocation(Location $Location) 设置位置信息
 * @method array getFieldDetails() 获取字段信息（包含敏感信息）
 * @method void setFieldDetails(array $FieldDetails) 设置字段信息（包含敏感信息）
 * @method integer getAppId() 获取资产所属账号app id
 * @method void setAppId(integer $AppId) 设置资产所属账号app id
 * @method string getNickName() 获取账号昵称
 * @method void setNickName(string $NickName) 设置账号昵称
 * @method string getUin() 获取资产所属账号uin
 * @method void setUin(string $Uin) 设置资产所属账号uin
 */
class AuditLogInfo extends AbstractModel
{
    /**
     * @var float ai分数
     */
    public $AiScore;

    /**
     * @var string 应用用户
     */
    public $AppUser;

    /**
     * @var string 备份数据包
     */
    public $BackPacket;

    /**
     * @var string 客户端 IP
     */
    public $ClientIp;

    /**
     * @var string 客户端 Mac
     */
    public $ClientMac;

    /**
     * @var string 终端名称，取值Proxy时为casb代理流量，其它为Agent流量
     */
    public $ClientName;

    /**
     * @var string 客户端用户
     */
    public $ClientUser;

    /**
     * @var integer 客户端端口
     */
    public $ClientPort;

    /**
     * @var integer 风险等级
     */
    public $DangerLevel;

    /**
     * @var string 数据库 IP
     */
    public $DbIp;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var integer 数据库端口
     */
    public $DbPort;

    /**
     * @var string 数据库用户
     */
    public $DbUser;

    /**
     * @var integer 影响行数
     */
    public $EffectRow;

    /**
     * @var integer 执行时间
     */
    public $ExecTime;

    /**
     * @var string 命中规则
     */
    public $HitRule;

    /**
     * @var integer 日志 ID
     */
    public $Id;

    /**
     * @var integer 数据资产名称
     */
    public $InstanceId;

    /**
     * @var string 审计单元名
     */
    public $InstanceName;

    /**
     * @var string 操作语句(sql 语句)
     */
    public $OpSql;

    /**
     * @var integer 操作时间(时间)
     */
    public $OpTime;

    /**
     * @var string 返回消息
     */
    public $RetMsg;

    /**
     * @var integer 返回码
     */
    public $RetNo;

    /**
     * @var string 会话ID
     */
    public $SessionId;

    /**
     * @var string 操作类型
     */
    public $SqlType;

    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @var string 数据资产名称
     */
    public $AssetName;

    /**
     * @var array 规则集合
     */
    public $HitRules;

    /**
     * @var string 流量来源
     */
    public $SourceType;

    /**
     * @var string 单条审计日志id
     */
    public $ReqId;

    /**
     * @var string SQL 主要类型，DML/DDL/DCL/TCL
     */
    public $SqlMainType;

    /**
     * @var array 表名集合
     */
    public $TableNames;

    /**
     * @var array 字段名集合
     */
    public $FieldNames;

    /**
     * @var string 字段名
     */
    public $FieldName;

    /**
     * @var string 数据库类型
     */
    public $DbType;

    /**
     * @var string 客户端工具
     */
    public $ClientDriverName;

    /**
     * @var Location 位置信息
     */
    public $Location;

    /**
     * @var array 字段信息（包含敏感信息）
     */
    public $FieldDetails;

    /**
     * @var integer 资产所属账号app id
     */
    public $AppId;

    /**
     * @var string 账号昵称
     */
    public $NickName;

    /**
     * @var string 资产所属账号uin
     */
    public $Uin;

    /**
     * @param float $AiScore ai分数
     * @param string $AppUser 应用用户
     * @param string $BackPacket 备份数据包
     * @param string $ClientIp 客户端 IP
     * @param string $ClientMac 客户端 Mac
     * @param string $ClientName 终端名称，取值Proxy时为casb代理流量，其它为Agent流量
     * @param string $ClientUser 客户端用户
     * @param integer $ClientPort 客户端端口
     * @param integer $DangerLevel 风险等级
     * @param string $DbIp 数据库 IP
     * @param string $DbName 数据库名称
     * @param integer $DbPort 数据库端口
     * @param string $DbUser 数据库用户
     * @param integer $EffectRow 影响行数
     * @param integer $ExecTime 执行时间
     * @param string $HitRule 命中规则
     * @param integer $Id 日志 ID
     * @param integer $InstanceId 数据资产名称
     * @param string $InstanceName 审计单元名
     * @param string $OpSql 操作语句(sql 语句)
     * @param integer $OpTime 操作时间(时间)
     * @param string $RetMsg 返回消息
     * @param integer $RetNo 返回码
     * @param string $SessionId 会话ID
     * @param string $SqlType 操作类型
     * @param string $TableName 表名
     * @param string $AssetName 数据资产名称
     * @param array $HitRules 规则集合
     * @param string $SourceType 流量来源
     * @param string $ReqId 单条审计日志id
     * @param string $SqlMainType SQL 主要类型，DML/DDL/DCL/TCL
     * @param array $TableNames 表名集合
     * @param array $FieldNames 字段名集合
     * @param string $FieldName 字段名
     * @param string $DbType 数据库类型
     * @param string $ClientDriverName 客户端工具
     * @param Location $Location 位置信息
     * @param array $FieldDetails 字段信息（包含敏感信息）
     * @param integer $AppId 资产所属账号app id
     * @param string $NickName 账号昵称
     * @param string $Uin 资产所属账号uin
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
        if (array_key_exists("AiScore",$param) and $param["AiScore"] !== null) {
            $this->AiScore = $param["AiScore"];
        }

        if (array_key_exists("AppUser",$param) and $param["AppUser"] !== null) {
            $this->AppUser = $param["AppUser"];
        }

        if (array_key_exists("BackPacket",$param) and $param["BackPacket"] !== null) {
            $this->BackPacket = $param["BackPacket"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ClientMac",$param) and $param["ClientMac"] !== null) {
            $this->ClientMac = $param["ClientMac"];
        }

        if (array_key_exists("ClientName",$param) and $param["ClientName"] !== null) {
            $this->ClientName = $param["ClientName"];
        }

        if (array_key_exists("ClientUser",$param) and $param["ClientUser"] !== null) {
            $this->ClientUser = $param["ClientUser"];
        }

        if (array_key_exists("ClientPort",$param) and $param["ClientPort"] !== null) {
            $this->ClientPort = $param["ClientPort"];
        }

        if (array_key_exists("DangerLevel",$param) and $param["DangerLevel"] !== null) {
            $this->DangerLevel = $param["DangerLevel"];
        }

        if (array_key_exists("DbIp",$param) and $param["DbIp"] !== null) {
            $this->DbIp = $param["DbIp"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("DbUser",$param) and $param["DbUser"] !== null) {
            $this->DbUser = $param["DbUser"];
        }

        if (array_key_exists("EffectRow",$param) and $param["EffectRow"] !== null) {
            $this->EffectRow = $param["EffectRow"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("HitRule",$param) and $param["HitRule"] !== null) {
            $this->HitRule = $param["HitRule"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("OpSql",$param) and $param["OpSql"] !== null) {
            $this->OpSql = $param["OpSql"];
        }

        if (array_key_exists("OpTime",$param) and $param["OpTime"] !== null) {
            $this->OpTime = $param["OpTime"];
        }

        if (array_key_exists("RetMsg",$param) and $param["RetMsg"] !== null) {
            $this->RetMsg = $param["RetMsg"];
        }

        if (array_key_exists("RetNo",$param) and $param["RetNo"] !== null) {
            $this->RetNo = $param["RetNo"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("HitRules",$param) and $param["HitRules"] !== null) {
            $this->HitRules = [];
            foreach ($param["HitRules"] as $key => $value){
                $obj = new HitRules();
                $obj->deserialize($value);
                array_push($this->HitRules, $obj);
            }
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("ReqId",$param) and $param["ReqId"] !== null) {
            $this->ReqId = $param["ReqId"];
        }

        if (array_key_exists("SqlMainType",$param) and $param["SqlMainType"] !== null) {
            $this->SqlMainType = $param["SqlMainType"];
        }

        if (array_key_exists("TableNames",$param) and $param["TableNames"] !== null) {
            $this->TableNames = $param["TableNames"];
        }

        if (array_key_exists("FieldNames",$param) and $param["FieldNames"] !== null) {
            $this->FieldNames = $param["FieldNames"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("ClientDriverName",$param) and $param["ClientDriverName"] !== null) {
            $this->ClientDriverName = $param["ClientDriverName"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("FieldDetails",$param) and $param["FieldDetails"] !== null) {
            $this->FieldDetails = [];
            foreach ($param["FieldDetails"] as $key => $value){
                $obj = new TableField();
                $obj->deserialize($value);
                array_push($this->FieldDetails, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
