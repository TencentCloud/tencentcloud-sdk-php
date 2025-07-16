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
 * 视频评测任务的视频来源信息
 *
 * @method string getSourceId() 获取对比视频的来源 ID，当评测任务的类型为 BD_RATE 且对比视频来自用户输入时有效；当对比视频来自转码模版时为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceId(string $SourceId) 设置对比视频的来源 ID，当评测任务的类型为 BD_RATE 且对比视频来自用户输入时有效；当对比视频来自转码模版时为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaInputInfo getInputInfo() 获取对比视频的输入信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置对比视频的输入信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class EvaluationMediaInputInfo extends AbstractModel
{
    /**
     * @var string 对比视频的来源 ID，当评测任务的类型为 BD_RATE 且对比视频来自用户输入时有效；当对比视频来自转码模版时为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceId;

    /**
     * @var MediaInputInfo 对比视频的输入信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputInfo;

    /**
     * @param string $SourceId 对比视频的来源 ID，当评测任务的类型为 BD_RATE 且对比视频来自用户输入时有效；当对比视频来自转码模版时为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaInputInfo $InputInfo 对比视频的输入信息
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
        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }
    }
}
