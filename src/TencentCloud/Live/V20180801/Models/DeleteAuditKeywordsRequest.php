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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAuditKeywords请求参数结构体
 *
 * @method array getKeywordIds() 获取要删除的关键词 Id 列表。
 * @method void setKeywordIds(array $KeywordIds) 设置要删除的关键词 Id 列表。
 * @method string getLibId() 获取关键词库 Id。
 * @method void setLibId(string $LibId) 设置关键词库 Id。
 */
class DeleteAuditKeywordsRequest extends AbstractModel
{
    /**
     * @var array 要删除的关键词 Id 列表。
     */
    public $KeywordIds;

    /**
     * @var string 关键词库 Id。
     */
    public $LibId;

    /**
     * @param array $KeywordIds 要删除的关键词 Id 列表。
     * @param string $LibId 关键词库 Id。
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
        if (array_key_exists("KeywordIds",$param) and $param["KeywordIds"] !== null) {
            $this->KeywordIds = $param["KeywordIds"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }
    }
}
