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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextTranslateBatch返回参数结构体
 *
 * @method string getSource() 获取源语言，详见入参Source
 * @method void setSource(string $Source) 设置源语言，详见入参Source
 * @method string getTarget() 获取目标语言，详见入参Target
 * @method void setTarget(string $Target) 设置目标语言，详见入参Target
 * @method array getTargetTextList() 获取翻译后的文本列表
 * @method void setTargetTextList(array $TargetTextList) 设置翻译后的文本列表
 * @method integer getUsedAmount() 获取本次翻译消耗的字符数
 * @method void setUsedAmount(integer $UsedAmount) 设置本次翻译消耗的字符数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class TextTranslateBatchResponse extends AbstractModel
{
    /**
     * @var string 源语言，详见入参Source
     */
    public $Source;

    /**
     * @var string 目标语言，详见入参Target
     */
    public $Target;

    /**
     * @var array 翻译后的文本列表
     */
    public $TargetTextList;

    /**
     * @var integer 本次翻译消耗的字符数
     */
    public $UsedAmount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Source 源语言，详见入参Source
     * @param string $Target 目标语言，详见入参Target
     * @param array $TargetTextList 翻译后的文本列表
     * @param integer $UsedAmount 本次翻译消耗的字符数
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("TargetTextList",$param) and $param["TargetTextList"] !== null) {
            $this->TargetTextList = $param["TargetTextList"];
        }

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
