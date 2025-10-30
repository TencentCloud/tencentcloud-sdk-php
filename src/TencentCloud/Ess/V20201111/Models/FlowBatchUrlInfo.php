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
 * 批量签署合同相关信息，指定批量签署合同和签署方的信息，用于补充动态签署人。
 *
 * @method array getFlowBatchApproverInfos() 获取批量签署合同和签署方的信息，用于补充动态签署人。
 * @method void setFlowBatchApproverInfos(array $FlowBatchApproverInfos) 设置批量签署合同和签署方的信息，用于补充动态签署人。
 */
class FlowBatchUrlInfo extends AbstractModel
{
    /**
     * @var array 批量签署合同和签署方的信息，用于补充动态签署人。
     */
    public $FlowBatchApproverInfos;

    /**
     * @param array $FlowBatchApproverInfos 批量签署合同和签署方的信息，用于补充动态签署人。
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
        if (array_key_exists("FlowBatchApproverInfos",$param) and $param["FlowBatchApproverInfos"] !== null) {
            $this->FlowBatchApproverInfos = [];
            foreach ($param["FlowBatchApproverInfos"] as $key => $value){
                $obj = new FlowBatchApproverInfo();
                $obj->deserialize($value);
                array_push($this->FlowBatchApproverInfos, $obj);
            }
        }
    }
}
