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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListEntitiesForPolicy请求参数结构体
 *
 * @method integer getPolicyId() 获取策略 id
 * @method void setPolicyId(integer $PolicyId) 设置策略 id
 * @method integer getPage() 获取页码，默认值是 1，从 1 开始
 * @method void setPage(integer $Page) 设置页码，默认值是 1，从 1 开始
 * @method integer getRp() 获取每页大小，默认值是 20
 * @method void setRp(integer $Rp) 设置每页大小，默认值是 20
 * @method string getEntityFilter() 获取可取值 'All'、'User'、'Group' 和 'Role'，'All' 表示获取所有实体类型，'User' 表示只获取子账号，'Group' 表示只获取用户组，'Role' 表示只获取角色，默认取 'All'
 * @method void setEntityFilter(string $EntityFilter) 设置可取值 'All'、'User'、'Group' 和 'Role'，'All' 表示获取所有实体类型，'User' 表示只获取子账号，'Group' 表示只获取用户组，'Role' 表示只获取角色，默认取 'All'
 */
class ListEntitiesForPolicyRequest extends AbstractModel
{
    /**
     * @var integer 策略 id
     */
    public $PolicyId;

    /**
     * @var integer 页码，默认值是 1，从 1 开始
     */
    public $Page;

    /**
     * @var integer 每页大小，默认值是 20
     */
    public $Rp;

    /**
     * @var string 可取值 'All'、'User'、'Group' 和 'Role'，'All' 表示获取所有实体类型，'User' 表示只获取子账号，'Group' 表示只获取用户组，'Role' 表示只获取角色，默认取 'All'
     */
    public $EntityFilter;

    /**
     * @param integer $PolicyId 策略 id
     * @param integer $Page 页码，默认值是 1，从 1 开始
     * @param integer $Rp 每页大小，默认值是 20
     * @param string $EntityFilter 可取值 'All'、'User'、'Group' 和 'Role'，'All' 表示获取所有实体类型，'User' 表示只获取子账号，'Group' 表示只获取用户组，'Role' 表示只获取角色，默认取 'All'
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("EntityFilter",$param) and $param["EntityFilter"] !== null) {
            $this->EntityFilter = $param["EntityFilter"];
        }
    }
}
