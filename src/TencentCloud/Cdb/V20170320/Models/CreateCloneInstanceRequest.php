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
 * @method string getInstanceId() 获取<p>克隆源实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>克隆源实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method string getSpecifiedRollbackTime() 获取<p>如果需要克隆实例回档到指定时间，则指定该值。时间格式为：yyyy-mm-dd hh:mm:ss。<br>说明：此参数和 SpecifiedBackupId 参数需要2选1进行设置。</p>
 * @method void setSpecifiedRollbackTime(string $SpecifiedRollbackTime) 设置<p>如果需要克隆实例回档到指定时间，则指定该值。时间格式为：yyyy-mm-dd hh:mm:ss。<br>说明：此参数和 SpecifiedBackupId 参数需要2选1进行设置。</p>
 * @method integer getSpecifiedBackupId() 获取<p>如果需要克隆实例回档到指定备份集，则指定该值为备份文件的 Id。请使用 <a href="/document/api/236/15842">查询数据备份文件列表</a>。<br>说明：如果是克隆双节点、三节点实例，备份文件为物理备份，如果是克隆单节点、云盘版实例，备份文件为快照备份。</p>
 * @method void setSpecifiedBackupId(integer $SpecifiedBackupId) 设置<p>如果需要克隆实例回档到指定备份集，则指定该值为备份文件的 Id。请使用 <a href="/document/api/236/15842">查询数据备份文件列表</a>。<br>说明：如果是克隆双节点、三节点实例，备份文件为物理备份，如果是克隆单节点、云盘版实例，备份文件为快照备份。</p>
 * @method string getUniqVpcId() 获取<p>私有网络 ID，请使用 <a href="/document/api/215/15778">查询私有网络列表</a>。</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>私有网络 ID，请使用 <a href="/document/api/215/15778">查询私有网络列表</a>。</p>
 * @method string getUniqSubnetId() 获取<p>私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 <a href="/document/api/215/15784">查询子网列表</a>。</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 <a href="/document/api/215/15784">查询子网列表</a>。</p>
 * @method integer getMemory() 获取<p>实例内存大小，单位：MB，需要不低于克隆源实例，默认和源实例相同。</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小，单位：MB，需要不低于克隆源实例，默认和源实例相同。</p>
 * @method integer getVolume() 获取<p>实例硬盘大小，单位：GB，需要不低于克隆源实例，默认和源实例相同。</p>
 * @method void setVolume(integer $Volume) 设置<p>实例硬盘大小，单位：GB，需要不低于克隆源实例，默认和源实例相同。</p>
 * @method string getInstanceName() 获取<p>新产生的克隆实例名称。支持输入最大60个字符。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>新产生的克隆实例名称。支持输入最大60个字符。</p>
 * @method array getSecurityGroup() 获取<p>安全组参数，可使用 <a href="https://cloud.tencent.com/document/api/236/15850">查询项目安全组信息</a> 接口查询某个项目的安全组详情。</p>
 * @method void setSecurityGroup(array $SecurityGroup) 设置<p>安全组参数，可使用 <a href="https://cloud.tencent.com/document/api/236/15850">查询项目安全组信息</a> 接口查询某个项目的安全组详情。</p>
 * @method array getResourceTags() 获取<p>实例标签信息。</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>实例标签信息。</p>
 * @method integer getCpu() 获取<p>实例Cpu核数，需要不低于克隆源实例，默认和源实例相同。</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例Cpu核数，需要不低于克隆源实例，默认和源实例相同。</p>
 * @method integer getProtectMode() 获取<p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
 * @method void setProtectMode(integer $ProtectMode) 设置<p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
 * @method integer getDeployMode() 获取<p>多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
 * @method void setDeployMode(integer $DeployMode) 设置<p>多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
 * @method string getSlaveZone() 获取<p>新产生的克隆实例备库 1 的可用区信息，默认同源实例 Zone 的值。</p>
 * @method void setSlaveZone(string $SlaveZone) 设置<p>新产生的克隆实例备库 1 的可用区信息，默认同源实例 Zone 的值。</p>
 * @method string getBackupZone() 获取<p>备库 2 的可用区信息，默认为空，克隆强同步主实例时可指定该参数。</p>
 * @method void setBackupZone(string $BackupZone) 设置<p>备库 2 的可用区信息，默认为空，克隆强同步主实例时可指定该参数。</p>
 * @method string getDeviceType() 获取<p>克隆实例类型。支持值包括：&quot;UNIVERSAL&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。不指定则默认为通用型。</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>克隆实例类型。支持值包括：&quot;UNIVERSAL&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。不指定则默认为通用型。</p>
 * @method integer getInstanceNodes() 获取<p>新克隆实例节点数。如果需要克隆出三节点实例， 请将该值设置为3 或指定 BackupZone 参数。如果需要克隆出两节点实例，请将该值设置为2。默认克隆出两节点实例。</p>
 * @method void setInstanceNodes(integer $InstanceNodes) 设置<p>新克隆实例节点数。如果需要克隆出三节点实例， 请将该值设置为3 或指定 BackupZone 参数。如果需要克隆出两节点实例，请将该值设置为2。默认克隆出两节点实例。</p>
 * @method string getDeployGroupId() 获取<p>置放群组 ID。</p>
 * @method void setDeployGroupId(string $DeployGroupId) 设置<p>置放群组 ID。</p>
 * @method boolean getDryRun() 获取<p>是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。</p>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。</p>
 * @method string getCageId() 获取<p>金融围拢 ID 。</p>
 * @method void setCageId(string $CageId) 设置<p>金融围拢 ID 。</p>
 * @method integer getProjectId() 获取<p>项目ID，默认项目ID0</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID，默认项目ID0</p>
 * @method string getPayType() 获取<p>付费类型，PRE_PAID：包年包月，USED_PAID：按量计费。默认为按量计费</p>
 * @method void setPayType(string $PayType) 设置<p>付费类型，PRE_PAID：包年包月，USED_PAID：按量计费。默认为按量计费</p>
 * @method integer getPeriod() 获取<p>实例时长，PayType为PRE_PAID时必传，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
 * @method void setPeriod(integer $Period) 设置<p>实例时长，PayType为PRE_PAID时必传，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
 * @method ClusterTopology getClusterTopology() 获取<p>云盘版节点拓扑配置。</p>
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) 设置<p>云盘版节点拓扑配置。</p>
 * @method string getSrcRegion() 获取<p>原实例所在地域名，当传入异地备份时为必选项，例：ap-guangzhou</p>
 * @method void setSrcRegion(string $SrcRegion) 设置<p>原实例所在地域名，当传入异地备份时为必选项，例：ap-guangzhou</p>
 * @method integer getSpecifiedSubBackupId() 获取<p>异地数据备份id</p>
 * @method void setSpecifiedSubBackupId(integer $SpecifiedSubBackupId) 设置<p>异地数据备份id</p>
 * @method string getMasterZone() 获取<p>新产生的克隆实例主库的可用区信息，默认同源实例 Zone 的值。</p>
 * @method void setMasterZone(string $MasterZone) 设置<p>新产生的克隆实例主库的可用区信息，默认同源实例 Zone 的值。</p>
 * @method string getZone() 获取<p>新产生的克隆实例主库的可用区信息，默认同源实例 Zone 的值。</p>
 * @method void setZone(string $Zone) 设置<p>新产生的克隆实例主库的可用区信息，默认同源实例 Zone 的值。</p>
 */
class CreateCloneInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>克隆源实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/15872">DescribeDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>如果需要克隆实例回档到指定时间，则指定该值。时间格式为：yyyy-mm-dd hh:mm:ss。<br>说明：此参数和 SpecifiedBackupId 参数需要2选1进行设置。</p>
     */
    public $SpecifiedRollbackTime;

    /**
     * @var integer <p>如果需要克隆实例回档到指定备份集，则指定该值为备份文件的 Id。请使用 <a href="/document/api/236/15842">查询数据备份文件列表</a>。<br>说明：如果是克隆双节点、三节点实例，备份文件为物理备份，如果是克隆单节点、云盘版实例，备份文件为快照备份。</p>
     */
    public $SpecifiedBackupId;

    /**
     * @var string <p>私有网络 ID，请使用 <a href="/document/api/215/15778">查询私有网络列表</a>。</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 <a href="/document/api/215/15784">查询子网列表</a>。</p>
     */
    public $UniqSubnetId;

    /**
     * @var integer <p>实例内存大小，单位：MB，需要不低于克隆源实例，默认和源实例相同。</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例硬盘大小，单位：GB，需要不低于克隆源实例，默认和源实例相同。</p>
     */
    public $Volume;

    /**
     * @var string <p>新产生的克隆实例名称。支持输入最大60个字符。</p>
     */
    public $InstanceName;

    /**
     * @var array <p>安全组参数，可使用 <a href="https://cloud.tencent.com/document/api/236/15850">查询项目安全组信息</a> 接口查询某个项目的安全组详情。</p>
     */
    public $SecurityGroup;

    /**
     * @var array <p>实例标签信息。</p>
     */
    public $ResourceTags;

    /**
     * @var integer <p>实例Cpu核数，需要不低于克隆源实例，默认和源实例相同。</p>
     */
    public $Cpu;

    /**
     * @var integer <p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
     */
    public $ProtectMode;

    /**
     * @var integer <p>多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
     */
    public $DeployMode;

    /**
     * @var string <p>新产生的克隆实例备库 1 的可用区信息，默认同源实例 Zone 的值。</p>
     */
    public $SlaveZone;

    /**
     * @var string <p>备库 2 的可用区信息，默认为空，克隆强同步主实例时可指定该参数。</p>
     */
    public $BackupZone;

    /**
     * @var string <p>克隆实例类型。支持值包括：&quot;UNIVERSAL&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。不指定则默认为通用型。</p>
     */
    public $DeviceType;

    /**
     * @var integer <p>新克隆实例节点数。如果需要克隆出三节点实例， 请将该值设置为3 或指定 BackupZone 参数。如果需要克隆出两节点实例，请将该值设置为2。默认克隆出两节点实例。</p>
     */
    public $InstanceNodes;

    /**
     * @var string <p>置放群组 ID。</p>
     */
    public $DeployGroupId;

    /**
     * @var boolean <p>是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。</p>
     */
    public $DryRun;

    /**
     * @var string <p>金融围拢 ID 。</p>
     */
    public $CageId;

    /**
     * @var integer <p>项目ID，默认项目ID0</p>
     */
    public $ProjectId;

    /**
     * @var string <p>付费类型，PRE_PAID：包年包月，USED_PAID：按量计费。默认为按量计费</p>
     */
    public $PayType;

    /**
     * @var integer <p>实例时长，PayType为PRE_PAID时必传，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
     */
    public $Period;

    /**
     * @var ClusterTopology <p>云盘版节点拓扑配置。</p>
     */
    public $ClusterTopology;

    /**
     * @var string <p>原实例所在地域名，当传入异地备份时为必选项，例：ap-guangzhou</p>
     */
    public $SrcRegion;

    /**
     * @var integer <p>异地数据备份id</p>
     */
    public $SpecifiedSubBackupId;

    /**
     * @var string <p>新产生的克隆实例主库的可用区信息，默认同源实例 Zone 的值。</p>
     * @deprecated
     */
    public $MasterZone;

    /**
     * @var string <p>新产生的克隆实例主库的可用区信息，默认同源实例 Zone 的值。</p>
     */
    public $Zone;

    /**
     * @param string $InstanceId <p>克隆源实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/15872">DescribeDBInstances</a> 接口获取。</p>
     * @param string $SpecifiedRollbackTime <p>如果需要克隆实例回档到指定时间，则指定该值。时间格式为：yyyy-mm-dd hh:mm:ss。<br>说明：此参数和 SpecifiedBackupId 参数需要2选1进行设置。</p>
     * @param integer $SpecifiedBackupId <p>如果需要克隆实例回档到指定备份集，则指定该值为备份文件的 Id。请使用 <a href="/document/api/236/15842">查询数据备份文件列表</a>。<br>说明：如果是克隆双节点、三节点实例，备份文件为物理备份，如果是克隆单节点、云盘版实例，备份文件为快照备份。</p>
     * @param string $UniqVpcId <p>私有网络 ID，请使用 <a href="/document/api/215/15778">查询私有网络列表</a>。</p>
     * @param string $UniqSubnetId <p>私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 <a href="/document/api/215/15784">查询子网列表</a>。</p>
     * @param integer $Memory <p>实例内存大小，单位：MB，需要不低于克隆源实例，默认和源实例相同。</p>
     * @param integer $Volume <p>实例硬盘大小，单位：GB，需要不低于克隆源实例，默认和源实例相同。</p>
     * @param string $InstanceName <p>新产生的克隆实例名称。支持输入最大60个字符。</p>
     * @param array $SecurityGroup <p>安全组参数，可使用 <a href="https://cloud.tencent.com/document/api/236/15850">查询项目安全组信息</a> 接口查询某个项目的安全组详情。</p>
     * @param array $ResourceTags <p>实例标签信息。</p>
     * @param integer $Cpu <p>实例Cpu核数，需要不低于克隆源实例，默认和源实例相同。</p>
     * @param integer $ProtectMode <p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
     * @param integer $DeployMode <p>多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
     * @param string $SlaveZone <p>新产生的克隆实例备库 1 的可用区信息，默认同源实例 Zone 的值。</p>
     * @param string $BackupZone <p>备库 2 的可用区信息，默认为空，克隆强同步主实例时可指定该参数。</p>
     * @param string $DeviceType <p>克隆实例类型。支持值包括：&quot;UNIVERSAL&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。不指定则默认为通用型。</p>
     * @param integer $InstanceNodes <p>新克隆实例节点数。如果需要克隆出三节点实例， 请将该值设置为3 或指定 BackupZone 参数。如果需要克隆出两节点实例，请将该值设置为2。默认克隆出两节点实例。</p>
     * @param string $DeployGroupId <p>置放群组 ID。</p>
     * @param boolean $DryRun <p>是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。</p>
     * @param string $CageId <p>金融围拢 ID 。</p>
     * @param integer $ProjectId <p>项目ID，默认项目ID0</p>
     * @param string $PayType <p>付费类型，PRE_PAID：包年包月，USED_PAID：按量计费。默认为按量计费</p>
     * @param integer $Period <p>实例时长，PayType为PRE_PAID时必传，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
     * @param ClusterTopology $ClusterTopology <p>云盘版节点拓扑配置。</p>
     * @param string $SrcRegion <p>原实例所在地域名，当传入异地备份时为必选项，例：ap-guangzhou</p>
     * @param integer $SpecifiedSubBackupId <p>异地数据备份id</p>
     * @param string $MasterZone <p>新产生的克隆实例主库的可用区信息，默认同源实例 Zone 的值。</p>
     * @param string $Zone <p>新产生的克隆实例主库的可用区信息，默认同源实例 Zone 的值。</p>
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

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
