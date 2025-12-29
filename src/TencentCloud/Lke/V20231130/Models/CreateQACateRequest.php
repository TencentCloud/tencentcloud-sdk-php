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
 * CreateQACate请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
若要操作共享知识库，传KnowledgeBizId
 * @method void setBotBizId(string $BotBizId) 设置应用ID
若要操作共享知识库，传KnowledgeBizId
 * @method string getParentBizId() 获取父级业务ID，创建顶级分类时传字符串"0"
 * @method void setParentBizId(string $ParentBizId) 设置父级业务ID，创建顶级分类时传字符串"0"
 * @method string getName() 获取创建的分类名称
 * @method void setName(string $Name) 设置创建的分类名称
 */
class CreateQACateRequest extends AbstractModel
{
    /**
     * @var string 应用ID
若要操作共享知识库，传KnowledgeBizId
     */
    public $BotBizId;

    /**
     * @var string 父级业务ID，创建顶级分类时传字符串"0"
     */
    public $ParentBizId;

    /**
     * @var string 创建的分类名称
     */
    public $Name;

    /**
     * @param string $BotBizId 应用ID
若要操作共享知识库，传KnowledgeBizId
     * @param string $ParentBizId 父级业务ID，创建顶级分类时传字符串"0"
     * @param string $Name 创建的分类名称
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("ParentBizId",$param) and $param["ParentBizId"] !== null) {
            $this->ParentBizId = $param["ParentBizId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
