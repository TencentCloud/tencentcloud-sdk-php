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
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getOperateType() 获取<p>操作类型：Create，Update，Delete</p>
 * @method void setOperateType(string $OperateType) 设置<p>操作类型：Create，Update，Delete</p>
 * @method string getKnowledgeBaseId() 获取<p>知识库id，update和delete时必填</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置<p>知识库id，update和delete时必填</p>
 * @method string getKnowledgeBaseName() 获取<p>知识库名称，create和update时必填。只允许字母、数字、汉字、下划线</p>
 * @method void setKnowledgeBaseName(string $KnowledgeBaseName) 设置<p>知识库名称，create和update时必填。只允许字母、数字、汉字、下划线</p>
 * @method string getKnowledgeBaseDesc() 获取<p>知识库描述，create和update时必填</p>
 * @method void setKnowledgeBaseDesc(string $KnowledgeBaseDesc) 设置<p>知识库描述，create和update时必填</p>
 * @method integer getUseScope() 获取<p>1仅自己使用，2指定用户，0全员</p>
 * @method void setUseScope(integer $UseScope) 设置<p>1仅自己使用，2指定用户，0全员</p>
 * @method array getAuthorityUins() 获取<p>可使用用户列表</p>
 * @method void setAuthorityUins(array $AuthorityUins) 设置<p>可使用用户列表</p>
 * @method KnowledgeTaskConfig getConfig() 获取<p>知识库任务配置</p>
 * @method void setConfig(KnowledgeTaskConfig $Config) 设置<p>知识库任务配置</p>
 */
class ModifyKnowledgeBaseRequest extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>操作类型：Create，Update，Delete</p>
     */
    public $OperateType;

    /**
     * @var string <p>知识库id，update和delete时必填</p>
     */
    public $KnowledgeBaseId;

    /**
     * @var string <p>知识库名称，create和update时必填。只允许字母、数字、汉字、下划线</p>
     */
    public $KnowledgeBaseName;

    /**
     * @var string <p>知识库描述，create和update时必填</p>
     */
    public $KnowledgeBaseDesc;

    /**
     * @var integer <p>1仅自己使用，2指定用户，0全员</p>
     */
    public $UseScope;

    /**
     * @var array <p>可使用用户列表</p>
     */
    public $AuthorityUins;

    /**
     * @var KnowledgeTaskConfig <p>知识库任务配置</p>
     */
    public $Config;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param string $OperateType <p>操作类型：Create，Update，Delete</p>
     * @param string $KnowledgeBaseId <p>知识库id，update和delete时必填</p>
     * @param string $KnowledgeBaseName <p>知识库名称，create和update时必填。只允许字母、数字、汉字、下划线</p>
     * @param string $KnowledgeBaseDesc <p>知识库描述，create和update时必填</p>
     * @param integer $UseScope <p>1仅自己使用，2指定用户，0全员</p>
     * @param array $AuthorityUins <p>可使用用户列表</p>
     * @param KnowledgeTaskConfig $Config <p>知识库任务配置</p>
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new KnowledgeTaskConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
