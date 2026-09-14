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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLabel请求参数结构体
 *
 * @method string getKbId() 获取<p>所属知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>所属知识库 ID</p>
 * @method string getName() 获取<p>标签名称（长度不小于 1 个字符）</p>
 * @method void setName(string $Name) 设置<p>标签名称（长度不小于 1 个字符）</p>
 * @method array getTermList() 获取<p>标签值（标准词 + 同义词列表），其中 term_id 由后台生成、创建时留空</p>
 * @method void setTermList(array $TermList) 设置<p>标签值（标准词 + 同义词列表），其中 term_id 由后台生成、创建时留空</p>
 */
class CreateLabelRequest extends AbstractModel
{
    /**
     * @var string <p>所属知识库 ID</p>
     */
    public $KbId;

    /**
     * @var string <p>标签名称（长度不小于 1 个字符）</p>
     */
    public $Name;

    /**
     * @var array <p>标签值（标准词 + 同义词列表），其中 term_id 由后台生成、创建时留空</p>
     */
    public $TermList;

    /**
     * @param string $KbId <p>所属知识库 ID</p>
     * @param string $Name <p>标签名称（长度不小于 1 个字符）</p>
     * @param array $TermList <p>标签值（标准词 + 同义词列表），其中 term_id 由后台生成、创建时留空</p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TermList",$param) and $param["TermList"] !== null) {
            $this->TermList = [];
            foreach ($param["TermList"] as $key => $value){
                $obj = new LabelTerm();
                $obj->deserialize($value);
                array_push($this->TermList, $obj);
            }
        }
    }
}
