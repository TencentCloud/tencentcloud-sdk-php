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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 线性组装信息查询
 *
 * @method string getChannelID() 获取<p>频道id</p>
 * @method void setChannelID(string $ChannelID) 设置<p>频道id</p>
 * @method string getDate() 获取<p>日期</p>
 * @method void setDate(string $Date) 设置<p>日期</p>
 * @method string getStartTime() 获取<p>查询开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间</p>
 * @method string getEndTime() 获取<p>查询结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间</p>
 * @method integer getDuration() 获取<p>持续时间</p>
 * @method void setDuration(integer $Duration) 设置<p>持续时间</p>
 * @method string getChannelTier() 获取<p>频道类型</p>
 * @method void setChannelTier(string $ChannelTier) 设置<p>频道类型</p>
 * @method string getChannelName() 获取<p>频道名称</p>
 * @method void setChannelName(string $ChannelName) 设置<p>频道名称</p>
 */
class AssemblyUsageDetail extends AbstractModel
{
    /**
     * @var string <p>频道id</p>
     */
    public $ChannelID;

    /**
     * @var string <p>日期</p>
     */
    public $Date;

    /**
     * @var string <p>查询开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>持续时间</p>
     */
    public $Duration;

    /**
     * @var string <p>频道类型</p>
     */
    public $ChannelTier;

    /**
     * @var string <p>频道名称</p>
     */
    public $ChannelName;

    /**
     * @param string $ChannelID <p>频道id</p>
     * @param string $Date <p>日期</p>
     * @param string $StartTime <p>查询开始时间</p>
     * @param string $EndTime <p>查询结束时间</p>
     * @param integer $Duration <p>持续时间</p>
     * @param string $ChannelTier <p>频道类型</p>
     * @param string $ChannelName <p>频道名称</p>
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
        if (array_key_exists("ChannelID",$param) and $param["ChannelID"] !== null) {
            $this->ChannelID = $param["ChannelID"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ChannelTier",$param) and $param["ChannelTier"] !== null) {
            $this->ChannelTier = $param["ChannelTier"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }
    }
}
