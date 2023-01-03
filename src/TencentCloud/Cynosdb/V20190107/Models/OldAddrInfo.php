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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库地址
 *
 * @method string getVip() 获取IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVport() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVport(integer $Vport) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReturnTime() 获取期望执行回收时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnTime(string $ReturnTime) 设置期望执行回收时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class OldAddrInfo extends AbstractModel
{
    /**
     * @var string IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vport;

    /**
     * @var string 期望执行回收时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnTime;

    /**
     * @param string $Vip IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Vport 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReturnTime 期望执行回收时间
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("ReturnTime",$param) and $param["ReturnTime"] !== null) {
            $this->ReturnTime = $param["ReturnTime"];
        }
    }
}
