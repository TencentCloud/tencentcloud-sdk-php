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
 * 本类型用于接口中描述待创建索引结构
 *
 * @method array getMgoIndexKeys() 获取<p>索引字段</p>
 * @method void setMgoIndexKeys(array $MgoIndexKeys) 设置<p>索引字段</p>
 * @method boolean getMgoIsUnique() 获取<p>是否唯一索引</p>
 * @method void setMgoIsUnique(boolean $MgoIsUnique) 设置<p>是否唯一索引</p>
 * @method boolean getMgoIsSparse() 获取<p>是否稀疏索引</p>
 * @method void setMgoIsSparse(boolean $MgoIsSparse) 设置<p>是否稀疏索引</p>
 * @method string getPartialFilterExpression() 获取<p>稀疏索引表达式</p>
 * @method void setPartialFilterExpression(string $PartialFilterExpression) 设置<p>稀疏索引表达式</p>
 */
class MgoKeySchema extends AbstractModel
{
    /**
     * @var array <p>索引字段</p>
     */
    public $MgoIndexKeys;

    /**
     * @var boolean <p>是否唯一索引</p>
     */
    public $MgoIsUnique;

    /**
     * @var boolean <p>是否稀疏索引</p>
     */
    public $MgoIsSparse;

    /**
     * @var string <p>稀疏索引表达式</p>
     */
    public $PartialFilterExpression;

    /**
     * @param array $MgoIndexKeys <p>索引字段</p>
     * @param boolean $MgoIsUnique <p>是否唯一索引</p>
     * @param boolean $MgoIsSparse <p>是否稀疏索引</p>
     * @param string $PartialFilterExpression <p>稀疏索引表达式</p>
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
        if (array_key_exists("MgoIndexKeys",$param) and $param["MgoIndexKeys"] !== null) {
            $this->MgoIndexKeys = [];
            foreach ($param["MgoIndexKeys"] as $key => $value){
                $obj = new MgoIndexKeys();
                $obj->deserialize($value);
                array_push($this->MgoIndexKeys, $obj);
            }
        }

        if (array_key_exists("MgoIsUnique",$param) and $param["MgoIsUnique"] !== null) {
            $this->MgoIsUnique = $param["MgoIsUnique"];
        }

        if (array_key_exists("MgoIsSparse",$param) and $param["MgoIsSparse"] !== null) {
            $this->MgoIsSparse = $param["MgoIsSparse"];
        }

        if (array_key_exists("PartialFilterExpression",$param) and $param["PartialFilterExpression"] !== null) {
            $this->PartialFilterExpression = $param["PartialFilterExpression"];
        }
    }
}
