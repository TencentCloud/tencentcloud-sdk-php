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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 催办合同组下签署人维度详细信息。
 *
 * @method integer getApproverOrder() 获取<p>该签署人在合同中的签署顺序</p>
 * @method void setApproverOrder(integer $ApproverOrder) 设置<p>该签署人在合同中的签署顺序</p>
 * @method string getSignId() 获取<p>签署人对应的签署id，签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。</p><p>在<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowSignUrl/">CreateFlowSignUrl</a>、<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateBatchQuickSignUrl/">CreateBatchQuickSignUrl</a>等接口生成签署链接时，可以通过查询合同流程的详情信息接口 <a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a> 获取签署人的Signld，然后可以将此值传入，为该签署人创建签署链接。这样可以避免重复传输姓名、手机号、证件号等其他信息。</p>
 * @method void setSignId(string $SignId) 设置<p>签署人对应的签署id，签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。</p><p>在<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowSignUrl/">CreateFlowSignUrl</a>、<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateBatchQuickSignUrl/">CreateBatchQuickSignUrl</a>等接口生成签署链接时，可以通过查询合同流程的详情信息接口 <a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a> 获取签署人的Signld，然后可以将此值传入，为该签署人创建签署链接。这样可以避免重复传输姓名、手机号、证件号等其他信息。</p>
 * @method integer getStatus() 获取<p>催办状态</p><p>枚举值：</p><ul><li>0： 成功</li><li>2： 无需催办</li><li>5： 超过次数限制</li></ul>
 * @method void setStatus(integer $Status) 设置<p>催办状态</p><p>枚举值：</p><ul><li>0： 成功</li><li>2： 无需催办</li><li>5： 超过次数限制</li></ul>
 * @method string getReason() 获取<p>描述当前催办结果的原因</p>
 * @method void setReason(string $Reason) 设置<p>描述当前催办结果的原因</p>
 */
class RemindFlowGroupDetail extends AbstractModel
{
    /**
     * @var integer <p>该签署人在合同中的签署顺序</p>
     */
    public $ApproverOrder;

    /**
     * @var string <p>签署人对应的签署id，签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。</p><p>在<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowSignUrl/">CreateFlowSignUrl</a>、<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateBatchQuickSignUrl/">CreateBatchQuickSignUrl</a>等接口生成签署链接时，可以通过查询合同流程的详情信息接口 <a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a> 获取签署人的Signld，然后可以将此值传入，为该签署人创建签署链接。这样可以避免重复传输姓名、手机号、证件号等其他信息。</p>
     */
    public $SignId;

    /**
     * @var integer <p>催办状态</p><p>枚举值：</p><ul><li>0： 成功</li><li>2： 无需催办</li><li>5： 超过次数限制</li></ul>
     */
    public $Status;

    /**
     * @var string <p>描述当前催办结果的原因</p>
     */
    public $Reason;

    /**
     * @param integer $ApproverOrder <p>该签署人在合同中的签署顺序</p>
     * @param string $SignId <p>签署人对应的签署id，签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。</p><p>在<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowSignUrl/">CreateFlowSignUrl</a>、<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateBatchQuickSignUrl/">CreateBatchQuickSignUrl</a>等接口生成签署链接时，可以通过查询合同流程的详情信息接口 <a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a> 获取签署人的Signld，然后可以将此值传入，为该签署人创建签署链接。这样可以避免重复传输姓名、手机号、证件号等其他信息。</p>
     * @param integer $Status <p>催办状态</p><p>枚举值：</p><ul><li>0： 成功</li><li>2： 无需催办</li><li>5： 超过次数限制</li></ul>
     * @param string $Reason <p>描述当前催办结果的原因</p>
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
        if (array_key_exists("ApproverOrder",$param) and $param["ApproverOrder"] !== null) {
            $this->ApproverOrder = $param["ApproverOrder"];
        }

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
