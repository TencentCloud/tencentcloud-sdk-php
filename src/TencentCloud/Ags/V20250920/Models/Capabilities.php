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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可以添加到正在运行的容器中或从中移除的 POSIX POSIX capabilities。
 *
 * @method array getAdd() 获取<p>要添加的capabilities</p><p>取值参考：[&quot;SYS_ADMIN&quot;]</p>
 * @method void setAdd(array $Add) 设置<p>要添加的capabilities</p><p>取值参考：[&quot;SYS_ADMIN&quot;]</p>
 * @method array getDrop() 获取<p>要移除的capabilities</p><p>取值参考：[&quot;ALL&quot;]</p>
 * @method void setDrop(array $Drop) 设置<p>要移除的capabilities</p><p>取值参考：[&quot;ALL&quot;]</p>
 */
class Capabilities extends AbstractModel
{
    /**
     * @var array <p>要添加的capabilities</p><p>取值参考：[&quot;SYS_ADMIN&quot;]</p>
     */
    public $Add;

    /**
     * @var array <p>要移除的capabilities</p><p>取值参考：[&quot;ALL&quot;]</p>
     */
    public $Drop;

    /**
     * @param array $Add <p>要添加的capabilities</p><p>取值参考：[&quot;SYS_ADMIN&quot;]</p>
     * @param array $Drop <p>要移除的capabilities</p><p>取值参考：[&quot;ALL&quot;]</p>
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
        if (array_key_exists("Add",$param) and $param["Add"] !== null) {
            $this->Add = $param["Add"];
        }

        if (array_key_exists("Drop",$param) and $param["Drop"] !== null) {
            $this->Drop = $param["Drop"];
        }
    }
}
