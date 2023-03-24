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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播转直播输出源状态信息。
 *
 * @method string getId() 获取输出源 Id，由系统分配。
 * @method void setId(string $Id) 设置输出源 Id，由系统分配。
 * @method string getPushUrl() 获取输出源直播地址。
 * @method void setPushUrl(string $PushUrl) 设置输出源直播地址。
 * @method string getStatus() 获取输出源的状态。取值有：
<li> Working ：运行中；</li>
<li> Stopped：停止输出；</li>
<li> Failed：输出失败。</li>
 * @method void setStatus(string $Status) 设置输出源的状态。取值有：
<li> Working ：运行中；</li>
<li> Stopped：停止输出；</li>
<li> Failed：输出失败。</li>
 */
class MediaCastDestinationStatus extends AbstractModel
{
    /**
     * @var string 输出源 Id，由系统分配。
     */
    public $Id;

    /**
     * @var string 输出源直播地址。
     */
    public $PushUrl;

    /**
     * @var string 输出源的状态。取值有：
<li> Working ：运行中；</li>
<li> Stopped：停止输出；</li>
<li> Failed：输出失败。</li>
     */
    public $Status;

    /**
     * @param string $Id 输出源 Id，由系统分配。
     * @param string $PushUrl 输出源直播地址。
     * @param string $Status 输出源的状态。取值有：
<li> Working ：运行中；</li>
<li> Stopped：停止输出；</li>
<li> Failed：输出失败。</li>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PushUrl",$param) and $param["PushUrl"] !== null) {
            $this->PushUrl = $param["PushUrl"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
