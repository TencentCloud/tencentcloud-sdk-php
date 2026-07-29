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
 * 通知模板发送组信息
 *
 * @method string getReceiverType() 获取<p>发送组类型</p><p>枚举值：</p><ul><li>USER： 用户</li><li>GROUP： 用户组</li><li>OnCallForm： 值班表</li></ul>
 * @method void setReceiverType(string $ReceiverType) 设置<p>发送组类型</p><p>枚举值：</p><ul><li>USER： 用户</li><li>GROUP： 用户组</li><li>OnCallForm： 值班表</li></ul>
 * @method array getUsers() 获取<p>通知人信息</p>
 * @method void setUsers(array $Users) 设置<p>通知人信息</p>
 */
class NoticeSendGroup extends AbstractModel
{
    /**
     * @var string <p>发送组类型</p><p>枚举值：</p><ul><li>USER： 用户</li><li>GROUP： 用户组</li><li>OnCallForm： 值班表</li></ul>
     */
    public $ReceiverType;

    /**
     * @var array <p>通知人信息</p>
     */
    public $Users;

    /**
     * @param string $ReceiverType <p>发送组类型</p><p>枚举值：</p><ul><li>USER： 用户</li><li>GROUP： 用户组</li><li>OnCallForm： 值班表</li></ul>
     * @param array $Users <p>通知人信息</p>
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
        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new NoticeUserInfo();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }
    }
}
