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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountPassword请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method string getNewPassword() 获取<p>数据库账号的新密码。密码应至少包含字母、数字和字符（_+-&amp;=!@#$%^*()）中的两种，长度为8-64个字符。</p>
 * @method void setNewPassword(string $NewPassword) 设置<p>数据库账号的新密码。密码应至少包含字母、数字和字符（_+-&amp;=!@#$%^*()）中的两种，长度为8-64个字符。</p>
 * @method array getAccounts() 获取<p>云数据库账号。可通过 <a href="https://cloud.tencent.com/document/api/236/17499">DescribeAccounts</a> 接口获取。</p>
 * @method void setAccounts(array $Accounts) 设置<p>云数据库账号。可通过 <a href="https://cloud.tencent.com/document/api/236/17499">DescribeAccounts</a> 接口获取。</p>
 * @method boolean getSkipValidatePassword() 获取<p>该字段已废弃。</p>
 * @method void setSkipValidatePassword(boolean $SkipValidatePassword) 设置<p>该字段已废弃。</p>
 */
class ModifyAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>数据库账号的新密码。密码应至少包含字母、数字和字符（_+-&amp;=!@#$%^*()）中的两种，长度为8-64个字符。</p>
     */
    public $NewPassword;

    /**
     * @var array <p>云数据库账号。可通过 <a href="https://cloud.tencent.com/document/api/236/17499">DescribeAccounts</a> 接口获取。</p>
     */
    public $Accounts;

    /**
     * @var boolean <p>该字段已废弃。</p>
     * @deprecated
     */
    public $SkipValidatePassword;

    /**
     * @param string $InstanceId <p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
     * @param string $NewPassword <p>数据库账号的新密码。密码应至少包含字母、数字和字符（_+-&amp;=!@#$%^*()）中的两种，长度为8-64个字符。</p>
     * @param array $Accounts <p>云数据库账号。可通过 <a href="https://cloud.tencent.com/document/api/236/17499">DescribeAccounts</a> 接口获取。</p>
     * @param boolean $SkipValidatePassword <p>该字段已废弃。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NewPassword",$param) and $param["NewPassword"] !== null) {
            $this->NewPassword = $param["NewPassword"];
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new Account();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("SkipValidatePassword",$param) and $param["SkipValidatePassword"] !== null) {
            $this->SkipValidatePassword = $param["SkipValidatePassword"];
        }
    }
}
