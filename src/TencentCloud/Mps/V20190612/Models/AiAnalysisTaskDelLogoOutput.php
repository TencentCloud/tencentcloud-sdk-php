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
 * 智能擦除结果信息
 *
 * @method string getPath() 获取擦除后文件的路径。
 * @method void setPath(string $Path) 设置擦除后文件的路径。
 * @method TaskOutputStorage getOutputStorage() 获取擦除后文件的存储位置。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置擦除后文件的存储位置。
 * @method string getOriginSubtitlePath() 获取基于画面提取的字幕文件路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginSubtitlePath(string $OriginSubtitlePath) 设置基于画面提取的字幕文件路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranslateSubtitlePath() 获取基于画面提取的字幕翻译文件路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranslateSubtitlePath(string $TranslateSubtitlePath) 设置基于画面提取的字幕翻译文件路径。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiAnalysisTaskDelLogoOutput extends AbstractModel
{
    /**
     * @var string 擦除后文件的路径。
     */
    public $Path;

    /**
     * @var TaskOutputStorage 擦除后文件的存储位置。
     */
    public $OutputStorage;

    /**
     * @var string 基于画面提取的字幕文件路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginSubtitlePath;

    /**
     * @var string 基于画面提取的字幕翻译文件路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranslateSubtitlePath;

    /**
     * @param string $Path 擦除后文件的路径。
     * @param TaskOutputStorage $OutputStorage 擦除后文件的存储位置。
     * @param string $OriginSubtitlePath 基于画面提取的字幕文件路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranslateSubtitlePath 基于画面提取的字幕翻译文件路径。
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OriginSubtitlePath",$param) and $param["OriginSubtitlePath"] !== null) {
            $this->OriginSubtitlePath = $param["OriginSubtitlePath"];
        }

        if (array_key_exists("TranslateSubtitlePath",$param) and $param["TranslateSubtitlePath"] !== null) {
            $this->TranslateSubtitlePath = $param["TranslateSubtitlePath"];
        }
    }
}
