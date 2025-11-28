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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务设置
 *
 * @method boolean getReplaceMonitorUnhealthy() 获取开启监控不健康替换服务。若开启则对于云监控标记为不健康的实例，弹性伸缩服务会进行替换。若不指定该参数，则默认为 False。
 * @method void setReplaceMonitorUnhealthy(boolean $ReplaceMonitorUnhealthy) 设置开启监控不健康替换服务。若开启则对于云监控标记为不健康的实例，弹性伸缩服务会进行替换。若不指定该参数，则默认为 False。
 * @method string getScalingMode() 获取取值范围： 
CLASSIC_SCALING：经典方式，使用创建、销毁实例来实现扩缩容； 
WAKE_UP_STOPPED_SCALING：扩容优先开机。扩容时优先对已关机的实例执行开机操作，若开机后实例数仍低于期望实例数，则创建实例，缩容仍采用销毁实例的方式。用户可以使用StopAutoScalingInstances接口来关闭伸缩组内的实例。监控告警触发的扩容仍将创建实例
默认取值：CLASSIC_SCALING
 * @method void setScalingMode(string $ScalingMode) 设置取值范围： 
CLASSIC_SCALING：经典方式，使用创建、销毁实例来实现扩缩容； 
WAKE_UP_STOPPED_SCALING：扩容优先开机。扩容时优先对已关机的实例执行开机操作，若开机后实例数仍低于期望实例数，则创建实例，缩容仍采用销毁实例的方式。用户可以使用StopAutoScalingInstances接口来关闭伸缩组内的实例。监控告警触发的扩容仍将创建实例
默认取值：CLASSIC_SCALING
 * @method boolean getReplaceLoadBalancerUnhealthy() 获取开启负载均衡不健康替换服务。若开启则对于负载均衡健康检查判断不健康的实例，弹性伸缩服务会进行替换。若不指定该参数，则默认为 False。
 * @method void setReplaceLoadBalancerUnhealthy(boolean $ReplaceLoadBalancerUnhealthy) 设置开启负载均衡不健康替换服务。若开启则对于负载均衡健康检查判断不健康的实例，弹性伸缩服务会进行替换。若不指定该参数，则默认为 False。
 * @method string getReplaceMode() 获取不健康替换服务的替换模式。取值范围：
RECREATE：重建实例替代原有不健康实例；
RESET：对原有不健康实例进行重装系统操作，可保持数据盘、内网IP、实例id等信息不发生变化，实例登录设置、主机名、增强服务和 UserData 与当前启动配置保持一致。
默认取值：RECREATE
 * @method void setReplaceMode(string $ReplaceMode) 设置不健康替换服务的替换模式。取值范围：
RECREATE：重建实例替代原有不健康实例；
RESET：对原有不健康实例进行重装系统操作，可保持数据盘、内网IP、实例id等信息不发生变化，实例登录设置、主机名、增强服务和 UserData 与当前启动配置保持一致。
默认取值：RECREATE
 * @method boolean getAutoUpdateInstanceTags() 获取自动更新实例标签。默认取值为 False，配置后如伸缩组标签发生更新，会同步更新（同步更新仅支持新增、修改标签，暂不支持删除标签）伸缩组内运行中状态实例的标签，同步更新非立即生效，存在一定延迟。
 * @method void setAutoUpdateInstanceTags(boolean $AutoUpdateInstanceTags) 设置自动更新实例标签。默认取值为 False，配置后如伸缩组标签发生更新，会同步更新（同步更新仅支持新增、修改标签，暂不支持删除标签）伸缩组内运行中状态实例的标签，同步更新非立即生效，存在一定延迟。
 * @method boolean getDesiredCapacitySyncWithMaxMinSize() 获取期望实例数同步最大最小值。默认值为 False。该参数仅对修改伸缩组接口未传入期望数的场景生效。
<li>True: 修改最大值或最小值时，如与当前期望数存在冲突，则同步调整期望数。例如修改时传入最小值 2，当前期望数为 1，则同步调整期望数为 2。</li>
<li>False: 修改最大值或最小值时，如与当前期望数存在冲突，报错提示不允许修改。</li>
 * @method void setDesiredCapacitySyncWithMaxMinSize(boolean $DesiredCapacitySyncWithMaxMinSize) 设置期望实例数同步最大最小值。默认值为 False。该参数仅对修改伸缩组接口未传入期望数的场景生效。
<li>True: 修改最大值或最小值时，如与当前期望数存在冲突，则同步调整期望数。例如修改时传入最小值 2，当前期望数为 1，则同步调整期望数为 2。</li>
<li>False: 修改最大值或最小值时，如与当前期望数存在冲突，报错提示不允许修改。</li>
 * @method boolean getPriorityScaleInUnhealthy() 获取优先缩容不健康实例。若开启，缩容时会优先选择不健康实例。默认值为 False。
 * @method void setPriorityScaleInUnhealthy(boolean $PriorityScaleInUnhealthy) 设置优先缩容不健康实例。若开启，缩容时会优先选择不健康实例。默认值为 False。
 */
class ServiceSettings extends AbstractModel
{
    /**
     * @var boolean 开启监控不健康替换服务。若开启则对于云监控标记为不健康的实例，弹性伸缩服务会进行替换。若不指定该参数，则默认为 False。
     */
    public $ReplaceMonitorUnhealthy;

    /**
     * @var string 取值范围： 
CLASSIC_SCALING：经典方式，使用创建、销毁实例来实现扩缩容； 
WAKE_UP_STOPPED_SCALING：扩容优先开机。扩容时优先对已关机的实例执行开机操作，若开机后实例数仍低于期望实例数，则创建实例，缩容仍采用销毁实例的方式。用户可以使用StopAutoScalingInstances接口来关闭伸缩组内的实例。监控告警触发的扩容仍将创建实例
默认取值：CLASSIC_SCALING
     */
    public $ScalingMode;

    /**
     * @var boolean 开启负载均衡不健康替换服务。若开启则对于负载均衡健康检查判断不健康的实例，弹性伸缩服务会进行替换。若不指定该参数，则默认为 False。
     */
    public $ReplaceLoadBalancerUnhealthy;

    /**
     * @var string 不健康替换服务的替换模式。取值范围：
RECREATE：重建实例替代原有不健康实例；
RESET：对原有不健康实例进行重装系统操作，可保持数据盘、内网IP、实例id等信息不发生变化，实例登录设置、主机名、增强服务和 UserData 与当前启动配置保持一致。
默认取值：RECREATE
     */
    public $ReplaceMode;

    /**
     * @var boolean 自动更新实例标签。默认取值为 False，配置后如伸缩组标签发生更新，会同步更新（同步更新仅支持新增、修改标签，暂不支持删除标签）伸缩组内运行中状态实例的标签，同步更新非立即生效，存在一定延迟。
     */
    public $AutoUpdateInstanceTags;

    /**
     * @var boolean 期望实例数同步最大最小值。默认值为 False。该参数仅对修改伸缩组接口未传入期望数的场景生效。
<li>True: 修改最大值或最小值时，如与当前期望数存在冲突，则同步调整期望数。例如修改时传入最小值 2，当前期望数为 1，则同步调整期望数为 2。</li>
<li>False: 修改最大值或最小值时，如与当前期望数存在冲突，报错提示不允许修改。</li>
     */
    public $DesiredCapacitySyncWithMaxMinSize;

    /**
     * @var boolean 优先缩容不健康实例。若开启，缩容时会优先选择不健康实例。默认值为 False。
     */
    public $PriorityScaleInUnhealthy;

    /**
     * @param boolean $ReplaceMonitorUnhealthy 开启监控不健康替换服务。若开启则对于云监控标记为不健康的实例，弹性伸缩服务会进行替换。若不指定该参数，则默认为 False。
     * @param string $ScalingMode 取值范围： 
CLASSIC_SCALING：经典方式，使用创建、销毁实例来实现扩缩容； 
WAKE_UP_STOPPED_SCALING：扩容优先开机。扩容时优先对已关机的实例执行开机操作，若开机后实例数仍低于期望实例数，则创建实例，缩容仍采用销毁实例的方式。用户可以使用StopAutoScalingInstances接口来关闭伸缩组内的实例。监控告警触发的扩容仍将创建实例
默认取值：CLASSIC_SCALING
     * @param boolean $ReplaceLoadBalancerUnhealthy 开启负载均衡不健康替换服务。若开启则对于负载均衡健康检查判断不健康的实例，弹性伸缩服务会进行替换。若不指定该参数，则默认为 False。
     * @param string $ReplaceMode 不健康替换服务的替换模式。取值范围：
RECREATE：重建实例替代原有不健康实例；
RESET：对原有不健康实例进行重装系统操作，可保持数据盘、内网IP、实例id等信息不发生变化，实例登录设置、主机名、增强服务和 UserData 与当前启动配置保持一致。
默认取值：RECREATE
     * @param boolean $AutoUpdateInstanceTags 自动更新实例标签。默认取值为 False，配置后如伸缩组标签发生更新，会同步更新（同步更新仅支持新增、修改标签，暂不支持删除标签）伸缩组内运行中状态实例的标签，同步更新非立即生效，存在一定延迟。
     * @param boolean $DesiredCapacitySyncWithMaxMinSize 期望实例数同步最大最小值。默认值为 False。该参数仅对修改伸缩组接口未传入期望数的场景生效。
<li>True: 修改最大值或最小值时，如与当前期望数存在冲突，则同步调整期望数。例如修改时传入最小值 2，当前期望数为 1，则同步调整期望数为 2。</li>
<li>False: 修改最大值或最小值时，如与当前期望数存在冲突，报错提示不允许修改。</li>
     * @param boolean $PriorityScaleInUnhealthy 优先缩容不健康实例。若开启，缩容时会优先选择不健康实例。默认值为 False。
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
        if (array_key_exists("ReplaceMonitorUnhealthy",$param) and $param["ReplaceMonitorUnhealthy"] !== null) {
            $this->ReplaceMonitorUnhealthy = $param["ReplaceMonitorUnhealthy"];
        }

        if (array_key_exists("ScalingMode",$param) and $param["ScalingMode"] !== null) {
            $this->ScalingMode = $param["ScalingMode"];
        }

        if (array_key_exists("ReplaceLoadBalancerUnhealthy",$param) and $param["ReplaceLoadBalancerUnhealthy"] !== null) {
            $this->ReplaceLoadBalancerUnhealthy = $param["ReplaceLoadBalancerUnhealthy"];
        }

        if (array_key_exists("ReplaceMode",$param) and $param["ReplaceMode"] !== null) {
            $this->ReplaceMode = $param["ReplaceMode"];
        }

        if (array_key_exists("AutoUpdateInstanceTags",$param) and $param["AutoUpdateInstanceTags"] !== null) {
            $this->AutoUpdateInstanceTags = $param["AutoUpdateInstanceTags"];
        }

        if (array_key_exists("DesiredCapacitySyncWithMaxMinSize",$param) and $param["DesiredCapacitySyncWithMaxMinSize"] !== null) {
            $this->DesiredCapacitySyncWithMaxMinSize = $param["DesiredCapacitySyncWithMaxMinSize"];
        }

        if (array_key_exists("PriorityScaleInUnhealthy",$param) and $param["PriorityScaleInUnhealthy"] !== null) {
            $this->PriorityScaleInUnhealthy = $param["PriorityScaleInUnhealthy"];
        }
    }
}
