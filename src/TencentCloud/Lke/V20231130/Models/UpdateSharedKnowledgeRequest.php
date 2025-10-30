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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateSharedKnowledge请求参数结构体
 *
 * @method string getKnowledgeBizId() 获取共享知识库业务ID
 * @method void setKnowledgeBizId(string $KnowledgeBizId) 设置共享知识库业务ID
 * @method KnowledgeUpdateInfo getInfo() 获取共享知识库更新信息
 * @method void setInfo(KnowledgeUpdateInfo $Info) 设置共享知识库更新信息
 */
class UpdateSharedKnowledgeRequest extends AbstractModel
{
    /**
     * @var string 共享知识库业务ID
     */
    public $KnowledgeBizId;

    /**
     * @var KnowledgeUpdateInfo 共享知识库更新信息
     */
    public $Info;

    /**
     * @param string $KnowledgeBizId 共享知识库业务ID
     * @param KnowledgeUpdateInfo $Info 共享知识库更新信息
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
        if (array_key_exists("KnowledgeBizId",$param) and $param["KnowledgeBizId"] !== null) {
            $this->KnowledgeBizId = $param["KnowledgeBizId"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = new KnowledgeUpdateInfo();
            $this->Info->deserialize($param["Info"]);
        }
    }
}
