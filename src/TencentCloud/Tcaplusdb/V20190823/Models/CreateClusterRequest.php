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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster请求参数结构体
 *
 * @method string getIdlType() 获取<p>集群数据描述语言类型，统一填<code>MIX</code></p><p>枚举值：</p><ul><li>MIX： 同时支持<code>PROTO</code>，<code>TDR</code>表</li></ul>
 * @method void setIdlType(string $IdlType) 设置<p>集群数据描述语言类型，统一填<code>MIX</code></p><p>枚举值：</p><ul><li>MIX： 同时支持<code>PROTO</code>，<code>TDR</code>表</li></ul>
 * @method string getClusterName() 获取<p>集群名称，可使用中文或英文字符，最大长度32个字符</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称，可使用中文或英文字符，最大长度32个字符</p>
 * @method string getVpcId() 获取<p>集群所绑定的私有网络实例ID，形如：vpc-f49l6u0z</p>
 * @method void setVpcId(string $VpcId) 设置<p>集群所绑定的私有网络实例ID，形如：vpc-f49l6u0z</p>
 * @method string getSubnetId() 获取<p>集群所绑定的子网实例ID，形如：subnet-pxir56ns</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>集群所绑定的子网实例ID，形如：subnet-pxir56ns</p>
 * @method string getPassword() 获取<p>集群访问密码，必须是a-zA-Z0-9的字符,且必须包含数字和大小写字母</p>
 * @method void setPassword(string $Password) 设置<p>集群访问密码，必须是a-zA-Z0-9的字符,且必须包含数字和大小写字母</p>
 * @method array getResourceTags() 获取<p>集群标签列表</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>集群标签列表</p>
 * @method integer getIpv6Enable() 获取<p>集群是否开启IPv6功能</p>
 * @method void setIpv6Enable(integer $Ipv6Enable) 设置<p>集群是否开启IPv6功能</p>
 * @method array getServerList() 获取<p>独占集群占用的svr机器</p>
 * @method void setServerList(array $ServerList) 设置<p>独占集群占用的svr机器</p>
 * @method array getProxyList() 获取<p>独占集群占用的proxy机器</p>
 * @method void setProxyList(array $ProxyList) 设置<p>独占集群占用的proxy机器</p>
 * @method integer getClusterType() 获取<p>集群类型1共享2独占</p>
 * @method void setClusterType(integer $ClusterType) 设置<p>集群类型1共享2独占</p>
 * @method integer getAuthType() 获取<p>密码认证类型，0 静态认证， 1 签名认证</p>
 * @method void setAuthType(integer $AuthType) 设置<p>密码认证类型，0 静态认证， 1 签名认证</p>
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string <p>集群数据描述语言类型，统一填<code>MIX</code></p><p>枚举值：</p><ul><li>MIX： 同时支持<code>PROTO</code>，<code>TDR</code>表</li></ul>
     */
    public $IdlType;

    /**
     * @var string <p>集群名称，可使用中文或英文字符，最大长度32个字符</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群所绑定的私有网络实例ID，形如：vpc-f49l6u0z</p>
     */
    public $VpcId;

    /**
     * @var string <p>集群所绑定的子网实例ID，形如：subnet-pxir56ns</p>
     */
    public $SubnetId;

    /**
     * @var string <p>集群访问密码，必须是a-zA-Z0-9的字符,且必须包含数字和大小写字母</p>
     */
    public $Password;

    /**
     * @var array <p>集群标签列表</p>
     */
    public $ResourceTags;

    /**
     * @var integer <p>集群是否开启IPv6功能</p>
     */
    public $Ipv6Enable;

    /**
     * @var array <p>独占集群占用的svr机器</p>
     */
    public $ServerList;

    /**
     * @var array <p>独占集群占用的proxy机器</p>
     */
    public $ProxyList;

    /**
     * @var integer <p>集群类型1共享2独占</p>
     */
    public $ClusterType;

    /**
     * @var integer <p>密码认证类型，0 静态认证， 1 签名认证</p>
     */
    public $AuthType;

    /**
     * @param string $IdlType <p>集群数据描述语言类型，统一填<code>MIX</code></p><p>枚举值：</p><ul><li>MIX： 同时支持<code>PROTO</code>，<code>TDR</code>表</li></ul>
     * @param string $ClusterName <p>集群名称，可使用中文或英文字符，最大长度32个字符</p>
     * @param string $VpcId <p>集群所绑定的私有网络实例ID，形如：vpc-f49l6u0z</p>
     * @param string $SubnetId <p>集群所绑定的子网实例ID，形如：subnet-pxir56ns</p>
     * @param string $Password <p>集群访问密码，必须是a-zA-Z0-9的字符,且必须包含数字和大小写字母</p>
     * @param array $ResourceTags <p>集群标签列表</p>
     * @param integer $Ipv6Enable <p>集群是否开启IPv6功能</p>
     * @param array $ServerList <p>独占集群占用的svr机器</p>
     * @param array $ProxyList <p>独占集群占用的proxy机器</p>
     * @param integer $ClusterType <p>集群类型1共享2独占</p>
     * @param integer $AuthType <p>密码认证类型，0 静态认证， 1 签名认证</p>
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
        if (array_key_exists("IdlType",$param) and $param["IdlType"] !== null) {
            $this->IdlType = $param["IdlType"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Ipv6Enable",$param) and $param["Ipv6Enable"] !== null) {
            $this->Ipv6Enable = $param["Ipv6Enable"];
        }

        if (array_key_exists("ServerList",$param) and $param["ServerList"] !== null) {
            $this->ServerList = [];
            foreach ($param["ServerList"] as $key => $value){
                $obj = new MachineInfo();
                $obj->deserialize($value);
                array_push($this->ServerList, $obj);
            }
        }

        if (array_key_exists("ProxyList",$param) and $param["ProxyList"] !== null) {
            $this->ProxyList = [];
            foreach ($param["ProxyList"] as $key => $value){
                $obj = new MachineInfo();
                $obj->deserialize($value);
                array_push($this->ProxyList, $obj);
            }
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }
    }
}
