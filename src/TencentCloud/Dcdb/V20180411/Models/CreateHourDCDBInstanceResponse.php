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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHourDCDBInstance返回参数结构体
 *
 * @method array getInstanceIds() 获取订单对应的实例 ID 列表，如果此处没有返回实例 ID，可以通过订单查询接口获取。还可通过实例查询接口查询实例是否创建完成。
 * @method void setInstanceIds(array $InstanceIds) 设置订单对应的实例 ID 列表，如果此处没有返回实例 ID，可以通过订单查询接口获取。还可通过实例查询接口查询实例是否创建完成。
 * @method integer getFlowId() 获取流程id，可以根据流程id查询创建进度
 * @method void setFlowId(integer $FlowId) 设置流程id，可以根据流程id查询创建进度
 * @method string getDealName() 获取订单号。可以据此调用 DescribeOrders
 查询订单详细信息，或在支付失败时调用用户账号相关接口进行支付。
 * @method void setDealName(string $DealName) 设置订单号。可以据此调用 DescribeOrders
 查询订单详细信息，或在支付失败时调用用户账号相关接口进行支付。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateHourDCDBInstanceResponse extends AbstractModel
{
    /**
     * @var array 订单对应的实例 ID 列表，如果此处没有返回实例 ID，可以通过订单查询接口获取。还可通过实例查询接口查询实例是否创建完成。
     */
    public $InstanceIds;

    /**
     * @var integer 流程id，可以根据流程id查询创建进度
     */
    public $FlowId;

    /**
     * @var string 订单号。可以据此调用 DescribeOrders
 查询订单详细信息，或在支付失败时调用用户账号相关接口进行支付。
     */
    public $DealName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $InstanceIds 订单对应的实例 ID 列表，如果此处没有返回实例 ID，可以通过订单查询接口获取。还可通过实例查询接口查询实例是否创建完成。
     * @param integer $FlowId 流程id，可以根据流程id查询创建进度
     * @param string $DealName 订单号。可以据此调用 DescribeOrders
 查询订单详细信息，或在支付失败时调用用户账号相关接口进行支付。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
