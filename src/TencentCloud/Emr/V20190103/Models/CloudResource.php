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
 * 容器集群Pod请求资源信息
 *
 * @method string getComponentName() 获取<p>组件角色名</p>
 * @method void setComponentName(string $ComponentName) 设置<p>组件角色名</p>
 * @method integer getPodNumber() 获取<p>pod请求数量</p>
 * @method void setPodNumber(integer $PodNumber) 设置<p>pod请求数量</p>
 * @method integer getLimitCpu() 获取<p>Cpu请求数量最大值</p>
 * @method void setLimitCpu(integer $LimitCpu) 设置<p>Cpu请求数量最大值</p>
 * @method integer getLimitMemory() 获取<p>内存请求数量最大值</p>
 * @method void setLimitMemory(integer $LimitMemory) 设置<p>内存请求数量最大值</p>
 * @method string getService() 获取<p>服务名称，如HIVE</p>
 * @method void setService(string $Service) 设置<p>服务名称，如HIVE</p>
 * @method VolumeSetting getVolumeDir() 获取<p>数据卷目录设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeDir(VolumeSetting $VolumeDir) 设置<p>数据卷目录设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExternalAccess getExternalAccess() 获取<p>组件外部访问设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalAccess(ExternalAccess $ExternalAccess) 设置<p>组件外部访问设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeAffinity getAffinity() 获取<p>节点亲和性设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffinity(NodeAffinity $Affinity) 设置<p>节点亲和性设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDisks() 获取<p>所选数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisks(array $Disks) 设置<p>所选数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTolerations() 获取<p>容忍</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTolerations(array $Tolerations) 设置<p>容忍</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PodAffinitySpec getPodAffinity() 获取<p>pod亲和性</p>
 * @method void setPodAffinity(PodAffinitySpec $PodAffinity) 设置<p>pod亲和性</p>
 * @method PodAffinitySpec getPodAntiAffinity() 获取<p>pod反亲和性</p>
 * @method void setPodAntiAffinity(PodAffinitySpec $PodAntiAffinity) 设置<p>pod反亲和性</p>
 * @method array getTopologySpreadConstraints() 获取<p>拓扑分布约束</p>
 * @method void setTopologySpreadConstraints(array $TopologySpreadConstraints) 设置<p>拓扑分布约束</p>
 * @method array getPodLabels() 获取<p>pod标签</p>
 * @method void setPodLabels(array $PodLabels) 设置<p>pod标签</p>
 * @method boolean getEnableDefaultRayCluster() 获取<p>是否创建默认raycluster</p>
 * @method void setEnableDefaultRayCluster(boolean $EnableDefaultRayCluster) 设置<p>是否创建默认raycluster</p>
 */
class CloudResource extends AbstractModel
{
    /**
     * @var string <p>组件角色名</p>
     */
    public $ComponentName;

    /**
     * @var integer <p>pod请求数量</p>
     */
    public $PodNumber;

    /**
     * @var integer <p>Cpu请求数量最大值</p>
     */
    public $LimitCpu;

    /**
     * @var integer <p>内存请求数量最大值</p>
     */
    public $LimitMemory;

    /**
     * @var string <p>服务名称，如HIVE</p>
     */
    public $Service;

    /**
     * @var VolumeSetting <p>数据卷目录设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeDir;

    /**
     * @var ExternalAccess <p>组件外部访问设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalAccess;

    /**
     * @var NodeAffinity <p>节点亲和性设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Affinity;

    /**
     * @var array <p>所选数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disks;

    /**
     * @var array <p>容忍</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tolerations;

    /**
     * @var PodAffinitySpec <p>pod亲和性</p>
     */
    public $PodAffinity;

    /**
     * @var PodAffinitySpec <p>pod反亲和性</p>
     */
    public $PodAntiAffinity;

    /**
     * @var array <p>拓扑分布约束</p>
     */
    public $TopologySpreadConstraints;

    /**
     * @var array <p>pod标签</p>
     */
    public $PodLabels;

    /**
     * @var boolean <p>是否创建默认raycluster</p>
     */
    public $EnableDefaultRayCluster;

    /**
     * @param string $ComponentName <p>组件角色名</p>
     * @param integer $PodNumber <p>pod请求数量</p>
     * @param integer $LimitCpu <p>Cpu请求数量最大值</p>
     * @param integer $LimitMemory <p>内存请求数量最大值</p>
     * @param string $Service <p>服务名称，如HIVE</p>
     * @param VolumeSetting $VolumeDir <p>数据卷目录设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExternalAccess $ExternalAccess <p>组件外部访问设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeAffinity $Affinity <p>节点亲和性设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Disks <p>所选数据盘信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tolerations <p>容忍</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PodAffinitySpec $PodAffinity <p>pod亲和性</p>
     * @param PodAffinitySpec $PodAntiAffinity <p>pod反亲和性</p>
     * @param array $TopologySpreadConstraints <p>拓扑分布约束</p>
     * @param array $PodLabels <p>pod标签</p>
     * @param boolean $EnableDefaultRayCluster <p>是否创建默认raycluster</p>
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
        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("PodNumber",$param) and $param["PodNumber"] !== null) {
            $this->PodNumber = $param["PodNumber"];
        }

        if (array_key_exists("LimitCpu",$param) and $param["LimitCpu"] !== null) {
            $this->LimitCpu = $param["LimitCpu"];
        }

        if (array_key_exists("LimitMemory",$param) and $param["LimitMemory"] !== null) {
            $this->LimitMemory = $param["LimitMemory"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("VolumeDir",$param) and $param["VolumeDir"] !== null) {
            $this->VolumeDir = new VolumeSetting();
            $this->VolumeDir->deserialize($param["VolumeDir"]);
        }

        if (array_key_exists("ExternalAccess",$param) and $param["ExternalAccess"] !== null) {
            $this->ExternalAccess = new ExternalAccess();
            $this->ExternalAccess->deserialize($param["ExternalAccess"]);
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = new NodeAffinity();
            $this->Affinity->deserialize($param["Affinity"]);
        }

        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = [];
            foreach ($param["Disks"] as $key => $value){
                $obj = new Disk();
                $obj->deserialize($value);
                array_push($this->Disks, $obj);
            }
        }

        if (array_key_exists("Tolerations",$param) and $param["Tolerations"] !== null) {
            $this->Tolerations = [];
            foreach ($param["Tolerations"] as $key => $value){
                $obj = new Toleration();
                $obj->deserialize($value);
                array_push($this->Tolerations, $obj);
            }
        }

        if (array_key_exists("PodAffinity",$param) and $param["PodAffinity"] !== null) {
            $this->PodAffinity = new PodAffinitySpec();
            $this->PodAffinity->deserialize($param["PodAffinity"]);
        }

        if (array_key_exists("PodAntiAffinity",$param) and $param["PodAntiAffinity"] !== null) {
            $this->PodAntiAffinity = new PodAffinitySpec();
            $this->PodAntiAffinity->deserialize($param["PodAntiAffinity"]);
        }

        if (array_key_exists("TopologySpreadConstraints",$param) and $param["TopologySpreadConstraints"] !== null) {
            $this->TopologySpreadConstraints = [];
            foreach ($param["TopologySpreadConstraints"] as $key => $value){
                $obj = new TopologySpreadConstraint();
                $obj->deserialize($value);
                array_push($this->TopologySpreadConstraints, $obj);
            }
        }

        if (array_key_exists("PodLabels",$param) and $param["PodLabels"] !== null) {
            $this->PodLabels = [];
            foreach ($param["PodLabels"] as $key => $value){
                $obj = new StringMap();
                $obj->deserialize($value);
                array_push($this->PodLabels, $obj);
            }
        }

        if (array_key_exists("EnableDefaultRayCluster",$param) and $param["EnableDefaultRayCluster"] !== null) {
            $this->EnableDefaultRayCluster = $param["EnableDefaultRayCluster"];
        }
    }
}
