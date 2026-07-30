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
 * 智能分镜拆解配置。
 *
 * @method string getSwitch() 获取<p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
 * @method void setSwitch(string $Switch) 设置<p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
 * @method integer getProcessIndex() 获取<p>指定提取的分镜图的序号，从0开始计数，不填写则返回所有分镜图。</p>
 * @method void setProcessIndex(integer $ProcessIndex) 设置<p>指定提取的分镜图的序号，从0开始计数，不填写则返回所有分镜图。</p>
 */
class AiStoryboardConfig extends AbstractModel
{
    /**
     * @var string <p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
     */
    public $Switch;

    /**
     * @var integer <p>指定提取的分镜图的序号，从0开始计数，不填写则返回所有分镜图。</p>
     */
    public $ProcessIndex;

    /**
     * @param string $Switch <p>能力配置开关，可选值：  ON：开启； OFF：关闭。 默认值：ON。</p>
     * @param integer $ProcessIndex <p>指定提取的分镜图的序号，从0开始计数，不填写则返回所有分镜图。</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ProcessIndex",$param) and $param["ProcessIndex"] !== null) {
            $this->ProcessIndex = $param["ProcessIndex"];
        }
    }
}
