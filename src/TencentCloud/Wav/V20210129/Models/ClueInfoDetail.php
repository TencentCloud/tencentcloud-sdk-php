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
 * 线索信息详情
 *
 * @method string getClueId() 获取线索id，线索唯一识别编码
 * @method void setClueId(string $ClueId) 设置线索id，线索唯一识别编码
 * @method string getDealerId() 获取接待客户经销商顾问所属组织id,多个组织使用逗号分割
 * @method void setDealerId(string $DealerId) 设置接待客户经销商顾问所属组织id,多个组织使用逗号分割
 * @method integer getEnquireTime() 获取线索获取时间，用户添加企业微信时间，单位是秒
 * @method void setEnquireTime(integer $EnquireTime) 设置线索获取时间，用户添加企业微信时间，单位是秒
 * @method string getUnionId() 获取客户在微信生态中唯一识别码
 * @method void setUnionId(string $UnionId) 设置客户在微信生态中唯一识别码
 * @method string getName() 获取微信昵称
 * @method void setName(string $Name) 设置微信昵称
 * @method string getPhone() 获取联系方式
 * @method void setPhone(string $Phone) 设置联系方式
 * @method string getSeriesCode() 获取车系编号
 * @method void setSeriesCode(string $SeriesCode) 设置车系编号
 * @method string getModelCode() 获取车型编号
 * @method void setModelCode(string $ModelCode) 设置车型编号
 * @method string getProvinceCode() 获取省份编号
 * @method void setProvinceCode(string $ProvinceCode) 设置省份编号
 * @method string getCityCode() 获取城市编号
 * @method void setCityCode(string $CityCode) 设置城市编号
 * @method string getSalesName() 获取顾问名称
 * @method void setSalesName(string $SalesName) 设置顾问名称
 * @method string getSalesPhone() 获取顾问电话
 * @method void setSalesPhone(string $SalesPhone) 设置顾问电话
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getTagList() 获取标签
 * @method void setTagList(array $TagList) 设置标签
 * @method string getUserName() 获取客户姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置客户姓名
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClueInfoDetail extends AbstractModel
{
    /**
     * @var string 线索id，线索唯一识别编码
     */
    public $ClueId;

    /**
     * @var string 接待客户经销商顾问所属组织id,多个组织使用逗号分割
     */
    public $DealerId;

    /**
     * @var integer 线索获取时间，用户添加企业微信时间，单位是秒
     */
    public $EnquireTime;

    /**
     * @var string 客户在微信生态中唯一识别码
     */
    public $UnionId;

    /**
     * @var string 微信昵称
     */
    public $Name;

    /**
     * @var string 联系方式
     */
    public $Phone;

    /**
     * @var string 车系编号
     */
    public $SeriesCode;

    /**
     * @var string 车型编号
     */
    public $ModelCode;

    /**
     * @var string 省份编号
     */
    public $ProvinceCode;

    /**
     * @var string 城市编号
     */
    public $CityCode;

    /**
     * @var string 顾问名称
     */
    public $SalesName;

    /**
     * @var string 顾问电话
     */
    public $SalesPhone;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 标签
     */
    public $TagList;

    /**
     * @var string 客户姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @param string $ClueId 线索id，线索唯一识别编码
     * @param string $DealerId 接待客户经销商顾问所属组织id,多个组织使用逗号分割
     * @param integer $EnquireTime 线索获取时间，用户添加企业微信时间，单位是秒
     * @param string $UnionId 客户在微信生态中唯一识别码
     * @param string $Name 微信昵称
     * @param string $Phone 联系方式
     * @param string $SeriesCode 车系编号
     * @param string $ModelCode 车型编号
     * @param string $ProvinceCode 省份编号
     * @param string $CityCode 城市编号
     * @param string $SalesName 顾问名称
     * @param string $SalesPhone 顾问电话
     * @param string $Remark 备注
     * @param array $TagList 标签
     * @param string $UserName 客户姓名
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
        if (array_key_exists("ClueId",$param) and $param["ClueId"] !== null) {
            $this->ClueId = $param["ClueId"];
        }

        if (array_key_exists("DealerId",$param) and $param["DealerId"] !== null) {
            $this->DealerId = $param["DealerId"];
        }

        if (array_key_exists("EnquireTime",$param) and $param["EnquireTime"] !== null) {
            $this->EnquireTime = $param["EnquireTime"];
        }

        if (array_key_exists("UnionId",$param) and $param["UnionId"] !== null) {
            $this->UnionId = $param["UnionId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("SeriesCode",$param) and $param["SeriesCode"] !== null) {
            $this->SeriesCode = $param["SeriesCode"];
        }

        if (array_key_exists("ModelCode",$param) and $param["ModelCode"] !== null) {
            $this->ModelCode = $param["ModelCode"];
        }

        if (array_key_exists("ProvinceCode",$param) and $param["ProvinceCode"] !== null) {
            $this->ProvinceCode = $param["ProvinceCode"];
        }

        if (array_key_exists("CityCode",$param) and $param["CityCode"] !== null) {
            $this->CityCode = $param["CityCode"];
        }

        if (array_key_exists("SalesName",$param) and $param["SalesName"] !== null) {
            $this->SalesName = $param["SalesName"];
        }

        if (array_key_exists("SalesPhone",$param) and $param["SalesPhone"] !== null) {
            $this->SalesPhone = $param["SalesPhone"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
