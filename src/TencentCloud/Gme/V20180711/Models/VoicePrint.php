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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 声纹配置参数
 *
 * @method integer getMode() 获取默认为0，表示不启用声纹。1表示启用声纹，此时需要填写voiceprint id。
 * @method void setMode(integer $Mode) 设置默认为0，表示不启用声纹。1表示启用声纹，此时需要填写voiceprint id。
 * @method array getIdList() 获取VoicePrint Mode为1时需要填写，目前仅支持填写一个声纹id
 * @method void setIdList(array $IdList) 设置VoicePrint Mode为1时需要填写，目前仅支持填写一个声纹id
 */
class VoicePrint extends AbstractModel
{
    /**
     * @var integer 默认为0，表示不启用声纹。1表示启用声纹，此时需要填写voiceprint id。
     */
    public $Mode;

    /**
     * @var array VoicePrint Mode为1时需要填写，目前仅支持填写一个声纹id
     */
    public $IdList;

    /**
     * @param integer $Mode 默认为0，表示不启用声纹。1表示启用声纹，此时需要填写voiceprint id。
     * @param array $IdList VoicePrint Mode为1时需要填写，目前仅支持填写一个声纹id
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }
    }
}
