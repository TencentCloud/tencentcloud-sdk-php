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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadFilesDs请求参数结构体
 *
 * @method string getProjectId() 获取返回值
 * @method void setProjectId(string $ProjectId) 设置返回值
 * @method array getFileNames() 获取临时文件名列表，如果有重复会自动去重
 * @method void setFileNames(array $FileNames) 设置临时文件名列表，如果有重复会自动去重
 * @method string getOriginDomain() 获取跨域访问域名，文件最终上传到共享存储，上传时可能会出现跨域问题，如果是跨域请求，请填写该值，请注意，该值只在公有云(即访问COS)生效
 * @method void setOriginDomain(string $OriginDomain) 设置跨域访问域名，文件最终上传到共享存储，上传时可能会出现跨域问题，如果是跨域请求，请填写该值，请注意，该值只在公有云(即访问COS)生效
 */
class UploadFilesDsRequest extends AbstractModel
{
    /**
     * @var string 返回值
     */
    public $ProjectId;

    /**
     * @var array 临时文件名列表，如果有重复会自动去重
     */
    public $FileNames;

    /**
     * @var string 跨域访问域名，文件最终上传到共享存储，上传时可能会出现跨域问题，如果是跨域请求，请填写该值，请注意，该值只在公有云(即访问COS)生效
     */
    public $OriginDomain;

    /**
     * @param string $ProjectId 返回值
     * @param array $FileNames 临时文件名列表，如果有重复会自动去重
     * @param string $OriginDomain 跨域访问域名，文件最终上传到共享存储，上传时可能会出现跨域问题，如果是跨域请求，请填写该值，请注意，该值只在公有云(即访问COS)生效
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FileNames",$param) and $param["FileNames"] !== null) {
            $this->FileNames = $param["FileNames"];
        }

        if (array_key_exists("OriginDomain",$param) and $param["OriginDomain"] !== null) {
            $this->OriginDomain = $param["OriginDomain"];
        }
    }
}
