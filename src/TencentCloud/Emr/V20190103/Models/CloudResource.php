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
 * 容器集群Pod请求资源信息
 *
 * @method string getComponentName() 获取组件角色名
 * @method void setComponentName(string $ComponentName) 设置组件角色名
 * @method integer getPodNumber() 获取pod请求数量
 * @method void setPodNumber(integer $PodNumber) 设置pod请求数量
 * @method integer getLimitCpu() 获取Cpu请求数量最大值
 * @method void setLimitCpu(integer $LimitCpu) 设置Cpu请求数量最大值
 * @method integer getLimitMemory() 获取内存请求数量最大值
 * @method void setLimitMemory(integer $LimitMemory) 设置内存请求数量最大值
 * @method string getService() 获取服务名称，如HIVE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setService(string $Service) 设置服务名称，如HIVE
注意：此字段可能返回 null，表示取不到有效值。
 * @method VolumeSetting getVolumeDir() 获取数据卷目录设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeDir(VolumeSetting $VolumeDir) 设置数据卷目录设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExternalAccess getExternalAccess() 获取组件外部访问设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalAccess(ExternalAccess $ExternalAccess) 设置组件外部访问设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeAffinity getAffinity() 获取节点亲和性设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffinity(NodeAffinity $Affinity) 设置节点亲和性设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDisks() 获取所选数据盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisks(array $Disks) 设置所选数据盘信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudResource extends AbstractModel
{
    /**
     * @var string 组件角色名
     */
    public $ComponentName;

    /**
     * @var integer pod请求数量
     */
    public $PodNumber;

    /**
     * @var integer Cpu请求数量最大值
     */
    public $LimitCpu;

    /**
     * @var integer 内存请求数量最大值
     */
    public $LimitMemory;

    /**
     * @var string 服务名称，如HIVE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Service;

    /**
     * @var VolumeSetting 数据卷目录设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeDir;

    /**
     * @var ExternalAccess 组件外部访问设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalAccess;

    /**
     * @var NodeAffinity 节点亲和性设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Affinity;

    /**
     * @var array 所选数据盘信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disks;

    /**
     * @param string $ComponentName 组件角色名
     * @param integer $PodNumber pod请求数量
     * @param integer $LimitCpu Cpu请求数量最大值
     * @param integer $LimitMemory 内存请求数量最大值
     * @param string $Service 服务名称，如HIVE
注意：此字段可能返回 null，表示取不到有效值。
     * @param VolumeSetting $VolumeDir 数据卷目录设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExternalAccess $ExternalAccess 组件外部访问设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeAffinity $Affinity 节点亲和性设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Disks 所选数据盘信息
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
    }
}
