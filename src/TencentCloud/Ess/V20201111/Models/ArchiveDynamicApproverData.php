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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态签署2.0合同参与人信息
 *
 * @method string getSignId() 获取签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。

可以使用签署方的唯一编号来生成签署链接（也可以通过RecipientId来生成签署链接）。
 * @method void setSignId(string $SignId) 设置签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。

可以使用签署方的唯一编号来生成签署链接（也可以通过RecipientId来生成签署链接）。
 * @method string getRecipientId() 获取签署方角色编号，签署方角色编号是用于区分同一个流程中不同签署方的唯一标识。不同的流程会出现同样的签署方角色编号。

填写控件和签署控件都与特定的角色编号关联。

 * @method void setRecipientId(string $RecipientId) 设置签署方角色编号，签署方角色编号是用于区分同一个流程中不同签署方的唯一标识。不同的流程会出现同样的签署方角色编号。

填写控件和签署控件都与特定的角色编号关联。
 */
class ArchiveDynamicApproverData extends AbstractModel
{
    /**
     * @var string 签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。

可以使用签署方的唯一编号来生成签署链接（也可以通过RecipientId来生成签署链接）。
     */
    public $SignId;

    /**
     * @var string 签署方角色编号，签署方角色编号是用于区分同一个流程中不同签署方的唯一标识。不同的流程会出现同样的签署方角色编号。

填写控件和签署控件都与特定的角色编号关联。

     */
    public $RecipientId;

    /**
     * @param string $SignId 签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。

可以使用签署方的唯一编号来生成签署链接（也可以通过RecipientId来生成签署链接）。
     * @param string $RecipientId 签署方角色编号，签署方角色编号是用于区分同一个流程中不同签署方的唯一标识。不同的流程会出现同样的签署方角色编号。

填写控件和签署控件都与特定的角色编号关联。
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
        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }
    }
}
