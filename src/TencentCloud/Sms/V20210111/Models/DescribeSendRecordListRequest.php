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
 * DescribeSendRecordList请求参数结构体
 *
 * @method string getPhoneNumber() 获取<p>下发的手机号码，依据 E.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613601238015， 其中前面有一个+号 ，86为国家码，13601238015为手机号。</p>
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>下发的手机号码，依据 E.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613601238015， 其中前面有一个+号 ，86为国家码，13601238015为手机号。</p>
 * @method string getSmsSdkAppId() 获取<p>短信 SdkAppId 在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId。</p>
 * @method void setSmsSdkAppId(string $SmsSdkAppId) 设置<p>短信 SdkAppId 在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId。</p>
 * @method integer getBeginTime() 获取<p>查询起始时间，以短信发送时间为准，UNIX 时间戳（单位：秒）。注：最早可查询当前时间前 72 小时的数据。</p><p>单位：秒</p>
 * @method void setBeginTime(integer $BeginTime) 设置<p>查询起始时间，以短信发送时间为准，UNIX 时间戳（单位：秒）。注：最早可查询当前时间前 72 小时的数据。</p><p>单位：秒</p>
 * @method integer getEndTime() 获取<p>查询截止时间，以短信发送时间为准，UNIX 时间戳（时间：秒）。注：不可以超过当前时间。</p><p>单位：秒</p><p>默认值：腾讯云服务当前时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>查询截止时间，以短信发送时间为准，UNIX 时间戳（时间：秒）。注：不可以超过当前时间。</p><p>单位：秒</p><p>默认值：腾讯云服务当前时间</p>
 * @method integer getLimit() 获取<p>单次查询最大条数。</p><p>取值范围：[1, 50]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>单次查询最大条数。</p><p>取值范围：[1, 50]</p><p>默认值：20</p>
 * @method integer getOffset() 获取<p>偏移量。 </p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>注：查询范围内超过 1000 条记录将被截断，最大查询 1000 条，查询记录按发送时间降序。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量。 </p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>注：查询范围内超过 1000 条记录将被截断，最大查询 1000 条，查询记录按发送时间降序。</p>
 */
class DescribeSendRecordListRequest extends AbstractModel
{
    /**
     * @var string <p>下发的手机号码，依据 E.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613601238015， 其中前面有一个+号 ，86为国家码，13601238015为手机号。</p>
     */
    public $PhoneNumber;

    /**
     * @var string <p>短信 SdkAppId 在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId。</p>
     */
    public $SmsSdkAppId;

    /**
     * @var integer <p>查询起始时间，以短信发送时间为准，UNIX 时间戳（单位：秒）。注：最早可查询当前时间前 72 小时的数据。</p><p>单位：秒</p>
     */
    public $BeginTime;

    /**
     * @var integer <p>查询截止时间，以短信发送时间为准，UNIX 时间戳（时间：秒）。注：不可以超过当前时间。</p><p>单位：秒</p><p>默认值：腾讯云服务当前时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>单次查询最大条数。</p><p>取值范围：[1, 50]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量。 </p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>注：查询范围内超过 1000 条记录将被截断，最大查询 1000 条，查询记录按发送时间降序。</p>
     */
    public $Offset;

    /**
     * @param string $PhoneNumber <p>下发的手机号码，依据 E.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613601238015， 其中前面有一个+号 ，86为国家码，13601238015为手机号。</p>
     * @param string $SmsSdkAppId <p>短信 SdkAppId 在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId。</p>
     * @param integer $BeginTime <p>查询起始时间，以短信发送时间为准，UNIX 时间戳（单位：秒）。注：最早可查询当前时间前 72 小时的数据。</p><p>单位：秒</p>
     * @param integer $EndTime <p>查询截止时间，以短信发送时间为准，UNIX 时间戳（时间：秒）。注：不可以超过当前时间。</p><p>单位：秒</p><p>默认值：腾讯云服务当前时间</p>
     * @param integer $Limit <p>单次查询最大条数。</p><p>取值范围：[1, 50]</p><p>默认值：20</p>
     * @param integer $Offset <p>偏移量。 </p><p>取值范围：[0, 1000]</p><p>默认值：0</p><p>注：查询范围内超过 1000 条记录将被截断，最大查询 1000 条，查询记录按发送时间降序。</p>
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
        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("SmsSdkAppId",$param) and $param["SmsSdkAppId"] !== null) {
            $this->SmsSdkAppId = $param["SmsSdkAppId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
