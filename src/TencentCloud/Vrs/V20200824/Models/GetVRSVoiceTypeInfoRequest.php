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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetVRSVoiceTypeInfo请求参数结构体
 *
 * @method integer getVoiceType() 获取音色id。
 * @method void setVoiceType(integer $VoiceType) 设置音色id。
 * @method integer getTaskType() 获取0 - 除快速声音复刻外其他复刻类型（默认）； 5 - 快速声音复刻。 默认为0。
 * @method void setTaskType(integer $TaskType) 设置0 - 除快速声音复刻外其他复刻类型（默认）； 5 - 快速声音复刻。 默认为0。
 * @method string getFastVoiceType() 获取快速复刻音色id。
 * @method void setFastVoiceType(string $FastVoiceType) 设置快速复刻音色id。
 */
class GetVRSVoiceTypeInfoRequest extends AbstractModel
{
    /**
     * @var integer 音色id。
     */
    public $VoiceType;

    /**
     * @var integer 0 - 除快速声音复刻外其他复刻类型（默认）； 5 - 快速声音复刻。 默认为0。
     */
    public $TaskType;

    /**
     * @var string 快速复刻音色id。
     */
    public $FastVoiceType;

    /**
     * @param integer $VoiceType 音色id。
     * @param integer $TaskType 0 - 除快速声音复刻外其他复刻类型（默认）； 5 - 快速声音复刻。 默认为0。
     * @param string $FastVoiceType 快速复刻音色id。
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
        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("FastVoiceType",$param) and $param["FastVoiceType"] !== null) {
            $this->FastVoiceType = $param["FastVoiceType"];
        }
    }
}
