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
 * 云资源配置检测章节项
 *
 * @method string getMenuID() 获取<p>菜单ID</p>
 * @method void setMenuID(string $MenuID) 设置<p>菜单ID</p>
 * @method string getName() 获取<p>条款分类名称</p>
 * @method void setName(string $Name) 设置<p>条款分类名称</p>
 * @method array getTerms() 获取<p>条款对应章节</p>
 * @method void setTerms(array $Terms) 设置<p>条款对应章节</p>
 */
class ComplianceChapterItem extends AbstractModel
{
    /**
     * @var string <p>菜单ID</p>
     */
    public $MenuID;

    /**
     * @var string <p>条款分类名称</p>
     */
    public $Name;

    /**
     * @var array <p>条款对应章节</p>
     */
    public $Terms;

    /**
     * @param string $MenuID <p>菜单ID</p>
     * @param string $Name <p>条款分类名称</p>
     * @param array $Terms <p>条款对应章节</p>
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
        if (array_key_exists("MenuID",$param) and $param["MenuID"] !== null) {
            $this->MenuID = $param["MenuID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Terms",$param) and $param["Terms"] !== null) {
            $this->Terms = [];
            foreach ($param["Terms"] as $key => $value){
                $obj = new ComplianceTermItem();
                $obj->deserialize($value);
                array_push($this->Terms, $obj);
            }
        }
    }
}
