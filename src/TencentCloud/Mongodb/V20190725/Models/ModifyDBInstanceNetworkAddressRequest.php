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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceNetworkAddress请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定需修改网络的实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定需修改网络的实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method integer getOldIpExpiredTime() 获取<p>原 IP 地址保留时长。</p><ul><li>单位为分钟，0表示立即回收原 IP 地址。</li><li>原 IP 将在约定时间后释放，在释放前原 IP和新 IP均可访问。</li></ul>
 * @method void setOldIpExpiredTime(integer $OldIpExpiredTime) 设置<p>原 IP 地址保留时长。</p><ul><li>单位为分钟，0表示立即回收原 IP 地址。</li><li>原 IP 将在约定时间后释放，在释放前原 IP和新 IP均可访问。</li></ul>
 * @method string getNewUniqVpcId() 获取<p>切换后的私有网络 ID，若实例当前为基础网络，该字段无需配置。请通过接口 <a href="https://cloud.tencent.com/document/product/240/38568">DescribeDBInstances</a> 获取私有网络 ID。</p>
 * @method void setNewUniqVpcId(string $NewUniqVpcId) 设置<p>切换后的私有网络 ID，若实例当前为基础网络，该字段无需配置。请通过接口 <a href="https://cloud.tencent.com/document/product/240/38568">DescribeDBInstances</a> 获取私有网络 ID。</p>
 * @method string getNewUniqSubnetId() 获取<p>切换后私有网络的子网 ID。若实例当前为基础网络，该字段无需配置。请通过接口 <a href="https://cloud.tencent.com/document/product/240/38568">DescribeDBInstances</a> 获取私有网络的子网 ID。</p>
 * @method void setNewUniqSubnetId(string $NewUniqSubnetId) 设置<p>切换后私有网络的子网 ID。若实例当前为基础网络，该字段无需配置。请通过接口 <a href="https://cloud.tencent.com/document/product/240/38568">DescribeDBInstances</a> 获取私有网络的子网 ID。</p>
 * @method array getNetworkAddresses() 获取<p>IP 地址信息，包含新 IP 地址与 原 IP 地址。</p>
 * @method void setNetworkAddresses(array $NetworkAddresses) 设置<p>IP 地址信息，包含新 IP 地址与 原 IP 地址。</p>
 */
class ModifyDBInstanceNetworkAddressRequest extends AbstractModel
{
    /**
     * @var string <p>指定需修改网络的实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>原 IP 地址保留时长。</p><ul><li>单位为分钟，0表示立即回收原 IP 地址。</li><li>原 IP 将在约定时间后释放，在释放前原 IP和新 IP均可访问。</li></ul>
     */
    public $OldIpExpiredTime;

    /**
     * @var string <p>切换后的私有网络 ID，若实例当前为基础网络，该字段无需配置。请通过接口 <a href="https://cloud.tencent.com/document/product/240/38568">DescribeDBInstances</a> 获取私有网络 ID。</p>
     */
    public $NewUniqVpcId;

    /**
     * @var string <p>切换后私有网络的子网 ID。若实例当前为基础网络，该字段无需配置。请通过接口 <a href="https://cloud.tencent.com/document/product/240/38568">DescribeDBInstances</a> 获取私有网络的子网 ID。</p>
     */
    public $NewUniqSubnetId;

    /**
     * @var array <p>IP 地址信息，包含新 IP 地址与 原 IP 地址。</p>
     */
    public $NetworkAddresses;

    /**
     * @param string $InstanceId <p>指定需修改网络的实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     * @param integer $OldIpExpiredTime <p>原 IP 地址保留时长。</p><ul><li>单位为分钟，0表示立即回收原 IP 地址。</li><li>原 IP 将在约定时间后释放，在释放前原 IP和新 IP均可访问。</li></ul>
     * @param string $NewUniqVpcId <p>切换后的私有网络 ID，若实例当前为基础网络，该字段无需配置。请通过接口 <a href="https://cloud.tencent.com/document/product/240/38568">DescribeDBInstances</a> 获取私有网络 ID。</p>
     * @param string $NewUniqSubnetId <p>切换后私有网络的子网 ID。若实例当前为基础网络，该字段无需配置。请通过接口 <a href="https://cloud.tencent.com/document/product/240/38568">DescribeDBInstances</a> 获取私有网络的子网 ID。</p>
     * @param array $NetworkAddresses <p>IP 地址信息，包含新 IP 地址与 原 IP 地址。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OldIpExpiredTime",$param) and $param["OldIpExpiredTime"] !== null) {
            $this->OldIpExpiredTime = $param["OldIpExpiredTime"];
        }

        if (array_key_exists("NewUniqVpcId",$param) and $param["NewUniqVpcId"] !== null) {
            $this->NewUniqVpcId = $param["NewUniqVpcId"];
        }

        if (array_key_exists("NewUniqSubnetId",$param) and $param["NewUniqSubnetId"] !== null) {
            $this->NewUniqSubnetId = $param["NewUniqSubnetId"];
        }

        if (array_key_exists("NetworkAddresses",$param) and $param["NetworkAddresses"] !== null) {
            $this->NetworkAddresses = [];
            foreach ($param["NetworkAddresses"] as $key => $value){
                $obj = new ModifyNetworkAddress();
                $obj->deserialize($value);
                array_push($this->NetworkAddresses, $obj);
            }
        }
    }
}
