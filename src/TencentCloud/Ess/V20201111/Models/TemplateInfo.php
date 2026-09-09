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
 * 此结构体 (TemplateInfo) 用于描述模板的信息。

> **模板组成** 
>
>  一个模板通常会包含以下结构信息
>- 模板基本信息
>- 发起方参与信息Promoter、签署参与方 Recipients，后者会在模板发起合同时用于指定参与方
>- 填写控件 Components
>- 签署控件 SignComponents
>- 生成模板的文件基础信息 FileInfos
 *
 * @method string getTemplateId() 获取<p>模板ID，模板的唯一标识</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模板ID，模板的唯一标识</p>
 * @method string getTemplateName() 获取<p>模板的名字</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板的名字</p>
 * @method array getRecipients() 获取<p>此模块需要签署的各个参与方的角色列表。RecipientId标识每个参与方角色对应的唯一标识符，用于确定此角色的信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的签署参与方角色列表的样子</a></p>
 * @method void setRecipients(array $Recipients) 设置<p>此模块需要签署的各个参与方的角色列表。RecipientId标识每个参与方角色对应的唯一标识符，用于确定此角色的信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的签署参与方角色列表的样子</a></p>
 * @method array getComponents() 获取<p>模板的填充控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/cb2f58529fca8d909258f9d45a56f7f4.png">点击查看在模板中配置的填充控件的样子</a></p>
 * @method void setComponents(array $Components) 设置<p>模板的填充控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/cb2f58529fca8d909258f9d45a56f7f4.png">点击查看在模板中配置的填充控件的样子</a></p>
 * @method array getSignComponents() 获取<p>此模板中的签署控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/29bc6ed753a5a0fce4a3ab02e2c0d955.png">点击查看在模板中配置的签署控件的样子</a></p>
 * @method void setSignComponents(array $SignComponents) 设置<p>此模板中的签署控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/29bc6ed753a5a0fce4a3ab02e2c0d955.png">点击查看在模板中配置的签署控件的样子</a></p>
 * @method string getDescription() 获取<p>模板描述信息</p>
 * @method void setDescription(string $Description) 设置<p>模板描述信息</p>
 * @method array getDocumentResourceIds() 获取<p>此模板的资源ID</p>
 * @method void setDocumentResourceIds(array $DocumentResourceIds) 设置<p>此模板的资源ID</p>
 * @method array getFileInfos() 获取<p>生成模板的文件基础信息</p>
 * @method void setFileInfos(array $FileInfos) 设置<p>生成模板的文件基础信息</p>
 * @method array getAttachmentResourceIds() 获取<p>此模板里边附件的资源ID</p>
 * @method void setAttachmentResourceIds(array $AttachmentResourceIds) 设置<p>此模板里边附件的资源ID</p>
 * @method array getSignOrder() 获取<p>签署人参与签署的顺序，可以分为以下两种方式：</p><p><b>无序</b>：不限定签署人的签署顺序，签署人可以在任何时间签署。此种方式值为 ：｛-1｝<br><b>有序</b>：通过序列数字标识签署顺序，从0开始编码，数字越大签署顺序越靠后，签署人按照指定的顺序依次签署。此种方式值为： ｛0，1，2，3………｝</p>
 * @method void setSignOrder(array $SignOrder) 设置<p>签署人参与签署的顺序，可以分为以下两种方式：</p><p><b>无序</b>：不限定签署人的签署顺序，签署人可以在任何时间签署。此种方式值为 ：｛-1｝<br><b>有序</b>：通过序列数字标识签署顺序，从0开始编码，数字越大签署顺序越靠后，签署人按照指定的顺序依次签署。此种方式值为： ｛0，1，2，3………｝</p>
 * @method integer getStatus() 获取<p>此模板的状态可以分为以下几种：</p><p><b>-1</b>：不可用状态。<br><b>0</b>：草稿态，即模板正在编辑或未发布状态。<br><b>1</b>：正式态，只有正式态的模板才可以发起合同。</p>
 * @method void setStatus(integer $Status) 设置<p>此模板的状态可以分为以下几种：</p><p><b>-1</b>：不可用状态。<br><b>0</b>：草稿态，即模板正在编辑或未发布状态。<br><b>1</b>：正式态，只有正式态的模板才可以发起合同。</p>
 * @method string getCreator() 获取<p>模板的创建者信息，用户的名字</p><p>注： <code>是创建者的名字，而非创建者的用户ID</code></p>
 * @method void setCreator(string $Creator) 设置<p>模板的创建者信息，用户的名字</p><p>注： <code>是创建者的名字，而非创建者的用户ID</code></p>
 * @method integer getCreatedOn() 获取<p>模板创建的时间戳，格式为Unix标准时间戳（秒）</p>
 * @method void setCreatedOn(integer $CreatedOn) 设置<p>模板创建的时间戳，格式为Unix标准时间戳（秒）</p>
 * @method Recipient getPromoter() 获取<p>此模板创建方角色信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的创建方角色的样子</a></p>
 * @method void setPromoter(Recipient $Promoter) 设置<p>此模板创建方角色信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的创建方角色的样子</a></p>
 * @method integer getTemplateType() 获取<p>模板类型可以分为以下两种：</p><p><b>1</b>：带有本企业自动签署的模板，即签署过程无需签署人手动操作，系统自动完成签署。<br><b>3</b>：普通模板，即签署人需要手动进行签署操作。</p>
 * @method void setTemplateType(integer $TemplateType) 设置<p>模板类型可以分为以下两种：</p><p><b>1</b>：带有本企业自动签署的模板，即签署过程无需签署人手动操作，系统自动完成签署。<br><b>3</b>：普通模板，即签署人需要手动进行签署操作。</p>
 * @method integer getAvailable() 获取<p>模板可用状态可以分为以下两种：</p><p><b>1</b>：（默认）启用状态，即模板可以正常使用。<br><b>2</b>：停用状态，即模板暂时无法使用。</p><p>可到控制台启停模板</p>
 * @method void setAvailable(integer $Available) 设置<p>模板可用状态可以分为以下两种：</p><p><b>1</b>：（默认）启用状态，即模板可以正常使用。<br><b>2</b>：停用状态，即模板暂时无法使用。</p><p>可到控制台启停模板</p>
 * @method string getOrganizationId() 获取<p>创建模板的企业ID，电子签的机构ID</p>
 * @method void setOrganizationId(string $OrganizationId) 设置<p>创建模板的企业ID，电子签的机构ID</p>
 * @method string getCreatorId() 获取<p>模板创建人用户ID</p>
 * @method void setCreatorId(string $CreatorId) 设置<p>模板创建人用户ID</p>
 * @method string getPreviewUrl() 获取<p>模板的 H5 预览链接，有效期为 5 分钟。<br>您可以通过浏览器直接打开此链接预览模板，或将其嵌入到 iframe 中进行预览。</p><p>注意：只有在请求接口时将 <b>WithPreviewUrl </b>参数设置为 true，才会生成预览链接。</p>
 * @method void setPreviewUrl(string $PreviewUrl) 设置<p>模板的 H5 预览链接，有效期为 5 分钟。<br>您可以通过浏览器直接打开此链接预览模板，或将其嵌入到 iframe 中进行预览。</p><p>注意：只有在请求接口时将 <b>WithPreviewUrl </b>参数设置为 true，才会生成预览链接。</p>
 * @method UserFlowType getUserFlowType() 获取<p>用户自定义合同类型。</p><p>返回配置模板的时候选择的合同类型。<a href="https://qcloudimg.tencent-cloud.cn/raw/4a766f0540253bf2a05d50c58bd14990.png">点击查看配置的位置</a></p><p>自定义合同类型配置的地方如链接图所示。<a href="https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png">点击查看自定义合同类型管理的位置</a></p>
 * @method void setUserFlowType(UserFlowType $UserFlowType) 设置<p>用户自定义合同类型。</p><p>返回配置模板的时候选择的合同类型。<a href="https://qcloudimg.tencent-cloud.cn/raw/4a766f0540253bf2a05d50c58bd14990.png">点击查看配置的位置</a></p><p>自定义合同类型配置的地方如链接图所示。<a href="https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png">点击查看自定义合同类型管理的位置</a></p>
 * @method string getTemplateVersion() 获取<p>模板版本的编号，旨在标识其独特的版本信息，通常呈现为一串字符串，由日期和递增的数字组成</p>
 * @method void setTemplateVersion(string $TemplateVersion) 设置<p>模板版本的编号，旨在标识其独特的版本信息，通常呈现为一串字符串，由日期和递增的数字组成</p>
 * @method boolean getPublished() 获取<p>模板是否已发布可以分为以下两种状态：</p><p><b>true</b>：已发布状态，表示该模板已经发布并可以正常使用。<br><b>false</b>：未发布状态，表示该模板还未发布，无法使用。</p>
 * @method void setPublished(boolean $Published) 设置<p>模板是否已发布可以分为以下两种状态：</p><p><b>true</b>：已发布状态，表示该模板已经发布并可以正常使用。<br><b>false</b>：未发布状态，表示该模板还未发布，无法使用。</p>
 * @method string getShareTemplateId() 获取<p><b>集体账号场景下</b>： 集团账号分享给子企业的模板的来源模板ID。</p>
 * @method void setShareTemplateId(string $ShareTemplateId) 设置<p><b>集体账号场景下</b>： 集团账号分享给子企业的模板的来源模板ID。</p>
 * @method array getTemplateSeals() 获取<p>此模板配置的预填印章列表（包括自动签署指定的印章）</p>
 * @method void setTemplateSeals(array $TemplateSeals) 设置<p>此模板配置的预填印章列表（包括自动签署指定的印章）</p>
 * @method array getSeals() 获取<p>模板内部指定的印章列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeals(array $Seals) 设置<p>模板内部指定的印章列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TemplateInfo extends AbstractModel
{
    /**
     * @var string <p>模板ID，模板的唯一标识</p>
     */
    public $TemplateId;

    /**
     * @var string <p>模板的名字</p>
     */
    public $TemplateName;

    /**
     * @var array <p>此模块需要签署的各个参与方的角色列表。RecipientId标识每个参与方角色对应的唯一标识符，用于确定此角色的信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的签署参与方角色列表的样子</a></p>
     */
    public $Recipients;

    /**
     * @var array <p>模板的填充控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/cb2f58529fca8d909258f9d45a56f7f4.png">点击查看在模板中配置的填充控件的样子</a></p>
     */
    public $Components;

    /**
     * @var array <p>此模板中的签署控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/29bc6ed753a5a0fce4a3ab02e2c0d955.png">点击查看在模板中配置的签署控件的样子</a></p>
     */
    public $SignComponents;

    /**
     * @var string <p>模板描述信息</p>
     */
    public $Description;

    /**
     * @var array <p>此模板的资源ID</p>
     */
    public $DocumentResourceIds;

    /**
     * @var array <p>生成模板的文件基础信息</p>
     */
    public $FileInfos;

    /**
     * @var array <p>此模板里边附件的资源ID</p>
     */
    public $AttachmentResourceIds;

    /**
     * @var array <p>签署人参与签署的顺序，可以分为以下两种方式：</p><p><b>无序</b>：不限定签署人的签署顺序，签署人可以在任何时间签署。此种方式值为 ：｛-1｝<br><b>有序</b>：通过序列数字标识签署顺序，从0开始编码，数字越大签署顺序越靠后，签署人按照指定的顺序依次签署。此种方式值为： ｛0，1，2，3………｝</p>
     */
    public $SignOrder;

    /**
     * @var integer <p>此模板的状态可以分为以下几种：</p><p><b>-1</b>：不可用状态。<br><b>0</b>：草稿态，即模板正在编辑或未发布状态。<br><b>1</b>：正式态，只有正式态的模板才可以发起合同。</p>
     */
    public $Status;

    /**
     * @var string <p>模板的创建者信息，用户的名字</p><p>注： <code>是创建者的名字，而非创建者的用户ID</code></p>
     */
    public $Creator;

    /**
     * @var integer <p>模板创建的时间戳，格式为Unix标准时间戳（秒）</p>
     */
    public $CreatedOn;

    /**
     * @var Recipient <p>此模板创建方角色信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的创建方角色的样子</a></p>
     */
    public $Promoter;

    /**
     * @var integer <p>模板类型可以分为以下两种：</p><p><b>1</b>：带有本企业自动签署的模板，即签署过程无需签署人手动操作，系统自动完成签署。<br><b>3</b>：普通模板，即签署人需要手动进行签署操作。</p>
     */
    public $TemplateType;

    /**
     * @var integer <p>模板可用状态可以分为以下两种：</p><p><b>1</b>：（默认）启用状态，即模板可以正常使用。<br><b>2</b>：停用状态，即模板暂时无法使用。</p><p>可到控制台启停模板</p>
     */
    public $Available;

    /**
     * @var string <p>创建模板的企业ID，电子签的机构ID</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>模板创建人用户ID</p>
     */
    public $CreatorId;

    /**
     * @var string <p>模板的 H5 预览链接，有效期为 5 分钟。<br>您可以通过浏览器直接打开此链接预览模板，或将其嵌入到 iframe 中进行预览。</p><p>注意：只有在请求接口时将 <b>WithPreviewUrl </b>参数设置为 true，才会生成预览链接。</p>
     */
    public $PreviewUrl;

    /**
     * @var UserFlowType <p>用户自定义合同类型。</p><p>返回配置模板的时候选择的合同类型。<a href="https://qcloudimg.tencent-cloud.cn/raw/4a766f0540253bf2a05d50c58bd14990.png">点击查看配置的位置</a></p><p>自定义合同类型配置的地方如链接图所示。<a href="https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png">点击查看自定义合同类型管理的位置</a></p>
     */
    public $UserFlowType;

    /**
     * @var string <p>模板版本的编号，旨在标识其独特的版本信息，通常呈现为一串字符串，由日期和递增的数字组成</p>
     */
    public $TemplateVersion;

    /**
     * @var boolean <p>模板是否已发布可以分为以下两种状态：</p><p><b>true</b>：已发布状态，表示该模板已经发布并可以正常使用。<br><b>false</b>：未发布状态，表示该模板还未发布，无法使用。</p>
     */
    public $Published;

    /**
     * @var string <p><b>集体账号场景下</b>： 集团账号分享给子企业的模板的来源模板ID。</p>
     */
    public $ShareTemplateId;

    /**
     * @var array <p>此模板配置的预填印章列表（包括自动签署指定的印章）</p>
     */
    public $TemplateSeals;

    /**
     * @var array <p>模板内部指定的印章列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Seals;

    /**
     * @param string $TemplateId <p>模板ID，模板的唯一标识</p>
     * @param string $TemplateName <p>模板的名字</p>
     * @param array $Recipients <p>此模块需要签署的各个参与方的角色列表。RecipientId标识每个参与方角色对应的唯一标识符，用于确定此角色的信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的签署参与方角色列表的样子</a></p>
     * @param array $Components <p>模板的填充控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/cb2f58529fca8d909258f9d45a56f7f4.png">点击查看在模板中配置的填充控件的样子</a></p>
     * @param array $SignComponents <p>此模板中的签署控件列表</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/29bc6ed753a5a0fce4a3ab02e2c0d955.png">点击查看在模板中配置的签署控件的样子</a></p>
     * @param string $Description <p>模板描述信息</p>
     * @param array $DocumentResourceIds <p>此模板的资源ID</p>
     * @param array $FileInfos <p>生成模板的文件基础信息</p>
     * @param array $AttachmentResourceIds <p>此模板里边附件的资源ID</p>
     * @param array $SignOrder <p>签署人参与签署的顺序，可以分为以下两种方式：</p><p><b>无序</b>：不限定签署人的签署顺序，签署人可以在任何时间签署。此种方式值为 ：｛-1｝<br><b>有序</b>：通过序列数字标识签署顺序，从0开始编码，数字越大签署顺序越靠后，签署人按照指定的顺序依次签署。此种方式值为： ｛0，1，2，3………｝</p>
     * @param integer $Status <p>此模板的状态可以分为以下几种：</p><p><b>-1</b>：不可用状态。<br><b>0</b>：草稿态，即模板正在编辑或未发布状态。<br><b>1</b>：正式态，只有正式态的模板才可以发起合同。</p>
     * @param string $Creator <p>模板的创建者信息，用户的名字</p><p>注： <code>是创建者的名字，而非创建者的用户ID</code></p>
     * @param integer $CreatedOn <p>模板创建的时间戳，格式为Unix标准时间戳（秒）</p>
     * @param Recipient $Promoter <p>此模板创建方角色信息。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/e082bbcc0d923f8cb723d98382410aa2.png">点击查看在模板中配置的创建方角色的样子</a></p>
     * @param integer $TemplateType <p>模板类型可以分为以下两种：</p><p><b>1</b>：带有本企业自动签署的模板，即签署过程无需签署人手动操作，系统自动完成签署。<br><b>3</b>：普通模板，即签署人需要手动进行签署操作。</p>
     * @param integer $Available <p>模板可用状态可以分为以下两种：</p><p><b>1</b>：（默认）启用状态，即模板可以正常使用。<br><b>2</b>：停用状态，即模板暂时无法使用。</p><p>可到控制台启停模板</p>
     * @param string $OrganizationId <p>创建模板的企业ID，电子签的机构ID</p>
     * @param string $CreatorId <p>模板创建人用户ID</p>
     * @param string $PreviewUrl <p>模板的 H5 预览链接，有效期为 5 分钟。<br>您可以通过浏览器直接打开此链接预览模板，或将其嵌入到 iframe 中进行预览。</p><p>注意：只有在请求接口时将 <b>WithPreviewUrl </b>参数设置为 true，才会生成预览链接。</p>
     * @param UserFlowType $UserFlowType <p>用户自定义合同类型。</p><p>返回配置模板的时候选择的合同类型。<a href="https://qcloudimg.tencent-cloud.cn/raw/4a766f0540253bf2a05d50c58bd14990.png">点击查看配置的位置</a></p><p>自定义合同类型配置的地方如链接图所示。<a href="https://qcloudimg.tencent-cloud.cn/raw/36582cea03ae6a2559894844942b5d5c.png">点击查看自定义合同类型管理的位置</a></p>
     * @param string $TemplateVersion <p>模板版本的编号，旨在标识其独特的版本信息，通常呈现为一串字符串，由日期和递增的数字组成</p>
     * @param boolean $Published <p>模板是否已发布可以分为以下两种状态：</p><p><b>true</b>：已发布状态，表示该模板已经发布并可以正常使用。<br><b>false</b>：未发布状态，表示该模板还未发布，无法使用。</p>
     * @param string $ShareTemplateId <p><b>集体账号场景下</b>： 集团账号分享给子企业的模板的来源模板ID。</p>
     * @param array $TemplateSeals <p>此模板配置的预填印章列表（包括自动签署指定的印章）</p>
     * @param array $Seals <p>模板内部指定的印章列表</p>
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Recipients",$param) and $param["Recipients"] !== null) {
            $this->Recipients = [];
            foreach ($param["Recipients"] as $key => $value){
                $obj = new Recipient();
                $obj->deserialize($value);
                array_push($this->Recipients, $obj);
            }
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DocumentResourceIds",$param) and $param["DocumentResourceIds"] !== null) {
            $this->DocumentResourceIds = $param["DocumentResourceIds"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("AttachmentResourceIds",$param) and $param["AttachmentResourceIds"] !== null) {
            $this->AttachmentResourceIds = $param["AttachmentResourceIds"];
        }

        if (array_key_exists("SignOrder",$param) and $param["SignOrder"] !== null) {
            $this->SignOrder = $param["SignOrder"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("Promoter",$param) and $param["Promoter"] !== null) {
            $this->Promoter = new Recipient();
            $this->Promoter->deserialize($param["Promoter"]);
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("UserFlowType",$param) and $param["UserFlowType"] !== null) {
            $this->UserFlowType = new UserFlowType();
            $this->UserFlowType->deserialize($param["UserFlowType"]);
        }

        if (array_key_exists("TemplateVersion",$param) and $param["TemplateVersion"] !== null) {
            $this->TemplateVersion = $param["TemplateVersion"];
        }

        if (array_key_exists("Published",$param) and $param["Published"] !== null) {
            $this->Published = $param["Published"];
        }

        if (array_key_exists("ShareTemplateId",$param) and $param["ShareTemplateId"] !== null) {
            $this->ShareTemplateId = $param["ShareTemplateId"];
        }

        if (array_key_exists("TemplateSeals",$param) and $param["TemplateSeals"] !== null) {
            $this->TemplateSeals = [];
            foreach ($param["TemplateSeals"] as $key => $value){
                $obj = new SealInfo();
                $obj->deserialize($value);
                array_push($this->TemplateSeals, $obj);
            }
        }

        if (array_key_exists("Seals",$param) and $param["Seals"] !== null) {
            $this->Seals = [];
            foreach ($param["Seals"] as $key => $value){
                $obj = new SealInfo();
                $obj->deserialize($value);
                array_push($this->Seals, $obj);
            }
        }
    }
}
