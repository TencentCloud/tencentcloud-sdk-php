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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyServerlessStrategy请求参数结构体
 *
 * @method string getClusterId() 获取<p>serverless集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>serverless集群id</p>
 * @method string getAutoPause() 获取<p>集群是否自动暂停，可选范围</p><li>yes</li><li>no</li>
 * @method void setAutoPause(string $AutoPause) 设置<p>集群是否自动暂停，可选范围</p><li>yes</li><li>no</li>
 * @method integer getAutoPauseDelay() 获取<p>集群自动暂停的延迟，单位秒，可选范围[600,691200]，默认600</p>
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) 设置<p>集群自动暂停的延迟，单位秒，可选范围[600,691200]，默认600</p>
 * @method integer getAutoScaleUpDelay() 获取<p>该参数暂时无效</p>
 * @method void setAutoScaleUpDelay(integer $AutoScaleUpDelay) 设置<p>该参数暂时无效</p>
 * @method integer getAutoScaleDownDelay() 获取<p>该参数暂时无效</p>
 * @method void setAutoScaleDownDelay(integer $AutoScaleDownDelay) 设置<p>该参数暂时无效</p>
 * @method float getMinCpu() 获取<p>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method void setMinCpu(float $MinCpu) 设置<p>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method float getMaxCpu() 获取<p>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method void setMaxCpu(float $MaxCpu) 设置<p>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method float getMinRoCpu() 获取<p>只读实例cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method void setMinRoCpu(float $MinRoCpu) 设置<p>只读实例cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method float getMaxRoCpu() 获取<p>只读cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method void setMaxRoCpu(float $MaxRoCpu) 设置<p>只读cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
 * @method integer getMinRoCount() 获取<p>只读节点最小个数</p>
 * @method void setMinRoCount(integer $MinRoCount) 设置<p>只读节点最小个数</p>
 * @method integer getMaxRoCount() 获取<p>只读节点最大个数</p>
 * @method void setMaxRoCount(integer $MaxRoCount) 设置<p>只读节点最大个数</p>
 * @method string getAutoArchive() 获取<p>是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes</p>
 * @method void setAutoArchive(string $AutoArchive) 设置<p>是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes</p>
 * @method string getUpgradeType() 获取<p>升级类型。 默认值：upgradeImmediate。 可选值： upgradeImmediate：立即完成修改 upgradeInMaintain：在维护时间窗口内完成修改</p>
 * @method void setUpgradeType(string $UpgradeType) 设置<p>升级类型。 默认值：upgradeImmediate。 可选值： upgradeImmediate：立即完成修改 upgradeInMaintain：在维护时间窗口内完成修改</p>
 * @method array getSecurityGroupIdsForNewRo() 获取<p>新增的只读实例需要绑定的安全组列表。仅仅针对于在这次调整策略过程中新产生的只读实例绑定安全组，存量的实例不绑定。</p>
 * @method void setSecurityGroupIdsForNewRo(array $SecurityGroupIdsForNewRo) 设置<p>新增的只读实例需要绑定的安全组列表。仅仅针对于在这次调整策略过程中新产生的只读实例绑定安全组，存量的实例不绑定。</p>
 */
class ModifyServerlessStrategyRequest extends AbstractModel
{
    /**
     * @var string <p>serverless集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群是否自动暂停，可选范围</p><li>yes</li><li>no</li>
     */
    public $AutoPause;

    /**
     * @var integer <p>集群自动暂停的延迟，单位秒，可选范围[600,691200]，默认600</p>
     */
    public $AutoPauseDelay;

    /**
     * @var integer <p>该参数暂时无效</p>
     */
    public $AutoScaleUpDelay;

    /**
     * @var integer <p>该参数暂时无效</p>
     */
    public $AutoScaleDownDelay;

    /**
     * @var float <p>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     */
    public $MinCpu;

    /**
     * @var float <p>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     */
    public $MaxCpu;

    /**
     * @var float <p>只读实例cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     */
    public $MinRoCpu;

    /**
     * @var float <p>只读cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     */
    public $MaxRoCpu;

    /**
     * @var integer <p>只读节点最小个数</p>
     */
    public $MinRoCount;

    /**
     * @var integer <p>只读节点最大个数</p>
     */
    public $MaxRoCount;

    /**
     * @var string <p>是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes</p>
     */
    public $AutoArchive;

    /**
     * @var string <p>升级类型。 默认值：upgradeImmediate。 可选值： upgradeImmediate：立即完成修改 upgradeInMaintain：在维护时间窗口内完成修改</p>
     */
    public $UpgradeType;

    /**
     * @var array <p>新增的只读实例需要绑定的安全组列表。仅仅针对于在这次调整策略过程中新产生的只读实例绑定安全组，存量的实例不绑定。</p>
     */
    public $SecurityGroupIdsForNewRo;

    /**
     * @param string $ClusterId <p>serverless集群id</p>
     * @param string $AutoPause <p>集群是否自动暂停，可选范围</p><li>yes</li><li>no</li>
     * @param integer $AutoPauseDelay <p>集群自动暂停的延迟，单位秒，可选范围[600,691200]，默认600</p>
     * @param integer $AutoScaleUpDelay <p>该参数暂时无效</p>
     * @param integer $AutoScaleDownDelay <p>该参数暂时无效</p>
     * @param float $MinCpu <p>cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     * @param float $MaxCpu <p>cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     * @param float $MinRoCpu <p>只读实例cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     * @param float $MaxRoCpu <p>只读cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回</p>
     * @param integer $MinRoCount <p>只读节点最小个数</p>
     * @param integer $MaxRoCount <p>只读节点最大个数</p>
     * @param string $AutoArchive <p>是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes</p>
     * @param string $UpgradeType <p>升级类型。 默认值：upgradeImmediate。 可选值： upgradeImmediate：立即完成修改 upgradeInMaintain：在维护时间窗口内完成修改</p>
     * @param array $SecurityGroupIdsForNewRo <p>新增的只读实例需要绑定的安全组列表。仅仅针对于在这次调整策略过程中新产生的只读实例绑定安全组，存量的实例不绑定。</p>
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

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoPauseDelay",$param) and $param["AutoPauseDelay"] !== null) {
            $this->AutoPauseDelay = $param["AutoPauseDelay"];
        }

        if (array_key_exists("AutoScaleUpDelay",$param) and $param["AutoScaleUpDelay"] !== null) {
            $this->AutoScaleUpDelay = $param["AutoScaleUpDelay"];
        }

        if (array_key_exists("AutoScaleDownDelay",$param) and $param["AutoScaleDownDelay"] !== null) {
            $this->AutoScaleDownDelay = $param["AutoScaleDownDelay"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("MinRoCpu",$param) and $param["MinRoCpu"] !== null) {
            $this->MinRoCpu = $param["MinRoCpu"];
        }

        if (array_key_exists("MaxRoCpu",$param) and $param["MaxRoCpu"] !== null) {
            $this->MaxRoCpu = $param["MaxRoCpu"];
        }

        if (array_key_exists("MinRoCount",$param) and $param["MinRoCount"] !== null) {
            $this->MinRoCount = $param["MinRoCount"];
        }

        if (array_key_exists("MaxRoCount",$param) and $param["MaxRoCount"] !== null) {
            $this->MaxRoCount = $param["MaxRoCount"];
        }

        if (array_key_exists("AutoArchive",$param) and $param["AutoArchive"] !== null) {
            $this->AutoArchive = $param["AutoArchive"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("SecurityGroupIdsForNewRo",$param) and $param["SecurityGroupIdsForNewRo"] !== null) {
            $this->SecurityGroupIdsForNewRo = $param["SecurityGroupIdsForNewRo"];
        }
    }
}
