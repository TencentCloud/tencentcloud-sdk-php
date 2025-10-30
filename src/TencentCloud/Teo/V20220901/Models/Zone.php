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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点详情。
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method string getAliasZoneName() 获取同名站点标识。允许输入数字、英文、"." 、"-" 和 "_" 组合，长度 200 个字符以内。
 * @method void setAliasZoneName(string $AliasZoneName) 设置同名站点标识。允许输入数字、英文、"." 、"-" 和 "_" 组合，长度 200 个字符以内。
 * @method string getArea() 获取站点加速区域，取值有：
<li> global：全球可用区；</li>
<li> mainland：中国大陆可用区；</li>
<li> overseas：全球可用区（不含中国大陆）。</li>
 * @method void setArea(string $Area) 设置站点加速区域，取值有：
<li> global：全球可用区；</li>
<li> mainland：中国大陆可用区；</li>
<li> overseas：全球可用区（不含中国大陆）。</li>
 * @method string getType() 获取站点接入类型，取值有：
<li> full：NS 接入类型；</li>
<li> partial：CNAME 接入类型；</li>
<li> noDomainAccess：无域名接入类型；</li>
<li>dnsPodAccess：DNSPod 托管类型，该类型要求您的域名已托管在腾讯云 DNSPod；</li>
<li> pages：Pages 类型。</li>
 * @method void setType(string $Type) 设置站点接入类型，取值有：
<li> full：NS 接入类型；</li>
<li> partial：CNAME 接入类型；</li>
<li> noDomainAccess：无域名接入类型；</li>
<li>dnsPodAccess：DNSPod 托管类型，该类型要求您的域名已托管在腾讯云 DNSPod；</li>
<li> pages：Pages 类型。</li>
 * @method array getTags() 获取站点关联的标签。
 * @method void setTags(array $Tags) 设置站点关联的标签。
 * @method array getResources() 获取计费资源列表。
 * @method void setResources(array $Resources) 设置计费资源列表。
 * @method NSDetail getNSDetail() 获取NS 类型站点详情。仅当 Type = full 时返回值。
 * @method void setNSDetail(NSDetail $NSDetail) 设置NS 类型站点详情。仅当 Type = full 时返回值。
 * @method CNAMEDetail getCNAMEDetail() 获取CNAME 类型站点详情。仅当 Type = partial 时返回值。
 * @method void setCNAMEDetail(CNAMEDetail $CNAMEDetail) 设置CNAME 类型站点详情。仅当 Type = partial 时返回值。
 * @method DNSPodDetail getDNSPodDetail() 获取DNSPod 托管类型站点详情。仅当 Type = dnsPodAccess 时返回值。
 * @method void setDNSPodDetail(DNSPodDetail $DNSPodDetail) 设置DNSPod 托管类型站点详情。仅当 Type = dnsPodAccess 时返回值。
 * @method string getCreatedOn() 获取站点创建时间。
 * @method void setCreatedOn(string $CreatedOn) 设置站点创建时间。
 * @method string getModifiedOn() 获取站点修改时间。
 * @method void setModifiedOn(string $ModifiedOn) 设置站点修改时间。
 * @method string getStatus() 获取站点状态，取值有：
<li> active：NS 已切换； </li>
<li> pending：NS 未切换；</li>
<li> moved：NS 已切走；</li>
<li> deactivated：被封禁。 </li>
<li> initializing：待绑定套餐。 </li>
 * @method void setStatus(string $Status) 设置站点状态，取值有：
<li> active：NS 已切换； </li>
<li> pending：NS 未切换；</li>
<li> moved：NS 已切走；</li>
<li> deactivated：被封禁。 </li>
<li> initializing：待绑定套餐。 </li>
 * @method string getCnameStatus() 获取CNAME 接入状态，取值有：
<li> finished：站点已验证；</li>
<li> pending：站点验证中。</li>
 * @method void setCnameStatus(string $CnameStatus) 设置CNAME 接入状态，取值有：
<li> finished：站点已验证；</li>
<li> pending：站点验证中。</li>
 * @method string getActiveStatus() 获取展示状态，取值有：
<li> active：已启用；</li>
<li> inactive：未生效；</li>
<li> paused：已停用。</li>
 * @method void setActiveStatus(string $ActiveStatus) 设置展示状态，取值有：
<li> active：已启用；</li>
<li> inactive：未生效；</li>
<li> paused：已停用。</li>
 * @method string getLockStatus() 获取锁定状态，取值有：<li> enable：正常，允许进行修改操作；</li><li> disable：锁定中，不允许进行修改操作；</li><li> plan_migrate：套餐迁移中，不允许进行修改操作。</li>
 * @method void setLockStatus(string $LockStatus) 设置锁定状态，取值有：<li> enable：正常，允许进行修改操作；</li><li> disable：锁定中，不允许进行修改操作；</li><li> plan_migrate：套餐迁移中，不允许进行修改操作。</li>
 * @method boolean getPaused() 获取站点是否关闭。
 * @method void setPaused(boolean $Paused) 设置站点是否关闭。
 * @method integer getIsFake() 获取是否伪站点（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段），取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>

 * @method void setIsFake(integer $IsFake) 设置是否伪站点（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段），取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>

 * @method string getCnameSpeedUp() 获取是否开启 CNAME 加速（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段），取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
 * @method void setCnameSpeedUp(string $CnameSpeedUp) 设置是否开启 CNAME 加速（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段），取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
 * @method OwnershipVerification getOwnershipVerification() 获取归属权验证信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) 设置归属权验证信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOriginalNameServers() 获取站点当前使用的 NS 列表。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
 * @method void setOriginalNameServers(array $OriginalNameServers) 设置站点当前使用的 NS 列表。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
 * @method array getNameServers() 获取腾讯云分配的 NS 列表。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
 * @method void setNameServers(array $NameServers) 设置腾讯云分配的 NS 列表。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
 * @method VanityNameServers getVanityNameServers() 获取用户自定义 NS 信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) 设置用户自定义 NS 信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVanityNameServersIps() 获取用户自定义 NS IP 信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVanityNameServersIps(array $VanityNameServersIps) 设置用户自定义 NS IP 信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
 */
class Zone extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var string 同名站点标识。允许输入数字、英文、"." 、"-" 和 "_" 组合，长度 200 个字符以内。
     */
    public $AliasZoneName;

    /**
     * @var string 站点加速区域，取值有：
<li> global：全球可用区；</li>
<li> mainland：中国大陆可用区；</li>
<li> overseas：全球可用区（不含中国大陆）。</li>
     */
    public $Area;

    /**
     * @var string 站点接入类型，取值有：
<li> full：NS 接入类型；</li>
<li> partial：CNAME 接入类型；</li>
<li> noDomainAccess：无域名接入类型；</li>
<li>dnsPodAccess：DNSPod 托管类型，该类型要求您的域名已托管在腾讯云 DNSPod；</li>
<li> pages：Pages 类型。</li>
     */
    public $Type;

    /**
     * @var array 站点关联的标签。
     */
    public $Tags;

    /**
     * @var array 计费资源列表。
     */
    public $Resources;

    /**
     * @var NSDetail NS 类型站点详情。仅当 Type = full 时返回值。
     */
    public $NSDetail;

    /**
     * @var CNAMEDetail CNAME 类型站点详情。仅当 Type = partial 时返回值。
     */
    public $CNAMEDetail;

    /**
     * @var DNSPodDetail DNSPod 托管类型站点详情。仅当 Type = dnsPodAccess 时返回值。
     */
    public $DNSPodDetail;

    /**
     * @var string 站点创建时间。
     */
    public $CreatedOn;

    /**
     * @var string 站点修改时间。
     */
    public $ModifiedOn;

    /**
     * @var string 站点状态，取值有：
<li> active：NS 已切换； </li>
<li> pending：NS 未切换；</li>
<li> moved：NS 已切走；</li>
<li> deactivated：被封禁。 </li>
<li> initializing：待绑定套餐。 </li>
     */
    public $Status;

    /**
     * @var string CNAME 接入状态，取值有：
<li> finished：站点已验证；</li>
<li> pending：站点验证中。</li>
     */
    public $CnameStatus;

    /**
     * @var string 展示状态，取值有：
<li> active：已启用；</li>
<li> inactive：未生效；</li>
<li> paused：已停用。</li>
     */
    public $ActiveStatus;

    /**
     * @var string 锁定状态，取值有：<li> enable：正常，允许进行修改操作；</li><li> disable：锁定中，不允许进行修改操作；</li><li> plan_migrate：套餐迁移中，不允许进行修改操作。</li>
     */
    public $LockStatus;

    /**
     * @var boolean 站点是否关闭。
     */
    public $Paused;

    /**
     * @var integer 是否伪站点（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段），取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>

     */
    public $IsFake;

    /**
     * @var string 是否开启 CNAME 加速（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段），取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
     */
    public $CnameSpeedUp;

    /**
     * @var OwnershipVerification 归属权验证信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnershipVerification;

    /**
     * @var array 站点当前使用的 NS 列表。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
     */
    public $OriginalNameServers;

    /**
     * @var array 腾讯云分配的 NS 列表。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
     */
    public $NameServers;

    /**
     * @var VanityNameServers 用户自定义 NS 信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VanityNameServers;

    /**
     * @var array 用户自定义 NS IP 信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VanityNameServersIps;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $ZoneName 站点名称。
     * @param string $AliasZoneName 同名站点标识。允许输入数字、英文、"." 、"-" 和 "_" 组合，长度 200 个字符以内。
     * @param string $Area 站点加速区域，取值有：
<li> global：全球可用区；</li>
<li> mainland：中国大陆可用区；</li>
<li> overseas：全球可用区（不含中国大陆）。</li>
     * @param string $Type 站点接入类型，取值有：
<li> full：NS 接入类型；</li>
<li> partial：CNAME 接入类型；</li>
<li> noDomainAccess：无域名接入类型；</li>
<li>dnsPodAccess：DNSPod 托管类型，该类型要求您的域名已托管在腾讯云 DNSPod；</li>
<li> pages：Pages 类型。</li>
     * @param array $Tags 站点关联的标签。
     * @param array $Resources 计费资源列表。
     * @param NSDetail $NSDetail NS 类型站点详情。仅当 Type = full 时返回值。
     * @param CNAMEDetail $CNAMEDetail CNAME 类型站点详情。仅当 Type = partial 时返回值。
     * @param DNSPodDetail $DNSPodDetail DNSPod 托管类型站点详情。仅当 Type = dnsPodAccess 时返回值。
     * @param string $CreatedOn 站点创建时间。
     * @param string $ModifiedOn 站点修改时间。
     * @param string $Status 站点状态，取值有：
<li> active：NS 已切换； </li>
<li> pending：NS 未切换；</li>
<li> moved：NS 已切走；</li>
<li> deactivated：被封禁。 </li>
<li> initializing：待绑定套餐。 </li>
     * @param string $CnameStatus CNAME 接入状态，取值有：
<li> finished：站点已验证；</li>
<li> pending：站点验证中。</li>
     * @param string $ActiveStatus 展示状态，取值有：
<li> active：已启用；</li>
<li> inactive：未生效；</li>
<li> paused：已停用。</li>
     * @param string $LockStatus 锁定状态，取值有：<li> enable：正常，允许进行修改操作；</li><li> disable：锁定中，不允许进行修改操作；</li><li> plan_migrate：套餐迁移中，不允许进行修改操作。</li>
     * @param boolean $Paused 站点是否关闭。
     * @param integer $IsFake 是否伪站点（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段），取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>

     * @param string $CnameSpeedUp 是否开启 CNAME 加速（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段），取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
     * @param OwnershipVerification $OwnershipVerification 归属权验证信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OriginalNameServers 站点当前使用的 NS 列表。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
     * @param array $NameServers 腾讯云分配的 NS 列表。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
     * @param VanityNameServers $VanityNameServers 用户自定义 NS 信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VanityNameServersIps 用户自定义 NS IP 信息。（该字段为历史保留字段，已不再维护，请根据站点类型参考对应字段）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("NSDetail",$param) and $param["NSDetail"] !== null) {
            $this->NSDetail = new NSDetail();
            $this->NSDetail->deserialize($param["NSDetail"]);
        }

        if (array_key_exists("CNAMEDetail",$param) and $param["CNAMEDetail"] !== null) {
            $this->CNAMEDetail = new CNAMEDetail();
            $this->CNAMEDetail->deserialize($param["CNAMEDetail"]);
        }

        if (array_key_exists("DNSPodDetail",$param) and $param["DNSPodDetail"] !== null) {
            $this->DNSPodDetail = new DNSPodDetail();
            $this->DNSPodDetail->deserialize($param["DNSPodDetail"]);
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CnameStatus",$param) and $param["CnameStatus"] !== null) {
            $this->CnameStatus = $param["CnameStatus"];
        }

        if (array_key_exists("ActiveStatus",$param) and $param["ActiveStatus"] !== null) {
            $this->ActiveStatus = $param["ActiveStatus"];
        }

        if (array_key_exists("LockStatus",$param) and $param["LockStatus"] !== null) {
            $this->LockStatus = $param["LockStatus"];
        }

        if (array_key_exists("Paused",$param) and $param["Paused"] !== null) {
            $this->Paused = $param["Paused"];
        }

        if (array_key_exists("IsFake",$param) and $param["IsFake"] !== null) {
            $this->IsFake = $param["IsFake"];
        }

        if (array_key_exists("CnameSpeedUp",$param) and $param["CnameSpeedUp"] !== null) {
            $this->CnameSpeedUp = $param["CnameSpeedUp"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }

        if (array_key_exists("VanityNameServers",$param) and $param["VanityNameServers"] !== null) {
            $this->VanityNameServers = new VanityNameServers();
            $this->VanityNameServers->deserialize($param["VanityNameServers"]);
        }

        if (array_key_exists("VanityNameServersIps",$param) and $param["VanityNameServersIps"] !== null) {
            $this->VanityNameServersIps = [];
            foreach ($param["VanityNameServersIps"] as $key => $value){
                $obj = new VanityNameServersIps();
                $obj->deserialize($value);
                array_push($this->VanityNameServersIps, $obj);
            }
        }
    }
}
