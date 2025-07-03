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
 * 技能组信息
 *
 * @method integer getSkillGroupId() 获取技能组ID
 * @method void setSkillGroupId(integer $SkillGroupId) 设置技能组ID
 * @method string getSkillGroupName() 获取技能组名称
 * @method void setSkillGroupName(string $SkillGroupName) 设置技能组名称
 * @method string getType() 获取（废弃）类型：IM、TEL、ALL（全媒体）
 * @method void setType(string $Type) 设置（废弃）类型：IM、TEL、ALL（全媒体）
 * @method string getRoutePolicy() 获取会话分配策略
 * @method void setRoutePolicy(string $RoutePolicy) 设置会话分配策略
 * @method integer getUsingLastSeat() 获取会话分配是否优先上次服务座席
 * @method void setUsingLastSeat(integer $UsingLastSeat) 设置会话分配是否优先上次服务座席
 * @method integer getMaxConcurrency() 获取单客服最大并发数（电话类型默认1）
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置单客服最大并发数（电话类型默认1）
 * @method integer getLastModifyTimestamp() 获取最后修改时间
 * @method void setLastModifyTimestamp(integer $LastModifyTimestamp) 设置最后修改时间
 * @method integer getSkillGroupType() 获取技能组类型0-电话，1-在线，3-音频，4-视频	
 * @method void setSkillGroupType(integer $SkillGroupType) 设置技能组类型0-电话，1-在线，3-音频，4-视频	
 * @method string getAlias() 获取技能组内线号码
 * @method void setAlias(string $Alias) 设置技能组内线号码
 */
class SkillGroupInfoItem extends AbstractModel
{
    /**
     * @var integer 技能组ID
     */
    public $SkillGroupId;

    /**
     * @var string 技能组名称
     */
    public $SkillGroupName;

    /**
     * @var string （废弃）类型：IM、TEL、ALL（全媒体）
     */
    public $Type;

    /**
     * @var string 会话分配策略
     */
    public $RoutePolicy;

    /**
     * @var integer 会话分配是否优先上次服务座席
     */
    public $UsingLastSeat;

    /**
     * @var integer 单客服最大并发数（电话类型默认1）
     */
    public $MaxConcurrency;

    /**
     * @var integer 最后修改时间
     */
    public $LastModifyTimestamp;

    /**
     * @var integer 技能组类型0-电话，1-在线，3-音频，4-视频	
     */
    public $SkillGroupType;

    /**
     * @var string 技能组内线号码
     */
    public $Alias;

    /**
     * @param integer $SkillGroupId 技能组ID
     * @param string $SkillGroupName 技能组名称
     * @param string $Type （废弃）类型：IM、TEL、ALL（全媒体）
     * @param string $RoutePolicy 会话分配策略
     * @param integer $UsingLastSeat 会话分配是否优先上次服务座席
     * @param integer $MaxConcurrency 单客服最大并发数（电话类型默认1）
     * @param integer $LastModifyTimestamp 最后修改时间
     * @param integer $SkillGroupType 技能组类型0-电话，1-在线，3-音频，4-视频	
     * @param string $Alias 技能组内线号码
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
        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RoutePolicy",$param) and $param["RoutePolicy"] !== null) {
            $this->RoutePolicy = $param["RoutePolicy"];
        }

        if (array_key_exists("UsingLastSeat",$param) and $param["UsingLastSeat"] !== null) {
            $this->UsingLastSeat = $param["UsingLastSeat"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("LastModifyTimestamp",$param) and $param["LastModifyTimestamp"] !== null) {
            $this->LastModifyTimestamp = $param["LastModifyTimestamp"];
        }

        if (array_key_exists("SkillGroupType",$param) and $param["SkillGroupType"] !== null) {
            $this->SkillGroupType = $param["SkillGroupType"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
