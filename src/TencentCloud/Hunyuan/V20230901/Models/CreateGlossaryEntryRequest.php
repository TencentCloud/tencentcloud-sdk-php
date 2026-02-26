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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGlossaryEntry请求参数结构体
 *
 * @method string getGlossaryId() 获取术语库 ID
 * @method void setGlossaryId(string $GlossaryId) 设置术语库 ID
 * @method array getEntries() 获取术语条目列表，单次请求限制100个
 * @method void setEntries(array $Entries) 设置术语条目列表，单次请求限制100个
 */
class CreateGlossaryEntryRequest extends AbstractModel
{
    /**
     * @var string 术语库 ID
     */
    public $GlossaryId;

    /**
     * @var array 术语条目列表，单次请求限制100个
     */
    public $Entries;

    /**
     * @param string $GlossaryId 术语库 ID
     * @param array $Entries 术语条目列表，单次请求限制100个
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
        if (array_key_exists("GlossaryId",$param) and $param["GlossaryId"] !== null) {
            $this->GlossaryId = $param["GlossaryId"];
        }

        if (array_key_exists("Entries",$param) and $param["Entries"] !== null) {
            $this->Entries = [];
            foreach ($param["Entries"] as $key => $value){
                $obj = new GlossaryEntryCreateItem();
                $obj->deserialize($value);
                array_push($this->Entries, $obj);
            }
        }
    }
}
