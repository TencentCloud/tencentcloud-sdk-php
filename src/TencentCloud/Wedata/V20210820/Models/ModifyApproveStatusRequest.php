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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApproveStatus请求参数结构体
 *
 * @method array getApproveIds() 获取审批单ids
 * @method void setApproveIds(array $ApproveIds) 设置审批单ids
 * @method string getRemark() 获取审批备注
 * @method void setRemark(string $Remark) 设置审批备注
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 */
class ModifyApproveStatusRequest extends AbstractModel
{
    /**
     * @var array 审批单ids
     */
    public $ApproveIds;

    /**
     * @var string 审批备注
     */
    public $Remark;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @param array $ApproveIds 审批单ids
     * @param string $Remark 审批备注
     * @param string $Status 状态
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
        if (array_key_exists("ApproveIds",$param) and $param["ApproveIds"] !== null) {
            $this->ApproveIds = $param["ApproveIds"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
