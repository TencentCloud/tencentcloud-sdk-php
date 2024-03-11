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
 * GetDeviceSumStatistics返回参数结构体
 *
 * @method integer getActivationCount() 获取激活设备总数
 * @method void setActivationCount(integer $ActivationCount) 设置激活设备总数
 * @method integer getOnlineCount() 获取在线设备总数
 * @method void setOnlineCount(integer $OnlineCount) 设置在线设备总数
 * @method integer getActivationBeforeDay() 获取前一天激活设备数
 * @method void setActivationBeforeDay(integer $ActivationBeforeDay) 设置前一天激活设备数
 * @method integer getActiveBeforeDay() 获取前一天活跃设备数
 * @method void setActiveBeforeDay(integer $ActiveBeforeDay) 设置前一天活跃设备数
 * @method integer getActivationWeekDayCount() 获取前一周激活设备数
 * @method void setActivationWeekDayCount(integer $ActivationWeekDayCount) 设置前一周激活设备数
 * @method integer getActiveWeekDayCount() 获取前一周活跃设备数
 * @method void setActiveWeekDayCount(integer $ActiveWeekDayCount) 设置前一周活跃设备数
 * @method integer getActivationBeforeWeekDayCount() 获取上一周激活设备数
 * @method void setActivationBeforeWeekDayCount(integer $ActivationBeforeWeekDayCount) 设置上一周激活设备数
 * @method integer getActiveBeforeWeekDayCount() 获取上一周活跃设备数
 * @method void setActiveBeforeWeekDayCount(integer $ActiveBeforeWeekDayCount) 设置上一周活跃设备数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetDeviceSumStatisticsResponse extends AbstractModel
{
    /**
     * @var integer 激活设备总数
     */
    public $ActivationCount;

    /**
     * @var integer 在线设备总数
     */
    public $OnlineCount;

    /**
     * @var integer 前一天激活设备数
     */
    public $ActivationBeforeDay;

    /**
     * @var integer 前一天活跃设备数
     */
    public $ActiveBeforeDay;

    /**
     * @var integer 前一周激活设备数
     */
    public $ActivationWeekDayCount;

    /**
     * @var integer 前一周活跃设备数
     */
    public $ActiveWeekDayCount;

    /**
     * @var integer 上一周激活设备数
     */
    public $ActivationBeforeWeekDayCount;

    /**
     * @var integer 上一周活跃设备数
     */
    public $ActiveBeforeWeekDayCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ActivationCount 激活设备总数
     * @param integer $OnlineCount 在线设备总数
     * @param integer $ActivationBeforeDay 前一天激活设备数
     * @param integer $ActiveBeforeDay 前一天活跃设备数
     * @param integer $ActivationWeekDayCount 前一周激活设备数
     * @param integer $ActiveWeekDayCount 前一周活跃设备数
     * @param integer $ActivationBeforeWeekDayCount 上一周激活设备数
     * @param integer $ActiveBeforeWeekDayCount 上一周活跃设备数
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
        if (array_key_exists("ActivationCount",$param) and $param["ActivationCount"] !== null) {
            $this->ActivationCount = $param["ActivationCount"];
        }

        if (array_key_exists("OnlineCount",$param) and $param["OnlineCount"] !== null) {
            $this->OnlineCount = $param["OnlineCount"];
        }

        if (array_key_exists("ActivationBeforeDay",$param) and $param["ActivationBeforeDay"] !== null) {
            $this->ActivationBeforeDay = $param["ActivationBeforeDay"];
        }

        if (array_key_exists("ActiveBeforeDay",$param) and $param["ActiveBeforeDay"] !== null) {
            $this->ActiveBeforeDay = $param["ActiveBeforeDay"];
        }

        if (array_key_exists("ActivationWeekDayCount",$param) and $param["ActivationWeekDayCount"] !== null) {
            $this->ActivationWeekDayCount = $param["ActivationWeekDayCount"];
        }

        if (array_key_exists("ActiveWeekDayCount",$param) and $param["ActiveWeekDayCount"] !== null) {
            $this->ActiveWeekDayCount = $param["ActiveWeekDayCount"];
        }

        if (array_key_exists("ActivationBeforeWeekDayCount",$param) and $param["ActivationBeforeWeekDayCount"] !== null) {
            $this->ActivationBeforeWeekDayCount = $param["ActivationBeforeWeekDayCount"];
        }

        if (array_key_exists("ActiveBeforeWeekDayCount",$param) and $param["ActiveBeforeWeekDayCount"] !== null) {
            $this->ActiveBeforeWeekDayCount = $param["ActiveBeforeWeekDayCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
