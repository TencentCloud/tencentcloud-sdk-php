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
 * 修改 AIGC 文档生视频任务状态输入
 *
 * @method string getAction() 获取<p>修改动作类型。</p><p>枚举值：</p><ul><li>confirm： 确认已完成阶段并推进下一阶段</li><li>regenerate： 重新生成指定阶段</li></ul>
 * @method void setAction(string $Action) 设置<p>修改动作类型。</p><p>枚举值：</p><ul><li>confirm： 确认已完成阶段并推进下一阶段</li><li>regenerate： 重新生成指定阶段</li></ul>
 * @method string getStage() 获取<p>修改目标阶段。</p><p>枚举值：</p><ul><li>STAGE_1：<br>Action=confirm 时：确认大纲、继续生成后续配音、动画效果、字幕；<br>Action=regenerate 时：重新生成大纲。</li></ul><ul><li>STAGE_2：<br>Action=confirm 时：确认生成的配音、动画效果、字幕，生成最终成片；<br>Action=regenerate 时：重新生成配音、动画效果、字幕。</li></ul>
 * @method void setStage(string $Stage) 设置<p>修改目标阶段。</p><p>枚举值：</p><ul><li>STAGE_1：<br>Action=confirm 时：确认大纲、继续生成后续配音、动画效果、字幕；<br>Action=regenerate 时：重新生成大纲。</li></ul><ul><li>STAGE_2：<br>Action=confirm 时：确认生成的配音、动画效果、字幕，生成最终成片；<br>Action=regenerate 时：重新生成配音、动画效果、字幕。</li></ul>
 * @method string getSourceTaskId() 获取<p>需要进行修改的目标任务 ID。</p>
 * @method void setSourceTaskId(string $SourceTaskId) 设置<p>需要进行修改的目标任务 ID。</p>
 * @method DocToVideoRegenerateInput getRegenerate() 获取<p>重新生成参数。</p><p>仅 Action=regenerate 时必填。</p>
 * @method void setRegenerate(DocToVideoRegenerateInput $Regenerate) 设置<p>重新生成参数。</p><p>仅 Action=regenerate 时必填。</p>
 */
class ModifyDocToVideoTaskStatusInput extends AbstractModel
{
    /**
     * @var string <p>修改动作类型。</p><p>枚举值：</p><ul><li>confirm： 确认已完成阶段并推进下一阶段</li><li>regenerate： 重新生成指定阶段</li></ul>
     */
    public $Action;

    /**
     * @var string <p>修改目标阶段。</p><p>枚举值：</p><ul><li>STAGE_1：<br>Action=confirm 时：确认大纲、继续生成后续配音、动画效果、字幕；<br>Action=regenerate 时：重新生成大纲。</li></ul><ul><li>STAGE_2：<br>Action=confirm 时：确认生成的配音、动画效果、字幕，生成最终成片；<br>Action=regenerate 时：重新生成配音、动画效果、字幕。</li></ul>
     */
    public $Stage;

    /**
     * @var string <p>需要进行修改的目标任务 ID。</p>
     */
    public $SourceTaskId;

    /**
     * @var DocToVideoRegenerateInput <p>重新生成参数。</p><p>仅 Action=regenerate 时必填。</p>
     */
    public $Regenerate;

    /**
     * @param string $Action <p>修改动作类型。</p><p>枚举值：</p><ul><li>confirm： 确认已完成阶段并推进下一阶段</li><li>regenerate： 重新生成指定阶段</li></ul>
     * @param string $Stage <p>修改目标阶段。</p><p>枚举值：</p><ul><li>STAGE_1：<br>Action=confirm 时：确认大纲、继续生成后续配音、动画效果、字幕；<br>Action=regenerate 时：重新生成大纲。</li></ul><ul><li>STAGE_2：<br>Action=confirm 时：确认生成的配音、动画效果、字幕，生成最终成片；<br>Action=regenerate 时：重新生成配音、动画效果、字幕。</li></ul>
     * @param string $SourceTaskId <p>需要进行修改的目标任务 ID。</p>
     * @param DocToVideoRegenerateInput $Regenerate <p>重新生成参数。</p><p>仅 Action=regenerate 时必填。</p>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("SourceTaskId",$param) and $param["SourceTaskId"] !== null) {
            $this->SourceTaskId = $param["SourceTaskId"];
        }

        if (array_key_exists("Regenerate",$param) and $param["Regenerate"] !== null) {
            $this->Regenerate = new DocToVideoRegenerateInput();
            $this->Regenerate->deserialize($param["Regenerate"]);
        }
    }
}
