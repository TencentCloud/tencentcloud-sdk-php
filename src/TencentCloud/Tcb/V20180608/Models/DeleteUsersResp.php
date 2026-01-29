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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除tcb用户返回值
 *
 * @method integer getSuccessCount() 获取成功个数
 * @method void setSuccessCount(integer $SuccessCount) 设置成功个数
 * @method integer getFailedCount() 获取失败个数
 * @method void setFailedCount(integer $FailedCount) 设置失败个数
 */
class DeleteUsersResp extends AbstractModel
{
    /**
     * @var integer 成功个数
     */
    public $SuccessCount;

    /**
     * @var integer 失败个数
     */
    public $FailedCount;

    /**
     * @param integer $SuccessCount 成功个数
     * @param integer $FailedCount 失败个数
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
        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }
    }
}
