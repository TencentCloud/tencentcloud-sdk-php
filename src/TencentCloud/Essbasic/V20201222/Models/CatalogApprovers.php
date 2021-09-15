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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目录流程参与者
 *
 * @method string getFlowId() 获取流程ID
 * @method void setFlowId(string $FlowId) 设置流程ID
 * @method array getApprovers() 获取参与者列表
 * @method void setApprovers(array $Approvers) 设置参与者列表
 */
class CatalogApprovers extends AbstractModel
{
    /**
     * @var string 流程ID
     */
    public $FlowId;

    /**
     * @var array 参与者列表
     */
    public $Approvers;

    /**
     * @param string $FlowId 流程ID
     * @param array $Approvers 参与者列表
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new FlowApproverInfo();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }
    }
}
