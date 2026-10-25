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
 * CreateModel请求参数结构体
 *
 * @method string getCatalogName() 获取catalog 信息
 * @method void setCatalogName(string $CatalogName) 设置catalog 信息
 * @method string getSchemaName() 获取schema 信息
 * @method void setSchemaName(string $SchemaName) 设置schema 信息
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method string getWorkspaceId() 获取调用时所在workspace唯一id
 * @method void setWorkspaceId(string $WorkspaceId) 设置调用时所在workspace唯一id
 * @method string getComment() 获取描述信息
 * @method void setComment(string $Comment) 设置描述信息
 * @method array getProperties() 获取扩展参数
 * @method void setProperties(array $Properties) 设置扩展参数
 */
class CreateModelRequest extends AbstractModel
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
     * @var string 模型名称
     */
    public $ModelName;

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
     * @param string $CatalogName catalog 信息
     * @param string $SchemaName schema 信息
     * @param string $ModelName 模型名称
     * @param string $WorkspaceId 调用时所在workspace唯一id
     * @param string $Comment 描述信息
     * @param array $Properties 扩展参数
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

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
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
    }
}
