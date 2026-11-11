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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigureChcAssistVpc请求参数结构体
 *
 * @method array getChcIds() 获取<p>CHC物理服务器ID。</p>
 * @method void setChcIds(array $ChcIds) 设置<p>CHC物理服务器ID。</p>
 * @method VirtualPrivateCloud getBmcVirtualPrivateCloud() 获取<p>带外网络信息。</p>
 * @method void setBmcVirtualPrivateCloud(VirtualPrivateCloud $BmcVirtualPrivateCloud) 设置<p>带外网络信息。</p>
 * @method array getBmcSecurityGroupIds() 获取<p>带外网络的安全组列表。</p>
 * @method void setBmcSecurityGroupIds(array $BmcSecurityGroupIds) 设置<p>带外网络的安全组列表。</p>
 * @method VirtualPrivateCloud getDeployVirtualPrivateCloud() 获取<p>部署网络信息。</p>
 * @method void setDeployVirtualPrivateCloud(VirtualPrivateCloud $DeployVirtualPrivateCloud) 设置<p>部署网络信息。</p>
 * @method array getDeploySecurityGroupIds() 获取<p>部署网络的安全组列表。</p>
 * @method void setDeploySecurityGroupIds(array $DeploySecurityGroupIds) 设置<p>部署网络的安全组列表。</p>
 * @method ChcDeployExtraConfig getChcDeployExtraConfig() 获取<p>部署网络的附加参数，用于指定DHCP选项、bios引导模式等配置。</p>
 * @method void setChcDeployExtraConfig(ChcDeployExtraConfig $ChcDeployExtraConfig) 设置<p>部署网络的附加参数，用于指定DHCP选项、bios引导模式等配置。</p>
 * @method boolean getSkipBmcCheck() 获取<p>是否跳过带外检查。</p><p>默认值：false</p>
 * @method void setSkipBmcCheck(boolean $SkipBmcCheck) 设置<p>是否跳过带外检查。</p><p>默认值：false</p>
 */
class ConfigureChcAssistVpcRequest extends AbstractModel
{
    /**
     * @var array <p>CHC物理服务器ID。</p>
     */
    public $ChcIds;

    /**
     * @var VirtualPrivateCloud <p>带外网络信息。</p>
     */
    public $BmcVirtualPrivateCloud;

    /**
     * @var array <p>带外网络的安全组列表。</p>
     */
    public $BmcSecurityGroupIds;

    /**
     * @var VirtualPrivateCloud <p>部署网络信息。</p>
     */
    public $DeployVirtualPrivateCloud;

    /**
     * @var array <p>部署网络的安全组列表。</p>
     */
    public $DeploySecurityGroupIds;

    /**
     * @var ChcDeployExtraConfig <p>部署网络的附加参数，用于指定DHCP选项、bios引导模式等配置。</p>
     */
    public $ChcDeployExtraConfig;

    /**
     * @var boolean <p>是否跳过带外检查。</p><p>默认值：false</p>
     */
    public $SkipBmcCheck;

    /**
     * @param array $ChcIds <p>CHC物理服务器ID。</p>
     * @param VirtualPrivateCloud $BmcVirtualPrivateCloud <p>带外网络信息。</p>
     * @param array $BmcSecurityGroupIds <p>带外网络的安全组列表。</p>
     * @param VirtualPrivateCloud $DeployVirtualPrivateCloud <p>部署网络信息。</p>
     * @param array $DeploySecurityGroupIds <p>部署网络的安全组列表。</p>
     * @param ChcDeployExtraConfig $ChcDeployExtraConfig <p>部署网络的附加参数，用于指定DHCP选项、bios引导模式等配置。</p>
     * @param boolean $SkipBmcCheck <p>是否跳过带外检查。</p><p>默认值：false</p>
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
        if (array_key_exists("ChcIds",$param) and $param["ChcIds"] !== null) {
            $this->ChcIds = $param["ChcIds"];
        }

        if (array_key_exists("BmcVirtualPrivateCloud",$param) and $param["BmcVirtualPrivateCloud"] !== null) {
            $this->BmcVirtualPrivateCloud = new VirtualPrivateCloud();
            $this->BmcVirtualPrivateCloud->deserialize($param["BmcVirtualPrivateCloud"]);
        }

        if (array_key_exists("BmcSecurityGroupIds",$param) and $param["BmcSecurityGroupIds"] !== null) {
            $this->BmcSecurityGroupIds = $param["BmcSecurityGroupIds"];
        }

        if (array_key_exists("DeployVirtualPrivateCloud",$param) and $param["DeployVirtualPrivateCloud"] !== null) {
            $this->DeployVirtualPrivateCloud = new VirtualPrivateCloud();
            $this->DeployVirtualPrivateCloud->deserialize($param["DeployVirtualPrivateCloud"]);
        }

        if (array_key_exists("DeploySecurityGroupIds",$param) and $param["DeploySecurityGroupIds"] !== null) {
            $this->DeploySecurityGroupIds = $param["DeploySecurityGroupIds"];
        }

        if (array_key_exists("ChcDeployExtraConfig",$param) and $param["ChcDeployExtraConfig"] !== null) {
            $this->ChcDeployExtraConfig = new ChcDeployExtraConfig();
            $this->ChcDeployExtraConfig->deserialize($param["ChcDeployExtraConfig"]);
        }

        if (array_key_exists("SkipBmcCheck",$param) and $param["SkipBmcCheck"] !== null) {
            $this->SkipBmcCheck = $param["SkipBmcCheck"];
        }
    }
}
