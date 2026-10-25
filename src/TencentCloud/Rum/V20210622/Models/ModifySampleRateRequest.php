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
 * ModifySampleRate请求参数结构体
 *
 * @method integer getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目id</p>
 * @method float getSampleRate() 获取<p>会话采样率</p>
 * @method void setSampleRate(float $SampleRate) 设置<p>会话采样率</p>
 * @method float getReplaySampleRate() 获取<p>录制采样率</p>
 * @method void setReplaySampleRate(float $ReplaySampleRate) 设置<p>录制采样率</p>
 */
class ModifySampleRateRequest extends AbstractModel
{
    /**
     * @var integer <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var float <p>会话采样率</p>
     */
    public $SampleRate;

    /**
     * @var float <p>录制采样率</p>
     */
    public $ReplaySampleRate;

    /**
     * @param integer $ProjectId <p>项目id</p>
     * @param float $SampleRate <p>会话采样率</p>
     * @param float $ReplaySampleRate <p>录制采样率</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ReplaySampleRate",$param) and $param["ReplaySampleRate"] !== null) {
            $this->ReplaySampleRate = $param["ReplaySampleRate"];
        }
    }
}
