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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 素材基础信息。
 *
 * @method string getName() 获取素材名称。
 * @method void setName(string $Name) 设置素材名称。
 * @method string getDescription() 获取描述信息。
 * @method void setDescription(string $Description) 设置描述信息。
 * @method string getClassPath() 获取分类路径。
 * @method void setClassPath(string $ClassPath) 设置分类路径。
 * @method array getTagSet() 获取标签集合。
 * @method void setTagSet(array $TagSet) 设置标签集合。
 * @method Entity getOwner() 获取归属者。
 * @method void setOwner(Entity $Owner) 设置归属者。
 * @method string getMaterialType() 获取素材类型。
 * @method void setMaterialType(string $MaterialType) 设置素材类型。
 * @method string getMaterialUrl() 获取素材 URL。
 * @method void setMaterialUrl(string $MaterialUrl) 设置素材 URL。
 * @method string getVodFileId() 获取云点播媒资 FileId。
 * @method void setVodFileId(string $VodFileId) 设置云点播媒资 FileId。
 * @method string getCreateTime() 获取创建时间，格式按照 ISO 8601 标准表示。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，格式按照 ISO 8601 标准表示。
 */
class MaterialBaseInfo extends AbstractModel
{
    /**
     * @var string 素材名称。
     */
    public $Name;

    /**
     * @var string 描述信息。
     */
    public $Description;

    /**
     * @var string 分类路径。
     */
    public $ClassPath;

    /**
     * @var array 标签集合。
     */
    public $TagSet;

    /**
     * @var Entity 归属者。
     */
    public $Owner;

    /**
     * @var string 素材类型。
     */
    public $MaterialType;

    /**
     * @var string 素材 URL。
     */
    public $MaterialUrl;

    /**
     * @var string 云点播媒资 FileId。
     */
    public $VodFileId;

    /**
     * @var string 创建时间，格式按照 ISO 8601 标准表示。
     */
    public $CreateTime;

    /**
     * @param string $Name 素材名称。
     * @param string $Description 描述信息。
     * @param string $ClassPath 分类路径。
     * @param array $TagSet 标签集合。
     * @param Entity $Owner 归属者。
     * @param string $MaterialType 素材类型。
     * @param string $MaterialUrl 素材 URL。
     * @param string $VodFileId 云点播媒资 FileId。
     * @param string $CreateTime 创建时间，格式按照 ISO 8601 标准表示。
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClassPath",$param) and $param["ClassPath"] !== null) {
            $this->ClassPath = $param["ClassPath"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("MaterialType",$param) and $param["MaterialType"] !== null) {
            $this->MaterialType = $param["MaterialType"];
        }

        if (array_key_exists("MaterialUrl",$param) and $param["MaterialUrl"] !== null) {
            $this->MaterialUrl = $param["MaterialUrl"];
        }

        if (array_key_exists("VodFileId",$param) and $param["VodFileId"] !== null) {
            $this->VodFileId = $param["VodFileId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
