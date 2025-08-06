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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 缓存卷。
 *
 * @method string getVolumeId() 获取缓存卷ID。
 * @method void setVolumeId(string $VolumeId) 设置缓存卷ID。
 * @method string getName() 获取名称。
 * @method void setName(string $Name) 设置名称。
 * @method string getDescription() 获取描述。
 * @method void setDescription(string $Description) 设置描述。
 * @method string getEnvironmentId() 获取环境ID。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID。
 * @method string getType() 获取缓存卷类型，取值范围：
* SHARED：多点挂载共享存储
 * @method void setType(string $Type) 设置缓存卷类型，取值范围：
* SHARED：多点挂载共享存储
 * @method string getSpec() 获取缓存卷规格，取值范围：

- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
 * @method void setSpec(string $Spec) 设置缓存卷规格，取值范围：

- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
 * @method integer getCapacity() 获取缓存卷大小（GB）。
 * @method void setCapacity(integer $Capacity) 设置缓存卷大小（GB）。
 * @method integer getUsage() 获取缓存卷使用量（Byte）。
 * @method void setUsage(integer $Usage) 设置缓存卷使用量（Byte）。
 * @method float getBandwidthLimit() 获取缓存卷吞吐上限（MiB/s）。
 * @method void setBandwidthLimit(float $BandwidthLimit) 设置缓存卷吞吐上限（MiB/s）。
 * @method string getDefaultMountPath() 获取默认挂载路径。
 * @method void setDefaultMountPath(string $DefaultMountPath) 设置默认挂载路径。
 * @method boolean getIsDefault() 获取是否为默认缓存卷。
 * @method void setIsDefault(boolean $IsDefault) 设置是否为默认缓存卷。
 * @method string getStatus() 获取状态。
 * @method void setStatus(string $Status) 设置状态。
 * @method VolumeAutoScaleUpRule getAutoScaleUpRule() 获取turbo自动扩容策略
 * @method void setAutoScaleUpRule(VolumeAutoScaleUpRule $AutoScaleUpRule) 设置turbo自动扩容策略
 * @method string getMetaType() 获取turbo元数据属性
 * @method void setMetaType(string $MetaType) 设置turbo元数据属性
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 */
class Volume extends AbstractModel
{
    /**
     * @var string 缓存卷ID。
     */
    public $VolumeId;

    /**
     * @var string 名称。
     */
    public $Name;

    /**
     * @var string 描述。
     */
    public $Description;

    /**
     * @var string 环境ID。
     */
    public $EnvironmentId;

    /**
     * @var string 缓存卷类型，取值范围：
* SHARED：多点挂载共享存储
     */
    public $Type;

    /**
     * @var string 缓存卷规格，取值范围：

- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
     */
    public $Spec;

    /**
     * @var integer 缓存卷大小（GB）。
     */
    public $Capacity;

    /**
     * @var integer 缓存卷使用量（Byte）。
     */
    public $Usage;

    /**
     * @var float 缓存卷吞吐上限（MiB/s）。
     */
    public $BandwidthLimit;

    /**
     * @var string 默认挂载路径。
     */
    public $DefaultMountPath;

    /**
     * @var boolean 是否为默认缓存卷。
     */
    public $IsDefault;

    /**
     * @var string 状态。
     */
    public $Status;

    /**
     * @var VolumeAutoScaleUpRule turbo自动扩容策略
     */
    public $AutoScaleUpRule;

    /**
     * @var string turbo元数据属性
     */
    public $MetaType;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @param string $VolumeId 缓存卷ID。
     * @param string $Name 名称。
     * @param string $Description 描述。
     * @param string $EnvironmentId 环境ID。
     * @param string $Type 缓存卷类型，取值范围：
* SHARED：多点挂载共享存储
     * @param string $Spec 缓存卷规格，取值范围：

- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
     * @param integer $Capacity 缓存卷大小（GB）。
     * @param integer $Usage 缓存卷使用量（Byte）。
     * @param float $BandwidthLimit 缓存卷吞吐上限（MiB/s）。
     * @param string $DefaultMountPath 默认挂载路径。
     * @param boolean $IsDefault 是否为默认缓存卷。
     * @param string $Status 状态。
     * @param VolumeAutoScaleUpRule $AutoScaleUpRule turbo自动扩容策略
     * @param string $MetaType turbo元数据属性
     * @param string $Zone 可用区
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
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            $this->VolumeId = $param["VolumeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("BandwidthLimit",$param) and $param["BandwidthLimit"] !== null) {
            $this->BandwidthLimit = $param["BandwidthLimit"];
        }

        if (array_key_exists("DefaultMountPath",$param) and $param["DefaultMountPath"] !== null) {
            $this->DefaultMountPath = $param["DefaultMountPath"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AutoScaleUpRule",$param) and $param["AutoScaleUpRule"] !== null) {
            $this->AutoScaleUpRule = new VolumeAutoScaleUpRule();
            $this->AutoScaleUpRule->deserialize($param["AutoScaleUpRule"]);
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
