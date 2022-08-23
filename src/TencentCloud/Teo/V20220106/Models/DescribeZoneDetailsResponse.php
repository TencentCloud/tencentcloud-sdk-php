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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneDetails返回参数结构体
 *
 * @method string getId() 获取站点 ID
 * @method void setId(string $Id) 设置站点 ID
 * @method string getName() 获取站点名称
 * @method void setName(string $Name) 设置站点名称
 * @method array getOriginalNameServers() 获取用户当前使用的 NS 列表
 * @method void setOriginalNameServers(array $OriginalNameServers) 设置用户当前使用的 NS 列表
 * @method array getNameServers() 获取腾讯云分配给用户的 NS 列表
 * @method void setNameServers(array $NameServers) 设置腾讯云分配给用户的 NS 列表
 * @method string getStatus() 获取站点状态
- active：NS 已切换
- pending：NS 未切换
- moved：NS 已切走
- deactivated：被封禁
 * @method void setStatus(string $Status) 设置站点状态
- active：NS 已切换
- pending：NS 未切换
- moved：NS 已切走
- deactivated：被封禁
 * @method string getType() 获取站点接入方式
- full：NS 接入
- partial：CNAME 接入
 * @method void setType(string $Type) 设置站点接入方式
- full：NS 接入
- partial：CNAME 接入
 * @method boolean getPaused() 获取站点是否关闭
 * @method void setPaused(boolean $Paused) 设置站点是否关闭
 * @method string getCnameSpeedUp() 获取是否开启 CNAME 加速
- enabled：开启
- disabled：关闭
 * @method void setCnameSpeedUp(string $CnameSpeedUp) 设置是否开启 CNAME 加速
- enabled：开启
- disabled：关闭
 * @method string getCnameStatus() 获取cname切换验证状态
- finished 切换完成
- pending 切换验证中
 * @method void setCnameStatus(string $CnameStatus) 设置cname切换验证状态
- finished 切换完成
- pending 切换验证中
 * @method array getTags() 获取资源标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置资源标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取站点接入地域，取值为：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
 * @method void setArea(string $Area) 设置站点接入地域，取值为：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
 * @method array getResources() 获取计费资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResources(array $Resources) 设置计费资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedOn() 获取站点修改时间
 * @method void setModifiedOn(string $ModifiedOn) 设置站点修改时间
 * @method string getCreatedOn() 获取站点创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置站点创建时间
 * @method VanityNameServers getVanityNameServers() 获取用户自定义 NS 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) 设置用户自定义 NS 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVanityNameServersIps() 获取用户自定义 NS IP 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVanityNameServersIps(array $VanityNameServersIps) 设置用户自定义 NS IP 信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeZoneDetailsResponse extends AbstractModel
{
    /**
     * @var string 站点 ID
     */
    public $Id;

    /**
     * @var string 站点名称
     */
    public $Name;

    /**
     * @var array 用户当前使用的 NS 列表
     */
    public $OriginalNameServers;

    /**
     * @var array 腾讯云分配给用户的 NS 列表
     */
    public $NameServers;

    /**
     * @var string 站点状态
- active：NS 已切换
- pending：NS 未切换
- moved：NS 已切走
- deactivated：被封禁
     */
    public $Status;

    /**
     * @var string 站点接入方式
- full：NS 接入
- partial：CNAME 接入
     */
    public $Type;

    /**
     * @var boolean 站点是否关闭
     */
    public $Paused;

    /**
     * @var string 是否开启 CNAME 加速
- enabled：开启
- disabled：关闭
     */
    public $CnameSpeedUp;

    /**
     * @var string cname切换验证状态
- finished 切换完成
- pending 切换验证中
     */
    public $CnameStatus;

    /**
     * @var array 资源标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 站点接入地域，取值为：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
     */
    public $Area;

    /**
     * @var array 计费资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resources;

    /**
     * @var string 站点修改时间
     */
    public $ModifiedOn;

    /**
     * @var string 站点创建时间
     */
    public $CreatedOn;

    /**
     * @var VanityNameServers 用户自定义 NS 信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VanityNameServers;

    /**
     * @var array 用户自定义 NS IP 信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VanityNameServersIps;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Id 站点 ID
     * @param string $Name 站点名称
     * @param array $OriginalNameServers 用户当前使用的 NS 列表
     * @param array $NameServers 腾讯云分配给用户的 NS 列表
     * @param string $Status 站点状态
- active：NS 已切换
- pending：NS 未切换
- moved：NS 已切走
- deactivated：被封禁
     * @param string $Type 站点接入方式
- full：NS 接入
- partial：CNAME 接入
     * @param boolean $Paused 站点是否关闭
     * @param string $CnameSpeedUp 是否开启 CNAME 加速
- enabled：开启
- disabled：关闭
     * @param string $CnameStatus cname切换验证状态
- finished 切换完成
- pending 切换验证中
     * @param array $Tags 资源标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area 站点接入地域，取值为：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
     * @param array $Resources 计费资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedOn 站点修改时间
     * @param string $CreatedOn 站点创建时间
     * @param VanityNameServers $VanityNameServers 用户自定义 NS 信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VanityNameServersIps 用户自定义 NS IP 信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
