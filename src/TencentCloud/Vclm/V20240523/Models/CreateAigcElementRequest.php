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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAigcElement请求参数结构体
 *
 * @method string getName() 获取<p>主体名称<br>不能超过20个字符</p>
 * @method void setName(string $Name) 设置<p>主体名称<br>不能超过20个字符</p>
 * @method string getDescription() 获取<p>主体描述</p><p>不能超过100个字符</p>
 * @method void setDescription(string $Description) 设置<p>主体描述</p><p>不能超过100个字符</p>
 * @method string getReferenceType() 获取<p>主体参考方式</p><p>枚举值：<br>video_refer<br>image_refer<br>video_refer: 视频角色主体，此时将参考element_video_list定义主体外表<br>image_refer: 多图主体，此时将参考element_image_list定义主体外表</p>
 * @method void setReferenceType(string $ReferenceType) 设置<p>主体参考方式</p><p>枚举值：<br>video_refer<br>image_refer<br>video_refer: 视频角色主体，此时将参考element_video_list定义主体外表<br>image_refer: 多图主体，此时将参考element_image_list定义主体外表</p>
 * @method ElementImageList getElementImageList() 获取<p>主体参考图，可通过多张图片设定主体及其细节</p><p>包括正面参考图和其他角度或特写参考图，其中：至少包括1张正面参考图，由frontal_image参数定义；需包括1～3张其他参考图，需与正面参考图有差异，由image_url参数定义<br>支持传入图片Base64编码或图片URL（确保可访问）</p><p>图片格式支持.jpg / .jpeg / .png。图片文件大小不能超过10MB，图片宽高尺寸不小于300px，图片宽高比要在1:2.5 ~ 2.5:1之间</p><p>reference_type参数值为 image_refer 时，当前参数必填</p>
 * @method void setElementImageList(ElementImageList $ElementImageList) 设置<p>主体参考图，可通过多张图片设定主体及其细节</p><p>包括正面参考图和其他角度或特写参考图，其中：至少包括1张正面参考图，由frontal_image参数定义；需包括1～3张其他参考图，需与正面参考图有差异，由image_url参数定义<br>支持传入图片Base64编码或图片URL（确保可访问）</p><p>图片格式支持.jpg / .jpeg / .png。图片文件大小不能超过10MB，图片宽高尺寸不小于300px，图片宽高比要在1:2.5 ~ 2.5:1之间</p><p>reference_type参数值为 image_refer 时，当前参数必填</p>
 * @method array getVideoList() 获取<p>主体参考视频，可通过视频设定主体及其细节</p><p>可上传有声视频，有声视频包含人声则触发音色定制（定制+入音色库+与主体绑定）</p><p>暂时仅支持通过视频定制写实风格的人形形象</p><p>参考视频时当前参数必填，参考图片时当前参数无效</p><p>用key:value承载。视频格式仅支持MP4/MOV。仅支持时长介于3s～8s之间、宽高比例需为16:9或9:16的1080P视频。至多仅支持上传1段视频，视频大小不超过200MB。video_url参数值不得为空</p>
 * @method void setVideoList(array $VideoList) 设置<p>主体参考视频，可通过视频设定主体及其细节</p><p>可上传有声视频，有声视频包含人声则触发音色定制（定制+入音色库+与主体绑定）</p><p>暂时仅支持通过视频定制写实风格的人形形象</p><p>参考视频时当前参数必填，参考图片时当前参数无效</p><p>用key:value承载。视频格式仅支持MP4/MOV。仅支持时长介于3s～8s之间、宽高比例需为16:9或9:16的1080P视频。至多仅支持上传1段视频，视频大小不超过200MB。video_url参数值不得为空</p>
 * @method array getProvider() 获取<p>厂商</p>
 * @method void setProvider(array $Provider) 设置<p>厂商</p>
 * @method array getTagList() 获取<p>为主体配置标签，一个主体可以配置多个标签</p><p>用key:value承载。tag的ID与名称：o_101 热梗, o_102 人物, o_103 动物, o_104 道具, o_105 服饰, o_106 场景, o_107 特效, o_108 其他</p>
 * @method void setTagList(array $TagList) 设置<p>为主体配置标签，一个主体可以配置多个标签</p><p>用key:value承载。tag的ID与名称：o_101 热梗, o_102 人物, o_103 动物, o_104 道具, o_105 服饰, o_106 场景, o_107 特效, o_108 其他</p>
 * @method string getElementVoiceId() 获取<p>主体音色ID，可绑定音色库中已有音色</p><p>当前参数为空时，当前主体不绑定音色<br>为多图主体绑定音色时，仅支持人物形象主体或类人形象主体</p>
 * @method void setElementVoiceId(string $ElementVoiceId) 设置<p>主体音色ID，可绑定音色库中已有音色</p><p>当前参数为空时，当前主体不绑定音色<br>为多图主体绑定音色时，仅支持人物形象主体或类人形象主体</p>
 */
class CreateAigcElementRequest extends AbstractModel
{
    /**
     * @var string <p>主体名称<br>不能超过20个字符</p>
     */
    public $Name;

    /**
     * @var string <p>主体描述</p><p>不能超过100个字符</p>
     */
    public $Description;

    /**
     * @var string <p>主体参考方式</p><p>枚举值：<br>video_refer<br>image_refer<br>video_refer: 视频角色主体，此时将参考element_video_list定义主体外表<br>image_refer: 多图主体，此时将参考element_image_list定义主体外表</p>
     */
    public $ReferenceType;

    /**
     * @var ElementImageList <p>主体参考图，可通过多张图片设定主体及其细节</p><p>包括正面参考图和其他角度或特写参考图，其中：至少包括1张正面参考图，由frontal_image参数定义；需包括1～3张其他参考图，需与正面参考图有差异，由image_url参数定义<br>支持传入图片Base64编码或图片URL（确保可访问）</p><p>图片格式支持.jpg / .jpeg / .png。图片文件大小不能超过10MB，图片宽高尺寸不小于300px，图片宽高比要在1:2.5 ~ 2.5:1之间</p><p>reference_type参数值为 image_refer 时，当前参数必填</p>
     */
    public $ElementImageList;

    /**
     * @var array <p>主体参考视频，可通过视频设定主体及其细节</p><p>可上传有声视频，有声视频包含人声则触发音色定制（定制+入音色库+与主体绑定）</p><p>暂时仅支持通过视频定制写实风格的人形形象</p><p>参考视频时当前参数必填，参考图片时当前参数无效</p><p>用key:value承载。视频格式仅支持MP4/MOV。仅支持时长介于3s～8s之间、宽高比例需为16:9或9:16的1080P视频。至多仅支持上传1段视频，视频大小不超过200MB。video_url参数值不得为空</p>
     */
    public $VideoList;

    /**
     * @var array <p>厂商</p>
     */
    public $Provider;

    /**
     * @var array <p>为主体配置标签，一个主体可以配置多个标签</p><p>用key:value承载。tag的ID与名称：o_101 热梗, o_102 人物, o_103 动物, o_104 道具, o_105 服饰, o_106 场景, o_107 特效, o_108 其他</p>
     */
    public $TagList;

    /**
     * @var string <p>主体音色ID，可绑定音色库中已有音色</p><p>当前参数为空时，当前主体不绑定音色<br>为多图主体绑定音色时，仅支持人物形象主体或类人形象主体</p>
     */
    public $ElementVoiceId;

    /**
     * @param string $Name <p>主体名称<br>不能超过20个字符</p>
     * @param string $Description <p>主体描述</p><p>不能超过100个字符</p>
     * @param string $ReferenceType <p>主体参考方式</p><p>枚举值：<br>video_refer<br>image_refer<br>video_refer: 视频角色主体，此时将参考element_video_list定义主体外表<br>image_refer: 多图主体，此时将参考element_image_list定义主体外表</p>
     * @param ElementImageList $ElementImageList <p>主体参考图，可通过多张图片设定主体及其细节</p><p>包括正面参考图和其他角度或特写参考图，其中：至少包括1张正面参考图，由frontal_image参数定义；需包括1～3张其他参考图，需与正面参考图有差异，由image_url参数定义<br>支持传入图片Base64编码或图片URL（确保可访问）</p><p>图片格式支持.jpg / .jpeg / .png。图片文件大小不能超过10MB，图片宽高尺寸不小于300px，图片宽高比要在1:2.5 ~ 2.5:1之间</p><p>reference_type参数值为 image_refer 时，当前参数必填</p>
     * @param array $VideoList <p>主体参考视频，可通过视频设定主体及其细节</p><p>可上传有声视频，有声视频包含人声则触发音色定制（定制+入音色库+与主体绑定）</p><p>暂时仅支持通过视频定制写实风格的人形形象</p><p>参考视频时当前参数必填，参考图片时当前参数无效</p><p>用key:value承载。视频格式仅支持MP4/MOV。仅支持时长介于3s～8s之间、宽高比例需为16:9或9:16的1080P视频。至多仅支持上传1段视频，视频大小不超过200MB。video_url参数值不得为空</p>
     * @param array $Provider <p>厂商</p>
     * @param array $TagList <p>为主体配置标签，一个主体可以配置多个标签</p><p>用key:value承载。tag的ID与名称：o_101 热梗, o_102 人物, o_103 动物, o_104 道具, o_105 服饰, o_106 场景, o_107 特效, o_108 其他</p>
     * @param string $ElementVoiceId <p>主体音色ID，可绑定音色库中已有音色</p><p>当前参数为空时，当前主体不绑定音色<br>为多图主体绑定音色时，仅支持人物形象主体或类人形象主体</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("ElementImageList",$param) and $param["ElementImageList"] !== null) {
            $this->ElementImageList = new ElementImageList();
            $this->ElementImageList->deserialize($param["ElementImageList"]);
        }

        if (array_key_exists("VideoList",$param) and $param["VideoList"] !== null) {
            $this->VideoList = $param["VideoList"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagList();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("ElementVoiceId",$param) and $param["ElementVoiceId"] !== null) {
            $this->ElementVoiceId = $param["ElementVoiceId"];
        }
    }
}
