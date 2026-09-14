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
 * 此结构体 (TemplateInfo) 用于描述模板的信息。

> **模板组成** 
>
>  一个模板通常会包含以下结构信息
>- 模板基本信息
>- 签署参与方 Recipients，在模板发起合同时用于指定参与方
>- 填写控件 Components
>- 签署控件 SignComponents
 *
 * @method string getTemplateId() 获取<p>模板ID，模板的唯一标识</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模板ID，模板的唯一标识</p>
 * @method string getTemplateName() 获取<p>模板名</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名</p>
 * @method string getDescription() 获取<p>模板描述信息</p>
 * @method void setDescription(string $Description) 设置<p>模板描述信息</p>
 * @method array getComponents() 获取<p>模板的填充控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/cb2f58529fca8d909258f9d45a56f7f4.png">点击查看在模板中配置的填充控件的样子</a></p>
 * @method void setComponents(array $Components) 设置<p>模板的填充控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/cb2f58529fca8d909258f9d45a56f7f4.png">点击查看在模板中配置的填充控件的样子</a></p>
 * @method array getRecipients() 获取<p>此模块需要签署的各个参与方的角色列表。RecipientId标识每个参与方角色对应的唯一标识符，用于确定此角色的信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的签署参与方角色列表的样子</a></p>
 * @method void setRecipients(array $Recipients) 设置<p>此模块需要签署的各个参与方的角色列表。RecipientId标识每个参与方角色对应的唯一标识符，用于确定此角色的信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的签署参与方角色列表的样子</a></p>
 * @method array getSignComponents() 获取<p>此模板中的签署控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/29bc6ed753a5a0fce4a3ab02e2c0d955.png">点击查看在模板中配置的签署控件的样子</a></p>
 * @method void setSignComponents(array $SignComponents) 设置<p>此模板中的签署控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/29bc6ed753a5a0fce4a3ab02e2c0d955.png">点击查看在模板中配置的签署控件的样子</a></p>
 * @method integer getTemplateType() 获取<p>模板类型可以分为以下两种：<b>1</b>：带有<b>本企业“授权签”</b>的模板，即签署过程无需签署人手动操作，系统自动完成签署。<b>3</b>：普通模板，即签署人需要手动进行签署操作。</p>
 * @method void setTemplateType(integer $TemplateType) 设置<p>模板类型可以分为以下两种：<b>1</b>：带有<b>本企业“授权签”</b>的模板，即签署过程无需签署人手动操作，系统自动完成签署。<b>3</b>：普通模板，即签署人需要手动进行签署操作。</p>
 * @method boolean getIsPromoter() 获取<p>是否是发起人 ,已弃用</p>
 * @method void setIsPromoter(boolean $IsPromoter) 设置<p>是否是发起人 ,已弃用</p>
 * @method string getCreator() 获取<p>模板的创建者名字</p>
 * @method void setCreator(string $Creator) 设置<p>模板的创建者名字</p>
 * @method integer getCreatedOn() 获取<p>模板创建的时间戳，格式为Unix标准时间戳（秒）</p>
 * @method void setCreatedOn(integer $CreatedOn) 设置<p>模板创建的时间戳，格式为Unix标准时间戳（秒）</p>
 * @method string getPreviewUrl() 获取<p>模板的 H5 预览链接，有效期为 5 分钟。<br>您可以通过浏览器直接打开此链接预览模板，或将其嵌入到 iframe 中进行预览。</p><p>注意：只有在请求接口时将 <b>WithPreviewUrl </b>参数设置为 true，才会生成预览链接。</p>
 * @method void setPreviewUrl(string $PreviewUrl) 设置<p>模板的 H5 预览链接，有效期为 5 分钟。<br>您可以通过浏览器直接打开此链接预览模板，或将其嵌入到 iframe 中进行预览。</p><p>注意：只有在请求接口时将 <b>WithPreviewUrl </b>参数设置为 true，才会生成预览链接。</p>
 * @method string getPdfUrl() 获取<p>第三方应用集成-模板PDF文件链接，有效期5分钟。<br>请求参数WithPdfUrl=true时返回<br>（此功能开放需要联系客户经理）。</p>
 * @method void setPdfUrl(string $PdfUrl) 设置<p>第三方应用集成-模板PDF文件链接，有效期5分钟。<br>请求参数WithPdfUrl=true时返回<br>（此功能开放需要联系客户经理）。</p>
 * @method string getChannelTemplateId() 获取<p>本模板关联的第三方应用平台企业模板ID</p>
 * @method void setChannelTemplateId(string $ChannelTemplateId) 设置<p>本模板关联的第三方应用平台企业模板ID</p>
 * @method string getChannelTemplateName() 获取<p>本模板关联的三方应用平台平台企业模板名称</p>
 * @method void setChannelTemplateName(string $ChannelTemplateName) 设置<p>本模板关联的三方应用平台平台企业模板名称</p>
 * @method integer getChannelAutoSave() 获取<p>0-需要子客企业手动领取平台企业的模板(默认);<br>1-平台自动设置子客模板</p>
 * @method void setChannelAutoSave(integer $ChannelAutoSave) 设置<p>0-需要子客企业手动领取平台企业的模板(默认);<br>1-平台自动设置子客模板</p>
 * @method string getTemplateVersion() 获取<p>模板版本，由全数字字符组成。<br>默认为空，模板版本号由日期和序号组成，初始版本为yyyyMMdd001，yyyyMMdd002表示第二个版本，以此类推。</p>
 * @method void setTemplateVersion(string $TemplateVersion) 设置<p>模板版本，由全数字字符组成。<br>默认为空，模板版本号由日期和序号组成，初始版本为yyyyMMdd001，yyyyMMdd002表示第二个版本，以此类推。</p>
 * @method integer getAvailable() 获取<p>模板可用状态的取值通常为以下两种：</p><ul><li>1：启用（默认），表示模板处于启用状态，可以被用户正常使用。</li><li>2：停用，表示模板处于停用状态，禁止用户使用该模板。</li></ul>
 * @method void setAvailable(integer $Available) 设置<p>模板可用状态的取值通常为以下两种：</p><ul><li>1：启用（默认），表示模板处于启用状态，可以被用户正常使用。</li><li>2：停用，表示模板处于停用状态，禁止用户使用该模板。</li></ul>
 * @method UserFlowType getUserFlowType() 获取<p>模板的用户合同类型</p>
 * @method void setUserFlowType(UserFlowType $UserFlowType) 设置<p>模板的用户合同类型</p>
 */
class TemplateInfo extends AbstractModel
{
    /**
     * @var string <p>模板ID，模板的唯一标识</p>
     */
    public $TemplateId;

    /**
     * @var string <p>模板名</p>
     */
    public $TemplateName;

    /**
     * @var string <p>模板描述信息</p>
     */
    public $Description;

    /**
     * @var array <p>模板的填充控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/cb2f58529fca8d909258f9d45a56f7f4.png">点击查看在模板中配置的填充控件的样子</a></p>
     */
    public $Components;

    /**
     * @var array <p>此模块需要签署的各个参与方的角色列表。RecipientId标识每个参与方角色对应的唯一标识符，用于确定此角色的信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的签署参与方角色列表的样子</a></p>
     */
    public $Recipients;

    /**
     * @var array <p>此模板中的签署控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/29bc6ed753a5a0fce4a3ab02e2c0d955.png">点击查看在模板中配置的签署控件的样子</a></p>
     */
    public $SignComponents;

    /**
     * @var integer <p>模板类型可以分为以下两种：<b>1</b>：带有<b>本企业“授权签”</b>的模板，即签署过程无需签署人手动操作，系统自动完成签署。<b>3</b>：普通模板，即签署人需要手动进行签署操作。</p>
     */
    public $TemplateType;

    /**
     * @var boolean <p>是否是发起人 ,已弃用</p>
     * @deprecated
     */
    public $IsPromoter;

    /**
     * @var string <p>模板的创建者名字</p>
     */
    public $Creator;

    /**
     * @var integer <p>模板创建的时间戳，格式为Unix标准时间戳（秒）</p>
     */
    public $CreatedOn;

    /**
     * @var string <p>模板的 H5 预览链接，有效期为 5 分钟。<br>您可以通过浏览器直接打开此链接预览模板，或将其嵌入到 iframe 中进行预览。</p><p>注意：只有在请求接口时将 <b>WithPreviewUrl </b>参数设置为 true，才会生成预览链接。</p>
     */
    public $PreviewUrl;

    /**
     * @var string <p>第三方应用集成-模板PDF文件链接，有效期5分钟。<br>请求参数WithPdfUrl=true时返回<br>（此功能开放需要联系客户经理）。</p>
     */
    public $PdfUrl;

    /**
     * @var string <p>本模板关联的第三方应用平台企业模板ID</p>
     */
    public $ChannelTemplateId;

    /**
     * @var string <p>本模板关联的三方应用平台平台企业模板名称</p>
     */
    public $ChannelTemplateName;

    /**
     * @var integer <p>0-需要子客企业手动领取平台企业的模板(默认);<br>1-平台自动设置子客模板</p>
     */
    public $ChannelAutoSave;

    /**
     * @var string <p>模板版本，由全数字字符组成。<br>默认为空，模板版本号由日期和序号组成，初始版本为yyyyMMdd001，yyyyMMdd002表示第二个版本，以此类推。</p>
     */
    public $TemplateVersion;

    /**
     * @var integer <p>模板可用状态的取值通常为以下两种：</p><ul><li>1：启用（默认），表示模板处于启用状态，可以被用户正常使用。</li><li>2：停用，表示模板处于停用状态，禁止用户使用该模板。</li></ul>
     */
    public $Available;

    /**
     * @var UserFlowType <p>模板的用户合同类型</p>
     */
    public $UserFlowType;

    /**
     * @param string $TemplateId <p>模板ID，模板的唯一标识</p>
     * @param string $TemplateName <p>模板名</p>
     * @param string $Description <p>模板描述信息</p>
     * @param array $Components <p>模板的填充控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/cb2f58529fca8d909258f9d45a56f7f4.png">点击查看在模板中配置的填充控件的样子</a></p>
     * @param array $Recipients <p>此模块需要签署的各个参与方的角色列表。RecipientId标识每个参与方角色对应的唯一标识符，用于确定此角色的信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的签署参与方角色列表的样子</a></p>
     * @param array $SignComponents <p>此模板中的签署控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/29bc6ed753a5a0fce4a3ab02e2c0d955.png">点击查看在模板中配置的签署控件的样子</a></p>
     * @param integer $TemplateType <p>模板类型可以分为以下两种：<b>1</b>：带有<b>本企业“授权签”</b>的模板，即签署过程无需签署人手动操作，系统自动完成签署。<b>3</b>：普通模板，即签署人需要手动进行签署操作。</p>
     * @param boolean $IsPromoter <p>是否是发起人 ,已弃用</p>
     * @param string $Creator <p>模板的创建者名字</p>
     * @param integer $CreatedOn <p>模板创建的时间戳，格式为Unix标准时间戳（秒）</p>
     * @param string $PreviewUrl <p>模板的 H5 预览链接，有效期为 5 分钟。<br>您可以通过浏览器直接打开此链接预览模板，或将其嵌入到 iframe 中进行预览。</p><p>注意：只有在请求接口时将 <b>WithPreviewUrl </b>参数设置为 true，才会生成预览链接。</p>
     * @param string $PdfUrl <p>第三方应用集成-模板PDF文件链接，有效期5分钟。<br>请求参数WithPdfUrl=true时返回<br>（此功能开放需要联系客户经理）。</p>
     * @param string $ChannelTemplateId <p>本模板关联的第三方应用平台企业模板ID</p>
     * @param string $ChannelTemplateName <p>本模板关联的三方应用平台平台企业模板名称</p>
     * @param integer $ChannelAutoSave <p>0-需要子客企业手动领取平台企业的模板(默认);<br>1-平台自动设置子客模板</p>
     * @param string $TemplateVersion <p>模板版本，由全数字字符组成。<br>默认为空，模板版本号由日期和序号组成，初始版本为yyyyMMdd001，yyyyMMdd002表示第二个版本，以此类推。</p>
     * @param integer $Available <p>模板可用状态的取值通常为以下两种：</p><ul><li>1：启用（默认），表示模板处于启用状态，可以被用户正常使用。</li><li>2：停用，表示模板处于停用状态，禁止用户使用该模板。</li></ul>
     * @param UserFlowType $UserFlowType <p>模板的用户合同类型</p>
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("Recipients",$param) and $param["Recipients"] !== null) {
            $this->Recipients = [];
            foreach ($param["Recipients"] as $key => $value){
                $obj = new Recipient();
                $obj->deserialize($value);
                array_push($this->Recipients, $obj);
            }
        }

        if (array_key_exists("SignComponents",$param) and $param["SignComponents"] !== null) {
            $this->SignComponents = [];
            foreach ($param["SignComponents"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->SignComponents, $obj);
            }
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("IsPromoter",$param) and $param["IsPromoter"] !== null) {
            $this->IsPromoter = $param["IsPromoter"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("PdfUrl",$param) and $param["PdfUrl"] !== null) {
            $this->PdfUrl = $param["PdfUrl"];
        }

        if (array_key_exists("ChannelTemplateId",$param) and $param["ChannelTemplateId"] !== null) {
            $this->ChannelTemplateId = $param["ChannelTemplateId"];
        }

        if (array_key_exists("ChannelTemplateName",$param) and $param["ChannelTemplateName"] !== null) {
            $this->ChannelTemplateName = $param["ChannelTemplateName"];
        }

        if (array_key_exists("ChannelAutoSave",$param) and $param["ChannelAutoSave"] !== null) {
            $this->ChannelAutoSave = $param["ChannelAutoSave"];
        }

        if (array_key_exists("TemplateVersion",$param) and $param["TemplateVersion"] !== null) {
            $this->TemplateVersion = $param["TemplateVersion"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("UserFlowType",$param) and $param["UserFlowType"] !== null) {
            $this->UserFlowType = new UserFlowType();
            $this->UserFlowType->deserialize($param["UserFlowType"]);
        }
    }
}
