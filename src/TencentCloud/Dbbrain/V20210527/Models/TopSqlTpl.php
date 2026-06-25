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
 * 审计日志TopSql
 *
 * @method integer getExecTimes() 获取<p>执行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecTimes(integer $ExecTimes) 设置<p>执行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlTemplateId() 获取<p>SQL模板Id，数据类型Long。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlTemplateId(string $SqlTemplateId) 设置<p>SQL模板Id，数据类型Long。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAffectRowsMin() 获取<p>最小影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectRowsMin(integer $AffectRowsMin) 设置<p>最小影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlTemplate() 获取<p>sql模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlTemplate(string $SqlTemplate) 设置<p>sql模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取<p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置<p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAffectRowsMax() 获取<p>最大影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectRowsMax(integer $AffectRowsMax) 设置<p>最大影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlType() 获取<p>sql类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlType(string $SqlType) 设置<p>sql类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAffectRows() 获取<p>影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectRows(integer $AffectRows) 设置<p>影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDB() 获取<p>DB名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDB(string $DB) 设置<p>DB名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLockWaitTimeMin() 获取<p>最小锁等待时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockWaitTimeMin(float $LockWaitTimeMin) 设置<p>最小锁等待时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpuTime() 获取<p>cpu时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuTime(float $CpuTime) 设置<p>cpu时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getIoWaitTimeMax() 获取<p>最大io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIoWaitTimeMax(float $IoWaitTimeMax) 设置<p>最大io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLockWaitTimeMax() 获取<p>最大锁等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockWaitTimeMax(float $LockWaitTimeMax) 设置<p>最大锁等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckRowsMin() 获取<p>最小检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckRowsMin(integer $CheckRowsMin) 设置<p>最小检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckRows() 获取<p>检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckRows(integer $CheckRows) 设置<p>检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpuTimeMax() 获取<p>最大cpu时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuTimeMax(float $CpuTimeMax) 设置<p>最大cpu时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIoWaitTimeMin() 获取<p>最小io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIoWaitTimeMin(integer $IoWaitTimeMin) 设置<p>最小io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLatencyMax() 获取<p>最大执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatencyMax(float $LatencyMax) 设置<p>最大执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getIoWaitTime() 获取<p>io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIoWaitTime(float $IoWaitTime) 设置<p>io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckRowsMax() 获取<p>最大检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckRowsMax(integer $CheckRowsMax) 设置<p>最大检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpuTimeMin() 获取<p>最小cpu时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuTimeMin(float $CpuTimeMin) 设置<p>最小cpu时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlText() 获取<p>sql详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlText(string $SqlText) 设置<p>sql详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLockWaitTime() 获取<p>锁等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockWaitTime(float $LockWaitTime) 设置<p>锁等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLatencyMin() 获取<p>最小执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatencyMin(float $LatencyMin) 设置<p>最小执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLatency() 获取<p>执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatency(float $Latency) 设置<p>执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueryTimeRatio() 获取<p>queryTime 占比，单位%</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryTimeRatio(string $QueryTimeRatio) 设置<p>queryTime 占比，单位%</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckRowsAvg() 获取<p>平均扫描行数</p>
 * @method void setCheckRowsAvg(integer $CheckRowsAvg) 设置<p>平均扫描行数</p>
 * @method float getCpuTimeAvg() 获取<p>平均cpu时间</p>
 * @method void setCpuTimeAvg(float $CpuTimeAvg) 设置<p>平均cpu时间</p>
 * @method float getIoWaitTimeAvg() 获取<p>平均io等待时间</p>
 * @method void setIoWaitTimeAvg(float $IoWaitTimeAvg) 设置<p>平均io等待时间</p>
 * @method float getLatencyAvg() 获取<p>平均执行时间</p>
 * @method void setLatencyAvg(float $LatencyAvg) 设置<p>平均执行时间</p>
 * @method float getLockWaitTimeAvg() 获取<p>平均锁等待时长</p>
 * @method void setLockWaitTimeAvg(float $LockWaitTimeAvg) 设置<p>平均锁等待时长</p>
 * @method integer getSentRows() 获取<p>发送行数</p>
 * @method void setSentRows(integer $SentRows) 设置<p>发送行数</p>
 * @method integer getSentRowsAvg() 获取<p>平均发送行数</p>
 * @method void setSentRowsAvg(integer $SentRowsAvg) 设置<p>平均发送行数</p>
 * @method integer getAffectRowsAvg() 获取<p>平均影响行数</p>
 * @method void setAffectRowsAvg(integer $AffectRowsAvg) 设置<p>平均影响行数</p>
 */
class TopSqlTpl extends AbstractModel
{
    /**
     * @var integer <p>执行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecTimes;

    /**
     * @var string <p>SQL模板Id，数据类型Long。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlTemplateId;

    /**
     * @var integer <p>最小影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectRowsMin;

    /**
     * @var string <p>sql模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlTemplate;

    /**
     * @var string <p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var integer <p>最大影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectRowsMax;

    /**
     * @var string <p>sql类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlType;

    /**
     * @var integer <p>影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectRows;

    /**
     * @var string <p>DB名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DB;

    /**
     * @var float <p>最小锁等待时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockWaitTimeMin;

    /**
     * @var float <p>cpu时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuTime;

    /**
     * @var float <p>最大io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IoWaitTimeMax;

    /**
     * @var float <p>最大锁等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockWaitTimeMax;

    /**
     * @var integer <p>最小检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckRowsMin;

    /**
     * @var integer <p>检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckRows;

    /**
     * @var float <p>最大cpu时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuTimeMax;

    /**
     * @var integer <p>最小io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IoWaitTimeMin;

    /**
     * @var float <p>最大执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatencyMax;

    /**
     * @var float <p>io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IoWaitTime;

    /**
     * @var integer <p>最大检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckRowsMax;

    /**
     * @var float <p>最小cpu时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuTimeMin;

    /**
     * @var string <p>sql详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlText;

    /**
     * @var float <p>锁等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockWaitTime;

    /**
     * @var float <p>最小执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatencyMin;

    /**
     * @var float <p>执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Latency;

    /**
     * @var string <p>queryTime 占比，单位%</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryTimeRatio;

    /**
     * @var integer <p>平均扫描行数</p>
     */
    public $CheckRowsAvg;

    /**
     * @var float <p>平均cpu时间</p>
     */
    public $CpuTimeAvg;

    /**
     * @var float <p>平均io等待时间</p>
     */
    public $IoWaitTimeAvg;

    /**
     * @var float <p>平均执行时间</p>
     */
    public $LatencyAvg;

    /**
     * @var float <p>平均锁等待时长</p>
     */
    public $LockWaitTimeAvg;

    /**
     * @var integer <p>发送行数</p>
     */
    public $SentRows;

    /**
     * @var integer <p>平均发送行数</p>
     */
    public $SentRowsAvg;

    /**
     * @var integer <p>平均影响行数</p>
     */
    public $AffectRowsAvg;

    /**
     * @param integer $ExecTimes <p>执行次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlTemplateId <p>SQL模板Id，数据类型Long。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AffectRowsMin <p>最小影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlTemplate <p>sql模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName <p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AffectRowsMax <p>最大影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlType <p>sql类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AffectRows <p>影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DB <p>DB名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LockWaitTimeMin <p>最小锁等待时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CpuTime <p>cpu时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $IoWaitTimeMax <p>最大io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LockWaitTimeMax <p>最大锁等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckRowsMin <p>最小检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckRows <p>检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CpuTimeMax <p>最大cpu时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IoWaitTimeMin <p>最小io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LatencyMax <p>最大执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $IoWaitTime <p>io等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckRowsMax <p>最大检查行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CpuTimeMin <p>最小cpu时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlText <p>sql详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LockWaitTime <p>锁等待时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LatencyMin <p>最小执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Latency <p>执行时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueryTimeRatio <p>queryTime 占比，单位%</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckRowsAvg <p>平均扫描行数</p>
     * @param float $CpuTimeAvg <p>平均cpu时间</p>
     * @param float $IoWaitTimeAvg <p>平均io等待时间</p>
     * @param float $LatencyAvg <p>平均执行时间</p>
     * @param float $LockWaitTimeAvg <p>平均锁等待时长</p>
     * @param integer $SentRows <p>发送行数</p>
     * @param integer $SentRowsAvg <p>平均发送行数</p>
     * @param integer $AffectRowsAvg <p>平均影响行数</p>
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
        if (array_key_exists("ExecTimes",$param) and $param["ExecTimes"] !== null) {
            $this->ExecTimes = $param["ExecTimes"];
        }

        if (array_key_exists("SqlTemplateId",$param) and $param["SqlTemplateId"] !== null) {
            $this->SqlTemplateId = $param["SqlTemplateId"];
        }

        if (array_key_exists("AffectRowsMin",$param) and $param["AffectRowsMin"] !== null) {
            $this->AffectRowsMin = $param["AffectRowsMin"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = $param["SqlTemplate"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("AffectRowsMax",$param) and $param["AffectRowsMax"] !== null) {
            $this->AffectRowsMax = $param["AffectRowsMax"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("LockWaitTimeMin",$param) and $param["LockWaitTimeMin"] !== null) {
            $this->LockWaitTimeMin = $param["LockWaitTimeMin"];
        }

        if (array_key_exists("CpuTime",$param) and $param["CpuTime"] !== null) {
            $this->CpuTime = $param["CpuTime"];
        }

        if (array_key_exists("IoWaitTimeMax",$param) and $param["IoWaitTimeMax"] !== null) {
            $this->IoWaitTimeMax = $param["IoWaitTimeMax"];
        }

        if (array_key_exists("LockWaitTimeMax",$param) and $param["LockWaitTimeMax"] !== null) {
            $this->LockWaitTimeMax = $param["LockWaitTimeMax"];
        }

        if (array_key_exists("CheckRowsMin",$param) and $param["CheckRowsMin"] !== null) {
            $this->CheckRowsMin = $param["CheckRowsMin"];
        }

        if (array_key_exists("CheckRows",$param) and $param["CheckRows"] !== null) {
            $this->CheckRows = $param["CheckRows"];
        }

        if (array_key_exists("CpuTimeMax",$param) and $param["CpuTimeMax"] !== null) {
            $this->CpuTimeMax = $param["CpuTimeMax"];
        }

        if (array_key_exists("IoWaitTimeMin",$param) and $param["IoWaitTimeMin"] !== null) {
            $this->IoWaitTimeMin = $param["IoWaitTimeMin"];
        }

        if (array_key_exists("LatencyMax",$param) and $param["LatencyMax"] !== null) {
            $this->LatencyMax = $param["LatencyMax"];
        }

        if (array_key_exists("IoWaitTime",$param) and $param["IoWaitTime"] !== null) {
            $this->IoWaitTime = $param["IoWaitTime"];
        }

        if (array_key_exists("CheckRowsMax",$param) and $param["CheckRowsMax"] !== null) {
            $this->CheckRowsMax = $param["CheckRowsMax"];
        }

        if (array_key_exists("CpuTimeMin",$param) and $param["CpuTimeMin"] !== null) {
            $this->CpuTimeMin = $param["CpuTimeMin"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("LockWaitTime",$param) and $param["LockWaitTime"] !== null) {
            $this->LockWaitTime = $param["LockWaitTime"];
        }

        if (array_key_exists("LatencyMin",$param) and $param["LatencyMin"] !== null) {
            $this->LatencyMin = $param["LatencyMin"];
        }

        if (array_key_exists("Latency",$param) and $param["Latency"] !== null) {
            $this->Latency = $param["Latency"];
        }

        if (array_key_exists("QueryTimeRatio",$param) and $param["QueryTimeRatio"] !== null) {
            $this->QueryTimeRatio = $param["QueryTimeRatio"];
        }

        if (array_key_exists("CheckRowsAvg",$param) and $param["CheckRowsAvg"] !== null) {
            $this->CheckRowsAvg = $param["CheckRowsAvg"];
        }

        if (array_key_exists("CpuTimeAvg",$param) and $param["CpuTimeAvg"] !== null) {
            $this->CpuTimeAvg = $param["CpuTimeAvg"];
        }

        if (array_key_exists("IoWaitTimeAvg",$param) and $param["IoWaitTimeAvg"] !== null) {
            $this->IoWaitTimeAvg = $param["IoWaitTimeAvg"];
        }

        if (array_key_exists("LatencyAvg",$param) and $param["LatencyAvg"] !== null) {
            $this->LatencyAvg = $param["LatencyAvg"];
        }

        if (array_key_exists("LockWaitTimeAvg",$param) and $param["LockWaitTimeAvg"] !== null) {
            $this->LockWaitTimeAvg = $param["LockWaitTimeAvg"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("SentRowsAvg",$param) and $param["SentRowsAvg"] !== null) {
            $this->SentRowsAvg = $param["SentRowsAvg"];
        }

        if (array_key_exists("AffectRowsAvg",$param) and $param["AffectRowsAvg"] !== null) {
            $this->AffectRowsAvg = $param["AffectRowsAvg"];
        }
    }
}
