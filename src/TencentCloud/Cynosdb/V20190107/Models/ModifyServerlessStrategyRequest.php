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
 * @method string getClusterId() 获取serverless集群id
 * @method void setClusterId(string $ClusterId) 设置serverless集群id
 * @method string getAutoPause() 获取集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
 * @method void setAutoPause(string $AutoPause) 设置集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
 * @method integer getAutoPauseDelay() 获取集群自动暂停的延迟，单位秒，可选范围[600,691200]，默认600
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) 设置集群自动暂停的延迟，单位秒，可选范围[600,691200]，默认600
 * @method integer getAutoScaleUpDelay() 获取该参数暂时无效
 * @method void setAutoScaleUpDelay(integer $AutoScaleUpDelay) 设置该参数暂时无效
 * @method integer getAutoScaleDownDelay() 获取该参数暂时无效
 * @method void setAutoScaleDownDelay(integer $AutoScaleDownDelay) 设置该参数暂时无效
 * @method float getMinCpu() 获取cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method void setMinCpu(float $MinCpu) 设置cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method float getMaxCpu() 获取cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method void setMaxCpu(float $MaxCpu) 设置cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method float getMinRoCpu() 获取只读实例cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method void setMinRoCpu(float $MinRoCpu) 设置只读实例cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method float getMaxRoCpu() 获取只读cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method void setMaxRoCpu(float $MaxRoCpu) 设置只读cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method integer getMinRoCount() 获取只读节点最小个数
 * @method void setMinRoCount(integer $MinRoCount) 设置只读节点最小个数
 * @method integer getMaxRoCount() 获取只读节点最大个数
 * @method void setMaxRoCount(integer $MaxRoCount) 设置只读节点最大个数
 * @method string getAutoArchive() 获取是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
 * @method void setAutoArchive(string $AutoArchive) 设置是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
 * @method string getUpgradeType() 获取升级类型。 默认值：upgradeImmediate。 可选值： upgradeImmediate：立即完成修改 upgradeInMaintain：在维护时间窗口内完成修改
 * @method void setUpgradeType(string $UpgradeType) 设置升级类型。 默认值：upgradeImmediate。 可选值： upgradeImmediate：立即完成修改 upgradeInMaintain：在维护时间窗口内完成修改
 */
class ModifyServerlessStrategyRequest extends AbstractModel
{
    /**
     * @var string serverless集群id
     */
    public $ClusterId;

    /**
     * @var string 集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
     */
    public $AutoPause;

    /**
     * @var integer 集群自动暂停的延迟，单位秒，可选范围[600,691200]，默认600
     */
    public $AutoPauseDelay;

    /**
     * @var integer 该参数暂时无效
     */
    public $AutoScaleUpDelay;

    /**
     * @var integer 该参数暂时无效
     */
    public $AutoScaleDownDelay;

    /**
     * @var float cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     */
    public $MinCpu;

    /**
     * @var float cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     */
    public $MaxCpu;

    /**
     * @var float 只读实例cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     */
    public $MinRoCpu;

    /**
     * @var float 只读cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     */
    public $MaxRoCpu;

    /**
     * @var integer 只读节点最小个数
     */
    public $MinRoCount;

    /**
     * @var integer 只读节点最大个数
     */
    public $MaxRoCount;

    /**
     * @var string 是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
     */
    public $AutoArchive;

    /**
     * @var string 升级类型。 默认值：upgradeImmediate。 可选值： upgradeImmediate：立即完成修改 upgradeInMaintain：在维护时间窗口内完成修改
     */
    public $UpgradeType;

    /**
     * @param string $ClusterId serverless集群id
     * @param string $AutoPause 集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
     * @param integer $AutoPauseDelay 集群自动暂停的延迟，单位秒，可选范围[600,691200]，默认600
     * @param integer $AutoScaleUpDelay 该参数暂时无效
     * @param integer $AutoScaleDownDelay 该参数暂时无效
     * @param float $MinCpu cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     * @param float $MaxCpu cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     * @param float $MinRoCpu 只读实例cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     * @param float $MaxRoCpu 只读cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     * @param integer $MinRoCount 只读节点最小个数
     * @param integer $MaxRoCount 只读节点最大个数
     * @param string $AutoArchive 是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
     * @param string $UpgradeType 升级类型。 默认值：upgradeImmediate。 可选值： upgradeImmediate：立即完成修改 upgradeInMaintain：在维护时间窗口内完成修改
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
    }
}
