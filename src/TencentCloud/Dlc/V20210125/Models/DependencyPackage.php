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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务依赖包信息
 *
 * @method string getPackageSource() 获取依赖包类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageSource(string $PackageSource) 设置依赖包类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMavenPackage() 获取依赖包信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMavenPackage(string $MavenPackage) 设置依赖包信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMavenRepository() 获取依赖包仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMavenRepository(string $MavenRepository) 设置依赖包仓库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMavenExclusion() 获取maven包exclusion信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMavenExclusion(string $MavenExclusion) 设置maven包exclusion信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPypiPackage() 获取pypi包信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPypiPackage(string $PypiPackage) 设置pypi包信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPypiIndexUrl() 获取pypi索引地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPypiIndexUrl(string $PypiIndexUrl) 设置pypi索引地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageType() 获取文件包的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageType(string $PackageType) 设置文件包的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackagePath() 获取文件包的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackagePath(string $PackagePath) 设置文件包的路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class DependencyPackage extends AbstractModel
{
    /**
     * @var string 依赖包类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageSource;

    /**
     * @var string 依赖包信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MavenPackage;

    /**
     * @var string 依赖包仓库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MavenRepository;

    /**
     * @var string maven包exclusion信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MavenExclusion;

    /**
     * @var string pypi包信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PypiPackage;

    /**
     * @var string pypi索引地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PypiIndexUrl;

    /**
     * @var string 文件包的类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageType;

    /**
     * @var string 文件包的路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackagePath;

    /**
     * @param string $PackageSource 依赖包类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MavenPackage 依赖包信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MavenRepository 依赖包仓库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MavenExclusion maven包exclusion信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PypiPackage pypi包信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PypiIndexUrl pypi索引地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageType 文件包的类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackagePath 文件包的路径
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PackageSource",$param) and $param["PackageSource"] !== null) {
            $this->PackageSource = $param["PackageSource"];
        }

        if (array_key_exists("MavenPackage",$param) and $param["MavenPackage"] !== null) {
            $this->MavenPackage = $param["MavenPackage"];
        }

        if (array_key_exists("MavenRepository",$param) and $param["MavenRepository"] !== null) {
            $this->MavenRepository = $param["MavenRepository"];
        }

        if (array_key_exists("MavenExclusion",$param) and $param["MavenExclusion"] !== null) {
            $this->MavenExclusion = $param["MavenExclusion"];
        }

        if (array_key_exists("PypiPackage",$param) and $param["PypiPackage"] !== null) {
            $this->PypiPackage = $param["PypiPackage"];
        }

        if (array_key_exists("PypiIndexUrl",$param) and $param["PypiIndexUrl"] !== null) {
            $this->PypiIndexUrl = $param["PypiIndexUrl"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("PackagePath",$param) and $param["PackagePath"] !== null) {
            $this->PackagePath = $param["PackagePath"];
        }
    }
}
