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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBatchCustomRuleStatus请求参数结构体
 *
 * @method integer getId() 获取批量Id
 * @method void setId(integer $Id) 设置批量Id
 * @method integer getStatus() 获取开关状态 0-关、1-开

 * @method void setStatus(integer $Status) 设置开关状态 0-关、1-开
 */
class ModifyBatchCustomRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer 批量Id
     */
    public $Id;

    /**
     * @var integer 开关状态 0-关、1-开

     */
    public $Status;

    /**
     * @param integer $Id 批量Id
     * @param integer $Status 开关状态 0-关、1-开
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
