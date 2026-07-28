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
 * CreateLiveStreamModeration请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>。</p>
 * @method Input getInput() 获取<p>直播流输入源</p>
 * @method void setInput(Input $Input) 设置<p>直播流输入源</p>
 * @method LiveModerationParams getLiveModerationParams() 获取<p>直播流ai理解审核参数</p>
 * @method void setLiveModerationParams(LiveModerationParams $LiveModerationParams) 设置<p>直播流ai理解审核参数</p>
 * @method string getDataId() 获取<p>业务自定义唯一标识，原样透传到回调</p><p>入参限制：长度限制60字符</p>
 * @method void setDataId(string $DataId) 设置<p>业务自定义唯一标识，原样透传到回调</p><p>入参限制：长度限制60字符</p>
 * @method SourceInfo getSourceInfo() 获取<p>额外信息透传结构体（房间/主播/业务自定义），原样回带到回调</p>
 * @method void setSourceInfo(SourceInfo $SourceInfo) 设置<p>额外信息透传结构体（房间/主播/业务自定义），原样回带到回调</p>
 * @method LiveModerationStorageParams getLiveModerationStorageParams() 获取<p>直播流ai理解转存文件存储参数</p>
 * @method void setLiveModerationStorageParams(LiveModerationStorageParams $LiveModerationStorageParams) 设置<p>直播流ai理解转存文件存储参数</p>
 * @method integer getResourceExpiredHour() 获取<p>单路任务最大的生命周期</p><p>取值范围：[1, 72]</p><p>单位：小时</p><p>默认值：48</p>
 * @method void setResourceExpiredHour(integer $ResourceExpiredHour) 设置<p>单路任务最大的生命周期</p><p>取值范围：[1, 72]</p><p>单位：小时</p><p>默认值：48</p>
 */
class CreateLiveStreamModerationRequest extends AbstractModel
{
    /**
     * @var integer <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>。</p>
     */
    public $SdkAppId;

    /**
     * @var Input <p>直播流输入源</p>
     */
    public $Input;

    /**
     * @var LiveModerationParams <p>直播流ai理解审核参数</p>
     */
    public $LiveModerationParams;

    /**
     * @var string <p>业务自定义唯一标识，原样透传到回调</p><p>入参限制：长度限制60字符</p>
     */
    public $DataId;

    /**
     * @var SourceInfo <p>额外信息透传结构体（房间/主播/业务自定义），原样回带到回调</p>
     */
    public $SourceInfo;

    /**
     * @var LiveModerationStorageParams <p>直播流ai理解转存文件存储参数</p>
     */
    public $LiveModerationStorageParams;

    /**
     * @var integer <p>单路任务最大的生命周期</p><p>取值范围：[1, 72]</p><p>单位：小时</p><p>默认值：48</p>
     */
    public $ResourceExpiredHour;

    /**
     * @param integer $SdkAppId <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>。</p>
     * @param Input $Input <p>直播流输入源</p>
     * @param LiveModerationParams $LiveModerationParams <p>直播流ai理解审核参数</p>
     * @param string $DataId <p>业务自定义唯一标识，原样透传到回调</p><p>入参限制：长度限制60字符</p>
     * @param SourceInfo $SourceInfo <p>额外信息透传结构体（房间/主播/业务自定义），原样回带到回调</p>
     * @param LiveModerationStorageParams $LiveModerationStorageParams <p>直播流ai理解转存文件存储参数</p>
     * @param integer $ResourceExpiredHour <p>单路任务最大的生命周期</p><p>取值范围：[1, 72]</p><p>单位：小时</p><p>默认值：48</p>
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new Input();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("LiveModerationParams",$param) and $param["LiveModerationParams"] !== null) {
            $this->LiveModerationParams = new LiveModerationParams();
            $this->LiveModerationParams->deserialize($param["LiveModerationParams"]);
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new SourceInfo();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }

        if (array_key_exists("LiveModerationStorageParams",$param) and $param["LiveModerationStorageParams"] !== null) {
            $this->LiveModerationStorageParams = new LiveModerationStorageParams();
            $this->LiveModerationStorageParams->deserialize($param["LiveModerationStorageParams"]);
        }

        if (array_key_exists("ResourceExpiredHour",$param) and $param["ResourceExpiredHour"] !== null) {
            $this->ResourceExpiredHour = $param["ResourceExpiredHour"];
        }
    }
}
