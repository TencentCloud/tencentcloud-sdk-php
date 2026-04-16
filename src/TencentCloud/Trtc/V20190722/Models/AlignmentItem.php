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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字幕对齐
 *
 * @method integer getTimeBeginMs() 获取字幕对应的时间起点
 * @method void setTimeBeginMs(integer $TimeBeginMs) 设置字幕对应的时间起点
 * @method integer getTimeEndMs() 获取字幕对应的时间尾点
 * @method void setTimeEndMs(integer $TimeEndMs) 设置字幕对应的时间尾点
 * @method integer getTextBegin() 获取字幕对应的文本索引起点
 * @method void setTextBegin(integer $TextBegin) 设置字幕对应的文本索引起点
 * @method integer getTextEnd() 获取字幕对应的文本索引尾点
 * @method void setTextEnd(integer $TextEnd) 设置字幕对应的文本索引尾点
 */
class AlignmentItem extends AbstractModel
{
    /**
     * @var integer 字幕对应的时间起点
     */
    public $TimeBeginMs;

    /**
     * @var integer 字幕对应的时间尾点
     */
    public $TimeEndMs;

    /**
     * @var integer 字幕对应的文本索引起点
     */
    public $TextBegin;

    /**
     * @var integer 字幕对应的文本索引尾点
     */
    public $TextEnd;

    /**
     * @param integer $TimeBeginMs 字幕对应的时间起点
     * @param integer $TimeEndMs 字幕对应的时间尾点
     * @param integer $TextBegin 字幕对应的文本索引起点
     * @param integer $TextEnd 字幕对应的文本索引尾点
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
        if (array_key_exists("TimeBeginMs",$param) and $param["TimeBeginMs"] !== null) {
            $this->TimeBeginMs = $param["TimeBeginMs"];
        }

        if (array_key_exists("TimeEndMs",$param) and $param["TimeEndMs"] !== null) {
            $this->TimeEndMs = $param["TimeEndMs"];
        }

        if (array_key_exists("TextBegin",$param) and $param["TextBegin"] !== null) {
            $this->TextBegin = $param["TextBegin"];
        }

        if (array_key_exists("TextEnd",$param) and $param["TextEnd"] !== null) {
            $this->TextEnd = $param["TextEnd"];
        }
    }
}
