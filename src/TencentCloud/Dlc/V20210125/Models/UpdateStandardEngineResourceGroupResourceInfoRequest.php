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
 * UpdateStandardEngineResourceGroupResourceInfo请求参数结构体
 *
 * @method string getEngineResourceGroupName() 获取引擎资源组名称
 * @method void setEngineResourceGroupName(string $EngineResourceGroupName) 设置引擎资源组名称
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
 * @method integer getIsEffectiveNow() 获取是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
 * @method void setIsEffectiveNow(integer $IsEffectiveNow) 设置是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
 * @method integer getSize() 获取AI资源组资源上限
 * @method void setSize(integer $Size) 设置AI资源组资源上限
 * @method string getImageType() 获取镜像类型，内置镜像：built-in，自定义镜像：custom
 * @method void setImageType(string $ImageType) 设置镜像类型，内置镜像：built-in，自定义镜像：custom
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageVersion() 获取镜像版本，镜像id
 * @method void setImageVersion(string $ImageVersion) 设置镜像版本，镜像id
 * @method string getFrameType() 获取框架类型
 * @method void setFrameType(string $FrameType) 设置框架类型
 * @method string getPublicDomain() 获取自定义镜像域名
 * @method void setPublicDomain(string $PublicDomain) 设置自定义镜像域名
 * @method string getRegistryId() 获取自定义镜像实例id
 * @method void setRegistryId(string $RegistryId) 设置自定义镜像实例id
 * @method string getRegionName() 获取自定义镜像所属地域
 * @method void setRegionName(string $RegionName) 设置自定义镜像所属地域
 * @method string getPythonCuSpec() 获取python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
 * @method void setPythonCuSpec(string $PythonCuSpec) 设置python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
 * @method string getSparkSpecMode() 获取仅SQL资源组资源配置模式，fast：快速模式，custom：自定义模式
 * @method void setSparkSpecMode(string $SparkSpecMode) 设置仅SQL资源组资源配置模式，fast：快速模式，custom：自定义模式
 * @method integer getSparkSize() 获取仅SQL资源组资源上限，仅用于快速模式
 * @method void setSparkSize(integer $SparkSize) 设置仅SQL资源组资源上限，仅用于快速模式
 * @method integer getDriverGPUSpec() 获取gpuDriver规格
 * @method void setDriverGPUSpec(integer $DriverGPUSpec) 设置gpuDriver规格
 * @method integer getExecutorGPUSpec() 获取gpuExcutor 规格
 * @method void setExecutorGPUSpec(integer $ExecutorGPUSpec) 设置gpuExcutor 规格
 * @method integer getGPULimitSize() 获取gpu 上限
 * @method void setGPULimitSize(integer $GPULimitSize) 设置gpu 上限
 * @method integer getGPUSize() 获取gpu 规格
 * @method void setGPUSize(integer $GPUSize) 设置gpu 规格
 * @method integer getPythonGPUSpec() 获取gpupod 规格
 * @method void setPythonGPUSpec(integer $PythonGPUSpec) 设置gpupod 规格
 */
class UpdateStandardEngineResourceGroupResourceInfoRequest extends AbstractModel
{
    /**
     * @var string 引擎资源组名称
     */
    public $EngineResourceGroupName;

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
     * @var integer 是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
     */
    public $IsEffectiveNow;

    /**
     * @var integer AI资源组资源上限
     */
    public $Size;

    /**
     * @var string 镜像类型，内置镜像：built-in，自定义镜像：custom
     */
    public $ImageType;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像版本，镜像id
     */
    public $ImageVersion;

    /**
     * @var string 框架类型
     */
    public $FrameType;

    /**
     * @var string 自定义镜像域名
     */
    public $PublicDomain;

    /**
     * @var string 自定义镜像实例id
     */
    public $RegistryId;

    /**
     * @var string 自定义镜像所属地域
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
     * @var integer 仅SQL资源组资源上限，仅用于快速模式
     */
    public $SparkSize;

    /**
     * @var integer gpuDriver规格
     */
    public $DriverGPUSpec;

    /**
     * @var integer gpuExcutor 规格
     */
    public $ExecutorGPUSpec;

    /**
     * @var integer gpu 上限
     */
    public $GPULimitSize;

    /**
     * @var integer gpu 规格
     */
    public $GPUSize;

    /**
     * @var integer gpupod 规格
     */
    public $PythonGPUSpec;

    /**
     * @param string $EngineResourceGroupName 引擎资源组名称
     * @param string $DriverCuSpec driver的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
     * @param string $ExecutorCuSpec executor的cu规格：
当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu），内存型cu为cpu：men=1:8，m.small（1cu内存型）、m.medium（2cu内存型）、m.large（4cu内存型）、m.xlarge（8cu内存型）
     * @param integer $MinExecutorNums executor最小数量，
     * @param integer $MaxExecutorNums executor最大数量
     * @param integer $IsEffectiveNow 是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
     * @param integer $Size AI资源组资源上限
     * @param string $ImageType 镜像类型，内置镜像：built-in，自定义镜像：custom
     * @param string $ImageName 镜像名称
     * @param string $ImageVersion 镜像版本，镜像id
     * @param string $FrameType 框架类型
     * @param string $PublicDomain 自定义镜像域名
     * @param string $RegistryId 自定义镜像实例id
     * @param string $RegionName 自定义镜像所属地域
     * @param string $PythonCuSpec python类型资源组python单机节点资源上限，该值要小于资源组的资源上限.small:1cu medium:2cu large:4cu xlarge:8cu 4xlarge:16cu 8xlarge:32cu 16xlarge:64cu，如果是高内存型资源，在类型前面加上m.
     * @param string $SparkSpecMode 仅SQL资源组资源配置模式，fast：快速模式，custom：自定义模式
     * @param integer $SparkSize 仅SQL资源组资源上限，仅用于快速模式
     * @param integer $DriverGPUSpec gpuDriver规格
     * @param integer $ExecutorGPUSpec gpuExcutor 规格
     * @param integer $GPULimitSize gpu 上限
     * @param integer $GPUSize gpu 规格
     * @param integer $PythonGPUSpec gpupod 规格
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

        if (array_key_exists("IsEffectiveNow",$param) and $param["IsEffectiveNow"] !== null) {
            $this->IsEffectiveNow = $param["IsEffectiveNow"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
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

        if (array_key_exists("FrameType",$param) and $param["FrameType"] !== null) {
            $this->FrameType = $param["FrameType"];
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

        if (array_key_exists("PythonCuSpec",$param) and $param["PythonCuSpec"] !== null) {
            $this->PythonCuSpec = $param["PythonCuSpec"];
        }

        if (array_key_exists("SparkSpecMode",$param) and $param["SparkSpecMode"] !== null) {
            $this->SparkSpecMode = $param["SparkSpecMode"];
        }

        if (array_key_exists("SparkSize",$param) and $param["SparkSize"] !== null) {
            $this->SparkSize = $param["SparkSize"];
        }

        if (array_key_exists("DriverGPUSpec",$param) and $param["DriverGPUSpec"] !== null) {
            $this->DriverGPUSpec = $param["DriverGPUSpec"];
        }

        if (array_key_exists("ExecutorGPUSpec",$param) and $param["ExecutorGPUSpec"] !== null) {
            $this->ExecutorGPUSpec = $param["ExecutorGPUSpec"];
        }

        if (array_key_exists("GPULimitSize",$param) and $param["GPULimitSize"] !== null) {
            $this->GPULimitSize = $param["GPULimitSize"];
        }

        if (array_key_exists("GPUSize",$param) and $param["GPUSize"] !== null) {
            $this->GPUSize = $param["GPUSize"];
        }

        if (array_key_exists("PythonGPUSpec",$param) and $param["PythonGPUSpec"] !== null) {
            $this->PythonGPUSpec = $param["PythonGPUSpec"];
        }
    }
}
