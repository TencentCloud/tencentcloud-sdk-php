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
namespace TencentCloud\Cloudapp\V20220530\Models;
use TencentCloud\Common\AbstractModel;

/**
 * License 内容信息
 *
 * @method string getText() 获取<p>License 文本内容。可传入密钥、证书等文本型 License 内容，二进制内容请进行 base64 编码</p>
 * @method void setText(string $Text) 设置<p>License 文本内容。可传入密钥、证书等文本型 License 内容，二进制内容请进行 base64 编码</p>
 * @method string getExtraData() 获取<p>License 的额外信息，JSON 字符串格式</p>
 * @method void setExtraData(string $ExtraData) 设置<p>License 的额外信息，JSON 字符串格式</p>
 */
class PartnerLicenseData extends AbstractModel
{
    /**
     * @var string <p>License 文本内容。可传入密钥、证书等文本型 License 内容，二进制内容请进行 base64 编码</p>
     */
    public $Text;

    /**
     * @var string <p>License 的额外信息，JSON 字符串格式</p>
     */
    public $ExtraData;

    /**
     * @param string $Text <p>License 文本内容。可传入密钥、证书等文本型 License 内容，二进制内容请进行 base64 编码</p>
     * @param string $ExtraData <p>License 的额外信息，JSON 字符串格式</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }
    }
}
