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
 * CC拦截事件
 *
 * @method string getClientIp() 获取客户端ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIp(string $ClientIp) 设置客户端ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInterceptNum() 获取拦截次数/min
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterceptNum(integer $InterceptNum) 设置拦截次数/min
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInterceptTime() 获取速拦截时间，分钟时间/min,单位为s
 * @method void setInterceptTime(integer $InterceptTime) 设置速拦截时间，分钟时间/min,单位为s
 */
class CCInterceptEvent extends AbstractModel
{
    /**
     * @var string 客户端ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIp;

    /**
     * @var integer 拦截次数/min
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterceptNum;

    /**
     * @var integer 速拦截时间，分钟时间/min,单位为s
     */
    public $InterceptTime;

    /**
     * @param string $ClientIp 客户端ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InterceptNum 拦截次数/min
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InterceptTime 速拦截时间，分钟时间/min,单位为s
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

        if (array_key_exists("InterceptNum",$param) and $param["InterceptNum"] !== null) {
            $this->InterceptNum = $param["InterceptNum"];
        }

        if (array_key_exists("InterceptTime",$param) and $param["InterceptTime"] !== null) {
            $this->InterceptTime = $param["InterceptTime"];
        }
    }
}
