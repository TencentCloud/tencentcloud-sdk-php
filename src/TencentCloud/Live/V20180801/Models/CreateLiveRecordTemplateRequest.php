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
 * CreateLiveRecordTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取<p>模板名。仅支持中文、英文、数字、_、-。</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名。仅支持中文、英文、数字、_、-。</p>
 * @method string getDescription() 获取<p>描述信息。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息。</p>
 * @method RecordParam getFlvParam() 获取<p>Flv录制参数，开启Flv录制时设置。</p>
 * @method void setFlvParam(RecordParam $FlvParam) 设置<p>Flv录制参数，开启Flv录制时设置。</p>
 * @method RecordParam getHlsParam() 获取<p>Hls录制参数，开启hls录制时设置。</p>
 * @method void setHlsParam(RecordParam $HlsParam) 设置<p>Hls录制参数，开启hls录制时设置。</p>
 * @method RecordParam getMp4Param() 获取<p>Mp4录制参数，开启Mp4录制时设置。</p>
 * @method void setMp4Param(RecordParam $Mp4Param) 设置<p>Mp4录制参数，开启Mp4录制时设置。</p>
 * @method RecordParam getAacParam() 获取<p>Aac录制参数，开启Aac录制时设置。</p>
 * @method void setAacParam(RecordParam $AacParam) 设置<p>Aac录制参数，开启Aac录制时设置。</p>
 * @method integer getIsDelayLive() 获取<p>直播类型，默认 0。<br>0：普通直播，<br>1：慢直播。</p>
 * @method void setIsDelayLive(integer $IsDelayLive) 设置<p>直播类型，默认 0。<br>0：普通直播，<br>1：慢直播。</p>
 * @method HlsSpecialParam getHlsSpecialParam() 获取<p>HLS专属录制参数。</p>
 * @method void setHlsSpecialParam(HlsSpecialParam $HlsSpecialParam) 设置<p>HLS专属录制参数。</p>
 * @method RecordParam getMp3Param() 获取<p>Mp3录制参数，开启Mp3录制时设置。</p>
 * @method void setMp3Param(RecordParam $Mp3Param) 设置<p>Mp3录制参数，开启Mp3录制时设置。</p>
 * @method integer getCosStore() 获取<p>是否存储至 cos，值为 1 时表示存储至 cos。</p>
 * @method void setCosStore(integer $CosStore) 设置<p>是否存储至 cos，值为 1 时表示存储至 cos。</p>
 * @method boolean getRemoveWatermark() 获取<p>是否去除水印，类型为慢直播时此参数无效。<br>如果为false，则录制水印流或转码流；如果为true，则录制原始流。</p>
 * @method void setRemoveWatermark(boolean $RemoveWatermark) 设置<p>是否去除水印，类型为慢直播时此参数无效。<br>如果为false，则录制水印流或转码流；如果为true，则录制原始流。</p>
 * @method FlvSpecialParam getFlvSpecialParam() 获取<p>FLV 录制特殊参数。</p>
 * @method void setFlvSpecialParam(FlvSpecialParam $FlvSpecialParam) 设置<p>FLV 录制特殊参数。</p>
 */
class CreateLiveRecordTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>模板名。仅支持中文、英文、数字、_、-。</p>
     */
    public $TemplateName;

    /**
     * @var string <p>描述信息。</p>
     */
    public $Description;

    /**
     * @var RecordParam <p>Flv录制参数，开启Flv录制时设置。</p>
     */
    public $FlvParam;

    /**
     * @var RecordParam <p>Hls录制参数，开启hls录制时设置。</p>
     */
    public $HlsParam;

    /**
     * @var RecordParam <p>Mp4录制参数，开启Mp4录制时设置。</p>
     */
    public $Mp4Param;

    /**
     * @var RecordParam <p>Aac录制参数，开启Aac录制时设置。</p>
     */
    public $AacParam;

    /**
     * @var integer <p>直播类型，默认 0。<br>0：普通直播，<br>1：慢直播。</p>
     */
    public $IsDelayLive;

    /**
     * @var HlsSpecialParam <p>HLS专属录制参数。</p>
     */
    public $HlsSpecialParam;

    /**
     * @var RecordParam <p>Mp3录制参数，开启Mp3录制时设置。</p>
     */
    public $Mp3Param;

    /**
     * @var integer <p>是否存储至 cos，值为 1 时表示存储至 cos。</p>
     */
    public $CosStore;

    /**
     * @var boolean <p>是否去除水印，类型为慢直播时此参数无效。<br>如果为false，则录制水印流或转码流；如果为true，则录制原始流。</p>
     */
    public $RemoveWatermark;

    /**
     * @var FlvSpecialParam <p>FLV 录制特殊参数。</p>
     */
    public $FlvSpecialParam;

    /**
     * @param string $TemplateName <p>模板名。仅支持中文、英文、数字、_、-。</p>
     * @param string $Description <p>描述信息。</p>
     * @param RecordParam $FlvParam <p>Flv录制参数，开启Flv录制时设置。</p>
     * @param RecordParam $HlsParam <p>Hls录制参数，开启hls录制时设置。</p>
     * @param RecordParam $Mp4Param <p>Mp4录制参数，开启Mp4录制时设置。</p>
     * @param RecordParam $AacParam <p>Aac录制参数，开启Aac录制时设置。</p>
     * @param integer $IsDelayLive <p>直播类型，默认 0。<br>0：普通直播，<br>1：慢直播。</p>
     * @param HlsSpecialParam $HlsSpecialParam <p>HLS专属录制参数。</p>
     * @param RecordParam $Mp3Param <p>Mp3录制参数，开启Mp3录制时设置。</p>
     * @param integer $CosStore <p>是否存储至 cos，值为 1 时表示存储至 cos。</p>
     * @param boolean $RemoveWatermark <p>是否去除水印，类型为慢直播时此参数无效。<br>如果为false，则录制水印流或转码流；如果为true，则录制原始流。</p>
     * @param FlvSpecialParam $FlvSpecialParam <p>FLV 录制特殊参数。</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FlvParam",$param) and $param["FlvParam"] !== null) {
            $this->FlvParam = new RecordParam();
            $this->FlvParam->deserialize($param["FlvParam"]);
        }

        if (array_key_exists("HlsParam",$param) and $param["HlsParam"] !== null) {
            $this->HlsParam = new RecordParam();
            $this->HlsParam->deserialize($param["HlsParam"]);
        }

        if (array_key_exists("Mp4Param",$param) and $param["Mp4Param"] !== null) {
            $this->Mp4Param = new RecordParam();
            $this->Mp4Param->deserialize($param["Mp4Param"]);
        }

        if (array_key_exists("AacParam",$param) and $param["AacParam"] !== null) {
            $this->AacParam = new RecordParam();
            $this->AacParam->deserialize($param["AacParam"]);
        }

        if (array_key_exists("IsDelayLive",$param) and $param["IsDelayLive"] !== null) {
            $this->IsDelayLive = $param["IsDelayLive"];
        }

        if (array_key_exists("HlsSpecialParam",$param) and $param["HlsSpecialParam"] !== null) {
            $this->HlsSpecialParam = new HlsSpecialParam();
            $this->HlsSpecialParam->deserialize($param["HlsSpecialParam"]);
        }

        if (array_key_exists("Mp3Param",$param) and $param["Mp3Param"] !== null) {
            $this->Mp3Param = new RecordParam();
            $this->Mp3Param->deserialize($param["Mp3Param"]);
        }

        if (array_key_exists("CosStore",$param) and $param["CosStore"] !== null) {
            $this->CosStore = $param["CosStore"];
        }

        if (array_key_exists("RemoveWatermark",$param) and $param["RemoveWatermark"] !== null) {
            $this->RemoveWatermark = $param["RemoveWatermark"];
        }

        if (array_key_exists("FlvSpecialParam",$param) and $param["FlvSpecialParam"] !== null) {
            $this->FlvSpecialParam = new FlvSpecialParam();
            $this->FlvSpecialParam->deserialize($param["FlvSpecialParam"]);
        }
    }
}
