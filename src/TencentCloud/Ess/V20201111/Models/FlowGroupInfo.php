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
 * 此结构体(FlowGroupInfo)描述的是合同组(流程组)的单个合同(流程)信息
 *
 * @method string getFlowName() 获取合同（流程）的名称
 * @method void setFlowName(string $FlowName) 设置合同（流程）的名称
 * @method array getApprovers() 获取合同（流程）的签署方信息
 * @method void setApprovers(array $Approvers) 设置合同（流程）的签署方信息
 * @method array getFileIds() 获取发起合同（流程）的资源Id,此资源必须是PDF文件,来自UploadFiles,使用文件发起合同(流程)组时必传
 * @method void setFileIds(array $FileIds) 设置发起合同（流程）的资源Id,此资源必须是PDF文件,来自UploadFiles,使用文件发起合同(流程)组时必传
 * @method string getTemplateId() 获取发起合同（流程）的模板Id,用模板发起合同（流程）组时必填
 * @method void setTemplateId(string $TemplateId) 设置发起合同（流程）的模板Id,用模板发起合同（流程）组时必填
 * @method string getFlowType() 获取合同（流程）的类型
 * @method void setFlowType(string $FlowType) 设置合同（流程）的类型
 * @method string getFlowDescription() 获取合同（流程）的描述
 * @method void setFlowDescription(string $FlowDescription) 设置合同（流程）的描述
 * @method integer getDeadline() 获取合同（流程）的截止时间戳，单位秒。默认是一年
 * @method void setDeadline(integer $Deadline) 设置合同（流程）的截止时间戳，单位秒。默认是一年
 * @method string getCallbackUrl() 获取合同（流程）的回调地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置合同（流程）的回调地址
 * @method string getUserData() 获取第三方平台传递过来的信息, 限制1024字符 格式必须是base64的
 * @method void setUserData(string $UserData) 设置第三方平台传递过来的信息, 限制1024字符 格式必须是base64的
 * @method boolean getUnordered() 获取合同（流程）的签署是否是无序签, true - 无序。 false - 有序, 默认 
 * @method void setUnordered(boolean $Unordered) 设置合同（流程）的签署是否是无序签, true - 无序。 false - 有序, 默认 
 * @method array getComponents() 获取合同（流程）发起方的填写控件，用户
 * @method void setComponents(array $Components) 设置合同（流程）发起方的填写控件，用户
 * @method boolean getNeedSignReview() 获取本企业（发起方）是否需要签署审批，若需要审批则只允许查看不允许签署，需要您调用接口CreateFlowSignReview提交审批结果。
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置本企业（发起方）是否需要签署审批，若需要审批则只允许查看不允许签署，需要您调用接口CreateFlowSignReview提交审批结果。
 * @method string getAutoSignScene() 获取本企业（发起方）自动签署，需要您在发起合同时给印章控件指定自动签的印章。
 * @method void setAutoSignScene(string $AutoSignScene) 设置本企业（发起方）自动签署，需要您在发起合同时给印章控件指定自动签的印章。
 */
class FlowGroupInfo extends AbstractModel
{
    /**
     * @var string 合同（流程）的名称
     */
    public $FlowName;

    /**
     * @var array 合同（流程）的签署方信息
     */
    public $Approvers;

    /**
     * @var array 发起合同（流程）的资源Id,此资源必须是PDF文件,来自UploadFiles,使用文件发起合同(流程)组时必传
     */
    public $FileIds;

    /**
     * @var string 发起合同（流程）的模板Id,用模板发起合同（流程）组时必填
     */
    public $TemplateId;

    /**
     * @var string 合同（流程）的类型
     */
    public $FlowType;

    /**
     * @var string 合同（流程）的描述
     */
    public $FlowDescription;

    /**
     * @var integer 合同（流程）的截止时间戳，单位秒。默认是一年
     */
    public $Deadline;

    /**
     * @var string 合同（流程）的回调地址
     */
    public $CallbackUrl;

    /**
     * @var string 第三方平台传递过来的信息, 限制1024字符 格式必须是base64的
     */
    public $UserData;

    /**
     * @var boolean 合同（流程）的签署是否是无序签, true - 无序。 false - 有序, 默认 
     */
    public $Unordered;

    /**
     * @var array 合同（流程）发起方的填写控件，用户
     */
    public $Components;

    /**
     * @var boolean 本企业（发起方）是否需要签署审批，若需要审批则只允许查看不允许签署，需要您调用接口CreateFlowSignReview提交审批结果。
     */
    public $NeedSignReview;

    /**
     * @var string 本企业（发起方）自动签署，需要您在发起合同时给印章控件指定自动签的印章。
     */
    public $AutoSignScene;

    /**
     * @param string $FlowName 合同（流程）的名称
     * @param array $Approvers 合同（流程）的签署方信息
     * @param array $FileIds 发起合同（流程）的资源Id,此资源必须是PDF文件,来自UploadFiles,使用文件发起合同(流程)组时必传
     * @param string $TemplateId 发起合同（流程）的模板Id,用模板发起合同（流程）组时必填
     * @param string $FlowType 合同（流程）的类型
     * @param string $FlowDescription 合同（流程）的描述
     * @param integer $Deadline 合同（流程）的截止时间戳，单位秒。默认是一年
     * @param string $CallbackUrl 合同（流程）的回调地址
     * @param string $UserData 第三方平台传递过来的信息, 限制1024字符 格式必须是base64的
     * @param boolean $Unordered 合同（流程）的签署是否是无序签, true - 无序。 false - 有序, 默认 
     * @param array $Components 合同（流程）发起方的填写控件，用户
     * @param boolean $NeedSignReview 本企业（发起方）是否需要签署审批，若需要审批则只允许查看不允许签署，需要您调用接口CreateFlowSignReview提交审批结果。
     * @param string $AutoSignScene 本企业（发起方）自动签署，需要您在发起合同时给印章控件指定自动签的印章。
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
        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new ApproverInfo();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("AutoSignScene",$param) and $param["AutoSignScene"] !== null) {
            $this->AutoSignScene = $param["AutoSignScene"];
        }
    }
}
