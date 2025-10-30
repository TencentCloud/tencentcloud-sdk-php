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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品明细
 *
 * @method integer getTimeSpan() 获取时间间隔
 * @method void setTimeSpan(integer $TimeSpan) 设置时间间隔
 * @method string getTimeUnit() 获取单位，支持m、y、d
 * @method void setTimeUnit(string $TimeUnit) 设置单位，支持m、y、d
 * @method string getProductCode() 获取产品码
 * @method void setProductCode(string $ProductCode) 设置产品码
 * @method string getSubProductCode() 获取二级产品码
 * @method void setSubProductCode(string $SubProductCode) 设置二级产品码
 * @method integer getPid() 获取计费策略id
 * @method void setPid(integer $Pid) 设置计费策略id
 * @method array getProductInfo() 获取waf产品码
 * @method void setProductInfo(array $ProductInfo) 设置waf产品码
 * @method string getInstanceName() 获取waf实例名
 * @method void setInstanceName(string $InstanceName) 设置waf实例名
 * @method integer getElasticQps() 获取QPS数量
 * @method void setElasticQps(integer $ElasticQps) 设置QPS数量
 * @method integer getFlexBill() 获取弹性账单
 * @method void setFlexBill(integer $FlexBill) 设置弹性账单
 * @method integer getAutoRenewFlag() 获取1:自动续费，0:不自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置1:自动续费，0:不自动续费
 * @method integer getRealRegion() 获取waf购买的实际地域信息
 * @method void setRealRegion(integer $RealRegion) 设置waf购买的实际地域信息
 * @method string getType() 获取Waf实例对应的二级产品码
 * @method void setType(string $Type) 设置Waf实例对应的二级产品码
 * @method array getLabelTypes() 获取计费细项标签数组
 * @method void setLabelTypes(array $LabelTypes) 设置计费细项标签数组
 * @method array getLabelCounts() 获取计费细项标签数量，一般和SvLabelType一一对应
 * @method void setLabelCounts(array $LabelCounts) 设置计费细项标签数量，一般和SvLabelType一一对应
 * @method string getCurDeadline() 获取变配使用，实例到期时间
 * @method void setCurDeadline(string $CurDeadline) 设置变配使用，实例到期时间
 * @method string getInstanceId() 获取对存在的实例购买bot 或api 安全
 * @method void setInstanceId(string $InstanceId) 设置对存在的实例购买bot 或api 安全
 */
class GoodsDetail extends AbstractModel
{
    /**
     * @var integer 时间间隔
     */
    public $TimeSpan;

    /**
     * @var string 单位，支持m、y、d
     */
    public $TimeUnit;

    /**
     * @var string 产品码
     */
    public $ProductCode;

    /**
     * @var string 二级产品码
     */
    public $SubProductCode;

    /**
     * @var integer 计费策略id
     */
    public $Pid;

    /**
     * @var array waf产品码
     */
    public $ProductInfo;

    /**
     * @var string waf实例名
     */
    public $InstanceName;

    /**
     * @var integer QPS数量
     */
    public $ElasticQps;

    /**
     * @var integer 弹性账单
     */
    public $FlexBill;

    /**
     * @var integer 1:自动续费，0:不自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer waf购买的实际地域信息
     */
    public $RealRegion;

    /**
     * @var string Waf实例对应的二级产品码
     */
    public $Type;

    /**
     * @var array 计费细项标签数组
     */
    public $LabelTypes;

    /**
     * @var array 计费细项标签数量，一般和SvLabelType一一对应
     */
    public $LabelCounts;

    /**
     * @var string 变配使用，实例到期时间
     */
    public $CurDeadline;

    /**
     * @var string 对存在的实例购买bot 或api 安全
     */
    public $InstanceId;

    /**
     * @param integer $TimeSpan 时间间隔
     * @param string $TimeUnit 单位，支持m、y、d
     * @param string $ProductCode 产品码
     * @param string $SubProductCode 二级产品码
     * @param integer $Pid 计费策略id
     * @param array $ProductInfo waf产品码
     * @param string $InstanceName waf实例名
     * @param integer $ElasticQps QPS数量
     * @param integer $FlexBill 弹性账单
     * @param integer $AutoRenewFlag 1:自动续费，0:不自动续费
     * @param integer $RealRegion waf购买的实际地域信息
     * @param string $Type Waf实例对应的二级产品码
     * @param array $LabelTypes 计费细项标签数组
     * @param array $LabelCounts 计费细项标签数量，一般和SvLabelType一一对应
     * @param string $CurDeadline 变配使用，实例到期时间
     * @param string $InstanceId 对存在的实例购买bot 或api 安全
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("ProductInfo",$param) and $param["ProductInfo"] !== null) {
            $this->ProductInfo = [];
            foreach ($param["ProductInfo"] as $key => $value){
                $obj = new ProductInfo();
                $obj->deserialize($value);
                array_push($this->ProductInfo, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ElasticQps",$param) and $param["ElasticQps"] !== null) {
            $this->ElasticQps = $param["ElasticQps"];
        }

        if (array_key_exists("FlexBill",$param) and $param["FlexBill"] !== null) {
            $this->FlexBill = $param["FlexBill"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("RealRegion",$param) and $param["RealRegion"] !== null) {
            $this->RealRegion = $param["RealRegion"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LabelTypes",$param) and $param["LabelTypes"] !== null) {
            $this->LabelTypes = $param["LabelTypes"];
        }

        if (array_key_exists("LabelCounts",$param) and $param["LabelCounts"] !== null) {
            $this->LabelCounts = $param["LabelCounts"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
