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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyKnowledgeBase请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getOperateType() 获取操作类型：Create，Update，Delete
 * @method void setOperateType(string $OperateType) 设置操作类型：Create，Update，Delete
 * @method string getKnowledgeBaseId() 获取知识库id，update和delete时必填
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库id，update和delete时必填
 * @method string getKnowledgeBaseName() 获取知识库名称，create和update时必填。只允许字母、数字、汉字、下划线
 * @method void setKnowledgeBaseName(string $KnowledgeBaseName) 设置知识库名称，create和update时必填。只允许字母、数字、汉字、下划线
 * @method string getKnowledgeBaseDesc() 获取知识库描述，create和update时必填
 * @method void setKnowledgeBaseDesc(string $KnowledgeBaseDesc) 设置知识库描述，create和update时必填
 * @method integer getUseScope() 获取1仅自己使用，2指定用户，0全员
 * @method void setUseScope(integer $UseScope) 设置1仅自己使用，2指定用户，0全员
 * @method array getAuthorityUins() 获取可使用用户列表
 * @method void setAuthorityUins(array $AuthorityUins) 设置可使用用户列表
 */
class ModifyKnowledgeBaseRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 操作类型：Create，Update，Delete
     */
    public $OperateType;

    /**
     * @var string 知识库id，update和delete时必填
     */
    public $KnowledgeBaseId;

    /**
     * @var string 知识库名称，create和update时必填。只允许字母、数字、汉字、下划线
     */
    public $KnowledgeBaseName;

    /**
     * @var string 知识库描述，create和update时必填
     */
    public $KnowledgeBaseDesc;

    /**
     * @var integer 1仅自己使用，2指定用户，0全员
     */
    public $UseScope;

    /**
     * @var array 可使用用户列表
     */
    public $AuthorityUins;

    /**
     * @param string $InstanceId 实例id
     * @param string $OperateType 操作类型：Create，Update，Delete
     * @param string $KnowledgeBaseId 知识库id，update和delete时必填
     * @param string $KnowledgeBaseName 知识库名称，create和update时必填。只允许字母、数字、汉字、下划线
     * @param string $KnowledgeBaseDesc 知识库描述，create和update时必填
     * @param integer $UseScope 1仅自己使用，2指定用户，0全员
     * @param array $AuthorityUins 可使用用户列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }

        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }

        if (array_key_exists("KnowledgeBaseName",$param) and $param["KnowledgeBaseName"] !== null) {
            $this->KnowledgeBaseName = $param["KnowledgeBaseName"];
        }

        if (array_key_exists("KnowledgeBaseDesc",$param) and $param["KnowledgeBaseDesc"] !== null) {
            $this->KnowledgeBaseDesc = $param["KnowledgeBaseDesc"];
        }

        if (array_key_exists("UseScope",$param) and $param["UseScope"] !== null) {
            $this->UseScope = $param["UseScope"];
        }

        if (array_key_exists("AuthorityUins",$param) and $param["AuthorityUins"] !== null) {
            $this->AuthorityUins = $param["AuthorityUins"];
        }
    }
}
