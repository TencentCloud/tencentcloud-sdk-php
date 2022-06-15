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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Web拦截事件
 *
 * @method string getClientIp() 获取客户端ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIp(string $ClientIp) 设置客户端ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackUrl() 获取攻击URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackUrl(string $AttackUrl) 设置攻击URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackTime() 获取攻击时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackTime(integer $AttackTime) 设置攻击时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebAttackEvent extends AbstractModel
{
    /**
     * @var string 客户端ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIp;

    /**
     * @var string 攻击URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackUrl;

    /**
     * @var integer 攻击时间 单位为s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackTime;

    /**
     * @param string $ClientIp 客户端ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackUrl 攻击URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackTime 攻击时间 单位为s
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("AttackUrl",$param) and $param["AttackUrl"] !== null) {
            $this->AttackUrl = $param["AttackUrl"];
        }

        if (array_key_exists("AttackTime",$param) and $param["AttackTime"] !== null) {
            $this->AttackTime = $param["AttackTime"];
        }
    }
}
