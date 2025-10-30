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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流式接口当前消息数据详细内容
 *
 * @method string getStepBrief() 获取步骤摘要
 * @method void setStepBrief(string $StepBrief) 设置步骤摘要
 * @method string getContent() 获取步骤详情
 * @method void setContent(string $Content) 设置步骤详情
 */
class UploadDelta extends AbstractModel
{
    /**
     * @var string 步骤摘要
     */
    public $StepBrief;

    /**
     * @var string 步骤详情
     */
    public $Content;

    /**
     * @param string $StepBrief 步骤摘要
     * @param string $Content 步骤详情
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
        if (array_key_exists("StepBrief",$param) and $param["StepBrief"] !== null) {
            $this->StepBrief = $param["StepBrief"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
