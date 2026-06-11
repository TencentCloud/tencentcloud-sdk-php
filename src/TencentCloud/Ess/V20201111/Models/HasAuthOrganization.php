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
 * 授权企业列表（目前仅用于“企业自动签 -> 合作企业授权”）
 *
 * @method string getOrganizationId() 获取<p>授权企业id</p>
 * @method void setOrganizationId(string $OrganizationId) 设置<p>授权企业id</p>
 * @method string getOrganizationName() 获取<p>授权企业名称</p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>授权企业名称</p>
 * @method string getAuthorizedOrganizationId() 获取<p>被授权企业id</p>
 * @method void setAuthorizedOrganizationId(string $AuthorizedOrganizationId) 设置<p>被授权企业id</p>
 * @method string getAuthorizedOrganizationName() 获取<p>被授权企业名称</p>
 * @method void setAuthorizedOrganizationName(string $AuthorizedOrganizationName) 设置<p>被授权企业名称</p>
 * @method string getTemplateId() 获取<p>授权模板id（仅当授权方式为模板授权时有值）</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>授权模板id（仅当授权方式为模板授权时有值）</p>
 * @method string getTemplateName() 获取<p>授权模板名称（仅当授权方式为模板授权时有值）</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>授权模板名称（仅当授权方式为模板授权时有值）</p>
 * @method integer getAuthorizeTime() 获取<p>授权时间，格式为时间戳，单位s</p>
 * @method void setAuthorizeTime(integer $AuthorizeTime) 设置<p>授权时间，格式为时间戳，单位s</p>
 */
class HasAuthOrganization extends AbstractModel
{
    /**
     * @var string <p>授权企业id</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>授权企业名称</p>
     */
    public $OrganizationName;

    /**
     * @var string <p>被授权企业id</p>
     */
    public $AuthorizedOrganizationId;

    /**
     * @var string <p>被授权企业名称</p>
     */
    public $AuthorizedOrganizationName;

    /**
     * @var string <p>授权模板id（仅当授权方式为模板授权时有值）</p>
     */
    public $TemplateId;

    /**
     * @var string <p>授权模板名称（仅当授权方式为模板授权时有值）</p>
     */
    public $TemplateName;

    /**
     * @var integer <p>授权时间，格式为时间戳，单位s</p>
     */
    public $AuthorizeTime;

    /**
     * @param string $OrganizationId <p>授权企业id</p>
     * @param string $OrganizationName <p>授权企业名称</p>
     * @param string $AuthorizedOrganizationId <p>被授权企业id</p>
     * @param string $AuthorizedOrganizationName <p>被授权企业名称</p>
     * @param string $TemplateId <p>授权模板id（仅当授权方式为模板授权时有值）</p>
     * @param string $TemplateName <p>授权模板名称（仅当授权方式为模板授权时有值）</p>
     * @param integer $AuthorizeTime <p>授权时间，格式为时间戳，单位s</p>
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("AuthorizedOrganizationId",$param) and $param["AuthorizedOrganizationId"] !== null) {
            $this->AuthorizedOrganizationId = $param["AuthorizedOrganizationId"];
        }

        if (array_key_exists("AuthorizedOrganizationName",$param) and $param["AuthorizedOrganizationName"] !== null) {
            $this->AuthorizedOrganizationName = $param["AuthorizedOrganizationName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("AuthorizeTime",$param) and $param["AuthorizeTime"] !== null) {
            $this->AuthorizeTime = $param["AuthorizeTime"];
        }
    }
}
