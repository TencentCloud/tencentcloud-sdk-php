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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全文索引配置
 *
 * @method boolean getCaseSensitive() 获取是否大小写敏感
 * @method void setCaseSensitive(boolean $CaseSensitive) 设置是否大小写敏感
 * @method string getTokenizer() 获取全文索引的分词符，其中的每个字符代表一个分词符；
仅支持英文符号及\n\t\r；
推荐使用 @&?|#()='",;:<>[]{}/ \n\t\r\ 作为分词符；
 * @method void setTokenizer(string $Tokenizer) 设置全文索引的分词符，其中的每个字符代表一个分词符；
仅支持英文符号及\n\t\r；
推荐使用 @&?|#()='",;:<>[]{}/ \n\t\r\ 作为分词符；
 * @method boolean getContainZH() 获取是否包含中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainZH(boolean $ContainZH) 设置是否包含中文
注意：此字段可能返回 null，表示取不到有效值。
 */
class FullTextInfo extends AbstractModel
{
    /**
     * @var boolean 是否大小写敏感
     */
    public $CaseSensitive;

    /**
     * @var string 全文索引的分词符，其中的每个字符代表一个分词符；
仅支持英文符号及\n\t\r；
推荐使用 @&?|#()='",;:<>[]{}/ \n\t\r\ 作为分词符；
     */
    public $Tokenizer;

    /**
     * @var boolean 是否包含中文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainZH;

    /**
     * @param boolean $CaseSensitive 是否大小写敏感
     * @param string $Tokenizer 全文索引的分词符，其中的每个字符代表一个分词符；
仅支持英文符号及\n\t\r；
推荐使用 @&?|#()='",;:<>[]{}/ \n\t\r\ 作为分词符；
     * @param boolean $ContainZH 是否包含中文
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
        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }

        if (array_key_exists("ContainZH",$param) and $param["ContainZH"] !== null) {
            $this->ContainZH = $param["ContainZH"];
        }
    }
}
