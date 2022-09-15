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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeIndonesiaIDCardOCR返回参数结构体
 *
 * @method string getNIK() 获取证件号码
 * @method void setNIK(string $NIK) 设置证件号码
 * @method string getNama() 获取姓名
 * @method void setNama(string $Nama) 设置姓名
 * @method string getTempatTglLahir() 获取出生地/出生时间
 * @method void setTempatTglLahir(string $TempatTglLahir) 设置出生地/出生时间
 * @method string getJenisKelamin() 获取性别
 * @method void setJenisKelamin(string $JenisKelamin) 设置性别
 * @method string getGolDarah() 获取血型
 * @method void setGolDarah(string $GolDarah) 设置血型
 * @method string getAlamat() 获取地址
 * @method void setAlamat(string $Alamat) 设置地址
 * @method string getRTRW() 获取街道
 * @method void setRTRW(string $RTRW) 设置街道
 * @method string getKelDesa() 获取村
 * @method void setKelDesa(string $KelDesa) 设置村
 * @method string getKecamatan() 获取地区
 * @method void setKecamatan(string $Kecamatan) 设置地区
 * @method string getAgama() 获取宗教信仰
 * @method void setAgama(string $Agama) 设置宗教信仰
 * @method string getStatusPerkawinan() 获取婚姻状况
 * @method void setStatusPerkawinan(string $StatusPerkawinan) 设置婚姻状况
 * @method string getPerkerjaan() 获取职业
 * @method void setPerkerjaan(string $Perkerjaan) 设置职业
 * @method string getKewargaNegaraan() 获取国籍
 * @method void setKewargaNegaraan(string $KewargaNegaraan) 设置国籍
 * @method string getBerlakuHingga() 获取身份证有效期限
 * @method void setBerlakuHingga(string $BerlakuHingga) 设置身份证有效期限
 * @method string getIssuedDate() 获取发证日期
 * @method void setIssuedDate(string $IssuedDate) 设置发证日期
 * @method string getPhoto() 获取人像截图
 * @method void setPhoto(string $Photo) 设置人像截图
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeIndonesiaIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string 证件号码
     */
    public $NIK;

    /**
     * @var string 姓名
     */
    public $Nama;

    /**
     * @var string 出生地/出生时间
     */
    public $TempatTglLahir;

    /**
     * @var string 性别
     */
    public $JenisKelamin;

    /**
     * @var string 血型
     */
    public $GolDarah;

    /**
     * @var string 地址
     */
    public $Alamat;

    /**
     * @var string 街道
     */
    public $RTRW;

    /**
     * @var string 村
     */
    public $KelDesa;

    /**
     * @var string 地区
     */
    public $Kecamatan;

    /**
     * @var string 宗教信仰
     */
    public $Agama;

    /**
     * @var string 婚姻状况
     */
    public $StatusPerkawinan;

    /**
     * @var string 职业
     */
    public $Perkerjaan;

    /**
     * @var string 国籍
     */
    public $KewargaNegaraan;

    /**
     * @var string 身份证有效期限
     */
    public $BerlakuHingga;

    /**
     * @var string 发证日期
     */
    public $IssuedDate;

    /**
     * @var string 人像截图
     */
    public $Photo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NIK 证件号码
     * @param string $Nama 姓名
     * @param string $TempatTglLahir 出生地/出生时间
     * @param string $JenisKelamin 性别
     * @param string $GolDarah 血型
     * @param string $Alamat 地址
     * @param string $RTRW 街道
     * @param string $KelDesa 村
     * @param string $Kecamatan 地区
     * @param string $Agama 宗教信仰
     * @param string $StatusPerkawinan 婚姻状况
     * @param string $Perkerjaan 职业
     * @param string $KewargaNegaraan 国籍
     * @param string $BerlakuHingga 身份证有效期限
     * @param string $IssuedDate 发证日期
     * @param string $Photo 人像截图
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NIK",$param) and $param["NIK"] !== null) {
            $this->NIK = $param["NIK"];
        }

        if (array_key_exists("Nama",$param) and $param["Nama"] !== null) {
            $this->Nama = $param["Nama"];
        }

        if (array_key_exists("TempatTglLahir",$param) and $param["TempatTglLahir"] !== null) {
            $this->TempatTglLahir = $param["TempatTglLahir"];
        }

        if (array_key_exists("JenisKelamin",$param) and $param["JenisKelamin"] !== null) {
            $this->JenisKelamin = $param["JenisKelamin"];
        }

        if (array_key_exists("GolDarah",$param) and $param["GolDarah"] !== null) {
            $this->GolDarah = $param["GolDarah"];
        }

        if (array_key_exists("Alamat",$param) and $param["Alamat"] !== null) {
            $this->Alamat = $param["Alamat"];
        }

        if (array_key_exists("RTRW",$param) and $param["RTRW"] !== null) {
            $this->RTRW = $param["RTRW"];
        }

        if (array_key_exists("KelDesa",$param) and $param["KelDesa"] !== null) {
            $this->KelDesa = $param["KelDesa"];
        }

        if (array_key_exists("Kecamatan",$param) and $param["Kecamatan"] !== null) {
            $this->Kecamatan = $param["Kecamatan"];
        }

        if (array_key_exists("Agama",$param) and $param["Agama"] !== null) {
            $this->Agama = $param["Agama"];
        }

        if (array_key_exists("StatusPerkawinan",$param) and $param["StatusPerkawinan"] !== null) {
            $this->StatusPerkawinan = $param["StatusPerkawinan"];
        }

        if (array_key_exists("Perkerjaan",$param) and $param["Perkerjaan"] !== null) {
            $this->Perkerjaan = $param["Perkerjaan"];
        }

        if (array_key_exists("KewargaNegaraan",$param) and $param["KewargaNegaraan"] !== null) {
            $this->KewargaNegaraan = $param["KewargaNegaraan"];
        }

        if (array_key_exists("BerlakuHingga",$param) and $param["BerlakuHingga"] !== null) {
            $this->BerlakuHingga = $param["BerlakuHingga"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("Photo",$param) and $param["Photo"] !== null) {
            $this->Photo = $param["Photo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
