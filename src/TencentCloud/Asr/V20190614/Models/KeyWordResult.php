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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关键字识别结果
 *
 * @method string getKeyWordLibID() 获取关键词库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyWordLibID(string $KeyWordLibID) 设置关键词库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyWordLibName() 获取关键词库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyWordLibName(string $KeyWordLibName) 设置关键词库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeyWords() 获取匹配到的关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyWords(array $KeyWords) 设置匹配到的关键词
注意：此字段可能返回 null，表示取不到有效值。
 */
class KeyWordResult extends AbstractModel
{
    /**
     * @var string 关键词库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyWordLibID;

    /**
     * @var string 关键词库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyWordLibName;

    /**
     * @var array 匹配到的关键词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyWords;

    /**
     * @param string $KeyWordLibID 关键词库ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyWordLibName 关键词库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KeyWords 匹配到的关键词
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
        if (array_key_exists("KeyWordLibID",$param) and $param["KeyWordLibID"] !== null) {
            $this->KeyWordLibID = $param["KeyWordLibID"];
        }

        if (array_key_exists("KeyWordLibName",$param) and $param["KeyWordLibName"] !== null) {
            $this->KeyWordLibName = $param["KeyWordLibName"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }
    }
}
