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
 * @method string getInstanceId() 获取<p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method array getAccounts() 获取<p>云数据库账号。</p>
 * @method void setAccounts(array $Accounts) 设置<p>云数据库账号。</p>
 * @method string getPassword() 获取<p>新账户的密码。<br>说明：</p><ol><li>在8 ～ 64位字符数以内（推荐12位以上）。</li><li>至少包含其中两项：小写字母 a ~ z 或 大写字母 A ～ Z。数字0 ～ 9。_+-,&amp;=!@#$%^*().|。</li><li>不能包含非法字符。</li></ol>
 * @method void setPassword(string $Password) 设置<p>新账户的密码。<br>说明：</p><ol><li>在8 ～ 64位字符数以内（推荐12位以上）。</li><li>至少包含其中两项：小写字母 a ~ z 或 大写字母 A ～ Z。数字0 ～ 9。_+-,&amp;=!@#$%^*().|。</li><li>不能包含非法字符。</li></ol>
 * @method string getDescription() 获取<p>备注信息。最多支持输入255个字符。</p>
 * @method void setDescription(string $Description) 设置<p>备注信息。最多支持输入255个字符。</p>
 * @method integer getMaxUserConnections() 获取<p>新账户最大可用连接数，默认值为10240，最大可设置值为10240。</p>
 * @method void setMaxUserConnections(integer $MaxUserConnections) 设置<p>新账户最大可用连接数，默认值为10240，最大可设置值为10240。</p>
 */
class CreateAccountsRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
     */
    public $InstanceId;

    /**
     * @var array <p>云数据库账号。</p>
     */
    public $Accounts;

    /**
     * @var string <p>新账户的密码。<br>说明：</p><ol><li>在8 ～ 64位字符数以内（推荐12位以上）。</li><li>至少包含其中两项：小写字母 a ~ z 或 大写字母 A ～ Z。数字0 ～ 9。_+-,&amp;=!@#$%^*().|。</li><li>不能包含非法字符。</li></ol>
     */
    public $Password;

    /**
     * @var string <p>备注信息。最多支持输入255个字符。</p>
     */
    public $Description;

    /**
     * @var integer <p>新账户最大可用连接数，默认值为10240，最大可设置值为10240。</p>
     */
    public $MaxUserConnections;

    /**
     * @param string $InstanceId <p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
     * @param array $Accounts <p>云数据库账号。</p>
     * @param string $Password <p>新账户的密码。<br>说明：</p><ol><li>在8 ～ 64位字符数以内（推荐12位以上）。</li><li>至少包含其中两项：小写字母 a ~ z 或 大写字母 A ～ Z。数字0 ～ 9。_+-,&amp;=!@#$%^*().|。</li><li>不能包含非法字符。</li></ol>
     * @param string $Description <p>备注信息。最多支持输入255个字符。</p>
     * @param integer $MaxUserConnections <p>新账户最大可用连接数，默认值为10240，最大可设置值为10240。</p>
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
