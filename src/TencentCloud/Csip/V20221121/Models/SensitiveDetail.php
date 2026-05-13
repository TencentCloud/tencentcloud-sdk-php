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
 * 敏感分类分级描述
 *
 * @method string getCategoryRule() 获取字段分类
 * @method void setCategoryRule(string $CategoryRule) 设置字段分类
 * @method string getLevelRisk() 获取字段分级
 * @method void setLevelRisk(string $LevelRisk) 设置字段分级
 * @method integer getIsSensitive() 获取1:敏感信息字段
0:非敏感字段
 * @method void setIsSensitive(integer $IsSensitive) 设置1:敏感信息字段
0:非敏感字段
 */
class SensitiveDetail extends AbstractModel
{
    /**
     * @var string 字段分类
     */
    public $CategoryRule;

    /**
     * @var string 字段分级
     */
    public $LevelRisk;

    /**
     * @var integer 1:敏感信息字段
0:非敏感字段
     */
    public $IsSensitive;

    /**
     * @param string $CategoryRule 字段分类
     * @param string $LevelRisk 字段分级
     * @param integer $IsSensitive 1:敏感信息字段
0:非敏感字段
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
        if (array_key_exists("CategoryRule",$param) and $param["CategoryRule"] !== null) {
            $this->CategoryRule = $param["CategoryRule"];
        }

        if (array_key_exists("LevelRisk",$param) and $param["LevelRisk"] !== null) {
            $this->LevelRisk = $param["LevelRisk"];
        }

        if (array_key_exists("IsSensitive",$param) and $param["IsSensitive"] !== null) {
            $this->IsSensitive = $param["IsSensitive"];
        }
    }
}
