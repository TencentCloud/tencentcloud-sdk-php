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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterConfigs请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID
 * @method integer getConfigType() 获取 0 公有云查询；1青鹅查询，青鹅查询显示所有需要展示的
 * @method void setConfigType(integer $ConfigType) 设置 0 公有云查询；1青鹅查询，青鹅查询显示所有需要展示的
 * @method string getFileName() 获取模糊搜索关键字文件
 * @method void setFileName(string $FileName) 设置模糊搜索关键字文件
 * @method integer getClusterConfigType() 获取0集群维度 1节点维度 2启动脚本 3计算组维度
 * @method void setClusterConfigType(integer $ClusterConfigType) 设置0集群维度 1节点维度 2启动脚本 3计算组维度
 * @method string getIPAddress() 获取eth0的ip地址
 * @method void setIPAddress(string $IPAddress) 设置eth0的ip地址
 * @method string getComputeGroupId() 获取计算组id
 * @method void setComputeGroupId(string $ComputeGroupId) 设置计算组id
 */
class DescribeClusterConfigsRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $InstanceId;

    /**
     * @var integer  0 公有云查询；1青鹅查询，青鹅查询显示所有需要展示的
     */
    public $ConfigType;

    /**
     * @var string 模糊搜索关键字文件
     */
    public $FileName;

    /**
     * @var integer 0集群维度 1节点维度 2启动脚本 3计算组维度
     */
    public $ClusterConfigType;

    /**
     * @var string eth0的ip地址
     */
    public $IPAddress;

    /**
     * @var string 计算组id
     */
    public $ComputeGroupId;

    /**
     * @param string $InstanceId 集群实例ID
     * @param integer $ConfigType  0 公有云查询；1青鹅查询，青鹅查询显示所有需要展示的
     * @param string $FileName 模糊搜索关键字文件
     * @param integer $ClusterConfigType 0集群维度 1节点维度 2启动脚本 3计算组维度
     * @param string $IPAddress eth0的ip地址
     * @param string $ComputeGroupId 计算组id
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

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ClusterConfigType",$param) and $param["ClusterConfigType"] !== null) {
            $this->ClusterConfigType = $param["ClusterConfigType"];
        }

        if (array_key_exists("IPAddress",$param) and $param["IPAddress"] !== null) {
            $this->IPAddress = $param["IPAddress"];
        }

        if (array_key_exists("ComputeGroupId",$param) and $param["ComputeGroupId"] !== null) {
            $this->ComputeGroupId = $param["ComputeGroupId"];
        }
    }
}
