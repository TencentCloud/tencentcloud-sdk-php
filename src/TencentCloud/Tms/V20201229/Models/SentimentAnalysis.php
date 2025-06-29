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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 情感分析结果
 *
 * @method string getLabel() 获取情感标签
 * @method void setLabel(string $Label) 设置情感标签
 * @method integer getScore() 获取标签分数，取值范围0到100
 * @method void setScore(integer $Score) 设置标签分数，取值范围0到100
 * @method SentimentDetail getDetail() 获取情感分析明细
 * @method void setDetail(SentimentDetail $Detail) 设置情感分析明细
 * @method string getCode() 获取响应码，成功为"OK"，失败为"InternalError"
 * @method void setCode(string $Code) 设置响应码，成功为"OK"，失败为"InternalError"
 * @method string getMessage() 获取异常信息
 * @method void setMessage(string $Message) 设置异常信息
 */
class SentimentAnalysis extends AbstractModel
{
    /**
     * @var string 情感标签
     */
    public $Label;

    /**
     * @var integer 标签分数，取值范围0到100
     */
    public $Score;

    /**
     * @var SentimentDetail 情感分析明细
     */
    public $Detail;

    /**
     * @var string 响应码，成功为"OK"，失败为"InternalError"
     */
    public $Code;

    /**
     * @var string 异常信息
     */
    public $Message;

    /**
     * @param string $Label 情感标签
     * @param integer $Score 标签分数，取值范围0到100
     * @param SentimentDetail $Detail 情感分析明细
     * @param string $Code 响应码，成功为"OK"，失败为"InternalError"
     * @param string $Message 异常信息
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new SentimentDetail();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
