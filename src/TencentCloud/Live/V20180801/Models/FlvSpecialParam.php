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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * flv格式特殊配置
 *
 * @method boolean getUploadInRecording() 获取是否开启边录边传，仅flv格式有效。
 * @method void setUploadInRecording(boolean $UploadInRecording) 设置是否开启边录边传，仅flv格式有效。
 */
class FlvSpecialParam extends AbstractModel
{
    /**
     * @var boolean 是否开启边录边传，仅flv格式有效。
     */
    public $UploadInRecording;

    /**
     * @param boolean $UploadInRecording 是否开启边录边传，仅flv格式有效。
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
        if (array_key_exists("UploadInRecording",$param) and $param["UploadInRecording"] !== null) {
            $this->UploadInRecording = $param["UploadInRecording"];
        }
    }
}
