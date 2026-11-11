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
 * ModifyCloudTranscription请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>TRTC的SdkAppId，和转录的房间所对应的SdkAppId相同。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>TRTC的SdkAppId，和转录的房间所对应的SdkAppId相同。</p>
 * @method string getTaskId() 获取<p>转录任务的唯一Id，在启动转录成功后会返回。</p>
 * @method void setTaskId(string $TaskId) 设置<p>转录任务的唯一Id，在启动转录成功后会返回。</p>
 * @method integer getSequenceNumber() 获取<p>客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
 * @method void setSequenceNumber(integer $SequenceNumber) 设置<p>客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
 * @method TranscriptionSubscribeParam getSubscribeUserInfo() 获取<p>转录订阅用户信息，包括白名单和黑名单。</p>
 * @method void setSubscribeUserInfo(TranscriptionSubscribeParam $SubscribeUserInfo) 设置<p>转录订阅用户信息，包括白名单和黑名单。</p>
 * @method TranslationParam getTranslationParam() 获取<p>转录服务翻译使用的参数。</p>
 * @method void setTranslationParam(TranslationParam $TranslationParam) 设置<p>转录服务翻译使用的参数。</p>
 * @method array getTTSParam() 获取<p>转录服务TTS使用的参数。</p>
 * @method void setTTSParam(array $TTSParam) 设置<p>转录服务TTS使用的参数。</p>
 */
class ModifyCloudTranscriptionRequest extends AbstractModel
{
    /**
     * @var integer <p>TRTC的SdkAppId，和转录的房间所对应的SdkAppId相同。</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>转录任务的唯一Id，在启动转录成功后会返回。</p>
     */
    public $TaskId;

    /**
     * @var integer <p>客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
     */
    public $SequenceNumber;

    /**
     * @var TranscriptionSubscribeParam <p>转录订阅用户信息，包括白名单和黑名单。</p>
     */
    public $SubscribeUserInfo;

    /**
     * @var TranslationParam <p>转录服务翻译使用的参数。</p>
     */
    public $TranslationParam;

    /**
     * @var array <p>转录服务TTS使用的参数。</p>
     */
    public $TTSParam;

    /**
     * @param integer $SdkAppId <p>TRTC的SdkAppId，和转录的房间所对应的SdkAppId相同。</p>
     * @param string $TaskId <p>转录任务的唯一Id，在启动转录成功后会返回。</p>
     * @param integer $SequenceNumber <p>客户保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
     * @param TranscriptionSubscribeParam $SubscribeUserInfo <p>转录订阅用户信息，包括白名单和黑名单。</p>
     * @param TranslationParam $TranslationParam <p>转录服务翻译使用的参数。</p>
     * @param array $TTSParam <p>转录服务TTS使用的参数。</p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SequenceNumber",$param) and $param["SequenceNumber"] !== null) {
            $this->SequenceNumber = $param["SequenceNumber"];
        }

        if (array_key_exists("SubscribeUserInfo",$param) and $param["SubscribeUserInfo"] !== null) {
            $this->SubscribeUserInfo = new TranscriptionSubscribeParam();
            $this->SubscribeUserInfo->deserialize($param["SubscribeUserInfo"]);
        }

        if (array_key_exists("TranslationParam",$param) and $param["TranslationParam"] !== null) {
            $this->TranslationParam = new TranslationParam();
            $this->TranslationParam->deserialize($param["TranslationParam"]);
        }

        if (array_key_exists("TTSParam",$param) and $param["TTSParam"] !== null) {
            $this->TTSParam = [];
            foreach ($param["TTSParam"] as $key => $value){
                $obj = new TTSParam();
                $obj->deserialize($value);
                array_push($this->TTSParam, $obj);
            }
        }
    }
}
