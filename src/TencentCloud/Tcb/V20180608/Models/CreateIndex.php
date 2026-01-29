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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本类型用于UpdateTable接口中描述待创建索引信息
 *
 * @method string getIndexName() 获取索引名称
 * @method void setIndexName(string $IndexName) 设置索引名称
 * @method MgoKeySchema getMgoKeySchema() 获取索引结构
 * @method void setMgoKeySchema(MgoKeySchema $MgoKeySchema) 设置索引结构
 */
class CreateIndex extends AbstractModel
{
    /**
     * @var string 索引名称
     */
    public $IndexName;

    /**
     * @var MgoKeySchema 索引结构
     */
    public $MgoKeySchema;

    /**
     * @param string $IndexName 索引名称
     * @param MgoKeySchema $MgoKeySchema 索引结构
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
        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("MgoKeySchema",$param) and $param["MgoKeySchema"] !== null) {
            $this->MgoKeySchema = new MgoKeySchema();
            $this->MgoKeySchema->deserialize($param["MgoKeySchema"]);
        }
    }
}
