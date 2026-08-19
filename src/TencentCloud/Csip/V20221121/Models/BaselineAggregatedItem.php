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
 * 检测项维度的聚合结果，承载该检测项在资产上的通过/未通过统计。
 *
 * @method BaselineItem getItem() 获取<p>检测项基础信息（含 ID、名称、风险等级、分类等）。</p>
 * @method void setItem(BaselineItem $Item) 设置<p>检测项基础信息（含 ID、名称、风险等级、分类等）。</p>
 * @method integer getPassAssetCount() 获取<p>该检测项最近一次扫描中结果为 PASS 的资产数量。</p>
 * @method void setPassAssetCount(integer $PassAssetCount) 设置<p>该检测项最近一次扫描中结果为 PASS 的资产数量。</p>
 * @method integer getNotPassAssetCount() 获取<p>该检测项最近一次扫描中结果为 NOT_PASS 的资产数量。</p>
 * @method void setNotPassAssetCount(integer $NotPassAssetCount) 设置<p>该检测项最近一次扫描中结果为 NOT_PASS 的资产数量。</p>
 * @method integer getTotalAssetCount() 获取<p>该检测项最近一次扫描中结果为 PASS NOT_PASS 以及 CHECKING 的资产数量。</p>
 * @method void setTotalAssetCount(integer $TotalAssetCount) 设置<p>该检测项最近一次扫描中结果为 PASS NOT_PASS 以及 CHECKING 的资产数量。</p>
 * @method float getPassRate() 获取<p>该检测项最近一次扫描的资产通过率，单位为百分比（0~100）。</p>
 * @method void setPassRate(float $PassRate) 设置<p>该检测项最近一次扫描的资产通过率，单位为百分比（0~100）。</p>
 * @method string getLatestCheckTime() 获取<p>该检测项最近一次完成扫描的时间。</p>
 * @method void setLatestCheckTime(string $LatestCheckTime) 设置<p>该检测项最近一次完成扫描的时间。</p>
 * @method string getResultStatus() 获取<p>上次扫描结果状态。取值：</p><ul><li>CHECKING：检测中</li><li>PASS：通过</li><li>NOT_PASS：未通过</li><li>CHECK_FAILED：检测失败</li><li>NOT_INVOLVED：不涉及</li></ul>
 * @method void setResultStatus(string $ResultStatus) 设置<p>上次扫描结果状态。取值：</p><ul><li>CHECKING：检测中</li><li>PASS：通过</li><li>NOT_PASS：未通过</li><li>CHECK_FAILED：检测失败</li><li>NOT_INVOLVED：不涉及</li></ul>
 * @method array getAppid() 获取<p>该聚合结果涉及的租户 Appid 列表。</p>
 * @method void setAppid(array $Appid) 设置<p>该聚合结果涉及的租户 Appid 列表。</p>
 * @method array getJobID() 获取<p>该聚合结果涉及的扫描 JobID 列表。</p>
 * @method void setJobID(array $JobID) 设置<p>该聚合结果涉及的扫描 JobID 列表。</p>
 */
class BaselineAggregatedItem extends AbstractModel
{
    /**
     * @var BaselineItem <p>检测项基础信息（含 ID、名称、风险等级、分类等）。</p>
     */
    public $Item;

    /**
     * @var integer <p>该检测项最近一次扫描中结果为 PASS 的资产数量。</p>
     */
    public $PassAssetCount;

    /**
     * @var integer <p>该检测项最近一次扫描中结果为 NOT_PASS 的资产数量。</p>
     */
    public $NotPassAssetCount;

    /**
     * @var integer <p>该检测项最近一次扫描中结果为 PASS NOT_PASS 以及 CHECKING 的资产数量。</p>
     */
    public $TotalAssetCount;

    /**
     * @var float <p>该检测项最近一次扫描的资产通过率，单位为百分比（0~100）。</p>
     */
    public $PassRate;

    /**
     * @var string <p>该检测项最近一次完成扫描的时间。</p>
     */
    public $LatestCheckTime;

    /**
     * @var string <p>上次扫描结果状态。取值：</p><ul><li>CHECKING：检测中</li><li>PASS：通过</li><li>NOT_PASS：未通过</li><li>CHECK_FAILED：检测失败</li><li>NOT_INVOLVED：不涉及</li></ul>
     */
    public $ResultStatus;

    /**
     * @var array <p>该聚合结果涉及的租户 Appid 列表。</p>
     */
    public $Appid;

    /**
     * @var array <p>该聚合结果涉及的扫描 JobID 列表。</p>
     */
    public $JobID;

    /**
     * @param BaselineItem $Item <p>检测项基础信息（含 ID、名称、风险等级、分类等）。</p>
     * @param integer $PassAssetCount <p>该检测项最近一次扫描中结果为 PASS 的资产数量。</p>
     * @param integer $NotPassAssetCount <p>该检测项最近一次扫描中结果为 NOT_PASS 的资产数量。</p>
     * @param integer $TotalAssetCount <p>该检测项最近一次扫描中结果为 PASS NOT_PASS 以及 CHECKING 的资产数量。</p>
     * @param float $PassRate <p>该检测项最近一次扫描的资产通过率，单位为百分比（0~100）。</p>
     * @param string $LatestCheckTime <p>该检测项最近一次完成扫描的时间。</p>
     * @param string $ResultStatus <p>上次扫描结果状态。取值：</p><ul><li>CHECKING：检测中</li><li>PASS：通过</li><li>NOT_PASS：未通过</li><li>CHECK_FAILED：检测失败</li><li>NOT_INVOLVED：不涉及</li></ul>
     * @param array $Appid <p>该聚合结果涉及的租户 Appid 列表。</p>
     * @param array $JobID <p>该聚合结果涉及的扫描 JobID 列表。</p>
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = new BaselineItem();
            $this->Item->deserialize($param["Item"]);
        }

        if (array_key_exists("PassAssetCount",$param) and $param["PassAssetCount"] !== null) {
            $this->PassAssetCount = $param["PassAssetCount"];
        }

        if (array_key_exists("NotPassAssetCount",$param) and $param["NotPassAssetCount"] !== null) {
            $this->NotPassAssetCount = $param["NotPassAssetCount"];
        }

        if (array_key_exists("TotalAssetCount",$param) and $param["TotalAssetCount"] !== null) {
            $this->TotalAssetCount = $param["TotalAssetCount"];
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }

        if (array_key_exists("LatestCheckTime",$param) and $param["LatestCheckTime"] !== null) {
            $this->LatestCheckTime = $param["LatestCheckTime"];
        }

        if (array_key_exists("ResultStatus",$param) and $param["ResultStatus"] !== null) {
            $this->ResultStatus = $param["ResultStatus"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
        }
    }
}
