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
 * 信息提取结果字段反馈错误原因
 *
 * @method integer getReasonType() 获取反馈信息提取错误原因。
`值如下`：
- 1: 提取错误(提取不精准、提取为空等)
- 2: 其他错误
 * @method void setReasonType(integer $ReasonType) 设置反馈信息提取错误原因。
`值如下`：
- 1: 提取错误(提取不精准、提取为空等)
- 2: 其他错误
 * @method string getReasonContent() 获取反馈提取错误详细错误原因，不能超过500个字符
 * @method void setReasonContent(string $ReasonContent) 设置反馈提取错误详细错误原因，不能超过500个字符
 */
class FeedbackInfoReason extends AbstractModel
{
    /**
     * @var integer 反馈信息提取错误原因。
`值如下`：
- 1: 提取错误(提取不精准、提取为空等)
- 2: 其他错误
     */
    public $ReasonType;

    /**
     * @var string 反馈提取错误详细错误原因，不能超过500个字符
     */
    public $ReasonContent;

    /**
     * @param integer $ReasonType 反馈信息提取错误原因。
`值如下`：
- 1: 提取错误(提取不精准、提取为空等)
- 2: 其他错误
     * @param string $ReasonContent 反馈提取错误详细错误原因，不能超过500个字符
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
        if (array_key_exists("ReasonType",$param) and $param["ReasonType"] !== null) {
            $this->ReasonType = $param["ReasonType"];
        }

        if (array_key_exists("ReasonContent",$param) and $param["ReasonContent"] !== null) {
            $this->ReasonContent = $param["ReasonContent"];
        }
    }
}
