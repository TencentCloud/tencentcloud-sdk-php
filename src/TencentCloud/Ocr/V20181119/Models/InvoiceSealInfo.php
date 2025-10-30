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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 印章信息
 *
 * @method string getCompanySealMark() 获取是否有公司印章（0：没有，1：有）
 * @method void setCompanySealMark(string $CompanySealMark) 设置是否有公司印章（0：没有，1：有）
 * @method string getSupervisionSealMark() 获取是否有监制印章（0：没有，1：有）
 * @method void setSupervisionSealMark(string $SupervisionSealMark) 设置是否有监制印章（0：没有，1：有）
 * @method array getCompanySealMarkInfo() 获取公司印章信息
 * @method void setCompanySealMarkInfo(array $CompanySealMarkInfo) 设置公司印章信息
 * @method array getSupervisionSealMarkInfo() 获取监制印章信息
 * @method void setSupervisionSealMarkInfo(array $SupervisionSealMarkInfo) 设置监制印章信息
 */
class InvoiceSealInfo extends AbstractModel
{
    /**
     * @var string 是否有公司印章（0：没有，1：有）
     */
    public $CompanySealMark;

    /**
     * @var string 是否有监制印章（0：没有，1：有）
     */
    public $SupervisionSealMark;

    /**
     * @var array 公司印章信息
     */
    public $CompanySealMarkInfo;

    /**
     * @var array 监制印章信息
     */
    public $SupervisionSealMarkInfo;

    /**
     * @param string $CompanySealMark 是否有公司印章（0：没有，1：有）
     * @param string $SupervisionSealMark 是否有监制印章（0：没有，1：有）
     * @param array $CompanySealMarkInfo 公司印章信息
     * @param array $SupervisionSealMarkInfo 监制印章信息
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
        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }

        if (array_key_exists("SupervisionSealMark",$param) and $param["SupervisionSealMark"] !== null) {
            $this->SupervisionSealMark = $param["SupervisionSealMark"];
        }

        if (array_key_exists("CompanySealMarkInfo",$param) and $param["CompanySealMarkInfo"] !== null) {
            $this->CompanySealMarkInfo = $param["CompanySealMarkInfo"];
        }

        if (array_key_exists("SupervisionSealMarkInfo",$param) and $param["SupervisionSealMarkInfo"] !== null) {
            $this->SupervisionSealMarkInfo = $param["SupervisionSealMarkInfo"];
        }
    }
}
