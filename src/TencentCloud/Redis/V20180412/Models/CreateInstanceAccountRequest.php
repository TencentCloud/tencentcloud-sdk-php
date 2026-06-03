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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceAccount请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method string getAccountName() 获取<p>自定义的访问数据库的账号名称。</p><ul><li>仅由字母、数字、下划线、中划线组成。</li><li>长度不能大于32位。</li></ul>
 * @method void setAccountName(string $AccountName) 设置<p>自定义的访问数据库的账号名称。</p><ul><li>仅由字母、数字、下划线、中划线组成。</li><li>长度不能大于32位。</li></ul>
 * @method string getAccountPassword() 获取<p>设置自定义账号的密码。密码复杂度要求如下：</p><ul><li>字符个数为[8,64]。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的两种。</li><li>不能以&quot;/&quot;开头。</li></ul>
 * @method void setAccountPassword(string $AccountPassword) 设置<p>设置自定义账号的密码。密码复杂度要求如下：</p><ul><li>字符个数为[8,64]。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的两种。</li><li>不能以&quot;/&quot;开头。</li></ul>
 * @method array getReadonlyPolicy() 获取<p>指定账号的读请求路由分发至主节点或副本节点。未开启副本只读，不支持选择副本节点。</p><ul><li>master：主节点</li><li>replication：副本节点</li></ul>
 * @method void setReadonlyPolicy(array $ReadonlyPolicy) 设置<p>指定账号的读请求路由分发至主节点或副本节点。未开启副本只读，不支持选择副本节点。</p><ul><li>master：主节点</li><li>replication：副本节点</li></ul>
 * @method string getPrivilege() 获取<p>账户读写权限，支持选择只读与读写权限。</p><ul><li>r：只读。</li><li>rw: 读写。</li></ul>
 * @method void setPrivilege(string $Privilege) 设置<p>账户读写权限，支持选择只读与读写权限。</p><ul><li>r：只读。</li><li>rw: 读写。</li></ul>
 * @method string getRemark() 获取<p>账号备注描述信息，长度为[0,64] 字节，支持中文。</p>
 * @method void setRemark(string $Remark) 设置<p>账号备注描述信息，长度为[0,64] 字节，支持中文。</p>
 * @method boolean getEncryptPassword() 获取<p>是否启用密码加密传输。</p><ul><li>true：加密。</li><li>false：不加密（默认值）。</li></ul>
 * @method void setEncryptPassword(boolean $EncryptPassword) 设置<p>是否启用密码加密传输。</p><ul><li>true：加密。</li><li>false：不加密（默认值）。</li></ul>
 */
class CreateInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>自定义的访问数据库的账号名称。</p><ul><li>仅由字母、数字、下划线、中划线组成。</li><li>长度不能大于32位。</li></ul>
     */
    public $AccountName;

    /**
     * @var string <p>设置自定义账号的密码。密码复杂度要求如下：</p><ul><li>字符个数为[8,64]。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的两种。</li><li>不能以&quot;/&quot;开头。</li></ul>
     */
    public $AccountPassword;

    /**
     * @var array <p>指定账号的读请求路由分发至主节点或副本节点。未开启副本只读，不支持选择副本节点。</p><ul><li>master：主节点</li><li>replication：副本节点</li></ul>
     */
    public $ReadonlyPolicy;

    /**
     * @var string <p>账户读写权限，支持选择只读与读写权限。</p><ul><li>r：只读。</li><li>rw: 读写。</li></ul>
     */
    public $Privilege;

    /**
     * @var string <p>账号备注描述信息，长度为[0,64] 字节，支持中文。</p>
     */
    public $Remark;

    /**
     * @var boolean <p>是否启用密码加密传输。</p><ul><li>true：加密。</li><li>false：不加密（默认值）。</li></ul>
     */
    public $EncryptPassword;

    /**
     * @param string $InstanceId <p>实例 ID，请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param string $AccountName <p>自定义的访问数据库的账号名称。</p><ul><li>仅由字母、数字、下划线、中划线组成。</li><li>长度不能大于32位。</li></ul>
     * @param string $AccountPassword <p>设置自定义账号的密码。密码复杂度要求如下：</p><ul><li>字符个数为[8,64]。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的两种。</li><li>不能以&quot;/&quot;开头。</li></ul>
     * @param array $ReadonlyPolicy <p>指定账号的读请求路由分发至主节点或副本节点。未开启副本只读，不支持选择副本节点。</p><ul><li>master：主节点</li><li>replication：副本节点</li></ul>
     * @param string $Privilege <p>账户读写权限，支持选择只读与读写权限。</p><ul><li>r：只读。</li><li>rw: 读写。</li></ul>
     * @param string $Remark <p>账号备注描述信息，长度为[0,64] 字节，支持中文。</p>
     * @param boolean $EncryptPassword <p>是否启用密码加密传输。</p><ul><li>true：加密。</li><li>false：不加密（默认值）。</li></ul>
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

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("ReadonlyPolicy",$param) and $param["ReadonlyPolicy"] !== null) {
            $this->ReadonlyPolicy = $param["ReadonlyPolicy"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }
    }
}
