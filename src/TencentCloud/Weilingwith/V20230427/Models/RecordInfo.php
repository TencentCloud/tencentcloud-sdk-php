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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录像信息
 *
 * @method integer getStartTime() 获取本录像片段开始时间（s）
 * @method void setStartTime(integer $StartTime) 设置本录像片段开始时间（s）
 * @method integer getEndTime() 获取本录像片段结束时间（s）
 * @method void setEndTime(integer $EndTime) 设置本录像片段结束时间（s）
 * @method string getVideoURL() 获取录像片段文件url
 * @method void setVideoURL(string $VideoURL) 设置录像片段文件url
 */
class RecordInfo extends AbstractModel
{
    /**
     * @var integer 本录像片段开始时间（s）
     */
    public $StartTime;

    /**
     * @var integer 本录像片段结束时间（s）
     */
    public $EndTime;

    /**
     * @var string 录像片段文件url
     */
    public $VideoURL;

    /**
     * @param integer $StartTime 本录像片段开始时间（s）
     * @param integer $EndTime 本录像片段结束时间（s）
     * @param string $VideoURL 录像片段文件url
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("VideoURL",$param) and $param["VideoURL"] !== null) {
            $this->VideoURL = $param["VideoURL"];
        }
    }
}
