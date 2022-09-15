<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播转直播输入断流信息。
 *
 * @method MediaCastSourceInfo getSourceInfo() 获取发生断流的输入源信息。
 * @method void setSourceInfo(MediaCastSourceInfo $SourceInfo) 设置发生断流的输入源信息。
 * @method string getReason() 获取输入源断开原因。取值有：
<li>SystemError：系统错误；</li>
<li>Unknown：未知错误。</li>
 * @method void setReason(string $Reason) 设置输入源断开原因。取值有：
<li>SystemError：系统错误；</li>
<li>Unknown：未知错误。</li>
 */
class MediaCastSourceInterruptInfo extends AbstractModel
{
    /**
     * @var MediaCastSourceInfo 发生断流的输入源信息。
     */
    public $SourceInfo;

    /**
     * @var string 输入源断开原因。取值有：
<li>SystemError：系统错误；</li>
<li>Unknown：未知错误。</li>
     */
    public $Reason;

    /**
     * @param MediaCastSourceInfo $SourceInfo 发生断流的输入源信息。
     * @param string $Reason 输入源断开原因。取值有：
<li>SystemError：系统错误；</li>
<li>Unknown：未知错误。</li>
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
        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new MediaCastSourceInfo();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
