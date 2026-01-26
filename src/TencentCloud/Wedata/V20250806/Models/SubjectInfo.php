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
 * SubjectInfo
 *
 * @method string getSubjectType() 获取主体类型
 * @method void setSubjectType(string $SubjectType) 设置主体类型
 * @method string getSubjectTypeDisplayName() 获取主题类型展示名
 * @method void setSubjectTypeDisplayName(string $SubjectTypeDisplayName) 设置主题类型展示名
 * @method string getSubjectValue() 获取主体id
 * @method void setSubjectValue(string $SubjectValue) 设置主体id
 * @method string getSubjectValueDisplayName() 获取主体名
 * @method void setSubjectValueDisplayName(string $SubjectValueDisplayName) 设置主体名
 */
class SubjectInfo extends AbstractModel
{
    /**
     * @var string 主体类型
     */
    public $SubjectType;

    /**
     * @var string 主题类型展示名
     */
    public $SubjectTypeDisplayName;

    /**
     * @var string 主体id
     */
    public $SubjectValue;

    /**
     * @var string 主体名
     */
    public $SubjectValueDisplayName;

    /**
     * @param string $SubjectType 主体类型
     * @param string $SubjectTypeDisplayName 主题类型展示名
     * @param string $SubjectValue 主体id
     * @param string $SubjectValueDisplayName 主体名
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

        if (array_key_exists("SubjectTypeDisplayName",$param) and $param["SubjectTypeDisplayName"] !== null) {
            $this->SubjectTypeDisplayName = $param["SubjectTypeDisplayName"];
        }

        if (array_key_exists("SubjectValue",$param) and $param["SubjectValue"] !== null) {
            $this->SubjectValue = $param["SubjectValue"];
        }

        if (array_key_exists("SubjectValueDisplayName",$param) and $param["SubjectValueDisplayName"] !== null) {
            $this->SubjectValueDisplayName = $param["SubjectValueDisplayName"];
        }
    }
}
