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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取资源文件列表item
 *
 * @method string getResourceId() 获取资源文件ID
 * @method void setResourceId(string $ResourceId) 设置资源文件ID
 * @method string getResourceName() 获取资源文件名称
 * @method void setResourceName(string $ResourceName) 设置资源文件名称
 * @method string getFileExtensionType() 获取资源文件类型
 * @method void setFileExtensionType(string $FileExtensionType) 设置资源文件类型
 * @method string getLocalPath() 获取资源路径
 * @method void setLocalPath(string $LocalPath) 设置资源路径
 */
class ResourceFileItem extends AbstractModel
{
    /**
     * @var string 资源文件ID
     */
    public $ResourceId;

    /**
     * @var string 资源文件名称
     */
    public $ResourceName;

    /**
     * @var string 资源文件类型
     */
    public $FileExtensionType;

    /**
     * @var string 资源路径
     */
    public $LocalPath;

    /**
     * @param string $ResourceId 资源文件ID
     * @param string $ResourceName 资源文件名称
     * @param string $FileExtensionType 资源文件类型
     * @param string $LocalPath 资源路径
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("FileExtensionType",$param) and $param["FileExtensionType"] !== null) {
            $this->FileExtensionType = $param["FileExtensionType"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }
    }
}
