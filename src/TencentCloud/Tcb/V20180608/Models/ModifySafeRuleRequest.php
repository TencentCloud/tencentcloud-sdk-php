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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySafeRule请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getCollectionName() 获取集合名称
 * @method void setCollectionName(string $CollectionName) 设置集合名称
 * @method string getAclTag() 获取权限标签。包含以下取值：
<li> READONLY：所有用户可读，仅创建者和管理员可写</li>
<li> PRIVATE：仅创建者及管理员可读写</li>
<li> ADMINWRITE：所有用户可读，仅管理员可写</li>
<li> ADMINONLY：仅管理员可读写</li>
<li> CUSTOM：自定义安全规则</li>
 * @method void setAclTag(string $AclTag) 设置权限标签。包含以下取值：
<li> READONLY：所有用户可读，仅创建者和管理员可写</li>
<li> PRIVATE：仅创建者及管理员可读写</li>
<li> ADMINWRITE：所有用户可读，仅管理员可写</li>
<li> ADMINONLY：仅管理员可读写</li>
<li> CUSTOM：自定义安全规则</li>
 * @method string getRule() 获取安全规则内容。
当 AclTag=CUSTOM 时，此参数必填。
详情参考：[文档型数据库安全规则](https://docs.cloudbase.net/database/security-rules)
 * @method void setRule(string $Rule) 设置安全规则内容。
当 AclTag=CUSTOM 时，此参数必填。
详情参考：[文档型数据库安全规则](https://docs.cloudbase.net/database/security-rules)
 */
class ModifySafeRuleRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 集合名称
     */
    public $CollectionName;

    /**
     * @var string 权限标签。包含以下取值：
<li> READONLY：所有用户可读，仅创建者和管理员可写</li>
<li> PRIVATE：仅创建者及管理员可读写</li>
<li> ADMINWRITE：所有用户可读，仅管理员可写</li>
<li> ADMINONLY：仅管理员可读写</li>
<li> CUSTOM：自定义安全规则</li>
     */
    public $AclTag;

    /**
     * @var string 安全规则内容。
当 AclTag=CUSTOM 时，此参数必填。
详情参考：[文档型数据库安全规则](https://docs.cloudbase.net/database/security-rules)
     */
    public $Rule;

    /**
     * @param string $EnvId 环境ID
     * @param string $CollectionName 集合名称
     * @param string $AclTag 权限标签。包含以下取值：
<li> READONLY：所有用户可读，仅创建者和管理员可写</li>
<li> PRIVATE：仅创建者及管理员可读写</li>
<li> ADMINWRITE：所有用户可读，仅管理员可写</li>
<li> ADMINONLY：仅管理员可读写</li>
<li> CUSTOM：自定义安全规则</li>
     * @param string $Rule 安全规则内容。
当 AclTag=CUSTOM 时，此参数必填。
详情参考：[文档型数据库安全规则](https://docs.cloudbase.net/database/security-rules)
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("CollectionName",$param) and $param["CollectionName"] !== null) {
            $this->CollectionName = $param["CollectionName"];
        }

        if (array_key_exists("AclTag",$param) and $param["AclTag"] !== null) {
            $this->AclTag = $param["AclTag"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }
    }
}
