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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除文档出参
 *
 * @method array getDocumentSets() 获取文件集
 * @method void setDocumentSets(array $DocumentSets) 设置文件集
 * @method integer getCount() 获取条数
 * @method void setCount(integer $Count) 设置条数
 */
class DescribeKnowledgeDocumentSetListRsp extends AbstractModel
{
    /**
     * @var array 文件集
     */
    public $DocumentSets;

    /**
     * @var integer 条数
     */
    public $Count;

    /**
     * @param array $DocumentSets 文件集
     * @param integer $Count 条数
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
        if (array_key_exists("DocumentSets",$param) and $param["DocumentSets"] !== null) {
            $this->DocumentSets = [];
            foreach ($param["DocumentSets"] as $key => $value){
                $obj = new QureyKnowledgeDocumentSet();
                $obj->deserialize($value);
                array_push($this->DocumentSets, $obj);
            }
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
