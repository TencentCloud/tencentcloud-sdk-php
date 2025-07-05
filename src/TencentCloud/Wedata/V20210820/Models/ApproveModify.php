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
 * 修改审批单状态
 *
 * @method string getApproveId() 获取审批单id
 * @method void setApproveId(string $ApproveId) 设置审批单id
 * @method boolean getSuccess() 获取是否修改成功
 * @method void setSuccess(boolean $Success) 设置是否修改成功
 */
class ApproveModify extends AbstractModel
{
    /**
     * @var string 审批单id
     */
    public $ApproveId;

    /**
     * @var boolean 是否修改成功
     */
    public $Success;

    /**
     * @param string $ApproveId 审批单id
     * @param boolean $Success 是否修改成功
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
        if (array_key_exists("ApproveId",$param) and $param["ApproveId"] !== null) {
            $this->ApproveId = $param["ApproveId"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }
    }
}
