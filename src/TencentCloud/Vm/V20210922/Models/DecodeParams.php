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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频解码参数
 *
 * @method integer getImageFrequency() 获取<p>视频截帧参数</p><p>取值范围：[0, 30]</p>
 * @method void setImageFrequency(integer $ImageFrequency) 设置<p>视频截帧参数</p><p>取值范围：[0, 30]</p>
 */
class DecodeParams extends AbstractModel
{
    /**
     * @var integer <p>视频截帧参数</p><p>取值范围：[0, 30]</p>
     */
    public $ImageFrequency;

    /**
     * @param integer $ImageFrequency <p>视频截帧参数</p><p>取值范围：[0, 30]</p>
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
        if (array_key_exists("ImageFrequency",$param) and $param["ImageFrequency"] !== null) {
            $this->ImageFrequency = $param["ImageFrequency"];
        }
    }
}
