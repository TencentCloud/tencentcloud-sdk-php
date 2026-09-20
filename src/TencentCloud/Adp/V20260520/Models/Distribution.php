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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回复类型分布项
 *
 * @method string getCallCount() 获取<p>该回复方式的调用次数</p>
 * @method void setCallCount(string $CallCount) 设置<p>该回复方式的调用次数</p>
 * @method float getPercentage() 获取<p>该回复方式在总调用次数中的占比（百分比，0~100，保留两位小数；无数据时全为 0，有数据时各项之和为 100）</p>
 * @method void setPercentage(float $Percentage) 设置<p>该回复方式在总调用次数中的占比（百分比，0~100，保留两位小数；无数据时全为 0，有数据时各项之和为 100）</p>
 * @method string getReplyName() 获取<p>回复方式名称（已按请求语言国际化；i18n 缺失时兜底为 reply_method 的枚举名）</p>
 * @method void setReplyName(string $ReplyName) 设置<p>回复方式名称（已按请求语言国际化；i18n 缺失时兜底为 reply_method 的枚举名）</p>
 */
class Distribution extends AbstractModel
{
    /**
     * @var string <p>该回复方式的调用次数</p>
     */
    public $CallCount;

    /**
     * @var float <p>该回复方式在总调用次数中的占比（百分比，0~100，保留两位小数；无数据时全为 0，有数据时各项之和为 100）</p>
     */
    public $Percentage;

    /**
     * @var string <p>回复方式名称（已按请求语言国际化；i18n 缺失时兜底为 reply_method 的枚举名）</p>
     */
    public $ReplyName;

    /**
     * @param string $CallCount <p>该回复方式的调用次数</p>
     * @param float $Percentage <p>该回复方式在总调用次数中的占比（百分比，0~100，保留两位小数；无数据时全为 0，有数据时各项之和为 100）</p>
     * @param string $ReplyName <p>回复方式名称（已按请求语言国际化；i18n 缺失时兜底为 reply_method 的枚举名）</p>
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
        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("ReplyName",$param) and $param["ReplyName"] !== null) {
            $this->ReplyName = $param["ReplyName"];
        }
    }
}
