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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetStatisticDataByName请求参数结构体
 *
 * @method string getDeviceName() 获取<p>设备名。若不指定设备，可传&quot;-1&quot;</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名。若不指定设备，可传&quot;-1&quot;</p>
 * @method integer getBeginTime() 获取<p>统计开始时间，单位：s</p>
 * @method void setBeginTime(integer $BeginTime) 设置<p>统计开始时间，单位：s</p>
 * @method integer getEndTime() 获取<p>统计结束时间，单位：s</p>
 * @method void setEndTime(integer $EndTime) 设置<p>统计结束时间，单位：s</p>
 * @method integer getTimeGranularity() 获取<p>时间粒度</p><p>枚举值：</p><ul><li>1： 按小时统计</li><li>2： 按天统计</li><li>3： 按分钟统计</li><li>4： 按5分钟统计</li></ul>
 * @method void setTimeGranularity(integer $TimeGranularity) 设置<p>时间粒度</p><p>枚举值：</p><ul><li>1： 按小时统计</li><li>2： 按天统计</li><li>3： 按分钟统计</li><li>4： 按5分钟统计</li></ul>
 * @method string getAccessRegion() 获取<p>接入区域。取值范围：[&#39;MC&#39;,&#39;AP&#39;,&#39;EU&#39;,&#39;AM&#39;] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。</p>
 * @method void setAccessRegion(string $AccessRegion) 设置<p>接入区域。取值范围：[&#39;MC&#39;,&#39;AP&#39;,&#39;EU&#39;,&#39;AM&#39;] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。</p>
 * @method integer getGatewayType() 获取<p>网关类型。0：公有云网关；1：自有网关。不传默认为0。</p>
 * @method void setGatewayType(integer $GatewayType) 设置<p>网关类型。0：公有云网关；1：自有网关。不传默认为0。</p>
 * @method array getDeviceList() 获取<p>设备名列表，最多10个设备，下载多个设备流量时使用，此时DeviceName可传&quot;-1&quot;</p>
 * @method void setDeviceList(array $DeviceList) 设置<p>设备名列表，最多10个设备，下载多个设备流量时使用，此时DeviceName可传&quot;-1&quot;</p>
 * @method string getGroupId() 获取<p>设备分组ID，若不指定分组则不传，按分组下载数据时使用</p>
 * @method void setGroupId(string $GroupId) 设置<p>设备分组ID，若不指定分组则不传，按分组下载数据时使用</p>
 * @method string getMpApplicationId() 获取<p>应用ID，若不指定应用不填，按应用下载数据时使用</p>
 * @method void setMpApplicationId(string $MpApplicationId) 设置<p>应用ID，若不指定应用不填，按应用下载数据时使用</p>
 */
class GetStatisticDataByNameRequest extends AbstractModel
{
    /**
     * @var string <p>设备名。若不指定设备，可传&quot;-1&quot;</p>
     */
    public $DeviceName;

    /**
     * @var integer <p>统计开始时间，单位：s</p>
     */
    public $BeginTime;

    /**
     * @var integer <p>统计结束时间，单位：s</p>
     */
    public $EndTime;

    /**
     * @var integer <p>时间粒度</p><p>枚举值：</p><ul><li>1： 按小时统计</li><li>2： 按天统计</li><li>3： 按分钟统计</li><li>4： 按5分钟统计</li></ul>
     */
    public $TimeGranularity;

    /**
     * @var string <p>接入区域。取值范围：[&#39;MC&#39;,&#39;AP&#39;,&#39;EU&#39;,&#39;AM&#39;] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。</p>
     */
    public $AccessRegion;

    /**
     * @var integer <p>网关类型。0：公有云网关；1：自有网关。不传默认为0。</p>
     */
    public $GatewayType;

    /**
     * @var array <p>设备名列表，最多10个设备，下载多个设备流量时使用，此时DeviceName可传&quot;-1&quot;</p>
     */
    public $DeviceList;

    /**
     * @var string <p>设备分组ID，若不指定分组则不传，按分组下载数据时使用</p>
     */
    public $GroupId;

    /**
     * @var string <p>应用ID，若不指定应用不填，按应用下载数据时使用</p>
     */
    public $MpApplicationId;

    /**
     * @param string $DeviceName <p>设备名。若不指定设备，可传&quot;-1&quot;</p>
     * @param integer $BeginTime <p>统计开始时间，单位：s</p>
     * @param integer $EndTime <p>统计结束时间，单位：s</p>
     * @param integer $TimeGranularity <p>时间粒度</p><p>枚举值：</p><ul><li>1： 按小时统计</li><li>2： 按天统计</li><li>3： 按分钟统计</li><li>4： 按5分钟统计</li></ul>
     * @param string $AccessRegion <p>接入区域。取值范围：[&#39;MC&#39;,&#39;AP&#39;,&#39;EU&#39;,&#39;AM&#39;] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。</p>
     * @param integer $GatewayType <p>网关类型。0：公有云网关；1：自有网关。不传默认为0。</p>
     * @param array $DeviceList <p>设备名列表，最多10个设备，下载多个设备流量时使用，此时DeviceName可传&quot;-1&quot;</p>
     * @param string $GroupId <p>设备分组ID，若不指定分组则不传，按分组下载数据时使用</p>
     * @param string $MpApplicationId <p>应用ID，若不指定应用不填，按应用下载数据时使用</p>
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TimeGranularity",$param) and $param["TimeGranularity"] !== null) {
            $this->TimeGranularity = $param["TimeGranularity"];
        }

        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("DeviceList",$param) and $param["DeviceList"] !== null) {
            $this->DeviceList = $param["DeviceList"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("MpApplicationId",$param) and $param["MpApplicationId"] !== null) {
            $this->MpApplicationId = $param["MpApplicationId"];
        }
    }
}
