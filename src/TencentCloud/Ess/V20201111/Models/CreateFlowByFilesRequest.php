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
 * CreateFlowByFiles请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息
 * @method string getFlowName() 获取流程名称
 * @method void setFlowName(string $FlowName) 设置流程名称
 * @method array getFileIds() 获取签署pdf文件的资源编号列表
 * @method void setFileIds(array $FileIds) 设置签署pdf文件的资源编号列表
 * @method array getApprovers() 获取签署参与者信息
 * @method void setApprovers(array $Approvers) 设置签署参与者信息
 * @method string getFlowDescription() 获取流程描述
 * @method void setFlowDescription(string $FlowDescription) 设置流程描述
 * @method boolean getUnordered() 获取发送类型：
true：无序签
false：有序签
注：默认为false（有序签）
 * @method void setUnordered(boolean $Unordered) 设置发送类型：
true：无序签
false：有序签
注：默认为false（有序签）
 * @method string getFlowType() 获取流程的类型
 * @method void setFlowType(string $FlowType) 设置流程的类型
 * @method integer getDeadline() 获取流程的签署截止时间
 * @method void setDeadline(integer $Deadline) 设置流程的签署截止时间
 * @method Agent getAgent() 获取应用号信息
 * @method void setAgent(Agent $Agent) 设置应用号信息
 * @method array getComponents() 获取经办人内容控件配置。可选类型为：
TEXT - 内容文本控件
MULTI_LINE_TEXT - 多行文本控件
注：默认字体大小为 字号12
 * @method void setComponents(array $Components) 设置经办人内容控件配置。可选类型为：
TEXT - 内容文本控件
MULTI_LINE_TEXT - 多行文本控件
注：默认字体大小为 字号12
 * @method array getCcInfos() 获取被抄送人的信息列表
 * @method void setCcInfos(array $CcInfos) 设置被抄送人的信息列表
 * @method boolean getNeedPreview() 获取是否需要预览，true：预览模式，false：非预览（默认）
 * @method void setNeedPreview(boolean $NeedPreview) 设置是否需要预览，true：预览模式，false：非预览（默认）
 */
class CreateFlowByFilesRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息
     */
    public $Operator;

    /**
     * @var string 流程名称
     */
    public $FlowName;

    /**
     * @var array 签署pdf文件的资源编号列表
     */
    public $FileIds;

    /**
     * @var array 签署参与者信息
     */
    public $Approvers;

    /**
     * @var string 流程描述
     */
    public $FlowDescription;

    /**
     * @var boolean 发送类型：
true：无序签
false：有序签
注：默认为false（有序签）
     */
    public $Unordered;

    /**
     * @var string 流程的类型
     */
    public $FlowType;

    /**
     * @var integer 流程的签署截止时间
     */
    public $Deadline;

    /**
     * @var Agent 应用号信息
     */
    public $Agent;

    /**
     * @var array 经办人内容控件配置。可选类型为：
TEXT - 内容文本控件
MULTI_LINE_TEXT - 多行文本控件
注：默认字体大小为 字号12
     */
    public $Components;

    /**
     * @var array 被抄送人的信息列表
     */
    public $CcInfos;

    /**
     * @var boolean 是否需要预览，true：预览模式，false：非预览（默认）
     */
    public $NeedPreview;

    /**
     * @param UserInfo $Operator 调用方用户信息
     * @param string $FlowName 流程名称
     * @param array $FileIds 签署pdf文件的资源编号列表
     * @param array $Approvers 签署参与者信息
     * @param string $FlowDescription 流程描述
     * @param boolean $Unordered 发送类型：
true：无序签
false：有序签
注：默认为false（有序签）
     * @param string $FlowType 流程的类型
     * @param integer $Deadline 流程的签署截止时间
     * @param Agent $Agent 应用号信息
     * @param array $Components 经办人内容控件配置。可选类型为：
TEXT - 内容文本控件
MULTI_LINE_TEXT - 多行文本控件
注：默认字体大小为 字号12
     * @param array $CcInfos 被抄送人的信息列表
     * @param boolean $NeedPreview 是否需要预览，true：预览模式，false：非预览（默认）
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

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new ApproverInfo();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("CcInfos",$param) and $param["CcInfos"] !== null) {
            $this->CcInfos = [];
            foreach ($param["CcInfos"] as $key => $value){
                $obj = new CcInfo();
                $obj->deserialize($value);
                array_push($this->CcInfos, $obj);
            }
        }

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }
    }
}
