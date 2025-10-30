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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDeviceIdentity请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getDeviceId() 获取设备id
 * @method void setDeviceId(string $DeviceId) 设置设备id
 * @method string getStatus() 获取1:ENABLED-可用
2:DISABLE-不可用
 * @method void setStatus(string $Status) 设置1:ENABLED-可用
2:DISABLE-不可用
 * @method string getPrimaryKey() 获取主要签名key，需要Base64编码。
 * @method void setPrimaryKey(string $PrimaryKey) 设置主要签名key，需要Base64编码。
 * @method string getSecondaryKey() 获取次要签名key，需要Base64编码。
 * @method void setSecondaryKey(string $SecondaryKey) 设置次要签名key，需要Base64编码。
 * @method array getPropagatingProperties() 获取该设备id的传播属性设置	
 * @method void setPropagatingProperties(array $PropagatingProperties) 设置该设备id的传播属性设置	
 */
class ModifyDeviceIdentityRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 设备id
     */
    public $DeviceId;

    /**
     * @var string 1:ENABLED-可用
2:DISABLE-不可用
     */
    public $Status;

    /**
     * @var string 主要签名key，需要Base64编码。
     */
    public $PrimaryKey;

    /**
     * @var string 次要签名key，需要Base64编码。
     */
    public $SecondaryKey;

    /**
     * @var array 该设备id的传播属性设置	
     */
    public $PropagatingProperties;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $DeviceId 设备id
     * @param string $Status 1:ENABLED-可用
2:DISABLE-不可用
     * @param string $PrimaryKey 主要签名key，需要Base64编码。
     * @param string $SecondaryKey 次要签名key，需要Base64编码。
     * @param array $PropagatingProperties 该设备id的传播属性设置	
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

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PrimaryKey",$param) and $param["PrimaryKey"] !== null) {
            $this->PrimaryKey = $param["PrimaryKey"];
        }

        if (array_key_exists("SecondaryKey",$param) and $param["SecondaryKey"] !== null) {
            $this->SecondaryKey = $param["SecondaryKey"];
        }

        if (array_key_exists("PropagatingProperties",$param) and $param["PropagatingProperties"] !== null) {
            $this->PropagatingProperties = [];
            foreach ($param["PropagatingProperties"] as $key => $value){
                $obj = new PropagatingProperty();
                $obj->deserialize($value);
                array_push($this->PropagatingProperties, $obj);
            }
        }
    }
}
