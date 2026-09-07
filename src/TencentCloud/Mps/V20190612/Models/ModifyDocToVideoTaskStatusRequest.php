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
 * ModifyDocToVideoTaskStatus请求参数结构体
 *
 * @method ModifyDocToVideoTaskStatusInput getInput() 获取<p>修改AIGC文档生视频任务状态的输入</p>
 * @method void setInput(ModifyDocToVideoTaskStatusInput $Input) 设置<p>修改AIGC文档生视频任务状态的输入</p>
 */
class ModifyDocToVideoTaskStatusRequest extends AbstractModel
{
    /**
     * @var ModifyDocToVideoTaskStatusInput <p>修改AIGC文档生视频任务状态的输入</p>
     */
    public $Input;

    /**
     * @param ModifyDocToVideoTaskStatusInput $Input <p>修改AIGC文档生视频任务状态的输入</p>
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new ModifyDocToVideoTaskStatusInput();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
