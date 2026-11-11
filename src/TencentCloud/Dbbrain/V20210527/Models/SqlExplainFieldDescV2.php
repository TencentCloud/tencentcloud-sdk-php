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
 * 执行计划字段说明项。提供 EXPLAIN / VisualExplain 输出中各字段的中文释义，便于前端在展示可视化执行计划时进行翻译。
 *
 * @method string getField() 获取<p>字段英文名，与 Explain / VisualExplain 中出现的字段一致，例如 access_type、key、rows。</p>
 * @method void setField(string $Field) 设置<p>字段英文名，与 Explain / VisualExplain 中出现的字段一致，例如 access_type、key、rows。</p>
 * @method string getDesc() 获取<p>字段中文释义。</p>
 * @method void setDesc(string $Desc) 设置<p>字段中文释义。</p>
 */
class SqlExplainFieldDescV2 extends AbstractModel
{
    /**
     * @var string <p>字段英文名，与 Explain / VisualExplain 中出现的字段一致，例如 access_type、key、rows。</p>
     */
    public $Field;

    /**
     * @var string <p>字段中文释义。</p>
     */
    public $Desc;

    /**
     * @param string $Field <p>字段英文名，与 Explain / VisualExplain 中出现的字段一致，例如 access_type、key、rows。</p>
     * @param string $Desc <p>字段中文释义。</p>
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
