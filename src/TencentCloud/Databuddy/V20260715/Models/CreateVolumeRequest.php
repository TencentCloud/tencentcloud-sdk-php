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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVolume请求参数结构体
 *
 * @method string getCatalogName() 获取catalog 信息
 * @method void setCatalogName(string $CatalogName) 设置catalog 信息
 * @method string getSchemaName() 获取schema 信息
 * @method void setSchemaName(string $SchemaName) 设置schema 信息
 * @method string getVolumeName() 获取数据卷名称
 * @method void setVolumeName(string $VolumeName) 设置数据卷名称
 * @method string getWorkspaceId() 获取调用时所在workspace唯一id
 * @method void setWorkspaceId(string $WorkspaceId) 设置调用时所在workspace唯一id
 * @method string getComment() 获取描述信息
 * @method void setComment(string $Comment) 设置描述信息
 * @method array getProperties() 获取扩展参数
 * @method void setProperties(array $Properties) 设置扩展参数
 * @method string getStorageLocation() 获取存储位置
 * @method void setStorageLocation(string $StorageLocation) 设置存储位置
 * @method string getType() 获取数据卷类型
 * @method void setType(string $Type) 设置数据卷类型
 */
class CreateVolumeRequest extends AbstractModel
{
    /**
     * @var string catalog 信息
     */
    public $CatalogName;

    /**
     * @var string schema 信息
     */
    public $SchemaName;

    /**
     * @var string 数据卷名称
     */
    public $VolumeName;

    /**
     * @var string 调用时所在workspace唯一id
     */
    public $WorkspaceId;

    /**
     * @var string 描述信息
     */
    public $Comment;

    /**
     * @var array 扩展参数
     */
    public $Properties;

    /**
     * @var string 存储位置
     */
    public $StorageLocation;

    /**
     * @var string 数据卷类型
     */
    public $Type;

    /**
     * @param string $CatalogName catalog 信息
     * @param string $SchemaName schema 信息
     * @param string $VolumeName 数据卷名称
     * @param string $WorkspaceId 调用时所在workspace唯一id
     * @param string $Comment 描述信息
     * @param array $Properties 扩展参数
     * @param string $StorageLocation 存储位置
     * @param string $Type 数据卷类型
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
        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("StorageLocation",$param) and $param["StorageLocation"] !== null) {
            $this->StorageLocation = $param["StorageLocation"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
