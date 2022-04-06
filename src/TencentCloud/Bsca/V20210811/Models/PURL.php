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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PURL(Package URL)用于定位一个产品或组件，见 https://github.com/package-url/purl-spec。
 *
 * @method string getName() 获取组件名称
 * @method void setName(string $Name) 设置组件名称
 * @method string getProtocol() 获取组件所属的类型，如：github, gitlab, generic, deb, rpm, maven 等
 * @method void setProtocol(string $Protocol) 设置组件所属的类型，如：github, gitlab, generic, deb, rpm, maven 等
 * @method string getNamespace() 获取组件名的前缀名，如github和gitlab的用户名，deb的操作系统，maven包的group id等
 * @method void setNamespace(string $Namespace) 设置组件名的前缀名，如github和gitlab的用户名，deb的操作系统，maven包的group id等
 * @method array getQualifiers() 获取修饰组件的额外属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualifiers(array $Qualifiers) 设置修饰组件的额外属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubpath() 获取相对于组件包根位置的子目录
 * @method void setSubpath(string $Subpath) 设置相对于组件包根位置的子目录
 * @method string getVersion() 获取组件版本号
 * @method void setVersion(string $Version) 设置组件版本号
 */
class PURL extends AbstractModel
{
    /**
     * @var string 组件名称
     */
    public $Name;

    /**
     * @var string 组件所属的类型，如：github, gitlab, generic, deb, rpm, maven 等
     */
    public $Protocol;

    /**
     * @var string 组件名的前缀名，如github和gitlab的用户名，deb的操作系统，maven包的group id等
     */
    public $Namespace;

    /**
     * @var array 修饰组件的额外属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Qualifiers;

    /**
     * @var string 相对于组件包根位置的子目录
     */
    public $Subpath;

    /**
     * @var string 组件版本号
     */
    public $Version;

    /**
     * @param string $Name 组件名称
     * @param string $Protocol 组件所属的类型，如：github, gitlab, generic, deb, rpm, maven 等
     * @param string $Namespace 组件名的前缀名，如github和gitlab的用户名，deb的操作系统，maven包的group id等
     * @param array $Qualifiers 修饰组件的额外属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Subpath 相对于组件包根位置的子目录
     * @param string $Version 组件版本号
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifiers",$param) and $param["Qualifiers"] !== null) {
            $this->Qualifiers = [];
            foreach ($param["Qualifiers"] as $key => $value){
                $obj = new Qualifier();
                $obj->deserialize($value);
                array_push($this->Qualifiers, $obj);
            }
        }

        if (array_key_exists("Subpath",$param) and $param["Subpath"] !== null) {
            $this->Subpath = $param["Subpath"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
