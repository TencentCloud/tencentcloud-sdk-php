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
 * 知识库文档搜索结果
 *
 * @method array getDocInfos() 获取文档基本信息
 * @method void setDocInfos(array $DocInfos) 设置文档基本信息
 * @method integer getTotal() 获取文档总数
 * @method void setTotal(integer $Total) 设置文档总数
 */
class SearchDocRsp extends AbstractModel
{
    /**
     * @var array 文档基本信息
     */
    public $DocInfos;

    /**
     * @var integer 文档总数
     */
    public $Total;

    /**
     * @param array $DocInfos 文档基本信息
     * @param integer $Total 文档总数
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
        if (array_key_exists("DocInfos",$param) and $param["DocInfos"] !== null) {
            $this->DocInfos = [];
            foreach ($param["DocInfos"] as $key => $value){
                $obj = new SearchDocInfo();
                $obj->deserialize($value);
                array_push($this->DocInfos, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
