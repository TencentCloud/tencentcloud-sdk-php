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
 * 语音全文识别结果。
 *
 * @method array getSegmentSet() 获取<p>语音全文识别片段列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentSet(array $SegmentSet) 设置<p>语音全文识别片段列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取<p>字幕文件路径</p>
 * @method void setPath(string $Path) 设置<p>字幕文件路径</p>
 * @method string getSubtitlePath() 获取<p>字幕文件地址。</p>
 * @method void setSubtitlePath(string $SubtitlePath) 设置<p>字幕文件地址。</p>
 * @method SubtitleResult getSubtitleInfo() 获取<p>识别字幕结果信息。</p>
 * @method void setSubtitleInfo(SubtitleResult $SubtitleInfo) 设置<p>识别字幕结果信息。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>字幕文件存储位置。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>字幕文件存储位置。</p>
 */
class SmartSubtitleTaskAsrFullTextResultOutput extends AbstractModel
{
    /**
     * @var array <p>语音全文识别片段列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentSet;

    /**
     * @var string <p>字幕文件路径</p>
     */
    public $Path;

    /**
     * @var string <p>字幕文件地址。</p>
     */
    public $SubtitlePath;

    /**
     * @var SubtitleResult <p>识别字幕结果信息。</p>
     */
    public $SubtitleInfo;

    /**
     * @var TaskOutputStorage <p>字幕文件存储位置。</p>
     */
    public $OutputStorage;

    /**
     * @param array $SegmentSet <p>语音全文识别片段列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path <p>字幕文件路径</p>
     * @param string $SubtitlePath <p>字幕文件地址。</p>
     * @param SubtitleResult $SubtitleInfo <p>识别字幕结果信息。</p>
     * @param TaskOutputStorage $OutputStorage <p>字幕文件存储位置。</p>
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
                $obj = new SmartSubtitleTaskAsrFullTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("SubtitlePath",$param) and $param["SubtitlePath"] !== null) {
            $this->SubtitlePath = $param["SubtitlePath"];
        }

        if (array_key_exists("SubtitleInfo",$param) and $param["SubtitleInfo"] !== null) {
            $this->SubtitleInfo = new SubtitleResult();
            $this->SubtitleInfo->deserialize($param["SubtitleInfo"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
