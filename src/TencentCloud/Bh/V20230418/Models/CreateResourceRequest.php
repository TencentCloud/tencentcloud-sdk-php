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
 * @method string getDeployRegion() 获取<p>部署region</p>
 * @method void setDeployRegion(string $DeployRegion) 设置<p>部署region</p>
 * @method string getVpcId() 获取<p>部署堡垒机的VpcId</p>
 * @method void setVpcId(string $VpcId) 设置<p>部署堡垒机的VpcId</p>
 * @method string getSubnetId() 获取<p>部署堡垒机的SubnetId</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>部署堡垒机的SubnetId</p>
 * @method string getResourceEdition() 获取<p>资源类型。取值:standard/pro</p>
 * @method void setResourceEdition(string $ResourceEdition) 设置<p>资源类型。取值:standard/pro</p>
 * @method integer getResourceNode() 获取<p>资源节点数</p>
 * @method void setResourceNode(integer $ResourceNode) 设置<p>资源节点数</p>
 * @method string getTimeUnit() 获取<p>计费周期</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>计费周期</p>
 * @method integer getTimeSpan() 获取<p>计费时长</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>计费时长</p>
 * @method integer getPayMode() 获取<p>计费模式 1预付费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>计费模式 1预付费</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费</p>
 * @method integer getIOAResource() 获取<p>零信任堡垒机功能包</p><p>枚举值：</p><ul><li>0： 不开通</li><li>1： 付费版（含 20 用户 / 10Mbps 带宽）</li></ul>
 * @method void setIOAResource(integer $IOAResource) 设置<p>零信任堡垒机功能包</p><p>枚举值：</p><ul><li>0： 不开通</li><li>1： 付费版（含 20 用户 / 10Mbps 带宽）</li></ul>
 * @method integer getPackageIOAUserCount() 获取<p>零信任用户扩展包，1 个 = 20 用户</p><p>取值范围：[0, 999]</p>
 * @method void setPackageIOAUserCount(integer $PackageIOAUserCount) 设置<p>零信任用户扩展包，1 个 = 20 用户</p><p>取值范围：[0, 999]</p>
 * @method integer getPackageIOABandwidth() 获取<p>零信任带宽扩展包，1 个 = 4Mbps</p><p>取值范围：[0, 509]</p>
 * @method void setPackageIOABandwidth(integer $PackageIOABandwidth) 设置<p>零信任带宽扩展包，1 个 = 4Mbps</p><p>取值范围：[0, 509]</p>
 * @method string getDeployZone() 获取<p>部署zone</p>
 * @method void setDeployZone(string $DeployZone) 设置<p>部署zone</p>
 * @method integer getTrial() 获取<p>0非试用版，1试用版</p>
 * @method void setTrial(integer $Trial) 设置<p>0非试用版，1试用版</p>
 * @method integer getShareClb() 获取<p>是否共享clb</p><p>枚举值：</p><ul><li>0： 不共享</li><li>1： 共享</li></ul><p>默认值：0</p><p>公有云传0</p>
 * @method void setShareClb(integer $ShareClb) 设置<p>是否共享clb</p><p>枚举值：</p><ul><li>0： 不共享</li><li>1： 共享</li></ul><p>默认值：0</p><p>公有云传0</p>
 */
class CreateResourceRequest extends AbstractModel
{
    /**
     * @var string <p>部署region</p>
     */
    public $DeployRegion;

    /**
     * @var string <p>部署堡垒机的VpcId</p>
     */
    public $VpcId;

    /**
     * @var string <p>部署堡垒机的SubnetId</p>
     */
    public $SubnetId;

    /**
     * @var string <p>资源类型。取值:standard/pro</p>
     */
    public $ResourceEdition;

    /**
     * @var integer <p>资源节点数</p>
     */
    public $ResourceNode;

    /**
     * @var string <p>计费周期</p>
     */
    public $TimeUnit;

    /**
     * @var integer <p>计费时长</p>
     */
    public $TimeSpan;

    /**
     * @var integer <p>计费模式 1预付费</p>
     */
    public $PayMode;

    /**
     * @var integer <p>自动续费</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>零信任堡垒机功能包</p><p>枚举值：</p><ul><li>0： 不开通</li><li>1： 付费版（含 20 用户 / 10Mbps 带宽）</li></ul>
     */
    public $IOAResource;

    /**
     * @var integer <p>零信任用户扩展包，1 个 = 20 用户</p><p>取值范围：[0, 999]</p>
     */
    public $PackageIOAUserCount;

    /**
     * @var integer <p>零信任带宽扩展包，1 个 = 4Mbps</p><p>取值范围：[0, 509]</p>
     */
    public $PackageIOABandwidth;

    /**
     * @var string <p>部署zone</p>
     */
    public $DeployZone;

    /**
     * @var integer <p>0非试用版，1试用版</p>
     */
    public $Trial;

    /**
     * @var integer <p>是否共享clb</p><p>枚举值：</p><ul><li>0： 不共享</li><li>1： 共享</li></ul><p>默认值：0</p><p>公有云传0</p>
     */
    public $ShareClb;

    /**
     * @param string $DeployRegion <p>部署region</p>
     * @param string $VpcId <p>部署堡垒机的VpcId</p>
     * @param string $SubnetId <p>部署堡垒机的SubnetId</p>
     * @param string $ResourceEdition <p>资源类型。取值:standard/pro</p>
     * @param integer $ResourceNode <p>资源节点数</p>
     * @param string $TimeUnit <p>计费周期</p>
     * @param integer $TimeSpan <p>计费时长</p>
     * @param integer $PayMode <p>计费模式 1预付费</p>
     * @param integer $AutoRenewFlag <p>自动续费</p>
     * @param integer $IOAResource <p>零信任堡垒机功能包</p><p>枚举值：</p><ul><li>0： 不开通</li><li>1： 付费版（含 20 用户 / 10Mbps 带宽）</li></ul>
     * @param integer $PackageIOAUserCount <p>零信任用户扩展包，1 个 = 20 用户</p><p>取值范围：[0, 999]</p>
     * @param integer $PackageIOABandwidth <p>零信任带宽扩展包，1 个 = 4Mbps</p><p>取值范围：[0, 509]</p>
     * @param string $DeployZone <p>部署zone</p>
     * @param integer $Trial <p>0非试用版，1试用版</p>
     * @param integer $ShareClb <p>是否共享clb</p><p>枚举值：</p><ul><li>0： 不共享</li><li>1： 共享</li></ul><p>默认值：0</p><p>公有云传0</p>
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

        if (array_key_exists("IOAResource",$param) and $param["IOAResource"] !== null) {
            $this->IOAResource = $param["IOAResource"];
        }

        if (array_key_exists("PackageIOAUserCount",$param) and $param["PackageIOAUserCount"] !== null) {
            $this->PackageIOAUserCount = $param["PackageIOAUserCount"];
        }

        if (array_key_exists("PackageIOABandwidth",$param) and $param["PackageIOABandwidth"] !== null) {
            $this->PackageIOABandwidth = $param["PackageIOABandwidth"];
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
