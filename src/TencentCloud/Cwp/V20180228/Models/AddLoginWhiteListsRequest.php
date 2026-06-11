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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddLoginWhiteLists请求参数结构体
 *
 * @method HostLoginWhiteObj getHostLoginWhiteObj() 获取<p>异地登录白名单实体</p>
 * @method void setHostLoginWhiteObj(HostLoginWhiteObj $HostLoginWhiteObj) 设置<p>异地登录白名单实体</p>
 * @method string getProcessType() 获取<p>事件同步处理方式：<br>  &quot;&quot; -- 不操作<br>  &quot;All&quot; -- 将符合此配置的所有事件记录加白<br>  &quot;Id&quot; -- 将EventId对应的事件记录加白</p>
 * @method void setProcessType(string $ProcessType) 设置<p>事件同步处理方式：<br>  &quot;&quot; -- 不操作<br>  &quot;All&quot; -- 将符合此配置的所有事件记录加白<br>  &quot;Id&quot; -- 将EventId对应的事件记录加白</p>
 * @method integer getEventId() 获取<p>异地登录事件ID，当ProcessType为Id时此项必填</p>
 * @method void setEventId(integer $EventId) 设置<p>异地登录事件ID，当ProcessType为Id时此项必填</p>
 */
class AddLoginWhiteListsRequest extends AbstractModel
{
    /**
     * @var HostLoginWhiteObj <p>异地登录白名单实体</p>
     */
    public $HostLoginWhiteObj;

    /**
     * @var string <p>事件同步处理方式：<br>  &quot;&quot; -- 不操作<br>  &quot;All&quot; -- 将符合此配置的所有事件记录加白<br>  &quot;Id&quot; -- 将EventId对应的事件记录加白</p>
     */
    public $ProcessType;

    /**
     * @var integer <p>异地登录事件ID，当ProcessType为Id时此项必填</p>
     */
    public $EventId;

    /**
     * @param HostLoginWhiteObj $HostLoginWhiteObj <p>异地登录白名单实体</p>
     * @param string $ProcessType <p>事件同步处理方式：<br>  &quot;&quot; -- 不操作<br>  &quot;All&quot; -- 将符合此配置的所有事件记录加白<br>  &quot;Id&quot; -- 将EventId对应的事件记录加白</p>
     * @param integer $EventId <p>异地登录事件ID，当ProcessType为Id时此项必填</p>
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
        if (array_key_exists("HostLoginWhiteObj",$param) and $param["HostLoginWhiteObj"] !== null) {
            $this->HostLoginWhiteObj = new HostLoginWhiteObj();
            $this->HostLoginWhiteObj->deserialize($param["HostLoginWhiteObj"]);
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
