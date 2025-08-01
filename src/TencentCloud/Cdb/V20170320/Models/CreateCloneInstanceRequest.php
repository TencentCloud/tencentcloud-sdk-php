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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloneInstance请求参数结构体
 *
 * @method string getInstanceId() 获取克隆源实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/api/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置克隆源实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/api/236/15872) 接口获取。
 * @method string getSpecifiedRollbackTime() 获取如果需要克隆实例回档到指定时间，则指定该值。时间格式为：yyyy-mm-dd hh:mm:ss。
说明：此参数和 SpecifiedBackupId 参数需要2选1进行设置。
 * @method void setSpecifiedRollbackTime(string $SpecifiedRollbackTime) 设置如果需要克隆实例回档到指定时间，则指定该值。时间格式为：yyyy-mm-dd hh:mm:ss。
说明：此参数和 SpecifiedBackupId 参数需要2选1进行设置。
 * @method integer getSpecifiedBackupId() 获取如果需要克隆实例回档到指定备份集，则指定该值为备份文件的 Id。请使用 [查询数据备份文件列表](/document/api/236/15842)。
说明：如果是克隆双节点、三节点实例，备份文件为物理备份，如果是克隆单节点、集群版实例，备份文件为快照备份。
 * @method void setSpecifiedBackupId(integer $SpecifiedBackupId) 设置如果需要克隆实例回档到指定备份集，则指定该值为备份文件的 Id。请使用 [查询数据备份文件列表](/document/api/236/15842)。
说明：如果是克隆双节点、三节点实例，备份文件为物理备份，如果是克隆单节点、集群版实例，备份文件为快照备份。
 * @method string getUniqVpcId() 获取私有网络 ID，请使用 [查询私有网络列表](/document/api/215/15778)。
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络 ID，请使用 [查询私有网络列表](/document/api/215/15778)。
 * @method string getUniqSubnetId() 获取私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 [查询子网列表](/document/api/215/15784)。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 [查询子网列表](/document/api/215/15784)。
 * @method integer getMemory() 获取实例内存大小，单位：MB，需要不低于克隆源实例，默认和源实例相同。
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：MB，需要不低于克隆源实例，默认和源实例相同。
 * @method integer getVolume() 获取实例硬盘大小，单位：GB，需要不低于克隆源实例，默认和源实例相同。
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB，需要不低于克隆源实例，默认和源实例相同。
 * @method string getInstanceName() 获取新产生的克隆实例名称。支持输入最大60个字符。
 * @method void setInstanceName(string $InstanceName) 设置新产生的克隆实例名称。支持输入最大60个字符。
 * @method array getSecurityGroup() 获取安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
 * @method array getResourceTags() 获取实例标签信息。
 * @method void setResourceTags(array $ResourceTags) 设置实例标签信息。
 * @method integer getCpu() 获取实例Cpu核数，需要不低于克隆源实例，默认和源实例相同。
 * @method void setCpu(integer $Cpu) 设置实例Cpu核数，需要不低于克隆源实例，默认和源实例相同。
 * @method integer getProtectMode() 获取数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
 * @method void setProtectMode(integer $ProtectMode) 设置数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
 * @method integer getDeployMode() 获取多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
 * @method void setDeployMode(integer $DeployMode) 设置多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
 * @method string getSlaveZone() 获取新产生的克隆实例备库 1 的可用区信息，默认同源实例 Zone 的值。
 * @method void setSlaveZone(string $SlaveZone) 设置新产生的克隆实例备库 1 的可用区信息，默认同源实例 Zone 的值。
 * @method string getBackupZone() 获取备库 2 的可用区信息，默认为空，克隆强同步主实例时可指定该参数。
 * @method void setBackupZone(string $BackupZone) 设置备库 2 的可用区信息，默认为空，克隆强同步主实例时可指定该参数。
 * @method string getDeviceType() 获取克隆实例类型。支持值包括："UNIVERSAL" - 通用型实例，"EXCLUSIVE" - 独享型实例，"CLOUD_NATIVE_CLUSTER" - 集群版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 集群版加强型。不指定则默认为通用型。
 * @method void setDeviceType(string $DeviceType) 设置克隆实例类型。支持值包括："UNIVERSAL" - 通用型实例，"EXCLUSIVE" - 独享型实例，"CLOUD_NATIVE_CLUSTER" - 集群版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 集群版加强型。不指定则默认为通用型。
 * @method integer getInstanceNodes() 获取新克隆实例节点数。如果需要克隆出三节点实例， 请将该值设置为3 或指定 BackupZone 参数。如果需要克隆出两节点实例，请将该值设置为2。默认克隆出两节点实例。
 * @method void setInstanceNodes(integer $InstanceNodes) 设置新克隆实例节点数。如果需要克隆出三节点实例， 请将该值设置为3 或指定 BackupZone 参数。如果需要克隆出两节点实例，请将该值设置为2。默认克隆出两节点实例。
 * @method string getDeployGroupId() 获取置放群组 ID。
 * @method void setDeployGroupId(string $DeployGroupId) 设置置放群组 ID。
 * @method boolean getDryRun() 获取是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。
 * @method string getCageId() 获取金融围拢 ID 。
 * @method void setCageId(string $CageId) 设置金融围拢 ID 。
 * @method integer getProjectId() 获取项目ID，默认项目ID0
 * @method void setProjectId(integer $ProjectId) 设置项目ID，默认项目ID0
 * @method string getPayType() 获取付费类型，PRE_PAID：包年包月，USED_PAID：按量计费。默认为按量计费
 * @method void setPayType(string $PayType) 设置付费类型，PRE_PAID：包年包月，USED_PAID：按量计费。默认为按量计费
 * @method integer getPeriod() 获取实例时长，PayType为PRE_PAID时必传，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
 * @method void setPeriod(integer $Period) 设置实例时长，PayType为PRE_PAID时必传，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
 * @method ClusterTopology getClusterTopology() 获取集群版节点拓扑配置。
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) 设置集群版节点拓扑配置。
 * @method string getSrcRegion() 获取原实例所在地域名，当传入异地备份时为必选项，例：ap-guangzhou
 * @method void setSrcRegion(string $SrcRegion) 设置原实例所在地域名，当传入异地备份时为必选项，例：ap-guangzhou
 * @method integer getSpecifiedSubBackupId() 获取异地数据备份id
 * @method void setSpecifiedSubBackupId(integer $SpecifiedSubBackupId) 设置异地数据备份id
 */
class CreateCloneInstanceRequest extends AbstractModel
{
    /**
     * @var string 克隆源实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/api/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 如果需要克隆实例回档到指定时间，则指定该值。时间格式为：yyyy-mm-dd hh:mm:ss。
说明：此参数和 SpecifiedBackupId 参数需要2选1进行设置。
     */
    public $SpecifiedRollbackTime;

    /**
     * @var integer 如果需要克隆实例回档到指定备份集，则指定该值为备份文件的 Id。请使用 [查询数据备份文件列表](/document/api/236/15842)。
说明：如果是克隆双节点、三节点实例，备份文件为物理备份，如果是克隆单节点、集群版实例，备份文件为快照备份。
     */
    public $SpecifiedBackupId;

    /**
     * @var string 私有网络 ID，请使用 [查询私有网络列表](/document/api/215/15778)。
     */
    public $UniqVpcId;

    /**
     * @var string 私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 [查询子网列表](/document/api/215/15784)。
     */
    public $UniqSubnetId;

    /**
     * @var integer 实例内存大小，单位：MB，需要不低于克隆源实例，默认和源实例相同。
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB，需要不低于克隆源实例，默认和源实例相同。
     */
    public $Volume;

    /**
     * @var string 新产生的克隆实例名称。支持输入最大60个字符。
     */
    public $InstanceName;

    /**
     * @var array 安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
     */
    public $SecurityGroup;

    /**
     * @var array 实例标签信息。
     */
    public $ResourceTags;

    /**
     * @var integer 实例Cpu核数，需要不低于克隆源实例，默认和源实例相同。
     */
    public $Cpu;

    /**
     * @var integer 数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
     */
    public $ProtectMode;

    /**
     * @var integer 多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
     */
    public $DeployMode;

    /**
     * @var string 新产生的克隆实例备库 1 的可用区信息，默认同源实例 Zone 的值。
     */
    public $SlaveZone;

    /**
     * @var string 备库 2 的可用区信息，默认为空，克隆强同步主实例时可指定该参数。
     */
    public $BackupZone;

    /**
     * @var string 克隆实例类型。支持值包括："UNIVERSAL" - 通用型实例，"EXCLUSIVE" - 独享型实例，"CLOUD_NATIVE_CLUSTER" - 集群版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 集群版加强型。不指定则默认为通用型。
     */
    public $DeviceType;

    /**
     * @var integer 新克隆实例节点数。如果需要克隆出三节点实例， 请将该值设置为3 或指定 BackupZone 参数。如果需要克隆出两节点实例，请将该值设置为2。默认克隆出两节点实例。
     */
    public $InstanceNodes;

    /**
     * @var string 置放群组 ID。
     */
    public $DeployGroupId;

    /**
     * @var boolean 是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。
     */
    public $DryRun;

    /**
     * @var string 金融围拢 ID 。
     */
    public $CageId;

    /**
     * @var integer 项目ID，默认项目ID0
     */
    public $ProjectId;

    /**
     * @var string 付费类型，PRE_PAID：包年包月，USED_PAID：按量计费。默认为按量计费
     */
    public $PayType;

    /**
     * @var integer 实例时长，PayType为PRE_PAID时必传，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
     */
    public $Period;

    /**
     * @var ClusterTopology 集群版节点拓扑配置。
     */
    public $ClusterTopology;

    /**
     * @var string 原实例所在地域名，当传入异地备份时为必选项，例：ap-guangzhou
     */
    public $SrcRegion;

    /**
     * @var integer 异地数据备份id
     */
    public $SpecifiedSubBackupId;

    /**
     * @param string $InstanceId 克隆源实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/api/236/15872) 接口获取。
     * @param string $SpecifiedRollbackTime 如果需要克隆实例回档到指定时间，则指定该值。时间格式为：yyyy-mm-dd hh:mm:ss。
说明：此参数和 SpecifiedBackupId 参数需要2选1进行设置。
     * @param integer $SpecifiedBackupId 如果需要克隆实例回档到指定备份集，则指定该值为备份文件的 Id。请使用 [查询数据备份文件列表](/document/api/236/15842)。
说明：如果是克隆双节点、三节点实例，备份文件为物理备份，如果是克隆单节点、集群版实例，备份文件为快照备份。
     * @param string $UniqVpcId 私有网络 ID，请使用 [查询私有网络列表](/document/api/215/15778)。
     * @param string $UniqSubnetId 私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 [查询子网列表](/document/api/215/15784)。
     * @param integer $Memory 实例内存大小，单位：MB，需要不低于克隆源实例，默认和源实例相同。
     * @param integer $Volume 实例硬盘大小，单位：GB，需要不低于克隆源实例，默认和源实例相同。
     * @param string $InstanceName 新产生的克隆实例名称。支持输入最大60个字符。
     * @param array $SecurityGroup 安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
     * @param array $ResourceTags 实例标签信息。
     * @param integer $Cpu 实例Cpu核数，需要不低于克隆源实例，默认和源实例相同。
     * @param integer $ProtectMode 数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
     * @param integer $DeployMode 多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
     * @param string $SlaveZone 新产生的克隆实例备库 1 的可用区信息，默认同源实例 Zone 的值。
     * @param string $BackupZone 备库 2 的可用区信息，默认为空，克隆强同步主实例时可指定该参数。
     * @param string $DeviceType 克隆实例类型。支持值包括："UNIVERSAL" - 通用型实例，"EXCLUSIVE" - 独享型实例，"CLOUD_NATIVE_CLUSTER" - 集群版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 集群版加强型。不指定则默认为通用型。
     * @param integer $InstanceNodes 新克隆实例节点数。如果需要克隆出三节点实例， 请将该值设置为3 或指定 BackupZone 参数。如果需要克隆出两节点实例，请将该值设置为2。默认克隆出两节点实例。
     * @param string $DeployGroupId 置放群组 ID。
     * @param boolean $DryRun 是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。
     * @param string $CageId 金融围拢 ID 。
     * @param integer $ProjectId 项目ID，默认项目ID0
     * @param string $PayType 付费类型，PRE_PAID：包年包月，USED_PAID：按量计费。默认为按量计费
     * @param integer $Period 实例时长，PayType为PRE_PAID时必传，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
     * @param ClusterTopology $ClusterTopology 集群版节点拓扑配置。
     * @param string $SrcRegion 原实例所在地域名，当传入异地备份时为必选项，例：ap-guangzhou
     * @param integer $SpecifiedSubBackupId 异地数据备份id
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SpecifiedRollbackTime",$param) and $param["SpecifiedRollbackTime"] !== null) {
            $this->SpecifiedRollbackTime = $param["SpecifiedRollbackTime"];
        }

        if (array_key_exists("SpecifiedBackupId",$param) and $param["SpecifiedBackupId"] !== null) {
            $this->SpecifiedBackupId = $param["SpecifiedBackupId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("BackupZone",$param) and $param["BackupZone"] !== null) {
            $this->BackupZone = $param["BackupZone"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("InstanceNodes",$param) and $param["InstanceNodes"] !== null) {
            $this->InstanceNodes = $param["InstanceNodes"];
        }

        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ClusterTopology",$param) and $param["ClusterTopology"] !== null) {
            $this->ClusterTopology = new ClusterTopology();
            $this->ClusterTopology->deserialize($param["ClusterTopology"]);
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("SpecifiedSubBackupId",$param) and $param["SpecifiedSubBackupId"] !== null) {
            $this->SpecifiedSubBackupId = $param["SpecifiedSubBackupId"];
        }
    }
}
