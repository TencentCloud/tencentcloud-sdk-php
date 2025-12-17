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
namespace TencentCloud\Evt\V20250217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CompleteApproval请求参数结构体
 *
 * @method string getApprovalId() 获取<p>审批单号</p>
 * @method void setApprovalId(string $ApprovalId) 设置<p>审批单号</p>
 * @method string getNodeId() 获取<p>审批节点</p>
 * @method void setNodeId(string $NodeId) 设置<p>审批节点</p>
 * @method integer getResult() 获取<p>审批结果，1通过2拒绝</p>
 * @method void setResult(integer $Result) 设置<p>审批结果，1通过2拒绝</p>
 * @method string getOpinion() 获取<p>审批意见</p>
 * @method void setOpinion(string $Opinion) 设置<p>审批意见</p>
 * @method string getUserToken() 获取<p>审批人的身份认证Token，通过自定义角色体系回调接口分发</p><p>token信息</p>
 * @method void setUserToken(string $UserToken) 设置<p>审批人的身份认证Token，通过自定义角色体系回调接口分发</p><p>token信息</p>
 */
class CompleteApprovalRequest extends AbstractModel
{
    /**
     * @var string <p>审批单号</p>
     */
    public $ApprovalId;

    /**
     * @var string <p>审批节点</p>
     */
    public $NodeId;

    /**
     * @var integer <p>审批结果，1通过2拒绝</p>
     */
    public $Result;

    /**
     * @var string <p>审批意见</p>
     */
    public $Opinion;

    /**
     * @var string <p>审批人的身份认证Token，通过自定义角色体系回调接口分发</p><p>token信息</p>
     */
    public $UserToken;

    /**
     * @param string $ApprovalId <p>审批单号</p>
     * @param string $NodeId <p>审批节点</p>
     * @param integer $Result <p>审批结果，1通过2拒绝</p>
     * @param string $Opinion <p>审批意见</p>
     * @param string $UserToken <p>审批人的身份认证Token，通过自定义角色体系回调接口分发</p><p>token信息</p>
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
        if (array_key_exists("ApprovalId",$param) and $param["ApprovalId"] !== null) {
            $this->ApprovalId = $param["ApprovalId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Opinion",$param) and $param["Opinion"] !== null) {
            $this->Opinion = $param["Opinion"];
        }

        if (array_key_exists("UserToken",$param) and $param["UserToken"] !== null) {
            $this->UserToken = $param["UserToken"];
        }
    }
}
