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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管prometheus实例概览
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getVpcId() 获取实例vpcId
 * @method void setVpcId(string $VpcId) 设置实例vpcId
 * @method string getSubnetId() 获取实例子网Id
 * @method void setSubnetId(string $SubnetId) 设置实例子网Id
 * @method string getStatus() 获取实例当前的状态
prepare_env = 初始化环境
install_suit = 安装组件
running = 运行中
 * @method void setStatus(string $Status) 设置实例当前的状态
prepare_env = 初始化环境
install_suit = 安装组件
running = 运行中
 * @method string getCOSBucket() 获取COS桶存储
 * @method void setCOSBucket(string $COSBucket) 设置COS桶存储
 */
class PrometheusInstanceOverview extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 实例vpcId
     */
    public $VpcId;

    /**
     * @var string 实例子网Id
     */
    public $SubnetId;

    /**
     * @var string 实例当前的状态
prepare_env = 初始化环境
install_suit = 安装组件
running = 运行中
     */
    public $Status;

    /**
     * @var string COS桶存储
     */
    public $COSBucket;

    /**
     * @param string $InstanceId 实例id
     * @param string $Name 实例名称
     * @param string $VpcId 实例vpcId
     * @param string $SubnetId 实例子网Id
     * @param string $Status 实例当前的状态
prepare_env = 初始化环境
install_suit = 安装组件
running = 运行中
     * @param string $COSBucket COS桶存储
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("COSBucket",$param) and $param["COSBucket"] !== null) {
            $this->COSBucket = $param["COSBucket"];
        }
    }
}
