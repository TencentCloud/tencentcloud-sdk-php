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
 * 申诉中的配置 - 记录各配置项是否在申诉中
 *
 * @method boolean getAvatarInAppeal() 获取头像是否在申诉中
 * @method void setAvatarInAppeal(boolean $AvatarInAppeal) 设置头像是否在申诉中
 * @method boolean getFallbackReplyInAppeal() 获取兜底回复语是否在申诉中
 * @method void setFallbackReplyInAppeal(boolean $FallbackReplyInAppeal) 设置兜底回复语是否在申诉中
 * @method boolean getGreetingInAppeal() 获取欢迎语是否在申诉中
 * @method void setGreetingInAppeal(boolean $GreetingInAppeal) 设置欢迎语是否在申诉中
 * @method boolean getNameInAppeal() 获取应用名称是否在申诉中
 * @method void setNameInAppeal(boolean $NameInAppeal) 设置应用名称是否在申诉中
 * @method boolean getRoleInAppeal() 获取角色描述是否在申诉中
 * @method void setRoleInAppeal(boolean $RoleInAppeal) 设置角色描述是否在申诉中
 */
class AppealingStatus extends AbstractModel
{
    /**
     * @var boolean 头像是否在申诉中
     */
    public $AvatarInAppeal;

    /**
     * @var boolean 兜底回复语是否在申诉中
     */
    public $FallbackReplyInAppeal;

    /**
     * @var boolean 欢迎语是否在申诉中
     */
    public $GreetingInAppeal;

    /**
     * @var boolean 应用名称是否在申诉中
     */
    public $NameInAppeal;

    /**
     * @var boolean 角色描述是否在申诉中
     */
    public $RoleInAppeal;

    /**
     * @param boolean $AvatarInAppeal 头像是否在申诉中
     * @param boolean $FallbackReplyInAppeal 兜底回复语是否在申诉中
     * @param boolean $GreetingInAppeal 欢迎语是否在申诉中
     * @param boolean $NameInAppeal 应用名称是否在申诉中
     * @param boolean $RoleInAppeal 角色描述是否在申诉中
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
        if (array_key_exists("AvatarInAppeal",$param) and $param["AvatarInAppeal"] !== null) {
            $this->AvatarInAppeal = $param["AvatarInAppeal"];
        }

        if (array_key_exists("FallbackReplyInAppeal",$param) and $param["FallbackReplyInAppeal"] !== null) {
            $this->FallbackReplyInAppeal = $param["FallbackReplyInAppeal"];
        }

        if (array_key_exists("GreetingInAppeal",$param) and $param["GreetingInAppeal"] !== null) {
            $this->GreetingInAppeal = $param["GreetingInAppeal"];
        }

        if (array_key_exists("NameInAppeal",$param) and $param["NameInAppeal"] !== null) {
            $this->NameInAppeal = $param["NameInAppeal"];
        }

        if (array_key_exists("RoleInAppeal",$param) and $param["RoleInAppeal"] !== null) {
            $this->RoleInAppeal = $param["RoleInAppeal"];
        }
    }
}
