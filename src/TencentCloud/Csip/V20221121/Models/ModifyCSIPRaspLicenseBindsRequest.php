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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCSIPRaspLicenseBinds请求参数结构体
 *
 * @method string getResourceId() 获取<p>资源ID（指定绑定到哪个订单）</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID（指定绑定到哪个订单）</p>
 * @method string getLicenseType() 获取<p>授权类型。枚举值：rasp(RASP) / enterprise_hp(旗舰版)。为空默认 rasp</p>
 * @method void setLicenseType(string $LicenseType) 设置<p>授权类型。枚举值：rasp(RASP) / enterprise_hp(旗舰版)。为空默认 rasp</p>
 * @method string getAssetType() 获取<p>资产类型。枚举值：host(主机) / cluster(容器节点) / eks(EKS超级节点)。为空默认 host</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型。枚举值：host(主机) / cluster(容器节点) / eks(EKS超级节点)。为空默认 host</p>
 * @method array getInstanceIDs() 获取<p>待绑定的实例ID列表（IsAll=true时可不传）</p>
 * @method void setInstanceIDs(array $InstanceIDs) 设置<p>待绑定的实例ID列表（IsAll=true时可不传）</p>
 * @method boolean getIsAll() 获取<p>是否绑定全部未绑定机器（true时自动算差集）</p>
 * @method void setIsAll(boolean $IsAll) 设置<p>是否绑定全部未绑定机器（true时自动算差集）</p>
 */
class ModifyCSIPRaspLicenseBindsRequest extends AbstractModel
{
    /**
     * @var string <p>资源ID（指定绑定到哪个订单）</p>
     */
    public $ResourceId;

    /**
     * @var string <p>授权类型。枚举值：rasp(RASP) / enterprise_hp(旗舰版)。为空默认 rasp</p>
     */
    public $LicenseType;

    /**
     * @var string <p>资产类型。枚举值：host(主机) / cluster(容器节点) / eks(EKS超级节点)。为空默认 host</p>
     */
    public $AssetType;

    /**
     * @var array <p>待绑定的实例ID列表（IsAll=true时可不传）</p>
     */
    public $InstanceIDs;

    /**
     * @var boolean <p>是否绑定全部未绑定机器（true时自动算差集）</p>
     */
    public $IsAll;

    /**
     * @param string $ResourceId <p>资源ID（指定绑定到哪个订单）</p>
     * @param string $LicenseType <p>授权类型。枚举值：rasp(RASP) / enterprise_hp(旗舰版)。为空默认 rasp</p>
     * @param string $AssetType <p>资产类型。枚举值：host(主机) / cluster(容器节点) / eks(EKS超级节点)。为空默认 host</p>
     * @param array $InstanceIDs <p>待绑定的实例ID列表（IsAll=true时可不传）</p>
     * @param boolean $IsAll <p>是否绑定全部未绑定机器（true时自动算差集）</p>
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

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }
    }
}
