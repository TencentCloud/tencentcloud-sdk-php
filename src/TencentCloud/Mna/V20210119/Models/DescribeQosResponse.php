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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQos返回参数结构体
 *
 * @method integer getStatus() 获取0：无匹配的加速中会话
1：存在匹配的加速中会话
 * @method void setStatus(integer $Status) 设置0：无匹配的加速中会话
1：存在匹配的加速中会话
 * @method string getSrcPublicIpv4() 获取手机公网出口IP，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcPublicIpv4(string $SrcPublicIpv4) 设置手机公网出口IP，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDestIpv4() 获取业务访问目的IP，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestIpv4(array $DestIpv4) 设置业务访问目的IP，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取当前加速剩余时长（单位秒）有，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置当前加速剩余时长（单位秒）有，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQosMenu() 获取加速套餐类型，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQosMenu(string $QosMenu) 设置加速套餐类型，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeQosResponse extends AbstractModel
{
    /**
     * @var integer 0：无匹配的加速中会话
1：存在匹配的加速中会话
     */
    public $Status;

    /**
     * @var string 手机公网出口IP，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcPublicIpv4;

    /**
     * @var array 业务访问目的IP，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestIpv4;

    /**
     * @var integer 当前加速剩余时长（单位秒）有，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 加速套餐类型，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QosMenu;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 0：无匹配的加速中会话
1：存在匹配的加速中会话
     * @param string $SrcPublicIpv4 手机公网出口IP，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DestIpv4 业务访问目的IP，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 当前加速剩余时长（单位秒）有，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QosMenu 加速套餐类型，仅匹配时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SrcPublicIpv4",$param) and $param["SrcPublicIpv4"] !== null) {
            $this->SrcPublicIpv4 = $param["SrcPublicIpv4"];
        }

        if (array_key_exists("DestIpv4",$param) and $param["DestIpv4"] !== null) {
            $this->DestIpv4 = $param["DestIpv4"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("QosMenu",$param) and $param["QosMenu"] !== null) {
            $this->QosMenu = $param["QosMenu"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
