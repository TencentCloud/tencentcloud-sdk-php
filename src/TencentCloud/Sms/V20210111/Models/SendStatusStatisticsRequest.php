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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendStatusStatistics请求参数结构体
 *
 * @method string getBeginTime() 获取<p>起始时间，格式为yyyymmddhh，精确到小时，例如2024050113，表示2024年5月1号13时。注：统计范围包含当前小时。</p><p>参数格式：yyyymmddhh</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>起始时间，格式为yyyymmddhh，精确到小时，例如2024050113，表示2024年5月1号13时。注：统计范围包含当前小时。</p><p>参数格式：yyyymmddhh</p>
 * @method string getEndTime() 获取<p>结束时间，格式为yyyymmddhh，精确到小时，例如2024050118，表示2024年5月1号18时。注：EndTime 必须大于等于 BeginTime，统计范围包含当前小时。</p><p>参数格式：yyyymmddhh</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，格式为yyyymmddhh，精确到小时，例如2024050118，表示2024年5月1号18时。注：EndTime 必须大于等于 BeginTime，统计范围包含当前小时。</p><p>参数格式：yyyymmddhh</p>
 * @method string getSmsSdkAppId() 获取<p>短信 SdkAppId 在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId，示例如1400006666。</p>
 * @method void setSmsSdkAppId(string $SmsSdkAppId) 设置<p>短信 SdkAppId 在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId，示例如1400006666。</p>
 * @method integer getLimit() 获取<p>最大上限。<br>注：目前固定设置为0。</p>
 * @method void setLimit(integer $Limit) 设置<p>最大上限。<br>注：目前固定设置为0。</p>
 * @method integer getOffset() 获取<p>偏移量。<br>注：目前固定设置为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量。<br>注：目前固定设置为0。</p>
 */
class SendStatusStatisticsRequest extends AbstractModel
{
    /**
     * @var string <p>起始时间，格式为yyyymmddhh，精确到小时，例如2024050113，表示2024年5月1号13时。注：统计范围包含当前小时。</p><p>参数格式：yyyymmddhh</p>
     */
    public $BeginTime;

    /**
     * @var string <p>结束时间，格式为yyyymmddhh，精确到小时，例如2024050118，表示2024年5月1号18时。注：EndTime 必须大于等于 BeginTime，统计范围包含当前小时。</p><p>参数格式：yyyymmddhh</p>
     */
    public $EndTime;

    /**
     * @var string <p>短信 SdkAppId 在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId，示例如1400006666。</p>
     */
    public $SmsSdkAppId;

    /**
     * @var integer <p>最大上限。<br>注：目前固定设置为0。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量。<br>注：目前固定设置为0。</p>
     */
    public $Offset;

    /**
     * @param string $BeginTime <p>起始时间，格式为yyyymmddhh，精确到小时，例如2024050113，表示2024年5月1号13时。注：统计范围包含当前小时。</p><p>参数格式：yyyymmddhh</p>
     * @param string $EndTime <p>结束时间，格式为yyyymmddhh，精确到小时，例如2024050118，表示2024年5月1号18时。注：EndTime 必须大于等于 BeginTime，统计范围包含当前小时。</p><p>参数格式：yyyymmddhh</p>
     * @param string $SmsSdkAppId <p>短信 SdkAppId 在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId，示例如1400006666。</p>
     * @param integer $Limit <p>最大上限。<br>注：目前固定设置为0。</p>
     * @param integer $Offset <p>偏移量。<br>注：目前固定设置为0。</p>
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
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
    }
}
