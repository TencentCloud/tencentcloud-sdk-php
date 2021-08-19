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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署组配置发布相关信息
 *
 * @method string getPackageId() 获取程序包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageId(string $PackageId) 设置程序包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取程序包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置程序包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageVersion() 获取程序包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageVersion(string $PackageVersion) 设置程序包版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoName() 获取镜像名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoName(string $RepoName) 设置镜像名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagName() 获取镜像版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagName(string $TagName) 设置镜像版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPublicConfigReleaseList() 获取已发布的全局配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicConfigReleaseList(array $PublicConfigReleaseList) 设置已发布的全局配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfigReleaseList() 获取已发布的应用配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigReleaseList(array $ConfigReleaseList) 设置已发布的应用配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileConfigReleaseList() 获取已发布的文件配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileConfigReleaseList(array $FileConfigReleaseList) 设置已发布的文件配置列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupRelease extends AbstractModel
{
    /**
     * @var string 程序包ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageId;

    /**
     * @var string 程序包名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string 程序包版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageVersion;

    /**
     * @var string 镜像名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoName;

    /**
     * @var string 镜像版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagName;

    /**
     * @var array 已发布的全局配置列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicConfigReleaseList;

    /**
     * @var array 已发布的应用配置列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigReleaseList;

    /**
     * @var array 已发布的文件配置列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileConfigReleaseList;

    /**
     * @param string $PackageId 程序包ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName 程序包名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageVersion 程序包版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoName 镜像名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagName 镜像版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PublicConfigReleaseList 已发布的全局配置列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConfigReleaseList 已发布的应用配置列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileConfigReleaseList 已发布的文件配置列表
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("PublicConfigReleaseList",$param) and $param["PublicConfigReleaseList"] !== null) {
            $this->PublicConfigReleaseList = [];
            foreach ($param["PublicConfigReleaseList"] as $key => $value){
                $obj = new ConfigRelease();
                $obj->deserialize($value);
                array_push($this->PublicConfigReleaseList, $obj);
            }
        }

        if (array_key_exists("ConfigReleaseList",$param) and $param["ConfigReleaseList"] !== null) {
            $this->ConfigReleaseList = [];
            foreach ($param["ConfigReleaseList"] as $key => $value){
                $obj = new ConfigRelease();
                $obj->deserialize($value);
                array_push($this->ConfigReleaseList, $obj);
            }
        }

        if (array_key_exists("FileConfigReleaseList",$param) and $param["FileConfigReleaseList"] !== null) {
            $this->FileConfigReleaseList = [];
            foreach ($param["FileConfigReleaseList"] as $key => $value){
                $obj = new FileConfigRelease();
                $obj->deserialize($value);
                array_push($this->FileConfigReleaseList, $obj);
            }
        }
    }
}
