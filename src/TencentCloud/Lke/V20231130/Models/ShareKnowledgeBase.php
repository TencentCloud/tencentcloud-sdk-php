<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 共享知识库配置
 *
 * @method string getKnowledgeBizId() 获取共享知识库ID
 * @method void setKnowledgeBizId(string $KnowledgeBizId) 设置共享知识库ID
 * @method SearchRange getSearchRange() 获取检索范围
 * @method void setSearchRange(SearchRange $SearchRange) 设置检索范围
 */
class ShareKnowledgeBase extends AbstractModel
{
    /**
     * @var string 共享知识库ID
     */
    public $KnowledgeBizId;

    /**
     * @var SearchRange 检索范围
     */
    public $SearchRange;

    /**
     * @param string $KnowledgeBizId 共享知识库ID
     * @param SearchRange $SearchRange 检索范围
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

        if (array_key_exists("SearchRange",$param) and $param["SearchRange"] !== null) {
            $this->SearchRange = new SearchRange();
            $this->SearchRange->deserialize($param["SearchRange"]);
        }
    }
}
