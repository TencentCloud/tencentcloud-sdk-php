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
 * UpdateCfsRule请求参数结构体
 *
 * @method string getPGroupId() 获取权限组 ID，可通过[DescribeCfsPGroups接口](https://cloud.tencent.com/document/api/582/38157)获取
 * @method void setPGroupId(string $PGroupId) 设置权限组 ID，可通过[DescribeCfsPGroups接口](https://cloud.tencent.com/document/api/582/38157)获取
 * @method string getRuleId() 获取规则 ID，可通过[DescribeCfsRules](https://cloud.tencent.com/document/api/582/38156)接口获取
 * @method void setRuleId(string $RuleId) 设置规则 ID，可通过[DescribeCfsRules](https://cloud.tencent.com/document/api/582/38156)接口获取
 * @method string getAuthClientIp() 获取可以填写单个 IP 或者单个网段，例如 10.1.10.11 或者 10.10.1.0/24。默认来访地址为*表示允许所有。同时需要注意，此处需填写 CVM 的内网 IP。
 * @method void setAuthClientIp(string $AuthClientIp) 设置可以填写单个 IP 或者单个网段，例如 10.1.10.11 或者 10.10.1.0/24。默认来访地址为*表示允许所有。同时需要注意，此处需填写 CVM 的内网 IP。
 * @method string getRWPermission() 获取读写权限, 值为RO、RW；其中 RO 为只读，RW 为读写，不填默认为只读
 * @method void setRWPermission(string $RWPermission) 设置读写权限, 值为RO、RW；其中 RO 为只读，RW 为读写，不填默认为只读
 * @method string getUserPermission() 获取用户权限，值为all_squash、no_all_squash、root_squash、no_root_squash，默认值为root_squash
all_squash：所有访问用户（含 root 用户）都会被映射为匿名用户或用户组。
no_all_squash：所有访问用户（含 root 用户）均保持原有的 UID/GID 信息。
root_squash：将来访的 root 用户映射为匿名用户或用户组，非 root 用户保持原有的 UID/GID 信息。
no_root_squash：与 no_all_squash 效果一致，所有访问用户（含 root 用户）均保持原有的 UID/GID 信息

 * @method void setUserPermission(string $UserPermission) 设置用户权限，值为all_squash、no_all_squash、root_squash、no_root_squash，默认值为root_squash
all_squash：所有访问用户（含 root 用户）都会被映射为匿名用户或用户组。
no_all_squash：所有访问用户（含 root 用户）均保持原有的 UID/GID 信息。
root_squash：将来访的 root 用户映射为匿名用户或用户组，非 root 用户保持原有的 UID/GID 信息。
no_root_squash：与 no_all_squash 效果一致，所有访问用户（含 root 用户）均保持原有的 UID/GID 信息

 * @method integer getPriority() 获取规则优先级，参数范围1-100。 其中 1 为最高，100为最低，默认值为100
 * @method void setPriority(integer $Priority) 设置规则优先级，参数范围1-100。 其中 1 为最高，100为最低，默认值为100
 */
class UpdateCfsRuleRequest extends AbstractModel
{
    /**
     * @var string 权限组 ID，可通过[DescribeCfsPGroups接口](https://cloud.tencent.com/document/api/582/38157)获取
     */
    public $PGroupId;

    /**
     * @var string 规则 ID，可通过[DescribeCfsRules](https://cloud.tencent.com/document/api/582/38156)接口获取
     */
    public $RuleId;

    /**
     * @var string 可以填写单个 IP 或者单个网段，例如 10.1.10.11 或者 10.10.1.0/24。默认来访地址为*表示允许所有。同时需要注意，此处需填写 CVM 的内网 IP。
     */
    public $AuthClientIp;

    /**
     * @var string 读写权限, 值为RO、RW；其中 RO 为只读，RW 为读写，不填默认为只读
     */
    public $RWPermission;

    /**
     * @var string 用户权限，值为all_squash、no_all_squash、root_squash、no_root_squash，默认值为root_squash
all_squash：所有访问用户（含 root 用户）都会被映射为匿名用户或用户组。
no_all_squash：所有访问用户（含 root 用户）均保持原有的 UID/GID 信息。
root_squash：将来访的 root 用户映射为匿名用户或用户组，非 root 用户保持原有的 UID/GID 信息。
no_root_squash：与 no_all_squash 效果一致，所有访问用户（含 root 用户）均保持原有的 UID/GID 信息

     */
    public $UserPermission;

    /**
     * @var integer 规则优先级，参数范围1-100。 其中 1 为最高，100为最低，默认值为100
     */
    public $Priority;

    /**
     * @param string $PGroupId 权限组 ID，可通过[DescribeCfsPGroups接口](https://cloud.tencent.com/document/api/582/38157)获取
     * @param string $RuleId 规则 ID，可通过[DescribeCfsRules](https://cloud.tencent.com/document/api/582/38156)接口获取
     * @param string $AuthClientIp 可以填写单个 IP 或者单个网段，例如 10.1.10.11 或者 10.10.1.0/24。默认来访地址为*表示允许所有。同时需要注意，此处需填写 CVM 的内网 IP。
     * @param string $RWPermission 读写权限, 值为RO、RW；其中 RO 为只读，RW 为读写，不填默认为只读
     * @param string $UserPermission 用户权限，值为all_squash、no_all_squash、root_squash、no_root_squash，默认值为root_squash
all_squash：所有访问用户（含 root 用户）都会被映射为匿名用户或用户组。
no_all_squash：所有访问用户（含 root 用户）均保持原有的 UID/GID 信息。
root_squash：将来访的 root 用户映射为匿名用户或用户组，非 root 用户保持原有的 UID/GID 信息。
no_root_squash：与 no_all_squash 效果一致，所有访问用户（含 root 用户）均保持原有的 UID/GID 信息

     * @param integer $Priority 规则优先级，参数范围1-100。 其中 1 为最高，100为最低，默认值为100
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
        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
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
