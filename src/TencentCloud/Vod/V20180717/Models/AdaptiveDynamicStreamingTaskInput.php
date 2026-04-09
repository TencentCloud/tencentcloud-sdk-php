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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对视频转自适应码流的输入参数类型
 *
 * @method integer getDefinition() 获取<p>转自适应码流模板 ID。</p>
 * @method void setDefinition(integer $Definition) 设置<p>转自适应码流模板 ID。</p>
 * @method array getWatermarkSet() 获取<p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
 * @method void setWatermarkSet(array $WatermarkSet) 设置<p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
 * @method TraceWatermarkInput getTraceWatermark() 获取<p>溯源水印。</p>
 * @method void setTraceWatermark(TraceWatermarkInput $TraceWatermark) 设置<p>溯源水印。</p>
 * @method CopyRightWatermarkInput getCopyRightWatermark() 获取<p>版权水印。</p>
 * @method void setCopyRightWatermark(CopyRightWatermarkInput $CopyRightWatermark) 设置<p>版权水印。</p>
 * @method BlindWatermarkInput getBlindWatermark() 获取<p>数字水印。</p>
 * @method void setBlindWatermark(BlindWatermarkInput $BlindWatermark) 设置<p>数字水印。</p>
 * @method array getSubtitleSet() 获取<p>外挂字幕列表，元素为字幕 ID，支持多个字幕，最大可支持16个。</p>
 * @method void setSubtitleSet(array $SubtitleSet) 设置<p>外挂字幕列表，元素为字幕 ID，支持多个字幕，最大可支持16个。</p>
 * @method array getSubtitleInfoSet() 获取<p>字幕压制信息列表。最大可支持 2 个。</p>
 * @method void setSubtitleInfoSet(array $SubtitleInfoSet) 设置<p>字幕压制信息列表。最大可支持 2 个。</p>
 */
class AdaptiveDynamicStreamingTaskInput extends AbstractModel
{
    /**
     * @var integer <p>转自适应码流模板 ID。</p>
     */
    public $Definition;

    /**
     * @var array <p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
     */
    public $WatermarkSet;

    /**
     * @var TraceWatermarkInput <p>溯源水印。</p>
     */
    public $TraceWatermark;

    /**
     * @var CopyRightWatermarkInput <p>版权水印。</p>
     */
    public $CopyRightWatermark;

    /**
     * @var BlindWatermarkInput <p>数字水印。</p>
     */
    public $BlindWatermark;

    /**
     * @var array <p>外挂字幕列表，元素为字幕 ID，支持多个字幕，最大可支持16个。</p>
     */
    public $SubtitleSet;

    /**
     * @var array <p>字幕压制信息列表。最大可支持 2 个。</p>
     */
    public $SubtitleInfoSet;

    /**
     * @param integer $Definition <p>转自适应码流模板 ID。</p>
     * @param array $WatermarkSet <p>水印列表，支持多张图片或文字水印，最大可支持 10 张。</p>
     * @param TraceWatermarkInput $TraceWatermark <p>溯源水印。</p>
     * @param CopyRightWatermarkInput $CopyRightWatermark <p>版权水印。</p>
     * @param BlindWatermarkInput $BlindWatermark <p>数字水印。</p>
     * @param array $SubtitleSet <p>外挂字幕列表，元素为字幕 ID，支持多个字幕，最大可支持16个。</p>
     * @param array $SubtitleInfoSet <p>字幕压制信息列表。最大可支持 2 个。</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }

        if (array_key_exists("TraceWatermark",$param) and $param["TraceWatermark"] !== null) {
            $this->TraceWatermark = new TraceWatermarkInput();
            $this->TraceWatermark->deserialize($param["TraceWatermark"]);
        }

        if (array_key_exists("CopyRightWatermark",$param) and $param["CopyRightWatermark"] !== null) {
            $this->CopyRightWatermark = new CopyRightWatermarkInput();
            $this->CopyRightWatermark->deserialize($param["CopyRightWatermark"]);
        }

        if (array_key_exists("BlindWatermark",$param) and $param["BlindWatermark"] !== null) {
            $this->BlindWatermark = new BlindWatermarkInput();
            $this->BlindWatermark->deserialize($param["BlindWatermark"]);
        }

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = $param["SubtitleSet"];
        }

        if (array_key_exists("SubtitleInfoSet",$param) and $param["SubtitleInfoSet"] !== null) {
            $this->SubtitleInfoSet = [];
            foreach ($param["SubtitleInfoSet"] as $key => $value){
                $obj = new SubtitleInfoInput();
                $obj->deserialize($value);
                array_push($this->SubtitleInfoSet, $obj);
            }
        }
    }
}
