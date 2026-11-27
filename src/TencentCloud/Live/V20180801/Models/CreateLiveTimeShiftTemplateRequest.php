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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLiveTimeShiftTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取<p>模板名称。<br>长度上限：255字节。<br>仅支持中文、英文、数字、_、-。</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名称。<br>长度上限：255字节。<br>仅支持中文、英文、数字、_、-。</p>
 * @method integer getDuration() 获取<p>时移时长。单位：s。取值范围：86400 259200 604800 1296000 2592000。</p>
 * @method void setDuration(integer $Duration) 设置<p>时移时长。单位：s。取值范围：86400 259200 604800 1296000 2592000。</p>
 * @method string getDescription() 获取<p>描述信息。<br>仅支持中文、英文、数字、_、-。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息。<br>仅支持中文、英文、数字、_、-。</p>
 * @method string getArea() 获取<p>地域。<br>Mainland：中国大陆。<br>Overseas：海外及港澳台地区。<br>EuropeFrankfurt：欧洲-法兰克福。<br>NorthAmericaSiliconValley：北美-硅谷。<br>MiddleEastRiyadh：中东-利雅得。<br>AsiaTokyo：亚太-东京。<br>AsiaSeoul：亚太-首尔。<br>默认值：Mainland。</p>
 * @method void setArea(string $Area) 设置<p>地域。<br>Mainland：中国大陆。<br>Overseas：海外及港澳台地区。<br>EuropeFrankfurt：欧洲-法兰克福。<br>NorthAmericaSiliconValley：北美-硅谷。<br>MiddleEastRiyadh：中东-利雅得。<br>AsiaTokyo：亚太-东京。<br>AsiaSeoul：亚太-首尔。<br>默认值：Mainland。</p>
 * @method integer getItemDuration() 获取<p>分片时长。<br>可取3-10。<br>单位：s。<br>默认值：5。</p>
 * @method void setItemDuration(integer $ItemDuration) 设置<p>分片时长。<br>可取3-10。<br>单位：s。<br>默认值：5。</p>
 * @method boolean getRemoveWatermark() 获取<p>是否去除水印。<br>传true则将录制原始流。<br>默认值：false。</p>
 * @method void setRemoveWatermark(boolean $RemoveWatermark) 设置<p>是否去除水印。<br>传true则将录制原始流。<br>默认值：false。</p>
 * @method array getTranscodeTemplateIds() 获取<p>转码流id列表。<br>此参数仅在 RemoveWatermark为false时生效。</p>
 * @method void setTranscodeTemplateIds(array $TranscodeTemplateIds) 设置<p>转码流id列表。<br>此参数仅在 RemoveWatermark为false时生效。</p>
 */
class CreateLiveTimeShiftTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>模板名称。<br>长度上限：255字节。<br>仅支持中文、英文、数字、_、-。</p>
     */
    public $TemplateName;

    /**
     * @var integer <p>时移时长。单位：s。取值范围：86400 259200 604800 1296000 2592000。</p>
     */
    public $Duration;

    /**
     * @var string <p>描述信息。<br>仅支持中文、英文、数字、_、-。</p>
     */
    public $Description;

    /**
     * @var string <p>地域。<br>Mainland：中国大陆。<br>Overseas：海外及港澳台地区。<br>EuropeFrankfurt：欧洲-法兰克福。<br>NorthAmericaSiliconValley：北美-硅谷。<br>MiddleEastRiyadh：中东-利雅得。<br>AsiaTokyo：亚太-东京。<br>AsiaSeoul：亚太-首尔。<br>默认值：Mainland。</p>
     */
    public $Area;

    /**
     * @var integer <p>分片时长。<br>可取3-10。<br>单位：s。<br>默认值：5。</p>
     */
    public $ItemDuration;

    /**
     * @var boolean <p>是否去除水印。<br>传true则将录制原始流。<br>默认值：false。</p>
     */
    public $RemoveWatermark;

    /**
     * @var array <p>转码流id列表。<br>此参数仅在 RemoveWatermark为false时生效。</p>
     */
    public $TranscodeTemplateIds;

    /**
     * @param string $TemplateName <p>模板名称。<br>长度上限：255字节。<br>仅支持中文、英文、数字、_、-。</p>
     * @param integer $Duration <p>时移时长。单位：s。取值范围：86400 259200 604800 1296000 2592000。</p>
     * @param string $Description <p>描述信息。<br>仅支持中文、英文、数字、_、-。</p>
     * @param string $Area <p>地域。<br>Mainland：中国大陆。<br>Overseas：海外及港澳台地区。<br>EuropeFrankfurt：欧洲-法兰克福。<br>NorthAmericaSiliconValley：北美-硅谷。<br>MiddleEastRiyadh：中东-利雅得。<br>AsiaTokyo：亚太-东京。<br>AsiaSeoul：亚太-首尔。<br>默认值：Mainland。</p>
     * @param integer $ItemDuration <p>分片时长。<br>可取3-10。<br>单位：s。<br>默认值：5。</p>
     * @param boolean $RemoveWatermark <p>是否去除水印。<br>传true则将录制原始流。<br>默认值：false。</p>
     * @param array $TranscodeTemplateIds <p>转码流id列表。<br>此参数仅在 RemoveWatermark为false时生效。</p>
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
