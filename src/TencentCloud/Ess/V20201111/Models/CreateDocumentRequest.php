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
 * @method UserInfo getOperator() 获取无
 * @method void setOperator(UserInfo $Operator) 设置无
 * @method string getTemplateId() 获取用户上传的模版ID
 * @method void setTemplateId(string $TemplateId) 设置用户上传的模版ID
 * @method string getFlowId() 获取流程ID
 * @method void setFlowId(string $FlowId) 设置流程ID
 * @method array getFileNames() 获取文件名列表
 * @method void setFileNames(array $FileNames) 设置文件名列表
 * @method array getFormFields() 获取内容控件信息数组
 * @method void setFormFields(array $FormFields) 设置内容控件信息数组
 * @method Agent getAgent() 获取应用相关信息
 * @method void setAgent(Agent $Agent) 设置应用相关信息
 * @method string getClientToken() 获取客户端Token，保持接口幂等性
 * @method void setClientToken(string $ClientToken) 设置客户端Token，保持接口幂等性
 * @method boolean getNeedPreview() 获取是否需要生成预览文件 默认不生成
 * @method void setNeedPreview(boolean $NeedPreview) 设置是否需要生成预览文件 默认不生成
 */
class CreateDocumentRequest extends AbstractModel
{
    /**
     * @var UserInfo 无
     */
    public $Operator;

    /**
     * @var string 用户上传的模版ID
     */
    public $TemplateId;

    /**
     * @var string 流程ID
     */
    public $FlowId;

    /**
     * @var array 文件名列表
     */
    public $FileNames;

    /**
     * @var array 内容控件信息数组
     */
    public $FormFields;

    /**
     * @var Agent 应用相关信息
     */
    public $Agent;

    /**
     * @var string 客户端Token，保持接口幂等性
     */
    public $ClientToken;

    /**
     * @var boolean 是否需要生成预览文件 默认不生成
     */
    public $NeedPreview;

    /**
     * @param UserInfo $Operator 无
     * @param string $TemplateId 用户上传的模版ID
     * @param string $FlowId 流程ID
     * @param array $FileNames 文件名列表
     * @param array $FormFields 内容控件信息数组
     * @param Agent $Agent 应用相关信息
     * @param string $ClientToken 客户端Token，保持接口幂等性
     * @param boolean $NeedPreview 是否需要生成预览文件 默认不生成
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
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

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }
    }
}
