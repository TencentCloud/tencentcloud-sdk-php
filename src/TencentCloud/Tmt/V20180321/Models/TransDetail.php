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
 * @method string getSourceLineText() 获取<p>当前行的原文本</p>
 * @method void setSourceLineText(string $SourceLineText) 设置<p>当前行的原文本</p>
 * @method string getTargetLineText() 获取<p>当前行的译文</p>
 * @method void setTargetLineText(string $TargetLineText) 设置<p>当前行的译文</p>
 * @method BoundingBox getBoundingBox() 获取<p>段落文本框位置</p>
 * @method void setBoundingBox(BoundingBox $BoundingBox) 设置<p>段落文本框位置</p>
 * @method integer getLinesCount() 获取<p>行数</p>
 * @method void setLinesCount(integer $LinesCount) 设置<p>行数</p>
 * @method integer getLineHeight() 获取<p>行高</p><p>单位：px</p>
 * @method void setLineHeight(integer $LineHeight) 设置<p>行高</p><p>单位：px</p>
 * @method integer getSpamCode() 获取<p>正常段落spam_code字段为0；如果存在spam_code字段且值大于0（1: 命中垃圾检查；2: 命中安全策略；3: 其他。），则命中安全检查被过滤。</p>
 * @method void setSpamCode(integer $SpamCode) 设置<p>正常段落spam_code字段为0；如果存在spam_code字段且值大于0（1: 命中垃圾检查；2: 命中安全策略；3: 其他。），则命中安全检查被过滤。</p>
 * @method RotateParagraphRect getRotateParagraphRect() 获取<p>段落文本旋转信息，只在valid为true时表示坐标有效</p>
 * @method void setRotateParagraphRect(RotateParagraphRect $RotateParagraphRect) 设置<p>段落文本旋转信息，只在valid为true时表示坐标有效</p>
 */
class TransDetail extends AbstractModel
{
    /**
     * @var string <p>当前行的原文本</p>
     */
    public $SourceLineText;

    /**
     * @var string <p>当前行的译文</p>
     */
    public $TargetLineText;

    /**
     * @var BoundingBox <p>段落文本框位置</p>
     */
    public $BoundingBox;

    /**
     * @var integer <p>行数</p>
     */
    public $LinesCount;

    /**
     * @var integer <p>行高</p><p>单位：px</p>
     */
    public $LineHeight;

    /**
     * @var integer <p>正常段落spam_code字段为0；如果存在spam_code字段且值大于0（1: 命中垃圾检查；2: 命中安全策略；3: 其他。），则命中安全检查被过滤。</p>
     */
    public $SpamCode;

    /**
     * @var RotateParagraphRect <p>段落文本旋转信息，只在valid为true时表示坐标有效</p>
     */
    public $RotateParagraphRect;

    /**
     * @param string $SourceLineText <p>当前行的原文本</p>
     * @param string $TargetLineText <p>当前行的译文</p>
     * @param BoundingBox $BoundingBox <p>段落文本框位置</p>
     * @param integer $LinesCount <p>行数</p>
     * @param integer $LineHeight <p>行高</p><p>单位：px</p>
     * @param integer $SpamCode <p>正常段落spam_code字段为0；如果存在spam_code字段且值大于0（1: 命中垃圾检查；2: 命中安全策略；3: 其他。），则命中安全检查被过滤。</p>
     * @param RotateParagraphRect $RotateParagraphRect <p>段落文本旋转信息，只在valid为true时表示坐标有效</p>
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
