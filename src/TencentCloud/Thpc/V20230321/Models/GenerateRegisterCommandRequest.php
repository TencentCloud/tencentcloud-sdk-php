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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateRegisterCommand请求参数结构体
 *
 * @method string getClusterId() 获取<p>IDC集群ID，形如<code>hpc-xxxxxxxx</code>。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>IDC集群ID，形如<code>hpc-xxxxxxxx</code>。</p>
 * @method boolean getProxy() 获取<p>是否通过内网专线代理连接。</p><li>true：IDC机器需经PrivateLink代理接入</li><li>false：IDC机器可直连（默认值）</li><p></p>
 * @method void setProxy(boolean $Proxy) 设置<p>是否通过内网专线代理连接。</p><li>true：IDC机器需经PrivateLink代理接入</li><li>false：IDC机器可直连（默认值）</li><p></p>
 * @method string getVpcId() 获取<p>私有网络ID，形如<code>vpc-xxx</code>。仅当<code>Proxy=true</code>且集群未绑定VPC时必填。与SubnetId需同时指定或同时不指定。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID，形如<code>vpc-xxx</code>。仅当<code>Proxy=true</code>且集群未绑定VPC时必填。与SubnetId需同时指定或同时不指定。</p>
 * @method string getSubnetId() 获取<p>私有网络子网ID，形如<code>subnet-xxx</code>。仅当<code>Proxy=true</code>且集群未绑定VPC时必填。与VpcId需同时指定或同时不指定。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络子网ID，形如<code>subnet-xxx</code>。仅当<code>Proxy=true</code>且集群未绑定VPC时必填。与VpcId需同时指定或同时不指定。</p>
 * @method string getQueueName() 获取<p>注册码绑定的队列名称。不指定时由系统取集群默认队列。</p>
 * @method void setQueueName(string $QueueName) 设置<p>注册码绑定的队列名称。不指定时由系统取集群默认队列。</p>
 * @method integer getExpireSeconds() 获取<p>注册码有效期，单位：秒。默认值为604800（7天）。</p>
 * @method void setExpireSeconds(integer $ExpireSeconds) 设置<p>注册码有效期，单位：秒。默认值为604800（7天）。</p>
 */
class GenerateRegisterCommandRequest extends AbstractModel
{
    /**
     * @var string <p>IDC集群ID，形如<code>hpc-xxxxxxxx</code>。</p>
     */
    public $ClusterId;

    /**
     * @var boolean <p>是否通过内网专线代理连接。</p><li>true：IDC机器需经PrivateLink代理接入</li><li>false：IDC机器可直连（默认值）</li><p></p>
     */
    public $Proxy;

    /**
     * @var string <p>私有网络ID，形如<code>vpc-xxx</code>。仅当<code>Proxy=true</code>且集群未绑定VPC时必填。与SubnetId需同时指定或同时不指定。</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络子网ID，形如<code>subnet-xxx</code>。仅当<code>Proxy=true</code>且集群未绑定VPC时必填。与VpcId需同时指定或同时不指定。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>注册码绑定的队列名称。不指定时由系统取集群默认队列。</p>
     */
    public $QueueName;

    /**
     * @var integer <p>注册码有效期，单位：秒。默认值为604800（7天）。</p>
     */
    public $ExpireSeconds;

    /**
     * @param string $ClusterId <p>IDC集群ID，形如<code>hpc-xxxxxxxx</code>。</p>
     * @param boolean $Proxy <p>是否通过内网专线代理连接。</p><li>true：IDC机器需经PrivateLink代理接入</li><li>false：IDC机器可直连（默认值）</li><p></p>
     * @param string $VpcId <p>私有网络ID，形如<code>vpc-xxx</code>。仅当<code>Proxy=true</code>且集群未绑定VPC时必填。与SubnetId需同时指定或同时不指定。</p>
     * @param string $SubnetId <p>私有网络子网ID，形如<code>subnet-xxx</code>。仅当<code>Proxy=true</code>且集群未绑定VPC时必填。与VpcId需同时指定或同时不指定。</p>
     * @param string $QueueName <p>注册码绑定的队列名称。不指定时由系统取集群默认队列。</p>
     * @param integer $ExpireSeconds <p>注册码有效期，单位：秒。默认值为604800（7天）。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Proxy",$param) and $param["Proxy"] !== null) {
            $this->Proxy = $param["Proxy"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("ExpireSeconds",$param) and $param["ExpireSeconds"] !== null) {
            $this->ExpireSeconds = $param["ExpireSeconds"];
        }
    }
}
