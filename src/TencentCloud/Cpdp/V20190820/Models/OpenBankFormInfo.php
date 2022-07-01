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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网银页面提交html
 *
 * @method string getFormHtml() 获取网银页面提交html
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormHtml(string $FormHtml) 设置网银页面提交html
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormEncoding() 获取网银提交页面字符集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormEncoding(string $FormEncoding) 设置网银提交页面字符集
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpenBankFormInfo extends AbstractModel
{
    /**
     * @var string 网银页面提交html
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FormHtml;

    /**
     * @var string 网银提交页面字符集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FormEncoding;

    /**
     * @param string $FormHtml 网银页面提交html
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FormEncoding 网银提交页面字符集
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FormHtml",$param) and $param["FormHtml"] !== null) {
            $this->FormHtml = $param["FormHtml"];
        }

        if (array_key_exists("FormEncoding",$param) and $param["FormEncoding"] !== null) {
            $this->FormEncoding = $param["FormEncoding"];
        }
    }
}
