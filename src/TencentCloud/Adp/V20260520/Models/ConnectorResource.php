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
 * 连接器资源及上级链
 *
 * @method integer getType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>1： 空间（乐享知识库）</li><li>2： 文件夹</li><li>3： 文档或文件</li><li>4： 团队</li></ul>
 * @method void setType(integer $Type) 设置<p>资源类型</p><p>枚举值：</p><ul><li>1： 空间（乐享知识库）</li><li>2： 文件夹</li><li>3： 文档或文件</li><li>4： 团队</li></ul>
 * @method string getResourceId() 获取<p>连接器侧资源 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>连接器侧资源 ID</p>
 * @method string getName() 获取<p>资源名称快照</p>
 * @method void setName(string $Name) 设置<p>资源名称快照</p>
 * @method array getAncestorList() 获取<p>祖先链快照，自顶向下且不含自身，最多 100 项；顶层资源为空。</p>
 * @method void setAncestorList(array $AncestorList) 设置<p>祖先链快照，自顶向下且不含自身，最多 100 项；顶层资源为空。</p>
 */
class ConnectorResource extends AbstractModel
{
    /**
     * @var integer <p>资源类型</p><p>枚举值：</p><ul><li>1： 空间（乐享知识库）</li><li>2： 文件夹</li><li>3： 文档或文件</li><li>4： 团队</li></ul>
     */
    public $Type;

    /**
     * @var string <p>连接器侧资源 ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源名称快照</p>
     */
    public $Name;

    /**
     * @var array <p>祖先链快照，自顶向下且不含自身，最多 100 项；顶层资源为空。</p>
     */
    public $AncestorList;

    /**
     * @param integer $Type <p>资源类型</p><p>枚举值：</p><ul><li>1： 空间（乐享知识库）</li><li>2： 文件夹</li><li>3： 文档或文件</li><li>4： 团队</li></ul>
     * @param string $ResourceId <p>连接器侧资源 ID</p>
     * @param string $Name <p>资源名称快照</p>
     * @param array $AncestorList <p>祖先链快照，自顶向下且不含自身，最多 100 项；顶层资源为空。</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AncestorList",$param) and $param["AncestorList"] !== null) {
            $this->AncestorList = [];
            foreach ($param["AncestorList"] as $key => $value){
                $obj = new ConnectorResourceRef();
                $obj->deserialize($value);
                array_push($this->AncestorList, $obj);
            }
        }
    }
}
