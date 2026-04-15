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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 各分镜信息，如提示词、时长等

通过index、prompt、duration参数定义分镜序号及相应提示词和时长，其中：

最多支持6个分镜，最小支持1个分镜

每个分镜相关内容的最大长度不超过512

每个分镜的时长不大于当前任务的总时长，不小于1

所有分镜的时长之和等于当前任务的总时长

用key:value承载，如下：

"multi_prompt":[
	{
  	"index":int,
    "prompt": "string",
    "duration": "5"
  },
  {
  	"index":int,
    "prompt": "string",
    "duration": "5"
  }
]
当mult_shot参数为true且shot_type参数为customize时，当前参数不得为空
 *
 * @method integer getIndex() 获取<p>分镜序号</p>
 * @method void setIndex(integer $Index) 设置<p>分镜序号</p>
 * @method string getPrompt() 获取<p>分镜提示词</p>
 * @method void setPrompt(string $Prompt) 设置<p>分镜提示词</p>
 * @method string getDuration() 获取<p>时长</p>
 * @method void setDuration(string $Duration) 设置<p>时长</p>
 */
class MultiPrompt extends AbstractModel
{
    /**
     * @var integer <p>分镜序号</p>
     */
    public $Index;

    /**
     * @var string <p>分镜提示词</p>
     */
    public $Prompt;

    /**
     * @var string <p>时长</p>
     */
    public $Duration;

    /**
     * @param integer $Index <p>分镜序号</p>
     * @param string $Prompt <p>分镜提示词</p>
     * @param string $Duration <p>时长</p>
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
