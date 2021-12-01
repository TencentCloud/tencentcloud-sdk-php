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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 出现信息索引对

AppearIndex可选值定义如下：

| AppearIndex名称 | AppearIndex取值 | AppearIndex描述 |
|---|---|---|
| APPEAR_INDEX_INVALID | 0 | 非法的任务状态 |
| APPEAR_INDEX_AUDIO | 1 | 音频出现信息|
| APPEAR_INDEX_TEXT | 2 | 可视文本出现信息|
| APPEAR_INDEX_VIDEO | 3 | 视频出现信息|

例如，当AppearIndex=1，Index=15，则意味着目标关键词出现在第16个(Index计数从0开始)音频文字识别结果之中
 *
 * @method integer getAppearIndex() 获取出现信息，取值范围为[1，3]
 * @method void setAppearIndex(integer $AppearIndex) 设置出现信息，取值范围为[1，3]
 * @method integer getIndex() 获取AppearInfo中AppearIndex对应元素的第Index元素，从0开始技术
 * @method void setIndex(integer $Index) 设置AppearInfo中AppearIndex对应元素的第Index元素，从0开始技术
 */
class AppearIndexPair extends AbstractModel
{
    /**
     * @var integer 出现信息，取值范围为[1，3]
     */
    public $AppearIndex;

    /**
     * @var integer AppearInfo中AppearIndex对应元素的第Index元素，从0开始技术
     */
    public $Index;

    /**
     * @param integer $AppearIndex 出现信息，取值范围为[1，3]
     * @param integer $Index AppearInfo中AppearIndex对应元素的第Index元素，从0开始技术
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
        if (array_key_exists("AppearIndex",$param) and $param["AppearIndex"] !== null) {
            $this->AppearIndex = $param["AppearIndex"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
