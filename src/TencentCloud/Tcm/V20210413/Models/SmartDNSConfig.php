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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能DNS配置
 *
 * @method boolean getIstioMetaDNSCapture() 获取开启DNS代理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIstioMetaDNSCapture(boolean $IstioMetaDNSCapture) 设置开启DNS代理
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIstioMetaDNSAutoAllocate() 获取开启自动地址分配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIstioMetaDNSAutoAllocate(boolean $IstioMetaDNSAutoAllocate) 设置开启自动地址分配
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartDNSConfig extends AbstractModel
{
    /**
     * @var boolean 开启DNS代理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IstioMetaDNSCapture;

    /**
     * @var boolean 开启自动地址分配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IstioMetaDNSAutoAllocate;

    /**
     * @param boolean $IstioMetaDNSCapture 开启DNS代理
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IstioMetaDNSAutoAllocate 开启自动地址分配
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
        if (array_key_exists("IstioMetaDNSCapture",$param) and $param["IstioMetaDNSCapture"] !== null) {
            $this->IstioMetaDNSCapture = $param["IstioMetaDNSCapture"];
        }

        if (array_key_exists("IstioMetaDNSAutoAllocate",$param) and $param["IstioMetaDNSAutoAllocate"] !== null) {
            $this->IstioMetaDNSAutoAllocate = $param["IstioMetaDNSAutoAllocate"];
        }
    }
}
