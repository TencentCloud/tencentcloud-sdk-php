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
 * CreateDraftContractByPromptsTask请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
 * @method string getRequirement() 获取起草要求，范围要求 5-1000 字
 * @method void setRequirement(string $Requirement) 设置起草要求，范围要求 5-1000 字
 * @method string getReferenceTemplateId() 获取参考模板文件资源id（PDF/Word格式），大小不超过1M，通过[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)接口来获取。
 * @method void setReferenceTemplateId(string $ReferenceTemplateId) 设置参考模板文件资源id（PDF/Word格式），大小不超过1M，通过[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)接口来获取。
 * @method array getRequirementFileIds() 获取相关规定文件资源id列表（PDF/Word格式），最多3个文件，每个大小不超过1M，通过[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)接口来获取。
 * @method void setRequirementFileIds(array $RequirementFileIds) 设置相关规定文件资源id列表（PDF/Word格式），最多3个文件，每个大小不超过1M，通过[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)接口来获取。
 * @method string getContractLanguage() 获取起草合同的语言要求（zh，en）默认zh
 * @method void setContractLanguage(string $ContractLanguage) 设置起草合同的语言要求（zh，en）默认zh
 */
class CreateDraftContractByPromptsTaskRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
     */
    public $Operator;

    /**
     * @var string 起草要求，范围要求 5-1000 字
     */
    public $Requirement;

    /**
     * @var string 参考模板文件资源id（PDF/Word格式），大小不超过1M，通过[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)接口来获取。
     */
    public $ReferenceTemplateId;

    /**
     * @var array 相关规定文件资源id列表（PDF/Word格式），最多3个文件，每个大小不超过1M，通过[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)接口来获取。
     */
    public $RequirementFileIds;

    /**
     * @var string 起草合同的语言要求（zh，en）默认zh
     */
    public $ContractLanguage;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
     * @param string $Requirement 起草要求，范围要求 5-1000 字
     * @param string $ReferenceTemplateId 参考模板文件资源id（PDF/Word格式），大小不超过1M，通过[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)接口来获取。
     * @param array $RequirementFileIds 相关规定文件资源id列表（PDF/Word格式），最多3个文件，每个大小不超过1M，通过[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)接口来获取。
     * @param string $ContractLanguage 起草合同的语言要求（zh，en）默认zh
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

        if (array_key_exists("Requirement",$param) and $param["Requirement"] !== null) {
            $this->Requirement = $param["Requirement"];
        }

        if (array_key_exists("ReferenceTemplateId",$param) and $param["ReferenceTemplateId"] !== null) {
            $this->ReferenceTemplateId = $param["ReferenceTemplateId"];
        }

        if (array_key_exists("RequirementFileIds",$param) and $param["RequirementFileIds"] !== null) {
            $this->RequirementFileIds = $param["RequirementFileIds"];
        }

        if (array_key_exists("ContractLanguage",$param) and $param["ContractLanguage"] !== null) {
            $this->ContractLanguage = $param["ContractLanguage"];
        }
    }
}
