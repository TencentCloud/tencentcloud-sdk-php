<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源调度-公平调度器的全局配置
 *
 * @method integer getUserMaxAppsDefault() 获取对应与页面的<p>程序上限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserMaxAppsDefault(integer $UserMaxAppsDefault) 设置对应与页面的<p>程序上限</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class FairGlobalConfig extends AbstractModel
{
    /**
     * @var integer 对应与页面的<p>程序上限</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserMaxAppsDefault;

    /**
     * @param integer $UserMaxAppsDefault 对应与页面的<p>程序上限</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UserMaxAppsDefault",$param) and $param["UserMaxAppsDefault"] !== null) {
            $this->UserMaxAppsDefault = $param["UserMaxAppsDefault"];
        }
    }
}
