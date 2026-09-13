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
 * CreateAudioModerationSync返回参数结构体
 *
 * @method string getDataId() 获取<p>返回传入的DataId</p>
 * @method void setDataId(string $DataId) 设置<p>返回传入的DataId</p>
 * @method string getTaskId() 获取<p>审核返回的任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>审核返回的任务id</p>
 * @method string getFileName() 获取<p>文件名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
 * @method integer getMediaType() 获取<p>1：语音。 2：图片。</p>
 * @method void setMediaType(integer $MediaType) 设置<p>1：语音。 2：图片。</p>
 * @method integer getSuggest() 获取<p>0：建议通过。 1 ：建议人工重新内容识别。 2：建议屏蔽。</p>
 * @method void setSuggest(integer $Suggest) 设置<p>0：建议通过。 1 ：建议人工重新内容识别。 2：建议屏蔽。</p>
 * @method integer getRate() 获取<p>置信度分数，取值范围：0（置信度最低）-100（置信度最高 ），越高代表越有可能属于当前返回的标签。 实例值：100</p>
 * @method void setRate(integer $Rate) 设置<p>置信度分数，取值范围：0（置信度最低）-100（置信度最高 ），越高代表越有可能属于当前返回的标签。 实例值：100</p>
 * @method string getLabel() 获取<p>Normal：正常文本  Ad:广告 Porn：色情 Abuse：谩骂 Illegal: 违禁 Polity: 涉政 Terror: 暴恐 Sexy: 性感 Moan: 呻吟/娇喘 QRCode: 二维码 Custom: 自定义</p>
 * @method void setLabel(string $Label) 设置<p>Normal：正常文本  Ad:广告 Porn：色情 Abuse：谩骂 Illegal: 违禁 Polity: 涉政 Terror: 暴恐 Sexy: 性感 Moan: 呻吟/娇喘 QRCode: 二维码 Custom: 自定义</p>
 * @method string getSubLabel() 获取<p>子标签</p>
 * @method void setSubLabel(string $SubLabel) 设置<p>子标签</p>
 * @method string getAudio() 获取<p>音频链接地址</p>
 * @method void setAudio(string $Audio) 设置<p>音频链接地址</p>
 * @method string getAudioText() 获取<p>审核识别音频文本</p>
 * @method void setAudioText(string $AudioText) 设置<p>审核识别音频文本</p>
 * @method integer getDuration() 获取<p>音频时长，单位 ms</p>
 * @method void setDuration(integer $Duration) 设置<p>音频时长，单位 ms</p>
 * @method array getCheckDetail() 获取<p>审核明细</p>
 * @method void setCheckDetail(array $CheckDetail) 设置<p>审核明细</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAudioModerationSyncResponse extends AbstractModel
{
    /**
     * @var string <p>返回传入的DataId</p>
     */
    public $DataId;

    /**
     * @var string <p>审核返回的任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>文件名</p>
     */
    public $FileName;

    /**
     * @var integer <p>1：语音。 2：图片。</p>
     */
    public $MediaType;

    /**
     * @var integer <p>0：建议通过。 1 ：建议人工重新内容识别。 2：建议屏蔽。</p>
     */
    public $Suggest;

    /**
     * @var integer <p>置信度分数，取值范围：0（置信度最低）-100（置信度最高 ），越高代表越有可能属于当前返回的标签。 实例值：100</p>
     */
    public $Rate;

    /**
     * @var string <p>Normal：正常文本  Ad:广告 Porn：色情 Abuse：谩骂 Illegal: 违禁 Polity: 涉政 Terror: 暴恐 Sexy: 性感 Moan: 呻吟/娇喘 QRCode: 二维码 Custom: 自定义</p>
     */
    public $Label;

    /**
     * @var string <p>子标签</p>
     */
    public $SubLabel;

    /**
     * @var string <p>音频链接地址</p>
     */
    public $Audio;

    /**
     * @var string <p>审核识别音频文本</p>
     */
    public $AudioText;

    /**
     * @var integer <p>音频时长，单位 ms</p>
     */
    public $Duration;

    /**
     * @var array <p>审核明细</p>
     */
    public $CheckDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DataId <p>返回传入的DataId</p>
     * @param string $TaskId <p>审核返回的任务id</p>
     * @param string $FileName <p>文件名</p>
     * @param integer $MediaType <p>1：语音。 2：图片。</p>
     * @param integer $Suggest <p>0：建议通过。 1 ：建议人工重新内容识别。 2：建议屏蔽。</p>
     * @param integer $Rate <p>置信度分数，取值范围：0（置信度最低）-100（置信度最高 ），越高代表越有可能属于当前返回的标签。 实例值：100</p>
     * @param string $Label <p>Normal：正常文本  Ad:广告 Porn：色情 Abuse：谩骂 Illegal: 违禁 Polity: 涉政 Terror: 暴恐 Sexy: 性感 Moan: 呻吟/娇喘 QRCode: 二维码 Custom: 自定义</p>
     * @param string $SubLabel <p>子标签</p>
     * @param string $Audio <p>音频链接地址</p>
     * @param string $AudioText <p>审核识别音频文本</p>
     * @param integer $Duration <p>音频时长，单位 ms</p>
     * @param array $CheckDetail <p>审核明细</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("Suggest",$param) and $param["Suggest"] !== null) {
            $this->Suggest = $param["Suggest"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = $param["Audio"];
        }

        if (array_key_exists("AudioText",$param) and $param["AudioText"] !== null) {
            $this->AudioText = $param["AudioText"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("CheckDetail",$param) and $param["CheckDetail"] !== null) {
            $this->CheckDetail = [];
            foreach ($param["CheckDetail"] as $key => $value){
                $obj = new ModerationCheckDetail();
                $obj->deserialize($value);
                array_push($this->CheckDetail, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
