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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLead请求参数结构体
 *
 * @method integer getChannelId() 获取来源ID
 * @method void setChannelId(integer $ChannelId) 设置来源ID
 * @method string getChannelName() 获取来源名称
 * @method void setChannelName(string $ChannelName) 设置来源名称
 * @method integer getCreateTime() 获取创建时间， 单位毫秒
 * @method void setCreateTime(integer $CreateTime) 设置创建时间， 单位毫秒
 * @method integer getSourceType() 获取线索类型：1-400呼入，2-常规留资
 * @method void setSourceType(integer $SourceType) 设置线索类型：1-400呼入，2-常规留资
 * @method integer getDealerId() 获取经销商id
 * @method void setDealerId(integer $DealerId) 设置经销商id
 * @method integer getBrandId() 获取品牌id
 * @method void setBrandId(integer $BrandId) 设置品牌id
 * @method integer getSeriesId() 获取车系id
 * @method void setSeriesId(integer $SeriesId) 设置车系id
 * @method string getCustomerName() 获取客户姓名
 * @method void setCustomerName(string $CustomerName) 设置客户姓名
 * @method string getCustomerPhone() 获取客户手机号
 * @method void setCustomerPhone(string $CustomerPhone) 设置客户手机号
 * @method integer getModelId() 获取车型id
 * @method void setModelId(integer $ModelId) 设置车型id
 * @method integer getCustomerSex() 获取客户性别: 0-未知, 1-男, 2-女
 * @method void setCustomerSex(integer $CustomerSex) 设置客户性别: 0-未知, 1-男, 2-女
 * @method string getSalesName() 获取销售姓名
 * @method void setSalesName(string $SalesName) 设置销售姓名
 * @method string getSalesPhone() 获取销售手机号
 * @method void setSalesPhone(string $SalesPhone) 设置销售手机号
 * @method string getCcName() 获取Cc坐席姓名
 * @method void setCcName(string $CcName) 设置Cc坐席姓名
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class CreateLeadRequest extends AbstractModel
{
    /**
     * @var integer 来源ID
     */
    public $ChannelId;

    /**
     * @var string 来源名称
     */
    public $ChannelName;

    /**
     * @var integer 创建时间， 单位毫秒
     */
    public $CreateTime;

    /**
     * @var integer 线索类型：1-400呼入，2-常规留资
     */
    public $SourceType;

    /**
     * @var integer 经销商id
     */
    public $DealerId;

    /**
     * @var integer 品牌id
     */
    public $BrandId;

    /**
     * @var integer 车系id
     */
    public $SeriesId;

    /**
     * @var string 客户姓名
     */
    public $CustomerName;

    /**
     * @var string 客户手机号
     */
    public $CustomerPhone;

    /**
     * @var integer 车型id
     */
    public $ModelId;

    /**
     * @var integer 客户性别: 0-未知, 1-男, 2-女
     */
    public $CustomerSex;

    /**
     * @var string 销售姓名
     */
    public $SalesName;

    /**
     * @var string 销售手机号
     */
    public $SalesPhone;

    /**
     * @var string Cc坐席姓名
     */
    public $CcName;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param integer $ChannelId 来源ID
     * @param string $ChannelName 来源名称
     * @param integer $CreateTime 创建时间， 单位毫秒
     * @param integer $SourceType 线索类型：1-400呼入，2-常规留资
     * @param integer $DealerId 经销商id
     * @param integer $BrandId 品牌id
     * @param integer $SeriesId 车系id
     * @param string $CustomerName 客户姓名
     * @param string $CustomerPhone 客户手机号
     * @param integer $ModelId 车型id
     * @param integer $CustomerSex 客户性别: 0-未知, 1-男, 2-女
     * @param string $SalesName 销售姓名
     * @param string $SalesPhone 销售手机号
     * @param string $CcName Cc坐席姓名
     * @param string $Remark 备注
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("DealerId",$param) and $param["DealerId"] !== null) {
            $this->DealerId = $param["DealerId"];
        }

        if (array_key_exists("BrandId",$param) and $param["BrandId"] !== null) {
            $this->BrandId = $param["BrandId"];
        }

        if (array_key_exists("SeriesId",$param) and $param["SeriesId"] !== null) {
            $this->SeriesId = $param["SeriesId"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("CustomerPhone",$param) and $param["CustomerPhone"] !== null) {
            $this->CustomerPhone = $param["CustomerPhone"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("CustomerSex",$param) and $param["CustomerSex"] !== null) {
            $this->CustomerSex = $param["CustomerSex"];
        }

        if (array_key_exists("SalesName",$param) and $param["SalesName"] !== null) {
            $this->SalesName = $param["SalesName"];
        }

        if (array_key_exists("SalesPhone",$param) and $param["SalesPhone"] !== null) {
            $this->SalesPhone = $param["SalesPhone"];
        }

        if (array_key_exists("CcName",$param) and $param["CcName"] !== null) {
            $this->CcName = $param["CcName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
