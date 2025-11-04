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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 翻译详细输出结果
 *
 * @method TaskOutputStorage getOutputStorage() 获取字幕文件存储位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置字幕文件存储位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubtitleResults() 获取多语言翻译的结果集合
 * @method void setSubtitleResults(array $SubtitleResults) 设置多语言翻译的结果集合
 */
class PureSubtitleTransResultOutput extends AbstractModel
{
    /**
     * @var TaskOutputStorage 字幕文件存储位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var array 多语言翻译的结果集合
     */
    public $SubtitleResults;

    /**
     * @param TaskOutputStorage $OutputStorage 字幕文件存储位置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubtitleResults 多语言翻译的结果集合
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
        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("SubtitleResults",$param) and $param["SubtitleResults"] !== null) {
            $this->SubtitleResults = [];
            foreach ($param["SubtitleResults"] as $key => $value){
                $obj = new SubtitleTransResultItem();
                $obj->deserialize($value);
                array_push($this->SubtitleResults, $obj);
            }
        }
    }
}
