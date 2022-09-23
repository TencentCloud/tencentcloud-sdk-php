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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoom请求参数结构体
 *
 * @method string getName() 获取房间名称。
 * @method void setName(string $Name) 设置房间名称。
 * @method integer getStartTime() 获取预定的房间开始时间，unix时间戳。
 * @method void setStartTime(integer $StartTime) 设置预定的房间开始时间，unix时间戳。
 * @method integer getEndTime() 获取预定的房间结束时间，unix时间戳。
 * @method void setEndTime(integer $EndTime) 设置预定的房间结束时间，unix时间戳。
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。
 * @method integer getResolution() 获取分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
 * @method void setResolution(integer $Resolution) 设置分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
 * @method integer getMaxMicNumber() 获取最大连麦人数（不包括老师）。取值范围[0, 17)
 * @method void setMaxMicNumber(integer $MaxMicNumber) 设置最大连麦人数（不包括老师）。取值范围[0, 17)
 * @method string getSubType() 获取房间子类型，可以有以下取值：
videodoc 文档+视频
video 纯视频
coteaching 双师
 * @method void setSubType(string $SubType) 设置房间子类型，可以有以下取值：
videodoc 文档+视频
video 纯视频
coteaching 双师
 * @method string getTeacherId() 获取老师ID。
 * @method void setTeacherId(string $TeacherId) 设置老师ID。
 * @method integer getAutoMic() 获取进入房间时是否自动连麦。可以有以下取值：
0 不自动连麦（默认值）
1 自动连麦
 * @method void setAutoMic(integer $AutoMic) 设置进入房间时是否自动连麦。可以有以下取值：
0 不自动连麦（默认值）
1 自动连麦
 * @method integer getAudioQuality() 获取高音质模式。可以有以下取值：
0 不开启高音质（默认值）
1 开启高音质
 * @method void setAudioQuality(integer $AudioQuality) 设置高音质模式。可以有以下取值：
0 不开启高音质（默认值）
1 开启高音质
 * @method integer getDisableRecord() 获取禁止录制。可以有以下取值：
0 不禁止录制（默认值）
1 禁止录制
 * @method void setDisableRecord(integer $DisableRecord) 设置禁止录制。可以有以下取值：
0 不禁止录制（默认值）
1 禁止录制
 * @method array getAssistants() 获取助教Id列表。
 * @method void setAssistants(array $Assistants) 设置助教Id列表。
 * @method integer getRecordLayout() 获取录制布局。
 * @method void setRecordLayout(integer $RecordLayout) 设置录制布局。
 */
class CreateRoomRequest extends AbstractModel
{
    /**
     * @var string 房间名称。
     */
    public $Name;

    /**
     * @var integer 预定的房间开始时间，unix时间戳。
     */
    public $StartTime;

    /**
     * @var integer 预定的房间结束时间，unix时间戳。
     */
    public $EndTime;

    /**
     * @var integer 低代码互动课堂的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var integer 分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
     */
    public $Resolution;

    /**
     * @var integer 最大连麦人数（不包括老师）。取值范围[0, 17)
     */
    public $MaxMicNumber;

    /**
     * @var string 房间子类型，可以有以下取值：
videodoc 文档+视频
video 纯视频
coteaching 双师
     */
    public $SubType;

    /**
     * @var string 老师ID。
     */
    public $TeacherId;

    /**
     * @var integer 进入房间时是否自动连麦。可以有以下取值：
0 不自动连麦（默认值）
1 自动连麦
     */
    public $AutoMic;

    /**
     * @var integer 高音质模式。可以有以下取值：
0 不开启高音质（默认值）
1 开启高音质
     */
    public $AudioQuality;

    /**
     * @var integer 禁止录制。可以有以下取值：
0 不禁止录制（默认值）
1 禁止录制
     */
    public $DisableRecord;

    /**
     * @var array 助教Id列表。
     */
    public $Assistants;

    /**
     * @var integer 录制布局。
     */
    public $RecordLayout;

    /**
     * @param string $Name 房间名称。
     * @param integer $StartTime 预定的房间开始时间，unix时间戳。
     * @param integer $EndTime 预定的房间结束时间，unix时间戳。
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。
     * @param integer $Resolution 分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
     * @param integer $MaxMicNumber 最大连麦人数（不包括老师）。取值范围[0, 17)
     * @param string $SubType 房间子类型，可以有以下取值：
videodoc 文档+视频
video 纯视频
coteaching 双师
     * @param string $TeacherId 老师ID。
     * @param integer $AutoMic 进入房间时是否自动连麦。可以有以下取值：
0 不自动连麦（默认值）
1 自动连麦
     * @param integer $AudioQuality 高音质模式。可以有以下取值：
0 不开启高音质（默认值）
1 开启高音质
     * @param integer $DisableRecord 禁止录制。可以有以下取值：
0 不禁止录制（默认值）
1 禁止录制
     * @param array $Assistants 助教Id列表。
     * @param integer $RecordLayout 录制布局。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("MaxMicNumber",$param) and $param["MaxMicNumber"] !== null) {
            $this->MaxMicNumber = $param["MaxMicNumber"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("AutoMic",$param) and $param["AutoMic"] !== null) {
            $this->AutoMic = $param["AutoMic"];
        }

        if (array_key_exists("AudioQuality",$param) and $param["AudioQuality"] !== null) {
            $this->AudioQuality = $param["AudioQuality"];
        }

        if (array_key_exists("DisableRecord",$param) and $param["DisableRecord"] !== null) {
            $this->DisableRecord = $param["DisableRecord"];
        }

        if (array_key_exists("Assistants",$param) and $param["Assistants"] !== null) {
            $this->Assistants = $param["Assistants"];
        }

        if (array_key_exists("RecordLayout",$param) and $param["RecordLayout"] !== null) {
            $this->RecordLayout = $param["RecordLayout"];
        }
    }
}
