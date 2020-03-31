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
 * @method string getMode() 获取接收事件通知的方式。默认 "PUSH" 为[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)，"PULL" 为[基于消息队列的可靠通知](https://cloud.tencent.com/document/product/266/7829#.E5.9F.BA.E4.BA.8E.E6.B6.88.E6.81.AF.E9.98.9F.E5.88.97.E7.9A.84.E5.8F.AF.E9.9D.A0.E9.80.9A.E7.9F.A5)。
 * @method void setMode(string $Mode) 设置接收事件通知的方式。默认 "PUSH" 为[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)，"PULL" 为[基于消息队列的可靠通知](https://cloud.tencent.com/document/product/266/7829#.E5.9F.BA.E4.BA.8E.E6.B6.88.E6.81.AF.E9.98.9F.E5.88.97.E7.9A.84.E5.8F.AF.E9.9D.A0.E9.80.9A.E7.9F.A5)。
 * @method string getNotificationUrlV3() 获取采用[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)接收方式时，用于接收 V3 版本事件通知的地址。
 * @method void setNotificationUrlV3(string $NotificationUrlV3) 设置采用[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)接收方式时，用于接收 V3 版本事件通知的地址。
 * @method string getNotificationUrlV2() 获取采用[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)接收方式时，用于接收 V2 版本事件通知的地址。
 * @method void setNotificationUrlV2(string $NotificationUrlV2) 设置采用[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)接收方式时，用于接收 V2 版本事件通知的地址。
 * @method string getUploadMediaCompleteEventSwitch() 获取是否接收[视频上传完成](https://cloud.tencent.com/document/product/266/7830)事件通知， 默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method void setUploadMediaCompleteEventSwitch(string $UploadMediaCompleteEventSwitch) 设置是否接收[视频上传完成](https://cloud.tencent.com/document/product/266/7830)事件通知， 默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method string getTranscodeCompleteEventSwitch() 获取是否接收[视频转码完成](https://cloud.tencent.com/document/product/266/7832)事件通知， 默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method void setTranscodeCompleteEventSwitch(string $TranscodeCompleteEventSwitch) 设置是否接收[视频转码完成](https://cloud.tencent.com/document/product/266/7832)事件通知， 默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method string getCreateSnapshotByTimeOffsetCompleteEventSwitch() 获取是否接收[指定时间点截图完成](https://cloud.tencent.com/document/product/266/8105)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method void setCreateSnapshotByTimeOffsetCompleteEventSwitch(string $CreateSnapshotByTimeOffsetCompleteEventSwitch) 设置是否接收[指定时间点截图完成](https://cloud.tencent.com/document/product/266/8105)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method string getCreateImageSpriteCompleteEventSwitch() 获取是否接收[视频截取雪碧图完成](https://cloud.tencent.com/document/product/266/8104)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method void setCreateImageSpriteCompleteEventSwitch(string $CreateImageSpriteCompleteEventSwitch) 设置是否接收[视频截取雪碧图完成](https://cloud.tencent.com/document/product/266/8104)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method string getConcatMediaCompleteEventSwitch() 获取是否接收[视频拼接完成](https://cloud.tencent.com/document/product/266/7834)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method void setConcatMediaCompleteEventSwitch(string $ConcatMediaCompleteEventSwitch) 设置是否接收[视频拼接完成](https://cloud.tencent.com/document/product/266/7834)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method string getDeleteMediaCompleteEventSwitch() 获取是否接收[视频删除完成](https://cloud.tencent.com/document/product/266/13434)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method void setDeleteMediaCompleteEventSwitch(string $DeleteMediaCompleteEventSwitch) 设置是否接收[视频删除完成](https://cloud.tencent.com/document/product/266/13434)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */

/**
 *ModifyEventNotificationConfigForConsole请求参数结构体
 */
class ModifyEventNotificationConfigForConsoleRequest extends AbstractModel
{
    /**
     * @var string 接收事件通知的方式。默认 "PUSH" 为[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)，"PULL" 为[基于消息队列的可靠通知](https://cloud.tencent.com/document/product/266/7829#.E5.9F.BA.E4.BA.8E.E6.B6.88.E6.81.AF.E9.98.9F.E5.88.97.E7.9A.84.E5.8F.AF.E9.9D.A0.E9.80.9A.E7.9F.A5)。
     */
    public $Mode;

    /**
     * @var string 采用[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)接收方式时，用于接收 V3 版本事件通知的地址。
     */
    public $NotificationUrlV3;

    /**
     * @var string 采用[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)接收方式时，用于接收 V2 版本事件通知的地址。
     */
    public $NotificationUrlV2;

    /**
     * @var string 是否接收[视频上传完成](https://cloud.tencent.com/document/product/266/7830)事件通知， 默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     */
    public $UploadMediaCompleteEventSwitch;

    /**
     * @var string 是否接收[视频转码完成](https://cloud.tencent.com/document/product/266/7832)事件通知， 默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     */
    public $TranscodeCompleteEventSwitch;

    /**
     * @var string 是否接收[指定时间点截图完成](https://cloud.tencent.com/document/product/266/8105)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     */
    public $CreateSnapshotByTimeOffsetCompleteEventSwitch;

    /**
     * @var string 是否接收[视频截取雪碧图完成](https://cloud.tencent.com/document/product/266/8104)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     */
    public $CreateImageSpriteCompleteEventSwitch;

    /**
     * @var string 是否接收[视频拼接完成](https://cloud.tencent.com/document/product/266/7834)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     */
    public $ConcatMediaCompleteEventSwitch;

    /**
     * @var string 是否接收[视频删除完成](https://cloud.tencent.com/document/product/266/13434)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     */
    public $DeleteMediaCompleteEventSwitch;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;
    /**
     * @param string $Mode 接收事件通知的方式。默认 "PUSH" 为[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)，"PULL" 为[基于消息队列的可靠通知](https://cloud.tencent.com/document/product/266/7829#.E5.9F.BA.E4.BA.8E.E6.B6.88.E6.81.AF.E9.98.9F.E5.88.97.E7.9A.84.E5.8F.AF.E9.9D.A0.E9.80.9A.E7.9F.A5)。
     * @param string $NotificationUrlV3 采用[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)接收方式时，用于接收 V3 版本事件通知的地址。
     * @param string $NotificationUrlV2 采用[ HTTP 回调通知](https://cloud.tencent.com/document/product/266/7829#http.E5.9B.9E.E8.B0.83)接收方式时，用于接收 V2 版本事件通知的地址。
     * @param string $UploadMediaCompleteEventSwitch 是否接收[视频上传完成](https://cloud.tencent.com/document/product/266/7830)事件通知， 默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     * @param string $TranscodeCompleteEventSwitch 是否接收[视频转码完成](https://cloud.tencent.com/document/product/266/7832)事件通知， 默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     * @param string $CreateSnapshotByTimeOffsetCompleteEventSwitch 是否接收[指定时间点截图完成](https://cloud.tencent.com/document/product/266/8105)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     * @param string $CreateImageSpriteCompleteEventSwitch 是否接收[视频截取雪碧图完成](https://cloud.tencent.com/document/product/266/8104)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     * @param string $ConcatMediaCompleteEventSwitch 是否接收[视频拼接完成](https://cloud.tencent.com/document/product/266/7834)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     * @param string $DeleteMediaCompleteEventSwitch 是否接收[视频删除完成](https://cloud.tencent.com/document/product/266/13434)事件通知，  默认 "OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("NotificationUrlV3",$param) and $param["NotificationUrlV3"] !== null) {
            $this->NotificationUrlV3 = $param["NotificationUrlV3"];
        }

        if (array_key_exists("NotificationUrlV2",$param) and $param["NotificationUrlV2"] !== null) {
            $this->NotificationUrlV2 = $param["NotificationUrlV2"];
        }

        if (array_key_exists("UploadMediaCompleteEventSwitch",$param) and $param["UploadMediaCompleteEventSwitch"] !== null) {
            $this->UploadMediaCompleteEventSwitch = $param["UploadMediaCompleteEventSwitch"];
        }

        if (array_key_exists("TranscodeCompleteEventSwitch",$param) and $param["TranscodeCompleteEventSwitch"] !== null) {
            $this->TranscodeCompleteEventSwitch = $param["TranscodeCompleteEventSwitch"];
        }

        if (array_key_exists("CreateSnapshotByTimeOffsetCompleteEventSwitch",$param) and $param["CreateSnapshotByTimeOffsetCompleteEventSwitch"] !== null) {
            $this->CreateSnapshotByTimeOffsetCompleteEventSwitch = $param["CreateSnapshotByTimeOffsetCompleteEventSwitch"];
        }

        if (array_key_exists("CreateImageSpriteCompleteEventSwitch",$param) and $param["CreateImageSpriteCompleteEventSwitch"] !== null) {
            $this->CreateImageSpriteCompleteEventSwitch = $param["CreateImageSpriteCompleteEventSwitch"];
        }

        if (array_key_exists("ConcatMediaCompleteEventSwitch",$param) and $param["ConcatMediaCompleteEventSwitch"] !== null) {
            $this->ConcatMediaCompleteEventSwitch = $param["ConcatMediaCompleteEventSwitch"];
        }

        if (array_key_exists("DeleteMediaCompleteEventSwitch",$param) and $param["DeleteMediaCompleteEventSwitch"] !== null) {
            $this->DeleteMediaCompleteEventSwitch = $param["DeleteMediaCompleteEventSwitch"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
