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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义隔离模式的告警类型字典条目（灰度规则系统下发）
 *
 * @method string getCode() 获取<p>告警类型标识，与 QuaraTypes 取值一致</p>
 * @method void setCode(string $Code) 设置<p>告警类型标识，与 QuaraTypes 取值一致</p>
 * @method string getName() 获取<p>展示类型名</p>
 * @method void setName(string $Name) 设置<p>展示类型名</p>
 * @method boolean getRecommend() 获取<p>是否推荐隔离</p>
 * @method void setRecommend(boolean $Recommend) 设置<p>是否推荐隔离</p>
 * @method string getDesc() 获取<p>描述和建议</p>
 * @method void setDesc(string $Desc) 设置<p>描述和建议</p>
 */
class QuaraTypeDictItem extends AbstractModel
{
    /**
     * @var string <p>告警类型标识，与 QuaraTypes 取值一致</p>
     */
    public $Code;

    /**
     * @var string <p>展示类型名</p>
     */
    public $Name;

    /**
     * @var boolean <p>是否推荐隔离</p>
     */
    public $Recommend;

    /**
     * @var string <p>描述和建议</p>
     */
    public $Desc;

    /**
     * @param string $Code <p>告警类型标识，与 QuaraTypes 取值一致</p>
     * @param string $Name <p>展示类型名</p>
     * @param boolean $Recommend <p>是否推荐隔离</p>
     * @param string $Desc <p>描述和建议</p>
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Recommend",$param) and $param["Recommend"] !== null) {
            $this->Recommend = $param["Recommend"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
