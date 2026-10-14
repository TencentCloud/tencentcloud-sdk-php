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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLLMKeywordLibrary请求参数结构体
 *
 * @method array getLibList() 获取新增的关键词库列表
 * @method void setLibList(array $LibList) 设置新增的关键词库列表
 */
class ModifyLLMKeywordLibraryRequest extends AbstractModel
{
    /**
     * @var array 新增的关键词库列表
     */
    public $LibList;

    /**
     * @param array $LibList 新增的关键词库列表
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
        if (array_key_exists("LibList",$param) and $param["LibList"] !== null) {
            $this->LibList = [];
            foreach ($param["LibList"] as $key => $value){
                $obj = new LLMKeywordLibrary();
                $obj->deserialize($value);
                array_push($this->LibList, $obj);
            }
        }
    }
}
