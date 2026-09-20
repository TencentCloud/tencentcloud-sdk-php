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
 * Skill 扫描任务列表项
 *
 * @method string getInsertTime() 获取上传时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setInsertTime(string $InsertTime) 设置上传时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getSkillName() 获取Skill 名称
 * @method void setSkillName(string $SkillName) 设置Skill 名称
 * @method integer getDeductCount() 获取消耗次数（总消耗次数）
 * @method void setDeductCount(integer $DeductCount) 设置消耗次数（总消耗次数）
 */
class SkillScanTaskItem extends AbstractModel
{
    /**
     * @var string 上传时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $InsertTime;

    /**
     * @var string Skill 名称
     */
    public $SkillName;

    /**
     * @var integer 消耗次数（总消耗次数）
     */
    public $DeductCount;

    /**
     * @param string $InsertTime 上传时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $SkillName Skill 名称
     * @param integer $DeductCount 消耗次数（总消耗次数）
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
        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            $this->SkillName = $param["SkillName"];
        }

        if (array_key_exists("DeductCount",$param) and $param["DeductCount"] !== null) {
            $this->DeductCount = $param["DeductCount"];
        }
    }
}
