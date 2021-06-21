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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Anycast高防套餐详情
 *
 * @method integer getIpCount() 获取套餐IP数量
 * @method void setIpCount(integer $IpCount) 设置套餐IP数量
 * @method integer getAutoRenewFlag() 获取自动续费标记
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记
 * @method string getCurDeadline() 获取当前到期时间
 * @method void setCurDeadline(string $CurDeadline) 设置当前到期时间
 */
class EipAddressPackRelation extends AbstractModel
{
    /**
     * @var integer 套餐IP数量
     */
    public $IpCount;

    /**
     * @var integer 自动续费标记
     */
    public $AutoRenewFlag;

    /**
     * @var string 当前到期时间
     */
    public $CurDeadline;

    /**
     * @param integer $IpCount 套餐IP数量
     * @param integer $AutoRenewFlag 自动续费标记
     * @param string $CurDeadline 当前到期时间
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
        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            $this->IpCount = $param["IpCount"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }
    }
}
