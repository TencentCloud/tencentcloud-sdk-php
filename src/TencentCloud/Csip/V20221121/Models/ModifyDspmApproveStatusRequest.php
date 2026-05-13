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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmApproveStatus请求参数结构体
 *
 * @method string getOrderId() 获取申请单id
 * @method void setOrderId(string $OrderId) 设置申请单id
 * @method integer getStatus() 获取状态。1-通过 2-拒绝
 * @method void setStatus(integer $Status) 设置状态。1-通过 2-拒绝
 * @method string getComment() 获取审批信息
 * @method void setComment(string $Comment) 设置审批信息
 */
class ModifyDspmApproveStatusRequest extends AbstractModel
{
    /**
     * @var string 申请单id
     */
    public $OrderId;

    /**
     * @var integer 状态。1-通过 2-拒绝
     */
    public $Status;

    /**
     * @var string 审批信息
     */
    public $Comment;

    /**
     * @param string $OrderId 申请单id
     * @param integer $Status 状态。1-通过 2-拒绝
     * @param string $Comment 审批信息
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
