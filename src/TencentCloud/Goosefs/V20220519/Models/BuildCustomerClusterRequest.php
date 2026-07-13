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
 * BuildCustomerCluster请求参数结构体
 *
 * @method string getFileSystemId() 获取<p>文件系统id</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统id</p>
 * @method string getVpcId() 获取<p>vpc网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>vpc网络ID</p>
 * @method string getSubnetId() 获取<p>子网id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网id</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 */
class BuildCustomerClusterRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统id</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>vpc网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网id</p>
     */
    public $SubnetId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @param string $FileSystemId <p>文件系统id</p>
     * @param string $VpcId <p>vpc网络ID</p>
     * @param string $SubnetId <p>子网id</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $Zone <p>可用区</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
