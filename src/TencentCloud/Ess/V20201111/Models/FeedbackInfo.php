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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 信息提取结果字段反馈
 *
 * @method integer getResult() 获取合同信息提取结果反馈。
`值如下`：
- 0:  未反馈
- 1: 信息提取正确
- 2: 信息提取有错误
 * @method void setResult(integer $Result) 设置合同信息提取结果反馈。
`值如下`：
- 0:  未反馈
- 1: 信息提取正确
- 2: 信息提取有错误
 * @method FeedbackInfoReason getReason() 获取信息提取错误原因，当Result为2时需要填写此信息
 * @method void setReason(FeedbackInfoReason $Reason) 设置信息提取错误原因，当Result为2时需要填写此信息
 */
class FeedbackInfo extends AbstractModel
{
    /**
     * @var integer 合同信息提取结果反馈。
`值如下`：
- 0:  未反馈
- 1: 信息提取正确
- 2: 信息提取有错误
     */
    public $Result;

    /**
     * @var FeedbackInfoReason 信息提取错误原因，当Result为2时需要填写此信息
     */
    public $Reason;

    /**
     * @param integer $Result 合同信息提取结果反馈。
`值如下`：
- 0:  未反馈
- 1: 信息提取正确
- 2: 信息提取有错误
     * @param FeedbackInfoReason $Reason 信息提取错误原因，当Result为2时需要填写此信息
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = new FeedbackInfoReason();
            $this->Reason->deserialize($param["Reason"]);
        }
    }
}
