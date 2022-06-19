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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCCCSkillGroup请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填）
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填）
 * @method string getSkillGroupName() 获取技能组名称
 * @method void setSkillGroupName(string $SkillGroupName) 设置技能组名称
 * @method integer getSkillGroupType() 获取技能组类型0-电话，1-在线，3-音频，4-视频
 * @method void setSkillGroupType(integer $SkillGroupType) 设置技能组类型0-电话，1-在线，3-音频，4-视频
 * @method integer getMaxConcurrency() 获取技能组接待人数上限（该技能组中1个座席可接待的人数上限）默认为1。1、若技能组类型为在线，则接待上限可设置为1及以上
2、若技能组类型为电话、音频、视频，则接待上线必须只能为1
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置技能组接待人数上限（该技能组中1个座席可接待的人数上限）默认为1。1、若技能组类型为在线，则接待上限可设置为1及以上
2、若技能组类型为电话、音频、视频，则接待上线必须只能为1
 */
class CreateCCCSkillGroupRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填）
     */
    public $SdkAppId;

    /**
     * @var string 技能组名称
     */
    public $SkillGroupName;

    /**
     * @var integer 技能组类型0-电话，1-在线，3-音频，4-视频
     */
    public $SkillGroupType;

    /**
     * @var integer 技能组接待人数上限（该技能组中1个座席可接待的人数上限）默认为1。1、若技能组类型为在线，则接待上限可设置为1及以上
2、若技能组类型为电话、音频、视频，则接待上线必须只能为1
     */
    public $MaxConcurrency;

    /**
     * @param integer $SdkAppId 应用 ID（必填）
     * @param string $SkillGroupName 技能组名称
     * @param integer $SkillGroupType 技能组类型0-电话，1-在线，3-音频，4-视频
     * @param integer $MaxConcurrency 技能组接待人数上限（该技能组中1个座席可接待的人数上限）默认为1。1、若技能组类型为在线，则接待上限可设置为1及以上
2、若技能组类型为电话、音频、视频，则接待上线必须只能为1
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }

        if (array_key_exists("SkillGroupType",$param) and $param["SkillGroupType"] !== null) {
            $this->SkillGroupType = $param["SkillGroupType"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }
    }
}
