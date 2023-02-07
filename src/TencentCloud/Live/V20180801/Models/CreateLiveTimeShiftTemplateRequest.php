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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLiveTimeShiftTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取模板名称。
长度上限：255字节。
仅支持中文、英文、数字、_、-。
 * @method void setTemplateName(string $TemplateName) 设置模板名称。
长度上限：255字节。
仅支持中文、英文、数字、_、-。
 * @method integer getDuration() 获取时移时长。
单位：s。
 * @method void setDuration(integer $Duration) 设置时移时长。
单位：s。
 * @method string getDescription() 获取描述信息。
仅支持中文、英文、数字、_、-。
 * @method void setDescription(string $Description) 设置描述信息。
仅支持中文、英文、数字、_、-。
 * @method string getArea() 获取地域。
Mainland：中国大陆。
Overseas：海外及港澳台地区。
默认值：Mainland。
 * @method void setArea(string $Area) 设置地域。
Mainland：中国大陆。
Overseas：海外及港澳台地区。
默认值：Mainland。
 * @method integer getItemDuration() 获取分片时长。
可取3-10。
单位：s。
默认值：5。
 * @method void setItemDuration(integer $ItemDuration) 设置分片时长。
可取3-10。
单位：s。
默认值：5。
 * @method boolean getRemoveWatermark() 获取是否去除水印。
传true则将录制原始流。
默认值：false。
 * @method void setRemoveWatermark(boolean $RemoveWatermark) 设置是否去除水印。
传true则将录制原始流。
默认值：false。
 * @method array getTranscodeTemplateIds() 获取转码流id列表。
此参数仅在 RemoveWatermark为false时生效。
 * @method void setTranscodeTemplateIds(array $TranscodeTemplateIds) 设置转码流id列表。
此参数仅在 RemoveWatermark为false时生效。
 */
class CreateLiveTimeShiftTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名称。
长度上限：255字节。
仅支持中文、英文、数字、_、-。
     */
    public $TemplateName;

    /**
     * @var integer 时移时长。
单位：s。
     */
    public $Duration;

    /**
     * @var string 描述信息。
仅支持中文、英文、数字、_、-。
     */
    public $Description;

    /**
     * @var string 地域。
Mainland：中国大陆。
Overseas：海外及港澳台地区。
默认值：Mainland。
     */
    public $Area;

    /**
     * @var integer 分片时长。
可取3-10。
单位：s。
默认值：5。
     */
    public $ItemDuration;

    /**
     * @var boolean 是否去除水印。
传true则将录制原始流。
默认值：false。
     */
    public $RemoveWatermark;

    /**
     * @var array 转码流id列表。
此参数仅在 RemoveWatermark为false时生效。
     */
    public $TranscodeTemplateIds;

    /**
     * @param string $TemplateName 模板名称。
长度上限：255字节。
仅支持中文、英文、数字、_、-。
     * @param integer $Duration 时移时长。
单位：s。
     * @param string $Description 描述信息。
仅支持中文、英文、数字、_、-。
     * @param string $Area 地域。
Mainland：中国大陆。
Overseas：海外及港澳台地区。
默认值：Mainland。
     * @param integer $ItemDuration 分片时长。
可取3-10。
单位：s。
默认值：5。
     * @param boolean $RemoveWatermark 是否去除水印。
传true则将录制原始流。
默认值：false。
     * @param array $TranscodeTemplateIds 转码流id列表。
此参数仅在 RemoveWatermark为false时生效。
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("ItemDuration",$param) and $param["ItemDuration"] !== null) {
            $this->ItemDuration = $param["ItemDuration"];
        }

        if (array_key_exists("RemoveWatermark",$param) and $param["RemoveWatermark"] !== null) {
            $this->RemoveWatermark = $param["RemoveWatermark"];
        }

        if (array_key_exists("TranscodeTemplateIds",$param) and $param["TranscodeTemplateIds"] !== null) {
            $this->TranscodeTemplateIds = $param["TranscodeTemplateIds"];
        }
    }
}
