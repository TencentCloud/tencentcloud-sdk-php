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
 * @method string getClusterGroupSerialId() 获取集群SerialId
 * @method void setClusterGroupSerialId(string $ClusterGroupSerialId) 设置集群SerialId
 * @method integer getAppId() 获取创建者appId
 * @method void setAppId(integer $AppId) 设置创建者appId
 * @method string getOwnerUin() 获取创建者主账号
 * @method void setOwnerUin(string $OwnerUin) 设置创建者主账号
 * @method string getCreatorUin() 获取创建者账号
 * @method void setCreatorUin(string $CreatorUin) 设置创建者账号
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method string getZone() 获取zone
 * @method void setZone(string $Zone) 设置zone
 * @method integer getStatus() 获取Session集群状态
 * @method void setStatus(integer $Status) 设置Session集群状态
 * @method float getCuNum() 获取Session集群消耗的cu数量
 * @method void setCuNum(float $CuNum) 设置Session集群消耗的cu数量
 * @method string getFlinkVersion() 获取Session集群的Flink版本
 * @method void setFlinkVersion(string $FlinkVersion) 设置Session集群的Flink版本
 * @method string getWebUIUrl() 获取session集群FlinkUi地址
 * @method void setWebUIUrl(string $WebUIUrl) 设置session集群FlinkUi地址
 * @method array getProperties() 获取session集群高级参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置session集群高级参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceRefs() 获取引用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRefs(array $ResourceRefs) 设置引用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getJobManagerCuSpec() 获取JobManager的规格
 * @method void setJobManagerCuSpec(float $JobManagerCuSpec) 设置JobManager的规格
 * @method float getTaskManagerCuSpec() 获取TaskManager的规格
 * @method void setTaskManagerCuSpec(float $TaskManagerCuSpec) 设置TaskManager的规格
 * @method integer getTaskManagerNum() 获取TaskManager启动的数量
 * @method void setTaskManagerNum(integer $TaskManagerNum) 设置TaskManager启动的数量
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method float getJobManagerCpu() 获取JobManagerCpu
 * @method void setJobManagerCpu(float $JobManagerCpu) 设置JobManagerCpu
 * @method float getJobManagerMem() 获取JobManagerMem
 * @method void setJobManagerMem(float $JobManagerMem) 设置JobManagerMem
 * @method float getTaskManagerCpu() 获取TaskManagerCpu
 * @method void setTaskManagerCpu(float $TaskManagerCpu) 设置TaskManagerCpu
 * @method float getTaskManagerMem() 获取TaskManagerMem
 * @method void setTaskManagerMem(float $TaskManagerMem) 设置TaskManagerMem
 * @method string getJdkVersion() 获取jdk版本
 * @method void setJdkVersion(string $JdkVersion) 设置jdk版本
 */
class ClusterSession extends AbstractModel
{
    /**
     * @var string 集群SerialId
     */
    public $ClusterGroupSerialId;

    /**
     * @var integer 创建者appId
     */
    public $AppId;

    /**
     * @var string 创建者主账号
     */
    public $OwnerUin;

    /**
     * @var string 创建者账号
     */
    public $CreatorUin;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @var string zone
     */
    public $Zone;

    /**
     * @var integer Session集群状态
     */
    public $Status;

    /**
     * @var float Session集群消耗的cu数量
     */
    public $CuNum;

    /**
     * @var string Session集群的Flink版本
     */
    public $FlinkVersion;

    /**
     * @var string session集群FlinkUi地址
     */
    public $WebUIUrl;

    /**
     * @var array session集群高级参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var array 引用资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRefs;

    /**
     * @var float JobManager的规格
     */
    public $JobManagerCuSpec;

    /**
     * @var float TaskManager的规格
     */
    public $TaskManagerCuSpec;

    /**
     * @var integer TaskManager启动的数量
     */
    public $TaskManagerNum;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var float JobManagerCpu
     */
    public $JobManagerCpu;

    /**
     * @var float JobManagerMem
     */
    public $JobManagerMem;

    /**
     * @var float TaskManagerCpu
     */
    public $TaskManagerCpu;

    /**
     * @var float TaskManagerMem
     */
    public $TaskManagerMem;

    /**
     * @var string jdk版本
     */
    public $JdkVersion;

    /**
     * @param string $ClusterGroupSerialId 集群SerialId
     * @param integer $AppId 创建者appId
     * @param string $OwnerUin 创建者主账号
     * @param string $CreatorUin 创建者账号
     * @param string $Region 区域
     * @param string $Zone zone
     * @param integer $Status Session集群状态
     * @param float $CuNum Session集群消耗的cu数量
     * @param string $FlinkVersion Session集群的Flink版本
     * @param string $WebUIUrl session集群FlinkUi地址
     * @param array $Properties session集群高级参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceRefs 引用资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $JobManagerCuSpec JobManager的规格
     * @param float $TaskManagerCuSpec TaskManager的规格
     * @param integer $TaskManagerNum TaskManager启动的数量
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param float $JobManagerCpu JobManagerCpu
     * @param float $JobManagerMem JobManagerMem
     * @param float $TaskManagerCpu TaskManagerCpu
     * @param float $TaskManagerMem TaskManagerMem
     * @param string $JdkVersion jdk版本
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
    }
}
