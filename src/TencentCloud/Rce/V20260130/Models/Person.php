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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 个人信息
 *
 * @method string getName() 获取<p>姓名全称</p>
 * @method void setName(string $Name) 设置<p>姓名全称</p>
 * @method string getGender() 获取<p>性别</p>
 * @method void setGender(string $Gender) 设置<p>性别</p>
 * @method string getBirthday() 获取<p>出生日期</p><p>参数格式：YYYY-MM-DD</p>
 * @method void setBirthday(string $Birthday) 设置<p>出生日期</p><p>参数格式：YYYY-MM-DD</p>
 * @method string getDegree() 获取<p>学历</p>
 * @method void setDegree(string $Degree) 设置<p>学历</p>
 * @method string getOccupation() 获取<p>职业</p>
 * @method void setOccupation(string $Occupation) 设置<p>职业</p>
 */
class Person extends AbstractModel
{
    /**
     * @var string <p>姓名全称</p>
     */
    public $Name;

    /**
     * @var string <p>性别</p>
     */
    public $Gender;

    /**
     * @var string <p>出生日期</p><p>参数格式：YYYY-MM-DD</p>
     */
    public $Birthday;

    /**
     * @var string <p>学历</p>
     */
    public $Degree;

    /**
     * @var string <p>职业</p>
     */
    public $Occupation;

    /**
     * @param string $Name <p>姓名全称</p>
     * @param string $Gender <p>性别</p>
     * @param string $Birthday <p>出生日期</p><p>参数格式：YYYY-MM-DD</p>
     * @param string $Degree <p>学历</p>
     * @param string $Occupation <p>职业</p>
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

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Degree",$param) and $param["Degree"] !== null) {
            $this->Degree = $param["Degree"];
        }

        if (array_key_exists("Occupation",$param) and $param["Occupation"] !== null) {
            $this->Occupation = $param["Occupation"];
        }
    }
}
