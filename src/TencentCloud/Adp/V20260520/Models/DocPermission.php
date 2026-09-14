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
 * 文档操作权限信息
 *
 * @method boolean getCanDelete() 获取<p>是否可删除</p>
 * @method void setCanDelete(boolean $CanDelete) 设置<p>是否可删除</p>
 * @method boolean getCanEdit() 获取<p>是否可编辑</p>
 * @method void setCanEdit(boolean $CanEdit) 设置<p>是否可编辑</p>
 * @method boolean getCanRestart() 获取<p>是否可重新生成</p>
 * @method void setCanRestart(boolean $CanRestart) 设置<p>是否可重新生成</p>
 * @method boolean getCanRetry() 获取<p>是否可重试</p>
 * @method void setCanRetry(boolean $CanRetry) 设置<p>是否可重试</p>
 */
class DocPermission extends AbstractModel
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
     * @var boolean <p>是否可重新生成</p>
     */
    public $CanRestart;

    /**
     * @var boolean <p>是否可重试</p>
     */
    public $CanRetry;

    /**
     * @param boolean $CanDelete <p>是否可删除</p>
     * @param boolean $CanEdit <p>是否可编辑</p>
     * @param boolean $CanRestart <p>是否可重新生成</p>
     * @param boolean $CanRetry <p>是否可重试</p>
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

        if (array_key_exists("CanRestart",$param) and $param["CanRestart"] !== null) {
            $this->CanRestart = $param["CanRestart"];
        }

        if (array_key_exists("CanRetry",$param) and $param["CanRetry"] !== null) {
            $this->CanRetry = $param["CanRetry"];
        }
    }
}
