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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用防御概览信息
 *
 * @method integer getDefenceVuls() 获取可防御漏洞数
 * @method void setDefenceVuls(integer $DefenceVuls) 设置可防御漏洞数
 * @method integer getPreciseDefenseVuls() 获取可精准防御漏洞数
 * @method void setPreciseDefenseVuls(integer $PreciseDefenseVuls) 设置可精准防御漏洞数
 * @method integer getUnhandledRaspEvents() 获取未处理的应用防御事件数
 * @method void setUnhandledRaspEvents(integer $UnhandledRaspEvents) 设置未处理的应用防御事件数
 * @method integer getUnhandledMemShellScanEvents() 获取未处理的内存马扫描事件数
 * @method void setUnhandledMemShellScanEvents(integer $UnhandledMemShellScanEvents) 设置未处理的内存马扫描事件数
 * @method integer getUnhandledMemShellInjectEvents() 获取未处理的内存马注入事件数
 * @method void setUnhandledMemShellInjectEvents(integer $UnhandledMemShellInjectEvents) 设置未处理的内存马注入事件数
 * @method array getUnHandledEvents() 获取每日未处理事件趋势
 * @method void setUnHandledEvents(array $UnHandledEvents) 设置每日未处理事件趋势
 * @method array getRaspAttackCounts() 获取每日漏洞检测事件趋势
 * @method void setRaspAttackCounts(array $RaspAttackCounts) 设置每日漏洞检测事件趋势
 * @method array getRaspDefendCounts() 获取每日漏洞防御事件趋势
 * @method void setRaspDefendCounts(array $RaspDefendCounts) 设置每日漏洞防御事件趋势
 * @method array getMemShellAttackCounts() 获取每日内存马检测事件趋势
 * @method void setMemShellAttackCounts(array $MemShellAttackCounts) 设置每日内存马检测事件趋势
 * @method array getMemShellDefendCounts() 获取每日内存马防御事件趋势
 * @method void setMemShellDefendCounts(array $MemShellDefendCounts) 设置每日内存马防御事件趋势
 * @method array getDate() 获取日期
 * @method void setDate(array $Date) 设置日期
 * @method integer getProtectAssetOpenCount() 获取开通RASP防护开关资产数
 * @method void setProtectAssetOpenCount(integer $ProtectAssetOpenCount) 设置开通RASP防护开关资产数
 * @method integer getProtectAssetCount() 获取全部资产数
 * @method void setProtectAssetCount(integer $ProtectAssetCount) 设置全部资产数
 * @method integer getUltimateAssetCount() 获取绑定了旗舰版的资产防护数
 * @method void setUltimateAssetCount(integer $UltimateAssetCount) 设置绑定了旗舰版的资产防护数
 * @method integer getRaspAssetCount() 获取绑定了重保防护包的资产数
 * @method void setRaspAssetCount(integer $RaspAssetCount) 设置绑定了重保防护包的资产数
 * @method integer getNotProtectAssetCount() 获取未授权的资产数
 * @method void setNotProtectAssetCount(integer $NotProtectAssetCount) 设置未授权的资产数
 * @method integer getRecentUnhandledEvents() 获取近7天未处理事件数
 * @method void setRecentUnhandledEvents(integer $RecentUnhandledEvents) 设置近7天未处理事件数
 * @method integer getRaspDefendCount() 获取防御成功的总次数
 * @method void setRaspDefendCount(integer $RaspDefendCount) 设置防御成功的总次数
 */
class RaspEventOverview extends AbstractModel
{
    /**
     * @var integer 可防御漏洞数
     */
    public $DefenceVuls;

    /**
     * @var integer 可精准防御漏洞数
     */
    public $PreciseDefenseVuls;

    /**
     * @var integer 未处理的应用防御事件数
     */
    public $UnhandledRaspEvents;

    /**
     * @var integer 未处理的内存马扫描事件数
     */
    public $UnhandledMemShellScanEvents;

    /**
     * @var integer 未处理的内存马注入事件数
     */
    public $UnhandledMemShellInjectEvents;

    /**
     * @var array 每日未处理事件趋势
     */
    public $UnHandledEvents;

    /**
     * @var array 每日漏洞检测事件趋势
     */
    public $RaspAttackCounts;

    /**
     * @var array 每日漏洞防御事件趋势
     */
    public $RaspDefendCounts;

    /**
     * @var array 每日内存马检测事件趋势
     */
    public $MemShellAttackCounts;

    /**
     * @var array 每日内存马防御事件趋势
     */
    public $MemShellDefendCounts;

    /**
     * @var array 日期
     */
    public $Date;

    /**
     * @var integer 开通RASP防护开关资产数
     */
    public $ProtectAssetOpenCount;

    /**
     * @var integer 全部资产数
     */
    public $ProtectAssetCount;

    /**
     * @var integer 绑定了旗舰版的资产防护数
     */
    public $UltimateAssetCount;

    /**
     * @var integer 绑定了重保防护包的资产数
     */
    public $RaspAssetCount;

    /**
     * @var integer 未授权的资产数
     */
    public $NotProtectAssetCount;

    /**
     * @var integer 近7天未处理事件数
     */
    public $RecentUnhandledEvents;

    /**
     * @var integer 防御成功的总次数
     */
    public $RaspDefendCount;

    /**
     * @param integer $DefenceVuls 可防御漏洞数
     * @param integer $PreciseDefenseVuls 可精准防御漏洞数
     * @param integer $UnhandledRaspEvents 未处理的应用防御事件数
     * @param integer $UnhandledMemShellScanEvents 未处理的内存马扫描事件数
     * @param integer $UnhandledMemShellInjectEvents 未处理的内存马注入事件数
     * @param array $UnHandledEvents 每日未处理事件趋势
     * @param array $RaspAttackCounts 每日漏洞检测事件趋势
     * @param array $RaspDefendCounts 每日漏洞防御事件趋势
     * @param array $MemShellAttackCounts 每日内存马检测事件趋势
     * @param array $MemShellDefendCounts 每日内存马防御事件趋势
     * @param array $Date 日期
     * @param integer $ProtectAssetOpenCount 开通RASP防护开关资产数
     * @param integer $ProtectAssetCount 全部资产数
     * @param integer $UltimateAssetCount 绑定了旗舰版的资产防护数
     * @param integer $RaspAssetCount 绑定了重保防护包的资产数
     * @param integer $NotProtectAssetCount 未授权的资产数
     * @param integer $RecentUnhandledEvents 近7天未处理事件数
     * @param integer $RaspDefendCount 防御成功的总次数
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
        if (array_key_exists("DefenceVuls",$param) and $param["DefenceVuls"] !== null) {
            $this->DefenceVuls = $param["DefenceVuls"];
        }

        if (array_key_exists("PreciseDefenseVuls",$param) and $param["PreciseDefenseVuls"] !== null) {
            $this->PreciseDefenseVuls = $param["PreciseDefenseVuls"];
        }

        if (array_key_exists("UnhandledRaspEvents",$param) and $param["UnhandledRaspEvents"] !== null) {
            $this->UnhandledRaspEvents = $param["UnhandledRaspEvents"];
        }

        if (array_key_exists("UnhandledMemShellScanEvents",$param) and $param["UnhandledMemShellScanEvents"] !== null) {
            $this->UnhandledMemShellScanEvents = $param["UnhandledMemShellScanEvents"];
        }

        if (array_key_exists("UnhandledMemShellInjectEvents",$param) and $param["UnhandledMemShellInjectEvents"] !== null) {
            $this->UnhandledMemShellInjectEvents = $param["UnhandledMemShellInjectEvents"];
        }

        if (array_key_exists("UnHandledEvents",$param) and $param["UnHandledEvents"] !== null) {
            $this->UnHandledEvents = $param["UnHandledEvents"];
        }

        if (array_key_exists("RaspAttackCounts",$param) and $param["RaspAttackCounts"] !== null) {
            $this->RaspAttackCounts = $param["RaspAttackCounts"];
        }

        if (array_key_exists("RaspDefendCounts",$param) and $param["RaspDefendCounts"] !== null) {
            $this->RaspDefendCounts = $param["RaspDefendCounts"];
        }

        if (array_key_exists("MemShellAttackCounts",$param) and $param["MemShellAttackCounts"] !== null) {
            $this->MemShellAttackCounts = $param["MemShellAttackCounts"];
        }

        if (array_key_exists("MemShellDefendCounts",$param) and $param["MemShellDefendCounts"] !== null) {
            $this->MemShellDefendCounts = $param["MemShellDefendCounts"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("ProtectAssetOpenCount",$param) and $param["ProtectAssetOpenCount"] !== null) {
            $this->ProtectAssetOpenCount = $param["ProtectAssetOpenCount"];
        }

        if (array_key_exists("ProtectAssetCount",$param) and $param["ProtectAssetCount"] !== null) {
            $this->ProtectAssetCount = $param["ProtectAssetCount"];
        }

        if (array_key_exists("UltimateAssetCount",$param) and $param["UltimateAssetCount"] !== null) {
            $this->UltimateAssetCount = $param["UltimateAssetCount"];
        }

        if (array_key_exists("RaspAssetCount",$param) and $param["RaspAssetCount"] !== null) {
            $this->RaspAssetCount = $param["RaspAssetCount"];
        }

        if (array_key_exists("NotProtectAssetCount",$param) and $param["NotProtectAssetCount"] !== null) {
            $this->NotProtectAssetCount = $param["NotProtectAssetCount"];
        }

        if (array_key_exists("RecentUnhandledEvents",$param) and $param["RecentUnhandledEvents"] !== null) {
            $this->RecentUnhandledEvents = $param["RecentUnhandledEvents"];
        }

        if (array_key_exists("RaspDefendCount",$param) and $param["RaspDefendCount"] !== null) {
            $this->RaspDefendCount = $param["RaspDefendCount"];
        }
    }
}
