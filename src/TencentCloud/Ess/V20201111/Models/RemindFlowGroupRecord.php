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
 * 合同组催办接口返回的详细信息。
 *
 * @method array getFlowIds() 获取<p>对应签署人出现的合同列表</p>
 * @method void setFlowIds(array $FlowIds) 设置<p>对应签署人出现的合同列表</p>
 * @method array getFlowNames() 获取<p>对应签署人出现的合同名</p>
 * @method void setFlowNames(array $FlowNames) 设置<p>对应签署人出现的合同名</p>
 * @method string getApproverName() 获取<p>签署人姓名</p>
 * @method void setApproverName(string $ApproverName) 设置<p>签署人姓名</p>
 * @method string getMobile() 获取<p>签署人手机号</p>
 * @method void setMobile(string $Mobile) 设置<p>签署人手机号</p>
 * @method array getRemindMessageList() 获取<p>催办合同组下签署人维度详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemindMessageList(array $RemindMessageList) 设置<p>催办合同组下签署人维度详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RemindFlowGroupRecord extends AbstractModel
{
    /**
     * @var array <p>对应签署人出现的合同列表</p>
     */
    public $FlowIds;

    /**
     * @var array <p>对应签署人出现的合同名</p>
     */
    public $FlowNames;

    /**
     * @var string <p>签署人姓名</p>
     */
    public $ApproverName;

    /**
     * @var string <p>签署人手机号</p>
     */
    public $Mobile;

    /**
     * @var array <p>催办合同组下签署人维度详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemindMessageList;

    /**
     * @param array $FlowIds <p>对应签署人出现的合同列表</p>
     * @param array $FlowNames <p>对应签署人出现的合同名</p>
     * @param string $ApproverName <p>签署人姓名</p>
     * @param string $Mobile <p>签署人手机号</p>
     * @param array $RemindMessageList <p>催办合同组下签署人维度详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("FlowNames",$param) and $param["FlowNames"] !== null) {
            $this->FlowNames = $param["FlowNames"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("RemindMessageList",$param) and $param["RemindMessageList"] !== null) {
            $this->RemindMessageList = [];
            foreach ($param["RemindMessageList"] as $key => $value){
                $obj = new RemindFlowGroupDetail();
                $obj->deserialize($value);
                array_push($this->RemindMessageList, $obj);
            }
        }
    }
}
