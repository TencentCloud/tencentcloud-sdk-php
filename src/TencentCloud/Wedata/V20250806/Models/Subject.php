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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subject主体信息，授权/回收主体
 *
 * @method string getSubjectType() 获取主体类型
 * @method void setSubjectType(string $SubjectType) 设置主体类型
 * @method array getSubjectValues() 获取主体列表
 * @method void setSubjectValues(array $SubjectValues) 设置主体列表
 */
class Subject extends AbstractModel
{
    /**
     * @var string 主体类型
     */
    public $SubjectType;

    /**
     * @var array 主体列表
     */
    public $SubjectValues;

    /**
     * @param string $SubjectType 主体类型
     * @param array $SubjectValues 主体列表
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
        if (array_key_exists("SubjectType",$param) and $param["SubjectType"] !== null) {
            $this->SubjectType = $param["SubjectType"];
        }

        if (array_key_exists("SubjectValues",$param) and $param["SubjectValues"] !== null) {
            $this->SubjectValues = $param["SubjectValues"];
        }
    }
}
