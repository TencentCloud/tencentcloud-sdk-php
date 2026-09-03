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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceScaleOutInstance请求参数结构体
 *
 * @method string getTimeUnit() 获取<p>扩容的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>扩容的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
 * @method integer getTimeSpan() 获取<p>扩容的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>扩容的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
 * @method integer getZoneId() 获取<p>实例所属的可用区ID，例如100003。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/213/15707">DescribeZones</a> 的返回值中的ZoneId字段来获取。</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>实例所属的可用区ID，例如100003。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/213/15707">DescribeZones</a> 的返回值中的ZoneId字段来获取。</p>
 * @method integer getPayMode() 获取<p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
 * @method void setPayMode(integer $PayMode) 设置<p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method integer getCoreCount() 获取<p>扩容的Core节点数量。</p>
 * @method void setCoreCount(integer $CoreCount) 设置<p>扩容的Core节点数量。</p>
 * @method integer getTaskCount() 获取<p>扩容的Task节点数量。</p>
 * @method void setTaskCount(integer $TaskCount) 设置<p>扩容的Task节点数量。</p>
 * @method string getCurrency() 获取<p>货币种类。取值范围：</p><li>CNY：表示人民币。</li>
 * @method void setCurrency(string $Currency) 设置<p>货币种类。取值范围：</p><li>CNY：表示人民币。</li>
 * @method integer getRouterCount() 获取<p>扩容的Router节点数量。</p>
 * @method void setRouterCount(integer $RouterCount) 设置<p>扩容的Router节点数量。</p>
 * @method integer getMasterCount() 获取<p>扩容的Master节点数量。</p>
 * @method void setMasterCount(integer $MasterCount) 设置<p>扩容的Master节点数量。</p>
 * @method string getResourceBaseType() 获取<p>类型为ComputeResource和EMR以及默认，默认为EMR</p>
 * @method void setResourceBaseType(string $ResourceBaseType) 设置<p>类型为ComputeResource和EMR以及默认，默认为EMR</p>
 * @method string getComputeResourceId() 获取<p>计算资源id</p>
 * @method void setComputeResourceId(string $ComputeResourceId) 设置<p>计算资源id</p>
 * @method string getHardwareResourceType() 获取<p>扩容资源类型</p>
 * @method void setHardwareResourceType(string $HardwareResourceType) 设置<p>扩容资源类型</p>
 * @method string getNodeGroupId() 获取<p>节点组ID</p>
 * @method void setNodeGroupId(string $NodeGroupId) 设置<p>节点组ID</p>
 */
class InquiryPriceScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>扩容的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
     */
    public $TimeUnit;

    /**
     * @var integer <p>扩容的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
     */
    public $TimeSpan;

    /**
     * @var integer <p>实例所属的可用区ID，例如100003。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/213/15707">DescribeZones</a> 的返回值中的ZoneId字段来获取。</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
     */
    public $PayMode;

    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>扩容的Core节点数量。</p>
     */
    public $CoreCount;

    /**
     * @var integer <p>扩容的Task节点数量。</p>
     */
    public $TaskCount;

    /**
     * @var string <p>货币种类。取值范围：</p><li>CNY：表示人民币。</li>
     */
    public $Currency;

    /**
     * @var integer <p>扩容的Router节点数量。</p>
     */
    public $RouterCount;

    /**
     * @var integer <p>扩容的Master节点数量。</p>
     */
    public $MasterCount;

    /**
     * @var string <p>类型为ComputeResource和EMR以及默认，默认为EMR</p>
     */
    public $ResourceBaseType;

    /**
     * @var string <p>计算资源id</p>
     */
    public $ComputeResourceId;

    /**
     * @var string <p>扩容资源类型</p>
     */
    public $HardwareResourceType;

    /**
     * @var string <p>节点组ID</p>
     */
    public $NodeGroupId;

    /**
     * @param string $TimeUnit <p>扩容的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
     * @param integer $TimeSpan <p>扩容的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
     * @param integer $ZoneId <p>实例所属的可用区ID，例如100003。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/213/15707">DescribeZones</a> 的返回值中的ZoneId字段来获取。</p>
     * @param integer $PayMode <p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
     * @param string $InstanceId <p>实例ID。</p>
     * @param integer $CoreCount <p>扩容的Core节点数量。</p>
     * @param integer $TaskCount <p>扩容的Task节点数量。</p>
     * @param string $Currency <p>货币种类。取值范围：</p><li>CNY：表示人民币。</li>
     * @param integer $RouterCount <p>扩容的Router节点数量。</p>
     * @param integer $MasterCount <p>扩容的Master节点数量。</p>
     * @param string $ResourceBaseType <p>类型为ComputeResource和EMR以及默认，默认为EMR</p>
     * @param string $ComputeResourceId <p>计算资源id</p>
     * @param string $HardwareResourceType <p>扩容资源类型</p>
     * @param string $NodeGroupId <p>节点组ID</p>
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
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("RouterCount",$param) and $param["RouterCount"] !== null) {
            $this->RouterCount = $param["RouterCount"];
        }

        if (array_key_exists("MasterCount",$param) and $param["MasterCount"] !== null) {
            $this->MasterCount = $param["MasterCount"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }

        if (array_key_exists("NodeGroupId",$param) and $param["NodeGroupId"] !== null) {
            $this->NodeGroupId = $param["NodeGroupId"];
        }
    }
}
