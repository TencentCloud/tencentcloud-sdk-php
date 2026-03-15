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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * goosefsx客户端集群信息
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getVpcId() 获取vpc网络id
 * @method void setVpcId(string $VpcId) 设置vpc网络id
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method integer getClientNum() 获取客户端数量
 * @method void setClientNum(integer $ClientNum) 设置客户端数量
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method integer getClusterType() 获取集群类型：0: 默认集群（文件系统创建时构建，不可销毁）；1: 扩展集群（客户端数量为0时可销毁）
 * @method void setClusterType(integer $ClusterType) 设置集群类型：0: 默认集群（文件系统创建时构建，不可销毁）；1: 扩展集群（客户端数量为0时可销毁）
 * @method array getManagerNodes() 获取管理节点信息
 * @method void setManagerNodes(array $ManagerNodes) 设置管理节点信息
 * @method integer getStatus() 获取集群状态：0:creating 创建中；1: created 创建完成; 2: deleting 删除中； 3: deleted 删除完成； 4:  failed 创建失败 
 * @method void setStatus(integer $Status) 设置集群状态：0:creating 创建中；1: created 创建完成; 2: deleting 删除中； 3: deleted 删除完成； 4:  failed 创建失败 
 * @method array getClusterMountSet() 获取客户端集群挂载存储集合
 * @method void setClusterMountSet(array $ClusterMountSet) 设置客户端集群挂载存储集合
 */
class CustomerClusterAttr extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string vpc网络id
     */
    public $VpcId;

    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var integer 客户端数量
     */
    public $ClientNum;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var integer 集群类型：0: 默认集群（文件系统创建时构建，不可销毁）；1: 扩展集群（客户端数量为0时可销毁）
     */
    public $ClusterType;

    /**
     * @var array 管理节点信息
     */
    public $ManagerNodes;

    /**
     * @var integer 集群状态：0:creating 创建中；1: created 创建完成; 2: deleting 删除中； 3: deleted 删除完成； 4:  failed 创建失败 
     */
    public $Status;

    /**
     * @var array 客户端集群挂载存储集合
     */
    public $ClusterMountSet;

    /**
     * @param string $ClusterId 集群id
     * @param string $VpcId vpc网络id
     * @param string $SubnetId 子网id
     * @param integer $ClientNum 客户端数量
     * @param string $ClusterName 集群名称
     * @param integer $ClusterType 集群类型：0: 默认集群（文件系统创建时构建，不可销毁）；1: 扩展集群（客户端数量为0时可销毁）
     * @param array $ManagerNodes 管理节点信息
     * @param integer $Status 集群状态：0:creating 创建中；1: created 创建完成; 2: deleting 删除中； 3: deleted 删除完成； 4:  failed 创建失败 
     * @param array $ClusterMountSet 客户端集群挂载存储集合
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ClientNum",$param) and $param["ClientNum"] !== null) {
            $this->ClientNum = $param["ClientNum"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ManagerNodes",$param) and $param["ManagerNodes"] !== null) {
            $this->ManagerNodes = [];
            foreach ($param["ManagerNodes"] as $key => $value){
                $obj = new ClientClusterManagerNodeInfo();
                $obj->deserialize($value);
                array_push($this->ManagerNodes, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterMountSet",$param) and $param["ClusterMountSet"] !== null) {
            $this->ClusterMountSet = [];
            foreach ($param["ClusterMountSet"] as $key => $value){
                $obj = new ClusterMountAttr();
                $obj->deserialize($value);
                array_push($this->ClusterMountSet, $obj);
            }
        }
    }
}
