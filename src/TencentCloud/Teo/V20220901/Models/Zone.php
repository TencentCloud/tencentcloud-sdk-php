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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点信息
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method array getOriginalNameServers() 获取站点当前使用的 NS 列表。
 * @method void setOriginalNameServers(array $OriginalNameServers) 设置站点当前使用的 NS 列表。
 * @method array getNameServers() 获取腾讯云分配的 NS 列表。
 * @method void setNameServers(array $NameServers) 设置腾讯云分配的 NS 列表。
 * @method string getStatus() 获取站点状态，取值有：
<li> active：NS 已切换； </li>
<li> pending：NS 未切换；</li>
<li> moved：NS 已切走；</li>
<li> deactivated：被封禁。 </li>
 * @method void setStatus(string $Status) 设置站点状态，取值有：
<li> active：NS 已切换； </li>
<li> pending：NS 未切换；</li>
<li> moved：NS 已切走；</li>
<li> deactivated：被封禁。 </li>
 * @method string getType() 获取站点接入方式，取值有
<li> full：NS 接入； </li>
<li> partial：CNAME 接入。</li>
 * @method void setType(string $Type) 设置站点接入方式，取值有
<li> full：NS 接入； </li>
<li> partial：CNAME 接入。</li>
 * @method boolean getPaused() 获取站点是否关闭。
 * @method void setPaused(boolean $Paused) 设置站点是否关闭。
 * @method string getCnameSpeedUp() 获取是否开启 CNAME 加速，取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
 * @method void setCnameSpeedUp(string $CnameSpeedUp) 设置是否开启 CNAME 加速，取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
 * @method string getCnameStatus() 获取CNAME 接入状态，取值有：
<li> finished：站点已验证；</li>
<li> pending：站点验证中。</li>
 * @method void setCnameStatus(string $CnameStatus) 设置CNAME 接入状态，取值有：
<li> finished：站点已验证；</li>
<li> pending：站点验证中。</li>
 * @method array getTags() 获取资源标签列表。
 * @method void setTags(array $Tags) 设置资源标签列表。
 * @method array getResources() 获取计费资源列表。
 * @method void setResources(array $Resources) 设置计费资源列表。
 * @method string getCreatedOn() 获取站点创建时间。
 * @method void setCreatedOn(string $CreatedOn) 设置站点创建时间。
 * @method string getModifiedOn() 获取站点修改时间。
 * @method void setModifiedOn(string $ModifiedOn) 设置站点修改时间。
 * @method string getArea() 获取站点接入地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
 * @method void setArea(string $Area) 设置站点接入地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
 * @method VanityNameServers getVanityNameServers() 获取用户自定义 NS 信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) 设置用户自定义 NS 信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVanityNameServersIps() 获取用户自定义 NS IP 信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVanityNameServersIps(array $VanityNameServersIps) 设置用户自定义 NS IP 信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActiveStatus() 获取展示状态，取值有：
<li> active：已启用；</li>
<li> inactive：未生效；</li>
<li> paused：已停用。</li>
 * @method void setActiveStatus(string $ActiveStatus) 设置展示状态，取值有：
<li> active：已启用；</li>
<li> inactive：未生效；</li>
<li> paused：已停用。</li>
 * @method string getAliasZoneName() 获取站点别名。数字、英文、-和_组合，限制20个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasZoneName(string $AliasZoneName) 设置站点别名。数字、英文、-和_组合，限制20个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsFake() 获取是否伪站点，取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsFake(integer $IsFake) 设置是否伪站点，取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Zone extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var array 站点当前使用的 NS 列表。
     */
    public $OriginalNameServers;

    /**
     * @var array 腾讯云分配的 NS 列表。
     */
    public $NameServers;

    /**
     * @var string 站点状态，取值有：
<li> active：NS 已切换； </li>
<li> pending：NS 未切换；</li>
<li> moved：NS 已切走；</li>
<li> deactivated：被封禁。 </li>
     */
    public $Status;

    /**
     * @var string 站点接入方式，取值有
<li> full：NS 接入； </li>
<li> partial：CNAME 接入。</li>
     */
    public $Type;

    /**
     * @var boolean 站点是否关闭。
     */
    public $Paused;

    /**
     * @var string 是否开启 CNAME 加速，取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
     */
    public $CnameSpeedUp;

    /**
     * @var string CNAME 接入状态，取值有：
<li> finished：站点已验证；</li>
<li> pending：站点验证中。</li>
     */
    public $CnameStatus;

    /**
     * @var array 资源标签列表。
     */
    public $Tags;

    /**
     * @var array 计费资源列表。
     */
    public $Resources;

    /**
     * @var string 站点创建时间。
     */
    public $CreatedOn;

    /**
     * @var string 站点修改时间。
     */
    public $ModifiedOn;

    /**
     * @var string 站点接入地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
     */
    public $Area;

    /**
     * @var VanityNameServers 用户自定义 NS 信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VanityNameServers;

    /**
     * @var array 用户自定义 NS IP 信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VanityNameServersIps;

    /**
     * @var string 展示状态，取值有：
<li> active：已启用；</li>
<li> inactive：未生效；</li>
<li> paused：已停用。</li>
     */
    public $ActiveStatus;

    /**
     * @var string 站点别名。数字、英文、-和_组合，限制20个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasZoneName;

    /**
     * @var integer 是否伪站点，取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsFake;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $ZoneName 站点名称。
     * @param array $OriginalNameServers 站点当前使用的 NS 列表。
     * @param array $NameServers 腾讯云分配的 NS 列表。
     * @param string $Status 站点状态，取值有：
<li> active：NS 已切换； </li>
<li> pending：NS 未切换；</li>
<li> moved：NS 已切走；</li>
<li> deactivated：被封禁。 </li>
     * @param string $Type 站点接入方式，取值有
<li> full：NS 接入； </li>
<li> partial：CNAME 接入。</li>
     * @param boolean $Paused 站点是否关闭。
     * @param string $CnameSpeedUp 是否开启 CNAME 加速，取值有：
<li> enabled：开启；</li>
<li> disabled：关闭。</li>
     * @param string $CnameStatus CNAME 接入状态，取值有：
<li> finished：站点已验证；</li>
<li> pending：站点验证中。</li>
     * @param array $Tags 资源标签列表。
     * @param array $Resources 计费资源列表。
     * @param string $CreatedOn 站点创建时间。
     * @param string $ModifiedOn 站点修改时间。
     * @param string $Area 站点接入地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
     * @param VanityNameServers $VanityNameServers 用户自定义 NS 信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VanityNameServersIps 用户自定义 NS IP 信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActiveStatus 展示状态，取值有：
<li> active：已启用；</li>
<li> inactive：未生效；</li>
<li> paused：已停用。</li>
     * @param string $AliasZoneName 站点别名。数字、英文、-和_组合，限制20个字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsFake 是否伪站点，取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>
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

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Paused",$param) and $param["Paused"] !== null) {
            $this->Paused = $param["Paused"];
        }

        if (array_key_exists("CnameSpeedUp",$param) and $param["CnameSpeedUp"] !== null) {
            $this->CnameSpeedUp = $param["CnameSpeedUp"];
        }

        if (array_key_exists("CnameStatus",$param) and $param["CnameStatus"] !== null) {
            $this->CnameStatus = $param["CnameStatus"];
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

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
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

        if (array_key_exists("ActiveStatus",$param) and $param["ActiveStatus"] !== null) {
            $this->ActiveStatus = $param["ActiveStatus"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }

        if (array_key_exists("IsFake",$param) and $param["IsFake"] !== null) {
            $this->IsFake = $param["IsFake"];
        }
    }
}
