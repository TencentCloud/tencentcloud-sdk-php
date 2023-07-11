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
 * CreateFlowGroupByTemplates请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填。支持填入集团子公司经办人 userId 代发合同
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填。支持填入集团子公司经办人 userId 代发合同
 * @method string getFlowGroupName() 获取合同组名称,最大长度200个字符
 * @method void setFlowGroupName(string $FlowGroupName) 设置合同组名称,最大长度200个字符
 * @method array getFlowGroupInfos() 获取合同组的子合同信息，支持2-50个子合同
 * @method void setFlowGroupInfos(array $FlowGroupInfos) 设置合同组的子合同信息，支持2-50个子合同
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method FlowGroupOptions getFlowGroupOptions() 获取合同组的配置信息。包括是否通知本企业签署方，是否通知其他签署方
 * @method void setFlowGroupOptions(FlowGroupOptions $FlowGroupOptions) 设置合同组的配置信息。包括是否通知本企业签署方，是否通知其他签署方
 */
class CreateFlowGroupByTemplatesRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId 代发合同
     */
    public $Operator;

    /**
     * @var string 合同组名称,最大长度200个字符
     */
    public $FlowGroupName;

    /**
     * @var array 合同组的子合同信息，支持2-50个子合同
     */
    public $FlowGroupInfos;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @var FlowGroupOptions 合同组的配置信息。包括是否通知本企业签署方，是否通知其他签署方
     */
    public $FlowGroupOptions;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId 代发合同
     * @param string $FlowGroupName 合同组名称,最大长度200个字符
     * @param array $FlowGroupInfos 合同组的子合同信息，支持2-50个子合同
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     * @param FlowGroupOptions $FlowGroupOptions 合同组的配置信息。包括是否通知本企业签署方，是否通知其他签署方
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("FlowGroupName",$param) and $param["FlowGroupName"] !== null) {
            $this->FlowGroupName = $param["FlowGroupName"];
        }

        if (array_key_exists("FlowGroupInfos",$param) and $param["FlowGroupInfos"] !== null) {
            $this->FlowGroupInfos = [];
            foreach ($param["FlowGroupInfos"] as $key => $value){
                $obj = new FlowGroupInfo();
                $obj->deserialize($value);
                array_push($this->FlowGroupInfos, $obj);
            }
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FlowGroupOptions",$param) and $param["FlowGroupOptions"] !== null) {
            $this->FlowGroupOptions = new FlowGroupOptions();
            $this->FlowGroupOptions->deserialize($param["FlowGroupOptions"]);
        }
    }
}
