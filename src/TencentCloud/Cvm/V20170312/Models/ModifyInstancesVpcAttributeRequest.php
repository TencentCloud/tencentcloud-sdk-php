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
 * ModifyInstancesVpcAttribute请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>待操作的实例ID数组。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>待操作的实例ID数组。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。</p>
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取<p>私有网络相关信息配置，通过该参数指定私有网络的ID，子网ID，私有网络ip等信息。<br><li>当指定私有网络ID和子网ID（子网必须在实例所在的可用区）与指定实例所在私有网络不一致时，会将实例迁移至指定的私有网络的子网下。</li><li>可通过<code>PrivateIpAddresses</code>指定私有网络子网IP，若需指定则所有已指定的实例均需要指定子网IP，此时<code>InstanceIds</code>与<code>PrivateIpAddresses</code>一一对应。</li><li>不指定<code>PrivateIpAddresses</code>时随机分配私有网络子网IP。</li></p>
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置<p>私有网络相关信息配置，通过该参数指定私有网络的ID，子网ID，私有网络ip等信息。<br><li>当指定私有网络ID和子网ID（子网必须在实例所在的可用区）与指定实例所在私有网络不一致时，会将实例迁移至指定的私有网络的子网下。</li><li>可通过<code>PrivateIpAddresses</code>指定私有网络子网IP，若需指定则所有已指定的实例均需要指定子网IP，此时<code>InstanceIds</code>与<code>PrivateIpAddresses</code>一一对应。</li><li>不指定<code>PrivateIpAddresses</code>时随机分配私有网络子网IP。</li></p>
 * @method boolean getForceStop() 获取<p>是否对运行中的实例选择强制关机。默认为true。</p>
 * @method void setForceStop(boolean $ForceStop) 设置<p>是否对运行中的实例选择强制关机。默认为true。</p>
 * @method boolean getReserveHostName() 获取<p>是否保留主机名。</p><p>默认值：true</p>
 * @method void setReserveHostName(boolean $ReserveHostName) 设置<p>是否保留主机名。</p><p>默认值：true</p>
 */
class ModifyInstancesVpcAttributeRequest extends AbstractModel
{
    /**
     * @var array <p>待操作的实例ID数组。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。</p>
     */
    public $InstanceIds;

    /**
     * @var VirtualPrivateCloud <p>私有网络相关信息配置，通过该参数指定私有网络的ID，子网ID，私有网络ip等信息。<br><li>当指定私有网络ID和子网ID（子网必须在实例所在的可用区）与指定实例所在私有网络不一致时，会将实例迁移至指定的私有网络的子网下。</li><li>可通过<code>PrivateIpAddresses</code>指定私有网络子网IP，若需指定则所有已指定的实例均需要指定子网IP，此时<code>InstanceIds</code>与<code>PrivateIpAddresses</code>一一对应。</li><li>不指定<code>PrivateIpAddresses</code>时随机分配私有网络子网IP。</li></p>
     */
    public $VirtualPrivateCloud;

    /**
     * @var boolean <p>是否对运行中的实例选择强制关机。默认为true。</p>
     */
    public $ForceStop;

    /**
     * @var boolean <p>是否保留主机名。</p><p>默认值：true</p>
     */
    public $ReserveHostName;

    /**
     * @param array $InstanceIds <p>待操作的实例ID数组。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> 接口返回值中的<code>InstanceId</code>获取。</p>
     * @param VirtualPrivateCloud $VirtualPrivateCloud <p>私有网络相关信息配置，通过该参数指定私有网络的ID，子网ID，私有网络ip等信息。<br><li>当指定私有网络ID和子网ID（子网必须在实例所在的可用区）与指定实例所在私有网络不一致时，会将实例迁移至指定的私有网络的子网下。</li><li>可通过<code>PrivateIpAddresses</code>指定私有网络子网IP，若需指定则所有已指定的实例均需要指定子网IP，此时<code>InstanceIds</code>与<code>PrivateIpAddresses</code>一一对应。</li><li>不指定<code>PrivateIpAddresses</code>时随机分配私有网络子网IP。</li></p>
     * @param boolean $ForceStop <p>是否对运行中的实例选择强制关机。默认为true。</p>
     * @param boolean $ReserveHostName <p>是否保留主机名。</p><p>默认值：true</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }

        if (array_key_exists("ReserveHostName",$param) and $param["ReserveHostName"] !== null) {
            $this->ReserveHostName = $param["ReserveHostName"];
        }
    }
}
