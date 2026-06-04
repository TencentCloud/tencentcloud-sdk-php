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
 * 分享链接信息(详情查询返回，用户不可修改部分；access_control 用户可修改部分由 ModifyApp 承载)
 *
 * @method AppShareAccessControl getAccessControl() 获取当前生效的访问控制配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessControl(AppShareAccessControl $AccessControl) 设置当前生效的访问控制配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShareUrl() 获取分享URL
 * @method void setShareUrl(string $ShareUrl) 设置分享URL
 */
class AppShareURLInfo extends AbstractModel
{
    /**
     * @var AppShareAccessControl 当前生效的访问控制配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessControl;

    /**
     * @var string 分享URL
     */
    public $ShareUrl;

    /**
     * @param AppShareAccessControl $AccessControl 当前生效的访问控制配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShareUrl 分享URL
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
        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new AppShareAccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }

        if (array_key_exists("ShareUrl",$param) and $param["ShareUrl"] !== null) {
            $this->ShareUrl = $param["ShareUrl"];
        }
    }
}
