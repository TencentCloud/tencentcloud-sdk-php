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
 * 翻译结果。
 *
 * @method array getSegmentSet() 获取<p>翻译片段列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentSet(array $SegmentSet) 设置<p>翻译片段列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubtitlePath() 获取<p>字幕文件地址。</p>
 * @method void setSubtitlePath(string $SubtitlePath) 设置<p>字幕文件地址。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>智能字幕结果存储信息。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>智能字幕结果存储信息。</p>
 * @method string getPath() 获取<p>字幕文件路径。</p>
 * @method void setPath(string $Path) 设置<p>字幕文件路径。</p>
 * @method array getSubtitleResults() 获取<p>多语言翻译时返回翻译结果。</p>
 * @method void setSubtitleResults(array $SubtitleResults) 设置<p>多语言翻译时返回翻译结果。</p>
 */
class SmartSubtitleTaskTransTextResultOutput extends AbstractModel
{
    /**
     * @var array <p>翻译片段列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentSet;

    /**
     * @var string <p>字幕文件地址。</p>
     */
    public $SubtitlePath;

    /**
     * @var TaskOutputStorage <p>智能字幕结果存储信息。</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>字幕文件路径。</p>
     */
    public $Path;

    /**
     * @var array <p>多语言翻译时返回翻译结果。</p>
     */
    public $SubtitleResults;

    /**
     * @param array $SegmentSet <p>翻译片段列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubtitlePath <p>字幕文件地址。</p>
     * @param TaskOutputStorage $OutputStorage <p>智能字幕结果存储信息。</p>
     * @param string $Path <p>字幕文件路径。</p>
     * @param array $SubtitleResults <p>多语言翻译时返回翻译结果。</p>
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
        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new SmartSubtitleTaskTransTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SubtitlePath",$param) and $param["SubtitlePath"] !== null) {
            $this->SubtitlePath = $param["SubtitlePath"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
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
