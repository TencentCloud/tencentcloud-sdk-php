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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventConfig返回参数结构体
 *
 * @method string getMode() 获取接收事件通知的方式。"PUSH" 为 [普通回调](https://cloud.tencent.com/document/product/266/33779#.E6.99.AE.E9.80.9A.E5.9B.9E.E8.B0.83)，"PULL" 为 [可靠回调](https://cloud.tencent.com/document/product/266/33779#.E5.8F.AF.E9.9D.A0.E5.9B.9E.E8.B0.83)。
 * @method void setMode(string $Mode) 设置接收事件通知的方式。"PUSH" 为 [普通回调](https://cloud.tencent.com/document/product/266/33779#.E6.99.AE.E9.80.9A.E5.9B.9E.E8.B0.83)，"PULL" 为 [可靠回调](https://cloud.tencent.com/document/product/266/33779#.E5.8F.AF.E9.9D.A0.E5.9B.9E.E8.B0.83)。
 * @method string getNotificationUrl() 获取采用 [普通回调](https://cloud.tencent.com/document/product/266/33779#.E6.99.AE.E9.80.9A.E5.9B.9E.E8.B0.83) 模式时，用于接收 V3 版本事件通知的地址。
 * @method void setNotificationUrl(string $NotificationUrl) 设置采用 [普通回调](https://cloud.tencent.com/document/product/266/33779#.E6.99.AE.E9.80.9A.E5.9B.9E.E8.B0.83) 模式时，用于接收 V3 版本事件通知的地址。
 * @method string getUploadMediaCompleteEventSwitch() 获取是否接收 [视频上传完成](https://cloud.tencent.com/document/product/266/7830) 事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method void setUploadMediaCompleteEventSwitch(string $UploadMediaCompleteEventSwitch) 设置是否接收 [视频上传完成](https://cloud.tencent.com/document/product/266/7830) 事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method string getDeleteMediaCompleteEventSwitch() 获取是否接收 [视频删除完成](https://cloud.tencent.com/document/product/266/13434) 事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method void setDeleteMediaCompleteEventSwitch(string $DeleteMediaCompleteEventSwitch) 设置是否接收 [视频删除完成](https://cloud.tencent.com/document/product/266/13434) 事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method string getPersistenceCompleteEventSwitch() 获取是否接收剪辑固化完成事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method void setPersistenceCompleteEventSwitch(string $PersistenceCompleteEventSwitch) 设置是否接收剪辑固化完成事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEventConfigResponse extends AbstractModel
{
    /**
     * @var string 接收事件通知的方式。"PUSH" 为 [普通回调](https://cloud.tencent.com/document/product/266/33779#.E6.99.AE.E9.80.9A.E5.9B.9E.E8.B0.83)，"PULL" 为 [可靠回调](https://cloud.tencent.com/document/product/266/33779#.E5.8F.AF.E9.9D.A0.E5.9B.9E.E8.B0.83)。
     */
    public $Mode;

    /**
     * @var string 采用 [普通回调](https://cloud.tencent.com/document/product/266/33779#.E6.99.AE.E9.80.9A.E5.9B.9E.E8.B0.83) 模式时，用于接收 V3 版本事件通知的地址。
     */
    public $NotificationUrl;

    /**
     * @var string 是否接收 [视频上传完成](https://cloud.tencent.com/document/product/266/7830) 事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     */
    public $UploadMediaCompleteEventSwitch;

    /**
     * @var string 是否接收 [视频删除完成](https://cloud.tencent.com/document/product/266/13434) 事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     */
    public $DeleteMediaCompleteEventSwitch;

    /**
     * @var string 是否接收剪辑固化完成事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     */
    public $PersistenceCompleteEventSwitch;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Mode 接收事件通知的方式。"PUSH" 为 [普通回调](https://cloud.tencent.com/document/product/266/33779#.E6.99.AE.E9.80.9A.E5.9B.9E.E8.B0.83)，"PULL" 为 [可靠回调](https://cloud.tencent.com/document/product/266/33779#.E5.8F.AF.E9.9D.A0.E5.9B.9E.E8.B0.83)。
     * @param string $NotificationUrl 采用 [普通回调](https://cloud.tencent.com/document/product/266/33779#.E6.99.AE.E9.80.9A.E5.9B.9E.E8.B0.83) 模式时，用于接收 V3 版本事件通知的地址。
     * @param string $UploadMediaCompleteEventSwitch 是否接收 [视频上传完成](https://cloud.tencent.com/document/product/266/7830) 事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     * @param string $DeleteMediaCompleteEventSwitch 是否接收 [视频删除完成](https://cloud.tencent.com/document/product/266/13434) 事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
     * @param string $PersistenceCompleteEventSwitch 是否接收剪辑固化完成事件通知，"OFF" 为忽略该事件通知，"ON" 为接收事件通知。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("NotificationUrl",$param) and $param["NotificationUrl"] !== null) {
            $this->NotificationUrl = $param["NotificationUrl"];
        }

        if (array_key_exists("UploadMediaCompleteEventSwitch",$param) and $param["UploadMediaCompleteEventSwitch"] !== null) {
            $this->UploadMediaCompleteEventSwitch = $param["UploadMediaCompleteEventSwitch"];
        }

        if (array_key_exists("DeleteMediaCompleteEventSwitch",$param) and $param["DeleteMediaCompleteEventSwitch"] !== null) {
            $this->DeleteMediaCompleteEventSwitch = $param["DeleteMediaCompleteEventSwitch"];
        }

        if (array_key_exists("PersistenceCompleteEventSwitch",$param) and $param["PersistenceCompleteEventSwitch"] !== null) {
            $this->PersistenceCompleteEventSwitch = $param["PersistenceCompleteEventSwitch"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
