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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTicketStatistics请求参数结构体
 *
 * @method string getCaptchaAppId() 获取验证码AppId
 * @method void setCaptchaAppId(string $CaptchaAppId) 设置验证码AppId
 * @method string getStartTimeStr() 获取开始时间字符串
 * @method void setStartTimeStr(string $StartTimeStr) 设置开始时间字符串
 * @method string getEndTimeStr() 获取结束时间字符串
 * @method void setEndTimeStr(string $EndTimeStr) 设置结束时间字符串
 * @method string getDimension() 获取查询粒度
 * @method void setDimension(string $Dimension) 设置查询粒度
 */
class GetTicketStatisticsRequest extends AbstractModel
{
    /**
     * @var string 验证码AppId
     */
    public $CaptchaAppId;

    /**
     * @var string 开始时间字符串
     */
    public $StartTimeStr;

    /**
     * @var string 结束时间字符串
     */
    public $EndTimeStr;

    /**
     * @var string 查询粒度
     */
    public $Dimension;

    /**
     * @param string $CaptchaAppId 验证码AppId
     * @param string $StartTimeStr 开始时间字符串
     * @param string $EndTimeStr 结束时间字符串
     * @param string $Dimension 查询粒度
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
        if (array_key_exists("CaptchaAppId",$param) and $param["CaptchaAppId"] !== null) {
            $this->CaptchaAppId = $param["CaptchaAppId"];
        }

        if (array_key_exists("StartTimeStr",$param) and $param["StartTimeStr"] !== null) {
            $this->StartTimeStr = $param["StartTimeStr"];
        }

        if (array_key_exists("EndTimeStr",$param) and $param["EndTimeStr"] !== null) {
            $this->EndTimeStr = $param["EndTimeStr"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }
    }
}
