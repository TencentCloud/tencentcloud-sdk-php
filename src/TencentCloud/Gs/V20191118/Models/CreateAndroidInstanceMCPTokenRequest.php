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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAndroidInstanceMCPToken请求参数结构体
 *
 * @method string getRole() 获取<p>ROOT / USER（大小写敏感），默认 USER。ROOT 可访问该 AppId 下全部实例</p><p>枚举值：</p><ul><li>ROOT： 可访问该 AppId 下全部实例</li><li>USER： 可访问本角色实例白名单内的实例</li></ul><p>默认值：USER</p>
 * @method void setRole(string $Role) 设置<p>ROOT / USER（大小写敏感），默认 USER。ROOT 可访问该 AppId 下全部实例</p><p>枚举值：</p><ul><li>ROOT： 可访问该 AppId 下全部实例</li><li>USER： 可访问本角色实例白名单内的实例</li></ul><p>默认值：USER</p>
 * @method integer getExpireSeconds() 获取<p>有效期（秒）；0 或不传表示永不过期（负值等同不过期）</p>
 * @method void setExpireSeconds(integer $ExpireSeconds) 设置<p>有效期（秒）；0 或不传表示永不过期（负值等同不过期）</p>
 * @method string getTokenName() 获取<p>备注名</p>
 * @method void setTokenName(string $TokenName) 设置<p>备注名</p>
 * @method array getAllowedInstanceIds() 获取<p>USER 角色可访问的实例白名单</p>
 * @method void setAllowedInstanceIds(array $AllowedInstanceIds) 设置<p>USER 角色可访问的实例白名单</p>
 */
class CreateAndroidInstanceMCPTokenRequest extends AbstractModel
{
    /**
     * @var string <p>ROOT / USER（大小写敏感），默认 USER。ROOT 可访问该 AppId 下全部实例</p><p>枚举值：</p><ul><li>ROOT： 可访问该 AppId 下全部实例</li><li>USER： 可访问本角色实例白名单内的实例</li></ul><p>默认值：USER</p>
     */
    public $Role;

    /**
     * @var integer <p>有效期（秒）；0 或不传表示永不过期（负值等同不过期）</p>
     */
    public $ExpireSeconds;

    /**
     * @var string <p>备注名</p>
     */
    public $TokenName;

    /**
     * @var array <p>USER 角色可访问的实例白名单</p>
     */
    public $AllowedInstanceIds;

    /**
     * @param string $Role <p>ROOT / USER（大小写敏感），默认 USER。ROOT 可访问该 AppId 下全部实例</p><p>枚举值：</p><ul><li>ROOT： 可访问该 AppId 下全部实例</li><li>USER： 可访问本角色实例白名单内的实例</li></ul><p>默认值：USER</p>
     * @param integer $ExpireSeconds <p>有效期（秒）；0 或不传表示永不过期（负值等同不过期）</p>
     * @param string $TokenName <p>备注名</p>
     * @param array $AllowedInstanceIds <p>USER 角色可访问的实例白名单</p>
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("ExpireSeconds",$param) and $param["ExpireSeconds"] !== null) {
            $this->ExpireSeconds = $param["ExpireSeconds"];
        }

        if (array_key_exists("TokenName",$param) and $param["TokenName"] !== null) {
            $this->TokenName = $param["TokenName"];
        }

        if (array_key_exists("AllowedInstanceIds",$param) and $param["AllowedInstanceIds"] !== null) {
            $this->AllowedInstanceIds = $param["AllowedInstanceIds"];
        }
    }
}
