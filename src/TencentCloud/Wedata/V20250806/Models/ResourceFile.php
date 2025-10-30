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
 * 资源文件详情
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getResourceId() 获取资源文件ID
 * @method void setResourceId(string $ResourceId) 设置资源文件ID
 * @method string getResourceName() 获取资源文件名称
 * @method void setResourceName(string $ResourceName) 设置资源文件名称
 * @method string getLocalPath() 获取资源文件路径
 * @method void setLocalPath(string $LocalPath) 设置资源文件路径
 * @method string getRemotePath() 获取资源对象COS存储路径
 * @method void setRemotePath(string $RemotePath) 设置资源对象COS存储路径
 * @method string getFileExtensionType() 获取资源文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileExtensionType(string $FileExtensionType) 设置资源文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSize() 获取资源大小
 * @method void setSize(string $Size) 设置资源大小
 * @method string getCreatorUserUin() 获取创建用户ID
 * @method void setCreatorUserUin(string $CreatorUserUin) 设置创建用户ID
 * @method string getCreatorUserName() 获取创建用户名称
 * @method void setCreatorUserName(string $CreatorUserName) 设置创建用户名称
 * @method string getUpdateUserName() 获取最后更新用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserName(string $UpdateUserName) 设置最后更新用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserUin() 获取最后更新用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserUin(string $UpdateUserUin) 设置最后更新用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketName() 获取COS 桶
 * @method void setBucketName(string $BucketName) 设置COS 桶
 * @method string getCosRegion() 获取COS 地域
 * @method void setCosRegion(string $CosRegion) 设置COS 地域
 * @method string getResourceSourceMode() 获取资源来源模式
 * @method void setResourceSourceMode(string $ResourceSourceMode) 设置资源来源模式
 * @method string getBundleId() 获取本地工程ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置本地工程ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleInfo() 获取本地工程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleInfo(string $BundleInfo) 设置本地工程信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceFile extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 资源文件ID
     */
    public $ResourceId;

    /**
     * @var string 资源文件名称
     */
    public $ResourceName;

    /**
     * @var string 资源文件路径
     */
    public $LocalPath;

    /**
     * @var string 资源对象COS存储路径
     */
    public $RemotePath;

    /**
     * @var string 资源文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileExtensionType;

    /**
     * @var string 资源大小
     */
    public $Size;

    /**
     * @var string 创建用户ID
     */
    public $CreatorUserUin;

    /**
     * @var string 创建用户名称
     */
    public $CreatorUserName;

    /**
     * @var string 最后更新用户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserName;

    /**
     * @var string 最后更新用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserUin;

    /**
     * @var string COS 桶
     */
    public $BucketName;

    /**
     * @var string COS 地域
     */
    public $CosRegion;

    /**
     * @var string 资源来源模式
     */
    public $ResourceSourceMode;

    /**
     * @var string 本地工程ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string 本地工程信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleInfo;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ResourceId 资源文件ID
     * @param string $ResourceName 资源文件名称
     * @param string $LocalPath 资源文件路径
     * @param string $RemotePath 资源对象COS存储路径
     * @param string $FileExtensionType 资源文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Size 资源大小
     * @param string $CreatorUserUin 创建用户ID
     * @param string $CreatorUserName 创建用户名称
     * @param string $UpdateUserName 最后更新用户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserUin 最后更新用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketName COS 桶
     * @param string $CosRegion COS 地域
     * @param string $ResourceSourceMode 资源来源模式
     * @param string $BundleId 本地工程ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleInfo 本地工程信息
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("FileExtensionType",$param) and $param["FileExtensionType"] !== null) {
            $this->FileExtensionType = $param["FileExtensionType"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("CreatorUserUin",$param) and $param["CreatorUserUin"] !== null) {
            $this->CreatorUserUin = $param["CreatorUserUin"];
        }

        if (array_key_exists("CreatorUserName",$param) and $param["CreatorUserName"] !== null) {
            $this->CreatorUserName = $param["CreatorUserName"];
        }

        if (array_key_exists("UpdateUserName",$param) and $param["UpdateUserName"] !== null) {
            $this->UpdateUserName = $param["UpdateUserName"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("ResourceSourceMode",$param) and $param["ResourceSourceMode"] !== null) {
            $this->ResourceSourceMode = $param["ResourceSourceMode"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
