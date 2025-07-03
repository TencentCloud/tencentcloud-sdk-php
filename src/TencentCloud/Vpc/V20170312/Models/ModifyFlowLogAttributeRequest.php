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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFlowLogAttribute请求参数结构体
 *
 * @method string getFlowLogId() 获取流日志唯一ID。可通过[CreateFlowLog](https://cloud.tencent.com/document/product/215/35015)接口创建；可通过[DescribeFlowLogs](https://cloud.tencent.com/document/product/215/35012)接口获取。
 * @method void setFlowLogId(string $FlowLogId) 设置流日志唯一ID。可通过[CreateFlowLog](https://cloud.tencent.com/document/product/215/35015)接口创建；可通过[DescribeFlowLogs](https://cloud.tencent.com/document/product/215/35012)接口获取。
 * @method string getVpcId() 获取私用网络唯一ID。修改云联网流日志属性时可不填，其他流日志类型必填。
 * @method void setVpcId(string $VpcId) 设置私用网络唯一ID。修改云联网流日志属性时可不填，其他流日志类型必填。
 * @method string getFlowLogName() 获取流日志实例名称。长度为不超过60字符。
 * @method void setFlowLogName(string $FlowLogName) 设置流日志实例名称。长度为不超过60字符。
 * @method string getFlowLogDescription() 获取流日志实例描述。长度为不超过512个字符。
 * @method void setFlowLogDescription(string $FlowLogDescription) 设置流日志实例描述。长度为不超过512个字符。
 */
class ModifyFlowLogAttributeRequest extends AbstractModel
{
    /**
     * @var string 流日志唯一ID。可通过[CreateFlowLog](https://cloud.tencent.com/document/product/215/35015)接口创建；可通过[DescribeFlowLogs](https://cloud.tencent.com/document/product/215/35012)接口获取。
     */
    public $FlowLogId;

    /**
     * @var string 私用网络唯一ID。修改云联网流日志属性时可不填，其他流日志类型必填。
     */
    public $VpcId;

    /**
     * @var string 流日志实例名称。长度为不超过60字符。
     */
    public $FlowLogName;

    /**
     * @var string 流日志实例描述。长度为不超过512个字符。
     */
    public $FlowLogDescription;

    /**
     * @param string $FlowLogId 流日志唯一ID。可通过[CreateFlowLog](https://cloud.tencent.com/document/product/215/35015)接口创建；可通过[DescribeFlowLogs](https://cloud.tencent.com/document/product/215/35012)接口获取。
     * @param string $VpcId 私用网络唯一ID。修改云联网流日志属性时可不填，其他流日志类型必填。
     * @param string $FlowLogName 流日志实例名称。长度为不超过60字符。
     * @param string $FlowLogDescription 流日志实例描述。长度为不超过512个字符。
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
        if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
            $this->FlowLogId = $param["FlowLogId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FlowLogName",$param) and $param["FlowLogName"] !== null) {
            $this->FlowLogName = $param["FlowLogName"];
        }

        if (array_key_exists("FlowLogDescription",$param) and $param["FlowLogDescription"] !== null) {
            $this->FlowLogDescription = $param["FlowLogDescription"];
        }
    }
}
