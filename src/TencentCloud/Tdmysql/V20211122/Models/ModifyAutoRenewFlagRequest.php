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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoRenewFlag请求参数结构体
 *
 * @method array getInstanceIds() 获取需要修改的实例列表
 * @method void setInstanceIds(array $InstanceIds) 设置需要修改的实例列表
 * @method integer getAutoRenewFlag() 获取1表示开启自动续费，0为关闭自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置1表示开启自动续费，0为关闭自动续费
 */
class ModifyAutoRenewFlagRequest extends AbstractModel
{
    /**
     * @var array 需要修改的实例列表
     */
    public $InstanceIds;

    /**
     * @var integer 1表示开启自动续费，0为关闭自动续费
     */
    public $AutoRenewFlag;

    /**
     * @param array $InstanceIds 需要修改的实例列表
     * @param integer $AutoRenewFlag 1表示开启自动续费，0为关闭自动续费
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
