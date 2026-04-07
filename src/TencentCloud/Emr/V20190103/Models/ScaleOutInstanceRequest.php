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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutInstance请求参数结构体
 *
 * @method string getTimeUnit() 获取<p>扩容的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>扩容的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
 * @method integer getTimeSpan() 获取<p>扩容的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>扩容的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method integer getPayMode() 获取<p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
 * @method void setPayMode(integer $PayMode) 设置<p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
 * @method string getClientToken() 获取<p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
 * @method void setClientToken(string $ClientToken) 设置<p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
 * @method array getPreExecutedFileSettings() 获取<p>引导操作脚本设置。</p>
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) 设置<p>引导操作脚本设置。</p>
 * @method integer getTaskCount() 获取<p>扩容的Task节点数量。</p>
 * @method void setTaskCount(integer $TaskCount) 设置<p>扩容的Task节点数量。</p>
 * @method integer getCoreCount() 获取<p>扩容的Core节点数量。</p>
 * @method void setCoreCount(integer $CoreCount) 设置<p>扩容的Core节点数量。</p>
 * @method array getUnNecessaryNodeList() 获取<p>扩容时不需要安装的进程。</p>
 * @method void setUnNecessaryNodeList(array $UnNecessaryNodeList) 设置<p>扩容时不需要安装的进程。</p>
 * @method integer getRouterCount() 获取<p>扩容的Router节点数量。</p>
 * @method void setRouterCount(integer $RouterCount) 设置<p>扩容的Router节点数量。</p>
 * @method array getSoftDeployInfo() 获取<p>部署的服务。</p><li>SoftDeployInfo和ServiceNodeInfo是同组参数，和UnNecessaryNodeList参数互斥。</li><li>建议使用SoftDeployInfo和ServiceNodeInfo组合。</li>
 * @method void setSoftDeployInfo(array $SoftDeployInfo) 设置<p>部署的服务。</p><li>SoftDeployInfo和ServiceNodeInfo是同组参数，和UnNecessaryNodeList参数互斥。</li><li>建议使用SoftDeployInfo和ServiceNodeInfo组合。</li>
 * @method array getServiceNodeInfo() 获取<p>启动的进程。</p>
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) 设置<p>启动的进程。</p>
 * @method array getDisasterRecoverGroupIds() 获取<p>分散置放群组ID列表，当前仅支持指定一个。</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置<p>分散置放群组ID列表，当前仅支持指定一个。</p>
 * @method array getTags() 获取<p>扩容节点绑定标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>扩容节点绑定标签列表。</p>
 * @method string getHardwareResourceType() 获取<p>扩容所选资源类型，可选范围为&quot;HOST&quot;,&quot;POD&quot;,&quot;MNode&quot;，HOST为普通的CVM资源，POD为TKE集群或EKS集群提供的资源,MNode为全托管资源类型</p>
 * @method void setHardwareResourceType(string $HardwareResourceType) 设置<p>扩容所选资源类型，可选范围为&quot;HOST&quot;,&quot;POD&quot;,&quot;MNode&quot;，HOST为普通的CVM资源，POD为TKE集群或EKS集群提供的资源,MNode为全托管资源类型</p>
 * @method PodSpec getPodSpec() 获取<p>使用Pod资源扩容时，指定的Pod规格以及来源等信息</p>
 * @method void setPodSpec(PodSpec $PodSpec) 设置<p>使用Pod资源扩容时，指定的Pod规格以及来源等信息</p>
 * @method string getClickHouseClusterName() 获取<p>使用clickhouse集群扩容时，选择的机器分组名称</p>
 * @method void setClickHouseClusterName(string $ClickHouseClusterName) 设置<p>使用clickhouse集群扩容时，选择的机器分组名称</p>
 * @method string getClickHouseClusterType() 获取<p>使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组</p>
 * @method void setClickHouseClusterType(string $ClickHouseClusterType) 设置<p>使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组</p>
 * @method string getYarnNodeLabel() 获取<p>规则扩容指定 yarn node label</p>
 * @method void setYarnNodeLabel(string $YarnNodeLabel) 设置<p>规则扩容指定 yarn node label</p>
 * @method PodParameter getPodParameter() 获取<p>POD自定义权限和自定义参数</p>
 * @method void setPodParameter(PodParameter $PodParameter) 设置<p>POD自定义权限和自定义参数</p>
 * @method integer getMasterCount() 获取<p>扩容的Master节点的数量。<br>使用clickhouse集群扩容时，该参数不生效。<br>使用kafka集群扩容时，该参数不生效。<br>当HardwareResourceType=POD时，该参数不生效。</p>
 * @method void setMasterCount(integer $MasterCount) 设置<p>扩容的Master节点的数量。<br>使用clickhouse集群扩容时，该参数不生效。<br>使用kafka集群扩容时，该参数不生效。<br>当HardwareResourceType=POD时，该参数不生效。</p>
 * @method string getStartServiceAfterScaleOut() 获取<p>扩容后是否启动服务，true：启动，false：不启动</p>
 * @method void setStartServiceAfterScaleOut(string $StartServiceAfterScaleOut) 设置<p>扩容后是否启动服务，true：启动，false：不启动</p>
 * @method integer getZoneId() 获取<p>可用区，默认是集群的主可用区</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区，默认是集群的主可用区</p>
 * @method string getSubnetId() 获取<p>子网，默认是集群创建时的子网</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网，默认是集群创建时的子网</p>
 * @method string getScaleOutServiceConfAssign() 获取<p>预设配置组</p>
 * @method void setScaleOutServiceConfAssign(string $ScaleOutServiceConfAssign) 设置<p>预设配置组</p>
 * @method integer getAutoRenew() 获取<p>0表示关闭自动续费，1表示开启自动续费</p>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>0表示关闭自动续费，1表示开启自动续费</p>
 * @method string getResourceBaseType() 获取<p>类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识</p>
 * @method void setResourceBaseType(string $ResourceBaseType) 设置<p>类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识</p>
 * @method string getComputeResourceId() 获取<p>计算资源id</p>
 * @method void setComputeResourceId(string $ComputeResourceId) 设置<p>计算资源id</p>
 * @method ComputeResourceAdvanceParams getComputeResourceAdvanceParams() 获取<p>计算资源高级设置</p>
 * @method void setComputeResourceAdvanceParams(ComputeResourceAdvanceParams $ComputeResourceAdvanceParams) 设置<p>计算资源高级设置</p>
 * @method NodeMark getNodeMarks() 获取<p>节点标记信息，目前只提供tf平台使用</p>
 * @method void setNodeMarks(NodeMark $NodeMarks) 设置<p>节点标记信息，目前只提供tf平台使用</p>
 * @method string getWarehouseName() 获取<p>扩容指定计算组</p>
 * @method void setWarehouseName(string $WarehouseName) 设置<p>扩容指定计算组</p>
 * @method integer getPartitionNumber() 获取<p>分区置放群组分区</p>
 * @method void setPartitionNumber(integer $PartitionNumber) 设置<p>分区置放群组分区</p>
 */
class ScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>扩容的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
     */
    public $TimeUnit;

    /**
     * @var integer <p>扩容的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
     */
    public $TimeSpan;

    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
     */
    public $PayMode;

    /**
     * @var string <p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
     */
    public $ClientToken;

    /**
     * @var array <p>引导操作脚本设置。</p>
     */
    public $PreExecutedFileSettings;

    /**
     * @var integer <p>扩容的Task节点数量。</p>
     */
    public $TaskCount;

    /**
     * @var integer <p>扩容的Core节点数量。</p>
     */
    public $CoreCount;

    /**
     * @var array <p>扩容时不需要安装的进程。</p>
     */
    public $UnNecessaryNodeList;

    /**
     * @var integer <p>扩容的Router节点数量。</p>
     */
    public $RouterCount;

    /**
     * @var array <p>部署的服务。</p><li>SoftDeployInfo和ServiceNodeInfo是同组参数，和UnNecessaryNodeList参数互斥。</li><li>建议使用SoftDeployInfo和ServiceNodeInfo组合。</li>
     */
    public $SoftDeployInfo;

    /**
     * @var array <p>启动的进程。</p>
     */
    public $ServiceNodeInfo;

    /**
     * @var array <p>分散置放群组ID列表，当前仅支持指定一个。</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array <p>扩容节点绑定标签列表。</p>
     */
    public $Tags;

    /**
     * @var string <p>扩容所选资源类型，可选范围为&quot;HOST&quot;,&quot;POD&quot;,&quot;MNode&quot;，HOST为普通的CVM资源，POD为TKE集群或EKS集群提供的资源,MNode为全托管资源类型</p>
     */
    public $HardwareResourceType;

    /**
     * @var PodSpec <p>使用Pod资源扩容时，指定的Pod规格以及来源等信息</p>
     */
    public $PodSpec;

    /**
     * @var string <p>使用clickhouse集群扩容时，选择的机器分组名称</p>
     */
    public $ClickHouseClusterName;

    /**
     * @var string <p>使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组</p>
     */
    public $ClickHouseClusterType;

    /**
     * @var string <p>规则扩容指定 yarn node label</p>
     */
    public $YarnNodeLabel;

    /**
     * @var PodParameter <p>POD自定义权限和自定义参数</p>
     */
    public $PodParameter;

    /**
     * @var integer <p>扩容的Master节点的数量。<br>使用clickhouse集群扩容时，该参数不生效。<br>使用kafka集群扩容时，该参数不生效。<br>当HardwareResourceType=POD时，该参数不生效。</p>
     */
    public $MasterCount;

    /**
     * @var string <p>扩容后是否启动服务，true：启动，false：不启动</p>
     */
    public $StartServiceAfterScaleOut;

    /**
     * @var integer <p>可用区，默认是集群的主可用区</p>
     */
    public $ZoneId;

    /**
     * @var string <p>子网，默认是集群创建时的子网</p>
     */
    public $SubnetId;

    /**
     * @var string <p>预设配置组</p>
     */
    public $ScaleOutServiceConfAssign;

    /**
     * @var integer <p>0表示关闭自动续费，1表示开启自动续费</p>
     */
    public $AutoRenew;

    /**
     * @var string <p>类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识</p>
     */
    public $ResourceBaseType;

    /**
     * @var string <p>计算资源id</p>
     */
    public $ComputeResourceId;

    /**
     * @var ComputeResourceAdvanceParams <p>计算资源高级设置</p>
     */
    public $ComputeResourceAdvanceParams;

    /**
     * @var NodeMark <p>节点标记信息，目前只提供tf平台使用</p>
     */
    public $NodeMarks;

    /**
     * @var string <p>扩容指定计算组</p>
     */
    public $WarehouseName;

    /**
     * @var integer <p>分区置放群组分区</p>
     */
    public $PartitionNumber;

    /**
     * @param string $TimeUnit <p>扩容的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
     * @param integer $TimeSpan <p>扩容的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
     * @param string $InstanceId <p>实例ID。</p>
     * @param integer $PayMode <p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
     * @param string $ClientToken <p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
     * @param array $PreExecutedFileSettings <p>引导操作脚本设置。</p>
     * @param integer $TaskCount <p>扩容的Task节点数量。</p>
     * @param integer $CoreCount <p>扩容的Core节点数量。</p>
     * @param array $UnNecessaryNodeList <p>扩容时不需要安装的进程。</p>
     * @param integer $RouterCount <p>扩容的Router节点数量。</p>
     * @param array $SoftDeployInfo <p>部署的服务。</p><li>SoftDeployInfo和ServiceNodeInfo是同组参数，和UnNecessaryNodeList参数互斥。</li><li>建议使用SoftDeployInfo和ServiceNodeInfo组合。</li>
     * @param array $ServiceNodeInfo <p>启动的进程。</p>
     * @param array $DisasterRecoverGroupIds <p>分散置放群组ID列表，当前仅支持指定一个。</p>
     * @param array $Tags <p>扩容节点绑定标签列表。</p>
     * @param string $HardwareResourceType <p>扩容所选资源类型，可选范围为&quot;HOST&quot;,&quot;POD&quot;,&quot;MNode&quot;，HOST为普通的CVM资源，POD为TKE集群或EKS集群提供的资源,MNode为全托管资源类型</p>
     * @param PodSpec $PodSpec <p>使用Pod资源扩容时，指定的Pod规格以及来源等信息</p>
     * @param string $ClickHouseClusterName <p>使用clickhouse集群扩容时，选择的机器分组名称</p>
     * @param string $ClickHouseClusterType <p>使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组</p>
     * @param string $YarnNodeLabel <p>规则扩容指定 yarn node label</p>
     * @param PodParameter $PodParameter <p>POD自定义权限和自定义参数</p>
     * @param integer $MasterCount <p>扩容的Master节点的数量。<br>使用clickhouse集群扩容时，该参数不生效。<br>使用kafka集群扩容时，该参数不生效。<br>当HardwareResourceType=POD时，该参数不生效。</p>
     * @param string $StartServiceAfterScaleOut <p>扩容后是否启动服务，true：启动，false：不启动</p>
     * @param integer $ZoneId <p>可用区，默认是集群的主可用区</p>
     * @param string $SubnetId <p>子网，默认是集群创建时的子网</p>
     * @param string $ScaleOutServiceConfAssign <p>预设配置组</p>
     * @param integer $AutoRenew <p>0表示关闭自动续费，1表示开启自动续费</p>
     * @param string $ResourceBaseType <p>类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识</p>
     * @param string $ComputeResourceId <p>计算资源id</p>
     * @param ComputeResourceAdvanceParams $ComputeResourceAdvanceParams <p>计算资源高级设置</p>
     * @param NodeMark $NodeMarks <p>节点标记信息，目前只提供tf平台使用</p>
     * @param string $WarehouseName <p>扩容指定计算组</p>
     * @param integer $PartitionNumber <p>分区置放群组分区</p>
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
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("PreExecutedFileSettings",$param) and $param["PreExecutedFileSettings"] !== null) {
            $this->PreExecutedFileSettings = [];
            foreach ($param["PreExecutedFileSettings"] as $key => $value){
                $obj = new PreExecuteFileSettings();
                $obj->deserialize($value);
                array_push($this->PreExecutedFileSettings, $obj);
            }
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("UnNecessaryNodeList",$param) and $param["UnNecessaryNodeList"] !== null) {
            $this->UnNecessaryNodeList = $param["UnNecessaryNodeList"];
        }

        if (array_key_exists("RouterCount",$param) and $param["RouterCount"] !== null) {
            $this->RouterCount = $param["RouterCount"];
        }

        if (array_key_exists("SoftDeployInfo",$param) and $param["SoftDeployInfo"] !== null) {
            $this->SoftDeployInfo = $param["SoftDeployInfo"];
        }

        if (array_key_exists("ServiceNodeInfo",$param) and $param["ServiceNodeInfo"] !== null) {
            $this->ServiceNodeInfo = $param["ServiceNodeInfo"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }

        if (array_key_exists("PodSpec",$param) and $param["PodSpec"] !== null) {
            $this->PodSpec = new PodSpec();
            $this->PodSpec->deserialize($param["PodSpec"]);
        }

        if (array_key_exists("ClickHouseClusterName",$param) and $param["ClickHouseClusterName"] !== null) {
            $this->ClickHouseClusterName = $param["ClickHouseClusterName"];
        }

        if (array_key_exists("ClickHouseClusterType",$param) and $param["ClickHouseClusterType"] !== null) {
            $this->ClickHouseClusterType = $param["ClickHouseClusterType"];
        }

        if (array_key_exists("YarnNodeLabel",$param) and $param["YarnNodeLabel"] !== null) {
            $this->YarnNodeLabel = $param["YarnNodeLabel"];
        }

        if (array_key_exists("PodParameter",$param) and $param["PodParameter"] !== null) {
            $this->PodParameter = new PodParameter();
            $this->PodParameter->deserialize($param["PodParameter"]);
        }

        if (array_key_exists("MasterCount",$param) and $param["MasterCount"] !== null) {
            $this->MasterCount = $param["MasterCount"];
        }

        if (array_key_exists("StartServiceAfterScaleOut",$param) and $param["StartServiceAfterScaleOut"] !== null) {
            $this->StartServiceAfterScaleOut = $param["StartServiceAfterScaleOut"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ScaleOutServiceConfAssign",$param) and $param["ScaleOutServiceConfAssign"] !== null) {
            $this->ScaleOutServiceConfAssign = $param["ScaleOutServiceConfAssign"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }

        if (array_key_exists("ComputeResourceAdvanceParams",$param) and $param["ComputeResourceAdvanceParams"] !== null) {
            $this->ComputeResourceAdvanceParams = new ComputeResourceAdvanceParams();
            $this->ComputeResourceAdvanceParams->deserialize($param["ComputeResourceAdvanceParams"]);
        }

        if (array_key_exists("NodeMarks",$param) and $param["NodeMarks"] !== null) {
            $this->NodeMarks = new NodeMark();
            $this->NodeMarks->deserialize($param["NodeMarks"]);
        }

        if (array_key_exists("WarehouseName",$param) and $param["WarehouseName"] !== null) {
            $this->WarehouseName = $param["WarehouseName"];
        }

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }
    }
}
