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
 * 文档和问答过滤器
 *
 * @method array getDocBizIds() 获取文档ID列表
 * @method void setDocBizIds(array $DocBizIds) 设置文档ID列表
 * @method boolean getAllQa() 获取问答
 * @method void setAllQa(boolean $AllQa) 设置问答
 */
class AgentKnowledgeFilterDocAndAnswer extends AbstractModel
{
    /**
     * @var array 文档ID列表
     */
    public $DocBizIds;

    /**
     * @var boolean 问答
     */
    public $AllQa;

    /**
     * @param array $DocBizIds 文档ID列表
     * @param boolean $AllQa 问答
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
        if (array_key_exists("DocBizIds",$param) and $param["DocBizIds"] !== null) {
            $this->DocBizIds = $param["DocBizIds"];
        }

        if (array_key_exists("AllQa",$param) and $param["AllQa"] !== null) {
            $this->AllQa = $param["AllQa"];
        }
    }
}
