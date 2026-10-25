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
 * CreateModelVersion请求参数结构体
 *
 * @method string getCatalogName() 获取<p>数据目录名称</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>数据目录名称</p>
 * @method string getSchemaName() 获取<p>schema名称</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>schema名称</p>
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method string getUri() 获取<p>地址</p>
 * @method void setUri(string $Uri) 设置<p>地址</p>
 * @method string getWorkspaceId() 获取<p>调用时所在workspace唯一id</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>调用时所在workspace唯一id</p>
 * @method array getAliases() 获取<p>别名列表</p>
 * @method void setAliases(array $Aliases) 设置<p>别名列表</p>
 * @method string getComment() 获取<p>描述</p>
 * @method void setComment(string $Comment) 设置<p>描述</p>
 * @method array getProperties() 获取<p>扩展信息</p>
 * @method void setProperties(array $Properties) 设置<p>扩展信息</p>
 */
class CreateModelVersionRequest extends AbstractModel
{
    /**
     * @var string <p>数据目录名称</p>
     */
    public $CatalogName;

    /**
     * @var string <p>schema名称</p>
     */
    public $SchemaName;

    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var string <p>地址</p>
     */
    public $Uri;

    /**
     * @var string <p>调用时所在workspace唯一id</p>
     */
    public $WorkspaceId;

    /**
     * @var array <p>别名列表</p>
     */
    public $Aliases;

    /**
     * @var string <p>描述</p>
     */
    public $Comment;

    /**
     * @var array <p>扩展信息</p>
     */
    public $Properties;

    /**
     * @param string $CatalogName <p>数据目录名称</p>
     * @param string $SchemaName <p>schema名称</p>
     * @param string $ModelName <p>模型名称</p>
     * @param string $Uri <p>地址</p>
     * @param string $WorkspaceId <p>调用时所在workspace唯一id</p>
     * @param array $Aliases <p>别名列表</p>
     * @param string $Comment <p>描述</p>
     * @param array $Properties <p>扩展信息</p>
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

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Aliases",$param) and $param["Aliases"] !== null) {
            $this->Aliases = $param["Aliases"];
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
