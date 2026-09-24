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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户标识项(目录MenuId+登录账号UserId)，用于以(菜单目录、登录账号)代替账号Id标识账户
 *
 * @method integer getMenuId() 获取<p>Comment: 账号所在目录ID(MenuId)，与accounts表menu_id一致，用于同一登录账号在不同目录下去重;Required:true</p>
 * @method void setMenuId(integer $MenuId) 设置<p>Comment: 账号所在目录ID(MenuId)，与accounts表menu_id一致，用于同一登录账号在不同目录下去重;Required:true</p>
 * @method string getUserId() 获取<p>Comment: 登录账号(UserId)，对应DescribeLocalAccount -&gt; UserId;Required:true</p>
 * @method void setUserId(string $UserId) 设置<p>Comment: 登录账号(UserId)，对应DescribeLocalAccount -&gt; UserId;Required:true</p>
 */
class AccountUserIdItem extends AbstractModel
{
    /**
     * @var integer <p>Comment: 账号所在目录ID(MenuId)，与accounts表menu_id一致，用于同一登录账号在不同目录下去重;Required:true</p>
     */
    public $MenuId;

    /**
     * @var string <p>Comment: 登录账号(UserId)，对应DescribeLocalAccount -&gt; UserId;Required:true</p>
     */
    public $UserId;

    /**
     * @param integer $MenuId <p>Comment: 账号所在目录ID(MenuId)，与accounts表menu_id一致，用于同一登录账号在不同目录下去重;Required:true</p>
     * @param string $UserId <p>Comment: 登录账号(UserId)，对应DescribeLocalAccount -&gt; UserId;Required:true</p>
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
        if (array_key_exists("MenuId",$param) and $param["MenuId"] !== null) {
            $this->MenuId = $param["MenuId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
