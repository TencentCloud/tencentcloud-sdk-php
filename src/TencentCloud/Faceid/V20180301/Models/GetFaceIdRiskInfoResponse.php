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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdRiskInfo返回参数结构体
 *
 * @method string getDeviceInfoTag() 获取描述当前请求所在设备的风险标签
- 详情如下：
01-设备疑似被Root/设备疑似越狱。
02-设备疑似被注入。
03-设备疑似为模拟器。
04-设备疑似存在风险操作。
05-摄像头疑似被劫持。
06-疑似黑产设备。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceInfoTag(string $DeviceInfoTag) 设置描述当前请求所在设备的风险标签
- 详情如下：
01-设备疑似被Root/设备疑似越狱。
02-设备疑似被注入。
03-设备疑似为模拟器。
04-设备疑似存在风险操作。
05-摄像头疑似被劫持。
06-疑似黑产设备。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceInfoLevel() 获取描述当前请求所在设备的风险等级，共4级。
- 详情如下：
 1 - 低风险。
 2 - 中风险。
 3 - 高风险。
 4 - 攻击。 
-1表示未获取到风险等级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceInfoLevel(integer $DeviceInfoLevel) 设置描述当前请求所在设备的风险等级，共4级。
- 详情如下：
 1 - 低风险。
 2 - 中风险。
 3 - 高风险。
 4 - 攻击。 
-1表示未获取到风险等级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenId() 获取设备id标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenId(string $OpenId) 设置设备id标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCameraInfoLevel() 获取描述当前请求所在设备的相机指纹风险等级，共4级。
- 详情如下：
 1 - 低风险。
 2 - 中风险。
 3 - 高风险。
 4 - 攻击。
 -1表示未获取到风险等级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCameraInfoLevel(integer $CameraInfoLevel) 设置描述当前请求所在设备的相机指纹风险等级，共4级。
- 详情如下：
 1 - 低风险。
 2 - 中风险。
 3 - 高风险。
 4 - 攻击。
 -1表示未获取到风险等级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCameraInfoTag() 获取描述当前请求所在设备的相机指纹风险标签。

- 详情如下：
 01-设备疑似被Root/设备疑似越狱。
 02-设备疑似被注入。
 03-设备疑似为模拟器。
 04-设备疑似存在风险操作。
 05-摄像头疑似被劫持。
 06-疑似黑产设备。
 空表示没有相机指纹风险。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCameraInfoTag(string $CameraInfoTag) 设置描述当前请求所在设备的相机指纹风险标签。

- 详情如下：
 01-设备疑似被Root/设备疑似越狱。
 02-设备疑似被注入。
 03-设备疑似为模拟器。
 04-设备疑似存在风险操作。
 05-摄像头疑似被劫持。
 06-疑似黑产设备。
 空表示没有相机指纹风险。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取获取token时透传的信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置获取token时透传的信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetFaceIdRiskInfoResponse extends AbstractModel
{
    /**
     * @var string 描述当前请求所在设备的风险标签
- 详情如下：
01-设备疑似被Root/设备疑似越狱。
02-设备疑似被注入。
03-设备疑似为模拟器。
04-设备疑似存在风险操作。
05-摄像头疑似被劫持。
06-疑似黑产设备。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceInfoTag;

    /**
     * @var integer 描述当前请求所在设备的风险等级，共4级。
- 详情如下：
 1 - 低风险。
 2 - 中风险。
 3 - 高风险。
 4 - 攻击。 
-1表示未获取到风险等级。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceInfoLevel;

    /**
     * @var string 设备id标识。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenId;

    /**
     * @var integer 描述当前请求所在设备的相机指纹风险等级，共4级。
- 详情如下：
 1 - 低风险。
 2 - 中风险。
 3 - 高风险。
 4 - 攻击。
 -1表示未获取到风险等级。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CameraInfoLevel;

    /**
     * @var string 描述当前请求所在设备的相机指纹风险标签。

- 详情如下：
 01-设备疑似被Root/设备疑似越狱。
 02-设备疑似被注入。
 03-设备疑似为模拟器。
 04-设备疑似存在风险操作。
 05-摄像头疑似被劫持。
 06-疑似黑产设备。
 空表示没有相机指纹风险。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CameraInfoTag;

    /**
     * @var string 获取token时透传的信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DeviceInfoTag 描述当前请求所在设备的风险标签
- 详情如下：
01-设备疑似被Root/设备疑似越狱。
02-设备疑似被注入。
03-设备疑似为模拟器。
04-设备疑似存在风险操作。
05-摄像头疑似被劫持。
06-疑似黑产设备。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceInfoLevel 描述当前请求所在设备的风险等级，共4级。
- 详情如下：
 1 - 低风险。
 2 - 中风险。
 3 - 高风险。
 4 - 攻击。 
-1表示未获取到风险等级。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenId 设备id标识。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CameraInfoLevel 描述当前请求所在设备的相机指纹风险等级，共4级。
- 详情如下：
 1 - 低风险。
 2 - 中风险。
 3 - 高风险。
 4 - 攻击。
 -1表示未获取到风险等级。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CameraInfoTag 描述当前请求所在设备的相机指纹风险标签。

- 详情如下：
 01-设备疑似被Root/设备疑似越狱。
 02-设备疑似被注入。
 03-设备疑似为模拟器。
 04-设备疑似存在风险操作。
 05-摄像头疑似被劫持。
 06-疑似黑产设备。
 空表示没有相机指纹风险。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra 获取token时透传的信息。
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
        if (array_key_exists("DeviceInfoTag",$param) and $param["DeviceInfoTag"] !== null) {
            $this->DeviceInfoTag = $param["DeviceInfoTag"];
        }

        if (array_key_exists("DeviceInfoLevel",$param) and $param["DeviceInfoLevel"] !== null) {
            $this->DeviceInfoLevel = $param["DeviceInfoLevel"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("CameraInfoLevel",$param) and $param["CameraInfoLevel"] !== null) {
            $this->CameraInfoLevel = $param["CameraInfoLevel"];
        }

        if (array_key_exists("CameraInfoTag",$param) and $param["CameraInfoTag"] !== null) {
            $this->CameraInfoTag = $param["CameraInfoTag"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
