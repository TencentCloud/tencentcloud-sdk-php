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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddRecordBackupTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取<p>模板名称（仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复）</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名称（仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复）</p>
 * @method array getTimeSections() 获取<p>上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
 * @method void setTimeSections(array $TimeSections) 设置<p>上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
 * @method array getDevTimeSections() 获取<p>录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
 * @method void setDevTimeSections(array $DevTimeSections) 设置<p>录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
 * @method integer getScale() 获取<p>上云倍速（支持1，2，4倍速）</p>
 * @method void setScale(integer $Scale) 设置<p>上云倍速（支持1，2，4倍速）</p>
 * @method integer getDayOffset() 获取<p>周期偏移量，默认1，表示拉取昨天的设备录像，0表示拉取今天的设备录像，3表示拉取前天的设备录像</p><p>取值范围：[0, 90]</p><p>默认值：1</p>
 * @method void setDayOffset(integer $DayOffset) 设置<p>周期偏移量，默认1，表示拉取昨天的设备录像，0表示拉取今天的设备录像，3表示拉取前天的设备录像</p><p>取值范围：[0, 90]</p><p>默认值：1</p>
 */
class AddRecordBackupTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>模板名称（仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复）</p>
     */
    public $TemplateName;

    /**
     * @var array <p>上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
     */
    public $TimeSections;

    /**
     * @var array <p>录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
     */
    public $DevTimeSections;

    /**
     * @var integer <p>上云倍速（支持1，2，4倍速）</p>
     */
    public $Scale;

    /**
     * @var integer <p>周期偏移量，默认1，表示拉取昨天的设备录像，0表示拉取今天的设备录像，3表示拉取前天的设备录像</p><p>取值范围：[0, 90]</p><p>默认值：1</p>
     */
    public $DayOffset;

    /**
     * @param string $TemplateName <p>模板名称（仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复）</p>
     * @param array $TimeSections <p>上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
     * @param array $DevTimeSections <p>录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
     * @param integer $Scale <p>上云倍速（支持1，2，4倍速）</p>
     * @param integer $DayOffset <p>周期偏移量，默认1，表示拉取昨天的设备录像，0表示拉取今天的设备录像，3表示拉取前天的设备录像</p><p>取值范围：[0, 90]</p><p>默认值：1</p>
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TimeSections",$param) and $param["TimeSections"] !== null) {
            $this->TimeSections = [];
            foreach ($param["TimeSections"] as $key => $value){
                $obj = new RecordTemplateTimeSections();
                $obj->deserialize($value);
                array_push($this->TimeSections, $obj);
            }
        }

        if (array_key_exists("DevTimeSections",$param) and $param["DevTimeSections"] !== null) {
            $this->DevTimeSections = [];
            foreach ($param["DevTimeSections"] as $key => $value){
                $obj = new RecordTemplateTimeSections();
                $obj->deserialize($value);
                array_push($this->DevTimeSections, $obj);
            }
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("DayOffset",$param) and $param["DayOffset"] !== null) {
            $this->DayOffset = $param["DayOffset"];
        }
    }
}
