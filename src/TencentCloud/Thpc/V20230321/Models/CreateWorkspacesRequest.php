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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkspaces请求参数结构体
 *
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method SpacePlacement getPlacement() 获取实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。 <b>注：如果您不指定LaunchTemplate参数，则Placement为必选参数。若同时传递Placement和LaunchTemplate，则默认覆盖LaunchTemplate中对应的Placement的值。</b>
 * @method void setPlacement(SpacePlacement $Placement) 设置实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。 <b>注：如果您不指定LaunchTemplate参数，则Placement为必选参数。若同时传递Placement和LaunchTemplate，则默认覆盖LaunchTemplate中对应的Placement的值。</b>
 * @method SpaceChargePrepaid getSpaceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setSpaceChargePrepaid(SpaceChargePrepaid $SpaceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method string getSpaceChargeType() 获取工作空间计费类型，包括：PREPAID，UNDERWRITE。工作空间计费类型，包括：PREPAID，UNDERWRITE。
 * @method void setSpaceChargeType(string $SpaceChargeType) 设置工作空间计费类型，包括：PREPAID，UNDERWRITE。工作空间计费类型，包括：PREPAID，UNDERWRITE。
 * @method string getSpaceType() 获取工作空间规格
 * @method void setSpaceType(string $SpaceType) 设置工作空间规格
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 * @method SpaceSystemDisk getSystemDisk() 获取工作空间系统盘信息
 * @method void setSystemDisk(SpaceSystemDisk $SystemDisk) 设置工作空间系统盘信息
 * @method array getDataDisks() 获取工作空间数据盘信息
 * @method void setDataDisks(array $DataDisks) 设置工作空间数据盘信息
 * @method SpaceVirtualPrivateCloud getVirtualPrivateCloud() 获取私有网络相关信息
 * @method void setVirtualPrivateCloud(SpaceVirtualPrivateCloud $VirtualPrivateCloud) 设置私有网络相关信息
 * @method SpaceInternetAccessible getInternetAccessible() 获取公网带宽相关信息设置
 * @method void setInternetAccessible(SpaceInternetAccessible $InternetAccessible) 设置公网带宽相关信息设置
 * @method integer getSpaceCount() 获取购买工作空间数量
 * @method void setSpaceCount(integer $SpaceCount) 设置购买工作空间数量
 * @method string getSpaceName() 获取工作空间显示名称
 * @method void setSpaceName(string $SpaceName) 设置工作空间显示名称
 * @method LoginSettings getLoginSettings() 获取工作空间登陆设置
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置工作空间登陆设置
 * @method array getSecurityGroupIds() 获取工作空间所属安全组
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置工作空间所属安全组
 * @method EnhancedService getEnhancedService() 获取增强服务
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置增强服务
 * @method boolean getDryRun() 获取是否只预检此次请求
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求
 * @method string getUserData() 获取提供给工作空间使用的用户数据
 * @method void setUserData(string $UserData) 设置提供给工作空间使用的用户数据
 * @method array getDisasterRecoverGroupIds() 获取置放群组id
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置置放群组id
 * @method array getTagSpecification() 获取标签描述列表
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表
 * @method string getHpcClusterId() 获取高性能计算集群ID
 * @method void setHpcClusterId(string $HpcClusterId) 设置高性能计算集群ID
 * @method string getCamRoleName() 获取CAM角色名称
 * @method void setCamRoleName(string $CamRoleName) 设置CAM角色名称
 * @method string getHostName() 获取实例主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><br><li>购买多台实例，如果指定模式串`{R:x}`，表示生成数字`[x, x+n-1]`，其中`n`表示购买实例的数量，例如`server{R:3}`，购买1台时，实例主机名为`server3`；购买2台时，实例主机名分别为`server3`，`server4`。支持指定多个模式串`{R:x}`。</li><br><li>购买多台实例，如果不指定模式串，则在实例主机名添加后缀`1、2...n`，其中`n`表示购买实例的数量，例如`server`，购买2台时，实例主机名分别为`server1`，`server2`。</li>
 * @method void setHostName(string $HostName) 设置实例主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><br><li>购买多台实例，如果指定模式串`{R:x}`，表示生成数字`[x, x+n-1]`，其中`n`表示购买实例的数量，例如`server{R:3}`，购买1台时，实例主机名为`server3`；购买2台时，实例主机名分别为`server3`，`server4`。支持指定多个模式串`{R:x}`。</li><br><li>购买多台实例，如果不指定模式串，则在实例主机名添加后缀`1、2...n`，其中`n`表示购买实例的数量，例如`server`，购买2台时，实例主机名分别为`server1`，`server2`。</li>
 */
class CreateWorkspacesRequest extends AbstractModel
{
    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     */
    public $ClientToken;

    /**
     * @var SpacePlacement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。 <b>注：如果您不指定LaunchTemplate参数，则Placement为必选参数。若同时传递Placement和LaunchTemplate，则默认覆盖LaunchTemplate中对应的Placement的值。</b>
     */
    public $Placement;

    /**
     * @var SpaceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $SpaceChargePrepaid;

    /**
     * @var string 工作空间计费类型，包括：PREPAID，UNDERWRITE。工作空间计费类型，包括：PREPAID，UNDERWRITE。
     */
    public $SpaceChargeType;

    /**
     * @var string 工作空间规格
     */
    public $SpaceType;

    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @var SpaceSystemDisk 工作空间系统盘信息
     */
    public $SystemDisk;

    /**
     * @var array 工作空间数据盘信息
     */
    public $DataDisks;

    /**
     * @var SpaceVirtualPrivateCloud 私有网络相关信息
     */
    public $VirtualPrivateCloud;

    /**
     * @var SpaceInternetAccessible 公网带宽相关信息设置
     */
    public $InternetAccessible;

    /**
     * @var integer 购买工作空间数量
     */
    public $SpaceCount;

    /**
     * @var string 工作空间显示名称
     */
    public $SpaceName;

    /**
     * @var LoginSettings 工作空间登陆设置
     */
    public $LoginSettings;

    /**
     * @var array 工作空间所属安全组
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService 增强服务
     */
    public $EnhancedService;

    /**
     * @var boolean 是否只预检此次请求
     */
    public $DryRun;

    /**
     * @var string 提供给工作空间使用的用户数据
     */
    public $UserData;

    /**
     * @var array 置放群组id
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array 标签描述列表
     */
    public $TagSpecification;

    /**
     * @var string 高性能计算集群ID
     */
    public $HpcClusterId;

    /**
     * @var string CAM角色名称
     */
    public $CamRoleName;

    /**
     * @var string 实例主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><br><li>购买多台实例，如果指定模式串`{R:x}`，表示生成数字`[x, x+n-1]`，其中`n`表示购买实例的数量，例如`server{R:3}`，购买1台时，实例主机名为`server3`；购买2台时，实例主机名分别为`server3`，`server4`。支持指定多个模式串`{R:x}`。</li><br><li>购买多台实例，如果不指定模式串，则在实例主机名添加后缀`1、2...n`，其中`n`表示购买实例的数量，例如`server`，购买2台时，实例主机名分别为`server1`，`server2`。</li>
     */
    public $HostName;

    /**
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     * @param SpacePlacement $Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。 <b>注：如果您不指定LaunchTemplate参数，则Placement为必选参数。若同时传递Placement和LaunchTemplate，则默认覆盖LaunchTemplate中对应的Placement的值。</b>
     * @param SpaceChargePrepaid $SpaceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     * @param string $SpaceChargeType 工作空间计费类型，包括：PREPAID，UNDERWRITE。工作空间计费类型，包括：PREPAID，UNDERWRITE。
     * @param string $SpaceType 工作空间规格
     * @param string $ImageId 镜像ID
     * @param SpaceSystemDisk $SystemDisk 工作空间系统盘信息
     * @param array $DataDisks 工作空间数据盘信息
     * @param SpaceVirtualPrivateCloud $VirtualPrivateCloud 私有网络相关信息
     * @param SpaceInternetAccessible $InternetAccessible 公网带宽相关信息设置
     * @param integer $SpaceCount 购买工作空间数量
     * @param string $SpaceName 工作空间显示名称
     * @param LoginSettings $LoginSettings 工作空间登陆设置
     * @param array $SecurityGroupIds 工作空间所属安全组
     * @param EnhancedService $EnhancedService 增强服务
     * @param boolean $DryRun 是否只预检此次请求
     * @param string $UserData 提供给工作空间使用的用户数据
     * @param array $DisasterRecoverGroupIds 置放群组id
     * @param array $TagSpecification 标签描述列表
     * @param string $HpcClusterId 高性能计算集群ID
     * @param string $CamRoleName CAM角色名称
     * @param string $HostName 实例主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><br><li>购买多台实例，如果指定模式串`{R:x}`，表示生成数字`[x, x+n-1]`，其中`n`表示购买实例的数量，例如`server{R:3}`，购买1台时，实例主机名为`server3`；购买2台时，实例主机名分别为`server3`，`server4`。支持指定多个模式串`{R:x}`。</li><br><li>购买多台实例，如果不指定模式串，则在实例主机名添加后缀`1、2...n`，其中`n`表示购买实例的数量，例如`server`，购买2台时，实例主机名分别为`server1`，`server2`。</li>
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
        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new SpacePlacement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("SpaceChargePrepaid",$param) and $param["SpaceChargePrepaid"] !== null) {
            $this->SpaceChargePrepaid = new SpaceChargePrepaid();
            $this->SpaceChargePrepaid->deserialize($param["SpaceChargePrepaid"]);
        }

        if (array_key_exists("SpaceChargeType",$param) and $param["SpaceChargeType"] !== null) {
            $this->SpaceChargeType = $param["SpaceChargeType"];
        }

        if (array_key_exists("SpaceType",$param) and $param["SpaceType"] !== null) {
            $this->SpaceType = $param["SpaceType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SpaceSystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new SpaceDataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new SpaceVirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new SpaceInternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("SpaceCount",$param) and $param["SpaceCount"] !== null) {
            $this->SpaceCount = $param["SpaceCount"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }
    }
}
