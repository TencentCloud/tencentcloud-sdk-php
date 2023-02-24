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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仿冒网址数据
 *
 * @method integer getFakeURLId() 获取仿冒网址id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeURLId(integer $FakeURLId) 设置仿冒网址id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrandName() 获取品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrandName(string $BrandName) 设置品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrigin() 获取仿冒来源：0-系统检测 1-人工举报
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrigin(integer $Origin) 设置仿冒来源：0-系统检测 1-人工举报
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFakeURL() 获取仿冒网址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeURL(string $FakeURL) 设置仿冒网址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFakeDomain() 获取仿冒域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeDomain(string $FakeDomain) 设置仿冒域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeat() 获取热度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeat(integer $Heat) 设置热度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockStatus() 获取协助处置状态：0-未处置 1-处置中 2-处置成功 3-处置失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockStatus(integer $BlockStatus) 设置协助处置状态：0-未处置 1-处置中 2-处置成功 3-处置失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockNote() 获取协助处置状态说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockNote(string $BlockNote) 设置协助处置状态说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOfflineStatus() 获取关停状态：0-未关停 1-关停中 2-关停成功 3-关停失败 4-重复上架
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineStatus(integer $OfflineStatus) 设置关停状态：0-未关停 1-关停中 2-关停成功 3-关停失败 4-重复上架
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOfflineNote() 获取关停状态说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineNote(string $OfflineNote) 设置关停状态说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIPLocation() 获取ip地理位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPLocation(string $IPLocation) 设置ip地理位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebCompany() 获取网站所属单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebCompany(string $WebCompany) 设置网站所属单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebAttribute() 获取网站性质
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebAttribute(string $WebAttribute) 设置网站性质
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebName() 获取网站名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebName(string $WebName) 设置网站名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebICP() 获取备案号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebICP(string $WebICP) 设置备案号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebCreateTime() 获取网站创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebCreateTime(string $WebCreateTime) 设置网站创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebExpireTime() 获取网站过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebExpireTime(string $WebExpireTime) 设置网站过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsertTime() 获取新增时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(string $InsertTime) 设置新增时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCertificationStatus() 获取资质证明状态：0-不可用 1-可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificationStatus(integer $CertificationStatus) 设置资质证明状态：0-不可用 1-可用
注意：此字段可能返回 null，表示取不到有效值。
 */
class FakeURLData extends AbstractModel
{
    /**
     * @var integer 仿冒网址id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FakeURLId;

    /**
     * @var string 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrandName;

    /**
     * @var integer 仿冒来源：0-系统检测 1-人工举报
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Origin;

    /**
     * @var string 仿冒网址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FakeURL;

    /**
     * @var string 仿冒域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FakeDomain;

    /**
     * @var integer 热度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Heat;

    /**
     * @var integer 协助处置状态：0-未处置 1-处置中 2-处置成功 3-处置失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockStatus;

    /**
     * @var string 协助处置状态说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockNote;

    /**
     * @var integer 关停状态：0-未关停 1-关停中 2-关停成功 3-关停失败 4-重复上架
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineStatus;

    /**
     * @var string 关停状态说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineNote;

    /**
     * @var string ip地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var string ip地理位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPLocation;

    /**
     * @var string 网站所属单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebCompany;

    /**
     * @var string 网站性质
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebAttribute;

    /**
     * @var string 网站名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebName;

    /**
     * @var string 备案号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebICP;

    /**
     * @var string 网站创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebCreateTime;

    /**
     * @var string 网站过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebExpireTime;

    /**
     * @var string 新增时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @var integer 资质证明状态：0-不可用 1-可用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificationStatus;

    /**
     * @param integer $FakeURLId 仿冒网址id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrandName 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Origin 仿冒来源：0-系统检测 1-人工举报
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FakeURL 仿冒网址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FakeDomain 仿冒域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Heat 热度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockStatus 协助处置状态：0-未处置 1-处置中 2-处置成功 3-处置失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockNote 协助处置状态说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OfflineStatus 关停状态：0-未关停 1-关停中 2-关停成功 3-关停失败 4-重复上架
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OfflineNote 关停状态说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP ip地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IPLocation ip地理位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebCompany 网站所属单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebAttribute 网站性质
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebName 网站名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebICP 备案号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebCreateTime 网站创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebExpireTime 网站过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsertTime 新增时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CertificationStatus 资质证明状态：0-不可用 1-可用
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
        if (array_key_exists("FakeURLId",$param) and $param["FakeURLId"] !== null) {
            $this->FakeURLId = $param["FakeURLId"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("FakeURL",$param) and $param["FakeURL"] !== null) {
            $this->FakeURL = $param["FakeURL"];
        }

        if (array_key_exists("FakeDomain",$param) and $param["FakeDomain"] !== null) {
            $this->FakeDomain = $param["FakeDomain"];
        }

        if (array_key_exists("Heat",$param) and $param["Heat"] !== null) {
            $this->Heat = $param["Heat"];
        }

        if (array_key_exists("BlockStatus",$param) and $param["BlockStatus"] !== null) {
            $this->BlockStatus = $param["BlockStatus"];
        }

        if (array_key_exists("BlockNote",$param) and $param["BlockNote"] !== null) {
            $this->BlockNote = $param["BlockNote"];
        }

        if (array_key_exists("OfflineStatus",$param) and $param["OfflineStatus"] !== null) {
            $this->OfflineStatus = $param["OfflineStatus"];
        }

        if (array_key_exists("OfflineNote",$param) and $param["OfflineNote"] !== null) {
            $this->OfflineNote = $param["OfflineNote"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("IPLocation",$param) and $param["IPLocation"] !== null) {
            $this->IPLocation = $param["IPLocation"];
        }

        if (array_key_exists("WebCompany",$param) and $param["WebCompany"] !== null) {
            $this->WebCompany = $param["WebCompany"];
        }

        if (array_key_exists("WebAttribute",$param) and $param["WebAttribute"] !== null) {
            $this->WebAttribute = $param["WebAttribute"];
        }

        if (array_key_exists("WebName",$param) and $param["WebName"] !== null) {
            $this->WebName = $param["WebName"];
        }

        if (array_key_exists("WebICP",$param) and $param["WebICP"] !== null) {
            $this->WebICP = $param["WebICP"];
        }

        if (array_key_exists("WebCreateTime",$param) and $param["WebCreateTime"] !== null) {
            $this->WebCreateTime = $param["WebCreateTime"];
        }

        if (array_key_exists("WebExpireTime",$param) and $param["WebExpireTime"] !== null) {
            $this->WebExpireTime = $param["WebExpireTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("CertificationStatus",$param) and $param["CertificationStatus"] !== null) {
            $this->CertificationStatus = $param["CertificationStatus"];
        }
    }
}
