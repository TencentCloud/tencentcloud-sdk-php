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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异常维度同批计数桶；IncludedInTotal 表示计入父行总数，ParentKey 表示包含关系。
 *
 * @method string getKey() 获取<p>固定目录分类 key，与请求平台、CategoryKeys 或 EventTypes 派生目录一致。</p>
 * @method void setKey(string $Key) 设置<p>固定目录分类 key，与请求平台、CategoryKeys 或 EventTypes 派生目录一致。</p>
 * @method integer getCount() 获取<p>精确事件行数，0至9007199254740991的整数，0必须保留。</p>
 * @method void setCount(integer $Count) 设置<p>精确事件行数，0至9007199254740991的整数，0必须保留。</p>
 * @method boolean getIncludedInTotal() 获取<p>是否为计入 TotalCount 的互斥主项。包含项为false，不重复计总。</p>
 * @method void setIncludedInTotal(boolean $IncludedInTotal) 设置<p>是否为计入 TotalCount 的互斥主项。包含项为false，不重复计总。</p>
 * @method string getParentKey() 获取<p>包含项所属主项的 Key；主项不返回该字段。</p>
 * @method void setParentKey(string $ParentKey) 设置<p>包含项所属主项的 Key；主项不返回该字段。</p>
 */
class ExceptionBucket extends AbstractModel
{
    /**
     * @var string <p>固定目录分类 key，与请求平台、CategoryKeys 或 EventTypes 派生目录一致。</p>
     */
    public $Key;

    /**
     * @var integer <p>精确事件行数，0至9007199254740991的整数，0必须保留。</p>
     */
    public $Count;

    /**
     * @var boolean <p>是否为计入 TotalCount 的互斥主项。包含项为false，不重复计总。</p>
     */
    public $IncludedInTotal;

    /**
     * @var string <p>包含项所属主项的 Key；主项不返回该字段。</p>
     */
    public $ParentKey;

    /**
     * @param string $Key <p>固定目录分类 key，与请求平台、CategoryKeys 或 EventTypes 派生目录一致。</p>
     * @param integer $Count <p>精确事件行数，0至9007199254740991的整数，0必须保留。</p>
     * @param boolean $IncludedInTotal <p>是否为计入 TotalCount 的互斥主项。包含项为false，不重复计总。</p>
     * @param string $ParentKey <p>包含项所属主项的 Key；主项不返回该字段。</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("IncludedInTotal",$param) and $param["IncludedInTotal"] !== null) {
            $this->IncludedInTotal = $param["IncludedInTotal"];
        }

        if (array_key_exists("ParentKey",$param) and $param["ParentKey"] !== null) {
            $this->ParentKey = $param["ParentKey"];
        }
    }
}
