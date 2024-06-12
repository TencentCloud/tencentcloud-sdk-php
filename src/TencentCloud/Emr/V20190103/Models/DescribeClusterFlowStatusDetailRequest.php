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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterFlowStatusDetail请求参数结构体
 *
 * @method string getInstanceId() 获取EMR实例ID
 * @method void setInstanceId(string $InstanceId) 设置EMR实例ID
 * @method FlowParam getFlowParam() 获取流程相关参数
 * @method void setFlowParam(FlowParam $FlowParam) 设置流程相关参数
 * @method boolean getNeedExtraDetail() 获取是否返回任务额外信息
默认: false
 * @method void setNeedExtraDetail(boolean $NeedExtraDetail) 设置是否返回任务额外信息
默认: false
 */
class DescribeClusterFlowStatusDetailRequest extends AbstractModel
{
    /**
     * @var string EMR实例ID
     */
    public $InstanceId;

    /**
     * @var FlowParam 流程相关参数
     */
    public $FlowParam;

    /**
     * @var boolean 是否返回任务额外信息
默认: false
     */
    public $NeedExtraDetail;

    /**
     * @param string $InstanceId EMR实例ID
     * @param FlowParam $FlowParam 流程相关参数
     * @param boolean $NeedExtraDetail 是否返回任务额外信息
默认: false
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FlowParam",$param) and $param["FlowParam"] !== null) {
            $this->FlowParam = new FlowParam();
            $this->FlowParam->deserialize($param["FlowParam"]);
        }

        if (array_key_exists("NeedExtraDetail",$param) and $param["NeedExtraDetail"] !== null) {
            $this->NeedExtraDetail = $param["NeedExtraDetail"];
        }
    }
}
