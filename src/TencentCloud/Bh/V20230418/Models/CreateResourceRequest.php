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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResource请求参数结构体
 *
 * @method string getDeployRegion() 获取部署region
 * @method void setDeployRegion(string $DeployRegion) 设置部署region
 * @method string getVpcId() 获取部署堡垒机的VpcId
 * @method void setVpcId(string $VpcId) 设置部署堡垒机的VpcId
 * @method string getSubnetId() 获取部署堡垒机的SubnetId
 * @method void setSubnetId(string $SubnetId) 设置部署堡垒机的SubnetId
 * @method string getResourceEdition() 获取资源类型。取值:standard/pro
 * @method void setResourceEdition(string $ResourceEdition) 设置资源类型。取值:standard/pro
 * @method integer getResourceNode() 获取资源节点数
 * @method void setResourceNode(integer $ResourceNode) 设置资源节点数
 * @method string getTimeUnit() 获取计费周期
 * @method void setTimeUnit(string $TimeUnit) 设置计费周期
 * @method integer getTimeSpan() 获取计费时长
 * @method void setTimeSpan(integer $TimeSpan) 设置计费时长
 * @method integer getPayMode() 获取计费模式 1预付费
 * @method void setPayMode(integer $PayMode) 设置计费模式 1预付费
 * @method integer getAutoRenewFlag() 获取自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费
 * @method string getDeployZone() 获取部署zone
 * @method void setDeployZone(string $DeployZone) 设置部署zone
 * @method integer getTrial() 获取0非试用版，1试用版
 * @method void setTrial(integer $Trial) 设置0非试用版，1试用版
 * @method integer getShareClb() 获取是否共享clb，0：不共享，1：共享
 * @method void setShareClb(integer $ShareClb) 设置是否共享clb，0：不共享，1：共享
 */
class CreateResourceRequest extends AbstractModel
{
    /**
     * @var string 部署region
     */
    public $DeployRegion;

    /**
     * @var string 部署堡垒机的VpcId
     */
    public $VpcId;

    /**
     * @var string 部署堡垒机的SubnetId
     */
    public $SubnetId;

    /**
     * @var string 资源类型。取值:standard/pro
     */
    public $ResourceEdition;

    /**
     * @var integer 资源节点数
     */
    public $ResourceNode;

    /**
     * @var string 计费周期
     */
    public $TimeUnit;

    /**
     * @var integer 计费时长
     */
    public $TimeSpan;

    /**
     * @var integer 计费模式 1预付费
     */
    public $PayMode;

    /**
     * @var integer 自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 部署zone
     */
    public $DeployZone;

    /**
     * @var integer 0非试用版，1试用版
     */
    public $Trial;

    /**
     * @var integer 是否共享clb，0：不共享，1：共享
     */
    public $ShareClb;

    /**
     * @param string $DeployRegion 部署region
     * @param string $VpcId 部署堡垒机的VpcId
     * @param string $SubnetId 部署堡垒机的SubnetId
     * @param string $ResourceEdition 资源类型。取值:standard/pro
     * @param integer $ResourceNode 资源节点数
     * @param string $TimeUnit 计费周期
     * @param integer $TimeSpan 计费时长
     * @param integer $PayMode 计费模式 1预付费
     * @param integer $AutoRenewFlag 自动续费
     * @param string $DeployZone 部署zone
     * @param integer $Trial 0非试用版，1试用版
     * @param integer $ShareClb 是否共享clb，0：不共享，1：共享
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
        if (array_key_exists("DeployRegion",$param) and $param["DeployRegion"] !== null) {
            $this->DeployRegion = $param["DeployRegion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ResourceEdition",$param) and $param["ResourceEdition"] !== null) {
            $this->ResourceEdition = $param["ResourceEdition"];
        }

        if (array_key_exists("ResourceNode",$param) and $param["ResourceNode"] !== null) {
            $this->ResourceNode = $param["ResourceNode"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("DeployZone",$param) and $param["DeployZone"] !== null) {
            $this->DeployZone = $param["DeployZone"];
        }

        if (array_key_exists("Trial",$param) and $param["Trial"] !== null) {
            $this->Trial = $param["Trial"];
        }

        if (array_key_exists("ShareClb",$param) and $param["ShareClb"] !== null) {
            $this->ShareClb = $param["ShareClb"];
        }
    }
}
