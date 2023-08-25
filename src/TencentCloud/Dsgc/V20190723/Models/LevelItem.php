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
 * 分级单项信息
 *
 * @method integer getLevelId() 获取分级ID
 * @method void setLevelId(integer $LevelId) 设置分级ID
 * @method integer getLevelGroupId() 获取分级组ID
 * @method void setLevelGroupId(integer $LevelGroupId) 设置分级组ID
 * @method string getLevelRiskName() 获取分级标识名称，支持内置分级，内置分级取值：高，中，低，也可以自定义
 * @method void setLevelRiskName(string $LevelRiskName) 设置分级标识名称，支持内置分级，内置分级取值：高，中，低，也可以自定义
 * @method integer getLevelRiskScore() 获取分级风险分数，1-10，最小值为1，最大值为10
 * @method void setLevelRiskScore(integer $LevelRiskScore) 设置分级风险分数，1-10，最小值为1，最大值为10
 */
class LevelItem extends AbstractModel
{
    /**
     * @var integer 分级ID
     */
    public $LevelId;

    /**
     * @var integer 分级组ID
     */
    public $LevelGroupId;

    /**
     * @var string 分级标识名称，支持内置分级，内置分级取值：高，中，低，也可以自定义
     */
    public $LevelRiskName;

    /**
     * @var integer 分级风险分数，1-10，最小值为1，最大值为10
     */
    public $LevelRiskScore;

    /**
     * @param integer $LevelId 分级ID
     * @param integer $LevelGroupId 分级组ID
     * @param string $LevelRiskName 分级标识名称，支持内置分级，内置分级取值：高，中，低，也可以自定义
     * @param integer $LevelRiskScore 分级风险分数，1-10，最小值为1，最大值为10
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

        if (array_key_exists("LevelGroupId",$param) and $param["LevelGroupId"] !== null) {
            $this->LevelGroupId = $param["LevelGroupId"];
        }

        if (array_key_exists("LevelRiskName",$param) and $param["LevelRiskName"] !== null) {
            $this->LevelRiskName = $param["LevelRiskName"];
        }

        if (array_key_exists("LevelRiskScore",$param) and $param["LevelRiskScore"] !== null) {
            $this->LevelRiskScore = $param["LevelRiskScore"];
        }
    }
}
