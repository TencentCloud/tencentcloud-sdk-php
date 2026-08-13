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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageModeration请求参数结构体
 *
 * @method string getBizType() 获取<p>该字段表示使用的策略的具体编号，该字段需要先在<a href="https://console.cloud.tencent.com/cms/clouds/manage">内容安全控制台</a>中配置。<br>备注：不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。</p>
 * @method void setBizType(string $BizType) 设置<p>该字段表示使用的策略的具体编号，该字段需要先在<a href="https://console.cloud.tencent.com/cms/clouds/manage">内容安全控制台</a>中配置。<br>备注：不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。</p>
 * @method string getDataId() 获取<p>该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
 * @method void setDataId(string $DataId) 设置<p>该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
 * @method string getFileContent() 获取<p>该字段表示待检测图片文件内容的Base64编码，由于云API对请求包体有大小限制，图片的<strong>Base64编码内容大小不得超过10MB</strong>。<br>备注：<strong>该字段与FileUrl必须选择输入其中一个</strong>。</p>
 * @method void setFileContent(string $FileContent) 设置<p>该字段表示待检测图片文件内容的Base64编码，由于云API对请求包体有大小限制，图片的<strong>Base64编码内容大小不得超过10MB</strong>。<br>备注：<strong>该字段与FileUrl必须选择输入其中一个</strong>。</p>
 * @method string getFileUrl() 获取<p>该字段表示待检测图片文件的访问链接，URL源图<strong>大小不超过30MB</strong>。<br>备注：该字段与FileContent必须选择输入其中一个。</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>该字段表示待检测图片文件的访问链接，URL源图<strong>大小不超过30MB</strong>。<br>备注：该字段与FileContent必须选择输入其中一个。</p>
 * @method integer getInterval() 获取<p><strong>GIF检测专用</strong>，用于表示GIF截帧频率（每隔多少张图片抽取一帧进行检测）；默认值为0，此时只会检测GIF的第一帧或不进行切分处理。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。</p>
 * @method void setInterval(integer $Interval) 设置<p><strong>GIF检测专用</strong>，用于表示GIF截帧频率（每隔多少张图片抽取一帧进行检测）；默认值为0，此时只会检测GIF的第一帧或不进行切分处理。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。</p>
 * @method integer getMaxFrames() 获取<p><strong>GIF检测专用</strong>，用于标识最大截帧数量；默认值为1，此时只会检测输入GIF的第一帧不进行切分处理（可能会造成处理超时）。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。</p>
 * @method void setMaxFrames(integer $MaxFrames) 设置<p><strong>GIF检测专用</strong>，用于标识最大截帧数量；默认值为1，此时只会检测输入GIF的第一帧不进行切分处理（可能会造成处理超时）。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。</p>
 * @method User getUser() 获取<p>该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户。</p>
 * @method void setUser(User $User) 设置<p>该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户。</p>
 * @method Device getDevice() 获取<p>该字段表示待检测对象对应的设备相关信息，若填入则可甄别相应违规风险设备。</p>
 * @method void setDevice(Device $Device) 设置<p>该字段表示待检测对象对应的设备相关信息，若填入则可甄别相应违规风险设备。</p>
 * @method string getType() 获取<p>该字段表示输入的图片审核类型，取值含：IMAGE（内容安全）、IMAGE_AIGC（AI生成识别）两种，默认值为IMAGE。</p>
 * @method void setType(string $Type) 设置<p>该字段表示输入的图片审核类型，取值含：IMAGE（内容安全）、IMAGE_AIGC（AI生成识别）两种，默认值为IMAGE。</p>
 * @method string getBizTag() 获取<p>该字段表示输入的策略标识用于调用业务来区分策略场景</p>
 * @method void setBizTag(string $BizTag) 设置<p>该字段表示输入的策略标识用于调用业务来区分策略场景</p>
 */
class ImageModerationRequest extends AbstractModel
{
    /**
     * @var string <p>该字段表示使用的策略的具体编号，该字段需要先在<a href="https://console.cloud.tencent.com/cms/clouds/manage">内容安全控制台</a>中配置。<br>备注：不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。</p>
     */
    public $BizType;

    /**
     * @var string <p>该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
     */
    public $DataId;

    /**
     * @var string <p>该字段表示待检测图片文件内容的Base64编码，由于云API对请求包体有大小限制，图片的<strong>Base64编码内容大小不得超过10MB</strong>。<br>备注：<strong>该字段与FileUrl必须选择输入其中一个</strong>。</p>
     */
    public $FileContent;

    /**
     * @var string <p>该字段表示待检测图片文件的访问链接，URL源图<strong>大小不超过30MB</strong>。<br>备注：该字段与FileContent必须选择输入其中一个。</p>
     */
    public $FileUrl;

    /**
     * @var integer <p><strong>GIF检测专用</strong>，用于表示GIF截帧频率（每隔多少张图片抽取一帧进行检测）；默认值为0，此时只会检测GIF的第一帧或不进行切分处理。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。</p>
     */
    public $Interval;

    /**
     * @var integer <p><strong>GIF检测专用</strong>，用于标识最大截帧数量；默认值为1，此时只会检测输入GIF的第一帧不进行切分处理（可能会造成处理超时）。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。</p>
     */
    public $MaxFrames;

    /**
     * @var User <p>该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户。</p>
     */
    public $User;

    /**
     * @var Device <p>该字段表示待检测对象对应的设备相关信息，若填入则可甄别相应违规风险设备。</p>
     */
    public $Device;

    /**
     * @var string <p>该字段表示输入的图片审核类型，取值含：IMAGE（内容安全）、IMAGE_AIGC（AI生成识别）两种，默认值为IMAGE。</p>
     */
    public $Type;

    /**
     * @var string <p>该字段表示输入的策略标识用于调用业务来区分策略场景</p>
     */
    public $BizTag;

    /**
     * @param string $BizType <p>该字段表示使用的策略的具体编号，该字段需要先在<a href="https://console.cloud.tencent.com/cms/clouds/manage">内容安全控制台</a>中配置。<br>备注：不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。</p>
     * @param string $DataId <p>该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
     * @param string $FileContent <p>该字段表示待检测图片文件内容的Base64编码，由于云API对请求包体有大小限制，图片的<strong>Base64编码内容大小不得超过10MB</strong>。<br>备注：<strong>该字段与FileUrl必须选择输入其中一个</strong>。</p>
     * @param string $FileUrl <p>该字段表示待检测图片文件的访问链接，URL源图<strong>大小不超过30MB</strong>。<br>备注：该字段与FileContent必须选择输入其中一个。</p>
     * @param integer $Interval <p><strong>GIF检测专用</strong>，用于表示GIF截帧频率（每隔多少张图片抽取一帧进行检测）；默认值为0，此时只会检测GIF的第一帧或不进行切分处理。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。</p>
     * @param integer $MaxFrames <p><strong>GIF检测专用</strong>，用于标识最大截帧数量；默认值为1，此时只会检测输入GIF的第一帧不进行切分处理（可能会造成处理超时）。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。</p>
     * @param User $User <p>该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户。</p>
     * @param Device $Device <p>该字段表示待检测对象对应的设备相关信息，若填入则可甄别相应违规风险设备。</p>
     * @param string $Type <p>该字段表示输入的图片审核类型，取值含：IMAGE（内容安全）、IMAGE_AIGC（AI生成识别）两种，默认值为IMAGE。</p>
     * @param string $BizTag <p>该字段表示输入的策略标识用于调用业务来区分策略场景</p>
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MaxFrames",$param) and $param["MaxFrames"] !== null) {
            $this->MaxFrames = $param["MaxFrames"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new User();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BizTag",$param) and $param["BizTag"] !== null) {
            $this->BizTag = $param["BizTag"];
        }
    }
}
