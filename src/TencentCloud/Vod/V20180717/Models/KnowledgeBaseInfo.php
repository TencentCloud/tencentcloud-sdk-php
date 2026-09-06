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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识库信息。
 *
 * @method string getKnowledgeBaseId() 获取<p>知识库ID。</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置<p>知识库ID。</p>
 * @method string getName() 获取<p>知识库名称。</p>
 * @method void setName(string $Name) 设置<p>知识库名称。</p>
 * @method string getDescription() 获取<p>知识库描述。</p>
 * @method void setDescription(string $Description) 设置<p>知识库描述。</p>
 * @method string getStatus() 获取<p>知识库状态。</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>active： 正常</li><li>deleting： 删除中</li></ul>
 * @method void setStatus(string $Status) 设置<p>知识库状态。</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>active： 正常</li><li>deleting： 删除中</li></ul>
 * @method string getCreateTime() 获取<p>知识库创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>知识库创建时间。</p>
 */
class KnowledgeBaseInfo extends AbstractModel
{
    /**
     * @var string <p>知识库ID。</p>
     */
    public $KnowledgeBaseId;

    /**
     * @var string <p>知识库名称。</p>
     */
    public $Name;

    /**
     * @var string <p>知识库描述。</p>
     */
    public $Description;

    /**
     * @var string <p>知识库状态。</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>active： 正常</li><li>deleting： 删除中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>知识库创建时间。</p>
     */
    public $CreateTime;

    /**
     * @param string $KnowledgeBaseId <p>知识库ID。</p>
     * @param string $Name <p>知识库名称。</p>
     * @param string $Description <p>知识库描述。</p>
     * @param string $Status <p>知识库状态。</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>active： 正常</li><li>deleting： 删除中</li></ul>
     * @param string $CreateTime <p>知识库创建时间。</p>
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
        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
