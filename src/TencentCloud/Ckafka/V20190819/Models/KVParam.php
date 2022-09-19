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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * key-value二次解析
 *
 * @method string getDelimiter() 获取分隔符
 * @method void setDelimiter(string $Delimiter) 设置分隔符
 * @method string getRegex() 获取key-value二次解析分隔符
 * @method void setRegex(string $Regex) 设置key-value二次解析分隔符
 * @method string getKeepOriginalKey() 获取保留源Key，默认为false不保留
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeepOriginalKey(string $KeepOriginalKey) 设置保留源Key，默认为false不保留
注意：此字段可能返回 null，表示取不到有效值。
 */
class KVParam extends AbstractModel
{
    /**
     * @var string 分隔符
     */
    public $Delimiter;

    /**
     * @var string key-value二次解析分隔符
     */
    public $Regex;

    /**
     * @var string 保留源Key，默认为false不保留
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeepOriginalKey;

    /**
     * @param string $Delimiter 分隔符
     * @param string $Regex key-value二次解析分隔符
     * @param string $KeepOriginalKey 保留源Key，默认为false不保留
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
        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("KeepOriginalKey",$param) and $param["KeepOriginalKey"] !== null) {
            $this->KeepOriginalKey = $param["KeepOriginalKey"];
        }
    }
}
