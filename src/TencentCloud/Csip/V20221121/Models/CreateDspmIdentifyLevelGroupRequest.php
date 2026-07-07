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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDspmIdentifyLevelGroup请求参数结构体
 *
 * @method string getName() 获取<p>分级组名称</p>
 * @method void setName(string $Name) 设置<p>分级组名称</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method array getLevelItems() 获取<p>无</p>
 * @method void setLevelItems(array $LevelItems) 设置<p>无</p>
 */
class CreateDspmIdentifyLevelGroupRequest extends AbstractModel
{
    /**
     * @var string <p>分级组名称</p>
     */
    public $Name;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var array <p>无</p>
     */
    public $LevelItems;

    /**
     * @param string $Name <p>分级组名称</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Description <p>描述</p>
     * @param array $LevelItems <p>无</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LevelItems",$param) and $param["LevelItems"] !== null) {
            $this->LevelItems = [];
            foreach ($param["LevelItems"] as $key => $value){
                $obj = new DspmAddIdentifyLevelItem();
                $obj->deserialize($value);
                array_push($this->LevelItems, $obj);
            }
        }
    }
}
