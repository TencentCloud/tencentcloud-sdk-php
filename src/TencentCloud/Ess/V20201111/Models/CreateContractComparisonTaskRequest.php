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
 * @method UserInfo getOperator() 获取<p>执行合同审查任务的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行合同审查任务的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getOriginFileResourceId() 获取<p>原版文件ID，对比基准的旧版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。</p>
 * @method void setOriginFileResourceId(string $OriginFileResourceId) 设置<p>原版文件ID，对比基准的旧版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。</p>
 * @method string getDiffFileResourceId() 获取<p>新版文件ID，与旧版进行对比的新版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。</p>
 * @method void setDiffFileResourceId(string $DiffFileResourceId) 设置<p>新版文件ID，与旧版进行对比的新版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。</p>
 * @method string getComment() 获取<p>对比任务备注，长度不能超过50个字符。</p>
 * @method void setComment(string $Comment) 设置<p>对比任务备注，长度不能超过50个字符。</p>
 * @method string getUserData() 获取<p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2">回调通知</a>模块。</p>
 * @method void setUserData(string $UserData) 设置<p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2">回调通知</a>模块。</p>
 * @method array getTags() 获取<p>标签列表，用户自定义的键值对（Key-Value），可绑定到资源上，用于资源的分类、管理和访问控制。</p>
 * @method void setTags(array $Tags) 设置<p>标签列表，用户自定义的键值对（Key-Value），可绑定到资源上，用于资源的分类、管理和访问控制。</p>
 * @method integer getRevisionOperation() 获取<p>文档修订操作类型，对比任务执行前处理修订内容，适用于doc、docx存在修订情况。<br> 类型如下： <ul> <li> <strong>0</strong>：不做任何操作</li> <li> <strong>1</strong>：接受所有修订</li> </ul></p>
 * @method void setRevisionOperation(integer $RevisionOperation) 设置<p>文档修订操作类型，对比任务执行前处理修订内容，适用于doc、docx存在修订情况。<br> 类型如下： <ul> <li> <strong>0</strong>：不做任何操作</li> <li> <strong>1</strong>：接受所有修订</li> </ul></p>
 */
class CreateContractComparisonTaskRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行合同审查任务的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>原版文件ID，对比基准的旧版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。</p>
     */
    public $OriginFileResourceId;

    /**
     * @var string <p>新版文件ID，与旧版进行对比的新版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。</p>
     */
    public $DiffFileResourceId;

    /**
     * @var string <p>对比任务备注，长度不能超过50个字符。</p>
     */
    public $Comment;

    /**
     * @var string <p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2">回调通知</a>模块。</p>
     */
    public $UserData;

    /**
     * @var array <p>标签列表，用户自定义的键值对（Key-Value），可绑定到资源上，用于资源的分类、管理和访问控制。</p>
     */
    public $Tags;

    /**
     * @var integer <p>文档修订操作类型，对比任务执行前处理修订内容，适用于doc、docx存在修订情况。<br> 类型如下： <ul> <li> <strong>0</strong>：不做任何操作</li> <li> <strong>1</strong>：接受所有修订</li> </ul></p>
     */
    public $RevisionOperation;

    /**
     * @param UserInfo $Operator <p>执行合同审查任务的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $OriginFileResourceId <p>原版文件ID，对比基准的旧版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。</p>
     * @param string $DiffFileResourceId <p>新版文件ID，与旧版进行对比的新版本文件唯一标识，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。</p>
     * @param string $Comment <p>对比任务备注，长度不能超过50个字符。</p>
     * @param string $UserData <p>调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。</p><p>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2">回调通知</a>模块。</p>
     * @param array $Tags <p>标签列表，用户自定义的键值对（Key-Value），可绑定到资源上，用于资源的分类、管理和访问控制。</p>
     * @param integer $RevisionOperation <p>文档修订操作类型，对比任务执行前处理修订内容，适用于doc、docx存在修订情况。<br> 类型如下： <ul> <li> <strong>0</strong>：不做任何操作</li> <li> <strong>1</strong>：接受所有修订</li> </ul></p>
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

        if (array_key_exists("RevisionOperation",$param) and $param["RevisionOperation"] !== null) {
            $this->RevisionOperation = $param["RevisionOperation"];
        }
    }
}
