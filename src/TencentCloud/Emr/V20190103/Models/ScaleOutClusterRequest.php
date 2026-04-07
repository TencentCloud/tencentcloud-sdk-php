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
 * ScaleOutCluster请求参数结构体
 *
 * @method string getInstanceChargeType() 获取<p>节点计费模式。取值范围：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：按小时后付费。</li><li>SPOTPAID：竞价付费（仅支持TASK节点）。</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>节点计费模式。取值范围：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：按小时后付费。</li><li>SPOTPAID：竞价付费（仅支持TASK节点）。</li>
 * @method string getInstanceId() 获取<p>集群实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群实例ID。</p>
 * @method ScaleOutNodeConfig getScaleOutNodeConfig() 获取<p>扩容节点类型以及数量</p>
 * @method void setScaleOutNodeConfig(ScaleOutNodeConfig $ScaleOutNodeConfig) 设置<p>扩容节点类型以及数量</p>
 * @method string getClientToken() 获取<p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
 * @method void setClientToken(string $ClientToken) 设置<p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method array getScriptBootstrapActionConfig() 获取<p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
 * @method void setScriptBootstrapActionConfig(array $ScriptBootstrapActionConfig) 设置<p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
 * @method array getSoftDeployInfo() 获取<p>扩容部署服务，新增节点将默认继承当前节点类型中所部署服务，部署服务含默认可选服务，该参数仅支持可选服务填写，如：存量task节点已部署HDFS、YARN、impala；使用api扩容task节不部署impala时，部署服务仅填写HDFS、YARN。<a href="https://cloud.tencent.com/document/product/589/98760">组件名对应的映射关系表</a>。</p>
 * @method void setSoftDeployInfo(array $SoftDeployInfo) 设置<p>扩容部署服务，新增节点将默认继承当前节点类型中所部署服务，部署服务含默认可选服务，该参数仅支持可选服务填写，如：存量task节点已部署HDFS、YARN、impala；使用api扩容task节不部署impala时，部署服务仅填写HDFS、YARN。<a href="https://cloud.tencent.com/document/product/589/98760">组件名对应的映射关系表</a>。</p>
 * @method array getServiceNodeInfo() 获取<p>部署进程，默认部署扩容服务的全部进程，支持修改部署进程，如：当前task节点部署服务为：HDFS、YARN、impala，默认部署服务为：DataNode,NodeManager,ImpalaServer，若用户需修改部署进程信息，部署进程：    DataNode,NodeManager,ImpalaServerCoordinator或DataNode,NodeManager,ImpalaServerExecutor。<a href="https://cloud.tencent.com/document/product/589/98760">进程名对应的映射关系表</a>。</p>
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) 设置<p>部署进程，默认部署扩容服务的全部进程，支持修改部署进程，如：当前task节点部署服务为：HDFS、YARN、impala，默认部署服务为：DataNode,NodeManager,ImpalaServer，若用户需修改部署进程信息，部署进程：    DataNode,NodeManager,ImpalaServerCoordinator或DataNode,NodeManager,ImpalaServerExecutor。<a href="https://cloud.tencent.com/document/product/589/98760">进程名对应的映射关系表</a>。</p>
 * @method array getDisasterRecoverGroupIds() 获取<p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>的返回值中的DisasterRecoverGroupId字段来获取。</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置<p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>的返回值中的DisasterRecoverGroupId字段来获取。</p>
 * @method array getTags() 获取<p>扩容节点绑定标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>扩容节点绑定标签列表。</p>
 * @method string getHardwareSourceType() 获取<p>扩容所选资源类型，可选范围为&quot;HOST&quot;,&quot;POD&quot;,&quot;MNode&quot;，HOST为普通的CVM资源，POD为TKE集群或EKS集群提供的资源,MNode为全托管资源类型</p>
 * @method void setHardwareSourceType(string $HardwareSourceType) 设置<p>扩容所选资源类型，可选范围为&quot;HOST&quot;,&quot;POD&quot;,&quot;MNode&quot;，HOST为普通的CVM资源，POD为TKE集群或EKS集群提供的资源,MNode为全托管资源类型</p>
 * @method PodSpecInfo getPodSpecInfo() 获取<p>Pod相关资源信息</p>
 * @method void setPodSpecInfo(PodSpecInfo $PodSpecInfo) 设置<p>Pod相关资源信息</p>
 * @method string getClickHouseClusterName() 获取<p>使用clickhouse集群扩容时，选择的机器分组名称</p>
 * @method void setClickHouseClusterName(string $ClickHouseClusterName) 设置<p>使用clickhouse集群扩容时，选择的机器分组名称</p>
 * @method string getClickHouseClusterType() 获取<p>使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组</p>
 * @method void setClickHouseClusterType(string $ClickHouseClusterType) 设置<p>使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组</p>
 * @method string getYarnNodeLabel() 获取<p>扩容指定 Yarn Node Label</p>
 * @method void setYarnNodeLabel(string $YarnNodeLabel) 设置<p>扩容指定 Yarn Node Label</p>
 * @method boolean getEnableStartServiceFlag() 获取<p>扩容后是否启动服务，默认取值否</p><li>true：是</li><li>false：否</li>
 * @method void setEnableStartServiceFlag(boolean $EnableStartServiceFlag) 设置<p>扩容后是否启动服务，默认取值否</p><li>true：是</li><li>false：否</li>
 * @method NodeResourceSpec getResourceSpec() 获取<p>规格设置</p>
 * @method void setResourceSpec(NodeResourceSpec $ResourceSpec) 设置<p>规格设置</p>
 * @method string getZone() 获取<p>实例所属的可用区，例如ap-guangzhou-1。该参数也可以通过调用<a href="https://cloud.tencent.com/document/product/213/15707">DescribeZones</a> 的返回值中的Zone字段来获取。</p>
 * @method void setZone(string $Zone) 设置<p>实例所属的可用区，例如ap-guangzhou-1。该参数也可以通过调用<a href="https://cloud.tencent.com/document/product/213/15707">DescribeZones</a> 的返回值中的Zone字段来获取。</p>
 * @method string getSubnetId() 获取<p>子网，默认是集群创建时的子网</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网，默认是集群创建时的子网</p>
 * @method array getScaleOutServiceConfGroupsInfo() 获取<p>扩容指定配置组</p>
 * @method void setScaleOutServiceConfGroupsInfo(array $ScaleOutServiceConfGroupsInfo) 设置<p>扩容指定配置组</p>
 * @method NodeMark getNodeMarks() 获取<p>节点标记信息，当前只提供给tf平台使用</p>
 * @method void setNodeMarks(NodeMark $NodeMarks) 设置<p>节点标记信息，当前只提供给tf平台使用</p>
 * @method string getWarehouseName() 获取<p>扩容指定计算组名称</p>
 * @method void setWarehouseName(string $WarehouseName) 设置<p>扩容指定计算组名称</p>
 * @method integer getPartitionNumber() 获取<p>分区置放群组分区</p>
 * @method void setPartitionNumber(integer $PartitionNumber) 设置<p>分区置放群组分区</p>
 */
class ScaleOutClusterRequest extends AbstractModel
{
    /**
     * @var string <p>节点计费模式。取值范围：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：按小时后付费。</li><li>SPOTPAID：竞价付费（仅支持TASK节点）。</li>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>集群实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var ScaleOutNodeConfig <p>扩容节点类型以及数量</p>
     */
    public $ScaleOutNodeConfig;

    /**
     * @var string <p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
     */
    public $ClientToken;

    /**
     * @var InstanceChargePrepaid <p>即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var array <p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
     */
    public $ScriptBootstrapActionConfig;

    /**
     * @var array <p>扩容部署服务，新增节点将默认继承当前节点类型中所部署服务，部署服务含默认可选服务，该参数仅支持可选服务填写，如：存量task节点已部署HDFS、YARN、impala；使用api扩容task节不部署impala时，部署服务仅填写HDFS、YARN。<a href="https://cloud.tencent.com/document/product/589/98760">组件名对应的映射关系表</a>。</p>
     */
    public $SoftDeployInfo;

    /**
     * @var array <p>部署进程，默认部署扩容服务的全部进程，支持修改部署进程，如：当前task节点部署服务为：HDFS、YARN、impala，默认部署服务为：DataNode,NodeManager,ImpalaServer，若用户需修改部署进程信息，部署进程：    DataNode,NodeManager,ImpalaServerCoordinator或DataNode,NodeManager,ImpalaServerExecutor。<a href="https://cloud.tencent.com/document/product/589/98760">进程名对应的映射关系表</a>。</p>
     */
    public $ServiceNodeInfo;

    /**
     * @var array <p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>的返回值中的DisasterRecoverGroupId字段来获取。</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array <p>扩容节点绑定标签列表。</p>
     */
    public $Tags;

    /**
     * @var string <p>扩容所选资源类型，可选范围为&quot;HOST&quot;,&quot;POD&quot;,&quot;MNode&quot;，HOST为普通的CVM资源，POD为TKE集群或EKS集群提供的资源,MNode为全托管资源类型</p>
     */
    public $HardwareSourceType;

    /**
     * @var PodSpecInfo <p>Pod相关资源信息</p>
     */
    public $PodSpecInfo;

    /**
     * @var string <p>使用clickhouse集群扩容时，选择的机器分组名称</p>
     */
    public $ClickHouseClusterName;

    /**
     * @var string <p>使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组</p>
     */
    public $ClickHouseClusterType;

    /**
     * @var string <p>扩容指定 Yarn Node Label</p>
     */
    public $YarnNodeLabel;

    /**
     * @var boolean <p>扩容后是否启动服务，默认取值否</p><li>true：是</li><li>false：否</li>
     */
    public $EnableStartServiceFlag;

    /**
     * @var NodeResourceSpec <p>规格设置</p>
     */
    public $ResourceSpec;

    /**
     * @var string <p>实例所属的可用区，例如ap-guangzhou-1。该参数也可以通过调用<a href="https://cloud.tencent.com/document/product/213/15707">DescribeZones</a> 的返回值中的Zone字段来获取。</p>
     */
    public $Zone;

    /**
     * @var string <p>子网，默认是集群创建时的子网</p>
     */
    public $SubnetId;

    /**
     * @var array <p>扩容指定配置组</p>
     */
    public $ScaleOutServiceConfGroupsInfo;

    /**
     * @var NodeMark <p>节点标记信息，当前只提供给tf平台使用</p>
     */
    public $NodeMarks;

    /**
     * @var string <p>扩容指定计算组名称</p>
     */
    public $WarehouseName;

    /**
     * @var integer <p>分区置放群组分区</p>
     */
    public $PartitionNumber;

    /**
     * @param string $InstanceChargeType <p>节点计费模式。取值范围：</p><li>PREPAID：预付费，即包年包月。</li><li>POSTPAID_BY_HOUR：按小时后付费。</li><li>SPOTPAID：竞价付费（仅支持TASK节点）。</li>
     * @param string $InstanceId <p>集群实例ID。</p>
     * @param ScaleOutNodeConfig $ScaleOutNodeConfig <p>扩容节点类型以及数量</p>
     * @param string $ClientToken <p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     * @param array $ScriptBootstrapActionConfig <p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
     * @param array $SoftDeployInfo <p>扩容部署服务，新增节点将默认继承当前节点类型中所部署服务，部署服务含默认可选服务，该参数仅支持可选服务填写，如：存量task节点已部署HDFS、YARN、impala；使用api扩容task节不部署impala时，部署服务仅填写HDFS、YARN。<a href="https://cloud.tencent.com/document/product/589/98760">组件名对应的映射关系表</a>。</p>
     * @param array $ServiceNodeInfo <p>部署进程，默认部署扩容服务的全部进程，支持修改部署进程，如：当前task节点部署服务为：HDFS、YARN、impala，默认部署服务为：DataNode,NodeManager,ImpalaServer，若用户需修改部署进程信息，部署进程：    DataNode,NodeManager,ImpalaServerCoordinator或DataNode,NodeManager,ImpalaServerExecutor。<a href="https://cloud.tencent.com/document/product/589/98760">进程名对应的映射关系表</a>。</p>
     * @param array $DisasterRecoverGroupIds <p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>的返回值中的DisasterRecoverGroupId字段来获取。</p>
     * @param array $Tags <p>扩容节点绑定标签列表。</p>
     * @param string $HardwareSourceType <p>扩容所选资源类型，可选范围为&quot;HOST&quot;,&quot;POD&quot;,&quot;MNode&quot;，HOST为普通的CVM资源，POD为TKE集群或EKS集群提供的资源,MNode为全托管资源类型</p>
     * @param PodSpecInfo $PodSpecInfo <p>Pod相关资源信息</p>
     * @param string $ClickHouseClusterName <p>使用clickhouse集群扩容时，选择的机器分组名称</p>
     * @param string $ClickHouseClusterType <p>使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组</p>
     * @param string $YarnNodeLabel <p>扩容指定 Yarn Node Label</p>
     * @param boolean $EnableStartServiceFlag <p>扩容后是否启动服务，默认取值否</p><li>true：是</li><li>false：否</li>
     * @param NodeResourceSpec $ResourceSpec <p>规格设置</p>
     * @param string $Zone <p>实例所属的可用区，例如ap-guangzhou-1。该参数也可以通过调用<a href="https://cloud.tencent.com/document/product/213/15707">DescribeZones</a> 的返回值中的Zone字段来获取。</p>
     * @param string $SubnetId <p>子网，默认是集群创建时的子网</p>
     * @param array $ScaleOutServiceConfGroupsInfo <p>扩容指定配置组</p>
     * @param NodeMark $NodeMarks <p>节点标记信息，当前只提供给tf平台使用</p>
     * @param string $WarehouseName <p>扩容指定计算组名称</p>
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ScaleOutNodeConfig",$param) and $param["ScaleOutNodeConfig"] !== null) {
            $this->ScaleOutNodeConfig = new ScaleOutNodeConfig();
            $this->ScaleOutNodeConfig->deserialize($param["ScaleOutNodeConfig"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("ScriptBootstrapActionConfig",$param) and $param["ScriptBootstrapActionConfig"] !== null) {
            $this->ScriptBootstrapActionConfig = [];
            foreach ($param["ScriptBootstrapActionConfig"] as $key => $value){
                $obj = new ScriptBootstrapActionConfig();
                $obj->deserialize($value);
                array_push($this->ScriptBootstrapActionConfig, $obj);
            }
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

        if (array_key_exists("HardwareSourceType",$param) and $param["HardwareSourceType"] !== null) {
            $this->HardwareSourceType = $param["HardwareSourceType"];
        }

        if (array_key_exists("PodSpecInfo",$param) and $param["PodSpecInfo"] !== null) {
            $this->PodSpecInfo = new PodSpecInfo();
            $this->PodSpecInfo->deserialize($param["PodSpecInfo"]);
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

        if (array_key_exists("EnableStartServiceFlag",$param) and $param["EnableStartServiceFlag"] !== null) {
            $this->EnableStartServiceFlag = $param["EnableStartServiceFlag"];
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NodeResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ScaleOutServiceConfGroupsInfo",$param) and $param["ScaleOutServiceConfGroupsInfo"] !== null) {
            $this->ScaleOutServiceConfGroupsInfo = [];
            foreach ($param["ScaleOutServiceConfGroupsInfo"] as $key => $value){
                $obj = new ScaleOutServiceConfGroupsInfo();
                $obj->deserialize($value);
                array_push($this->ScaleOutServiceConfGroupsInfo, $obj);
            }
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
