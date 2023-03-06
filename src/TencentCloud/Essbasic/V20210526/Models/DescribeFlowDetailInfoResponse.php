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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlowDetailInfo返回参数结构体
 *
 * @method string getApplicationId() 获取第三方平台应用号Id
 * @method void setApplicationId(string $ApplicationId) 设置第三方平台应用号Id
 * @method string getProxyOrganizationOpenId() 获取第三方平台子客企业OpenId
 * @method void setProxyOrganizationOpenId(string $ProxyOrganizationOpenId) 设置第三方平台子客企业OpenId
 * @method array getFlowInfo() 获取合同(签署流程)的具体详细描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowInfo(array $FlowInfo) 设置合同(签署流程)的具体详细描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowGroupId() 获取合同组编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowGroupId(string $FlowGroupId) 设置合同组编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowGroupName() 获取合同组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowGroupName(string $FlowGroupName) 设置合同组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFlowDetailInfoResponse extends AbstractModel
{
    /**
     * @var string 第三方平台应用号Id
     */
    public $ApplicationId;

    /**
     * @var string 第三方平台子客企业OpenId
     */
    public $ProxyOrganizationOpenId;

    /**
     * @var array 合同(签署流程)的具体详细描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowInfo;

    /**
     * @var string 合同组编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowGroupId;

    /**
     * @var string 合同组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowGroupName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ApplicationId 第三方平台应用号Id
     * @param string $ProxyOrganizationOpenId 第三方平台子客企业OpenId
     * @param array $FlowInfo 合同(签署流程)的具体详细描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowGroupId 合同组编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowGroupName 合同组名称
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ProxyOrganizationOpenId",$param) and $param["ProxyOrganizationOpenId"] !== null) {
            $this->ProxyOrganizationOpenId = $param["ProxyOrganizationOpenId"];
        }

        if (array_key_exists("FlowInfo",$param) and $param["FlowInfo"] !== null) {
            $this->FlowInfo = [];
            foreach ($param["FlowInfo"] as $key => $value){
                $obj = new FlowDetailInfo();
                $obj->deserialize($value);
                array_push($this->FlowInfo, $obj);
            }
        }

        if (array_key_exists("FlowGroupId",$param) and $param["FlowGroupId"] !== null) {
            $this->FlowGroupId = $param["FlowGroupId"];
        }

        if (array_key_exists("FlowGroupName",$param) and $param["FlowGroupName"] !== null) {
            $this->FlowGroupName = $param["FlowGroupName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
