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
namespace TencentCloud\Soe\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSessionId() 获取语音段唯一标识，一段语音一个SessionId
 * @method void setSessionId(string $SessionId) 设置语音段唯一标识，一段语音一个SessionId
 * @method string getRefText() 获取被评估语音对应的文本
 * @method void setRefText(string $RefText) 设置被评估语音对应的文本
 * @method integer getWorkMode() 获取语音输入模式，0流式分片，1非流式一次性评估
 * @method void setWorkMode(integer $WorkMode) 设置语音输入模式，0流式分片，1非流式一次性评估
 * @method integer getEvalMode() 获取评估模式，0:词模式, 1:句子模式，当为词模式评估时，能够提供每个音节的评估信息，当为句子模式时，能够提供完整度和流利度信息。
 * @method void setEvalMode(integer $EvalMode) 设置评估模式，0:词模式, 1:句子模式，当为词模式评估时，能够提供每个音节的评估信息，当为句子模式时，能够提供完整度和流利度信息。
 * @method float getScoreCoeff() 获取评价苛刻指数，取值为[1.0 - 4.0]范围内的浮点数，用于平滑不同年龄段的分数，1.0为小年龄段，4.0为最高年龄段
 * @method void setScoreCoeff(float $ScoreCoeff) 设置评价苛刻指数，取值为[1.0 - 4.0]范围内的浮点数，用于平滑不同年龄段的分数，1.0为小年龄段，4.0为最高年龄段
 */

/**
 *InitOralProcess请求参数结构体
 */
class InitOralProcessRequest extends AbstractModel
{
    /**
     * @var string 语音段唯一标识，一段语音一个SessionId
     */
    public $SessionId;

    /**
     * @var string 被评估语音对应的文本
     */
    public $RefText;

    /**
     * @var integer 语音输入模式，0流式分片，1非流式一次性评估
     */
    public $WorkMode;

    /**
     * @var integer 评估模式，0:词模式, 1:句子模式，当为词模式评估时，能够提供每个音节的评估信息，当为句子模式时，能够提供完整度和流利度信息。
     */
    public $EvalMode;

    /**
     * @var float 评价苛刻指数，取值为[1.0 - 4.0]范围内的浮点数，用于平滑不同年龄段的分数，1.0为小年龄段，4.0为最高年龄段
     */
    public $ScoreCoeff;
    /**
     * @param string $SessionId 语音段唯一标识，一段语音一个SessionId
     * @param string $RefText 被评估语音对应的文本
     * @param integer $WorkMode 语音输入模式，0流式分片，1非流式一次性评估
     * @param integer $EvalMode 评估模式，0:词模式, 1:句子模式，当为词模式评估时，能够提供每个音节的评估信息，当为句子模式时，能够提供完整度和流利度信息。
     * @param float $ScoreCoeff 评价苛刻指数，取值为[1.0 - 4.0]范围内的浮点数，用于平滑不同年龄段的分数，1.0为小年龄段，4.0为最高年龄段
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RefText",$param) and $param["RefText"] !== null) {
            $this->RefText = $param["RefText"];
        }

        if (array_key_exists("WorkMode",$param) and $param["WorkMode"] !== null) {
            $this->WorkMode = $param["WorkMode"];
        }

        if (array_key_exists("EvalMode",$param) and $param["EvalMode"] !== null) {
            $this->EvalMode = $param["EvalMode"];
        }

        if (array_key_exists("ScoreCoeff",$param) and $param["ScoreCoeff"] !== null) {
            $this->ScoreCoeff = $param["ScoreCoeff"];
        }
    }
}
