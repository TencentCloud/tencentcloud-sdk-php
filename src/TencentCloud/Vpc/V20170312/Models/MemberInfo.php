<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模板对象成员信息
 *
 * @method string getMember() 获取模板对象成员
 * @method void setMember(string $Member) 设置模板对象成员
 * @method string getDescription() 获取模板对象成员描述信息
 * @method void setDescription(string $Description) 设置模板对象成员描述信息
 */
class MemberInfo extends AbstractModel
{
    /**
     * @var string 模板对象成员
     */
    public $Member;

    /**
     * @var string 模板对象成员描述信息
     */
    public $Description;

    /**
     * @param string $Member 模板对象成员
     * @param string $Description 模板对象成员描述信息
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
        if (array_key_exists("Member",$param) and $param["Member"] !== null) {
            $this->Member = $param["Member"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
