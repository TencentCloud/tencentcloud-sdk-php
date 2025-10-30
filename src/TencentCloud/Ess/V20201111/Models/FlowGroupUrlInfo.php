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
 * 合同组相关信息，指定合同组子合同和签署方的信息，用于补充动态签署人。
 *
 * @method array getFlowGroupApproverInfos() 获取合同组子合同和签署方的信息，用于补充动态签署人。
 * @method void setFlowGroupApproverInfos(array $FlowGroupApproverInfos) 设置合同组子合同和签署方的信息，用于补充动态签署人。
 */
class FlowGroupUrlInfo extends AbstractModel
{
    /**
     * @var array 合同组子合同和签署方的信息，用于补充动态签署人。
     */
    public $FlowGroupApproverInfos;

    /**
     * @param array $FlowGroupApproverInfos 合同组子合同和签署方的信息，用于补充动态签署人。
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
        if (array_key_exists("FlowGroupApproverInfos",$param) and $param["FlowGroupApproverInfos"] !== null) {
            $this->FlowGroupApproverInfos = [];
            foreach ($param["FlowGroupApproverInfos"] as $key => $value){
                $obj = new FlowGroupApproverInfo();
                $obj->deserialize($value);
                array_push($this->FlowGroupApproverInfos, $obj);
            }
        }
    }
}
