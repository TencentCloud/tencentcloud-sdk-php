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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SmsPackagesStatistics请求参数结构体
 *
 * @method string getSmsSdkAppId() 获取短信 SdkAppId 在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
 * @method void setSmsSdkAppId(string $SmsSdkAppId) 设置短信 SdkAppId 在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
 * @method integer getLimit() 获取最大上限(需要拉取的套餐包个数)。
注：Limit默认最大值为500，可结合Offset实现分页查询。
 * @method void setLimit(integer $Limit) 设置最大上限(需要拉取的套餐包个数)。
注：Limit默认最大值为500，可结合Offset实现分页查询。
 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method string getBeginTime() 获取起始时间，格式为yyyymmddhh，精确到小时，例如2024050113，表示2024年5月1号13时。
注：接口会返回 BeginTime 到 EndTime 之间创建的套餐包的统计信息。
 * @method void setBeginTime(string $BeginTime) 设置起始时间，格式为yyyymmddhh，精确到小时，例如2024050113，表示2024年5月1号13时。
注：接口会返回 BeginTime 到 EndTime 之间创建的套餐包的统计信息。
 * @method string getEndTime() 获取结束时间，格式为yyyymmddhh，精确到小时，例如2024050118，表示2024年5月1号18时。
注：EndTime 必须大于 BeginTime 且小于当前时间。
 * @method void setEndTime(string $EndTime) 设置结束时间，格式为yyyymmddhh，精确到小时，例如2024050118，表示2024年5月1号18时。
注：EndTime 必须大于 BeginTime 且小于当前时间。
 */
class SmsPackagesStatisticsRequest extends AbstractModel
{
    /**
     * @var string 短信 SdkAppId 在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
     */
    public $SmsSdkAppId;

    /**
     * @var integer 最大上限(需要拉取的套餐包个数)。
注：Limit默认最大值为500，可结合Offset实现分页查询。
     */
    public $Limit;

    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var string 起始时间，格式为yyyymmddhh，精确到小时，例如2024050113，表示2024年5月1号13时。
注：接口会返回 BeginTime 到 EndTime 之间创建的套餐包的统计信息。
     */
    public $BeginTime;

    /**
     * @var string 结束时间，格式为yyyymmddhh，精确到小时，例如2024050118，表示2024年5月1号18时。
注：EndTime 必须大于 BeginTime 且小于当前时间。
     */
    public $EndTime;

    /**
     * @param string $SmsSdkAppId 短信 SdkAppId 在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
     * @param integer $Limit 最大上限(需要拉取的套餐包个数)。
注：Limit默认最大值为500，可结合Offset实现分页查询。
     * @param integer $Offset 偏移量。
     * @param string $BeginTime 起始时间，格式为yyyymmddhh，精确到小时，例如2024050113，表示2024年5月1号13时。
注：接口会返回 BeginTime 到 EndTime 之间创建的套餐包的统计信息。
     * @param string $EndTime 结束时间，格式为yyyymmddhh，精确到小时，例如2024050118，表示2024年5月1号18时。
注：EndTime 必须大于 BeginTime 且小于当前时间。
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
        if (array_key_exists("SmsSdkAppId",$param) and $param["SmsSdkAppId"] !== null) {
            $this->SmsSdkAppId = $param["SmsSdkAppId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
