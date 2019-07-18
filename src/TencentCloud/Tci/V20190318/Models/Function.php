<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method boolean getEnableAllText() 获取输出全部文本标识，当该值设置为true时，会输出当前音频的全部文本
 * @method void setEnableAllText(boolean $EnableAllText) 设置输出全部文本标识，当该值设置为true时，会输出当前音频的全部文本
 * @method boolean getEnableKeyword() 获取输出关键词信息标识，当该值设置为true时，会输出当前音频的关键词信息。
 * @method void setEnableKeyword(boolean $EnableKeyword) 设置输出关键词信息标识，当该值设置为true时，会输出当前音频的关键词信息。
 * @method boolean getEnableVadInfo() 获取输出音频统计信息标识，当设置为 true 时，任务查询结果会输出音频的统计信息（AsrStat）
 * @method void setEnableVadInfo(boolean $EnableVadInfo) 设置输出音频统计信息标识，当设置为 true 时，任务查询结果会输出音频的统计信息（AsrStat）
 * @method boolean getEnableVolume() 获取输出音频音量信息标识，当设置为 true 时，会输出当前音频音量信息。
 * @method void setEnableVolume(boolean $EnableVolume) 设置输出音频音量信息标识，当设置为 true 时，会输出当前音频音量信息。
 */

/**
 *功能开关列表，表示是否需要打开相应的功能，返回相应的信息
 */
class Function extends AbstractModel
{
    /**
     * @var boolean 输出全部文本标识，当该值设置为true时，会输出当前音频的全部文本
     */
    public $EnableAllText;

    /**
     * @var boolean 输出关键词信息标识，当该值设置为true时，会输出当前音频的关键词信息。
     */
    public $EnableKeyword;

    /**
     * @var boolean 输出音频统计信息标识，当设置为 true 时，任务查询结果会输出音频的统计信息（AsrStat）
     */
    public $EnableVadInfo;

    /**
     * @var boolean 输出音频音量信息标识，当设置为 true 时，会输出当前音频音量信息。
     */
    public $EnableVolume;
    /**
     * @param boolean $EnableAllText 输出全部文本标识，当该值设置为true时，会输出当前音频的全部文本
     * @param boolean $EnableKeyword 输出关键词信息标识，当该值设置为true时，会输出当前音频的关键词信息。
     * @param boolean $EnableVadInfo 输出音频统计信息标识，当设置为 true 时，任务查询结果会输出音频的统计信息（AsrStat）
     * @param boolean $EnableVolume 输出音频音量信息标识，当设置为 true 时，会输出当前音频音量信息。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EnableAllText",$param) and $param["EnableAllText"] !== null) {
            $this->EnableAllText = $param["EnableAllText"];
        }

        if (array_key_exists("EnableKeyword",$param) and $param["EnableKeyword"] !== null) {
            $this->EnableKeyword = $param["EnableKeyword"];
        }

        if (array_key_exists("EnableVadInfo",$param) and $param["EnableVadInfo"] !== null) {
            $this->EnableVadInfo = $param["EnableVadInfo"];
        }

        if (array_key_exists("EnableVolume",$param) and $param["EnableVolume"] !== null) {
            $this->EnableVolume = $param["EnableVolume"];
        }
    }
}
