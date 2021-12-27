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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSnapshotTask请求参数结构体
 *
 * @method SnapshotWhiteboard getWhiteboard() 获取白板相关参数
 * @method void setWhiteboard(SnapshotWhiteboard $Whiteboard) 设置白板相关参数
 * @method integer getSdkAppId() 获取白板房间 `SdkAppId`
 * @method void setSdkAppId(integer $SdkAppId) 设置白板房间 `SdkAppId`
 * @method integer getRoomId() 获取白板房间号
 * @method void setRoomId(integer $RoomId) 设置白板房间号
 * @method string getCallbackURL() 获取白板板书生成结果通知回调地址
 * @method void setCallbackURL(string $CallbackURL) 设置白板板书生成结果通知回调地址
 * @method SnapshotCOS getCOS() 获取白板板书文件 `COS` 存储参数， 不填默认存储在公共存储桶，公共存储桶的数据仅保存3天
 * @method void setCOS(SnapshotCOS $COS) 设置白板板书文件 `COS` 存储参数， 不填默认存储在公共存储桶，公共存储桶的数据仅保存3天
 * @method string getSnapshotMode() 获取白板板书生成模式，默认为 `AllMarks`。取值说明如下：

`AllMarks` - 全量模式，即对于客户端每一次调用 `addSnapshotMark` 接口打上的白板板书生成标志全部都会生成对应的白板板书图片。

`LatestMarksOnly` - 单页去重模式，即对于客户端在同一页白板上多次调用 `addSnapshotMark` 打上的白板板书生成标志仅保留最新一次标志来生成对应白板页的白板板书图片。

（**注意：`LatestMarksOnly` 模式只有客户端使用v2.6.8及以上版本的白板SDK调用 `addSnapshotMark` 时才生效，否则即使在调用本API是指定了 `LatestMarksOnly` 模式，服务后台会使用默认的 `AllMarks` 模式生成白板板书**）
 * @method void setSnapshotMode(string $SnapshotMode) 设置白板板书生成模式，默认为 `AllMarks`。取值说明如下：

`AllMarks` - 全量模式，即对于客户端每一次调用 `addSnapshotMark` 接口打上的白板板书生成标志全部都会生成对应的白板板书图片。

`LatestMarksOnly` - 单页去重模式，即对于客户端在同一页白板上多次调用 `addSnapshotMark` 打上的白板板书生成标志仅保留最新一次标志来生成对应白板页的白板板书图片。

（**注意：`LatestMarksOnly` 模式只有客户端使用v2.6.8及以上版本的白板SDK调用 `addSnapshotMark` 时才生效，否则即使在调用本API是指定了 `LatestMarksOnly` 模式，服务后台会使用默认的 `AllMarks` 模式生成白板板书**）
 */
class CreateSnapshotTaskRequest extends AbstractModel
{
    /**
     * @var SnapshotWhiteboard 白板相关参数
     */
    public $Whiteboard;

    /**
     * @var integer 白板房间 `SdkAppId`
     */
    public $SdkAppId;

    /**
     * @var integer 白板房间号
     */
    public $RoomId;

    /**
     * @var string 白板板书生成结果通知回调地址
     */
    public $CallbackURL;

    /**
     * @var SnapshotCOS 白板板书文件 `COS` 存储参数， 不填默认存储在公共存储桶，公共存储桶的数据仅保存3天
     */
    public $COS;

    /**
     * @var string 白板板书生成模式，默认为 `AllMarks`。取值说明如下：

`AllMarks` - 全量模式，即对于客户端每一次调用 `addSnapshotMark` 接口打上的白板板书生成标志全部都会生成对应的白板板书图片。

`LatestMarksOnly` - 单页去重模式，即对于客户端在同一页白板上多次调用 `addSnapshotMark` 打上的白板板书生成标志仅保留最新一次标志来生成对应白板页的白板板书图片。

（**注意：`LatestMarksOnly` 模式只有客户端使用v2.6.8及以上版本的白板SDK调用 `addSnapshotMark` 时才生效，否则即使在调用本API是指定了 `LatestMarksOnly` 模式，服务后台会使用默认的 `AllMarks` 模式生成白板板书**）
     */
    public $SnapshotMode;

    /**
     * @param SnapshotWhiteboard $Whiteboard 白板相关参数
     * @param integer $SdkAppId 白板房间 `SdkAppId`
     * @param integer $RoomId 白板房间号
     * @param string $CallbackURL 白板板书生成结果通知回调地址
     * @param SnapshotCOS $COS 白板板书文件 `COS` 存储参数， 不填默认存储在公共存储桶，公共存储桶的数据仅保存3天
     * @param string $SnapshotMode 白板板书生成模式，默认为 `AllMarks`。取值说明如下：

`AllMarks` - 全量模式，即对于客户端每一次调用 `addSnapshotMark` 接口打上的白板板书生成标志全部都会生成对应的白板板书图片。

`LatestMarksOnly` - 单页去重模式，即对于客户端在同一页白板上多次调用 `addSnapshotMark` 打上的白板板书生成标志仅保留最新一次标志来生成对应白板页的白板板书图片。

（**注意：`LatestMarksOnly` 模式只有客户端使用v2.6.8及以上版本的白板SDK调用 `addSnapshotMark` 时才生效，否则即使在调用本API是指定了 `LatestMarksOnly` 模式，服务后台会使用默认的 `AllMarks` 模式生成白板板书**）
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
        if (array_key_exists("Whiteboard",$param) and $param["Whiteboard"] !== null) {
            $this->Whiteboard = new SnapshotWhiteboard();
            $this->Whiteboard->deserialize($param["Whiteboard"]);
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("CallbackURL",$param) and $param["CallbackURL"] !== null) {
            $this->CallbackURL = $param["CallbackURL"];
        }

        if (array_key_exists("COS",$param) and $param["COS"] !== null) {
            $this->COS = new SnapshotCOS();
            $this->COS->deserialize($param["COS"]);
        }

        if (array_key_exists("SnapshotMode",$param) and $param["SnapshotMode"] !== null) {
            $this->SnapshotMode = $param["SnapshotMode"];
        }
    }
}
