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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourcePackageName请求参数结构体
 *
 * @method string getPackageId() 获取资源包唯一ID
 * @method void setPackageId(string $PackageId) 设置资源包唯一ID
 * @method string getPackageName() 获取自定义的资源包名称，最长支持120个字符
 * @method void setPackageName(string $PackageName) 设置自定义的资源包名称，最长支持120个字符
 */
class ModifyResourcePackageNameRequest extends AbstractModel
{
    /**
     * @var string 资源包唯一ID
     */
    public $PackageId;

    /**
     * @var string 自定义的资源包名称，最长支持120个字符
     */
    public $PackageName;

    /**
     * @param string $PackageId 资源包唯一ID
     * @param string $PackageName 自定义的资源包名称，最长支持120个字符
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
