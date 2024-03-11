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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceLocationSolve返回参数结构体
 *
 * @method float getLongitude() 获取经度
 * @method void setLongitude(float $Longitude) 设置经度
 * @method float getLatitude() 获取纬度
 * @method void setLatitude(float $Latitude) 设置纬度
 * @method string getLocationType() 获取类型
 * @method void setLocationType(string $LocationType) 设置类型
 * @method float getAccuracy() 获取误差精度预估，单位为米
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccuracy(float $Accuracy) 设置误差精度预估，单位为米
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDeviceLocationSolveResponse extends AbstractModel
{
    /**
     * @var float 经度
     */
    public $Longitude;

    /**
     * @var float 纬度
     */
    public $Latitude;

    /**
     * @var string 类型
     */
    public $LocationType;

    /**
     * @var float 误差精度预估，单位为米
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Accuracy;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Longitude 经度
     * @param float $Latitude 纬度
     * @param string $LocationType 类型
     * @param float $Accuracy 误差精度预估，单位为米
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("LocationType",$param) and $param["LocationType"] !== null) {
            $this->LocationType = $param["LocationType"];
        }

        if (array_key_exists("Accuracy",$param) and $param["Accuracy"] !== null) {
            $this->Accuracy = $param["Accuracy"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
