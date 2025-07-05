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
 * @method HostLoginWhiteObj getHostLoginWhiteObj() 获取异地登录白名单实体
 * @method void setHostLoginWhiteObj(HostLoginWhiteObj $HostLoginWhiteObj) 设置异地登录白名单实体
 * @method string getProcessType() 获取事件同步处理方式：
  "" -- 不操作
  "All" -- 将符合此配置的所有事件记录加白
  "Id" -- 将EventId对应的事件记录加白
 * @method void setProcessType(string $ProcessType) 设置事件同步处理方式：
  "" -- 不操作
  "All" -- 将符合此配置的所有事件记录加白
  "Id" -- 将EventId对应的事件记录加白
 * @method integer getEventId() 获取异地登录事件ID，当ProcessType为Id时此项必填
 * @method void setEventId(integer $EventId) 设置异地登录事件ID，当ProcessType为Id时此项必填
 */
class AddLoginWhiteListsRequest extends AbstractModel
{
    /**
     * @var HostLoginWhiteObj 异地登录白名单实体
     */
    public $HostLoginWhiteObj;

    /**
     * @var string 事件同步处理方式：
  "" -- 不操作
  "All" -- 将符合此配置的所有事件记录加白
  "Id" -- 将EventId对应的事件记录加白
     */
    public $ProcessType;

    /**
     * @var integer 异地登录事件ID，当ProcessType为Id时此项必填
     */
    public $EventId;

    /**
     * @param HostLoginWhiteObj $HostLoginWhiteObj 异地登录白名单实体
     * @param string $ProcessType 事件同步处理方式：
  "" -- 不操作
  "All" -- 将符合此配置的所有事件记录加白
  "Id" -- 将EventId对应的事件记录加白
     * @param integer $EventId 异地登录事件ID，当ProcessType为Id时此项必填
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
