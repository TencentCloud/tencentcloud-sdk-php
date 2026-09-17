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
 * 播放统计信息。
 *
 * @method string getDate() 获取<p>播放媒体文件的日期，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setDate(string $Date) 设置<p>播放媒体文件的日期，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getFileId() 获取<p>媒体文件ID。</p>
 * @method void setFileId(string $FileId) 设置<p>媒体文件ID。</p>
 * @method integer getPlayTimes() 获取<p>播放次数。</p>
 * @method void setPlayTimes(integer $PlayTimes) 设置<p>播放次数。</p>
 * @method integer getTraffic() 获取<p>播放流量，单位：字节。</p>
 * @method void setTraffic(integer $Traffic) 设置<p>播放流量，单位：字节。</p>
 */
class DailyPlayStatInfo extends AbstractModel
{
    /**
     * @var string <p>播放媒体文件的日期，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $Date;

    /**
     * @var string <p>媒体文件ID。</p>
     */
    public $FileId;

    /**
     * @var integer <p>播放次数。</p>
     */
    public $PlayTimes;

    /**
     * @var integer <p>播放流量，单位：字节。</p>
     */
    public $Traffic;

    /**
     * @param string $Date <p>播放媒体文件的日期，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $FileId <p>媒体文件ID。</p>
     * @param integer $PlayTimes <p>播放次数。</p>
     * @param integer $Traffic <p>播放流量，单位：字节。</p>
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("PlayTimes",$param) and $param["PlayTimes"] !== null) {
            $this->PlayTimes = $param["PlayTimes"];
        }

        if (array_key_exists("Traffic",$param) and $param["Traffic"] !== null) {
            $this->Traffic = $param["Traffic"];
        }
    }
}
