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
namespace TencentCloud\Bpaas\V20181217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OutApproveBpaasApplication请求参数结构体
 *
 * @method integer getStatus() 获取状态  1:通过  2:拒绝
 * @method void setStatus(integer $Status) 设置状态  1:通过  2:拒绝
 * @method integer getApproveId() 获取审批单id
 * @method void setApproveId(integer $ApproveId) 设置审批单id
 * @method string getMsg() 获取审批意见
 * @method void setMsg(string $Msg) 设置审批意见
 */
class OutApproveBpaasApplicationRequest extends AbstractModel
{
    /**
     * @var integer 状态  1:通过  2:拒绝
     */
    public $Status;

    /**
     * @var integer 审批单id
     */
    public $ApproveId;

    /**
     * @var string 审批意见
     */
    public $Msg;

    /**
     * @param integer $Status 状态  1:通过  2:拒绝
     * @param integer $ApproveId 审批单id
     * @param string $Msg 审批意见
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApproveId",$param) and $param["ApproveId"] !== null) {
            $this->ApproveId = $param["ApproveId"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }
    }
}
