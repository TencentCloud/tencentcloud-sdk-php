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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加密云存视频列表数据
 *
 * @method string getPsign() 获取<p>用于播放加密视频</p>
 * @method void setPsign(string $Psign) 设置<p>用于播放加密视频</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method string getUrl() 获取<p>播放url</p>
 * @method void setUrl(string $Url) 设置<p>播放url</p>
 * @method string getStreamType() 获取<p>视频类型</p>
 * @method void setStreamType(string $StreamType) 设置<p>视频类型</p>
 * @method string getFileId() 获取<p>点播文件id</p>
 * @method void setFileId(string $FileId) 设置<p>点播文件id</p>
 */
class VideoList extends AbstractModel
{
    /**
     * @var string <p>用于播放加密视频</p>
     */
    public $Psign;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>播放url</p>
     */
    public $Url;

    /**
     * @var string <p>视频类型</p>
     */
    public $StreamType;

    /**
     * @var string <p>点播文件id</p>
     */
    public $FileId;

    /**
     * @param string $Psign <p>用于播放加密视频</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param string $Url <p>播放url</p>
     * @param string $StreamType <p>视频类型</p>
     * @param string $FileId <p>点播文件id</p>
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
        if (array_key_exists("Psign",$param) and $param["Psign"] !== null) {
            $this->Psign = $param["Psign"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
