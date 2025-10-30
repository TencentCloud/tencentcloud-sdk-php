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
 * 设备标识列表
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method string getDeviceId() 获取设备id
 * @method void setDeviceId(string $DeviceId) 设置设备id
 * @method integer getStatus() 获取1:ENABLED-可用2:DISABLE-不可用
 * @method void setStatus(integer $Status) 设置1:ENABLED-可用2:DISABLE-不可用
 * @method string getPrimaryKey() 获取主要签名key，不传则由系统自动生成
 * @method void setPrimaryKey(string $PrimaryKey) 设置主要签名key，不传则由系统自动生成
 * @method string getSecondaryKey() 获取次要签名key，不传则由系统自动生成
 * @method void setSecondaryKey(string $SecondaryKey) 设置次要签名key，不传则由系统自动生成
 * @method integer getCreatedTime() 获取创建时间
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间
 * @method array getPropagatingProperties() 获取传播属性列表
 * @method void setPropagatingProperties(array $PropagatingProperties) 设置传播属性列表
 */
class DeviceIdentityItem extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var string 设备id
     */
    public $DeviceId;

    /**
     * @var integer 1:ENABLED-可用2:DISABLE-不可用
     */
    public $Status;

    /**
     * @var string 主要签名key，不传则由系统自动生成
     */
    public $PrimaryKey;

    /**
     * @var string 次要签名key，不传则由系统自动生成
     */
    public $SecondaryKey;

    /**
     * @var integer 创建时间
     */
    public $CreatedTime;

    /**
     * @var array 传播属性列表
     */
    public $PropagatingProperties;

    /**
     * @param string $InstanceId 集群id
     * @param string $DeviceId 设备id
     * @param integer $Status 1:ENABLED-可用2:DISABLE-不可用
     * @param string $PrimaryKey 主要签名key，不传则由系统自动生成
     * @param string $SecondaryKey 次要签名key，不传则由系统自动生成
     * @param integer $CreatedTime 创建时间
     * @param array $PropagatingProperties 传播属性列表
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
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
