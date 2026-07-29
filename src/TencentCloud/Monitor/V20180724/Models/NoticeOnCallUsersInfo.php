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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知模板配置的发送用户的信息
 *
 * @method string getNoticeId() 获取<p>通知模板id</p><p>参数格式：notice-xxxxxxxx</p>
 * @method void setNoticeId(string $NoticeId) 设置<p>通知模板id</p><p>参数格式：notice-xxxxxxxx</p>
 * @method array getSendGroups() 获取<p>发送组信息，对应通知模板中的每项配置</p>
 * @method void setSendGroups(array $SendGroups) 设置<p>发送组信息，对应通知模板中的每项配置</p>
 */
class NoticeOnCallUsersInfo extends AbstractModel
{
    /**
     * @var string <p>通知模板id</p><p>参数格式：notice-xxxxxxxx</p>
     */
    public $NoticeId;

    /**
     * @var array <p>发送组信息，对应通知模板中的每项配置</p>
     */
    public $SendGroups;

    /**
     * @param string $NoticeId <p>通知模板id</p><p>参数格式：notice-xxxxxxxx</p>
     * @param array $SendGroups <p>发送组信息，对应通知模板中的每项配置</p>
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
        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("SendGroups",$param) and $param["SendGroups"] !== null) {
            $this->SendGroups = [];
            foreach ($param["SendGroups"] as $key => $value){
                $obj = new NoticeSendGroup();
                $obj->deserialize($value);
                array_push($this->SendGroups, $obj);
            }
        }
    }
}
