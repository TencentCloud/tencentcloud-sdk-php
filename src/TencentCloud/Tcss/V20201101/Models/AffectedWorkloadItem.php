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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群安全检查受影响的工作负载Item
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getClusterName() 获取集群名字
 * @method void setClusterName(string $ClusterName) 设置集群名字
 * @method string getWorkloadName() 获取工作负载名称
 * @method void setWorkloadName(string $WorkloadName) 设置工作负载名称
 * @method string getWorkloadType() 获取工作负载类型
 * @method void setWorkloadType(string $WorkloadType) 设置工作负载类型
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method string getVerifyInfo() 获取检测结果的验证信息
 * @method void setVerifyInfo(string $VerifyInfo) 设置检测结果的验证信息
 */
class AffectedWorkloadItem extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 集群名字
     */
    public $ClusterName;

    /**
     * @var string 工作负载名称
     */
    public $WorkloadName;

    /**
     * @var string 工作负载类型
     */
    public $WorkloadType;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @var string 检测结果的验证信息
     */
    public $VerifyInfo;

    /**
     * @param string $ClusterId 集群Id
     * @param string $ClusterName 集群名字
     * @param string $WorkloadName 工作负载名称
     * @param string $WorkloadType 工作负载类型
     * @param string $Region 区域
     * @param string $VerifyInfo 检测结果的验证信息
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            $this->WorkloadType = $param["WorkloadType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VerifyInfo",$param) and $param["VerifyInfo"] !== null) {
            $this->VerifyInfo = $param["VerifyInfo"];
        }
    }
}
