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
 * 模型版本信息
 *
 * @method string getVersion() 获取版本号
 * @method void setVersion(string $Version) 设置版本号
 * @method string getUri() 获取模型版本uri
 * @method void setUri(string $Uri) 设置模型版本uri
 * @method string getComment() 获取描述信息
 * @method void setComment(string $Comment) 设置描述信息
 * @method array getProperties() 获取扩展参数
 * @method void setProperties(array $Properties) 设置扩展参数
 * @method array getAliases() 获取别名
 * @method void setAliases(array $Aliases) 设置别名
 * @method Audit getAudit() 获取审计信息
 * @method void setAudit(Audit $Audit) 设置审计信息
 * @method string getCatalogName() 获取Catalog Name
 * @method void setCatalogName(string $CatalogName) 设置Catalog Name
 * @method string getSchemaName() 获取Schema Name
 * @method void setSchemaName(string $SchemaName) 设置Schema Name
 * @method string getModelName() 获取Model Name
 * @method void setModelName(string $ModelName) 设置Model Name
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method string getAssetGuid() 获取资产全局唯一ID
 * @method void setAssetGuid(string $AssetGuid) 设置资产全局唯一ID
 */
class ModelVersionInfo extends AbstractModel
{
    /**
     * @var string 版本号
     */
    public $Version;

    /**
     * @var string 模型版本uri
     */
    public $Uri;

    /**
     * @var string 描述信息
     */
    public $Comment;

    /**
     * @var array 扩展参数
     */
    public $Properties;

    /**
     * @var array 别名
     */
    public $Aliases;

    /**
     * @var Audit 审计信息
     */
    public $Audit;

    /**
     * @var string Catalog Name
     */
    public $CatalogName;

    /**
     * @var string Schema Name
     */
    public $SchemaName;

    /**
     * @var string Model Name
     */
    public $ModelName;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var string 资产全局唯一ID
     */
    public $AssetGuid;

    /**
     * @param string $Version 版本号
     * @param string $Uri 模型版本uri
     * @param string $Comment 描述信息
     * @param array $Properties 扩展参数
     * @param array $Aliases 别名
     * @param Audit $Audit 审计信息
     * @param string $CatalogName Catalog Name
     * @param string $SchemaName Schema Name
     * @param string $ModelName Model Name
     * @param array $Tags 标签列表
     * @param string $AssetGuid 资产全局唯一ID
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
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

        if (array_key_exists("Aliases",$param) and $param["Aliases"] !== null) {
            $this->Aliases = $param["Aliases"];
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new Audit();
            $this->Audit->deserialize($param["Audit"]);
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTagVote();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AssetGuid",$param) and $param["AssetGuid"] !== null) {
            $this->AssetGuid = $param["AssetGuid"];
        }
    }
}
