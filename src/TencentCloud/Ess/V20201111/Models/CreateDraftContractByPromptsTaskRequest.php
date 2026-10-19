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
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</p>
 * @method string getRequirement() 获取<p>起草要求，范围要求 5-1000 字</p>
 * @method void setRequirement(string $Requirement) 设置<p>起草要求，范围要求 5-1000 字</p>
 * @method string getReferenceTemplateId() 获取<p>参考模板文件资源id（PDF/Word格式），大小不超过1M，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">上传文件</a>接口来获取。</p>
 * @method void setReferenceTemplateId(string $ReferenceTemplateId) 设置<p>参考模板文件资源id（PDF/Word格式），大小不超过1M，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">上传文件</a>接口来获取。</p>
 * @method array getRequirementFileIds() 获取<p>相关规定文件资源id列表（PDF/Word格式），最多3个文件，每个大小不超过1M，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">上传文件</a>接口来获取。</p>
 * @method void setRequirementFileIds(array $RequirementFileIds) 设置<p>相关规定文件资源id列表（PDF/Word格式），最多3个文件，每个大小不超过1M，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">上传文件</a>接口来获取。</p>
 * @method string getContractLanguage() 获取<p>起草合同的语言要求（zh，en）默认zh</p>
 * @method void setContractLanguage(string $ContractLanguage) 设置<p>起草合同的语言要求（zh，en）默认zh</p>
 * @method string getReviewTaskId() 获取<p>审查任务id，仅支持传入1个，通过<a href="https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/CreateBatchContractReviewTask/">批量创建合同审查任务</a>接口来获取。</p>
 * @method void setReviewTaskId(string $ReviewTaskId) 设置<p>审查任务id，仅支持传入1个，通过<a href="https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/CreateBatchContractReviewTask/">批量创建合同审查任务</a>接口来获取。</p>
 */
class CreateDraftContractByPromptsTaskRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</p>
     */
    public $Operator;

    /**
     * @var string <p>起草要求，范围要求 5-1000 字</p>
     */
    public $Requirement;

    /**
     * @var string <p>参考模板文件资源id（PDF/Word格式），大小不超过1M，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">上传文件</a>接口来获取。</p>
     */
    public $ReferenceTemplateId;

    /**
     * @var array <p>相关规定文件资源id列表（PDF/Word格式），最多3个文件，每个大小不超过1M，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">上传文件</a>接口来获取。</p>
     */
    public $RequirementFileIds;

    /**
     * @var string <p>起草合同的语言要求（zh，en）默认zh</p>
     */
    public $ContractLanguage;

    /**
     * @var string <p>审查任务id，仅支持传入1个，通过<a href="https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/CreateBatchContractReviewTask/">批量创建合同审查任务</a>接口来获取。</p>
     */
    public $ReviewTaskId;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</p>
     * @param string $Requirement <p>起草要求，范围要求 5-1000 字</p>
     * @param string $ReferenceTemplateId <p>参考模板文件资源id（PDF/Word格式），大小不超过1M，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">上传文件</a>接口来获取。</p>
     * @param array $RequirementFileIds <p>相关规定文件资源id列表（PDF/Word格式），最多3个文件，每个大小不超过1M，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">上传文件</a>接口来获取。</p>
     * @param string $ContractLanguage <p>起草合同的语言要求（zh，en）默认zh</p>
     * @param string $ReviewTaskId <p>审查任务id，仅支持传入1个，通过<a href="https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/CreateBatchContractReviewTask/">批量创建合同审查任务</a>接口来获取。</p>
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

        if (array_key_exists("ReviewTaskId",$param) and $param["ReviewTaskId"] !== null) {
            $this->ReviewTaskId = $param["ReviewTaskId"];
        }
    }
}
