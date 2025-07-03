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
 * 轮播任务信息
 *
 * @method string getRoundPlayId() 获取轮播播单标识。
 * @method void setRoundPlayId(string $RoundPlayId) 设置轮播播单标识。
 * @method string getStartTime() 获取启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setStartTime(string $StartTime) 设置启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method array getRoundPlaylist() 获取轮播列表。
 * @method void setRoundPlaylist(array $RoundPlaylist) 设置轮播列表。
 * @method string getName() 获取轮播播单名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置轮播播单名称，长度限制：64 个字符。
 * @method string getDesc() 获取轮播播单描述信息，长度限制：256 个字符。
 * @method void setDesc(string $Desc) 设置轮播播单描述信息，长度限制：256 个字符。
 * @method string getStatus() 获取播放状态，可选值：
<li>Enabled：启动状态；</li>
<li>Disabled：停止状态。</li>
默认值：Enabled。
 * @method void setStatus(string $Status) 设置播放状态，可选值：
<li>Enabled：启动状态；</li>
<li>Disabled：停止状态。</li>
默认值：Enabled。
 * @method string getPlayBackMode() 获取播放模式，可选值：
<li>Loop：循环播放播单；</li>
<li>Linear：单次播放，播单播放完停止播放。</li>
默认值：Loop。
 * @method void setPlayBackMode(string $PlayBackMode) 设置播放模式，可选值：
<li>Loop：循环播放播单；</li>
<li>Linear：单次播放，播单播放完停止播放。</li>
默认值：Loop。
 * @method string getUrl() 获取轮播播放地址。
 * @method void setUrl(string $Url) 设置轮播播放地址。
 * @method string getCreateTime() 获取创建时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method string getUpdateTime() 获取更新时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method string getExpiredTime() 获取过期时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)，过期后将停止播单的播放。“9999-12-31T23:59:59+08:00”表示永不过期。
 * @method void setExpiredTime(string $ExpiredTime) 设置过期时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)，过期后将停止播单的播放。“9999-12-31T23:59:59+08:00”表示永不过期。
 */
class RoundPlayInfo extends AbstractModel
{
    /**
     * @var string 轮播播单标识。
     */
    public $RoundPlayId;

    /**
     * @var string 启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $StartTime;

    /**
     * @var array 轮播列表。
     */
    public $RoundPlaylist;

    /**
     * @var string 轮播播单名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 轮播播单描述信息，长度限制：256 个字符。
     */
    public $Desc;

    /**
     * @var string 播放状态，可选值：
<li>Enabled：启动状态；</li>
<li>Disabled：停止状态。</li>
默认值：Enabled。
     */
    public $Status;

    /**
     * @var string 播放模式，可选值：
<li>Loop：循环播放播单；</li>
<li>Linear：单次播放，播单播放完停止播放。</li>
默认值：Loop。
     */
    public $PlayBackMode;

    /**
     * @var string 轮播播放地址。
     */
    public $Url;

    /**
     * @var string 创建时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $CreateTime;

    /**
     * @var string 更新时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $UpdateTime;

    /**
     * @var string 过期时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)，过期后将停止播单的播放。“9999-12-31T23:59:59+08:00”表示永不过期。
     */
    public $ExpiredTime;

    /**
     * @param string $RoundPlayId 轮播播单标识。
     * @param string $StartTime 启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param array $RoundPlaylist 轮播列表。
     * @param string $Name 轮播播单名称，长度限制：64 个字符。
     * @param string $Desc 轮播播单描述信息，长度限制：256 个字符。
     * @param string $Status 播放状态，可选值：
<li>Enabled：启动状态；</li>
<li>Disabled：停止状态。</li>
默认值：Enabled。
     * @param string $PlayBackMode 播放模式，可选值：
<li>Loop：循环播放播单；</li>
<li>Linear：单次播放，播单播放完停止播放。</li>
默认值：Loop。
     * @param string $Url 轮播播放地址。
     * @param string $CreateTime 创建时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param string $UpdateTime 更新时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param string $ExpiredTime 过期时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)，过期后将停止播单的播放。“9999-12-31T23:59:59+08:00”表示永不过期。
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
        if (array_key_exists("RoundPlayId",$param) and $param["RoundPlayId"] !== null) {
            $this->RoundPlayId = $param["RoundPlayId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RoundPlaylist",$param) and $param["RoundPlaylist"] !== null) {
            $this->RoundPlaylist = [];
            foreach ($param["RoundPlaylist"] as $key => $value){
                $obj = new RoundPlayListItemInfo();
                $obj->deserialize($value);
                array_push($this->RoundPlaylist, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PlayBackMode",$param) and $param["PlayBackMode"] !== null) {
            $this->PlayBackMode = $param["PlayBackMode"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
