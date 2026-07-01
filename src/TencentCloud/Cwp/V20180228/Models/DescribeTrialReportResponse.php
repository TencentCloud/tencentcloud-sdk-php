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
 * DescribeTrialReport返回参数结构体
 *
 * @method boolean getIsShow() 获取<p>是否展示</p>
 * @method void setIsShow(boolean $IsShow) 设置<p>是否展示</p>
 * @method integer getAddMachineCnt() 获取<p>新增机器数</p>
 * @method void setAddMachineCnt(integer $AddMachineCnt) 设置<p>新增机器数</p>
 * @method integer getBaselineRiskCnt() 获取<p>基线风险数(检测项)</p>
 * @method void setBaselineRiskCnt(integer $BaselineRiskCnt) 设置<p>基线风险数(检测项)</p>
 * @method integer getVulCnt() 获取<p>漏洞数</p>
 * @method void setVulCnt(integer $VulCnt) 设置<p>漏洞数</p>
 * @method integer getMalwareAlarmCnt() 获取<p>木马告警成功数</p>
 * @method void setMalwareAlarmCnt(integer $MalwareAlarmCnt) 设置<p>木马告警成功数</p>
 * @method integer getBruteAlarmCnt() 获取<p>爆破告警成功数</p>
 * @method void setBruteAlarmCnt(integer $BruteAlarmCnt) 设置<p>爆破告警成功数</p>
 * @method integer getAutoIsolateMalwareCnt() 获取<p>自动隔离木马数(成功)</p>
 * @method void setAutoIsolateMalwareCnt(integer $AutoIsolateMalwareCnt) 设置<p>自动隔离木马数(成功)</p>
 * @method integer getAutoBlockBruteCnt() 获取<p>自动阻断数(成功)</p>
 * @method void setAutoBlockBruteCnt(integer $AutoBlockBruteCnt) 设置<p>自动阻断数(成功)</p>
 * @method integer getAutoDefenceCnt() 获取<p>自动防御漏洞数(成功)</p>
 * @method void setAutoDefenceCnt(integer $AutoDefenceCnt) 设置<p>自动防御漏洞数(成功)</p>
 * @method integer getAutoVulFixCnt() 获取<p>漏洞自动修复数</p>
 * @method void setAutoVulFixCnt(integer $AutoVulFixCnt) 设置<p>漏洞自动修复数</p>
 * @method integer getJavaShellCnt() 获取<p>java内存码告警数</p>
 * @method void setJavaShellCnt(integer $JavaShellCnt) 设置<p>java内存码告警数</p>
 * @method integer getFileTamperCnt() 获取<p>核心文件监控告警数</p>
 * @method void setFileTamperCnt(integer $FileTamperCnt) 设置<p>核心文件监控告警数</p>
 * @method integer getEventCnt() 获取<p>事件调查数</p>
 * @method void setEventCnt(integer $EventCnt) 设置<p>事件调查数</p>
 * @method integer getDnsCnt() 获取<p>恶意请求事件数</p>
 * @method void setDnsCnt(integer $DnsCnt) 设置<p>恶意请求事件数</p>
 * @method integer getBashCnt() 获取<p>高危命令事件数</p>
 * @method void setBashCnt(integer $BashCnt) 设置<p>高危命令事件数</p>
 * @method array getCloudFrom() 获取<p>云服务器厂商类型</p>
 * @method void setCloudFrom(array $CloudFrom) 设置<p>云服务器厂商类型</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTrialReportResponse extends AbstractModel
{
    /**
     * @var boolean <p>是否展示</p>
     */
    public $IsShow;

    /**
     * @var integer <p>新增机器数</p>
     */
    public $AddMachineCnt;

    /**
     * @var integer <p>基线风险数(检测项)</p>
     */
    public $BaselineRiskCnt;

    /**
     * @var integer <p>漏洞数</p>
     */
    public $VulCnt;

    /**
     * @var integer <p>木马告警成功数</p>
     */
    public $MalwareAlarmCnt;

    /**
     * @var integer <p>爆破告警成功数</p>
     */
    public $BruteAlarmCnt;

    /**
     * @var integer <p>自动隔离木马数(成功)</p>
     */
    public $AutoIsolateMalwareCnt;

    /**
     * @var integer <p>自动阻断数(成功)</p>
     */
    public $AutoBlockBruteCnt;

    /**
     * @var integer <p>自动防御漏洞数(成功)</p>
     */
    public $AutoDefenceCnt;

    /**
     * @var integer <p>漏洞自动修复数</p>
     */
    public $AutoVulFixCnt;

    /**
     * @var integer <p>java内存码告警数</p>
     */
    public $JavaShellCnt;

    /**
     * @var integer <p>核心文件监控告警数</p>
     */
    public $FileTamperCnt;

    /**
     * @var integer <p>事件调查数</p>
     */
    public $EventCnt;

    /**
     * @var integer <p>恶意请求事件数</p>
     */
    public $DnsCnt;

    /**
     * @var integer <p>高危命令事件数</p>
     */
    public $BashCnt;

    /**
     * @var array <p>云服务器厂商类型</p>
     */
    public $CloudFrom;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsShow <p>是否展示</p>
     * @param integer $AddMachineCnt <p>新增机器数</p>
     * @param integer $BaselineRiskCnt <p>基线风险数(检测项)</p>
     * @param integer $VulCnt <p>漏洞数</p>
     * @param integer $MalwareAlarmCnt <p>木马告警成功数</p>
     * @param integer $BruteAlarmCnt <p>爆破告警成功数</p>
     * @param integer $AutoIsolateMalwareCnt <p>自动隔离木马数(成功)</p>
     * @param integer $AutoBlockBruteCnt <p>自动阻断数(成功)</p>
     * @param integer $AutoDefenceCnt <p>自动防御漏洞数(成功)</p>
     * @param integer $AutoVulFixCnt <p>漏洞自动修复数</p>
     * @param integer $JavaShellCnt <p>java内存码告警数</p>
     * @param integer $FileTamperCnt <p>核心文件监控告警数</p>
     * @param integer $EventCnt <p>事件调查数</p>
     * @param integer $DnsCnt <p>恶意请求事件数</p>
     * @param integer $BashCnt <p>高危命令事件数</p>
     * @param array $CloudFrom <p>云服务器厂商类型</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IsShow",$param) and $param["IsShow"] !== null) {
            $this->IsShow = $param["IsShow"];
        }

        if (array_key_exists("AddMachineCnt",$param) and $param["AddMachineCnt"] !== null) {
            $this->AddMachineCnt = $param["AddMachineCnt"];
        }

        if (array_key_exists("BaselineRiskCnt",$param) and $param["BaselineRiskCnt"] !== null) {
            $this->BaselineRiskCnt = $param["BaselineRiskCnt"];
        }

        if (array_key_exists("VulCnt",$param) and $param["VulCnt"] !== null) {
            $this->VulCnt = $param["VulCnt"];
        }

        if (array_key_exists("MalwareAlarmCnt",$param) and $param["MalwareAlarmCnt"] !== null) {
            $this->MalwareAlarmCnt = $param["MalwareAlarmCnt"];
        }

        if (array_key_exists("BruteAlarmCnt",$param) and $param["BruteAlarmCnt"] !== null) {
            $this->BruteAlarmCnt = $param["BruteAlarmCnt"];
        }

        if (array_key_exists("AutoIsolateMalwareCnt",$param) and $param["AutoIsolateMalwareCnt"] !== null) {
            $this->AutoIsolateMalwareCnt = $param["AutoIsolateMalwareCnt"];
        }

        if (array_key_exists("AutoBlockBruteCnt",$param) and $param["AutoBlockBruteCnt"] !== null) {
            $this->AutoBlockBruteCnt = $param["AutoBlockBruteCnt"];
        }

        if (array_key_exists("AutoDefenceCnt",$param) and $param["AutoDefenceCnt"] !== null) {
            $this->AutoDefenceCnt = $param["AutoDefenceCnt"];
        }

        if (array_key_exists("AutoVulFixCnt",$param) and $param["AutoVulFixCnt"] !== null) {
            $this->AutoVulFixCnt = $param["AutoVulFixCnt"];
        }

        if (array_key_exists("JavaShellCnt",$param) and $param["JavaShellCnt"] !== null) {
            $this->JavaShellCnt = $param["JavaShellCnt"];
        }

        if (array_key_exists("FileTamperCnt",$param) and $param["FileTamperCnt"] !== null) {
            $this->FileTamperCnt = $param["FileTamperCnt"];
        }

        if (array_key_exists("EventCnt",$param) and $param["EventCnt"] !== null) {
            $this->EventCnt = $param["EventCnt"];
        }

        if (array_key_exists("DnsCnt",$param) and $param["DnsCnt"] !== null) {
            $this->DnsCnt = $param["DnsCnt"];
        }

        if (array_key_exists("BashCnt",$param) and $param["BashCnt"] !== null) {
            $this->BashCnt = $param["BashCnt"];
        }

        if (array_key_exists("CloudFrom",$param) and $param["CloudFrom"] !== null) {
            $this->CloudFrom = [];
            foreach ($param["CloudFrom"] as $key => $value){
                $obj = new CloudFromCnt();
                $obj->deserialize($value);
                array_push($this->CloudFrom, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
