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
 * @method array getSegmentSet() 获取翻译片段列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentSet(array $SegmentSet) 设置翻译片段列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubtitlePath() 获取字幕文件地址。
 * @method void setSubtitlePath(string $SubtitlePath) 设置字幕文件地址。
 */
class SmartSubtitleTaskTransTextResultOutput extends AbstractModel
{
    /**
     * @var array 翻译片段列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentSet;

    /**
     * @var string 字幕文件地址。
     */
    public $SubtitlePath;

    /**
     * @param array $SegmentSet 翻译片段列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubtitlePath 字幕文件地址。
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
    }
}
