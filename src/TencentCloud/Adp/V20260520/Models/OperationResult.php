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
 * 通用操作结果项
 *
 * @method string getId() 获取资源 ID
 * @method void setId(string $Id) 设置资源 ID
 * @method string getReason() 获取失败原因（succeeded=false 时填充）
 * @method void setReason(string $Reason) 设置失败原因（succeeded=false 时填充）
 * @method boolean getSucceeded() 获取是否成功
 * @method void setSucceeded(boolean $Succeeded) 设置是否成功
 */
class OperationResult extends AbstractModel
{
    /**
     * @var string 资源 ID
     */
    public $Id;

    /**
     * @var string 失败原因（succeeded=false 时填充）
     */
    public $Reason;

    /**
     * @var boolean 是否成功
     */
    public $Succeeded;

    /**
     * @param string $Id 资源 ID
     * @param string $Reason 失败原因（succeeded=false 时填充）
     * @param boolean $Succeeded 是否成功
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

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Succeeded",$param) and $param["Succeeded"] !== null) {
            $this->Succeeded = $param["Succeeded"];
        }
    }
}
