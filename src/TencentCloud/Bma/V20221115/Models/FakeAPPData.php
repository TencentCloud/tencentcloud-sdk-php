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
 * 仿冒应用数据
 *
 * @method integer getFakeAPPId() 获取仿冒应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeAPPId(integer $FakeAPPId) 设置仿冒应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrandName() 获取品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrandName(string $BrandName) 设置品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrigin() 获取仿冒来源：0-系统检测 1-人工举报
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrigin(integer $Origin) 设置仿冒来源：0-系统检测 1-人工举报
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFakeAPPName() 获取仿冒应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeAPPName(string $FakeAPPName) 设置仿冒应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFakeAPPPackageName() 获取仿冒应用包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeAPPPackageName(string $FakeAPPPackageName) 设置仿冒应用包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFakeAPPCert() 获取仿冒应用证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeAPPCert(string $FakeAPPCert) 设置仿冒应用证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFakeAPPSize() 获取仿冒应用大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeAPPSize(string $FakeAPPSize) 设置仿冒应用大小
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
 * @method string getDownloadWay() 获取app来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadWay(string $DownloadWay) 设置app来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsertTime() 获取新增时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(string $InsertTime) 设置新增时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadCosURL() 获取App下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadCosURL(string $DownloadCosURL) 设置App下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCertificationStatus() 获取资质证明状态:0-不可用 1-可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificationStatus(integer $CertificationStatus) 设置资质证明状态:0-不可用 1-可用
注意：此字段可能返回 null，表示取不到有效值。
 */
class FakeAPPData extends AbstractModel
{
    /**
     * @var integer 仿冒应用id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FakeAPPId;

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
     * @var string 仿冒应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FakeAPPName;

    /**
     * @var string 仿冒应用包名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FakeAPPPackageName;

    /**
     * @var string 仿冒应用证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FakeAPPCert;

    /**
     * @var string 仿冒应用大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FakeAPPSize;

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
     * @var string app来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadWay;

    /**
     * @var string 新增时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @var string App下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadCosURL;

    /**
     * @var integer 资质证明状态:0-不可用 1-可用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificationStatus;

    /**
     * @param integer $FakeAPPId 仿冒应用id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrandName 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Origin 仿冒来源：0-系统检测 1-人工举报
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FakeAPPName 仿冒应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FakeAPPPackageName 仿冒应用包名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FakeAPPCert 仿冒应用证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FakeAPPSize 仿冒应用大小
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
     * @param string $DownloadWay app来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsertTime 新增时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadCosURL App下载链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CertificationStatus 资质证明状态:0-不可用 1-可用
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
        if (array_key_exists("FakeAPPId",$param) and $param["FakeAPPId"] !== null) {
            $this->FakeAPPId = $param["FakeAPPId"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("FakeAPPName",$param) and $param["FakeAPPName"] !== null) {
            $this->FakeAPPName = $param["FakeAPPName"];
        }

        if (array_key_exists("FakeAPPPackageName",$param) and $param["FakeAPPPackageName"] !== null) {
            $this->FakeAPPPackageName = $param["FakeAPPPackageName"];
        }

        if (array_key_exists("FakeAPPCert",$param) and $param["FakeAPPCert"] !== null) {
            $this->FakeAPPCert = $param["FakeAPPCert"];
        }

        if (array_key_exists("FakeAPPSize",$param) and $param["FakeAPPSize"] !== null) {
            $this->FakeAPPSize = $param["FakeAPPSize"];
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

        if (array_key_exists("DownloadWay",$param) and $param["DownloadWay"] !== null) {
            $this->DownloadWay = $param["DownloadWay"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("DownloadCosURL",$param) and $param["DownloadCosURL"] !== null) {
            $this->DownloadCosURL = $param["DownloadCosURL"];
        }

        if (array_key_exists("CertificationStatus",$param) and $param["CertificationStatus"] !== null) {
            $this->CertificationStatus = $param["CertificationStatus"];
        }
    }
}
