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
 * 媒体转推事件通知消息。
 *
 * @method string getCastId() 获取媒体转推 ID。
 * @method void setCastId(string $CastId) 设置媒体转推 ID。
 * @method string getStatus() 获取转推状态，取值有：
<li>Working ：运行中；</li>
<li>Scheduled ：等待定时时间到达后启动；</li>
<li>Stopped ：已经停止转推；</li>
<li>Idle ：空闲。</li>
 * @method void setStatus(string $Status) 设置转推状态，取值有：
<li>Working ：运行中；</li>
<li>Scheduled ：等待定时时间到达后启动；</li>
<li>Stopped ：已经停止转推；</li>
<li>Idle ：空闲。</li>
 */
class MediaCastEvent extends AbstractModel
{
    /**
     * @var string 媒体转推 ID。
     */
    public $CastId;

    /**
     * @var string 转推状态，取值有：
<li>Working ：运行中；</li>
<li>Scheduled ：等待定时时间到达后启动；</li>
<li>Stopped ：已经停止转推；</li>
<li>Idle ：空闲。</li>
     */
    public $Status;

    /**
     * @param string $CastId 媒体转推 ID。
     * @param string $Status 转推状态，取值有：
<li>Working ：运行中；</li>
<li>Scheduled ：等待定时时间到达后启动；</li>
<li>Stopped ：已经停止转推；</li>
<li>Idle ：空闲。</li>
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
        if (array_key_exists("CastId",$param) and $param["CastId"] !== null) {
            $this->CastId = $param["CastId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
