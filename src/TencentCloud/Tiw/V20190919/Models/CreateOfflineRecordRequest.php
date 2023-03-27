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
 * CreateOfflineRecord请求参数结构体
 *
 * @method integer getSdkAppId() 获取客户的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置客户的SdkAppId
 * @method integer getRoomId() 获取录制任务对应的房间号
 * @method void setRoomId(integer $RoomId) 设置录制任务对应的房间号
 * @method string getGroupId() 获取录制任务对应的群组Id
 * @method void setGroupId(string $GroupId) 设置录制任务对应的群组Id
 * @method MixStream getMixStream() 获取混流参数配置
目前课后录制暂未支持自定义混流布局Custom参数
 * @method void setMixStream(MixStream $MixStream) 设置混流参数配置
目前课后录制暂未支持自定义混流布局Custom参数
 * @method Whiteboard getWhiteboard() 获取白板参数配置
 * @method void setWhiteboard(Whiteboard $Whiteboard) 设置白板参数配置
 */
class CreateOfflineRecordRequest extends AbstractModel
{
    /**
     * @var integer 客户的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var integer 录制任务对应的房间号
     */
    public $RoomId;

    /**
     * @var string 录制任务对应的群组Id
     */
    public $GroupId;

    /**
     * @var MixStream 混流参数配置
目前课后录制暂未支持自定义混流布局Custom参数
     */
    public $MixStream;

    /**
     * @var Whiteboard 白板参数配置
     */
    public $Whiteboard;

    /**
     * @param integer $SdkAppId 客户的SdkAppId
     * @param integer $RoomId 录制任务对应的房间号
     * @param string $GroupId 录制任务对应的群组Id
     * @param MixStream $MixStream 混流参数配置
目前课后录制暂未支持自定义混流布局Custom参数
     * @param Whiteboard $Whiteboard 白板参数配置
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("MixStream",$param) and $param["MixStream"] !== null) {
            $this->MixStream = new MixStream();
            $this->MixStream->deserialize($param["MixStream"]);
        }

        if (array_key_exists("Whiteboard",$param) and $param["Whiteboard"] !== null) {
            $this->Whiteboard = new Whiteboard();
            $this->Whiteboard->deserialize($param["Whiteboard"]);
        }
    }
}
