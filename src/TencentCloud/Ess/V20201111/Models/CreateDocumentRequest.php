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
 * CreateDocument请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
 * @method string getFlowId() 获取签署流程编号,由CreateFlow接口返回
 * @method void setFlowId(string $FlowId) 设置签署流程编号,由CreateFlow接口返回
 * @method string getTemplateId() 获取用户上传的模板ID
 * @method void setTemplateId(string $TemplateId) 设置用户上传的模板ID
 * @method array getFileNames() 获取文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起
 * @method void setFileNames(array $FileNames) 设置文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起
 * @method array getFormFields() 获取内容控件信息数组
 * @method void setFormFields(array $FormFields) 设置内容控件信息数组
 * @method boolean getNeedPreview() 获取是否需要生成预览文件 默认不生成；
预览链接有效期300秒；
 * @method void setNeedPreview(boolean $NeedPreview) 设置是否需要生成预览文件 默认不生成；
预览链接有效期300秒；
 * @method integer getPreviewType() 获取预览链接类型 默认:0-文件流, 1- H5链接 注意:此参数在NeedPreview 为true 时有效,
 * @method void setPreviewType(integer $PreviewType) 设置预览链接类型 默认:0-文件流, 1- H5链接 注意:此参数在NeedPreview 为true 时有效,
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method string getClientToken() 获取客户端Token，保持接口幂等性,最大长度64个字符
 * @method void setClientToken(string $ClientToken) 设置客户端Token，保持接口幂等性,最大长度64个字符
 */
class CreateDocumentRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
     */
    public $Operator;

    /**
     * @var string 签署流程编号,由CreateFlow接口返回
     */
    public $FlowId;

    /**
     * @var string 用户上传的模板ID
     */
    public $TemplateId;

    /**
     * @var array 文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起
     */
    public $FileNames;

    /**
     * @var array 内容控件信息数组
     */
    public $FormFields;

    /**
     * @var boolean 是否需要生成预览文件 默认不生成；
预览链接有效期300秒；
     */
    public $NeedPreview;

    /**
     * @var integer 预览链接类型 默认:0-文件流, 1- H5链接 注意:此参数在NeedPreview 为true 时有效,
     */
    public $PreviewType;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @var string 客户端Token，保持接口幂等性,最大长度64个字符
     */
    public $ClientToken;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId代发合同。
     * @param string $FlowId 签署流程编号,由CreateFlow接口返回
     * @param string $TemplateId 用户上传的模板ID
     * @param array $FileNames 文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起
     * @param array $FormFields 内容控件信息数组
     * @param boolean $NeedPreview 是否需要生成预览文件 默认不生成；
预览链接有效期300秒；
     * @param integer $PreviewType 预览链接类型 默认:0-文件流, 1- H5链接 注意:此参数在NeedPreview 为true 时有效,
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     * @param string $ClientToken 客户端Token，保持接口幂等性,最大长度64个字符
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

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FileNames",$param) and $param["FileNames"] !== null) {
            $this->FileNames = $param["FileNames"];
        }

        if (array_key_exists("FormFields",$param) and $param["FormFields"] !== null) {
            $this->FormFields = [];
            foreach ($param["FormFields"] as $key => $value){
                $obj = new FormField();
                $obj->deserialize($value);
                array_push($this->FormFields, $obj);
            }
        }

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }

        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
