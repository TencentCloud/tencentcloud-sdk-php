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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBotSceneUCBRule请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getSkip() 获取翻页组件的起始页
 * @method void setSkip(integer $Skip) 设置翻页组件的起始页
 * @method integer getLimit() 获取翻页组件的页数据条数
 * @method void setLimit(integer $Limit) 设置翻页组件的页数据条数
 * @method string getSort() 获取排序参数
 * @method void setSort(string $Sort) 设置排序参数
 * @method string getSceneId() 获取1.BOT全局白名单处调用时，传"global";2.BOT场景配置处调用时，传具体的场景ID
 * @method void setSceneId(string $SceneId) 设置1.BOT全局白名单处调用时，传"global";2.BOT场景配置处调用时，传具体的场景ID
 * @method string getOperate() 获取需要过滤的动作
 * @method void setOperate(string $Operate) 设置需要过滤的动作
 * @method string getName() 获取需要过滤的规则名称
 * @method void setName(string $Name) 设置需要过滤的规则名称
 * @method string getVersionFlag() 获取兼容老数据和新旧版前端
 * @method void setVersionFlag(string $VersionFlag) 设置兼容老数据和新旧版前端
 * @method integer getTimerType() 获取生效方式：0-全部 1-永久生效 2-定时生效 3-周粒度生效 4-月粒度生效
 * @method void setTimerType(integer $TimerType) 设置生效方式：0-全部 1-永久生效 2-定时生效 3-周粒度生效 4-月粒度生效
 * @method integer getValidStatus() 获取0-全部 1-生效中 2-已过期
 * @method void setValidStatus(integer $ValidStatus) 设置0-全部 1-生效中 2-已过期
 * @method string getRuleId() 获取规则id
 * @method void setRuleId(string $RuleId) 设置规则id
 */
class DescribeBotSceneUCBRuleRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 翻页组件的起始页
     */
    public $Skip;

    /**
     * @var integer 翻页组件的页数据条数
     */
    public $Limit;

    /**
     * @var string 排序参数
     */
    public $Sort;

    /**
     * @var string 1.BOT全局白名单处调用时，传"global";2.BOT场景配置处调用时，传具体的场景ID
     */
    public $SceneId;

    /**
     * @var string 需要过滤的动作
     */
    public $Operate;

    /**
     * @var string 需要过滤的规则名称
     */
    public $Name;

    /**
     * @var string 兼容老数据和新旧版前端
     */
    public $VersionFlag;

    /**
     * @var integer 生效方式：0-全部 1-永久生效 2-定时生效 3-周粒度生效 4-月粒度生效
     */
    public $TimerType;

    /**
     * @var integer 0-全部 1-生效中 2-已过期
     */
    public $ValidStatus;

    /**
     * @var string 规则id
     */
    public $RuleId;

    /**
     * @param string $Domain 域名
     * @param integer $Skip 翻页组件的起始页
     * @param integer $Limit 翻页组件的页数据条数
     * @param string $Sort 排序参数
     * @param string $SceneId 1.BOT全局白名单处调用时，传"global";2.BOT场景配置处调用时，传具体的场景ID
     * @param string $Operate 需要过滤的动作
     * @param string $Name 需要过滤的规则名称
     * @param string $VersionFlag 兼容老数据和新旧版前端
     * @param integer $TimerType 生效方式：0-全部 1-永久生效 2-定时生效 3-周粒度生效 4-月粒度生效
     * @param integer $ValidStatus 0-全部 1-生效中 2-已过期
     * @param string $RuleId 规则id
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Skip",$param) and $param["Skip"] !== null) {
            $this->Skip = $param["Skip"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VersionFlag",$param) and $param["VersionFlag"] !== null) {
            $this->VersionFlag = $param["VersionFlag"];
        }

        if (array_key_exists("TimerType",$param) and $param["TimerType"] !== null) {
            $this->TimerType = $param["TimerType"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
