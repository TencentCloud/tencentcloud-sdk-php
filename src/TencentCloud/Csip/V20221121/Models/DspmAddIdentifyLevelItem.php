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
 * dspm数据识别级别信息
 *
 * @method string getLevelName() 获取<p>级别名称</p>
 * @method void setLevelName(string $LevelName) 设置<p>级别名称</p>
 * @method integer getLevelScore() 获取<p>级别敏感程度</p><p>单位：分数</p>
 * @method void setLevelScore(integer $LevelScore) 设置<p>级别敏感程度</p><p>单位：分数</p>
 */
class DspmAddIdentifyLevelItem extends AbstractModel
{
    /**
     * @var string <p>级别名称</p>
     */
    public $LevelName;

    /**
     * @var integer <p>级别敏感程度</p><p>单位：分数</p>
     */
    public $LevelScore;

    /**
     * @param string $LevelName <p>级别名称</p>
     * @param integer $LevelScore <p>级别敏感程度</p><p>单位：分数</p>
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
        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("LevelScore",$param) and $param["LevelScore"] !== null) {
            $this->LevelScore = $param["LevelScore"];
        }
    }
}
