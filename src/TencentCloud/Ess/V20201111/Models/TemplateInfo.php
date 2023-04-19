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
 * 二期接口返回的模板的信息结构
 *
 * @method string getTemplateId() 获取模板ID
 * @method void setTemplateId(string $TemplateId) 设置模板ID
 * @method string getTemplateName() 获取模板名字
 * @method void setTemplateName(string $TemplateName) 设置模板名字
 * @method string getDescription() 获取模板描述信息
 * @method void setDescription(string $Description) 设置模板描述信息
 * @method array getDocumentResourceIds() 获取模板关联的资源IDs
 * @method void setDocumentResourceIds(array $DocumentResourceIds) 设置模板关联的资源IDs
 * @method array getFileInfos() 获取返回的文件信息结构
 * @method void setFileInfos(array $FileInfos) 设置返回的文件信息结构
 * @method array getAttachmentResourceIds() 获取附件关联的资源ID是
 * @method void setAttachmentResourceIds(array $AttachmentResourceIds) 设置附件关联的资源ID是
 * @method array getSignOrder() 获取签署顺序
 * @method void setSignOrder(array $SignOrder) 设置签署顺序
 * @method array getRecipients() 获取签署参与者的信息
 * @method void setRecipients(array $Recipients) 设置签署参与者的信息
 * @method array getComponents() 获取模板信息结构
 * @method void setComponents(array $Components) 设置模板信息结构
 * @method array getSignComponents() 获取签署区模板信息结构
 * @method void setSignComponents(array $SignComponents) 设置签署区模板信息结构
 * @method integer getStatus() 获取模板状态(-1:不可用；0:草稿态；1:正式态)
 * @method void setStatus(integer $Status) 设置模板状态(-1:不可用；0:草稿态；1:正式态)
 * @method string getCreator() 获取模板的创建人
 * @method void setCreator(string $Creator) 设置模板的创建人
 * @method integer getCreatedOn() 获取模板创建的时间戳（精确到秒）
 * @method void setCreatedOn(integer $CreatedOn) 设置模板创建的时间戳（精确到秒）
 * @method Recipient getPromoter() 获取发起人角色信息
 * @method void setPromoter(Recipient $Promoter) 设置发起人角色信息
 * @method integer getAvailable() 获取模板可用状态，取值：1启用（默认），2停用
 * @method void setAvailable(integer $Available) 设置模板可用状态，取值：1启用（默认），2停用
 * @method string getOrganizationId() 获取模板创建组织id
 * @method void setOrganizationId(string $OrganizationId) 设置模板创建组织id
 * @method string getPreviewUrl() 获取模板预览链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreviewUrl(string $PreviewUrl) 设置模板预览链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateVersion() 获取模板版本。默认为空时，全数字字符，初始版本为yyyyMMdd001。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateVersion(string $TemplateVersion) 设置模板版本。默认为空时，全数字字符，初始版本为yyyyMMdd001。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPublished() 获取模板是否已发布。true-已发布；false-未发布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublished(boolean $Published) 设置模板是否已发布。true-已发布；false-未发布
注意：此字段可能返回 null，表示取不到有效值。
 */
class TemplateInfo extends AbstractModel
{
    /**
     * @var string 模板ID
     */
    public $TemplateId;

    /**
     * @var string 模板名字
     */
    public $TemplateName;

    /**
     * @var string 模板描述信息
     */
    public $Description;

    /**
     * @var array 模板关联的资源IDs
     */
    public $DocumentResourceIds;

    /**
     * @var array 返回的文件信息结构
     */
    public $FileInfos;

    /**
     * @var array 附件关联的资源ID是
     */
    public $AttachmentResourceIds;

    /**
     * @var array 签署顺序
     */
    public $SignOrder;

    /**
     * @var array 签署参与者的信息
     */
    public $Recipients;

    /**
     * @var array 模板信息结构
     */
    public $Components;

    /**
     * @var array 签署区模板信息结构
     */
    public $SignComponents;

    /**
     * @var integer 模板状态(-1:不可用；0:草稿态；1:正式态)
     */
    public $Status;

    /**
     * @var string 模板的创建人
     */
    public $Creator;

    /**
     * @var integer 模板创建的时间戳（精确到秒）
     */
    public $CreatedOn;

    /**
     * @var Recipient 发起人角色信息
     */
    public $Promoter;

    /**
     * @var integer 模板可用状态，取值：1启用（默认），2停用
     */
    public $Available;

    /**
     * @var string 模板创建组织id
     */
    public $OrganizationId;

    /**
     * @var string 模板预览链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreviewUrl;

    /**
     * @var string 模板版本。默认为空时，全数字字符，初始版本为yyyyMMdd001。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateVersion;

    /**
     * @var boolean 模板是否已发布。true-已发布；false-未发布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Published;

    /**
     * @param string $TemplateId 模板ID
     * @param string $TemplateName 模板名字
     * @param string $Description 模板描述信息
     * @param array $DocumentResourceIds 模板关联的资源IDs
     * @param array $FileInfos 返回的文件信息结构
     * @param array $AttachmentResourceIds 附件关联的资源ID是
     * @param array $SignOrder 签署顺序
     * @param array $Recipients 签署参与者的信息
     * @param array $Components 模板信息结构
     * @param array $SignComponents 签署区模板信息结构
     * @param integer $Status 模板状态(-1:不可用；0:草稿态；1:正式态)
     * @param string $Creator 模板的创建人
     * @param integer $CreatedOn 模板创建的时间戳（精确到秒）
     * @param Recipient $Promoter 发起人角色信息
     * @param integer $Available 模板可用状态，取值：1启用（默认），2停用
     * @param string $OrganizationId 模板创建组织id
     * @param string $PreviewUrl 模板预览链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateVersion 模板版本。默认为空时，全数字字符，初始版本为yyyyMMdd001。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Published 模板是否已发布。true-已发布；false-未发布
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

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("TemplateVersion",$param) and $param["TemplateVersion"] !== null) {
            $this->TemplateVersion = $param["TemplateVersion"];
        }

        if (array_key_exists("Published",$param) and $param["Published"] !== null) {
            $this->Published = $param["Published"];
        }
    }
}
