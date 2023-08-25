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
 * 敏感等级分布
 *
 * @method integer getLevelId() 获取分级标识ID
 * @method void setLevelId(integer $LevelId) 设置分级标识ID
 * @method integer getLevelCnt() 获取分级标识统计
 * @method void setLevelCnt(integer $LevelCnt) 设置分级标识统计
 * @method string getLevelRiskName() 获取分级标识名称
 * @method void setLevelRiskName(string $LevelRiskName) 设置分级标识名称
 * @method integer getLevelRiskScore() 获取分级标识分数
 * @method void setLevelRiskScore(integer $LevelRiskScore) 设置分级标识分数
 */
class SensitiveLevel extends AbstractModel
{
    /**
     * @var integer 分级标识ID
     */
    public $LevelId;

    /**
     * @var integer 分级标识统计
     */
    public $LevelCnt;

    /**
     * @var string 分级标识名称
     */
    public $LevelRiskName;

    /**
     * @var integer 分级标识分数
     */
    public $LevelRiskScore;

    /**
     * @param integer $LevelId 分级标识ID
     * @param integer $LevelCnt 分级标识统计
     * @param string $LevelRiskName 分级标识名称
     * @param integer $LevelRiskScore 分级标识分数
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
        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelCnt",$param) and $param["LevelCnt"] !== null) {
            $this->LevelCnt = $param["LevelCnt"];
        }

        if (array_key_exists("LevelRiskName",$param) and $param["LevelRiskName"] !== null) {
            $this->LevelRiskName = $param["LevelRiskName"];
        }

        if (array_key_exists("LevelRiskScore",$param) and $param["LevelRiskScore"] !== null) {
            $this->LevelRiskScore = $param["LevelRiskScore"];
        }
    }
}
