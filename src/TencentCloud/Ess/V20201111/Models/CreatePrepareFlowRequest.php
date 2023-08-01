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
 * CreatePrepareFlow请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method string getResourceId() 获取资源Id，通过多文件上传（UploadFiles）接口获得
 * @method void setResourceId(string $ResourceId) 设置资源Id，通过多文件上传（UploadFiles）接口获得
 * @method string getFlowName() 获取合同名称
 * @method void setFlowName(string $FlowName) 设置合同名称
 * @method boolean getUnordered() 获取是否顺序签署
true:无序签
false:顺序签
 * @method void setUnordered(boolean $Unordered) 设置是否顺序签署
true:无序签
false:顺序签
 * @method integer getDeadline() 获取签署流程的签署截止时间。
值为unix时间戳,精确到秒
不传默认为当前时间一年后
 * @method void setDeadline(integer $Deadline) 设置签署流程的签署截止时间。
值为unix时间戳,精确到秒
不传默认为当前时间一年后
 * @method string getUserFlowTypeId() 获取用户自定义合同类型Id
该id为电子签企业内的合同类型id
 * @method void setUserFlowTypeId(string $UserFlowTypeId) 设置用户自定义合同类型Id
该id为电子签企业内的合同类型id
 * @method array getApprovers() 获取签署流程参与者信息，最大限制50方
 * @method void setApprovers(array $Approvers) 设置签署流程参与者信息，最大限制50方
 * @method string getIntelligentStatus() 获取打开智能添加填写区
(默认开启，打开:"OPEN"
 关闭："CLOSE"
 * @method void setIntelligentStatus(string $IntelligentStatus) 设置打开智能添加填写区
(默认开启，打开:"OPEN"
 关闭："CLOSE"
 * @method integer getResourceType() 获取资源类型，
1：文件，
2：模板
不传默认为1：文件
目前仅支持文件
 * @method void setResourceType(integer $ResourceType) 设置资源类型，
1：文件，
2：模板
不传默认为1：文件
目前仅支持文件
 * @method Component getComponents() 获取发起方填写控件
该类型控件由发起方完成填写
 * @method void setComponents(Component $Components) 设置发起方填写控件
该类型控件由发起方完成填写
 * @method CreateFlowOption getFlowOption() 获取发起合同个性化参数
用于满足创建及页面操作过程中的个性化要求
具体定制化内容详见数据接口说明
 * @method void setFlowOption(CreateFlowOption $FlowOption) 设置发起合同个性化参数
用于满足创建及页面操作过程中的个性化要求
具体定制化内容详见数据接口说明
 * @method boolean getNeedSignReview() 获取是否开启发起方签署审核
true:开启发起方签署审核
false:不开启发起方签署审核
默认false:不开启发起方签署审核
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置是否开启发起方签署审核
true:开启发起方签署审核
false:不开启发起方签署审核
默认false:不开启发起方签署审核
 * @method boolean getNeedCreateReview() 获取开启发起方发起合同审核
true:开启发起方发起合同审核
false:不开启发起方发起合同审核
默认false:不开启发起方发起合同审核
 * @method void setNeedCreateReview(boolean $NeedCreateReview) 设置开启发起方发起合同审核
true:开启发起方发起合同审核
false:不开启发起方发起合同审核
默认false:不开启发起方发起合同审核
 * @method string getUserData() 获取用户自定义参数
 * @method void setUserData(string $UserData) 设置用户自定义参数
 * @method string getFlowId() 获取合同id,用于通过已web页面发起的合同id快速生成一个web发起合同链接
 * @method void setFlowId(string $FlowId) 设置合同id,用于通过已web页面发起的合同id快速生成一个web发起合同链接
 * @method string getFlowType() 获取合同类型名称
该字段用于客户自定义合同类型
建议使用时指定合同类型，便于之后合同分类以及查看
 * @method void setFlowType(string $FlowType) 设置合同类型名称
该字段用于客户自定义合同类型
建议使用时指定合同类型，便于之后合同分类以及查看
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填	
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填	
 */
class CreatePrepareFlowRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var string 资源Id，通过多文件上传（UploadFiles）接口获得
     */
    public $ResourceId;

    /**
     * @var string 合同名称
     */
    public $FlowName;

    /**
     * @var boolean 是否顺序签署
true:无序签
false:顺序签
     */
    public $Unordered;

    /**
     * @var integer 签署流程的签署截止时间。
值为unix时间戳,精确到秒
不传默认为当前时间一年后
     */
    public $Deadline;

    /**
     * @var string 用户自定义合同类型Id
该id为电子签企业内的合同类型id
     */
    public $UserFlowTypeId;

    /**
     * @var array 签署流程参与者信息，最大限制50方
     */
    public $Approvers;

    /**
     * @var string 打开智能添加填写区
(默认开启，打开:"OPEN"
 关闭："CLOSE"
     */
    public $IntelligentStatus;

    /**
     * @var integer 资源类型，
1：文件，
2：模板
不传默认为1：文件
目前仅支持文件
     */
    public $ResourceType;

    /**
     * @var Component 发起方填写控件
该类型控件由发起方完成填写
     */
    public $Components;

    /**
     * @var CreateFlowOption 发起合同个性化参数
用于满足创建及页面操作过程中的个性化要求
具体定制化内容详见数据接口说明
     */
    public $FlowOption;

    /**
     * @var boolean 是否开启发起方签署审核
true:开启发起方签署审核
false:不开启发起方签署审核
默认false:不开启发起方签署审核
     */
    public $NeedSignReview;

    /**
     * @var boolean 开启发起方发起合同审核
true:开启发起方发起合同审核
false:不开启发起方发起合同审核
默认false:不开启发起方发起合同审核
     */
    public $NeedCreateReview;

    /**
     * @var string 用户自定义参数
     */
    public $UserData;

    /**
     * @var string 合同id,用于通过已web页面发起的合同id快速生成一个web发起合同链接
     */
    public $FlowId;

    /**
     * @var string 合同类型名称
该字段用于客户自定义合同类型
建议使用时指定合同类型，便于之后合同分类以及查看
     */
    public $FlowType;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填	
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param string $ResourceId 资源Id，通过多文件上传（UploadFiles）接口获得
     * @param string $FlowName 合同名称
     * @param boolean $Unordered 是否顺序签署
true:无序签
false:顺序签
     * @param integer $Deadline 签署流程的签署截止时间。
值为unix时间戳,精确到秒
不传默认为当前时间一年后
     * @param string $UserFlowTypeId 用户自定义合同类型Id
该id为电子签企业内的合同类型id
     * @param array $Approvers 签署流程参与者信息，最大限制50方
     * @param string $IntelligentStatus 打开智能添加填写区
(默认开启，打开:"OPEN"
 关闭："CLOSE"
     * @param integer $ResourceType 资源类型，
1：文件，
2：模板
不传默认为1：文件
目前仅支持文件
     * @param Component $Components 发起方填写控件
该类型控件由发起方完成填写
     * @param CreateFlowOption $FlowOption 发起合同个性化参数
用于满足创建及页面操作过程中的个性化要求
具体定制化内容详见数据接口说明
     * @param boolean $NeedSignReview 是否开启发起方签署审核
true:开启发起方签署审核
false:不开启发起方签署审核
默认false:不开启发起方签署审核
     * @param boolean $NeedCreateReview 开启发起方发起合同审核
true:开启发起方发起合同审核
false:不开启发起方发起合同审核
默认false:不开启发起方发起合同审核
     * @param string $UserData 用户自定义参数
     * @param string $FlowId 合同id,用于通过已web页面发起的合同id快速生成一个web发起合同链接
     * @param string $FlowType 合同类型名称
该字段用于客户自定义合同类型
建议使用时指定合同类型，便于之后合同分类以及查看
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填	
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("UserFlowTypeId",$param) and $param["UserFlowTypeId"] !== null) {
            $this->UserFlowTypeId = $param["UserFlowTypeId"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new FlowCreateApprover();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("IntelligentStatus",$param) and $param["IntelligentStatus"] !== null) {
            $this->IntelligentStatus = $param["IntelligentStatus"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = new Component();
            $this->Components->deserialize($param["Components"]);
        }

        if (array_key_exists("FlowOption",$param) and $param["FlowOption"] !== null) {
            $this->FlowOption = new CreateFlowOption();
            $this->FlowOption->deserialize($param["FlowOption"]);
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("NeedCreateReview",$param) and $param["NeedCreateReview"] !== null) {
            $this->NeedCreateReview = $param["NeedCreateReview"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
