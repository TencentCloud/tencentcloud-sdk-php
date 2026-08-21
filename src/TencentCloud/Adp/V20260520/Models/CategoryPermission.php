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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CategoryPermission
 *
 * @method boolean getCanAdd() 获取<p>当前用户是否可新增子分类</p>
 * @method void setCanAdd(boolean $CanAdd) 设置<p>当前用户是否可新增子分类</p>
 * @method boolean getCanDelete() 获取<p>当前用户是否可删除该分类</p>
 * @method void setCanDelete(boolean $CanDelete) 设置<p>当前用户是否可删除该分类</p>
 * @method boolean getCanEdit() 获取<p>当前用户是否可编辑该分类</p>
 * @method void setCanEdit(boolean $CanEdit) 设置<p>当前用户是否可编辑该分类</p>
 */
class CategoryPermission extends AbstractModel
{
    /**
     * @var boolean <p>当前用户是否可新增子分类</p>
     */
    public $CanAdd;

    /**
     * @var boolean <p>当前用户是否可删除该分类</p>
     */
    public $CanDelete;

    /**
     * @var boolean <p>当前用户是否可编辑该分类</p>
     */
    public $CanEdit;

    /**
     * @param boolean $CanAdd <p>当前用户是否可新增子分类</p>
     * @param boolean $CanDelete <p>当前用户是否可删除该分类</p>
     * @param boolean $CanEdit <p>当前用户是否可编辑该分类</p>
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
        if (array_key_exists("CanAdd",$param) and $param["CanAdd"] !== null) {
            $this->CanAdd = $param["CanAdd"];
        }

        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }

        if (array_key_exists("CanEdit",$param) and $param["CanEdit"] !== null) {
            $this->CanEdit = $param["CanEdit"];
        }
    }
}
