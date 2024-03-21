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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartWebRecord请求参数结构体
 *
 * @method string getRecordUrl() 获取需要录制的网页URL

 * @method void setRecordUrl(string $RecordUrl) 设置需要录制的网页URL

 * @method integer getMaxDurationLimit() 获取录制最大时长限制， 单位 s, 合法取值范围[0, 36000], 默认 36000s(10 小时)

 * @method void setMaxDurationLimit(integer $MaxDurationLimit) 设置录制最大时长限制， 单位 s, 合法取值范围[0, 36000], 默认 36000s(10 小时)

 * @method StorageParams getStorageParams() 获取云存储相关的参数，目前支持腾讯云对象存储，不支持第三方云存储以及VOD
 * @method void setStorageParams(StorageParams $StorageParams) 设置云存储相关的参数，目前支持腾讯云对象存储，不支持第三方云存储以及VOD
 * @method WebRecordVideoParams getWebRecordVideoParams() 获取页面录制视频参数
 * @method void setWebRecordVideoParams(WebRecordVideoParams $WebRecordVideoParams) 设置页面录制视频参数
 * @method integer getSdkAppId() 获取TRTC的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SdkAppId
 * @method string getRecordId() 获取当对重复任务敏感时，请关注此值： 为了避免任务在短时间内重复发起，导致任务重复
传入录制RecordId来标识此次任务， 小于32字节，若携带RecordId发起两次以上的开始录制请求，任务只会启动一个，第二个报错FailedOperation.TaskExist。注意StartWebRecord调用失败时而非FailedOperation.TaskExist错误，请更换RecordId重新发起。
 * @method void setRecordId(string $RecordId) 设置当对重复任务敏感时，请关注此值： 为了避免任务在短时间内重复发起，导致任务重复
传入录制RecordId来标识此次任务， 小于32字节，若携带RecordId发起两次以上的开始录制请求，任务只会启动一个，第二个报错FailedOperation.TaskExist。注意StartWebRecord调用失败时而非FailedOperation.TaskExist错误，请更换RecordId重新发起。
 */
class StartWebRecordRequest extends AbstractModel
{
    /**
     * @var string 需要录制的网页URL

     */
    public $RecordUrl;

    /**
     * @var integer 录制最大时长限制， 单位 s, 合法取值范围[0, 36000], 默认 36000s(10 小时)

     */
    public $MaxDurationLimit;

    /**
     * @var StorageParams 云存储相关的参数，目前支持腾讯云对象存储，不支持第三方云存储以及VOD
     */
    public $StorageParams;

    /**
     * @var WebRecordVideoParams 页面录制视频参数
     */
    public $WebRecordVideoParams;

    /**
     * @var integer TRTC的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 当对重复任务敏感时，请关注此值： 为了避免任务在短时间内重复发起，导致任务重复
传入录制RecordId来标识此次任务， 小于32字节，若携带RecordId发起两次以上的开始录制请求，任务只会启动一个，第二个报错FailedOperation.TaskExist。注意StartWebRecord调用失败时而非FailedOperation.TaskExist错误，请更换RecordId重新发起。
     */
    public $RecordId;

    /**
     * @param string $RecordUrl 需要录制的网页URL

     * @param integer $MaxDurationLimit 录制最大时长限制， 单位 s, 合法取值范围[0, 36000], 默认 36000s(10 小时)

     * @param StorageParams $StorageParams 云存储相关的参数，目前支持腾讯云对象存储，不支持第三方云存储以及VOD
     * @param WebRecordVideoParams $WebRecordVideoParams 页面录制视频参数
     * @param integer $SdkAppId TRTC的SdkAppId
     * @param string $RecordId 当对重复任务敏感时，请关注此值： 为了避免任务在短时间内重复发起，导致任务重复
传入录制RecordId来标识此次任务， 小于32字节，若携带RecordId发起两次以上的开始录制请求，任务只会启动一个，第二个报错FailedOperation.TaskExist。注意StartWebRecord调用失败时而非FailedOperation.TaskExist错误，请更换RecordId重新发起。
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

        if (array_key_exists("MaxDurationLimit",$param) and $param["MaxDurationLimit"] !== null) {
            $this->MaxDurationLimit = $param["MaxDurationLimit"];
        }

        if (array_key_exists("StorageParams",$param) and $param["StorageParams"] !== null) {
            $this->StorageParams = new StorageParams();
            $this->StorageParams->deserialize($param["StorageParams"]);
        }

        if (array_key_exists("WebRecordVideoParams",$param) and $param["WebRecordVideoParams"] !== null) {
            $this->WebRecordVideoParams = new WebRecordVideoParams();
            $this->WebRecordVideoParams->deserialize($param["WebRecordVideoParams"]);
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }
    }
}
