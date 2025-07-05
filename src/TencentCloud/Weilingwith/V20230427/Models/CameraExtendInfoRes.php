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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频扩展信息结果
 *
 * @method string getSaveType() 获取存储方式 (nvr或cosmtav)
 * @method void setSaveType(string $SaveType) 设置存储方式 (nvr或cosmtav)
 * @method integer getSaveDay() 获取云存储天数（save_type是cosmtav时这个参数才有效）

 * @method void setSaveDay(integer $SaveDay) 设置云存储天数（save_type是cosmtav时这个参数才有效）

 * @method integer getLiveResolution() 获取实时分辨率
 * @method void setLiveResolution(integer $LiveResolution) 设置实时分辨率
 * @method integer getHistoryResolution() 获取历史分辨率
 * @method void setHistoryResolution(integer $HistoryResolution) 设置历史分辨率
 */
class CameraExtendInfoRes extends AbstractModel
{
    /**
     * @var string 存储方式 (nvr或cosmtav)
     */
    public $SaveType;

    /**
     * @var integer 云存储天数（save_type是cosmtav时这个参数才有效）

     */
    public $SaveDay;

    /**
     * @var integer 实时分辨率
     */
    public $LiveResolution;

    /**
     * @var integer 历史分辨率
     */
    public $HistoryResolution;

    /**
     * @param string $SaveType 存储方式 (nvr或cosmtav)
     * @param integer $SaveDay 云存储天数（save_type是cosmtav时这个参数才有效）

     * @param integer $LiveResolution 实时分辨率
     * @param integer $HistoryResolution 历史分辨率
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
        if (array_key_exists("SaveType",$param) and $param["SaveType"] !== null) {
            $this->SaveType = $param["SaveType"];
        }

        if (array_key_exists("SaveDay",$param) and $param["SaveDay"] !== null) {
            $this->SaveDay = $param["SaveDay"];
        }

        if (array_key_exists("LiveResolution",$param) and $param["LiveResolution"] !== null) {
            $this->LiveResolution = $param["LiveResolution"];
        }

        if (array_key_exists("HistoryResolution",$param) and $param["HistoryResolution"] !== null) {
            $this->HistoryResolution = $param["HistoryResolution"];
        }
    }
}
