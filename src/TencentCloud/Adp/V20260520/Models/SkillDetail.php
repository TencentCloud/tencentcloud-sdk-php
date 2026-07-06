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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * skill详情
 *
 * @method array getReferenceSummaryList() 获取调用情况摘要
 * @method void setReferenceSummaryList(array $ReferenceSummaryList) 设置调用情况摘要
 * @method SkillSummary getSkillSummary() 获取Skill 摘要
 * @method void setSkillSummary(SkillSummary $SkillSummary) 设置Skill 摘要
 * @method array getVersionList() 获取版本列表
 * @method void setVersionList(array $VersionList) 设置版本列表
 */
class SkillDetail extends AbstractModel
{
    /**
     * @var array 调用情况摘要
     */
    public $ReferenceSummaryList;

    /**
     * @var SkillSummary Skill 摘要
     */
    public $SkillSummary;

    /**
     * @var array 版本列表
     */
    public $VersionList;

    /**
     * @param array $ReferenceSummaryList 调用情况摘要
     * @param SkillSummary $SkillSummary Skill 摘要
     * @param array $VersionList 版本列表
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
        if (array_key_exists("ReferenceSummaryList",$param) and $param["ReferenceSummaryList"] !== null) {
            $this->ReferenceSummaryList = [];
            foreach ($param["ReferenceSummaryList"] as $key => $value){
                $obj = new SkillReferenceSummary();
                $obj->deserialize($value);
                array_push($this->ReferenceSummaryList, $obj);
            }
        }

        if (array_key_exists("SkillSummary",$param) and $param["SkillSummary"] !== null) {
            $this->SkillSummary = new SkillSummary();
            $this->SkillSummary->deserialize($param["SkillSummary"]);
        }

        if (array_key_exists("VersionList",$param) and $param["VersionList"] !== null) {
            $this->VersionList = [];
            foreach ($param["VersionList"] as $key => $value){
                $obj = new SkillVersion();
                $obj->deserialize($value);
                array_push($this->VersionList, $obj);
            }
        }
    }
}
