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
 * CreateStandardEngineResourceGroup请求参数结构体
 *
 * @method string getEngineResourceGroupName() 获取标准引擎资源组名称
 * @method void setEngineResourceGroupName(string $EngineResourceGroupName) 设置标准引擎资源组名称
 * @method string getDataEngineName() 获取标准引擎名称
 * @method void setDataEngineName(string $DataEngineName) 设置标准引擎名称
 * @method integer getAutoLaunch() 获取自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
 * @method void setAutoLaunch(integer $AutoLaunch) 设置自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
 * @method integer getAutoPause() 获取自动挂起资源组。0-自动挂起，1-不自动挂起
 * @method void setAutoPause(integer $AutoPause) 设置自动挂起资源组。0-自动挂起，1-不自动挂起
 * @method string getDriverCuSpec() 获取driver的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
 * @method void setDriverCuSpec(string $DriverCuSpec) 设置driver的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
 * @method string getExecutorCuSpec() 获取executor的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
 * @method void setExecutorCuSpec(string $ExecutorCuSpec) 设置executor的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
 * @method integer getMinExecutorNums() 获取executor最小数量，
 * @method void setMinExecutorNums(integer $MinExecutorNums) 设置executor最小数量，
 * @method integer getMaxExecutorNums() 获取executor最大数量
 * @method void setMaxExecutorNums(integer $MaxExecutorNums) 设置executor最大数量
 * @method integer getIsLaunchNow() 获取创建资源组后是否直接拉起，0-拉起，1-不拉起
 * @method void setIsLaunchNow(integer $IsLaunchNow) 设置创建资源组后是否直接拉起，0-拉起，1-不拉起
 * @method integer getAutoPauseTime() 获取自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
 * @method void setAutoPauseTime(integer $AutoPauseTime) 设置自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
 * @method array getStaticConfigPairs() 获取资源组静态参数，需要重启资源组生效
 * @method void setStaticConfigPairs(array $StaticConfigPairs) 设置资源组静态参数，需要重启资源组生效
 * @method array getDynamicConfigPairs() 获取资源组动态参数，下一个任务生效。
 * @method void setDynamicConfigPairs(array $DynamicConfigPairs) 设置资源组动态参数，下一个任务生效。
 * @method integer getMaxConcurrency() 获取任务并发数，默人是5个
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置任务并发数，默人是5个
 * @method array getNetworkConfigNames() 获取网络配置名称
 * @method void setNetworkConfigNames(array $NetworkConfigNames) 设置网络配置名称
 * @method string getPublicDomain() 获取自定义镜像域名
 * @method void setPublicDomain(string $PublicDomain) 设置自定义镜像域名
 * @method string getRegistryId() 获取自定义镜像实例id
 * @method void setRegistryId(string $RegistryId) 设置自定义镜像实例id
 * @method string getFrameType() 获取AI类型资源组的框架类型，machine-learning，python，spark-ml，不填默认为machine-learning
 * @method void setFrameType(string $FrameType) 设置AI类型资源组的框架类型，machine-learning，python，spark-ml，不填默认为machine-learning
 * @method string getImageType() 获取镜像类型，bulit-in：内置，custom：自定义，不填默认为bulit-in
 * @method void setImageType(string $ImageType) 设置镜像类型，bulit-in：内置，custom：自定义，不填默认为bulit-in
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageVersion() 获取镜像id
 * @method void setImageVersion(string $ImageVersion) 设置镜像id
 * @method integer getSize() 获取AI资源组有效，资源组可用资源上限，该值需要小于引擎资源上限
 * @method void setSize(integer $Size) 设置AI资源组有效，资源组可用资源上限，该值需要小于引擎资源上限
 * @method string getResourceGroupScene() 获取资源组场景
 * @method void setResourceGroupScene(string $ResourceGroupScene) 设置资源组场景
 * @method string getRegionName() 获取自定义镜像所在地域
 * @method void setRegionName(string $RegionName) 设置自定义镜像所在地域
 * @method string getPythonCuSpec() 获取python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
 * @method void setPythonCuSpec(string $PythonCuSpec) 设置python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
 * @method string getSparkSpecMode() 获取仅SQL资源组资源配置模式，fast：快速模式，custom：自定义模式
 * @method void setSparkSpecMode(string $SparkSpecMode) 设置仅SQL资源组资源配置模式，fast：快速模式，custom：自定义模式
 * @method integer getSparkSize() 获取仅SQL资源组资源上限，仅用于快速模块
 * @method void setSparkSize(integer $SparkSize) 设置仅SQL资源组资源上限，仅用于快速模块
 */
class CreateStandardEngineResourceGroupRequest extends AbstractModel
{
    /**
     * @var string 标准引擎资源组名称
     */
    public $EngineResourceGroupName;

    /**
     * @var string 标准引擎名称
     */
    public $DataEngineName;

    /**
     * @var integer 自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
     */
    public $AutoLaunch;

    /**
     * @var integer 自动挂起资源组。0-自动挂起，1-不自动挂起
     */
    public $AutoPause;

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
     * @var integer executor最小数量，
     */
    public $MinExecutorNums;

    /**
     * @var integer executor最大数量
     */
    public $MaxExecutorNums;

    /**
     * @var integer 创建资源组后是否直接拉起，0-拉起，1-不拉起
     */
    public $IsLaunchNow;

    /**
     * @var integer 自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
     */
    public $AutoPauseTime;

    /**
     * @var array 资源组静态参数，需要重启资源组生效
     */
    public $StaticConfigPairs;

    /**
     * @var array 资源组动态参数，下一个任务生效。
     */
    public $DynamicConfigPairs;

    /**
     * @var integer 任务并发数，默人是5个
     */
    public $MaxConcurrency;

    /**
     * @var array 网络配置名称
     */
    public $NetworkConfigNames;

    /**
     * @var string 自定义镜像域名
     */
    public $PublicDomain;

    /**
     * @var string 自定义镜像实例id
     */
    public $RegistryId;

    /**
     * @var string AI类型资源组的框架类型，machine-learning，python，spark-ml，不填默认为machine-learning
     */
    public $FrameType;

    /**
     * @var string 镜像类型，bulit-in：内置，custom：自定义，不填默认为bulit-in
     */
    public $ImageType;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像id
     */
    public $ImageVersion;

    /**
     * @var integer AI资源组有效，资源组可用资源上限，该值需要小于引擎资源上限
     */
    public $Size;

    /**
     * @var string 资源组场景
     */
    public $ResourceGroupScene;

    /**
     * @var string 自定义镜像所在地域
     */
    public $RegionName;

    /**
     * @var string python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
     */
    public $PythonCuSpec;

    /**
     * @var string 仅SQL资源组资源配置模式，fast：快速模式，custom：自定义模式
     */
    public $SparkSpecMode;

    /**
     * @var integer 仅SQL资源组资源上限，仅用于快速模块
     */
    public $SparkSize;

    /**
     * @param string $EngineResourceGroupName 标准引擎资源组名称
     * @param string $DataEngineName 标准引擎名称
     * @param integer $AutoLaunch 自动启动，（任务提交自动拉起资源组）0-自动启动，1-不自动启动
     * @param integer $AutoPause 自动挂起资源组。0-自动挂起，1-不自动挂起
     * @param string $DriverCuSpec driver的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
     * @param string $ExecutorCuSpec executor的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
     * @param integer $MinExecutorNums executor最小数量，
     * @param integer $MaxExecutorNums executor最大数量
     * @param integer $IsLaunchNow 创建资源组后是否直接拉起，0-拉起，1-不拉起
     * @param integer $AutoPauseTime 自动挂起时间，单位分钟，取值范围在1-999（在无任务AutoPauseTime后，资源组自动挂起）
     * @param array $StaticConfigPairs 资源组静态参数，需要重启资源组生效
     * @param array $DynamicConfigPairs 资源组动态参数，下一个任务生效。
     * @param integer $MaxConcurrency 任务并发数，默人是5个
     * @param array $NetworkConfigNames 网络配置名称
     * @param string $PublicDomain 自定义镜像域名
     * @param string $RegistryId 自定义镜像实例id
     * @param string $FrameType AI类型资源组的框架类型，machine-learning，python，spark-ml，不填默认为machine-learning
     * @param string $ImageType 镜像类型，bulit-in：内置，custom：自定义，不填默认为bulit-in
     * @param string $ImageName 镜像名称
     * @param string $ImageVersion 镜像id
     * @param integer $Size AI资源组有效，资源组可用资源上限，该值需要小于引擎资源上限
     * @param string $ResourceGroupScene 资源组场景
     * @param string $RegionName 自定义镜像所在地域
     * @param string $PythonCuSpec python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
     * @param string $SparkSpecMode 仅SQL资源组资源配置模式，fast：快速模式，custom：自定义模式
     * @param integer $SparkSize 仅SQL资源组资源上限，仅用于快速模块
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
        if (array_key_exists("EngineResourceGroupName",$param) and $param["EngineResourceGroupName"] !== null) {
            $this->EngineResourceGroupName = $param["EngineResourceGroupName"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("AutoLaunch",$param) and $param["AutoLaunch"] !== null) {
            $this->AutoLaunch = $param["AutoLaunch"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("DriverCuSpec",$param) and $param["DriverCuSpec"] !== null) {
            $this->DriverCuSpec = $param["DriverCuSpec"];
        }

        if (array_key_exists("ExecutorCuSpec",$param) and $param["ExecutorCuSpec"] !== null) {
            $this->ExecutorCuSpec = $param["ExecutorCuSpec"];
        }

        if (array_key_exists("MinExecutorNums",$param) and $param["MinExecutorNums"] !== null) {
            $this->MinExecutorNums = $param["MinExecutorNums"];
        }

        if (array_key_exists("MaxExecutorNums",$param) and $param["MaxExecutorNums"] !== null) {
            $this->MaxExecutorNums = $param["MaxExecutorNums"];
        }

        if (array_key_exists("IsLaunchNow",$param) and $param["IsLaunchNow"] !== null) {
            $this->IsLaunchNow = $param["IsLaunchNow"];
        }

        if (array_key_exists("AutoPauseTime",$param) and $param["AutoPauseTime"] !== null) {
            $this->AutoPauseTime = $param["AutoPauseTime"];
        }

        if (array_key_exists("StaticConfigPairs",$param) and $param["StaticConfigPairs"] !== null) {
            $this->StaticConfigPairs = [];
            foreach ($param["StaticConfigPairs"] as $key => $value){
                $obj = new EngineResourceGroupConfigPair();
                $obj->deserialize($value);
                array_push($this->StaticConfigPairs, $obj);
            }
        }

        if (array_key_exists("DynamicConfigPairs",$param) and $param["DynamicConfigPairs"] !== null) {
            $this->DynamicConfigPairs = [];
            foreach ($param["DynamicConfigPairs"] as $key => $value){
                $obj = new EngineResourceGroupConfigPair();
                $obj->deserialize($value);
                array_push($this->DynamicConfigPairs, $obj);
            }
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("NetworkConfigNames",$param) and $param["NetworkConfigNames"] !== null) {
            $this->NetworkConfigNames = $param["NetworkConfigNames"];
        }

        if (array_key_exists("PublicDomain",$param) and $param["PublicDomain"] !== null) {
            $this->PublicDomain = $param["PublicDomain"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
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

        if (array_key_exists("ResourceGroupScene",$param) and $param["ResourceGroupScene"] !== null) {
            $this->ResourceGroupScene = $param["ResourceGroupScene"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
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
    }
}
