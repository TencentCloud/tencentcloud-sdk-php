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
 * 智能拆条结果信息
 *
 * @method array getSegmentSet() 获取智能拆条子片段列表。
 * @method void setSegmentSet(array $SegmentSet) 设置智能拆条子片段列表。
 * @method string getAbstract() 获取视频摘要，离线场景用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbstract(string $Abstract) 设置视频摘要，离线场景用。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiAnalysisTaskSegmentOutput extends AbstractModel
{
    /**
     * @var array 智能拆条子片段列表。
     */
    public $SegmentSet;

    /**
     * @var string 视频摘要，离线场景用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Abstract;

    /**
     * @param array $SegmentSet 智能拆条子片段列表。
     * @param string $Abstract 视频摘要，离线场景用。
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
        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new SegmentRecognitionItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("Abstract",$param) and $param["Abstract"] !== null) {
            $this->Abstract = $param["Abstract"];
        }
    }
}
