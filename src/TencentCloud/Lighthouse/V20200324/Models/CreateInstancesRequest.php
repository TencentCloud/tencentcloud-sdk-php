<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances请求参数结构体
 *
 * @method string getBundleId() 获取套餐ID。可以通过调用 [查询套餐](https://cloud.tencent.com/document/api/1207/47575) 接口获取。
 * @method void setBundleId(string $BundleId) 设置套餐ID。可以通过调用 [查询套餐](https://cloud.tencent.com/document/api/1207/47575) 接口获取。
 * @method string getBlueprintId() 获取镜像ID。可以通过调用 [查询镜像信息](https://cloud.tencent.com/document/api/1207/47689) 接口获取。
 * @method void setBlueprintId(string $BlueprintId) 设置镜像ID。可以通过调用 [查询镜像信息](https://cloud.tencent.com/document/api/1207/47689) 接口获取。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取当前实例仅支持预付费模式，即包年包月相关参数设置，单位（月）。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。该参数必传。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置当前实例仅支持预付费模式，即包年包月相关参数设置，单位（月）。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。该参数必传。
 * @method string getInstanceName() 获取实例显示名称。
 * @method void setInstanceName(string $InstanceName) 设置实例显示名称。
 * @method integer getInstanceCount() 获取购买实例数量。包年包月实例取值范围：[1，30]。默认取值：1。指定购买实例的数量不能超过用户所能购买的剩余配额数量
 * @method void setInstanceCount(integer $InstanceCount) 设置购买实例数量。包年包月实例取值范围：[1，30]。默认取值：1。指定购买实例的数量不能超过用户所能购买的剩余配额数量
 * @method array getZones() 获取可用区列表。默认为随机可用区
 * @method void setZones(array $Zones) 设置可用区列表。默认为随机可用区
 * @method boolean getDryRun() 获取是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method LoginConfiguration getLoginConfiguration() 获取实例登录密码信息配置。本字段目前仅支持WINDOWS实例进行密码设置。默认缺失情况下代表用户选择实例创建后设置登录密码。
 * @method void setLoginConfiguration(LoginConfiguration $LoginConfiguration) 设置实例登录密码信息配置。本字段目前仅支持WINDOWS实例进行密码设置。默认缺失情况下代表用户选择实例创建后设置登录密码。
 * @method array getContainers() 获取要创建的容器配置列表。
 * @method void setContainers(array $Containers) 设置要创建的容器配置列表。
 * @method boolean getAutoVoucher() 获取是否自动使用代金券。默认不使用。
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否自动使用代金券。默认不使用。
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string 套餐ID。可以通过调用 [查询套餐](https://cloud.tencent.com/document/api/1207/47575) 接口获取。
     */
    public $BundleId;

    /**
     * @var string 镜像ID。可以通过调用 [查询镜像信息](https://cloud.tencent.com/document/api/1207/47689) 接口获取。
     */
    public $BlueprintId;

    /**
     * @var InstanceChargePrepaid 当前实例仅支持预付费模式，即包年包月相关参数设置，单位（月）。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。该参数必传。
     */
    public $InstanceChargePrepaid;

    /**
     * @var string 实例显示名称。
     */
    public $InstanceName;

    /**
     * @var integer 购买实例数量。包年包月实例取值范围：[1，30]。默认取值：1。指定购买实例的数量不能超过用户所能购买的剩余配额数量
     */
    public $InstanceCount;

    /**
     * @var array 可用区列表。默认为随机可用区
     */
    public $Zones;

    /**
     * @var boolean 是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例
     */
    public $DryRun;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     */
    public $ClientToken;

    /**
     * @var LoginConfiguration 实例登录密码信息配置。本字段目前仅支持WINDOWS实例进行密码设置。默认缺失情况下代表用户选择实例创建后设置登录密码。
     */
    public $LoginConfiguration;

    /**
     * @var array 要创建的容器配置列表。
     */
    public $Containers;

    /**
     * @var boolean 是否自动使用代金券。默认不使用。
     */
    public $AutoVoucher;

    /**
     * @param string $BundleId 套餐ID。可以通过调用 [查询套餐](https://cloud.tencent.com/document/api/1207/47575) 接口获取。
     * @param string $BlueprintId 镜像ID。可以通过调用 [查询镜像信息](https://cloud.tencent.com/document/api/1207/47689) 接口获取。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 当前实例仅支持预付费模式，即包年包月相关参数设置，单位（月）。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。该参数必传。
     * @param string $InstanceName 实例显示名称。
     * @param integer $InstanceCount 购买实例数量。包年包月实例取值范围：[1，30]。默认取值：1。指定购买实例的数量不能超过用户所能购买的剩余配额数量
     * @param array $Zones 可用区列表。默认为随机可用区
     * @param boolean $DryRun 是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     * @param LoginConfiguration $LoginConfiguration 实例登录密码信息配置。本字段目前仅支持WINDOWS实例进行密码设置。默认缺失情况下代表用户选择实例创建后设置登录密码。
     * @param array $Containers 要创建的容器配置列表。
     * @param boolean $AutoVoucher 是否自动使用代金券。默认不使用。
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
        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("LoginConfiguration",$param) and $param["LoginConfiguration"] !== null) {
            $this->LoginConfiguration = new LoginConfiguration();
            $this->LoginConfiguration->deserialize($param["LoginConfiguration"]);
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new DockerContainerConfiguration();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
