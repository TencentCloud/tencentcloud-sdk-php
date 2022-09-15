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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAdaptiveDynamicStreamingTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取自适应转码模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置自适应转码模板唯一标识。
 * @method integer getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method string getName() 获取模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置模板名称，长度限制：64 个字符。
 * @method string getFormat() 获取自适应转码格式，取值范围：
<li>HLS；</li>
<li>MPEG-DASH。</li>
 * @method void setFormat(string $Format) 设置自适应转码格式，取值范围：
<li>HLS；</li>
<li>MPEG-DASH。</li>
 * @method integer getDisableHigherVideoBitrate() 获取是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) 设置是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method integer getDisableHigherVideoResolution() 获取是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) 设置是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method array getStreamInfos() 获取自适应转码输入流参数信息，最多输入10路流。
注意：各个流的帧率必须保持一致；如果不一致，采用第一个流的帧率作为输出帧率。
 * @method void setStreamInfos(array $StreamInfos) 设置自适应转码输入流参数信息，最多输入10路流。
注意：各个流的帧率必须保持一致；如果不一致，采用第一个流的帧率作为输出帧率。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 */
class ModifyAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var integer 自适应转码模板唯一标识。
     */
    public $Definition;

    /**
     * @var integer <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var string 模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 自适应转码格式，取值范围：
<li>HLS；</li>
<li>MPEG-DASH。</li>
     */
    public $Format;

    /**
     * @var integer 是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer 是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     */
    public $DisableHigherVideoResolution;

    /**
     * @var array 自适应转码输入流参数信息，最多输入10路流。
注意：各个流的帧率必须保持一致；如果不一致，采用第一个流的帧率作为输出帧率。
     */
    public $StreamInfos;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @param integer $Definition 自适应转码模板唯一标识。
     * @param integer $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param string $Name 模板名称，长度限制：64 个字符。
     * @param string $Format 自适应转码格式，取值范围：
<li>HLS；</li>
<li>MPEG-DASH。</li>
     * @param integer $DisableHigherVideoBitrate 是否禁止视频低码率转高码率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     * @param integer $DisableHigherVideoResolution 是否禁止视频分辨率转高分辨率，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     * @param array $StreamInfos 自适应转码输入流参数信息，最多输入10路流。
注意：各个流的帧率必须保持一致；如果不一致，采用第一个流的帧率作为输出帧率。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("DisableHigherVideoBitrate",$param) and $param["DisableHigherVideoBitrate"] !== null) {
            $this->DisableHigherVideoBitrate = $param["DisableHigherVideoBitrate"];
        }

        if (array_key_exists("DisableHigherVideoResolution",$param) and $param["DisableHigherVideoResolution"] !== null) {
            $this->DisableHigherVideoResolution = $param["DisableHigherVideoResolution"];
        }

        if (array_key_exists("StreamInfos",$param) and $param["StreamInfos"] !== null) {
            $this->StreamInfos = [];
            foreach ($param["StreamInfos"] as $key => $value){
                $obj = new AdaptiveStreamTemplate();
                $obj->deserialize($value);
                array_push($this->StreamInfos, $obj);
            }
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
