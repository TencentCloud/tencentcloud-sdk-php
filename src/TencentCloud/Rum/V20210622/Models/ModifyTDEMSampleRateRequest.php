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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTDEMSampleRate请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID（必填）</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID（必填）</p>
 * @method float getSampleRate() 获取<p>采集采样率 0-100（必填）</p>
 * @method void setSampleRate(float $SampleRate) 设置<p>采集采样率 0-100（必填）</p>
 * @method float getReplaySampleRate() 获取<p>会话回放采样率 0-100（可选）</p>
 * @method void setReplaySampleRate(float $ReplaySampleRate) 设置<p>会话回放采样率 0-100（可选）</p>
 */
class ModifyTDEMSampleRateRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID（必填）</p>
     */
    public $AppId;

    /**
     * @var float <p>采集采样率 0-100（必填）</p>
     */
    public $SampleRate;

    /**
     * @var float <p>会话回放采样率 0-100（可选）</p>
     */
    public $ReplaySampleRate;

    /**
     * @param string $AppId <p>应用 ID（必填）</p>
     * @param float $SampleRate <p>采集采样率 0-100（必填）</p>
     * @param float $ReplaySampleRate <p>会话回放采样率 0-100（可选）</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ReplaySampleRate",$param) and $param["ReplaySampleRate"] !== null) {
            $this->ReplaySampleRate = $param["ReplaySampleRate"];
        }
    }
}
