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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型图片翻译详情信息
 *
 * @method string getSourceLineText() 获取当前行的原文本
 * @method void setSourceLineText(string $SourceLineText) 设置当前行的原文本
 * @method string getTargetLineText() 获取当前行的译文
 * @method void setTargetLineText(string $TargetLineText) 设置当前行的译文
 * @method BoundingBox getBoundingBox() 获取段落文本框位置
 * @method void setBoundingBox(BoundingBox $BoundingBox) 设置段落文本框位置
 * @method integer getLinesCount() 获取行数
 * @method void setLinesCount(integer $LinesCount) 设置行数
 * @method integer getLineHeight() 获取行高
 * @method void setLineHeight(integer $LineHeight) 设置行高
 * @method integer getSpamCode() 获取正常段落spam_code字段为0；如果存在spam_code字段且值大于0（1: 命中垃圾检查；2: 命中安全策略；3: 其他。），则命中安全检查被过滤。
 * @method void setSpamCode(integer $SpamCode) 设置正常段落spam_code字段为0；如果存在spam_code字段且值大于0（1: 命中垃圾检查；2: 命中安全策略；3: 其他。），则命中安全检查被过滤。
 * @method RotateParagraphRect getRotateParagraphRect() 获取段落文本旋转信息，只在valid为true时表示坐标有效
 * @method void setRotateParagraphRect(RotateParagraphRect $RotateParagraphRect) 设置段落文本旋转信息，只在valid为true时表示坐标有效
 */
class TransDetail extends AbstractModel
{
    /**
     * @var string 当前行的原文本
     */
    public $SourceLineText;

    /**
     * @var string 当前行的译文
     */
    public $TargetLineText;

    /**
     * @var BoundingBox 段落文本框位置
     */
    public $BoundingBox;

    /**
     * @var integer 行数
     */
    public $LinesCount;

    /**
     * @var integer 行高
     */
    public $LineHeight;

    /**
     * @var integer 正常段落spam_code字段为0；如果存在spam_code字段且值大于0（1: 命中垃圾检查；2: 命中安全策略；3: 其他。），则命中安全检查被过滤。
     */
    public $SpamCode;

    /**
     * @var RotateParagraphRect 段落文本旋转信息，只在valid为true时表示坐标有效
     */
    public $RotateParagraphRect;

    /**
     * @param string $SourceLineText 当前行的原文本
     * @param string $TargetLineText 当前行的译文
     * @param BoundingBox $BoundingBox 段落文本框位置
     * @param integer $LinesCount 行数
     * @param integer $LineHeight 行高
     * @param integer $SpamCode 正常段落spam_code字段为0；如果存在spam_code字段且值大于0（1: 命中垃圾检查；2: 命中安全策略；3: 其他。），则命中安全检查被过滤。
     * @param RotateParagraphRect $RotateParagraphRect 段落文本旋转信息，只在valid为true时表示坐标有效
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
        if (array_key_exists("SourceLineText",$param) and $param["SourceLineText"] !== null) {
            $this->SourceLineText = $param["SourceLineText"];
        }

        if (array_key_exists("TargetLineText",$param) and $param["TargetLineText"] !== null) {
            $this->TargetLineText = $param["TargetLineText"];
        }

        if (array_key_exists("BoundingBox",$param) and $param["BoundingBox"] !== null) {
            $this->BoundingBox = new BoundingBox();
            $this->BoundingBox->deserialize($param["BoundingBox"]);
        }

        if (array_key_exists("LinesCount",$param) and $param["LinesCount"] !== null) {
            $this->LinesCount = $param["LinesCount"];
        }

        if (array_key_exists("LineHeight",$param) and $param["LineHeight"] !== null) {
            $this->LineHeight = $param["LineHeight"];
        }

        if (array_key_exists("SpamCode",$param) and $param["SpamCode"] !== null) {
            $this->SpamCode = $param["SpamCode"];
        }

        if (array_key_exists("RotateParagraphRect",$param) and $param["RotateParagraphRect"] !== null) {
            $this->RotateParagraphRect = new RotateParagraphRect();
            $this->RotateParagraphRect->deserialize($param["RotateParagraphRect"]);
        }
    }
}
