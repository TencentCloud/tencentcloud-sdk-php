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
 * 查询知识库列表返回
 *
 * @method integer getTotal() 获取总数
 * @method void setTotal(integer $Total) 设置总数
 * @method array getKnowledgeSets() 获取知识库列表
 * @method void setKnowledgeSets(array $KnowledgeSets) 设置知识库列表
 */
class KnowledgeSetRsp extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $Total;

    /**
     * @var array 知识库列表
     */
    public $KnowledgeSets;

    /**
     * @param integer $Total 总数
     * @param array $KnowledgeSets 知识库列表
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("KnowledgeSets",$param) and $param["KnowledgeSets"] !== null) {
            $this->KnowledgeSets = [];
            foreach ($param["KnowledgeSets"] as $key => $value){
                $obj = new KnowledgeSet();
                $obj->deserialize($value);
                array_push($this->KnowledgeSets, $obj);
            }
        }
    }
}
