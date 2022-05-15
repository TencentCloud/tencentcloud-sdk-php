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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFirstLinkSession返回参数结构体
 *
 * @method integer getStatus() 获取会话状态，具体如下：
1： 加速中；
0： 非加速中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置会话状态，具体如下：
1： 加速中；
0： 非加速中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取剩余加速时间，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置剩余加速时间，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuiteType() 获取加速套餐类型。
套餐说明如下：
T100K：上/下行保障100kbps；
BD4M：下行带宽保障4Mbps；
BU4M：上行带宽保障4Mbps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuiteType(string $SuiteType) 设置加速套餐类型。
套餐说明如下：
T100K：上/下行保障100kbps；
BD4M：下行带宽保障4Mbps；
BU4M：上行带宽保障4Mbps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcPublicIpv4() 获取加速终端的公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcPublicIpv4(string $SrcPublicIpv4) 设置加速终端的公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDestIpv4() 获取加速目标ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestIpv4(array $DestIpv4) 设置加速目标ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFirstLinkSessionResponse extends AbstractModel
{
    /**
     * @var integer 会话状态，具体如下：
1： 加速中；
0： 非加速中。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 剩余加速时间，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 加速套餐类型。
套餐说明如下：
T100K：上/下行保障100kbps；
BD4M：下行带宽保障4Mbps；
BU4M：上行带宽保障4Mbps。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuiteType;

    /**
     * @var string 加速终端的公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcPublicIpv4;

    /**
     * @var array 加速目标ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestIpv4;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 会话状态，具体如下：
1： 加速中；
0： 非加速中。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 剩余加速时间，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SuiteType 加速套餐类型。
套餐说明如下：
T100K：上/下行保障100kbps；
BD4M：下行带宽保障4Mbps；
BU4M：上行带宽保障4Mbps。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcPublicIpv4 加速终端的公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DestIpv4 加速目标ip
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("SuiteType",$param) and $param["SuiteType"] !== null) {
            $this->SuiteType = $param["SuiteType"];
        }

        if (array_key_exists("SrcPublicIpv4",$param) and $param["SrcPublicIpv4"] !== null) {
            $this->SrcPublicIpv4 = $param["SrcPublicIpv4"];
        }

        if (array_key_exists("DestIpv4",$param) and $param["DestIpv4"] !== null) {
            $this->DestIpv4 = $param["DestIpv4"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
