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
 * CreateFlowGroupByTemplates请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getFlowGroupName() 获取合同（流程）组名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method void setFlowGroupName(string $FlowGroupName) 设置合同（流程）组名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method array getFlowGroupInfos() 获取合同（流程）组的子合同信息，支持2-50个子合同
 * @method void setFlowGroupInfos(array $FlowGroupInfos) 设置合同（流程）组的子合同信息，支持2-50个子合同
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method FlowGroupOptions getFlowGroupOptions() 获取合同（流程）组的配置项信息。
其中包括：
<ul>
<li>是否通知本企业签署方</li>
<li>是否通知其他签署方</li>
</ul>
 * @method void setFlowGroupOptions(FlowGroupOptions $FlowGroupOptions) 设置合同（流程）组的配置项信息。
其中包括：
<ul>
<li>是否通知本企业签署方</li>
<li>是否通知其他签署方</li>
</ul>
 * @method UserFlowType getUserFlowType() 获取用户自定义合同类型。  
自定义合同类型配置的地方如链接图所示。[点击查看自定义合同类型管理的位置](https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png)  

注意： 如果传递了自定义合同类型，则每一个子合同对应模板上面的自定义合同类型将会失效，已最外层定义的为准。 例如： 这份合同组有三个子合同，设置合同类型为<font color="blue">人事/劳务</font> 第一份子合同选择的模板的合同自定义合同类型是<font color="blue">采购</font> 第二份和第三份子合同选择的模板的合同自定义合同类型是<font color="blue">人事/劳务</font> 但最终这个合同组的合同类型是<font color="blue">人事/劳务</font>
 * @method void setUserFlowType(UserFlowType $UserFlowType) 设置用户自定义合同类型。  
自定义合同类型配置的地方如链接图所示。[点击查看自定义合同类型管理的位置](https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png)  

注意： 如果传递了自定义合同类型，则每一个子合同对应模板上面的自定义合同类型将会失效，已最外层定义的为准。 例如： 这份合同组有三个子合同，设置合同类型为<font color="blue">人事/劳务</font> 第一份子合同选择的模板的合同自定义合同类型是<font color="blue">采购</font> 第二份和第三份子合同选择的模板的合同自定义合同类型是<font color="blue">人事/劳务</font> 但最终这个合同组的合同类型是<font color="blue">人事/劳务</font>
 */
class CreateFlowGroupByTemplatesRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 合同（流程）组名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     */
    public $FlowGroupName;

    /**
     * @var array 合同（流程）组的子合同信息，支持2-50个子合同
     */
    public $FlowGroupInfos;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var FlowGroupOptions 合同（流程）组的配置项信息。
其中包括：
<ul>
<li>是否通知本企业签署方</li>
<li>是否通知其他签署方</li>
</ul>
     */
    public $FlowGroupOptions;

    /**
     * @var UserFlowType 用户自定义合同类型。  
自定义合同类型配置的地方如链接图所示。[点击查看自定义合同类型管理的位置](https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png)  

注意： 如果传递了自定义合同类型，则每一个子合同对应模板上面的自定义合同类型将会失效，已最外层定义的为准。 例如： 这份合同组有三个子合同，设置合同类型为<font color="blue">人事/劳务</font> 第一份子合同选择的模板的合同自定义合同类型是<font color="blue">采购</font> 第二份和第三份子合同选择的模板的合同自定义合同类型是<font color="blue">人事/劳务</font> 但最终这个合同组的合同类型是<font color="blue">人事/劳务</font>
     */
    public $UserFlowType;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $FlowGroupName 合同（流程）组名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     * @param array $FlowGroupInfos 合同（流程）组的子合同信息，支持2-50个子合同
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param FlowGroupOptions $FlowGroupOptions 合同（流程）组的配置项信息。
其中包括：
<ul>
<li>是否通知本企业签署方</li>
<li>是否通知其他签署方</li>
</ul>
     * @param UserFlowType $UserFlowType 用户自定义合同类型。  
自定义合同类型配置的地方如链接图所示。[点击查看自定义合同类型管理的位置](https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png)  

注意： 如果传递了自定义合同类型，则每一个子合同对应模板上面的自定义合同类型将会失效，已最外层定义的为准。 例如： 这份合同组有三个子合同，设置合同类型为<font color="blue">人事/劳务</font> 第一份子合同选择的模板的合同自定义合同类型是<font color="blue">采购</font> 第二份和第三份子合同选择的模板的合同自定义合同类型是<font color="blue">人事/劳务</font> 但最终这个合同组的合同类型是<font color="blue">人事/劳务</font>
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

        if (array_key_exists("UserFlowType",$param) and $param["UserFlowType"] !== null) {
            $this->UserFlowType = new UserFlowType();
            $this->UserFlowType->deserialize($param["UserFlowType"]);
        }
    }
}
