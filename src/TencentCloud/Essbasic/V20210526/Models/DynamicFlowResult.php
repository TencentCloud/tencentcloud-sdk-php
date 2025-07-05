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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态合同补充签署人结果
 *
 * @method string getFlowId() 获取合同流程ID，为32位字符串。 建议开发者妥善保存此流程ID，以便于顺利进行后续操作。 [点击查看FlowId在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png)	
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。 建议开发者妥善保存此流程ID，以便于顺利进行后续操作。 [点击查看FlowId在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png)	
 * @method array getDynamicFlowApproverList() 获取动态合同签署人补充结果信息列表
 * @method void setDynamicFlowApproverList(array $DynamicFlowApproverList) 设置动态合同签署人补充结果信息列表
 */
class DynamicFlowResult extends AbstractModel
{
    /**
     * @var string 合同流程ID，为32位字符串。 建议开发者妥善保存此流程ID，以便于顺利进行后续操作。 [点击查看FlowId在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png)	
     */
    public $FlowId;

    /**
     * @var array 动态合同签署人补充结果信息列表
     */
    public $DynamicFlowApproverList;

    /**
     * @param string $FlowId 合同流程ID，为32位字符串。 建议开发者妥善保存此流程ID，以便于顺利进行后续操作。 [点击查看FlowId在控制台上的位置](https://qcloudimg.tencent-cloud.cn/raw/05af26573d5106763b4cfbb9f7c64b41.png)	
     * @param array $DynamicFlowApproverList 动态合同签署人补充结果信息列表
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

        if (array_key_exists("DynamicFlowApproverList",$param) and $param["DynamicFlowApproverList"] !== null) {
            $this->DynamicFlowApproverList = [];
            foreach ($param["DynamicFlowApproverList"] as $key => $value){
                $obj = new DynamicFlowApproverResult();
                $obj->deserialize($value);
                array_push($this->DynamicFlowApproverList, $obj);
            }
        }
    }
}
