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
 * CreateAccounts请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method array getAccounts() 获取云数据库账号。
 * @method void setAccounts(array $Accounts) 设置云数据库账号。
 * @method string getPassword() 获取新账户的密码。
说明：
1. 在8 ～ 64位字符数以内（推荐12位以上）。
2. 至少包含其中两项：小写字母 a ~ z 或 大写字母 A ～ Z。数字0 ～ 9。_+-,&=!@#$%^*().|。
3. 不能包含非法字符。
 * @method void setPassword(string $Password) 设置新账户的密码。
说明：
1. 在8 ～ 64位字符数以内（推荐12位以上）。
2. 至少包含其中两项：小写字母 a ~ z 或 大写字母 A ～ Z。数字0 ～ 9。_+-,&=!@#$%^*().|。
3. 不能包含非法字符。
 * @method string getDescription() 获取备注信息。最多支持输入255个字符。
 * @method void setDescription(string $Description) 设置备注信息。最多支持输入255个字符。
 * @method integer getMaxUserConnections() 获取新账户最大可用连接数，默认值为10240，最大可设置值为10240。
 * @method void setMaxUserConnections(integer $MaxUserConnections) 设置新账户最大可用连接数，默认值为10240，最大可设置值为10240。
 */
class CreateAccountsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var array 云数据库账号。
     */
    public $Accounts;

    /**
     * @var string 新账户的密码。
说明：
1. 在8 ～ 64位字符数以内（推荐12位以上）。
2. 至少包含其中两项：小写字母 a ~ z 或 大写字母 A ～ Z。数字0 ～ 9。_+-,&=!@#$%^*().|。
3. 不能包含非法字符。
     */
    public $Password;

    /**
     * @var string 备注信息。最多支持输入255个字符。
     */
    public $Description;

    /**
     * @var integer 新账户最大可用连接数，默认值为10240，最大可设置值为10240。
     */
    public $MaxUserConnections;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     * @param array $Accounts 云数据库账号。
     * @param string $Password 新账户的密码。
说明：
1. 在8 ～ 64位字符数以内（推荐12位以上）。
2. 至少包含其中两项：小写字母 a ~ z 或 大写字母 A ～ Z。数字0 ～ 9。_+-,&=!@#$%^*().|。
3. 不能包含非法字符。
     * @param string $Description 备注信息。最多支持输入255个字符。
     * @param integer $MaxUserConnections 新账户最大可用连接数，默认值为10240，最大可设置值为10240。
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

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new Account();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }
    }
}
