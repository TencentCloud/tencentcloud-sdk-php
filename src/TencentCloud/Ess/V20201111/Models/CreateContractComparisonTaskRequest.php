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
 * CreateContractComparisonTask请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getOriginFileResourceId() 获取原版文件ID，对比基准的旧版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
 * @method void setOriginFileResourceId(string $OriginFileResourceId) 设置原版文件ID，对比基准的旧版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
 * @method string getDiffFileResourceId() 获取新版文件ID，与旧版进行对比的新版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
 * @method void setDiffFileResourceId(string $DiffFileResourceId) 设置新版文件ID，与旧版进行对比的新版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
 * @method string getComment() 获取对比任务备注，长度不能超过50个字符。
 * @method void setComment(string $Comment) 设置对比任务备注，长度不能超过50个字符。
 * @method string getUserData() 获取调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的[回调通知](https://qian.tencent.com/developers/company/callback_types_v2)模块。
 * @method void setUserData(string $UserData) 设置调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的[回调通知](https://qian.tencent.com/developers/company/callback_types_v2)模块。
 * @method array getTags() 获取标签列表，用户自定义的键值对（Key-Value），可绑定到资源上，用于资源的分类、管理和访问控制。
 * @method void setTags(array $Tags) 设置标签列表，用户自定义的键值对（Key-Value），可绑定到资源上，用于资源的分类、管理和访问控制。
 */
class CreateContractComparisonTaskRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 原版文件ID，对比基准的旧版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
     */
    public $OriginFileResourceId;

    /**
     * @var string 新版文件ID，与旧版进行对比的新版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
     */
    public $DiffFileResourceId;

    /**
     * @var string 对比任务备注，长度不能超过50个字符。
     */
    public $Comment;

    /**
     * @var string 调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的[回调通知](https://qian.tencent.com/developers/company/callback_types_v2)模块。
     */
    public $UserData;

    /**
     * @var array 标签列表，用户自定义的键值对（Key-Value），可绑定到资源上，用于资源的分类、管理和访问控制。
     */
    public $Tags;

    /**
     * @param UserInfo $Operator 执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $OriginFileResourceId 原版文件ID，对比基准的旧版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
     * @param string $DiffFileResourceId 新版文件ID，与旧版进行对比的新版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
     * @param string $Comment 对比任务备注，长度不能超过50个字符。
     * @param string $UserData 调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。

在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的[回调通知](https://qian.tencent.com/developers/company/callback_types_v2)模块。
     * @param array $Tags 标签列表，用户自定义的键值对（Key-Value），可绑定到资源上，用于资源的分类、管理和访问控制。
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

        if (array_key_exists("OriginFileResourceId",$param) and $param["OriginFileResourceId"] !== null) {
            $this->OriginFileResourceId = $param["OriginFileResourceId"];
        }

        if (array_key_exists("DiffFileResourceId",$param) and $param["DiffFileResourceId"] !== null) {
            $this->DiffFileResourceId = $param["DiffFileResourceId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
