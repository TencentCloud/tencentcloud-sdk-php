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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleCNOutUpInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例唯一ID
 * @method void setInstanceId(string $InstanceId) 设置实例唯一ID
 * @method string getVirtualCluster() 获取warehouse名称
 * @method void setVirtualCluster(string $VirtualCluster) 设置warehouse名称
 * @method string getUserSubnetID() 获取子网id
 * @method void setUserSubnetID(string $UserSubnetID) 设置子网id
 * @method integer getNewCount() 获取新的warehouse的个数
 * @method void setNewCount(integer $NewCount) 设置新的warehouse的个数
 * @method string getNewSpecName() 获取集群的规格2X-Small、X-Small、Small
 * @method void setNewSpecName(string $NewSpecName) 设置集群的规格2X-Small、X-Small、Small
 */
class ScaleCNOutUpInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例唯一ID
     */
    public $InstanceId;

    /**
     * @var string warehouse名称
     */
    public $VirtualCluster;

    /**
     * @var string 子网id
     */
    public $UserSubnetID;

    /**
     * @var integer 新的warehouse的个数
     */
    public $NewCount;

    /**
     * @var string 集群的规格2X-Small、X-Small、Small
     */
    public $NewSpecName;

    /**
     * @param string $InstanceId 实例唯一ID
     * @param string $VirtualCluster warehouse名称
     * @param string $UserSubnetID 子网id
     * @param integer $NewCount 新的warehouse的个数
     * @param string $NewSpecName 集群的规格2X-Small、X-Small、Small
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

        if (array_key_exists("VirtualCluster",$param) and $param["VirtualCluster"] !== null) {
            $this->VirtualCluster = $param["VirtualCluster"];
        }

        if (array_key_exists("UserSubnetID",$param) and $param["UserSubnetID"] !== null) {
            $this->UserSubnetID = $param["UserSubnetID"];
        }

        if (array_key_exists("NewCount",$param) and $param["NewCount"] !== null) {
            $this->NewCount = $param["NewCount"];
        }

        if (array_key_exists("NewSpecName",$param) and $param["NewSpecName"] !== null) {
            $this->NewSpecName = $param["NewSpecName"];
        }
    }
}
