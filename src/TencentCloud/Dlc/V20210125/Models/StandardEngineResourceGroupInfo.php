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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户标准引擎资源组信息
 *
 * @method string getEngineResourceGroupId() 获取标准引擎资源组ID
 * @method void setEngineResourceGroupId(string $EngineResourceGroupId) 设置标准引擎资源组ID
 * @method string getEngineResourceGroupName() 获取标准引擎资源组名称，支持1-50个英文、汉字、数字、连接线-或下划线_
 * @method void setEngineResourceGroupName(string $EngineResourceGroupName) 设置标准引擎资源组名称，支持1-50个英文、汉字、数字、连接线-或下划线_
 * @method string getCreator() 获取创建者
 * @method void setCreator(string $Creator) 设置创建者
 * @method integer getResourceGroupState() 获取资源组 状态，-1--删除、0--启动中、2--运行、3--暂停、4--暂停中、7--切换引擎中、8--配置修改中。9--资源组重启中，10--因为变配导致资源组启动、11--因为隔离导致资源组挂起、12- 资源配置下发中、 13-接入点隔离导致资源组挂起中
 * @method void setResourceGroupState(integer $ResourceGroupState) 设置资源组 状态，-1--删除、0--启动中、2--运行、3--暂停、4--暂停中、7--切换引擎中、8--配置修改中。9--资源组重启中，10--因为变配导致资源组启动、11--因为隔离导致资源组挂起、12- 资源配置下发中、 13-接入点隔离导致资源组挂起中
 * @method integer getAutoLaunch() 获取自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
 * @method void setAutoLaunch(integer $AutoLaunch) 设置自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
 * @method integer getAutoPause() 获取自动挂起资源组。0-自动挂起，1-不自动挂起
 * @method void setAutoPause(integer $AutoPause) 设置自动挂起资源组。0-自动挂起，1-不自动挂起
 * @method integer getAutoPauseTime() 获取自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
 * @method void setAutoPauseTime(integer $AutoPauseTime) 设置自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
 * @method string getDriverCuSpec() 获取driver的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
 * @method void setDriverCuSpec(string $DriverCuSpec) 设置driver的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
 * @method string getExecutorCuSpec() 获取executor的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
 * @method void setExecutorCuSpec(string $ExecutorCuSpec) 设置executor的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
 * @method integer getMaxConcurrency() 获取任务并发数
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置任务并发数
 * @method integer getMinExecutorNums() 获取executor最小数量，
 * @method void setMinExecutorNums(integer $MinExecutorNums) 设置executor最小数量，
 * @method integer getMaxExecutorNums() 获取executor最大数量，
 * @method void setMaxExecutorNums(integer $MaxExecutorNums) 设置executor最大数量，
 * @method integer getCreateTime() 获取创建时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间戳
 * @method integer getUpdateTime() 获取更新时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间戳
 * @method integer getNeedRestart() 获取是否待重启，作为有资源参数，静态参数修改未重启生效的标识；0-- 不需要重启、1--因为资源参数待重启、2--因静态参数重启、3--因资源和静态参数而待重启、4--因网络配置而待重启、5--因网络配置和资源配置而待重启、6--因网络配置和静态参数而待重启、7--因网络配置，资源参数和静态参数而待重启、
 * @method void setNeedRestart(integer $NeedRestart) 设置是否待重启，作为有资源参数，静态参数修改未重启生效的标识；0-- 不需要重启、1--因为资源参数待重启、2--因静态参数重启、3--因资源和静态参数而待重启、4--因网络配置而待重启、5--因网络配置和资源配置而待重启、6--因网络配置和静态参数而待重启、7--因网络配置，资源参数和静态参数而待重启、
 * @method string getDataEngineName() 获取绑定的引擎名称
 * @method void setDataEngineName(string $DataEngineName) 设置绑定的引擎名称
 * @method string getDataEngineId() 获取绑定的引擎ID
 * @method void setDataEngineId(string $DataEngineId) 设置绑定的引擎ID
 * @method integer getDataEngineState() 获取绑定的引擎状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineState(integer $DataEngineState) 设置绑定的引擎状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessPointId() 获取接入点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessPointId(string $AccessPointId) 设置接入点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessPointName() 获取接入点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessPointName(string $AccessPointName) 设置接入点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccessPointState() 获取接入点状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessPointState(integer $AccessPointState) 设置接入点状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupType() 获取资源组类型，console/ default
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupType(string $ResourceGroupType) 设置资源组类型，console/ default
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineNetworkId() 获取引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineNetworkId(string $EngineNetworkId) 设置引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetworkConfigNames() 获取网络配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkConfigNames(array $NetworkConfigNames) 设置网络配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrameType() 获取AI类型资源组的框架类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameType(string $FrameType) 设置AI类型资源组的框架类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageType() 获取AI类型资源组的镜像类型，内置：bulit-in，自定义：custom
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageType(string $ImageType) 设置AI类型资源组的镜像类型，内置：bulit-in，自定义：custom
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageName() 获取镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageName(string $ImageName) 设置镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageVersion() 获取镜像id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageVersion(string $ImageVersion) 设置镜像id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取AI资源组的可用资源上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置AI资源组的可用资源上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDefault() 获取是否是默认资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(boolean $IsDefault) 设置是否是默认资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupScene() 获取资源组场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupScene(string $ResourceGroupScene) 设置资源组场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPythonCuSpec() 获取python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPythonCuSpec(string $PythonCuSpec) 设置python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkSpecMode() 获取Spark类型资源组资源配置模式，fast：快速模式，custom：自定义模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkSpecMode(string $SparkSpecMode) 设置Spark类型资源组资源配置模式，fast：快速模式，custom：自定义模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSparkSize() 获取Spark类型资源组资源上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkSize(integer $SparkSize) 设置Spark类型资源组资源上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSparkMinSize() 获取Spark类型资源组资源最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkMinSize(integer $SparkMinSize) 设置Spark类型资源组资源最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicDomain() 获取自定义镜像容器镜像服务domain 名称
 * @method void setPublicDomain(string $PublicDomain) 设置自定义镜像容器镜像服务domain 名称
 * @method string getRegistryId() 获取自定义镜像容器镜像服务tcr实例id
 * @method void setRegistryId(string $RegistryId) 设置自定义镜像容器镜像服务tcr实例id
 * @method string getRegionName() 获取容器镜像服务tcr所在地域
 * @method void setRegionName(string $RegionName) 设置容器镜像服务tcr所在地域
 * @method string getLaunchTime() 获取资源组启动耗时
 * @method void setLaunchTime(string $LaunchTime) 设置资源组启动耗时
 */
class StandardEngineResourceGroupInfo extends AbstractModel
{
    /**
     * @var string 标准引擎资源组ID
     */
    public $EngineResourceGroupId;

    /**
     * @var string 标准引擎资源组名称，支持1-50个英文、汉字、数字、连接线-或下划线_
     */
    public $EngineResourceGroupName;

    /**
     * @var string 创建者
     */
    public $Creator;

    /**
     * @var integer 资源组 状态，-1--删除、0--启动中、2--运行、3--暂停、4--暂停中、7--切换引擎中、8--配置修改中。9--资源组重启中，10--因为变配导致资源组启动、11--因为隔离导致资源组挂起、12- 资源配置下发中、 13-接入点隔离导致资源组挂起中
     */
    public $ResourceGroupState;

    /**
     * @var integer 自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
     */
    public $AutoLaunch;

    /**
     * @var integer 自动挂起资源组。0-自动挂起，1-不自动挂起
     */
    public $AutoPause;

    /**
     * @var integer 自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
     */
    public $AutoPauseTime;

    /**
     * @var string driver的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
     */
    public $DriverCuSpec;

    /**
     * @var string executor的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
     */
    public $ExecutorCuSpec;

    /**
     * @var integer 任务并发数
     */
    public $MaxConcurrency;

    /**
     * @var integer executor最小数量，
     */
    public $MinExecutorNums;

    /**
     * @var integer executor最大数量，
     */
    public $MaxExecutorNums;

    /**
     * @var integer 创建时间戳
     */
    public $CreateTime;

    /**
     * @var integer 更新时间戳
     */
    public $UpdateTime;

    /**
     * @var integer 是否待重启，作为有资源参数，静态参数修改未重启生效的标识；0-- 不需要重启、1--因为资源参数待重启、2--因静态参数重启、3--因资源和静态参数而待重启、4--因网络配置而待重启、5--因网络配置和资源配置而待重启、6--因网络配置和静态参数而待重启、7--因网络配置，资源参数和静态参数而待重启、
     */
    public $NeedRestart;

    /**
     * @var string 绑定的引擎名称
     */
    public $DataEngineName;

    /**
     * @var string 绑定的引擎ID
     */
    public $DataEngineId;

    /**
     * @var integer 绑定的引擎状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineState;

    /**
     * @var string 接入点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessPointId;

    /**
     * @var string 接入点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessPointName;

    /**
     * @var integer 接入点状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessPointState;

    /**
     * @var string 资源组类型，console/ default
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupType;

    /**
     * @var string 引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineNetworkId;

    /**
     * @var array 网络配置名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkConfigNames;

    /**
     * @var string AI类型资源组的框架类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameType;

    /**
     * @var string AI类型资源组的镜像类型，内置：bulit-in，自定义：custom
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageType;

    /**
     * @var string 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageName;

    /**
     * @var string 镜像id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageVersion;

    /**
     * @var integer AI资源组的可用资源上限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var boolean 是否是默认资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @var string 资源组场景
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupScene;

    /**
     * @var string python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PythonCuSpec;

    /**
     * @var string Spark类型资源组资源配置模式，fast：快速模式，custom：自定义模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkSpecMode;

    /**
     * @var integer Spark类型资源组资源上限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkSize;

    /**
     * @var integer Spark类型资源组资源最小值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkMinSize;

    /**
     * @var string 自定义镜像容器镜像服务domain 名称
     */
    public $PublicDomain;

    /**
     * @var string 自定义镜像容器镜像服务tcr实例id
     */
    public $RegistryId;

    /**
     * @var string 容器镜像服务tcr所在地域
     */
    public $RegionName;

    /**
     * @var string 资源组启动耗时
     */
    public $LaunchTime;

    /**
     * @param string $EngineResourceGroupId 标准引擎资源组ID
     * @param string $EngineResourceGroupName 标准引擎资源组名称，支持1-50个英文、汉字、数字、连接线-或下划线_
     * @param string $Creator 创建者
     * @param integer $ResourceGroupState 资源组 状态，-1--删除、0--启动中、2--运行、3--暂停、4--暂停中、7--切换引擎中、8--配置修改中。9--资源组重启中，10--因为变配导致资源组启动、11--因为隔离导致资源组挂起、12- 资源配置下发中、 13-接入点隔离导致资源组挂起中
     * @param integer $AutoLaunch 自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
     * @param integer $AutoPause 自动挂起资源组。0-自动挂起，1-不自动挂起
     * @param integer $AutoPauseTime 自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
     * @param string $DriverCuSpec driver的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
     * @param string $ExecutorCuSpec executor的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
     * @param integer $MaxConcurrency 任务并发数
     * @param integer $MinExecutorNums executor最小数量，
     * @param integer $MaxExecutorNums executor最大数量，
     * @param integer $CreateTime 创建时间戳
     * @param integer $UpdateTime 更新时间戳
     * @param integer $NeedRestart 是否待重启，作为有资源参数，静态参数修改未重启生效的标识；0-- 不需要重启、1--因为资源参数待重启、2--因静态参数重启、3--因资源和静态参数而待重启、4--因网络配置而待重启、5--因网络配置和资源配置而待重启、6--因网络配置和静态参数而待重启、7--因网络配置，资源参数和静态参数而待重启、
     * @param string $DataEngineName 绑定的引擎名称
     * @param string $DataEngineId 绑定的引擎ID
     * @param integer $DataEngineState 绑定的引擎状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessPointId 接入点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessPointName 接入点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccessPointState 接入点状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupType 资源组类型，console/ default
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineNetworkId 引擎网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NetworkConfigNames 网络配置名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameType AI类型资源组的框架类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageType AI类型资源组的镜像类型，内置：bulit-in，自定义：custom
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageName 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageVersion 镜像id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size AI资源组的可用资源上限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDefault 是否是默认资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupScene 资源组场景
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PythonCuSpec python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkSpecMode Spark类型资源组资源配置模式，fast：快速模式，custom：自定义模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SparkSize Spark类型资源组资源上限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SparkMinSize Spark类型资源组资源最小值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicDomain 自定义镜像容器镜像服务domain 名称
     * @param string $RegistryId 自定义镜像容器镜像服务tcr实例id
     * @param string $RegionName 容器镜像服务tcr所在地域
     * @param string $LaunchTime 资源组启动耗时
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
        if (array_key_exists("EngineResourceGroupId",$param) and $param["EngineResourceGroupId"] !== null) {
            $this->EngineResourceGroupId = $param["EngineResourceGroupId"];
        }

        if (array_key_exists("EngineResourceGroupName",$param) and $param["EngineResourceGroupName"] !== null) {
            $this->EngineResourceGroupName = $param["EngineResourceGroupName"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("ResourceGroupState",$param) and $param["ResourceGroupState"] !== null) {
            $this->ResourceGroupState = $param["ResourceGroupState"];
        }

        if (array_key_exists("AutoLaunch",$param) and $param["AutoLaunch"] !== null) {
            $this->AutoLaunch = $param["AutoLaunch"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoPauseTime",$param) and $param["AutoPauseTime"] !== null) {
            $this->AutoPauseTime = $param["AutoPauseTime"];
        }

        if (array_key_exists("DriverCuSpec",$param) and $param["DriverCuSpec"] !== null) {
            $this->DriverCuSpec = $param["DriverCuSpec"];
        }

        if (array_key_exists("ExecutorCuSpec",$param) and $param["ExecutorCuSpec"] !== null) {
            $this->ExecutorCuSpec = $param["ExecutorCuSpec"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("MinExecutorNums",$param) and $param["MinExecutorNums"] !== null) {
            $this->MinExecutorNums = $param["MinExecutorNums"];
        }

        if (array_key_exists("MaxExecutorNums",$param) and $param["MaxExecutorNums"] !== null) {
            $this->MaxExecutorNums = $param["MaxExecutorNums"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("DataEngineState",$param) and $param["DataEngineState"] !== null) {
            $this->DataEngineState = $param["DataEngineState"];
        }

        if (array_key_exists("AccessPointId",$param) and $param["AccessPointId"] !== null) {
            $this->AccessPointId = $param["AccessPointId"];
        }

        if (array_key_exists("AccessPointName",$param) and $param["AccessPointName"] !== null) {
            $this->AccessPointName = $param["AccessPointName"];
        }

        if (array_key_exists("AccessPointState",$param) and $param["AccessPointState"] !== null) {
            $this->AccessPointState = $param["AccessPointState"];
        }

        if (array_key_exists("ResourceGroupType",$param) and $param["ResourceGroupType"] !== null) {
            $this->ResourceGroupType = $param["ResourceGroupType"];
        }

        if (array_key_exists("EngineNetworkId",$param) and $param["EngineNetworkId"] !== null) {
            $this->EngineNetworkId = $param["EngineNetworkId"];
        }

        if (array_key_exists("NetworkConfigNames",$param) and $param["NetworkConfigNames"] !== null) {
            $this->NetworkConfigNames = $param["NetworkConfigNames"];
        }

        if (array_key_exists("FrameType",$param) and $param["FrameType"] !== null) {
            $this->FrameType = $param["FrameType"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("ResourceGroupScene",$param) and $param["ResourceGroupScene"] !== null) {
            $this->ResourceGroupScene = $param["ResourceGroupScene"];
        }

        if (array_key_exists("PythonCuSpec",$param) and $param["PythonCuSpec"] !== null) {
            $this->PythonCuSpec = $param["PythonCuSpec"];
        }

        if (array_key_exists("SparkSpecMode",$param) and $param["SparkSpecMode"] !== null) {
            $this->SparkSpecMode = $param["SparkSpecMode"];
        }

        if (array_key_exists("SparkSize",$param) and $param["SparkSize"] !== null) {
            $this->SparkSize = $param["SparkSize"];
        }

        if (array_key_exists("SparkMinSize",$param) and $param["SparkMinSize"] !== null) {
            $this->SparkMinSize = $param["SparkMinSize"];
        }

        if (array_key_exists("PublicDomain",$param) and $param["PublicDomain"] !== null) {
            $this->PublicDomain = $param["PublicDomain"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("LaunchTime",$param) and $param["LaunchTime"] !== null) {
            $this->LaunchTime = $param["LaunchTime"];
        }
    }
}
