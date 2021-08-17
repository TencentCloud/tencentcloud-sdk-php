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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRotationDetail返回参数结构体
 *
 * @method boolean getEnableRotation() 获取否允许轮转，true表示开启轮转，false表示禁止轮转。
 * @method void setEnableRotation(boolean $EnableRotation) 设置否允许轮转，true表示开启轮转，false表示禁止轮转。
 * @method integer getFrequency() 获取轮转的频率，以天为单位，默认为1天。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrequency(integer $Frequency) 设置轮转的频率，以天为单位，默认为1天。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestRotateTime() 获取最近一次轮转的时间，显式可见的时间字符串，格式 2006-01-02 15:04:05。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestRotateTime(string $LatestRotateTime) 设置最近一次轮转的时间，显式可见的时间字符串，格式 2006-01-02 15:04:05。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextRotateBeginTime() 获取下一次开始轮转的时间，显式可见的时间字符串，格式 2006-01-02 15:04:05。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextRotateBeginTime(string $NextRotateBeginTime) 设置下一次开始轮转的时间，显式可见的时间字符串，格式 2006-01-02 15:04:05。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRotationDetailResponse extends AbstractModel
{
    /**
     * @var boolean 否允许轮转，true表示开启轮转，false表示禁止轮转。
     */
    public $EnableRotation;

    /**
     * @var integer 轮转的频率，以天为单位，默认为1天。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Frequency;

    /**
     * @var string 最近一次轮转的时间，显式可见的时间字符串，格式 2006-01-02 15:04:05。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestRotateTime;

    /**
     * @var string 下一次开始轮转的时间，显式可见的时间字符串，格式 2006-01-02 15:04:05。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextRotateBeginTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $EnableRotation 否允许轮转，true表示开启轮转，false表示禁止轮转。
     * @param integer $Frequency 轮转的频率，以天为单位，默认为1天。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestRotateTime 最近一次轮转的时间，显式可见的时间字符串，格式 2006-01-02 15:04:05。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextRotateBeginTime 下一次开始轮转的时间，显式可见的时间字符串，格式 2006-01-02 15:04:05。
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
        if (array_key_exists("EnableRotation",$param) and $param["EnableRotation"] !== null) {
            $this->EnableRotation = $param["EnableRotation"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("LatestRotateTime",$param) and $param["LatestRotateTime"] !== null) {
            $this->LatestRotateTime = $param["LatestRotateTime"];
        }

        if (array_key_exists("NextRotateBeginTime",$param) and $param["NextRotateBeginTime"] !== null) {
            $this->NextRotateBeginTime = $param["NextRotateBeginTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
