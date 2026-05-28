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
 * CreateDspmExportTask请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getDangerLevel() 获取<p>风险等级(0-安全,1-低风险,2-中风险,3-高风险,-1-全部)</p>
 * @method void setDangerLevel(integer $DangerLevel) 设置<p>风险等级(0-安全,1-低风险,2-中风险,3-高风险,-1-全部)</p>
 * @method string getDbName() 获取<p>数据库名称</p>
 * @method void setDbName(string $DbName) 设置<p>数据库名称</p>
 * @method integer getDbPort() 获取<p>数据库端口</p>
 * @method void setDbPort(integer $DbPort) 设置<p>数据库端口</p>
 * @method string getDbIp() 获取<p>数据库 IP</p>
 * @method void setDbIp(string $DbIp) 设置<p>数据库 IP</p>
 * @method integer getAssetsId() 获取<p>资产 ID</p>
 * @method void setAssetsId(integer $AssetsId) 设置<p>资产 ID</p>
 * @method string getSessionId() 获取<p>会话 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
 * @method string getClientSideIp() 获取<p>客户端 IP</p>
 * @method void setClientSideIp(string $ClientSideIp) 设置<p>客户端 IP</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method integer getHitRule() 获取<p>命中规则</p>
 * @method void setHitRule(integer $HitRule) 设置<p>命中规则</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method string getFuzzySearch() 获取<p>模糊查询</p>
 * @method void setFuzzySearch(string $FuzzySearch) 设置<p>模糊查询</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getClientName() 获取<p>客户端</p>
 * @method void setClientName(string $ClientName) 设置<p>客户端</p>
 * @method array getSourceTypes() 获取<p>流量来源，取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两都传或不传则返回所有</p>
 * @method void setSourceTypes(array $SourceTypes) 设置<p>流量来源，取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两都传或不传则返回所有</p>
 * @method string getTableName() 获取<p>表名，长度限制64，多个表名查询的话可以用空格连接</p>
 * @method void setTableName(string $TableName) 设置<p>表名，长度限制64，多个表名查询的话可以用空格连接</p>
 * @method string getFieldName() 获取<p>字段名，长度限制64，多个字段名查询的话可以用空格连接</p>
 * @method void setFieldName(string $FieldName) 设置<p>字段名，长度限制64，多个字段名查询的话可以用空格连接</p>
 * @method array getSqlMainTypes() 获取<p>SQL 主要类型，DDL, DML, DCL, TCL</p>
 * @method void setSqlMainTypes(array $SqlMainTypes) 设置<p>SQL 主要类型，DDL, DML, DCL, TCL</p>
 * @method string getSqlType() 获取<p>操作类型</p>
 * @method void setSqlType(string $SqlType) 设置<p>操作类型</p>
 * @method integer getRowNumMin() 获取<p>影响行数最小值</p>
 * @method void setRowNumMin(integer $RowNumMin) 设置<p>影响行数最小值</p>
 * @method integer getRowNumMax() 获取<p>影响行数最大值</p>
 * @method void setRowNumMax(integer $RowNumMax) 设置<p>影响行数最大值</p>
 * @method array getDbTypes() 获取<p>数据库类型</p>
 * @method void setDbTypes(array $DbTypes) 设置<p>数据库类型</p>
 * @method integer getRetNo() 获取<p>返回码</p>
 * @method void setRetNo(integer $RetNo) 设置<p>返回码</p>
 * @method string getClientDriverName() 获取<p>客户端工具</p>
 * @method void setClientDriverName(string $ClientDriverName) 设置<p>客户端工具</p>
 * @method integer getClientPort() 获取<p>客户端端口</p>
 * @method void setClientPort(integer $ClientPort) 设置<p>客户端端口</p>
 * @method string getLogId() 获取<p>审计日志 ID</p>
 * @method void setLogId(string $LogId) 设置<p>审计日志 ID</p>
 * @method array getDangerLevels() 获取<p>风险等级数组(0-安全,1-低风险,2-中风险,3-高风险), 如果要全部，则需要将所有的值都传入。如果为空，则会参考：DangerLevel 入参</p>
 * @method void setDangerLevels(array $DangerLevels) 设置<p>风险等级数组(0-安全,1-低风险,2-中风险,3-高风险), 如果要全部，则需要将所有的值都传入。如果为空，则会参考：DangerLevel 入参</p>
 * @method string getSensitiveCategoryRule() 获取<p>字段分类</p>
 * @method void setSensitiveCategoryRule(string $SensitiveCategoryRule) 设置<p>字段分类</p>
 * @method string getSensitiveLevelRisk() 获取<p>字段分级</p>
 * @method void setSensitiveLevelRisk(string $SensitiveLevelRisk) 设置<p>字段分级</p>
 * @method integer getTrxId() 获取<p>事务Id</p>
 * @method void setTrxId(integer $TrxId) 设置<p>事务Id</p>
 * @method string getClientMac() 获取<p>clientMac</p>
 * @method void setClientMac(string $ClientMac) 设置<p>clientMac</p>
 */
class CreateDspmExportTaskRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>风险等级(0-安全,1-低风险,2-中风险,3-高风险,-1-全部)</p>
     */
    public $DangerLevel;

    /**
     * @var string <p>数据库名称</p>
     */
    public $DbName;

    /**
     * @var integer <p>数据库端口</p>
     */
    public $DbPort;

    /**
     * @var string <p>数据库 IP</p>
     */
    public $DbIp;

    /**
     * @var integer <p>资产 ID</p>
     */
    public $AssetsId;

    /**
     * @var string <p>会话 ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>客户端 IP</p>
     */
    public $ClientSideIp;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>命中规则</p>
     */
    public $HitRule;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>模糊查询</p>
     */
    public $FuzzySearch;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>客户端</p>
     */
    public $ClientName;

    /**
     * @var array <p>流量来源，取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两都传或不传则返回所有</p>
     */
    public $SourceTypes;

    /**
     * @var string <p>表名，长度限制64，多个表名查询的话可以用空格连接</p>
     */
    public $TableName;

    /**
     * @var string <p>字段名，长度限制64，多个字段名查询的话可以用空格连接</p>
     */
    public $FieldName;

    /**
     * @var array <p>SQL 主要类型，DDL, DML, DCL, TCL</p>
     */
    public $SqlMainTypes;

    /**
     * @var string <p>操作类型</p>
     */
    public $SqlType;

    /**
     * @var integer <p>影响行数最小值</p>
     */
    public $RowNumMin;

    /**
     * @var integer <p>影响行数最大值</p>
     */
    public $RowNumMax;

    /**
     * @var array <p>数据库类型</p>
     */
    public $DbTypes;

    /**
     * @var integer <p>返回码</p>
     */
    public $RetNo;

    /**
     * @var string <p>客户端工具</p>
     */
    public $ClientDriverName;

    /**
     * @var integer <p>客户端端口</p>
     */
    public $ClientPort;

    /**
     * @var string <p>审计日志 ID</p>
     */
    public $LogId;

    /**
     * @var array <p>风险等级数组(0-安全,1-低风险,2-中风险,3-高风险), 如果要全部，则需要将所有的值都传入。如果为空，则会参考：DangerLevel 入参</p>
     */
    public $DangerLevels;

    /**
     * @var string <p>字段分类</p>
     */
    public $SensitiveCategoryRule;

    /**
     * @var string <p>字段分级</p>
     */
    public $SensitiveLevelRisk;

    /**
     * @var integer <p>事务Id</p>
     */
    public $TrxId;

    /**
     * @var string <p>clientMac</p>
     */
    public $ClientMac;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $DangerLevel <p>风险等级(0-安全,1-低风险,2-中风险,3-高风险,-1-全部)</p>
     * @param string $DbName <p>数据库名称</p>
     * @param integer $DbPort <p>数据库端口</p>
     * @param string $DbIp <p>数据库 IP</p>
     * @param integer $AssetsId <p>资产 ID</p>
     * @param string $SessionId <p>会话 ID</p>
     * @param string $ClientSideIp <p>客户端 IP</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param integer $HitRule <p>命中规则</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param string $FuzzySearch <p>模糊查询</p>
     * @param string $UserName <p>用户名</p>
     * @param string $ClientName <p>客户端</p>
     * @param array $SourceTypes <p>流量来源，取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两都传或不传则返回所有</p>
     * @param string $TableName <p>表名，长度限制64，多个表名查询的话可以用空格连接</p>
     * @param string $FieldName <p>字段名，长度限制64，多个字段名查询的话可以用空格连接</p>
     * @param array $SqlMainTypes <p>SQL 主要类型，DDL, DML, DCL, TCL</p>
     * @param string $SqlType <p>操作类型</p>
     * @param integer $RowNumMin <p>影响行数最小值</p>
     * @param integer $RowNumMax <p>影响行数最大值</p>
     * @param array $DbTypes <p>数据库类型</p>
     * @param integer $RetNo <p>返回码</p>
     * @param string $ClientDriverName <p>客户端工具</p>
     * @param integer $ClientPort <p>客户端端口</p>
     * @param string $LogId <p>审计日志 ID</p>
     * @param array $DangerLevels <p>风险等级数组(0-安全,1-低风险,2-中风险,3-高风险), 如果要全部，则需要将所有的值都传入。如果为空，则会参考：DangerLevel 入参</p>
     * @param string $SensitiveCategoryRule <p>字段分类</p>
     * @param string $SensitiveLevelRisk <p>字段分级</p>
     * @param integer $TrxId <p>事务Id</p>
     * @param string $ClientMac <p>clientMac</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("DangerLevel",$param) and $param["DangerLevel"] !== null) {
            $this->DangerLevel = $param["DangerLevel"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("DbIp",$param) and $param["DbIp"] !== null) {
            $this->DbIp = $param["DbIp"];
        }

        if (array_key_exists("AssetsId",$param) and $param["AssetsId"] !== null) {
            $this->AssetsId = $param["AssetsId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ClientSideIp",$param) and $param["ClientSideIp"] !== null) {
            $this->ClientSideIp = $param["ClientSideIp"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("HitRule",$param) and $param["HitRule"] !== null) {
            $this->HitRule = $param["HitRule"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FuzzySearch",$param) and $param["FuzzySearch"] !== null) {
            $this->FuzzySearch = $param["FuzzySearch"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ClientName",$param) and $param["ClientName"] !== null) {
            $this->ClientName = $param["ClientName"];
        }

        if (array_key_exists("SourceTypes",$param) and $param["SourceTypes"] !== null) {
            $this->SourceTypes = $param["SourceTypes"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("SqlMainTypes",$param) and $param["SqlMainTypes"] !== null) {
            $this->SqlMainTypes = $param["SqlMainTypes"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("RowNumMin",$param) and $param["RowNumMin"] !== null) {
            $this->RowNumMin = $param["RowNumMin"];
        }

        if (array_key_exists("RowNumMax",$param) and $param["RowNumMax"] !== null) {
            $this->RowNumMax = $param["RowNumMax"];
        }

        if (array_key_exists("DbTypes",$param) and $param["DbTypes"] !== null) {
            $this->DbTypes = $param["DbTypes"];
        }

        if (array_key_exists("RetNo",$param) and $param["RetNo"] !== null) {
            $this->RetNo = $param["RetNo"];
        }

        if (array_key_exists("ClientDriverName",$param) and $param["ClientDriverName"] !== null) {
            $this->ClientDriverName = $param["ClientDriverName"];
        }

        if (array_key_exists("ClientPort",$param) and $param["ClientPort"] !== null) {
            $this->ClientPort = $param["ClientPort"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("DangerLevels",$param) and $param["DangerLevels"] !== null) {
            $this->DangerLevels = $param["DangerLevels"];
        }

        if (array_key_exists("SensitiveCategoryRule",$param) and $param["SensitiveCategoryRule"] !== null) {
            $this->SensitiveCategoryRule = $param["SensitiveCategoryRule"];
        }

        if (array_key_exists("SensitiveLevelRisk",$param) and $param["SensitiveLevelRisk"] !== null) {
            $this->SensitiveLevelRisk = $param["SensitiveLevelRisk"];
        }

        if (array_key_exists("TrxId",$param) and $param["TrxId"] !== null) {
            $this->TrxId = $param["TrxId"];
        }

        if (array_key_exists("ClientMac",$param) and $param["ClientMac"] !== null) {
            $this->ClientMac = $param["ClientMac"];
        }
    }
}
