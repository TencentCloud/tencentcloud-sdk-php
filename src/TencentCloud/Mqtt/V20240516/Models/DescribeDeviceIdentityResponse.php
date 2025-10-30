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
 * DescribeDeviceIdentity返回参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method string getDeviceId() 获取设备id
 * @method void setDeviceId(string $DeviceId) 设置设备id
 * @method integer getStatus() 获取1:ENABLED-可用
 2:DISABLE-不可用
 * @method void setStatus(integer $Status) 设置1:ENABLED-可用
 2:DISABLE-不可用
 * @method string getPrimaryKey() 获取主要签名key
 * @method void setPrimaryKey(string $PrimaryKey) 设置主要签名key
 * @method string getSecondaryKey() 获取次要签名key
 * @method void setSecondaryKey(string $SecondaryKey) 设置次要签名key
 * @method integer getCreatedTime() 获取创建时间
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间
 * @method array getPropagatingProperties() 获取该设备id的传播属性
 * @method void setPropagatingProperties(array $PropagatingProperties) 设置该设备id的传播属性
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDeviceIdentityResponse extends AbstractModel
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
     * @var integer 1:ENABLED-可用
 2:DISABLE-不可用
     */
    public $Status;

    /**
     * @var string 主要签名key
     */
    public $PrimaryKey;

    /**
     * @var string 次要签名key
     */
    public $SecondaryKey;

    /**
     * @var integer 创建时间
     */
    public $CreatedTime;

    /**
     * @var array 该设备id的传播属性
     */
    public $PropagatingProperties;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 集群id
     * @param string $DeviceId 设备id
     * @param integer $Status 1:ENABLED-可用
 2:DISABLE-不可用
     * @param string $PrimaryKey 主要签名key
     * @param string $SecondaryKey 次要签名key
     * @param integer $CreatedTime 创建时间
     * @param array $PropagatingProperties 该设备id的传播属性
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
