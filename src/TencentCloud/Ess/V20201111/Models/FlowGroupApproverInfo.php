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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同组相关信息，指定合同组子合同和签署方的信息，用于补充动态签署人。
 *
 * @method string getFlowId() 获取合同流程ID。
 * @method void setFlowId(string $FlowId) 设置合同流程ID。
 * @method string getRecipientId() 获取签署节点ID，用于生成动态签署人链接完成领取。注：`生成动态签署人补充链接时必传。`
 * @method void setRecipientId(string $RecipientId) 设置签署节点ID，用于生成动态签署人链接完成领取。注：`生成动态签署人补充链接时必传。`
 */
class FlowGroupApproverInfo extends AbstractModel
{
    /**
     * @var string 合同流程ID。
     */
    public $FlowId;

    /**
     * @var string 签署节点ID，用于生成动态签署人链接完成领取。注：`生成动态签署人补充链接时必传。`
     */
    public $RecipientId;

    /**
     * @param string $FlowId 合同流程ID。
     * @param string $RecipientId 签署节点ID，用于生成动态签署人链接完成领取。注：`生成动态签署人补充链接时必传。`
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

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }
    }
}
