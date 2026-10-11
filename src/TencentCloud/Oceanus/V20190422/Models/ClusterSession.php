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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * session集群信息
 *
 * @method string getClusterGroupSerialId() 获取<p>集群SerialId</p>
 * @method void setClusterGroupSerialId(string $ClusterGroupSerialId) 设置<p>集群SerialId</p>
 * @method integer getAppId() 获取<p>创建者appId</p>
 * @method void setAppId(integer $AppId) 设置<p>创建者appId</p>
 * @method string getOwnerUin() 获取<p>创建者主账号</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>创建者主账号</p>
 * @method string getCreatorUin() 获取<p>创建者账号</p>
 * @method void setCreatorUin(string $CreatorUin) 设置<p>创建者账号</p>
 * @method string getRegion() 获取<p>区域</p>
 * @method void setRegion(string $Region) 设置<p>区域</p>
 * @method string getZone() 获取<p>zone</p>
 * @method void setZone(string $Zone) 设置<p>zone</p>
 * @method integer getStatus() 获取<p>Session集群状态</p>
 * @method void setStatus(integer $Status) 设置<p>Session集群状态</p>
 * @method float getCuNum() 获取<p>Session集群消耗的cu数量</p>
 * @method void setCuNum(float $CuNum) 设置<p>Session集群消耗的cu数量</p>
 * @method string getFlinkVersion() 获取<p>Session集群的Flink版本</p>
 * @method void setFlinkVersion(string $FlinkVersion) 设置<p>Session集群的Flink版本</p>
 * @method string getWebUIUrl() 获取<p>session集群FlinkUi地址</p>
 * @method void setWebUIUrl(string $WebUIUrl) 设置<p>session集群FlinkUi地址</p>
 * @method array getProperties() 获取<p>session集群高级参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置<p>session集群高级参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceRefs() 获取<p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRefs(array $ResourceRefs) 设置<p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getJobManagerCuSpec() 获取<p>JobManager的规格</p>
 * @method void setJobManagerCuSpec(float $JobManagerCuSpec) 设置<p>JobManager的规格</p>
 * @method float getTaskManagerCuSpec() 获取<p>TaskManager的规格</p>
 * @method void setTaskManagerCuSpec(float $TaskManagerCuSpec) 设置<p>TaskManager的规格</p>
 * @method integer getTaskManagerNum() 获取<p>TaskManager启动的数量</p>
 * @method void setTaskManagerNum(integer $TaskManagerNum) 设置<p>TaskManager启动的数量</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method float getJobManagerCpu() 获取<p>JobManagerCpu</p>
 * @method void setJobManagerCpu(float $JobManagerCpu) 设置<p>JobManagerCpu</p>
 * @method float getJobManagerMem() 获取<p>JobManagerMem</p>
 * @method void setJobManagerMem(float $JobManagerMem) 设置<p>JobManagerMem</p>
 * @method float getTaskManagerCpu() 获取<p>TaskManagerCpu</p>
 * @method void setTaskManagerCpu(float $TaskManagerCpu) 设置<p>TaskManagerCpu</p>
 * @method float getTaskManagerMem() 获取<p>TaskManagerMem</p>
 * @method void setTaskManagerMem(float $TaskManagerMem) 设置<p>TaskManagerMem</p>
 * @method string getJdkVersion() 获取<p>jdk版本</p>
 * @method void setJdkVersion(string $JdkVersion) 设置<p>jdk版本</p>
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerialId() 获取<p>session集群SerialId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialId(string $SerialId) 设置<p>session集群SerialId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterGroupName() 获取<p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterGroupName(string $ClusterGroupName) 设置<p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalCpu() 获取<p>cu</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCpu(float $TotalCpu) 设置<p>cu</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalMem() 获取<p>使用Mem</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalMem(float $TotalMem) 设置<p>使用Mem</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkSpaceId() 获取<p>空间Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>空间Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkSpaceName() 获取<p>空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkSpaceName(string $WorkSpaceName) 设置<p>空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogConfig() 获取<p>采集日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogConfig(string $LogConfig) 设置<p>采集日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUin() 获取<p>更新用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUin(string $UpdateUin) 设置<p>更新用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterSession extends AbstractModel
{
    /**
     * @var string <p>集群SerialId</p>
     */
    public $ClusterGroupSerialId;

    /**
     * @var integer <p>创建者appId</p>
     */
    public $AppId;

    /**
     * @var string <p>创建者主账号</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>创建者账号</p>
     */
    public $CreatorUin;

    /**
     * @var string <p>区域</p>
     */
    public $Region;

    /**
     * @var string <p>zone</p>
     */
    public $Zone;

    /**
     * @var integer <p>Session集群状态</p>
     */
    public $Status;

    /**
     * @var float <p>Session集群消耗的cu数量</p>
     */
    public $CuNum;

    /**
     * @var string <p>Session集群的Flink版本</p>
     */
    public $FlinkVersion;

    /**
     * @var string <p>session集群FlinkUi地址</p>
     */
    public $WebUIUrl;

    /**
     * @var array <p>session集群高级参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var array <p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRefs;

    /**
     * @var float <p>JobManager的规格</p>
     */
    public $JobManagerCuSpec;

    /**
     * @var float <p>TaskManager的规格</p>
     */
    public $TaskManagerCuSpec;

    /**
     * @var integer <p>TaskManager启动的数量</p>
     */
    public $TaskManagerNum;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var float <p>JobManagerCpu</p>
     */
    public $JobManagerCpu;

    /**
     * @var float <p>JobManagerMem</p>
     */
    public $JobManagerMem;

    /**
     * @var float <p>TaskManagerCpu</p>
     */
    public $TaskManagerCpu;

    /**
     * @var float <p>TaskManagerMem</p>
     */
    public $TaskManagerMem;

    /**
     * @var string <p>jdk版本</p>
     */
    public $JdkVersion;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>session集群SerialId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialId;

    /**
     * @var string <p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterGroupName;

    /**
     * @var float <p>cu</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCpu;

    /**
     * @var float <p>使用Mem</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalMem;

    /**
     * @var string <p>空间Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkSpaceId;

    /**
     * @var string <p>空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkSpaceName;

    /**
     * @var array <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>采集日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogConfig;

    /**
     * @var string <p>更新用户</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUin;

    /**
     * @param string $ClusterGroupSerialId <p>集群SerialId</p>
     * @param integer $AppId <p>创建者appId</p>
     * @param string $OwnerUin <p>创建者主账号</p>
     * @param string $CreatorUin <p>创建者账号</p>
     * @param string $Region <p>区域</p>
     * @param string $Zone <p>zone</p>
     * @param integer $Status <p>Session集群状态</p>
     * @param float $CuNum <p>Session集群消耗的cu数量</p>
     * @param string $FlinkVersion <p>Session集群的Flink版本</p>
     * @param string $WebUIUrl <p>session集群FlinkUi地址</p>
     * @param array $Properties <p>session集群高级参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceRefs <p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $JobManagerCuSpec <p>JobManager的规格</p>
     * @param float $TaskManagerCuSpec <p>TaskManager的规格</p>
     * @param integer $TaskManagerNum <p>TaskManager启动的数量</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param float $JobManagerCpu <p>JobManagerCpu</p>
     * @param float $JobManagerMem <p>JobManagerMem</p>
     * @param float $TaskManagerCpu <p>TaskManagerCpu</p>
     * @param float $TaskManagerMem <p>TaskManagerMem</p>
     * @param string $JdkVersion <p>jdk版本</p>
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SerialId <p>session集群SerialId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterGroupName <p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalCpu <p>cu</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalMem <p>使用Mem</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkSpaceId <p>空间Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkSpaceName <p>空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogConfig <p>采集日志配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUin <p>更新用户</p>
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
        if (array_key_exists("ClusterGroupSerialId",$param) and $param["ClusterGroupSerialId"] !== null) {
            $this->ClusterGroupSerialId = $param["ClusterGroupSerialId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CuNum",$param) and $param["CuNum"] !== null) {
            $this->CuNum = $param["CuNum"];
        }

        if (array_key_exists("FlinkVersion",$param) and $param["FlinkVersion"] !== null) {
            $this->FlinkVersion = $param["FlinkVersion"];
        }

        if (array_key_exists("WebUIUrl",$param) and $param["WebUIUrl"] !== null) {
            $this->WebUIUrl = $param["WebUIUrl"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("ResourceRefs",$param) and $param["ResourceRefs"] !== null) {
            $this->ResourceRefs = [];
            foreach ($param["ResourceRefs"] as $key => $value){
                $obj = new SessionClusterRefItem();
                $obj->deserialize($value);
                array_push($this->ResourceRefs, $obj);
            }
        }

        if (array_key_exists("JobManagerCuSpec",$param) and $param["JobManagerCuSpec"] !== null) {
            $this->JobManagerCuSpec = $param["JobManagerCuSpec"];
        }

        if (array_key_exists("TaskManagerCuSpec",$param) and $param["TaskManagerCuSpec"] !== null) {
            $this->TaskManagerCuSpec = $param["TaskManagerCuSpec"];
        }

        if (array_key_exists("TaskManagerNum",$param) and $param["TaskManagerNum"] !== null) {
            $this->TaskManagerNum = $param["TaskManagerNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("JobManagerCpu",$param) and $param["JobManagerCpu"] !== null) {
            $this->JobManagerCpu = $param["JobManagerCpu"];
        }

        if (array_key_exists("JobManagerMem",$param) and $param["JobManagerMem"] !== null) {
            $this->JobManagerMem = $param["JobManagerMem"];
        }

        if (array_key_exists("TaskManagerCpu",$param) and $param["TaskManagerCpu"] !== null) {
            $this->TaskManagerCpu = $param["TaskManagerCpu"];
        }

        if (array_key_exists("TaskManagerMem",$param) and $param["TaskManagerMem"] !== null) {
            $this->TaskManagerMem = $param["TaskManagerMem"];
        }

        if (array_key_exists("JdkVersion",$param) and $param["JdkVersion"] !== null) {
            $this->JdkVersion = $param["JdkVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SerialId",$param) and $param["SerialId"] !== null) {
            $this->SerialId = $param["SerialId"];
        }

        if (array_key_exists("ClusterGroupName",$param) and $param["ClusterGroupName"] !== null) {
            $this->ClusterGroupName = $param["ClusterGroupName"];
        }

        if (array_key_exists("TotalCpu",$param) and $param["TotalCpu"] !== null) {
            $this->TotalCpu = $param["TotalCpu"];
        }

        if (array_key_exists("TotalMem",$param) and $param["TotalMem"] !== null) {
            $this->TotalMem = $param["TotalMem"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("WorkSpaceName",$param) and $param["WorkSpaceName"] !== null) {
            $this->WorkSpaceName = $param["WorkSpaceName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = $param["LogConfig"];
        }

        if (array_key_exists("UpdateUin",$param) and $param["UpdateUin"] !== null) {
            $this->UpdateUin = $param["UpdateUin"];
        }
    }
}
