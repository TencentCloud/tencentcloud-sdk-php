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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权限组规则列表
 *
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getAuthClientIp() 获取允许访问的客户端IP
 * @method void setAuthClientIp(string $AuthClientIp) 设置允许访问的客户端IP
 * @method string getRWPermission() 获取读写权限, ro为只读，rw为读写
 * @method void setRWPermission(string $RWPermission) 设置读写权限, ro为只读，rw为读写
 * @method string getUserPermission() 获取all_squash：所有访问用户（含 root 用户）都会被映射为匿名用户或用户组。
no_all_squash：所有访问用户（含 root 用户）均保持原有的 UID/GID 信息。
root_squash：将来访的 root 用户映射为匿名用户或用户组，非 root 用户保持原有的 UID/GID 信息。
no_root_squash：与 no_all_squash 效果一致，所有访问用户（含 root 用户）均保持原有的 UID/GID 信息

 * @method void setUserPermission(string $UserPermission) 设置all_squash：所有访问用户（含 root 用户）都会被映射为匿名用户或用户组。
no_all_squash：所有访问用户（含 root 用户）均保持原有的 UID/GID 信息。
root_squash：将来访的 root 用户映射为匿名用户或用户组，非 root 用户保持原有的 UID/GID 信息。
no_root_squash：与 no_all_squash 效果一致，所有访问用户（含 root 用户）均保持原有的 UID/GID 信息

 * @method integer getPriority() 获取规则优先级，1-100。 其中 1 为最高，100为最低
 * @method void setPriority(integer $Priority) 设置规则优先级，1-100。 其中 1 为最高，100为最低
 */
class PGroupRuleInfo extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 允许访问的客户端IP
     */
    public $AuthClientIp;

    /**
     * @var string 读写权限, ro为只读，rw为读写
     */
    public $RWPermission;

    /**
     * @var string all_squash：所有访问用户（含 root 用户）都会被映射为匿名用户或用户组。
no_all_squash：所有访问用户（含 root 用户）均保持原有的 UID/GID 信息。
root_squash：将来访的 root 用户映射为匿名用户或用户组，非 root 用户保持原有的 UID/GID 信息。
no_root_squash：与 no_all_squash 效果一致，所有访问用户（含 root 用户）均保持原有的 UID/GID 信息

     */
    public $UserPermission;

    /**
     * @var integer 规则优先级，1-100。 其中 1 为最高，100为最低
     */
    public $Priority;

    /**
     * @param string $RuleId 规则ID
     * @param string $AuthClientIp 允许访问的客户端IP
     * @param string $RWPermission 读写权限, ro为只读，rw为读写
     * @param string $UserPermission all_squash：所有访问用户（含 root 用户）都会被映射为匿名用户或用户组。
no_all_squash：所有访问用户（含 root 用户）均保持原有的 UID/GID 信息。
root_squash：将来访的 root 用户映射为匿名用户或用户组，非 root 用户保持原有的 UID/GID 信息。
no_root_squash：与 no_all_squash 效果一致，所有访问用户（含 root 用户）均保持原有的 UID/GID 信息

     * @param integer $Priority 规则优先级，1-100。 其中 1 为最高，100为最低
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AuthClientIp",$param) and $param["AuthClientIp"] !== null) {
            $this->AuthClientIp = $param["AuthClientIp"];
        }

        if (array_key_exists("RWPermission",$param) and $param["RWPermission"] !== null) {
            $this->RWPermission = $param["RWPermission"];
        }

        if (array_key_exists("UserPermission",$param) and $param["UserPermission"] !== null) {
            $this->UserPermission = $param["UserPermission"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
