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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用量明细行
 *
 * @method string getInstanceId() 获取<p>业务系统 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID</p>
 * @method string getInstanceName() 获取<p>业务系统名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>业务系统名称</p>
 * @method integer getInstanceStatus() 获取<p>业务系统状态</p>
 * @method void setInstanceStatus(integer $InstanceStatus) 设置<p>业务系统状态</p>
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method string getAppName() 获取<p>应用名称</p>
 * @method void setAppName(string $AppName) 设置<p>应用名称</p>
 * @method string getAppType() 获取<p>端类型</p>
 * @method void setAppType(string $AppType) 设置<p>端类型</p>
 * @method integer getAppStatus() 获取<p>应用状态</p>
 * @method void setAppStatus(integer $AppStatus) 设置<p>应用状态</p>
 * @method integer getReportVolume() 获取<p>上报量</p>
 * @method void setReportVolume(integer $ReportVolume) 设置<p>上报量</p>
 * @method float getPercent() 获取<p>占当前结果集比例</p>
 * @method void setPercent(float $Percent) 设置<p>占当前结果集比例</p>
 * @method array getByDate() 获取<p>行趋势</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setByDate(array $ByDate) 设置<p>行趋势</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsageDetailRow extends AbstractModel
{
    /**
     * @var string <p>业务系统 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>业务系统名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>业务系统状态</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var string <p>应用名称</p>
     */
    public $AppName;

    /**
     * @var string <p>端类型</p>
     */
    public $AppType;

    /**
     * @var integer <p>应用状态</p>
     */
    public $AppStatus;

    /**
     * @var integer <p>上报量</p>
     */
    public $ReportVolume;

    /**
     * @var float <p>占当前结果集比例</p>
     */
    public $Percent;

    /**
     * @var array <p>行趋势</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ByDate;

    /**
     * @param string $InstanceId <p>业务系统 ID</p>
     * @param string $InstanceName <p>业务系统名称</p>
     * @param integer $InstanceStatus <p>业务系统状态</p>
     * @param string $AppId <p>应用 ID</p>
     * @param string $AppName <p>应用名称</p>
     * @param string $AppType <p>端类型</p>
     * @param integer $AppStatus <p>应用状态</p>
     * @param integer $ReportVolume <p>上报量</p>
     * @param float $Percent <p>占当前结果集比例</p>
     * @param array $ByDate <p>行趋势</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }

        if (array_key_exists("ReportVolume",$param) and $param["ReportVolume"] !== null) {
            $this->ReportVolume = $param["ReportVolume"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("ByDate",$param) and $param["ByDate"] !== null) {
            $this->ByDate = [];
            foreach ($param["ByDate"] as $key => $value){
                $obj = new UsageTimePoint();
                $obj->deserialize($value);
                array_push($this->ByDate, $obj);
            }
        }
    }
}
