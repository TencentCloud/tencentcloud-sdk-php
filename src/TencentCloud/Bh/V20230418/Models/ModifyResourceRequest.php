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
 * ModifyResource请求参数结构体
 *
 * @method string getResourceId() 获取<p>需要开通服务的资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>需要开通服务的资源ID</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getResourceEdition() 获取<p>实例版本</p>
 * @method void setResourceEdition(string $ResourceEdition) 设置<p>实例版本</p>
 * @method integer getResourceNode() 获取<p>资源节点数</p>
 * @method void setResourceNode(integer $ResourceNode) 设置<p>资源节点数</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费</p>
 * @method integer getPackageBandwidth() 获取<p>带宽扩展包个数(4M)</p>
 * @method void setPackageBandwidth(integer $PackageBandwidth) 设置<p>带宽扩展包个数(4M)</p>
 * @method integer getPackageNode() 获取<p>授权点数扩展包个数(50点)</p>
 * @method void setPackageNode(integer $PackageNode) 设置<p>授权点数扩展包个数(50点)</p>
 * @method integer getLogDelivery() 获取<p>日志投递</p>
 * @method void setLogDelivery(integer $LogDelivery) 设置<p>日志投递</p>
 * @method integer getIOAResource() 获取<p>零信任堡垒机功能包</p><p>枚举值：</p><ul><li>0： 不开通</li><li>1： 付费版（含 20 用户 / 10Mbps 带宽）</li></ul><p>默认值：0</p>
 * @method void setIOAResource(integer $IOAResource) 设置<p>零信任堡垒机功能包</p><p>枚举值：</p><ul><li>0： 不开通</li><li>1： 付费版（含 20 用户 / 10Mbps 带宽）</li></ul><p>默认值：0</p>
 * @method integer getPackageIOAUserCount() 获取<p>零信任用户扩展包，1 个 = 20 用户</p><p>取值范围：[0, 999]</p>
 * @method void setPackageIOAUserCount(integer $PackageIOAUserCount) 设置<p>零信任用户扩展包，1 个 = 20 用户</p><p>取值范围：[0, 999]</p>
 * @method integer getPackageIOABandwidth() 获取<p>零信任带宽扩展包，1 个 = 4Mbps</p><p>取值范围：[0, 509]</p>
 * @method void setPackageIOABandwidth(integer $PackageIOABandwidth) 设置<p>零信任带宽扩展包，1 个 = 4Mbps</p><p>取值范围：[0, 509]</p>
 */
class ModifyResourceRequest extends AbstractModel
{
    /**
     * @var string <p>需要开通服务的资源ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>状态</p>
     * @deprecated
     */
    public $Status;

    /**
     * @var string <p>实例版本</p>
     */
    public $ResourceEdition;

    /**
     * @var integer <p>资源节点数</p>
     */
    public $ResourceNode;

    /**
     * @var integer <p>自动续费</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>带宽扩展包个数(4M)</p>
     */
    public $PackageBandwidth;

    /**
     * @var integer <p>授权点数扩展包个数(50点)</p>
     */
    public $PackageNode;

    /**
     * @var integer <p>日志投递</p>
     */
    public $LogDelivery;

    /**
     * @var integer <p>零信任堡垒机功能包</p><p>枚举值：</p><ul><li>0： 不开通</li><li>1： 付费版（含 20 用户 / 10Mbps 带宽）</li></ul><p>默认值：0</p>
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
     * @param string $ResourceId <p>需要开通服务的资源ID</p>
     * @param string $Status <p>状态</p>
     * @param string $ResourceEdition <p>实例版本</p>
     * @param integer $ResourceNode <p>资源节点数</p>
     * @param integer $AutoRenewFlag <p>自动续费</p>
     * @param integer $PackageBandwidth <p>带宽扩展包个数(4M)</p>
     * @param integer $PackageNode <p>授权点数扩展包个数(50点)</p>
     * @param integer $LogDelivery <p>日志投递</p>
     * @param integer $IOAResource <p>零信任堡垒机功能包</p><p>枚举值：</p><ul><li>0： 不开通</li><li>1： 付费版（含 20 用户 / 10Mbps 带宽）</li></ul><p>默认值：0</p>
     * @param integer $PackageIOAUserCount <p>零信任用户扩展包，1 个 = 20 用户</p><p>取值范围：[0, 999]</p>
     * @param integer $PackageIOABandwidth <p>零信任带宽扩展包，1 个 = 4Mbps</p><p>取值范围：[0, 509]</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceEdition",$param) and $param["ResourceEdition"] !== null) {
            $this->ResourceEdition = $param["ResourceEdition"];
        }

        if (array_key_exists("ResourceNode",$param) and $param["ResourceNode"] !== null) {
            $this->ResourceNode = $param["ResourceNode"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PackageBandwidth",$param) and $param["PackageBandwidth"] !== null) {
            $this->PackageBandwidth = $param["PackageBandwidth"];
        }

        if (array_key_exists("PackageNode",$param) and $param["PackageNode"] !== null) {
            $this->PackageNode = $param["PackageNode"];
        }

        if (array_key_exists("LogDelivery",$param) and $param["LogDelivery"] !== null) {
            $this->LogDelivery = $param["LogDelivery"];
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
    }
}
