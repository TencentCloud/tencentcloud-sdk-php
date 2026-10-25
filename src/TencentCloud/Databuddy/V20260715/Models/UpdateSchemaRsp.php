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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改 schema 信息响应
 *
 * @method Schema getSchema() 获取<p>更新后的 schema 信息</p>
 * @method void setSchema(Schema $Schema) 设置<p>更新后的 schema 信息</p>
 */
class UpdateSchemaRsp extends AbstractModel
{
    /**
     * @var Schema <p>更新后的 schema 信息</p>
     */
    public $Schema;

    /**
     * @param Schema $Schema <p>更新后的 schema 信息</p>
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
        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = new Schema();
            $this->Schema->deserialize($param["Schema"]);
        }
    }
}
