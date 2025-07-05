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
 * CreateContractDiffTaskWebUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。使用此接口时，必须填写userId。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。使用此接口时，必须填写userId。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method boolean getSkipFileUpload() 获取是否跳过文件上传确认页。
当该参数值为`false`时，`OriginalFileResourceId`和`DiffFileResourceId`参数不需要传值，需要在生成的web页面中上传对比文件；
当该参数值为`true`时，`OriginalFileResourceId`和`DiffFileResourceId`参数必填，生成的web页面将跳过上传页面显示对比结果。
 * @method void setSkipFileUpload(boolean $SkipFileUpload) 设置是否跳过文件上传确认页。
当该参数值为`false`时，`OriginalFileResourceId`和`DiffFileResourceId`参数不需要传值，需要在生成的web页面中上传对比文件；
当该参数值为`true`时，`OriginalFileResourceId`和`DiffFileResourceId`参数必填，生成的web页面将跳过上传页面显示对比结果。
 * @method string getOriginalFileResourceId() 获取需要对比的原合同文件资源ID，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
 * @method void setOriginalFileResourceId(string $OriginalFileResourceId) 设置需要对比的原合同文件资源ID，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
 * @method string getDiffFileResourceId() 获取需要对比的新合同文件资源ID，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
 * @method void setDiffFileResourceId(string $DiffFileResourceId) 设置需要对比的新合同文件资源ID，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
 */
class CreateContractDiffTaskWebUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。使用此接口时，必须填写userId。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var boolean 是否跳过文件上传确认页。
当该参数值为`false`时，`OriginalFileResourceId`和`DiffFileResourceId`参数不需要传值，需要在生成的web页面中上传对比文件；
当该参数值为`true`时，`OriginalFileResourceId`和`DiffFileResourceId`参数必填，生成的web页面将跳过上传页面显示对比结果。
     */
    public $SkipFileUpload;

    /**
     * @var string 需要对比的原合同文件资源ID，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
     */
    public $OriginalFileResourceId;

    /**
     * @var string 需要对比的新合同文件资源ID，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
     */
    public $DiffFileResourceId;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。使用此接口时，必须填写userId。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param boolean $SkipFileUpload 是否跳过文件上传确认页。
当该参数值为`false`时，`OriginalFileResourceId`和`DiffFileResourceId`参数不需要传值，需要在生成的web页面中上传对比文件；
当该参数值为`true`时，`OriginalFileResourceId`和`DiffFileResourceId`参数必填，生成的web页面将跳过上传页面显示对比结果。
     * @param string $OriginalFileResourceId 需要对比的原合同文件资源ID，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
     * @param string $DiffFileResourceId 需要对比的新合同文件资源ID，通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">UploadFiles</a>接口获取文件资源ID。
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

        if (array_key_exists("SkipFileUpload",$param) and $param["SkipFileUpload"] !== null) {
            $this->SkipFileUpload = $param["SkipFileUpload"];
        }

        if (array_key_exists("OriginalFileResourceId",$param) and $param["OriginalFileResourceId"] !== null) {
            $this->OriginalFileResourceId = $param["OriginalFileResourceId"];
        }

        if (array_key_exists("DiffFileResourceId",$param) and $param["DiffFileResourceId"] !== null) {
            $this->DiffFileResourceId = $param["DiffFileResourceId"];
        }
    }
}
