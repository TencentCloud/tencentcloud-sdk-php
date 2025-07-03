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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频语言种类检测结果
 *
 * @method string getLabel() 获取该字段用于返回对应的语言种类信息。
 * @method void setLabel(string $Label) 设置该字段用于返回对应的语言种类信息。
 * @method integer getScore() 获取该参数用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高**），越高代表音频越有可能属于当前返回的语种标签；
 * @method void setScore(integer $Score) 设置该参数用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高**），越高代表音频越有可能属于当前返回的语种标签；
 * @method float getStartTime() 获取该参数用于返回对应语种标签的片段在音频文件内的开始时间，单位为秒。
 * @method void setStartTime(float $StartTime) 设置该参数用于返回对应语种标签的片段在音频文件内的开始时间，单位为秒。
 * @method float getEndTime() 获取该参数用于返回对应语种标签的片段在音频文件内的结束时间，单位为秒。
 * @method void setEndTime(float $EndTime) 设置该参数用于返回对应语种标签的片段在音频文件内的结束时间，单位为秒。
 * @method string getSubLabelCode() 获取*内测中，敬请期待*
 * @method void setSubLabelCode(string $SubLabelCode) 设置*内测中，敬请期待*
 */
class AudioResultDetailLanguageResult extends AbstractModel
{
    /**
     * @var string 该字段用于返回对应的语言种类信息。
     */
    public $Label;

    /**
     * @var integer 该参数用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高**），越高代表音频越有可能属于当前返回的语种标签；
     */
    public $Score;

    /**
     * @var float 该参数用于返回对应语种标签的片段在音频文件内的开始时间，单位为秒。
     */
    public $StartTime;

    /**
     * @var float 该参数用于返回对应语种标签的片段在音频文件内的结束时间，单位为秒。
     */
    public $EndTime;

    /**
     * @var string *内测中，敬请期待*
     */
    public $SubLabelCode;

    /**
     * @param string $Label 该字段用于返回对应的语言种类信息。
     * @param integer $Score 该参数用于返回当前标签下的置信度，取值范围：0（**置信度最低**）-100（**置信度最高**），越高代表音频越有可能属于当前返回的语种标签；
     * @param float $StartTime 该参数用于返回对应语种标签的片段在音频文件内的开始时间，单位为秒。
     * @param float $EndTime 该参数用于返回对应语种标签的片段在音频文件内的结束时间，单位为秒。
     * @param string $SubLabelCode *内测中，敬请期待*
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubLabelCode",$param) and $param["SubLabelCode"] !== null) {
            $this->SubLabelCode = $param["SubLabelCode"];
        }
    }
}
