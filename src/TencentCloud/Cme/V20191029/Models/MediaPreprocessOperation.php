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
 * 媒体处理视频合成任务的预处理操作。
 *
 * @method string getType() 获取预处理操作的类型，取值范围：
<li>ImageTextMask：图片文字遮罩。</li>
 * @method void setType(string $Type) 设置预处理操作的类型，取值范围：
<li>ImageTextMask：图片文字遮罩。</li>
 * @method array getArgs() 获取预处理操作参数。
当 Type 取值 ImageTextMask 时，参数为要保留的文字。
 * @method void setArgs(array $Args) 设置预处理操作参数。
当 Type 取值 ImageTextMask 时，参数为要保留的文字。
 */
class MediaPreprocessOperation extends AbstractModel
{
    /**
     * @var string 预处理操作的类型，取值范围：
<li>ImageTextMask：图片文字遮罩。</li>
     */
    public $Type;

    /**
     * @var array 预处理操作参数。
当 Type 取值 ImageTextMask 时，参数为要保留的文字。
     */
    public $Args;

    /**
     * @param string $Type 预处理操作的类型，取值范围：
<li>ImageTextMask：图片文字遮罩。</li>
     * @param array $Args 预处理操作参数。
当 Type 取值 ImageTextMask 时，参数为要保留的文字。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }
    }
}
