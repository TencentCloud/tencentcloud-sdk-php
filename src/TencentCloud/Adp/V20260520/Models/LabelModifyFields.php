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
 * 标签可修改字段集合（配合 update_mask 使用）
 *
 * @method string getName() 获取<p>标签名称</p>
 * @method void setName(string $Name) 设置<p>标签名称</p>
 * @method array getTermModifyList() 获取<p>标准词增量修改列表（增/改/删）</p>
 * @method void setTermModifyList(array $TermModifyList) 设置<p>标准词增量修改列表（增/改/删）</p>
 */
class LabelModifyFields extends AbstractModel
{
    /**
     * @var string <p>标签名称</p>
     */
    public $Name;

    /**
     * @var array <p>标准词增量修改列表（增/改/删）</p>
     */
    public $TermModifyList;

    /**
     * @param string $Name <p>标签名称</p>
     * @param array $TermModifyList <p>标准词增量修改列表（增/改/删）</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TermModifyList",$param) and $param["TermModifyList"] !== null) {
            $this->TermModifyList = [];
            foreach ($param["TermModifyList"] as $key => $value){
                $obj = new LabelTermModifyItem();
                $obj->deserialize($value);
                array_push($this->TermModifyList, $obj);
            }
        }
    }
}
