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
 * 知识库操作权限信息
 *
 * @method boolean getCanDelete() 获取<p>是否可删除</p>
 * @method void setCanDelete(boolean $CanDelete) 设置<p>是否可删除</p>
 * @method boolean getCanEdit() 获取<p>是否可编辑</p>
 * @method void setCanEdit(boolean $CanEdit) 设置<p>是否可编辑</p>
 * @method boolean getCanView() 获取<p>是否可查看</p>
 * @method void setCanView(boolean $CanView) 设置<p>是否可查看</p>
 */
class KBPermission extends AbstractModel
{
    /**
     * @var boolean <p>是否可删除</p>
     */
    public $CanDelete;

    /**
     * @var boolean <p>是否可编辑</p>
     */
    public $CanEdit;

    /**
     * @var boolean <p>是否可查看</p>
     */
    public $CanView;

    /**
     * @param boolean $CanDelete <p>是否可删除</p>
     * @param boolean $CanEdit <p>是否可编辑</p>
     * @param boolean $CanView <p>是否可查看</p>
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
        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }

        if (array_key_exists("CanEdit",$param) and $param["CanEdit"] !== null) {
            $this->CanEdit = $param["CanEdit"];
        }

        if (array_key_exists("CanView",$param) and $param["CanView"] !== null) {
            $this->CanView = $param["CanView"];
        }
    }
}
