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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据加工任务基本详情
 *
 * @method string getName() 获取数据加工任务名称
 * @method void setName(string $Name) 设置数据加工任务名称
 * @method string getTaskId() 获取数据加工任务id
 * @method void setTaskId(string $TaskId) 设置数据加工任务id
 * @method integer getEnableFlag() 获取任务启用状态，默认为1，正常开启,  2关闭
 * @method void setEnableFlag(integer $EnableFlag) 设置任务启用状态，默认为1，正常开启,  2关闭
 * @method integer getType() 获取加工任务类型，1： DSL(使用自定义加工语言的加工任务)， 2：SQL(使用sql的加工任务)
 * @method void setType(integer $Type) 设置加工任务类型，1： DSL(使用自定义加工语言的加工任务)， 2：SQL(使用sql的加工任务)
 * @method string getSrcTopicId() 获取源日志主题
 * @method void setSrcTopicId(string $SrcTopicId) 设置源日志主题
 * @method integer getStatus() 获取当前加工任务状态（1准备中/2运行中/3停止中/4已停止）
 * @method void setStatus(integer $Status) 设置当前加工任务状态（1准备中/2运行中/3停止中/4已停止）
 * @method string getCreateTime() 获取创建时间
时间格式：yyyy-MM-dd HH:mm:ss
 * @method void setCreateTime(string $CreateTime) 设置创建时间
时间格式：yyyy-MM-dd HH:mm:ss
 * @method string getUpdateTime() 获取最近修改时间
时间格式：yyyy-MM-dd HH:mm:ss
 * @method void setUpdateTime(string $UpdateTime) 设置最近修改时间
时间格式：yyyy-MM-dd HH:mm:ss
 * @method string getLastEnableTime() 获取最后启用时间，如果需要重建集群，修改该时间
时间格式：yyyy-MM-dd HH:mm:ss
 * @method void setLastEnableTime(string $LastEnableTime) 设置最后启用时间，如果需要重建集群，修改该时间
时间格式：yyyy-MM-dd HH:mm:ss
 * @method string getSrcTopicName() 获取日志主题名称
 * @method void setSrcTopicName(string $SrcTopicName) 设置日志主题名称
 * @method string getLogsetId() 获取日志集id
 * @method void setLogsetId(string $LogsetId) 设置日志集id
 * @method array getDstResources() 获取加工任务目的topic_id以及别名
 * @method void setDstResources(array $DstResources) 设置加工任务目的topic_id以及别名
 * @method string getEtlContent() 获取加工逻辑函数。
 * @method void setEtlContent(string $EtlContent) 设置加工逻辑函数。
 * @method string getBackupTopicID() 获取兜底topic_id
 * @method void setBackupTopicID(string $BackupTopicID) 设置兜底topic_id
 * @method boolean getBackupGiveUpData() 获取超限之后是否丢弃日志数据
 * @method void setBackupGiveUpData(boolean $BackupGiveUpData) 设置超限之后是否丢弃日志数据
 * @method integer getHasServicesLog() 获取是否开启投递服务日志。 1关闭,2开启
 * @method void setHasServicesLog(integer $HasServicesLog) 设置是否开启投递服务日志。 1关闭,2开启
 * @method integer getTaskDstCount() 获取任务目标日志主题数量
 * @method void setTaskDstCount(integer $TaskDstCount) 设置任务目标日志主题数量
 * @method integer getDataTransformType() 获取数据加工类型。0：标准加工任务；1：前置加工任务。
 * @method void setDataTransformType(integer $DataTransformType) 设置数据加工类型。0：标准加工任务；1：前置加工任务。
 * @method integer getKeepFailureLog() 获取保留失败日志状态。 1:不保留，2:保留
 * @method void setKeepFailureLog(integer $KeepFailureLog) 设置保留失败日志状态。 1:不保留，2:保留
 * @method string getFailureLogKey() 获取失败日志的字段名称
 * @method void setFailureLogKey(string $FailureLogKey) 设置失败日志的字段名称
 * @method integer getProcessFromTimestamp() 获取指定加工数据的开始时间，秒级时间戳。
- 日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。
 * @method void setProcessFromTimestamp(integer $ProcessFromTimestamp) 设置指定加工数据的开始时间，秒级时间戳。
- 日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。
 * @method integer getProcessToTimestamp() 获取指定加工数据的结束时间，秒级时间戳。
1. 不可指定未来的时间
2. 不填则表示持续执行
 * @method void setProcessToTimestamp(integer $ProcessToTimestamp) 设置指定加工数据的结束时间，秒级时间戳。
1. 不可指定未来的时间
2. 不填则表示持续执行
 * @method array getDataTransformSqlDataSources() 获取sql数据源信息
 * @method void setDataTransformSqlDataSources(array $DataTransformSqlDataSources) 设置sql数据源信息
 * @method array getEnvInfos() 获取环境变量
 * @method void setEnvInfos(array $EnvInfos) 设置环境变量
 */
class DataTransformTaskInfo extends AbstractModel
{
    /**
     * @var string 数据加工任务名称
     */
    public $Name;

    /**
     * @var string 数据加工任务id
     */
    public $TaskId;

    /**
     * @var integer 任务启用状态，默认为1，正常开启,  2关闭
     */
    public $EnableFlag;

    /**
     * @var integer 加工任务类型，1： DSL(使用自定义加工语言的加工任务)， 2：SQL(使用sql的加工任务)
     */
    public $Type;

    /**
     * @var string 源日志主题
     */
    public $SrcTopicId;

    /**
     * @var integer 当前加工任务状态（1准备中/2运行中/3停止中/4已停止）
     */
    public $Status;

    /**
     * @var string 创建时间
时间格式：yyyy-MM-dd HH:mm:ss
     */
    public $CreateTime;

    /**
     * @var string 最近修改时间
时间格式：yyyy-MM-dd HH:mm:ss
     */
    public $UpdateTime;

    /**
     * @var string 最后启用时间，如果需要重建集群，修改该时间
时间格式：yyyy-MM-dd HH:mm:ss
     */
    public $LastEnableTime;

    /**
     * @var string 日志主题名称
     */
    public $SrcTopicName;

    /**
     * @var string 日志集id
     */
    public $LogsetId;

    /**
     * @var array 加工任务目的topic_id以及别名
     */
    public $DstResources;

    /**
     * @var string 加工逻辑函数。
     */
    public $EtlContent;

    /**
     * @var string 兜底topic_id
     */
    public $BackupTopicID;

    /**
     * @var boolean 超限之后是否丢弃日志数据
     */
    public $BackupGiveUpData;

    /**
     * @var integer 是否开启投递服务日志。 1关闭,2开启
     */
    public $HasServicesLog;

    /**
     * @var integer 任务目标日志主题数量
     */
    public $TaskDstCount;

    /**
     * @var integer 数据加工类型。0：标准加工任务；1：前置加工任务。
     */
    public $DataTransformType;

    /**
     * @var integer 保留失败日志状态。 1:不保留，2:保留
     */
    public $KeepFailureLog;

    /**
     * @var string 失败日志的字段名称
     */
    public $FailureLogKey;

    /**
     * @var integer 指定加工数据的开始时间，秒级时间戳。
- 日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。
     */
    public $ProcessFromTimestamp;

    /**
     * @var integer 指定加工数据的结束时间，秒级时间戳。
1. 不可指定未来的时间
2. 不填则表示持续执行
     */
    public $ProcessToTimestamp;

    /**
     * @var array sql数据源信息
     */
    public $DataTransformSqlDataSources;

    /**
     * @var array 环境变量
     */
    public $EnvInfos;

    /**
     * @param string $Name 数据加工任务名称
     * @param string $TaskId 数据加工任务id
     * @param integer $EnableFlag 任务启用状态，默认为1，正常开启,  2关闭
     * @param integer $Type 加工任务类型，1： DSL(使用自定义加工语言的加工任务)， 2：SQL(使用sql的加工任务)
     * @param string $SrcTopicId 源日志主题
     * @param integer $Status 当前加工任务状态（1准备中/2运行中/3停止中/4已停止）
     * @param string $CreateTime 创建时间
时间格式：yyyy-MM-dd HH:mm:ss
     * @param string $UpdateTime 最近修改时间
时间格式：yyyy-MM-dd HH:mm:ss
     * @param string $LastEnableTime 最后启用时间，如果需要重建集群，修改该时间
时间格式：yyyy-MM-dd HH:mm:ss
     * @param string $SrcTopicName 日志主题名称
     * @param string $LogsetId 日志集id
     * @param array $DstResources 加工任务目的topic_id以及别名
     * @param string $EtlContent 加工逻辑函数。
     * @param string $BackupTopicID 兜底topic_id
     * @param boolean $BackupGiveUpData 超限之后是否丢弃日志数据
     * @param integer $HasServicesLog 是否开启投递服务日志。 1关闭,2开启
     * @param integer $TaskDstCount 任务目标日志主题数量
     * @param integer $DataTransformType 数据加工类型。0：标准加工任务；1：前置加工任务。
     * @param integer $KeepFailureLog 保留失败日志状态。 1:不保留，2:保留
     * @param string $FailureLogKey 失败日志的字段名称
     * @param integer $ProcessFromTimestamp 指定加工数据的开始时间，秒级时间戳。
- 日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。
     * @param integer $ProcessToTimestamp 指定加工数据的结束时间，秒级时间戳。
1. 不可指定未来的时间
2. 不填则表示持续执行
     * @param array $DataTransformSqlDataSources sql数据源信息
     * @param array $EnvInfos 环境变量
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastEnableTime",$param) and $param["LastEnableTime"] !== null) {
            $this->LastEnableTime = $param["LastEnableTime"];
        }

        if (array_key_exists("SrcTopicName",$param) and $param["SrcTopicName"] !== null) {
            $this->SrcTopicName = $param["SrcTopicName"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("DstResources",$param) and $param["DstResources"] !== null) {
            $this->DstResources = [];
            foreach ($param["DstResources"] as $key => $value){
                $obj = new DataTransformResouceInfo();
                $obj->deserialize($value);
                array_push($this->DstResources, $obj);
            }
        }

        if (array_key_exists("EtlContent",$param) and $param["EtlContent"] !== null) {
            $this->EtlContent = $param["EtlContent"];
        }

        if (array_key_exists("BackupTopicID",$param) and $param["BackupTopicID"] !== null) {
            $this->BackupTopicID = $param["BackupTopicID"];
        }

        if (array_key_exists("BackupGiveUpData",$param) and $param["BackupGiveUpData"] !== null) {
            $this->BackupGiveUpData = $param["BackupGiveUpData"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("TaskDstCount",$param) and $param["TaskDstCount"] !== null) {
            $this->TaskDstCount = $param["TaskDstCount"];
        }

        if (array_key_exists("DataTransformType",$param) and $param["DataTransformType"] !== null) {
            $this->DataTransformType = $param["DataTransformType"];
        }

        if (array_key_exists("KeepFailureLog",$param) and $param["KeepFailureLog"] !== null) {
            $this->KeepFailureLog = $param["KeepFailureLog"];
        }

        if (array_key_exists("FailureLogKey",$param) and $param["FailureLogKey"] !== null) {
            $this->FailureLogKey = $param["FailureLogKey"];
        }

        if (array_key_exists("ProcessFromTimestamp",$param) and $param["ProcessFromTimestamp"] !== null) {
            $this->ProcessFromTimestamp = $param["ProcessFromTimestamp"];
        }

        if (array_key_exists("ProcessToTimestamp",$param) and $param["ProcessToTimestamp"] !== null) {
            $this->ProcessToTimestamp = $param["ProcessToTimestamp"];
        }

        if (array_key_exists("DataTransformSqlDataSources",$param) and $param["DataTransformSqlDataSources"] !== null) {
            $this->DataTransformSqlDataSources = [];
            foreach ($param["DataTransformSqlDataSources"] as $key => $value){
                $obj = new DataTransformSqlDataSource();
                $obj->deserialize($value);
                array_push($this->DataTransformSqlDataSources, $obj);
            }
        }

        if (array_key_exists("EnvInfos",$param) and $param["EnvInfos"] !== null) {
            $this->EnvInfos = [];
            foreach ($param["EnvInfos"] as $key => $value){
                $obj = new EnvInfo();
                $obj->deserialize($value);
                array_push($this->EnvInfos, $obj);
            }
        }
    }
}
