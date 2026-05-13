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
 * DescribeDspmLogList请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getSort() 获取排序方式(desc=倒叙,asc=升序)
 * @method void setSort(string $Sort) 设置排序方式(desc=倒叙,asc=升序)
 * @method string getField() 获取排序字段(opTime=时间,dangerLvl=风险等级)
 * @method void setField(string $Field) 设置排序字段(opTime=时间,dangerLvl=风险等级)
 * @method string getDangerLevel() 获取风险等级(0-安全,1-低风险,2-中风险,3-高风险,不传全部)
 * @method void setDangerLevel(string $DangerLevel) 设置风险等级(0-安全,1-低风险,2-中风险,3-高风险,不传全部)
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method integer getDbPort() 获取数据库端口
 * @method void setDbPort(integer $DbPort) 设置数据库端口
 * @method string getDbIp() 获取数据库 IP
 * @method void setDbIp(string $DbIp) 设置数据库 IP
 * @method integer getAssetsId() 获取资产 ID
 * @method void setAssetsId(integer $AssetsId) 设置资产 ID
 * @method string getSessionId() 获取会话 ID
 * @method void setSessionId(string $SessionId) 设置会话 ID
 * @method string getClientSideIp() 获取客户端 IP
 * @method void setClientSideIp(string $ClientSideIp) 设置客户端 IP
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method integer getHitRule() 获取命中规则
 * @method void setHitRule(integer $HitRule) 设置命中规则
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method string getFuzzySearch() 获取模糊查询
 * @method void setFuzzySearch(string $FuzzySearch) 设置模糊查询
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method integer getRestoreLogId() 获取恢复日志id
 * @method void setRestoreLogId(integer $RestoreLogId) 设置恢复日志id
 * @method string getClientName() 获取客户端
 * @method void setClientName(string $ClientName) 设置客户端
 * @method array getSourceTypes() 获取流量来源，取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两者都传或不传则返回所有
 * @method void setSourceTypes(array $SourceTypes) 设置流量来源，取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两者都传或不传则返回所有
 * @method string getTableName() 获取表名，长度限制64，多个表名查询的话可以用空格连接
 * @method void setTableName(string $TableName) 设置表名，长度限制64，多个表名查询的话可以用空格连接
 * @method string getFieldName() 获取字段名，长度限制64，多个字段名查询的话可以用空格连接
 * @method void setFieldName(string $FieldName) 设置字段名，长度限制64，多个字段名查询的话可以用空格连接
 * @method array getSqlMainTypes() 获取SQL 主要类型，DDL, DML, DCL, TCL
 * @method void setSqlMainTypes(array $SqlMainTypes) 设置SQL 主要类型，DDL, DML, DCL, TCL
 * @method string getSqlType() 获取操作类型
 * @method void setSqlType(string $SqlType) 设置操作类型
 * @method integer getRowNumMin() 获取影响行数最小值 
 * @method void setRowNumMin(integer $RowNumMin) 设置影响行数最小值 
 * @method integer getRowNumMax() 获取影响行数最大值
 * @method void setRowNumMax(integer $RowNumMax) 设置影响行数最大值
 * @method array getDbTypes() 获取数据库类型
 * @method void setDbTypes(array $DbTypes) 设置数据库类型
 * @method integer getRetNo() 获取返回码
 * @method void setRetNo(integer $RetNo) 设置返回码
 * @method string getClientDriverName() 获取客户端工具
 * @method void setClientDriverName(string $ClientDriverName) 设置客户端工具
 * @method integer getClientPort() 获取客户端端口
 * @method void setClientPort(integer $ClientPort) 设置客户端端口
 * @method string getLogId() 获取审计日志 ID
 * @method void setLogId(string $LogId) 设置审计日志 ID
 * @method array getDangerLevels() 获取风险等级数组(0-安全,1-低风险,2-中风险,3-高风险)
 * @method void setDangerLevels(array $DangerLevels) 设置风险等级数组(0-安全,1-低风险,2-中风险,3-高风险)
 * @method string getSensitiveCategoryRule() 获取字段分类
 * @method void setSensitiveCategoryRule(string $SensitiveCategoryRule) 设置字段分类
 * @method string getSensitiveLevelRisk() 获取字段分级
 * @method void setSensitiveLevelRisk(string $SensitiveLevelRisk) 设置字段分级
 * @method string getClientMac() 获取客户端MAC
 * @method void setClientMac(string $ClientMac) 设置客户端MAC
 */
class DescribeDspmLogListRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 排序方式(desc=倒叙,asc=升序)
     */
    public $Sort;

    /**
     * @var string 排序字段(opTime=时间,dangerLvl=风险等级)
     */
    public $Field;

    /**
     * @var string 风险等级(0-安全,1-低风险,2-中风险,3-高风险,不传全部)
     */
    public $DangerLevel;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var integer 数据库端口
     */
    public $DbPort;

    /**
     * @var string 数据库 IP
     */
    public $DbIp;

    /**
     * @var integer 资产 ID
     */
    public $AssetsId;

    /**
     * @var string 会话 ID
     */
    public $SessionId;

    /**
     * @var string 客户端 IP
     */
    public $ClientSideIp;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var integer 命中规则
     */
    public $HitRule;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var string 模糊查询
     */
    public $FuzzySearch;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var integer 恢复日志id
     */
    public $RestoreLogId;

    /**
     * @var string 客户端
     */
    public $ClientName;

    /**
     * @var array 流量来源，取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两者都传或不传则返回所有
     */
    public $SourceTypes;

    /**
     * @var string 表名，长度限制64，多个表名查询的话可以用空格连接
     */
    public $TableName;

    /**
     * @var string 字段名，长度限制64，多个字段名查询的话可以用空格连接
     */
    public $FieldName;

    /**
     * @var array SQL 主要类型，DDL, DML, DCL, TCL
     */
    public $SqlMainTypes;

    /**
     * @var string 操作类型
     */
    public $SqlType;

    /**
     * @var integer 影响行数最小值 
     */
    public $RowNumMin;

    /**
     * @var integer 影响行数最大值
     */
    public $RowNumMax;

    /**
     * @var array 数据库类型
     */
    public $DbTypes;

    /**
     * @var integer 返回码
     */
    public $RetNo;

    /**
     * @var string 客户端工具
     */
    public $ClientDriverName;

    /**
     * @var integer 客户端端口
     */
    public $ClientPort;

    /**
     * @var string 审计日志 ID
     */
    public $LogId;

    /**
     * @var array 风险等级数组(0-安全,1-低风险,2-中风险,3-高风险)
     */
    public $DangerLevels;

    /**
     * @var string 字段分类
     */
    public $SensitiveCategoryRule;

    /**
     * @var string 字段分级
     */
    public $SensitiveLevelRisk;

    /**
     * @var string 客户端MAC
     */
    public $ClientMac;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param integer $Limit 限制数目
     * @param integer $Offset 偏移量
     * @param string $Sort 排序方式(desc=倒叙,asc=升序)
     * @param string $Field 排序字段(opTime=时间,dangerLvl=风险等级)
     * @param string $DangerLevel 风险等级(0-安全,1-低风险,2-中风险,3-高风险,不传全部)
     * @param string $DbName 数据库名称
     * @param integer $DbPort 数据库端口
     * @param string $DbIp 数据库 IP
     * @param integer $AssetsId 资产 ID
     * @param string $SessionId 会话 ID
     * @param string $ClientSideIp 客户端 IP
     * @param integer $EndTime 结束时间
     * @param integer $HitRule 命中规则
     * @param integer $StartTime 开始时间
     * @param string $FuzzySearch 模糊查询
     * @param string $UserName 用户名
     * @param integer $RestoreLogId 恢复日志id
     * @param string $ClientName 客户端
     * @param array $SourceTypes 流量来源，取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两者都传或不传则返回所有
     * @param string $TableName 表名，长度限制64，多个表名查询的话可以用空格连接
     * @param string $FieldName 字段名，长度限制64，多个字段名查询的话可以用空格连接
     * @param array $SqlMainTypes SQL 主要类型，DDL, DML, DCL, TCL
     * @param string $SqlType 操作类型
     * @param integer $RowNumMin 影响行数最小值 
     * @param integer $RowNumMax 影响行数最大值
     * @param array $DbTypes 数据库类型
     * @param integer $RetNo 返回码
     * @param string $ClientDriverName 客户端工具
     * @param integer $ClientPort 客户端端口
     * @param string $LogId 审计日志 ID
     * @param array $DangerLevels 风险等级数组(0-安全,1-低风险,2-中风险,3-高风险)
     * @param string $SensitiveCategoryRule 字段分类
     * @param string $SensitiveLevelRisk 字段分级
     * @param string $ClientMac 客户端MAC
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
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

        if (array_key_exists("RestoreLogId",$param) and $param["RestoreLogId"] !== null) {
            $this->RestoreLogId = $param["RestoreLogId"];
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

        if (array_key_exists("ClientMac",$param) and $param["ClientMac"] !== null) {
            $this->ClientMac = $param["ClientMac"];
        }
    }
}
