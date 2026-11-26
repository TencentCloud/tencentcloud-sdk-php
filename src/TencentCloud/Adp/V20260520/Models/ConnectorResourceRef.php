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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * <p>连接器资源引用</p>
 *
 * @method string getResourceId() 获取<p>连接器侧资源 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>连接器侧资源 ID</p>
 * @method integer getType() 获取<p>资源类型：1-空间（乐享知识库），2-文件夹，3-文档或文件，4-团队；0 无效。</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定，不允许用于资源引用</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_WORKSPACE</td><td>1</td><td>空间；乐享个人知识库和团队知识库均为此类型</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_FOLDER</td><td>2</td><td>文件夹</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_DOC</td><td>3</td><td>文档或文件</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_GROUP</td><td>4</td><td>团队或群组</td></tr></tbody></table>
 * @method void setType(integer $Type) 设置<p>资源类型：1-空间（乐享知识库），2-文件夹，3-文档或文件，4-团队；0 无效。</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定，不允许用于资源引用</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_WORKSPACE</td><td>1</td><td>空间；乐享个人知识库和团队知识库均为此类型</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_FOLDER</td><td>2</td><td>文件夹</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_DOC</td><td>3</td><td>文档或文件</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_GROUP</td><td>4</td><td>团队或群组</td></tr></tbody></table>
 * @method string getName() 获取<p>资源名称；请求中选填，不参与资源定位。</p>
 * @method void setName(string $Name) 设置<p>资源名称；请求中选填，不参与资源定位。</p>
 */
class ConnectorResourceRef extends AbstractModel
{
    /**
     * @var string <p>连接器侧资源 ID</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>资源类型：1-空间（乐享知识库），2-文件夹，3-文档或文件，4-团队；0 无效。</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定，不允许用于资源引用</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_WORKSPACE</td><td>1</td><td>空间；乐享个人知识库和团队知识库均为此类型</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_FOLDER</td><td>2</td><td>文件夹</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_DOC</td><td>3</td><td>文档或文件</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_GROUP</td><td>4</td><td>团队或群组</td></tr></tbody></table>
     */
    public $Type;

    /**
     * @var string <p>资源名称；请求中选填，不参与资源定位。</p>
     */
    public $Name;

    /**
     * @param string $ResourceId <p>连接器侧资源 ID</p>
     * @param integer $Type <p>资源类型：1-空间（乐享知识库），2-文件夹，3-文档或文件，4-团队；0 无效。</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定，不允许用于资源引用</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_WORKSPACE</td><td>1</td><td>空间；乐享个人知识库和团队知识库均为此类型</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_FOLDER</td><td>2</td><td>文件夹</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_DOC</td><td>3</td><td>文档或文件</td></tr><tr><td>CONNECTOR_RESOURCE_TYPE_GROUP</td><td>4</td><td>团队或群组</td></tr></tbody></table>
     * @param string $Name <p>资源名称；请求中选填，不参与资源定位。</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
