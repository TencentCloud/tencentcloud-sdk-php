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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例节点描述信息
 *
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method string getSpec() 获取机型，如 S1
 * @method void setSpec(string $Spec) 设置机型，如 S1
 * @method integer getCore() 获取cpu核数
 * @method void setCore(integer $Core) 设置cpu核数
 * @method integer getMemory() 获取内存大小
 * @method void setMemory(integer $Memory) 设置内存大小
 * @method string getDiskType() 获取磁盘类型
 * @method void setDiskType(string $DiskType) 设置磁盘类型
 * @method integer getDiskSize() 获取磁盘大小
 * @method void setDiskSize(integer $DiskSize) 设置磁盘大小
 * @method string getCluster() 获取所属clickhouse cluster名称
 * @method void setCluster(string $Cluster) 设置所属clickhouse cluster名称
 * @method array getNodeGroups() 获取节点所属的分组信息
 * @method void setNodeGroups(array $NodeGroups) 设置节点所属的分组信息
 * @method string getRip() 获取VPC IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRip(string $Rip) 设置VPC IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCHProxy() 获取ture的时候表示该节点上部署了chproxy进程
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCHProxy(boolean $IsCHProxy) 设置ture的时候表示该节点上部署了chproxy进程
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceNode extends AbstractModel
{
    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var string 机型，如 S1
     */
    public $Spec;

    /**
     * @var integer cpu核数
     */
    public $Core;

    /**
     * @var integer 内存大小
     */
    public $Memory;

    /**
     * @var string 磁盘类型
     */
    public $DiskType;

    /**
     * @var integer 磁盘大小
     */
    public $DiskSize;

    /**
     * @var string 所属clickhouse cluster名称
     */
    public $Cluster;

    /**
     * @var array 节点所属的分组信息
     */
    public $NodeGroups;

    /**
     * @var string VPC IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rip;

    /**
     * @var boolean ture的时候表示该节点上部署了chproxy进程
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCHProxy;

    /**
     * @param string $Ip IP地址
     * @param string $Spec 机型，如 S1
     * @param integer $Core cpu核数
     * @param integer $Memory 内存大小
     * @param string $DiskType 磁盘类型
     * @param integer $DiskSize 磁盘大小
     * @param string $Cluster 所属clickhouse cluster名称
     * @param array $NodeGroups 节点所属的分组信息
     * @param string $Rip VPC IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCHProxy ture的时候表示该节点上部署了chproxy进程
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Core",$param) and $param["Core"] !== null) {
            $this->Core = $param["Core"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("NodeGroups",$param) and $param["NodeGroups"] !== null) {
            $this->NodeGroups = [];
            foreach ($param["NodeGroups"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->NodeGroups, $obj);
            }
        }

        if (array_key_exists("Rip",$param) and $param["Rip"] !== null) {
            $this->Rip = $param["Rip"];
        }

        if (array_key_exists("IsCHProxy",$param) and $param["IsCHProxy"] !== null) {
            $this->IsCHProxy = $param["IsCHProxy"];
        }
    }
}
