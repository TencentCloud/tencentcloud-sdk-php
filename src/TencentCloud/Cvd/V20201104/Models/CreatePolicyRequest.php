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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePolicy请求参数结构体
 *
 * @method string getName() 获取<p>策略名称</p>
 * @method void setName(string $Name) 设置<p>策略名称</p>
 * @method array getPolicyInfoList() 获取<p>策略详情</p>
 * @method void setPolicyInfoList(array $PolicyInfoList) 设置<p>策略详情</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 * @method array getUserIds() 获取<p>策略作用的用户id</p>
 * @method void setUserIds(array $UserIds) 设置<p>策略作用的用户id</p>
 */
class CreatePolicyRequest extends AbstractModel
{
    /**
     * @var string <p>策略名称</p>
     */
    public $Name;

    /**
     * @var array <p>策略详情</p>
     */
    public $PolicyInfoList;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @var array <p>策略作用的用户id</p>
     */
    public $UserIds;

    /**
     * @param string $Name <p>策略名称</p>
     * @param array $PolicyInfoList <p>策略详情</p>
     * @param string $Description <p>策略描述</p>
     * @param array $UserIds <p>策略作用的用户id</p>
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

        if (array_key_exists("PolicyInfoList",$param) and $param["PolicyInfoList"] !== null) {
            $this->PolicyInfoList = [];
            foreach ($param["PolicyInfoList"] as $key => $value){
                $obj = new PolicyInfo();
                $obj->deserialize($value);
                array_push($this->PolicyInfoList, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }
    }
}
