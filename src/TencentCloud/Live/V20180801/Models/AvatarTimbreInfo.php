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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数字人声音信息。
 *
 * @method string getTimbreKey() 获取音色 Key。
 * @method void setTimbreKey(string $TimbreKey) 设置音色 Key。
 * @method string getTimbreName() 获取音色名称。
 * @method void setTimbreName(string $TimbreName) 设置音色名称。
 * @method string getTimbreDesc() 获取音色描述。
 * @method void setTimbreDesc(string $TimbreDesc) 设置音色描述。
 * @method string getTimbreSample() 获取音色试听样例 URL。
 * @method void setTimbreSample(string $TimbreSample) 设置音色试听样例 URL。
 * @method string getTimbreGender() 获取音色性别，male:男音，femal:女音。
 * @method void setTimbreGender(string $TimbreGender) 设置音色性别，male:男音，femal:女音。
 */
class AvatarTimbreInfo extends AbstractModel
{
    /**
     * @var string 音色 Key。
     */
    public $TimbreKey;

    /**
     * @var string 音色名称。
     */
    public $TimbreName;

    /**
     * @var string 音色描述。
     */
    public $TimbreDesc;

    /**
     * @var string 音色试听样例 URL。
     */
    public $TimbreSample;

    /**
     * @var string 音色性别，male:男音，femal:女音。
     */
    public $TimbreGender;

    /**
     * @param string $TimbreKey 音色 Key。
     * @param string $TimbreName 音色名称。
     * @param string $TimbreDesc 音色描述。
     * @param string $TimbreSample 音色试听样例 URL。
     * @param string $TimbreGender 音色性别，male:男音，femal:女音。
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
        if (array_key_exists("TimbreKey",$param) and $param["TimbreKey"] !== null) {
            $this->TimbreKey = $param["TimbreKey"];
        }

        if (array_key_exists("TimbreName",$param) and $param["TimbreName"] !== null) {
            $this->TimbreName = $param["TimbreName"];
        }

        if (array_key_exists("TimbreDesc",$param) and $param["TimbreDesc"] !== null) {
            $this->TimbreDesc = $param["TimbreDesc"];
        }

        if (array_key_exists("TimbreSample",$param) and $param["TimbreSample"] !== null) {
            $this->TimbreSample = $param["TimbreSample"];
        }

        if (array_key_exists("TimbreGender",$param) and $param["TimbreGender"] !== null) {
            $this->TimbreGender = $param["TimbreGender"];
        }
    }
}
