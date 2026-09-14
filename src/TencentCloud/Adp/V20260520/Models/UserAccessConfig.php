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
 * 用户访问配置
 *
 * @method string getCustomerKnowledgeId() 获取<p>客户自定义知识 ID</p>
 * @method void setCustomerKnowledgeId(string $CustomerKnowledgeId) 设置<p>客户自定义知识 ID</p>
 * @method boolean getIsPublic() 获取<p>文档是否公开</p>
 * @method void setIsPublic(boolean $IsPublic) 设置<p>文档是否公开</p>
 */
class UserAccessConfig extends AbstractModel
{
    /**
     * @var string <p>客户自定义知识 ID</p>
     */
    public $CustomerKnowledgeId;

    /**
     * @var boolean <p>文档是否公开</p>
     */
    public $IsPublic;

    /**
     * @param string $CustomerKnowledgeId <p>客户自定义知识 ID</p>
     * @param boolean $IsPublic <p>文档是否公开</p>
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
        if (array_key_exists("CustomerKnowledgeId",$param) and $param["CustomerKnowledgeId"] !== null) {
            $this->CustomerKnowledgeId = $param["CustomerKnowledgeId"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }
    }
}
