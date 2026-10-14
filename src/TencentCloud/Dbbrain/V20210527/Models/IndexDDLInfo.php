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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引详细信息
 *
 * @method string getIndexName() 获取<p>索引名称。</p>
 * @method void setIndexName(string $IndexName) 设置<p>索引名称。</p>
 * @method string getDDL() 获取<p>创建索引语句。</p>
 * @method void setDDL(string $DDL) 设置<p>创建索引语句。</p>
 */
class IndexDDLInfo extends AbstractModel
{
    /**
     * @var string <p>索引名称。</p>
     */
    public $IndexName;

    /**
     * @var string <p>创建索引语句。</p>
     */
    public $DDL;

    /**
     * @param string $IndexName <p>索引名称。</p>
     * @param string $DDL <p>创建索引语句。</p>
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

        if (array_key_exists("DDL",$param) and $param["DDL"] !== null) {
            $this->DDL = $param["DDL"];
        }
    }
}
