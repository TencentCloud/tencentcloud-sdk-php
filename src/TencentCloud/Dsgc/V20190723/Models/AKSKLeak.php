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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AKSK泄漏信息
 *
 * @method string getAK() 获取AK编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAK(string $AK) 设置AK编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSK() 获取SK编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSK(string $SK) 设置SK编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getURL() 获取URL编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURL(string $URL) 设置URL编码
注意：此字段可能返回 null，表示取不到有效值。
 */
class AKSKLeak extends AbstractModel
{
    /**
     * @var string AK编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AK;

    /**
     * @var string SK编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SK;

    /**
     * @var string URL编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URL;

    /**
     * @param string $AK AK编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SK SK编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $URL URL编码
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
        if (array_key_exists("AK",$param) and $param["AK"] !== null) {
            $this->AK = $param["AK"];
        }

        if (array_key_exists("SK",$param) and $param["SK"] !== null) {
            $this->SK = $param["SK"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }
    }
}
