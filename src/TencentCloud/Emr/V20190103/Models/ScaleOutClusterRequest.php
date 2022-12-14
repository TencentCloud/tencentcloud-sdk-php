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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutCluster请求参数结构体
 *
 * @method string getInstanceChargeType() 获取节点计费模式。取值范围：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：按小时后付费。</li>
<li>SPOTPAID：竞价付费（仅支持TASK节点）。</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置节点计费模式。取值范围：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：按小时后付费。</li>
<li>SPOTPAID：竞价付费（仅支持TASK节点）。</li>
 * @method string getInstanceId() 获取集群实例ID。
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID。
 * @method ScaleOutNodeConfig getScaleOutNodeConfig() 获取扩容节点类型以及数量
 * @method void setScaleOutNodeConfig(ScaleOutNodeConfig $ScaleOutNodeConfig) 设置扩容节点类型以及数量
 * @method string getClientToken() 获取唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-751a-41b6-aad6-fae36063280
 * @method void setClientToken(string $ClientToken) 设置唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-751a-41b6-aad6-fae36063280
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method array getScriptBootstrapActionConfig() 获取[引导操作](https://cloud.tencent.com/document/product/589/35656)脚本设置。
 * @method void setScriptBootstrapActionConfig(array $ScriptBootstrapActionConfig) 设置[引导操作](https://cloud.tencent.com/document/product/589/35656)脚本设置。
 * @method array getSoftDeployInfo() 获取扩容部署服务，新增节点将默认继承当前节点类型中所部署服务，部署服务含默认可选服务，该参数仅支持可选服务填写，如：存量task节点已部署HDFS、YARN、impala；使用api扩容task节不部署impala时，此参数仅填写HDFS、YARN
 * @method void setSoftDeployInfo(array $SoftDeployInfo) 设置扩容部署服务，新增节点将默认继承当前节点类型中所部署服务，部署服务含默认可选服务，该参数仅支持可选服务填写，如：存量task节点已部署HDFS、YARN、impala；使用api扩容task节不部署impala时，此参数仅填写HDFS、YARN
 * @method array getServiceNodeInfo() 获取部署进程，默认部署扩容服务的全部进程，支持修改部署进程，如：当前task节点部署服务为：HDFS、YARN、impala，默认部署服务为：DataNode,NodeManager,ImpalaServer，若用户需修改部署进程信息，此参数信息可填写：	DataNode,NodeManager,ImpalaServerCoordinator或DataNode,NodeManager,ImpalaServerExecutor
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) 设置部署进程，默认部署扩容服务的全部进程，支持修改部署进程，如：当前task节点部署服务为：HDFS、YARN、impala，默认部署服务为：DataNode,NodeManager,ImpalaServer，若用户需修改部署进程信息，此参数信息可填写：	DataNode,NodeManager,ImpalaServerCoordinator或DataNode,NodeManager,ImpalaServerExecutor
 * @method array getDisasterRecoverGroupIds() 获取分散置放群组ID列表，当前只支持指定一个。
该参数可以通过调用 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810)的返回值中的DisasterRecoverGroupId字段来获取。
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置分散置放群组ID列表，当前只支持指定一个。
该参数可以通过调用 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810)的返回值中的DisasterRecoverGroupId字段来获取。
 * @method array getTags() 获取扩容节点绑定标签列表。
 * @method void setTags(array $Tags) 设置扩容节点绑定标签列表。
 * @method string getHardwareSourceType() 获取扩容所选资源类型，可选范围为"host","pod"，host为普通的CVM资源，Pod为TKE集群或EKS集群提供的资源
 * @method void setHardwareSourceType(string $HardwareSourceType) 设置扩容所选资源类型，可选范围为"host","pod"，host为普通的CVM资源，Pod为TKE集群或EKS集群提供的资源
 * @method PodSpecInfo getPodSpecInfo() 获取Pod相关资源信息
 * @method void setPodSpecInfo(PodSpecInfo $PodSpecInfo) 设置Pod相关资源信息
 * @method string getClickHouseClusterName() 获取使用clickhouse集群扩容时，选择的机器分组名称
 * @method void setClickHouseClusterName(string $ClickHouseClusterName) 设置使用clickhouse集群扩容时，选择的机器分组名称
 * @method string getClickHouseClusterType() 获取使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组
 * @method void setClickHouseClusterType(string $ClickHouseClusterType) 设置使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组
 * @method string getYarnNodeLabel() 获取扩容指定 Yarn Node Label
 * @method void setYarnNodeLabel(string $YarnNodeLabel) 设置扩容指定 Yarn Node Label
 * @method boolean getEnableStartServiceFlag() 获取扩容后是否启动服务，默认取值否
<li>true：是</li>
<li>false：否</li>
 * @method void setEnableStartServiceFlag(boolean $EnableStartServiceFlag) 设置扩容后是否启动服务，默认取值否
<li>true：是</li>
<li>false：否</li>
 * @method NodeResourceSpec getResourceSpec() 获取规格设置
 * @method void setResourceSpec(NodeResourceSpec $ResourceSpec) 设置规格设置
 * @method string getZone() 获取实例所属的可用区，例如ap-guangzhou-1。该参数也可以通过调用[DescribeZones](https://cloud.tencent.com/document/product/213/15707) 的返回值中的Zone字段来获取。
 * @method void setZone(string $Zone) 设置实例所属的可用区，例如ap-guangzhou-1。该参数也可以通过调用[DescribeZones](https://cloud.tencent.com/document/product/213/15707) 的返回值中的Zone字段来获取。
 * @method string getSubnetId() 获取子网，默认是集群创建时的子网
 * @method void setSubnetId(string $SubnetId) 设置子网，默认是集群创建时的子网
 */
class ScaleOutClusterRequest extends AbstractModel
{
    /**
     * @var string 节点计费模式。取值范围：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：按小时后付费。</li>
<li>SPOTPAID：竞价付费（仅支持TASK节点）。</li>
     */
    public $InstanceChargeType;

    /**
     * @var string 集群实例ID。
     */
    public $InstanceId;

    /**
     * @var ScaleOutNodeConfig 扩容节点类型以及数量
     */
    public $ScaleOutNodeConfig;

    /**
     * @var string 唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-751a-41b6-aad6-fae36063280
     */
    public $ClientToken;

    /**
     * @var InstanceChargePrepaid 即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $InstanceChargePrepaid;

    /**
     * @var array [引导操作](https://cloud.tencent.com/document/product/589/35656)脚本设置。
     */
    public $ScriptBootstrapActionConfig;

    /**
     * @var array 扩容部署服务，新增节点将默认继承当前节点类型中所部署服务，部署服务含默认可选服务，该参数仅支持可选服务填写，如：存量task节点已部署HDFS、YARN、impala；使用api扩容task节不部署impala时，此参数仅填写HDFS、YARN
     */
    public $SoftDeployInfo;

    /**
     * @var array 部署进程，默认部署扩容服务的全部进程，支持修改部署进程，如：当前task节点部署服务为：HDFS、YARN、impala，默认部署服务为：DataNode,NodeManager,ImpalaServer，若用户需修改部署进程信息，此参数信息可填写：	DataNode,NodeManager,ImpalaServerCoordinator或DataNode,NodeManager,ImpalaServerExecutor
     */
    public $ServiceNodeInfo;

    /**
     * @var array 分散置放群组ID列表，当前只支持指定一个。
该参数可以通过调用 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810)的返回值中的DisasterRecoverGroupId字段来获取。
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array 扩容节点绑定标签列表。
     */
    public $Tags;

    /**
     * @var string 扩容所选资源类型，可选范围为"host","pod"，host为普通的CVM资源，Pod为TKE集群或EKS集群提供的资源
     */
    public $HardwareSourceType;

    /**
     * @var PodSpecInfo Pod相关资源信息
     */
    public $PodSpecInfo;

    /**
     * @var string 使用clickhouse集群扩容时，选择的机器分组名称
     */
    public $ClickHouseClusterName;

    /**
     * @var string 使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组
     */
    public $ClickHouseClusterType;

    /**
     * @var string 扩容指定 Yarn Node Label
     */
    public $YarnNodeLabel;

    /**
     * @var boolean 扩容后是否启动服务，默认取值否
<li>true：是</li>
<li>false：否</li>
     */
    public $EnableStartServiceFlag;

    /**
     * @var NodeResourceSpec 规格设置
     */
    public $ResourceSpec;

    /**
     * @var string 实例所属的可用区，例如ap-guangzhou-1。该参数也可以通过调用[DescribeZones](https://cloud.tencent.com/document/product/213/15707) 的返回值中的Zone字段来获取。
     */
    public $Zone;

    /**
     * @var string 子网，默认是集群创建时的子网
     */
    public $SubnetId;

    /**
     * @param string $InstanceChargeType 节点计费模式。取值范围：
<li>PREPAID：预付费，即包年包月。</li>
<li>POSTPAID_BY_HOUR：按小时后付费。</li>
<li>SPOTPAID：竞价付费（仅支持TASK节点）。</li>
     * @param string $InstanceId 集群实例ID。
     * @param ScaleOutNodeConfig $ScaleOutNodeConfig 扩容节点类型以及数量
     * @param string $ClientToken 唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-751a-41b6-aad6-fae36063280
     * @param InstanceChargePrepaid $InstanceChargePrepaid 即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     * @param array $ScriptBootstrapActionConfig [引导操作](https://cloud.tencent.com/document/product/589/35656)脚本设置。
     * @param array $SoftDeployInfo 扩容部署服务，新增节点将默认继承当前节点类型中所部署服务，部署服务含默认可选服务，该参数仅支持可选服务填写，如：存量task节点已部署HDFS、YARN、impala；使用api扩容task节不部署impala时，此参数仅填写HDFS、YARN
     * @param array $ServiceNodeInfo 部署进程，默认部署扩容服务的全部进程，支持修改部署进程，如：当前task节点部署服务为：HDFS、YARN、impala，默认部署服务为：DataNode,NodeManager,ImpalaServer，若用户需修改部署进程信息，此参数信息可填写：	DataNode,NodeManager,ImpalaServerCoordinator或DataNode,NodeManager,ImpalaServerExecutor
     * @param array $DisasterRecoverGroupIds 分散置放群组ID列表，当前只支持指定一个。
该参数可以通过调用 [DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/product/213/17810)的返回值中的DisasterRecoverGroupId字段来获取。
     * @param array $Tags 扩容节点绑定标签列表。
     * @param string $HardwareSourceType 扩容所选资源类型，可选范围为"host","pod"，host为普通的CVM资源，Pod为TKE集群或EKS集群提供的资源
     * @param PodSpecInfo $PodSpecInfo Pod相关资源信息
     * @param string $ClickHouseClusterName 使用clickhouse集群扩容时，选择的机器分组名称
     * @param string $ClickHouseClusterType 使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组
     * @param string $YarnNodeLabel 扩容指定 Yarn Node Label
     * @param boolean $EnableStartServiceFlag 扩容后是否启动服务，默认取值否
<li>true：是</li>
<li>false：否</li>
     * @param NodeResourceSpec $ResourceSpec 规格设置
     * @param string $Zone 实例所属的可用区，例如ap-guangzhou-1。该参数也可以通过调用[DescribeZones](https://cloud.tencent.com/document/product/213/15707) 的返回值中的Zone字段来获取。
     * @param string $SubnetId 子网，默认是集群创建时的子网
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
    }
}
