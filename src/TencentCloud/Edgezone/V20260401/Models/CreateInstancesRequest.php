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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances请求参数结构体
 *
 * @method string getZone() 获取<p>可用区代码，如 ap-guangzhou-1。</p>
 * @method void setZone(string $Zone) 设置<p>可用区代码，如 ap-guangzhou-1。</p>
 * @method string getInstanceType() 获取<p>机型规格，如 BMS5.MEDIUM8。</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>机型规格，如 BMS5.MEDIUM8。</p>
 * @method string getPrivateNetworkId() 获取<p>内网网络实例ID，格式如 net-xxx。</p>
 * @method void setPrivateNetworkId(string $PrivateNetworkId) 设置<p>内网网络实例ID，格式如 net-xxx。</p>
 * @method string getPublicNetworkId() 获取<p>公网网络实例ID，格式如 net-xxx。</p>
 * @method void setPublicNetworkId(string $PublicNetworkId) 设置<p>公网网络实例ID，格式如 net-xxx。</p>
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method string getImageId() 获取<p>镜像ID，如 img-centos-7.9。</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像ID，如 img-centos-7.9。</p>
 * @method integer getInstanceCount() 获取<p>创建数量，默认1，最大50。</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>创建数量，默认1，最大50。</p>
 * @method string getPassword() 获取<p>登录密码，与SSHKey二选一</p>
 * @method void setPassword(string $Password) 设置<p>登录密码，与SSHKey二选一</p>
 * @method string getSSHKey() 获取<p>SSH密钥公钥字符串，与Password二选一</p>
 * @method void setSSHKey(string $SSHKey) 设置<p>SSH密钥公钥字符串，与Password二选一</p>
 * @method string getVersionNumber() 获取<p>镜像版本号，仅公共镜像有版本概念。</p>
 * @method void setVersionNumber(string $VersionNumber) 设置<p>镜像版本号，仅公共镜像有版本概念。</p>
 * @method boolean getEnableIpv6() 获取<p>是否启用公网IPv6，默认false。启用后系统会在分配IPv4后额外分配一个IPv6地址。</p>
 * @method void setEnableIpv6(boolean $EnableIpv6) 设置<p>是否启用公网IPv6，默认false。启用后系统会在分配IPv4后额外分配一个IPv6地址。</p>
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>可用区代码，如 ap-guangzhou-1。</p>
     */
    public $Zone;

    /**
     * @var string <p>机型规格，如 BMS5.MEDIUM8。</p>
     */
    public $InstanceType;

    /**
     * @var string <p>内网网络实例ID，格式如 net-xxx。</p>
     */
    public $PrivateNetworkId;

    /**
     * @var string <p>公网网络实例ID，格式如 net-xxx。</p>
     */
    public $PublicNetworkId;

    /**
     * @var string <p>实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var string <p>镜像ID，如 img-centos-7.9。</p>
     */
    public $ImageId;

    /**
     * @var integer <p>创建数量，默认1，最大50。</p>
     */
    public $InstanceCount;

    /**
     * @var string <p>登录密码，与SSHKey二选一</p>
     */
    public $Password;

    /**
     * @var string <p>SSH密钥公钥字符串，与Password二选一</p>
     */
    public $SSHKey;

    /**
     * @var string <p>镜像版本号，仅公共镜像有版本概念。</p>
     * @deprecated
     */
    public $VersionNumber;

    /**
     * @var boolean <p>是否启用公网IPv6，默认false。启用后系统会在分配IPv4后额外分配一个IPv6地址。</p>
     * @deprecated
     */
    public $EnableIpv6;

    /**
     * @param string $Zone <p>可用区代码，如 ap-guangzhou-1。</p>
     * @param string $InstanceType <p>机型规格，如 BMS5.MEDIUM8。</p>
     * @param string $PrivateNetworkId <p>内网网络实例ID，格式如 net-xxx。</p>
     * @param string $PublicNetworkId <p>公网网络实例ID，格式如 net-xxx。</p>
     * @param string $InstanceName <p>实例名称。</p>
     * @param string $ImageId <p>镜像ID，如 img-centos-7.9。</p>
     * @param integer $InstanceCount <p>创建数量，默认1，最大50。</p>
     * @param string $Password <p>登录密码，与SSHKey二选一</p>
     * @param string $SSHKey <p>SSH密钥公钥字符串，与Password二选一</p>
     * @param string $VersionNumber <p>镜像版本号，仅公共镜像有版本概念。</p>
     * @param boolean $EnableIpv6 <p>是否启用公网IPv6，默认false。启用后系统会在分配IPv4后额外分配一个IPv6地址。</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("PrivateNetworkId",$param) and $param["PrivateNetworkId"] !== null) {
            $this->PrivateNetworkId = $param["PrivateNetworkId"];
        }

        if (array_key_exists("PublicNetworkId",$param) and $param["PublicNetworkId"] !== null) {
            $this->PublicNetworkId = $param["PublicNetworkId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SSHKey",$param) and $param["SSHKey"] !== null) {
            $this->SSHKey = $param["SSHKey"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("EnableIpv6",$param) and $param["EnableIpv6"] !== null) {
            $this->EnableIpv6 = $param["EnableIpv6"];
        }
    }
}
