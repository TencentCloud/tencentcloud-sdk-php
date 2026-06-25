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
 * StartWebRecord请求参数结构体
 *
 * @method string getRecordUrl() 获取<p>【必填】需要录制的网页URL</p>
 * @method void setRecordUrl(string $RecordUrl) 设置<p>【必填】需要录制的网页URL</p>
 * @method StorageParams getStorageParams() 获取<p>【必填】云存储相关的参数，目前支持腾讯云对象存储以及腾讯云云点播VOD，不支持第三方云存储；输出文件的存储格式仅支持hls或mp4</p>
 * @method void setStorageParams(StorageParams $StorageParams) 设置<p>【必填】云存储相关的参数，目前支持腾讯云对象存储以及腾讯云云点播VOD，不支持第三方云存储；输出文件的存储格式仅支持hls或mp4</p>
 * @method integer getSdkAppId() 获取<p>【必填】TRTC的SdkAppId</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>【必填】TRTC的SdkAppId</p>
 * @method integer getMaxDurationLimit() 获取<p>录制最大时长限制， 单位 s, 合法取值范围[1800, 86400], 默认 86400s(24 小时)</p>
 * @method void setMaxDurationLimit(integer $MaxDurationLimit) 设置<p>录制最大时长限制， 单位 s, 合法取值范围[1800, 86400], 默认 86400s(24 小时)</p>
 * @method WebRecordVideoParams getWebRecordVideoParams() 获取<p>页面录制视频参数</p>
 * @method void setWebRecordVideoParams(WebRecordVideoParams $WebRecordVideoParams) 设置<p>页面录制视频参数</p>
 * @method string getRecordId() 获取<p>当对重复任务敏感时，请关注此值： 为了避免任务在短时间内重复发起，导致任务重复<br>传入录制RecordId来标识此次任务， 小于32字节，若携带RecordId发起两次以上的开始录制请求，任务只会启动一个，第二个报错FailedOperation.TaskExist。注意StartWebRecord调用失败时而非FailedOperation.TaskExist错误，请更换RecordId重新发起。</p>
 * @method void setRecordId(string $RecordId) 设置<p>当对重复任务敏感时，请关注此值： 为了避免任务在短时间内重复发起，导致任务重复<br>传入录制RecordId来标识此次任务， 小于32字节，若携带RecordId发起两次以上的开始录制请求，任务只会启动一个，第二个报错FailedOperation.TaskExist。注意StartWebRecord调用失败时而非FailedOperation.TaskExist错误，请更换RecordId重新发起。</p>
 * @method array getPublishCdnParams() 获取<p>若您想要推流到CDN，可以使用PublishCdnParams.N参数设置，支持最多同时推流到10个CDN地址。若转推地址是腾讯云CDN时，请将IsTencentCdn明确设置为1</p>
 * @method void setPublishCdnParams(array $PublishCdnParams) 设置<p>若您想要推流到CDN，可以使用PublishCdnParams.N参数设置，支持最多同时推流到10个CDN地址。若转推地址是腾讯云CDN时，请将IsTencentCdn明确设置为1</p>
 * @method integer getReadyTimeout() 获取<p>录制页面资源加载的超时时间，单位：秒。默认值为 0 秒，该值需大于等于 0秒，且小于等于 60秒。录制页面未启用页面加载超时检测时，请勿设置此参数。</p>
 * @method void setReadyTimeout(integer $ReadyTimeout) 设置<p>录制页面资源加载的超时时间，单位：秒。默认值为 0 秒，该值需大于等于 0秒，且小于等于 60秒。录制页面未启用页面加载超时检测时，请勿设置此参数。</p>
 * @method EmulateMobileParams getEmulateMobileParams() 获取<p>渲染移动模式参数；不准备渲染移动模式页面时，请勿设置此参数。</p>
 * @method void setEmulateMobileParams(EmulateMobileParams $EmulateMobileParams) 设置<p>渲染移动模式参数；不准备渲染移动模式页面时，请勿设置此参数。</p>
 */
class StartWebRecordRequest extends AbstractModel
{
    /**
     * @var string <p>【必填】需要录制的网页URL</p>
     */
    public $RecordUrl;

    /**
     * @var StorageParams <p>【必填】云存储相关的参数，目前支持腾讯云对象存储以及腾讯云云点播VOD，不支持第三方云存储；输出文件的存储格式仅支持hls或mp4</p>
     */
    public $StorageParams;

    /**
     * @var integer <p>【必填】TRTC的SdkAppId</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>录制最大时长限制， 单位 s, 合法取值范围[1800, 86400], 默认 86400s(24 小时)</p>
     */
    public $MaxDurationLimit;

    /**
     * @var WebRecordVideoParams <p>页面录制视频参数</p>
     */
    public $WebRecordVideoParams;

    /**
     * @var string <p>当对重复任务敏感时，请关注此值： 为了避免任务在短时间内重复发起，导致任务重复<br>传入录制RecordId来标识此次任务， 小于32字节，若携带RecordId发起两次以上的开始录制请求，任务只会启动一个，第二个报错FailedOperation.TaskExist。注意StartWebRecord调用失败时而非FailedOperation.TaskExist错误，请更换RecordId重新发起。</p>
     */
    public $RecordId;

    /**
     * @var array <p>若您想要推流到CDN，可以使用PublishCdnParams.N参数设置，支持最多同时推流到10个CDN地址。若转推地址是腾讯云CDN时，请将IsTencentCdn明确设置为1</p>
     */
    public $PublishCdnParams;

    /**
     * @var integer <p>录制页面资源加载的超时时间，单位：秒。默认值为 0 秒，该值需大于等于 0秒，且小于等于 60秒。录制页面未启用页面加载超时检测时，请勿设置此参数。</p>
     */
    public $ReadyTimeout;

    /**
     * @var EmulateMobileParams <p>渲染移动模式参数；不准备渲染移动模式页面时，请勿设置此参数。</p>
     */
    public $EmulateMobileParams;

    /**
     * @param string $RecordUrl <p>【必填】需要录制的网页URL</p>
     * @param StorageParams $StorageParams <p>【必填】云存储相关的参数，目前支持腾讯云对象存储以及腾讯云云点播VOD，不支持第三方云存储；输出文件的存储格式仅支持hls或mp4</p>
     * @param integer $SdkAppId <p>【必填】TRTC的SdkAppId</p>
     * @param integer $MaxDurationLimit <p>录制最大时长限制， 单位 s, 合法取值范围[1800, 86400], 默认 86400s(24 小时)</p>
     * @param WebRecordVideoParams $WebRecordVideoParams <p>页面录制视频参数</p>
     * @param string $RecordId <p>当对重复任务敏感时，请关注此值： 为了避免任务在短时间内重复发起，导致任务重复<br>传入录制RecordId来标识此次任务， 小于32字节，若携带RecordId发起两次以上的开始录制请求，任务只会启动一个，第二个报错FailedOperation.TaskExist。注意StartWebRecord调用失败时而非FailedOperation.TaskExist错误，请更换RecordId重新发起。</p>
     * @param array $PublishCdnParams <p>若您想要推流到CDN，可以使用PublishCdnParams.N参数设置，支持最多同时推流到10个CDN地址。若转推地址是腾讯云CDN时，请将IsTencentCdn明确设置为1</p>
     * @param integer $ReadyTimeout <p>录制页面资源加载的超时时间，单位：秒。默认值为 0 秒，该值需大于等于 0秒，且小于等于 60秒。录制页面未启用页面加载超时检测时，请勿设置此参数。</p>
     * @param EmulateMobileParams $EmulateMobileParams <p>渲染移动模式参数；不准备渲染移动模式页面时，请勿设置此参数。</p>
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
        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }

        if (array_key_exists("StorageParams",$param) and $param["StorageParams"] !== null) {
            $this->StorageParams = new StorageParams();
            $this->StorageParams->deserialize($param["StorageParams"]);
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("MaxDurationLimit",$param) and $param["MaxDurationLimit"] !== null) {
            $this->MaxDurationLimit = $param["MaxDurationLimit"];
        }

        if (array_key_exists("WebRecordVideoParams",$param) and $param["WebRecordVideoParams"] !== null) {
            $this->WebRecordVideoParams = new WebRecordVideoParams();
            $this->WebRecordVideoParams->deserialize($param["WebRecordVideoParams"]);
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("PublishCdnParams",$param) and $param["PublishCdnParams"] !== null) {
            $this->PublishCdnParams = [];
            foreach ($param["PublishCdnParams"] as $key => $value){
                $obj = new McuPublishCdnParam();
                $obj->deserialize($value);
                array_push($this->PublishCdnParams, $obj);
            }
        }

        if (array_key_exists("ReadyTimeout",$param) and $param["ReadyTimeout"] !== null) {
            $this->ReadyTimeout = $param["ReadyTimeout"];
        }

        if (array_key_exists("EmulateMobileParams",$param) and $param["EmulateMobileParams"] !== null) {
            $this->EmulateMobileParams = new EmulateMobileParams();
            $this->EmulateMobileParams->deserialize($param["EmulateMobileParams"]);
        }
    }
}
