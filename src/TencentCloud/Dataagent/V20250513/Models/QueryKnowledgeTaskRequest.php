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
 * QueryKnowledgeTask请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getKnowledgeBaseId() 获取<p>知识库id</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置<p>知识库id</p>
 * @method array getFileIds() 获取<p>文件id列表</p>
 * @method void setFileIds(array $FileIds) 设置<p>文件id列表</p>
 */
class QueryKnowledgeTaskRequest extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>知识库id</p>
     */
    public $KnowledgeBaseId;

    /**
     * @var array <p>文件id列表</p>
     */
    public $FileIds;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param string $KnowledgeBaseId <p>知识库id</p>
     * @param array $FileIds <p>文件id列表</p>
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

        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }
    }
}
