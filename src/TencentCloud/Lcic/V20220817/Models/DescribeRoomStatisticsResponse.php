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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoomStatistics返回参数结构体
 *
 * @method integer getPeakMemberNumber() 获取峰值在线成员人数。
 * @method void setPeakMemberNumber(integer $PeakMemberNumber) 设置峰值在线成员人数。
 * @method integer getMemberNumber() 获取累计在线人数。
 * @method void setMemberNumber(integer $MemberNumber) 设置累计在线人数。
 * @method integer getTotal() 获取记录总数。包含进入房间或者应到未到的。
 * @method void setTotal(integer $Total) 设置记录总数。包含进入房间或者应到未到的。
 * @method array getMemberRecords() 获取成员记录列表。
 * @method void setMemberRecords(array $MemberRecords) 设置成员记录列表。
 * @method integer getRealStartTime() 获取秒级unix时间戳，实际房间开始时间。
 * @method void setRealStartTime(integer $RealStartTime) 设置秒级unix时间戳，实际房间开始时间。
 * @method integer getRealEndTime() 获取秒级unix时间戳，实际房间结束时间。
 * @method void setRealEndTime(integer $RealEndTime) 设置秒级unix时间戳，实际房间结束时间。
 * @method integer getMessageCount() 获取课堂消息总数。
 * @method void setMessageCount(integer $MessageCount) 设置课堂消息总数。
 * @method integer getMicCount() 获取课堂连麦总数。
 * @method void setMicCount(integer $MicCount) 设置课堂连麦总数。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRoomStatisticsResponse extends AbstractModel
{
    /**
     * @var integer 峰值在线成员人数。
     */
    public $PeakMemberNumber;

    /**
     * @var integer 累计在线人数。
     */
    public $MemberNumber;

    /**
     * @var integer 记录总数。包含进入房间或者应到未到的。
     */
    public $Total;

    /**
     * @var array 成员记录列表。
     */
    public $MemberRecords;

    /**
     * @var integer 秒级unix时间戳，实际房间开始时间。
     */
    public $RealStartTime;

    /**
     * @var integer 秒级unix时间戳，实际房间结束时间。
     */
    public $RealEndTime;

    /**
     * @var integer 课堂消息总数。
     */
    public $MessageCount;

    /**
     * @var integer 课堂连麦总数。
     */
    public $MicCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PeakMemberNumber 峰值在线成员人数。
     * @param integer $MemberNumber 累计在线人数。
     * @param integer $Total 记录总数。包含进入房间或者应到未到的。
     * @param array $MemberRecords 成员记录列表。
     * @param integer $RealStartTime 秒级unix时间戳，实际房间开始时间。
     * @param integer $RealEndTime 秒级unix时间戳，实际房间结束时间。
     * @param integer $MessageCount 课堂消息总数。
     * @param integer $MicCount 课堂连麦总数。
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
        if (array_key_exists("PeakMemberNumber",$param) and $param["PeakMemberNumber"] !== null) {
            $this->PeakMemberNumber = $param["PeakMemberNumber"];
        }

        if (array_key_exists("MemberNumber",$param) and $param["MemberNumber"] !== null) {
            $this->MemberNumber = $param["MemberNumber"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("MemberRecords",$param) and $param["MemberRecords"] !== null) {
            $this->MemberRecords = [];
            foreach ($param["MemberRecords"] as $key => $value){
                $obj = new MemberRecord();
                $obj->deserialize($value);
                array_push($this->MemberRecords, $obj);
            }
        }

        if (array_key_exists("RealStartTime",$param) and $param["RealStartTime"] !== null) {
            $this->RealStartTime = $param["RealStartTime"];
        }

        if (array_key_exists("RealEndTime",$param) and $param["RealEndTime"] !== null) {
            $this->RealEndTime = $param["RealEndTime"];
        }

        if (array_key_exists("MessageCount",$param) and $param["MessageCount"] !== null) {
            $this->MessageCount = $param["MessageCount"];
        }

        if (array_key_exists("MicCount",$param) and $param["MicCount"] !== null) {
            $this->MicCount = $param["MicCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
