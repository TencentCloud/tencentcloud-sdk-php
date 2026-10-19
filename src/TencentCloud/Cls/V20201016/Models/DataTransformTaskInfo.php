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
 * @method string getName() 获取<p>数据加工任务名称</p>
 * @method void setName(string $Name) 设置<p>数据加工任务名称</p>
 * @method string getTaskId() 获取<p>数据加工任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>数据加工任务id</p>
 * @method integer getEnableFlag() 获取<p>任务启用状态，默认为1，正常开启,  2关闭</p>
 * @method void setEnableFlag(integer $EnableFlag) 设置<p>任务启用状态，默认为1，正常开启,  2关闭</p>
 * @method integer getType() 获取<p>加工任务类型，1： DSL(使用自定义加工语言的加工任务)， 2：SQL(使用sql的加工任务)</p>
 * @method void setType(integer $Type) 设置<p>加工任务类型，1： DSL(使用自定义加工语言的加工任务)， 2：SQL(使用sql的加工任务)</p>
 * @method string getSrcTopicId() 获取<p>源日志主题ID,当DataTransformType=1,代表当前任务的类型是前置加工任务,该值和目标日志主题的ID值相同.</p>
 * @method void setSrcTopicId(string $SrcTopicId) 设置<p>源日志主题ID,当DataTransformType=1,代表当前任务的类型是前置加工任务,该值和目标日志主题的ID值相同.</p>
 * @method integer getStatus() 获取<p>当前加工任务状态（1准备中/2运行中/3停止中/4已停止）</p>
 * @method void setStatus(integer $Status) 设置<p>当前加工任务状态（1准备中/2运行中/3停止中/4已停止）</p>
 * @method string getCreateTime() 获取<p>创建时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
 * @method string getUpdateTime() 获取<p>最近修改时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近修改时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
 * @method string getLastEnableTime() 获取<p>最后启用时间，如果需要重建集群，修改该时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
 * @method void setLastEnableTime(string $LastEnableTime) 设置<p>最后启用时间，如果需要重建集群，修改该时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
 * @method string getSrcTopicName() 获取<p>源日志主题名称,当DataTransformType=1,代表当前任务的类型是前置加工任务,该值和目标日志主题名称的值相同.</p>
 * @method void setSrcTopicName(string $SrcTopicName) 设置<p>源日志主题名称,当DataTransformType=1,代表当前任务的类型是前置加工任务,该值和目标日志主题名称的值相同.</p>
 * @method string getLogsetId() 获取<p>日志集id</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集id</p>
 * @method array getDstResources() 获取<p>加工任务目的topic_id以及别名</p>
 * @method void setDstResources(array $DstResources) 设置<p>加工任务目的topic_id以及别名</p>
 * @method string getEtlContent() 获取<p>加工逻辑函数。</p>
 * @method void setEtlContent(string $EtlContent) 设置<p>加工逻辑函数。</p>
 * @method string getBackupTopicID() 获取<p>兜底topic_id</p>
 * @method void setBackupTopicID(string $BackupTopicID) 设置<p>兜底topic_id</p>
 * @method boolean getBackupGiveUpData() 获取<p>超限之后是否丢弃日志数据</p>
 * @method void setBackupGiveUpData(boolean $BackupGiveUpData) 设置<p>超限之后是否丢弃日志数据</p>
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。 1关闭,2开启</p>
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。 1关闭,2开启</p>
 * @method integer getTaskDstCount() 获取<p>任务目标日志主题数量</p>
 * @method void setTaskDstCount(integer $TaskDstCount) 设置<p>任务目标日志主题数量</p>
 * @method integer getDataTransformType() 获取<p>数据加工类型。0：标准加工任务；1：前置加工任务。当该值=1时, 源日志主题和目标日志主题的名称和ID相同.</p><p>枚举值：</p><ul><li>1： 前置加工任务</li><li>0： 标准加工任务</li></ul>
 * @method void setDataTransformType(integer $DataTransformType) 设置<p>数据加工类型。0：标准加工任务；1：前置加工任务。当该值=1时, 源日志主题和目标日志主题的名称和ID相同.</p><p>枚举值：</p><ul><li>1： 前置加工任务</li><li>0： 标准加工任务</li></ul>
 * @method integer getKeepFailureLog() 获取<p>保留失败日志状态。 1:不保留，2:保留</p>
 * @method void setKeepFailureLog(integer $KeepFailureLog) 设置<p>保留失败日志状态。 1:不保留，2:保留</p>
 * @method string getFailureLogKey() 获取<p>失败日志的字段名称</p>
 * @method void setFailureLogKey(string $FailureLogKey) 设置<p>失败日志的字段名称</p>
 * @method integer getProcessFromTimestamp() 获取<p>指定加工数据的开始时间，秒级时间戳。</p><ul><li>日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。</li></ul>
 * @method void setProcessFromTimestamp(integer $ProcessFromTimestamp) 设置<p>指定加工数据的开始时间，秒级时间戳。</p><ul><li>日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。</li></ul>
 * @method integer getProcessToTimestamp() 获取<p>指定加工数据的结束时间，秒级时间戳。</p><ol><li>不可指定未来的时间</li><li>不填则表示持续执行</li></ol>
 * @method void setProcessToTimestamp(integer $ProcessToTimestamp) 设置<p>指定加工数据的结束时间，秒级时间戳。</p><ol><li>不可指定未来的时间</li><li>不填则表示持续执行</li></ol>
 * @method array getDataTransformSqlDataSources() 获取<p>sql数据源信息</p>
 * @method void setDataTransformSqlDataSources(array $DataTransformSqlDataSources) 设置<p>sql数据源信息</p>
 * @method array getEnvInfos() 获取<p>环境变量</p>
 * @method void setEnvInfos(array $EnvInfos) 设置<p>环境变量</p>
 */
class DataTransformTaskInfo extends AbstractModel
{
    /**
     * @var string <p>数据加工任务名称</p>
     */
    public $Name;

    /**
     * @var string <p>数据加工任务id</p>
     */
    public $TaskId;

    /**
     * @var integer <p>任务启用状态，默认为1，正常开启,  2关闭</p>
     */
    public $EnableFlag;

    /**
     * @var integer <p>加工任务类型，1： DSL(使用自定义加工语言的加工任务)， 2：SQL(使用sql的加工任务)</p>
     */
    public $Type;

    /**
     * @var string <p>源日志主题ID,当DataTransformType=1,代表当前任务的类型是前置加工任务,该值和目标日志主题的ID值相同.</p>
     */
    public $SrcTopicId;

    /**
     * @var integer <p>当前加工任务状态（1准备中/2运行中/3停止中/4已停止）</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最近修改时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>最后启用时间，如果需要重建集群，修改该时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
     */
    public $LastEnableTime;

    /**
     * @var string <p>源日志主题名称,当DataTransformType=1,代表当前任务的类型是前置加工任务,该值和目标日志主题名称的值相同.</p>
     */
    public $SrcTopicName;

    /**
     * @var string <p>日志集id</p>
     */
    public $LogsetId;

    /**
     * @var array <p>加工任务目的topic_id以及别名</p>
     */
    public $DstResources;

    /**
     * @var string <p>加工逻辑函数。</p>
     */
    public $EtlContent;

    /**
     * @var string <p>兜底topic_id</p>
     */
    public $BackupTopicID;

    /**
     * @var boolean <p>超限之后是否丢弃日志数据</p>
     */
    public $BackupGiveUpData;

    /**
     * @var integer <p>是否开启投递服务日志。 1关闭,2开启</p>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>任务目标日志主题数量</p>
     */
    public $TaskDstCount;

    /**
     * @var integer <p>数据加工类型。0：标准加工任务；1：前置加工任务。当该值=1时, 源日志主题和目标日志主题的名称和ID相同.</p><p>枚举值：</p><ul><li>1： 前置加工任务</li><li>0： 标准加工任务</li></ul>
     */
    public $DataTransformType;

    /**
     * @var integer <p>保留失败日志状态。 1:不保留，2:保留</p>
     */
    public $KeepFailureLog;

    /**
     * @var string <p>失败日志的字段名称</p>
     */
    public $FailureLogKey;

    /**
     * @var integer <p>指定加工数据的开始时间，秒级时间戳。</p><ul><li>日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。</li></ul>
     */
    public $ProcessFromTimestamp;

    /**
     * @var integer <p>指定加工数据的结束时间，秒级时间戳。</p><ol><li>不可指定未来的时间</li><li>不填则表示持续执行</li></ol>
     */
    public $ProcessToTimestamp;

    /**
     * @var array <p>sql数据源信息</p>
     */
    public $DataTransformSqlDataSources;

    /**
     * @var array <p>环境变量</p>
     */
    public $EnvInfos;

    /**
     * @param string $Name <p>数据加工任务名称</p>
     * @param string $TaskId <p>数据加工任务id</p>
     * @param integer $EnableFlag <p>任务启用状态，默认为1，正常开启,  2关闭</p>
     * @param integer $Type <p>加工任务类型，1： DSL(使用自定义加工语言的加工任务)， 2：SQL(使用sql的加工任务)</p>
     * @param string $SrcTopicId <p>源日志主题ID,当DataTransformType=1,代表当前任务的类型是前置加工任务,该值和目标日志主题的ID值相同.</p>
     * @param integer $Status <p>当前加工任务状态（1准备中/2运行中/3停止中/4已停止）</p>
     * @param string $CreateTime <p>创建时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
     * @param string $UpdateTime <p>最近修改时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
     * @param string $LastEnableTime <p>最后启用时间，如果需要重建集群，修改该时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
     * @param string $SrcTopicName <p>源日志主题名称,当DataTransformType=1,代表当前任务的类型是前置加工任务,该值和目标日志主题名称的值相同.</p>
     * @param string $LogsetId <p>日志集id</p>
     * @param array $DstResources <p>加工任务目的topic_id以及别名</p>
     * @param string $EtlContent <p>加工逻辑函数。</p>
     * @param string $BackupTopicID <p>兜底topic_id</p>
     * @param boolean $BackupGiveUpData <p>超限之后是否丢弃日志数据</p>
     * @param integer $HasServicesLog <p>是否开启投递服务日志。 1关闭,2开启</p>
     * @param integer $TaskDstCount <p>任务目标日志主题数量</p>
     * @param integer $DataTransformType <p>数据加工类型。0：标准加工任务；1：前置加工任务。当该值=1时, 源日志主题和目标日志主题的名称和ID相同.</p><p>枚举值：</p><ul><li>1： 前置加工任务</li><li>0： 标准加工任务</li></ul>
     * @param integer $KeepFailureLog <p>保留失败日志状态。 1:不保留，2:保留</p>
     * @param string $FailureLogKey <p>失败日志的字段名称</p>
     * @param integer $ProcessFromTimestamp <p>指定加工数据的开始时间，秒级时间戳。</p><ul><li>日志主题生命周期内的任意时间范围，如果超出了生命周期,只处理生命周期内有数据的部分。</li></ul>
     * @param integer $ProcessToTimestamp <p>指定加工数据的结束时间，秒级时间戳。</p><ol><li>不可指定未来的时间</li><li>不填则表示持续执行</li></ol>
     * @param array $DataTransformSqlDataSources <p>sql数据源信息</p>
     * @param array $EnvInfos <p>环境变量</p>
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
