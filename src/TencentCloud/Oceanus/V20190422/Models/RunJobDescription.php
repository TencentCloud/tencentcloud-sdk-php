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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作业启动详情
 *
 * @method string getJobId() 获取作业Id
 * @method void setJobId(string $JobId) 设置作业Id
 * @method integer getRunType() 获取运行类型，1：启动，2：恢复
 * @method void setRunType(integer $RunType) 设置运行类型，1：启动，2：恢复
 * @method string getStartMode() 获取兼容旧版 SQL 类型作业启动参数：指定数据源消费起始时间点（建议传值）
保证参数为 LATEST、EARLIEST、T+Timestamp （例:T1557394288000）
 * @method void setStartMode(string $StartMode) 设置兼容旧版 SQL 类型作业启动参数：指定数据源消费起始时间点（建议传值）
保证参数为 LATEST、EARLIEST、T+Timestamp （例:T1557394288000）
 * @method integer getJobConfigVersion() 获取当前作业的某个版本
（不传默认为非草稿的作业版本）
 * @method void setJobConfigVersion(integer $JobConfigVersion) 设置当前作业的某个版本
（不传默认为非草稿的作业版本）
 * @method string getSavepointPath() 获取Savepoint路径
 * @method void setSavepointPath(string $SavepointPath) 设置Savepoint路径
 * @method string getSavepointId() 获取Savepoint的Id
 * @method void setSavepointId(string $SavepointId) 设置Savepoint的Id
 * @method boolean getUseOldSystemConnector() 获取使用历史版本系统依赖
 * @method void setUseOldSystemConnector(boolean $UseOldSystemConnector) 设置使用历史版本系统依赖
 * @method integer getCustomTimestamp() 获取自定义时间戳
 * @method void setCustomTimestamp(integer $CustomTimestamp) 设置自定义时间戳
 * @method string getKafkaScanMode() 获取timestamp; latest-offset;  earliest-offset; 任选一种
 * @method void setKafkaScanMode(string $KafkaScanMode) 设置timestamp; latest-offset;  earliest-offset; 任选一种
 */
class RunJobDescription extends AbstractModel
{
    /**
     * @var string 作业Id
     */
    public $JobId;

    /**
     * @var integer 运行类型，1：启动，2：恢复
     */
    public $RunType;

    /**
     * @var string 兼容旧版 SQL 类型作业启动参数：指定数据源消费起始时间点（建议传值）
保证参数为 LATEST、EARLIEST、T+Timestamp （例:T1557394288000）
     */
    public $StartMode;

    /**
     * @var integer 当前作业的某个版本
（不传默认为非草稿的作业版本）
     */
    public $JobConfigVersion;

    /**
     * @var string Savepoint路径
     */
    public $SavepointPath;

    /**
     * @var string Savepoint的Id
     */
    public $SavepointId;

    /**
     * @var boolean 使用历史版本系统依赖
     */
    public $UseOldSystemConnector;

    /**
     * @var integer 自定义时间戳
     */
    public $CustomTimestamp;

    /**
     * @var string timestamp; latest-offset;  earliest-offset; 任选一种
     */
    public $KafkaScanMode;

    /**
     * @param string $JobId 作业Id
     * @param integer $RunType 运行类型，1：启动，2：恢复
     * @param string $StartMode 兼容旧版 SQL 类型作业启动参数：指定数据源消费起始时间点（建议传值）
保证参数为 LATEST、EARLIEST、T+Timestamp （例:T1557394288000）
     * @param integer $JobConfigVersion 当前作业的某个版本
（不传默认为非草稿的作业版本）
     * @param string $SavepointPath Savepoint路径
     * @param string $SavepointId Savepoint的Id
     * @param boolean $UseOldSystemConnector 使用历史版本系统依赖
     * @param integer $CustomTimestamp 自定义时间戳
     * @param string $KafkaScanMode timestamp; latest-offset;  earliest-offset; 任选一种
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("StartMode",$param) and $param["StartMode"] !== null) {
            $this->StartMode = $param["StartMode"];
        }

        if (array_key_exists("JobConfigVersion",$param) and $param["JobConfigVersion"] !== null) {
            $this->JobConfigVersion = $param["JobConfigVersion"];
        }

        if (array_key_exists("SavepointPath",$param) and $param["SavepointPath"] !== null) {
            $this->SavepointPath = $param["SavepointPath"];
        }

        if (array_key_exists("SavepointId",$param) and $param["SavepointId"] !== null) {
            $this->SavepointId = $param["SavepointId"];
        }

        if (array_key_exists("UseOldSystemConnector",$param) and $param["UseOldSystemConnector"] !== null) {
            $this->UseOldSystemConnector = $param["UseOldSystemConnector"];
        }

        if (array_key_exists("CustomTimestamp",$param) and $param["CustomTimestamp"] !== null) {
            $this->CustomTimestamp = $param["CustomTimestamp"];
        }

        if (array_key_exists("KafkaScanMode",$param) and $param["KafkaScanMode"] !== null) {
            $this->KafkaScanMode = $param["KafkaScanMode"];
        }
    }
}
