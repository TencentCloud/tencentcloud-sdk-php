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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CustomizeBusinessEntityDTO
 *
 * @method string getTaskId() 获取taskId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置taskId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取taskName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置taskName
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取taskType
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置taskType
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取Type
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置Type
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunUrl() 获取runUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunUrl(string $RunUrl) 设置runUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunReqParams() 获取runReqParams
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunReqParams(string $RunReqParams) 设置runReqParams
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStopUrl() 获取stopUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopUrl(string $StopUrl) 设置stopUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStopReqParams() 获取stopReqParams
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopReqParams(string $StopReqParams) 设置stopReqParams
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStateMonitorUrl() 获取stateMonitorUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStateMonitorUrl(string $StateMonitorUrl) 设置stateMonitorUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunLogUrl() 获取runLogUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunLogUrl(string $RunLogUrl) 设置runLogUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogDownloadUrl() 获取logDownloadUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogDownloadUrl(string $LogDownloadUrl) 设置logDownloadUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMarkUrl() 获取markUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarkUrl(string $MarkUrl) 设置markUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceCluster() 获取source_cluster
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceCluster(string $SourceCluster) 设置source_cluster
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceService() 获取source_service
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceService(string $SourceService) 设置source_service
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceServer() 获取source_server
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceServer(string $SourceServer) 设置source_server
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlFileName() 获取sql_file_name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlFileName(string $SqlFileName) 设置sql_file_name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbType() 获取dbType
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbType(string $DbType) 设置dbType
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngine() 获取engine
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngine(string $Engine) 设置engine
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTypeId() 获取typeId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeId(integer $TypeId) 设置typeId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取fileName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置fileName
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucket() 获取bucket
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置bucket
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取region
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置region
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取extraInfo
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置extraInfo
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserFileId() 获取userFileId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserFileId(string $UserFileId) 设置userFileId
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomizeBusinessEntityDTO extends AbstractModel
{
    /**
     * @var string taskId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string taskName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string Name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string taskType
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string Type
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string runUrl
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunUrl;

    /**
     * @var string runReqParams
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunReqParams;

    /**
     * @var string stopUrl
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopUrl;

    /**
     * @var string stopReqParams
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopReqParams;

    /**
     * @var string stateMonitorUrl
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StateMonitorUrl;

    /**
     * @var string runLogUrl
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunLogUrl;

    /**
     * @var string logDownloadUrl
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogDownloadUrl;

    /**
     * @var string markUrl
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MarkUrl;

    /**
     * @var string source_cluster
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceCluster;

    /**
     * @var string source_service
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceService;

    /**
     * @var string source_server
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceServer;

    /**
     * @var string sql_file_name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlFileName;

    /**
     * @var string dbType
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbType;

    /**
     * @var string engine
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Engine;

    /**
     * @var integer typeId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeId;

    /**
     * @var string fileName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string bucket
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var string region
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string extraInfo
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var string userFileId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserFileId;

    /**
     * @param string $TaskId taskId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName taskName
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name Name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType taskType
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type Type
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUrl runUrl
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunReqParams runReqParams
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StopUrl stopUrl
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StopReqParams stopReqParams
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StateMonitorUrl stateMonitorUrl
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunLogUrl runLogUrl
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogDownloadUrl logDownloadUrl
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MarkUrl markUrl
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceCluster source_cluster
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceService source_service
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceServer source_server
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlFileName sql_file_name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbType dbType
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Engine engine
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TypeId typeId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName fileName
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Bucket bucket
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region region
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo extraInfo
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserFileId userFileId
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RunUrl",$param) and $param["RunUrl"] !== null) {
            $this->RunUrl = $param["RunUrl"];
        }

        if (array_key_exists("RunReqParams",$param) and $param["RunReqParams"] !== null) {
            $this->RunReqParams = $param["RunReqParams"];
        }

        if (array_key_exists("StopUrl",$param) and $param["StopUrl"] !== null) {
            $this->StopUrl = $param["StopUrl"];
        }

        if (array_key_exists("StopReqParams",$param) and $param["StopReqParams"] !== null) {
            $this->StopReqParams = $param["StopReqParams"];
        }

        if (array_key_exists("StateMonitorUrl",$param) and $param["StateMonitorUrl"] !== null) {
            $this->StateMonitorUrl = $param["StateMonitorUrl"];
        }

        if (array_key_exists("RunLogUrl",$param) and $param["RunLogUrl"] !== null) {
            $this->RunLogUrl = $param["RunLogUrl"];
        }

        if (array_key_exists("LogDownloadUrl",$param) and $param["LogDownloadUrl"] !== null) {
            $this->LogDownloadUrl = $param["LogDownloadUrl"];
        }

        if (array_key_exists("MarkUrl",$param) and $param["MarkUrl"] !== null) {
            $this->MarkUrl = $param["MarkUrl"];
        }

        if (array_key_exists("SourceCluster",$param) and $param["SourceCluster"] !== null) {
            $this->SourceCluster = $param["SourceCluster"];
        }

        if (array_key_exists("SourceService",$param) and $param["SourceService"] !== null) {
            $this->SourceService = $param["SourceService"];
        }

        if (array_key_exists("SourceServer",$param) and $param["SourceServer"] !== null) {
            $this->SourceServer = $param["SourceServer"];
        }

        if (array_key_exists("SqlFileName",$param) and $param["SqlFileName"] !== null) {
            $this->SqlFileName = $param["SqlFileName"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("UserFileId",$param) and $param["UserFileId"] !== null) {
            $this->UserFileId = $param["UserFileId"];
        }
    }
}
