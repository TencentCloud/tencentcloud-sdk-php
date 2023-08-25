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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合规组中规则信息：包括规则ID，数据分类ID, 数据分级标识ID
 *
 * @method integer getRuleId() 获取敏感数据识别规则ID
 * @method void setRuleId(integer $RuleId) 设置敏感数据识别规则ID
 * @method integer getCategoryId() 获取敏感数据分类ID
 * @method void setCategoryId(integer $CategoryId) 设置敏感数据分类ID
 * @method integer getLevelId() 获取敏感数据分级标识ID, 系统支持高、中、低三级，也支持自定义分级
 * @method void setLevelId(integer $LevelId) 设置敏感数据分级标识ID, 系统支持高、中、低三级，也支持自定义分级
 */
class ComplianceGroupRuleIdInfo extends AbstractModel
{
    /**
     * @var integer 敏感数据识别规则ID
     */
    public $RuleId;

    /**
     * @var integer 敏感数据分类ID
     */
    public $CategoryId;

    /**
     * @var integer 敏感数据分级标识ID, 系统支持高、中、低三级，也支持自定义分级
     */
    public $LevelId;

    /**
     * @param integer $RuleId 敏感数据识别规则ID
     * @param integer $CategoryId 敏感数据分类ID
     * @param integer $LevelId 敏感数据分级标识ID, 系统支持高、中、低三级，也支持自定义分级
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }
    }
}
