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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlowLog请求参数结构体
 *
 * @method string getVpcId() 获取私用网络唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。该接口不支持拉取CCN类型的流日志，所以该字段为必选。
 * @method void setVpcId(string $VpcId) 设置私用网络唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。该接口不支持拉取CCN类型的流日志，所以该字段为必选。
 * @method string getFlowLogId() 获取流日志唯一ID。可通过[CreateFlowLog](https://cloud.tencent.com/document/product/215/35015)接口创建；可通过[DescribeFlowLogs](https://cloud.tencent.com/document/product/215/35012)接口获取；
 * @method void setFlowLogId(string $FlowLogId) 设置流日志唯一ID。可通过[CreateFlowLog](https://cloud.tencent.com/document/product/215/35015)接口创建；可通过[DescribeFlowLogs](https://cloud.tencent.com/document/product/215/35012)接口获取；
 */
class DescribeFlowLogRequest extends AbstractModel
{
    /**
     * @var string 私用网络唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。该接口不支持拉取CCN类型的流日志，所以该字段为必选。
     */
    public $VpcId;

    /**
     * @var string 流日志唯一ID。可通过[CreateFlowLog](https://cloud.tencent.com/document/product/215/35015)接口创建；可通过[DescribeFlowLogs](https://cloud.tencent.com/document/product/215/35012)接口获取；
     */
    public $FlowLogId;

    /**
     * @param string $VpcId 私用网络唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。该接口不支持拉取CCN类型的流日志，所以该字段为必选。
     * @param string $FlowLogId 流日志唯一ID。可通过[CreateFlowLog](https://cloud.tencent.com/document/product/215/35015)接口创建；可通过[DescribeFlowLogs](https://cloud.tencent.com/document/product/215/35012)接口获取；
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
            $this->FlowLogId = $param["FlowLogId"];
        }
    }
}
